<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use DB;
use Session;
use Mail;
use Hash;
use App\User;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Session::forget('session_logged_in');
        if(Session::get('session_logged_in') == null){
            $stringSuccessChangePass['stringSuccessChangePass'] = null;
            if(Session::has('string')){
                $stringSuccessChangePass['stringSuccessChangePass'] = Session::get('string')[0];
                Session::forget('string');
                return view('users.loginRegister')->with($stringSuccessChangePass);
            }
            return view('users.loginRegister')->with($stringSuccessChangePass);
        }
        else return redirect('/');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //users.loginRegister
        $username = trim($request->username, " ");
        $email = strtolower($request->email);
        $time = (time() + 30) * 1000;
        $isUserStatusActive = DB::select("select * from users where (username='". $username."' or email='" . $email . "') and status = 1");
        if(count($isUserStatusActive) >= 1){
            if(count(DB::select("select * from users where username='". $username."' and status = 1")) >=  1){
                return redirect()->back()->with('dupticateaccount', 'Tài khoản đã tồn tại!');
            }
            if(count(DB::select("select * from users where email='" . $email . "' and status = 1")) >= 1){
                return redirect()->back()->with('dupticateemail', 'Email đã tồn tại!');
            }
        }
        $isUserStatusNonActive = DB::select("select * from users where (username='". $username."' or email='" . $email . "') and status = 0");
        if(count($isUserStatusNonActive) == 0 && count($isUserStatusActive) == 0){
            $user = new User;
            //dd($user);
            $user->username = $username;
            $user->password = Hash::make($request->password);
            $user->fullname = $request->fullname;
            $user->birthday = $request->birthday;
            $user->phone = $request->phone;
            $user->address = $request->address;
            $user->email = $request->email;
            $user->vip = 0;
            $user->status = 0;
            $user->expired_verify_email = $time;
            $user->role = 3;
            $user->confirmation = 0;
            $user->save();
        }
        if(count($isUserStatusNonActive) == 1){
            $isUserEmail = DB::select("select * from users where (email='" . $email . "') and status = 0");
            if(count($isUserEmail) == 0){
                DB::update("update users set email = '" . $email ."' where username = '" . $username . "'");
            }
            DB::update("update users set expired_verify_email = " . $time ." where email = '" . $email . "'");
        }
        //return Redirect::to('layouts.home',compact('message'));
        $input = $request->email;
        $data = array('emailto'=>$input);
        Mail::send(['html'=>'templateEmail.templateEmail'],$data, function($message) use ($data){
            foreach($data as $d)
            $message->to($d, '')->subject('Xác thực email');
            
            $message->from('noreply.sharingroom@gmail.com', "noreply.sharingroom@gmail.com");
        });
        return back()->with('popup_success_register', ' ');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //123@Ab_A123b@!.
        //$request->session()->forget($request->username);
        //dd(DB::table('users')->where('username', 'webmaster')->first());
        $users = $request->only('username', 'password');
        $user = DB::table('users')->where('username', $request->username)->first();
        if($user->status == 1){
            if(Auth::attempt($users)){
                Session::put('session_logged_in', DB::table('users')->where('username', $request->username)->first());
                return redirect('/');
            } else {
                return redirect()->back()->with('invalidaccount', 'Tài khoản hoặc mật khẩu không chính xác!');
            }
        }
        return redirect()->back()->with('invalidaccount', 'Tài khoản hoặc mật khẩu không chính xác!');
    }

    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
