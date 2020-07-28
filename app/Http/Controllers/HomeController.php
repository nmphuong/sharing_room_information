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
use constant;

class HomeController extends Controller
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

        
        $searchbind['searchbind'] = null;

        $acreage = '';
        $price = '';
        $provinceSearch = '';
        $districtSearch = '';
        $wardSearch = '';

        if($request->acreage != -1 && $request->acreage != null){
            if(strpos($request->acreage, 'and') != false){
                $acreage = 'and acreage between ' . $request->acreage;
            }
            else {
                $acreage = 'and	acreage ' . $request->acreage;
            }
        }
        if($request->price != -1 && $request->acreage != null){
            if(strpos($request->price, 'and') != false){
                $price = 'and price between ' . $request->price;
            }
            else {
                $price = 'and price ' . $request->price;
            }
        }
        if($request->province != -1 && $request->province != null){
            $provinceSearch = 'and city = ' .$request->province;
        }
        if($request->district != -1 && $request->district != null){
            $districtSearch = 'and district = ' .$request->district;
        }
        if($request->ward != -1 && $request->ward != null){
            $wardSearch = 'and ward = ' .$request->ward;
        }




        //dd($province);
        $roomOfUserVip['roomOfUserVip'] = DB::select("select phong_tro.*,users.fullname,district._name from  `phong_tro`, `users`, `district` where `user` in (select id from users where vip = 1) and phong_tro.status = 1 " . $provinceSearch . " " . $districtSearch . " " . $wardSearch . " " . $price . " " . $acreage . " and users.id = user and district.id = district order by day_post desc limit 12;");
        $numPhongTro['numPhongTro'] = DB::select('select count(*) as numPhongTro from phong_tro where type = 1 and status = 1');
        $numCanHo['numCanHo'] = DB::select('select count(*) as numCanHo from phong_tro where type = 2 and status = 1');
        $numHouse['numHouse'] = DB::select('select count(*) as numHouse from phong_tro where type = 3 and status = 1');
        $numOGhep['numOGhep'] = DB::select('select count(*) as numOGhep from phong_tro where type = 4 and status = 1');
        $roomOfNew['roomOfNew'] = DB::select("select phong_tro.*,users.fullname,district._name from  `phong_tro`, `users`, `district` where `user` in (select id from users where vip = 0) and phong_tro.status = 1 " . $provinceSearch . " " . $districtSearch . " " . $wardSearch . " " . $price . " " . $acreage . " and users.id = user and district.id = district order by day_post desc limit 12;");
        $roomOfFavorite['roomOfFavorite'] = DB::select("select phong_tro.*,users.fullname,district._name from  `phong_tro`, `users`, `district` where `user` in (select id from users) and phong_tro.status = 1 " . $provinceSearch . " " . $districtSearch . " " . $wardSearch . " " . $price . " " . $acreage . " and users.id = user and district.id = district order by favorite desc limit 12;");
        $review['review'] = DB::select('select review.*, users.fullname, users.avatar from review, users where users.id = user ');
        //dd($roomOfFavorite);
        return view('index')->with($province)->with($district)->with($ward)->with($roomOfUserVip)->with($roomOfNew)->with($roomOfFavorite)->with($numPhongTro)->with($numCanHo)->with($numHouse)->with($numOGhep)->with($review)->with($searchbind);
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
        Session::put('district', $district);
        return view('ward')->with($ward);
    }

    public function getDistrict (Request $request){
        $province = $request->province;
        $district['district'] = DB::select('select * from district where _province_id =' .$province);
        Session::put('province', $province);
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
