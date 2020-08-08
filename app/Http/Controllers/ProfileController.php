<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Session;
use Hash;
use DB;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Session::get('session_logged_in') == null)
            return redirect('/logout');
        else {
            return view("users.user");
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
        $input = $request->all();
        $images = '';
        if($files = $request->file('image_post')){
            foreach($files as $file){
                $name = $file->getClientOriginalName();
                $name = time().rand().substr($name, strrpos($name, '.', 1));
                $file->move('avatars',$name);
                $images = $images.$name;
            }
        }
        $email = "";
        if($request->email != ''){
            $email = ",`email`='".$request->email."' ";
        }
        $avatar = '';
        if($request->image_post != null){
            $avatar = "`avatar`='".$images."',";
        }
        DB::update("update `users` set ".$avatar."`birthday`='".$request->birthday."', `phone`='".$request->phone."', `fullname`='".$request->fullname."', `address`='".$request->address."'".$email." where `username`='". $request->username."'");
        return redirect()->back()->with('success', 'Thành công!');
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
