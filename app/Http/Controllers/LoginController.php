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
        if(Session::get('session_logged_in') == null)
        return view('users.loginRegister');
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
        if(DB::table('users')->where('username', $request->username)->first()){
            return redirect()->back()->with('dupticateaccount', 'Tài khoản đã tồn tại!');
        }
        $user = new User;
        //dd($user);
        $user->username = $request->username;
        $user->password = Hash::make($request->password);
        $user->fullname = $request->fullname;
        $user->birthday = $request->birthday;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->email = $request->email;
        $user->vip = 0;
        $user->status = 1;
        $user->role = 3;
        $user->confirmation = 0;
        $user->save();
        //return Redirect::to('layouts.home',compact('message'));
        $input = $request->email;
        $data = array('email'=>$input);
        Mail::send(['html'=>'users.templateEmail'],$data, function($message) use ($data){
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
        if(Auth::attempt($users)){
            Session::put('session_logged_in', DB::table('users')->where('username', $request->username)->first());
            return redirect('/');
        } else {
            return redirect()->back()->with('invalidaccount', 'Tài khoản hoặc mật khẩu không chính xác!');
        }
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
