<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Session;
use App\Province;
use App\District;
use App\Ward;
use View;
use DB;

class HomeController extends Controller
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
            $province['province'] = Province::all();
            $district['district'] = DB::select('select * from district where _province_id = 1');
            $ward['ward'] =  [];
            $roomOfUserVip['roomOfUserVip'] = DB::select('select phong_tro.*,users.fullname,district._name from  `phong_tro`, `users`, `district` where `user` in (select id from users where vip = 1) and users.id = user and district.id = district order by day_post');
            $numPhongTro['numPhongTro'] = DB::select('select count(*) as numPhongTro from phong_tro where type = 1');
            $numCanHo['numCanHo'] = DB::select('select count(*) as numCanHo from phong_tro where type = 2');
            $numHouse['numHouse'] = DB::select('select count(*) as numHouse from phong_tro where type = 3');
            $numOGhep['numOGhep'] = DB::select('select count(*) as numOGhep from phong_tro where type = 4');
            //dd($numPhongTro);
            return view('index')->with($province)->with($district)->with($ward)->with($roomOfUserVip)->with($numPhongTro)->with($numCanHo)->with($numHouse)->with($numOGhep);
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

    public function getWard (Request $request){
        $district = $request->district;
        $ward['ward'] = DB::select('select * from ward where _district_id =' .$district);
        return view('ward')->with($ward);
    }

    public function getDistrict (Request $request){
        $province = $request->province;
        $district['district'] = DB::select('select * from district where _province_id =' .$province);
        $ward['ward'] = [];
        View::share('ward', $ward);
        return view('district')->with($district);
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
