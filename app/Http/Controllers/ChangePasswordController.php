<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Hash;

class ChangePasswordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('users.changepass');
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
        $user = DB::select("select username, password from users where username = '" . $request->username . "'");
        if(count($user) == 1){
            if($request->new_pwd === $request->cf_new_pwd){ //compare new_pass & cf_new_pass
                if(Hash::check($request->pwd, $user[0]->password) == true) { //compare pass and hashedpass
                    $pwd = Hash::make($request->new_pwd);
                    $user = DB::table('users')->where('username', $user[0]->username)->update(['password'=>$pwd]);
                    Session::forget('session_logged_in');
                    return redirect()->back()->with('success', 'Đổi mật khẩu thành công vui lòng đăng nhập lại!');
                }
                return redirect()->back()->with('not_right_pass', 'Mật khẩu không chính xác!');
            }
            return redirect()->back()->with('new_pass_not_same', 'Xác nhận mật khẩu mới không trùng khớp!');
        }
        return redirect()->back()->with('noaccount', 'Tài khoản hoặc mật khẩu không chính xác!');
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
