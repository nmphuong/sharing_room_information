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
use Post;
use DB;

class ApartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //dump($request->page);
        $offset = 0;
        if($request->page != null){
            $offset = (int)(($request->page - 1) * 12);
        }
        //dump($offset);


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


        $province['province'] = Province::all();
        $district['district'] = [];
        $ward['ward'] =  [];
        $postCount['postCount'] = ceil(count(DB::select('select * from phong_tro where type = 2')) / 12);
        $posts['posts'] = DB::select("select phong_tro.*,users.fullname,district._name from  `phong_tro`, `users`, `district` where `user` in (select id from users) " . $acreage . " " . $price . " " . $provinceSearch . " " . $districtSearch . " " . $wardSearch . " and type = 2 and users.id = user and district.id = district order by day_post desc limit 12 offset " . $offset . ";");
        //dump("select phong_tro.*,users.fullname,district._name from  `phong_tro`, `users`, `district` where `user` in (select id from users) " . $acreage . " " . $price . " " . $provinceSearch . " " . $districtSearch . " " . $wardSearch . " and type = 2 and users.id = user and district.id = district order by day_post desc limit 12 offset " . $offset . ";");
        return view('apartment')->with($province)->with($district)->with($ward)->with($posts)->with($postCount);
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
