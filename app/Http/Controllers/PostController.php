<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Province;
use App\District;
use App\Ward;
use View;
use DB;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function createPost()
    {
        if(Session::get('session_logged_in') == null)
        return redirect('/logout');
        else {
            $province['province'] = Province::all();
            $district['district'] = [];
            $ward['ward'] =  [];
            $type_post['type_post'] = DB::select('select * from type_post');
            return view("posts.addPost")->with($province)->with($district)->with($ward)->with($type_post);
        }
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
