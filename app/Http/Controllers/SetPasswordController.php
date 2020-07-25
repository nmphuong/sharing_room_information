<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Hash;
use DB;

class SetPasswordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $expiredForgotword['expiredForgotword'] = false;
        $expiredEmails['expiredEmails'] = false;
        $notFoundPage['notFoundPage'] = false;
        if(Session::has('fg_pwdstr')){
            $fullname['fullname'] = Session::get('fg_pwdstr')[0];
            return view('users.resetpassword')->with($fullname);
        }
        $notFoundPage['notFoundPage'] = true;
        return view("not_found.page_not_found")->with($expiredForgotword)->with($expiredEmails)->with($notFoundPage); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $expiredForgotword['expiredForgotword'] = false;
        $expiredEmails['expiredEmails'] = false;
        $notFoundPage['notFoundPage'] = false;
        if(Session::has('fg_pwdstr')){
            if($request->password === $request->repassword){
                $pwd = Hash::make($request->password);
                $expiredForgot = time() * 1000;
                $email = Session::get('fg_pwdstr')[1];
                $user = DB::select("select username, email, expired_verify_forgotpass from users where email = '" . $email . "'");
                if(($user[0]->expired_verify_forgotpass - $expiredForgot) >= 0){
                    $user = DB::table('users')->where('email', $email)->update(['expired_verify_forgotpass' => 0, 'password'=>$pwd]);
                    Session::forget('fg_pwdstr');
                    $string = ['Đổi mật khẩu thành công!'];
                    Session::put('string', $string);
                    return redirect('/login');
                }
                $expiredEmails['expiredEmails'] = true;
                return view("not_found.page_not_found")->with($expiredForgotword)->with($expiredEmails)->with($notFoundPage);
            }
            return redirect()->back()->with('comparepass', 'Mật khẩu không trùng khớp!');
        }
        $notFoundPage['notFoundPage'] = true;
        return view("not_found.page_not_found")->with($expiredForgotword)->with($expiredEmails)->with($notFoundPage); 
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
