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
        if($request->search_query != null){
            Session::put("search_query", $request->search_query);
        }
        if($request->search_query == null){
            Session::forget("search_query", "");
        }

        $searchQuery = Session::get("search_query");
        $searchbind['searchbind'] = $searchQuery;


        $province['province'] = Province::all();
        $district['district'] = [];
        $ward['ward'] =  [];
        $keysearch = $request->search_query;


        $acreage = '';
        $price = '';
        $provinceSearch = '';
        $districtSearch = '';
        $wardSearch = '';
        $p = '';
        $d = '';
        $w = '';

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
            $pro = DB::select("select _name from province where id = ". $request->province);
            $p = "tại " . $pro[0]->_name;
        }
        if($request->district != -1 && $request->district != null){
            $districtSearch = 'and district = ' .$request->district;
            $dis = DB::select("select _name from district where id = ". $request->district);
            $d = ", " . $dis[0]->_name;
        }
        if($request->ward != -1 && $request->ward != null){
            $wardSearch = 'and ward = ' .$request->ward;
            $war = DB::select("select _name from ward where id = ". $request->ward);
            $w = ", " . $war[0]->_name;
        }
        
        $key['key'] = $searchQuery . " " . $p . " " . $d . " " . $w;


        $select = "select phong_tro.*,users.fullname,district._name from  `phong_tro`, `users`, `district` where `user` in (select id from users) and users.id = user and district.id = district and title like N'%" .$searchQuery. "%' " .$acreage. " " .$price. " " .$provinceSearch. " " . $districtSearch . " " . $wardSearch . " order by day_post desc limit 12;";

        $result['result'] = DB::select("select phong_tro.*,users.fullname,district._name from  `phong_tro`, `users`, `district` where `user` in (select id from users) and users.id = user and district.id = district and title like N'%" .$searchQuery. "%' " .$acreage. " " .$price. " " .$provinceSearch. " " . $districtSearch . " " . $wardSearch . " order by day_post desc limit 12;");


        
        


        $countResult['countResult'] = count($result['result']);
        return view('search.resultSearchForm')->with($province)->with($district)->with($ward)->with($result)->with($countResult)->with($key)->with($searchbind);
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
