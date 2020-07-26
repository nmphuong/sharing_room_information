<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Session;
use App\Province;
use App\District;
use App\Ward;
use Auth;
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
        $province['province'] = Province::all();
        $district['district'] = [];
        $ward['ward'] =  [];
        $keysearch = $request->search_query;
        $key['key'] = $keysearch;
        //dd($province);
        $result['result'] = DB::select("select phong_tro.*,users.fullname,district._name from  `phong_tro`, `users`, `district` where `user` in (select id from users) and users.id = user and district.id = district and title like N'%" .$keysearch. "%' order by day_post desc limit 12;");
        $countResult['countResult'] = count($result['result']);
        //dd($roomOfFavorite);
        return view('search.resultSearchForm')->with($province)->with($district)->with($ward)->with($result)->with($countResult)->with($key);
        //}
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
