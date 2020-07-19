<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Province;
use App\District;
use App\Ward;
use App\Post;
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
    public function create(Request $request)
    {
        //dd(Session::get('session_logged_in'));
        //dd($request->request);
        // $arr = [];
        $input = $request->all();
        $images = "[";
        if($files = $request->file('image_post')){
            foreach($files as $file){
                $name = $file->getClientOriginalName();
                $name = time().rand().substr($name, strrpos($name, '.', 1));
                $file->move('uploads',$name);
                $images = $images.$name.',';
            }
        }
        $images = $images."]";
        //'title', 'content', 'phone_number', 'image', 'user', 'city', 'ward', 'district', 'acreage', 'price', 'room_number', 'utilities', 'vip', 'favorite', 'type', 'status'
        $post = new Post;
        $post->title = $request->a_tt_post;
        $post->content = $request->a_ct_post;
        $post->phone_number = '+84'.$request->a_p_post;
        $post->image = $images;
        $post->user = Session::get('session_logged_in')->id;
        $post->city = $request->province;
        $post->ward = $request->ward;
        $post->district = $request->district;
        $post->acreage = $request->a_dt_post;
        $post->price = $request->a_price_post;
        $post->room_number = 1;
        $post->utilities = $request->a_ti_post;
        $post->vip = $request->a_pn_post;
        $post->favorite = 0;
        $post->type = $request->a_type_post;
        $post->status = 1;
        $post->save();
        return redirect("/");
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
