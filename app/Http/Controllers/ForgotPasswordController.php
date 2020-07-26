<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Hash;
use DB;
use App\User;
use Session;

class ForgotPasswordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('users.forgotpass');
    }

    public function sendmail(Request $request)
    {
        $username = trim($request->username, " ");
        $email = strtolower($request->email);
        $time = (time() + 1800) * 1000;
        $isUserStatusActive = DB::select("select * from users where (username='". $username."' and email='" . $email . "') and status = 1");
        if(count($isUserStatusActive) == 1){
            $user = DB::table('users')->where('email', $email)->update(['expired_verify_forgotpass' => $time]);
            $input = strtolower($request->email);
            $data = array('emailto'=>$input);
            Mail::send(['html'=>'templateEmail.templateEmailForgotPassword'],$data, function($message) use ($data){
                foreach($data as $d)
                $message->to($d, '')->subject('Quên mật khẩu');
                
                $message->from('noreply.sharingroom@gmail.com', "noreply.sharingroom@gmail.com");
            });
            return redirect()->back()->with('success', 'Gửi thành công vui lòng kiểm tra email!');;
        }
        return redirect()->back()->with('error', 'Tài khoản hoặc email không tồn tại!');;
    }

    public function resetpass(Request $request)
    {
        $email = base64_decode($request->em);
        $user = DB::table('users')->where('email', $email)->first();
        $expiredForgot = time() * 1000;
        $expiredForgotword['expiredForgotword'] = false;
        $expiredEmails['expiredEmails'] = false;
        $notFoundPage['notFoundPage'] = false;
        $time = (time() + 1800) * 1000;
        $data = [$user->fullname, $email, $user->username];
        Session::put('fg_pwdstr', $data);
        
        if(($user->expired_verify_forgotpass - $expiredForgot) >= 0){
            $user = DB::table('users')->where('email', $email)->update(['expired_verify_forgotpass' => $time]);
            return redirect('/resetpassword');
            //return redirect('/resetpassword')->with('datafullname', $datafullname)->with('datausername', $datausername);
        }
        else {
            $expiredEmails['expiredForgotword'] = true;
            return view("not_found.page_not_found")->with($expiredForgotword)->with($expiredEmails)->with($notFoundPage);
        }
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
