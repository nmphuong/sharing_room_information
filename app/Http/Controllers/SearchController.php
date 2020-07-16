<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Province;
use App\District;
use App\Ward;
use View;
use DB;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $room = $request->search;
        $province['province'] = Province::all();
        $district['district'] = [];
        $ward['ward'] =  [];
        $result['result'] = DB::select("select phong_tro.*,users.fullname,district._name from  `phong_tro`, `users`, `district` where `title` like '%".$room."%' and `user` in (select id from users) and users.id = user and district.id = district order by day_post");
        $review['review'] = DB::select('select review.*, users.fullname, users.avatar from review, users where users.id = user ');
        $amount['amount'] = count($result['result']);
        
        return view("search")->with($province)->with($district)->with($ward)->with($result)->with($review)->with($amount);
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
