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
        $address = DB::select("select * from phong_tro where id=".$request->post);
        $location = "";
        $getlocationName = "";
        $from = "";
        if($address[0]->city >= 1){
            $location = $location." and province.id = city";
            $getlocationName = $getlocationName.", province._name as province_name";
            $from = $from.",`province`";
        }
        if($address[0]->district >= 1){
            $location = $location." and district.id = district";
            $getlocationName = $getlocationName.",district._name, district._prefix";
            $from = $from." , `district`";
        }
        if($address[0]->ward >= 1){
            $location = $location." and ward.id = ward";
            $getlocationName = $getlocationName.", ward._name as ward_name, ward._prefix as ward_prefix ";
            $from = $from.", `ward`";
        }
        $posts= DB::select("select phong_tro.*,users.fullname ".$getlocationName." from  `phong_tro`, `users` ".$from." where `user` in (select id from users) and phong_tro.id = " . $request->post . " and users.id = user ".$location." and phong_tro.status = 1");
        $post['post'] = DB::select("select phong_tro.*,users.fullname ".$getlocationName." from  `phong_tro`, `users` ".$from." where `user` in (select id from users) and phong_tro.id = " . $request->post . " and users.id = user ".$location." and phong_tro.status = 1");
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
