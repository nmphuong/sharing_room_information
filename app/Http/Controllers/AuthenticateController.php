<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\User;

class AuthenticateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $email = base64_decode($request->em);
        $user = DB::table('users')->where('email', $email)->first();
        $expiredEmail = time() * 1000;
        $expiredEmails['expiredEmails'] = false;
        $notFoundPage['notFoundPage'] = false;
        if($user->status == 1){
            $notFoundPage['notFoundPage'] = true;
            return view("not_found.page_not_found")->with($expiredEmails)->with($notFoundPage);
        }
        else {
            if(($user->expired_verify_email - $expiredEmail) >= 0){
                $user = DB::table('users')->where('email', $email)->update(['status' => 1, 'expired_verify_email' => 0]);
                return redirect('/login')->with('success_authenticate', 'Xác thực thành công vui lòng đăng nhập!');
            }
            else {
                $expiredEmails['expiredEmails'] = true;
                return view("not_found.page_not_found")->with($expiredEmails)->with($notFoundPage);
            }
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
