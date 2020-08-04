<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Session;
use DB;

class ManagerPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if(Session::get('session_logged_in')){
            $offset = 0;
            $idUser = Session::get('session_logged_in')->id;
            if($request->page != null){
                $offset = (int)(($request->page - 1) * 5);
            }
            $postCount['postCount'] = ceil(count(DB::select("select * from phong_tro where user=" .$idUser."")) / 5);
            $post['post'] = DB::select("select * from phong_tro where user=" .$idUser." order by day_post desc limit 5 offset " . $offset . ";");
            return view ('posts.managerPost')->with($post)->with($postCount);
        }
        return view('not_found.page_not_found_page');
    }

    public function review(Request $request, Response $response)
    {
        if(Session::get('session_logged_in')){
            $idUser = Session::get('session_logged_in')->id;
            $posts = DB::select("select phong_tro.*,users.fullname,district._name, district._prefix, province._name as province_name, ward._name as ward_name, ward._prefix as ward_prefix from  `phong_tro`, `users` , `district`, `province`, `ward` where phong_tro.user=".$idUser." and `user` in (select id from users) and phong_tro.id = " . $request->post . " and users.id = user and district.id = district and province.id = city and ward.id = ward");
            $post['post'] = DB::select("select phong_tro.*,users.fullname,district._name, district._prefix, province._name as province_name, ward._name as ward_name, ward._prefix as ward_prefix from  `phong_tro`, `users` , `district`, `province`, `ward` where phong_tro.user=".$idUser." and  `user` in (select id from users) and phong_tro.id = " . $request->post . " and users.id = user and district.id = district and province.id = city and ward.id = ward");
            if(count($posts) == 0){
                return view('not_found.page_not_found_page');
            }
            return view('posts.review')->with($post);
        }
        return view('not_found.page_not_found_page');
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
    public function destroy(Request $request)
    {
        try {
            $idUser = Session::get('session_logged_in')->id;
            DB::update("update phong_tro set `status` = 3 where id=".$request->post." and user=".$idUser);
            return redirect()->back()->with('success', 'Xóa thành công!');
        } catch (\Exception $ex) {
            return redirect()->back()->with('error', 'Xóa thất bại!');
        }
    }
}
