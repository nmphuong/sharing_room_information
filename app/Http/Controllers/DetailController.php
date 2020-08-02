<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class DetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $posts= DB::select("select phong_tro.*,users.fullname,district._name, district._prefix, province._name as province_name, ward._name as ward_name, ward._prefix as ward_prefix from  `phong_tro`, `users` , `district`, `province`, `ward` where `user` in (select id from users) and phong_tro.id = " . $request->post . " and users.id = user and district.id = district and province.id = city and ward.id = ward and phong_tro.status = 1");
        $post['post'] = DB::select("select phong_tro.*,users.fullname,district._name, district._prefix, province._name as province_name, ward._name as ward_name, ward._prefix as ward_prefix from  `phong_tro`, `users` , `district`, `province`, `ward` where `user` in (select id from users) and phong_tro.id = " . $request->post . " and users.id = user and district.id = district and province.id = city and ward.id = ward and phong_tro.status = 1");
        //dump(count($posts));
        if(count($posts) == 0){
            return view('not_found.page_not_found_page');
        }
        return view('detail')->with($post);
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
