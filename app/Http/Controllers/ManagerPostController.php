<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Province;
use App\District;
use App\Ward;
use View;
use Session;
use DB;

class ManagerPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if(Session::get('session_logged_in')){
            $offset = 0;
            $idUser = Session::get('session_logged_in')->id;
            if($request->page != null){
                $offset = (int)(($request->page - 1) * 12);
            }
            $count_vip = DB::select('select * from `phong_tro` where vip = 1 and (status = 1 OR status = 0) and user = ' . $idUser);
            $amount_vip['amount_vip'] = count($count_vip);
            //dump($amount_vip);
            $postCount['postCount'] = ceil(count(DB::select("select * from phong_tro where (status = 1 OR status = 0) and user=" .$idUser."")) / 12);
            $post['post'] = DB::select("select * from phong_tro where user=" .$idUser." and (status = 1 OR status = 0) order by day_post desc limit 12 offset " . $offset . ";");
            return view ('posts.managerPost')->with($post)->with($postCount)->with($amount_vip);
        }
        return view('not_found.page_not_found_page');
    }

    public function uptovip(Request $request){
        DB::update("update `phong_tro` set `vip` = 1 where `id`=".$request->post);
        return redirect()->back()->with('success', "Cập nhật VIP thành công");
    }

    public function cancelvip(Request $request){
        DB::update("update `phong_tro` set `vip` = 0 where `id`=".$request->post);
        return redirect()->back()->with('success', "Hủy VIP thành công");
    }

    public function review(Request $request, Response $response)
    {
        
        if(Session::get('session_logged_in')){
            $idUser = Session::get('session_logged_in')->id;
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
            $posts = DB::select("select phong_tro.*,users.fullname ".$getlocationName." from  `phong_tro`, `users`".$from." where phong_tro.user=".$idUser." and `user` in (select id from users) and phong_tro.id = " . $request->post . " and users.id = user".$location);
            $post['post'] = DB::select("select phong_tro.*,users.fullname ".$getlocationName." from  `phong_tro`, `users`".$from." where phong_tro.user=".$idUser." and  `user` in (select id from users) and phong_tro.id = " . $request->post . " and users.id = user".$location);
            if(count($posts) == 0){
                return view('not_found.page_not_found_page');
            }
            return view('posts.review')->with($post);
        }
        return view('not_found.page_not_found_page');
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
    public function edit(Request $request)
    {
        if(Session::get('session_logged_in')){
            $idUser = Session::get('session_logged_in')->id;
            $posts = DB::select("select phong_tro.*,users.fullname,district._name, district._prefix, province._name as province_name, ward._name as ward_name, ward._prefix as ward_prefix from  `phong_tro`, `users` , `district`, `province`, `ward` where phong_tro.user=".$idUser." and `user` in (select id from users) and phong_tro.id = " . $request->post . " and users.id = user and district.id = district and province.id = city and ward.id = ward");
            $post['post'] = DB::select("select phong_tro.*,users.fullname,district._name, district._prefix, province._name as province_name, ward._name as ward_name, ward._prefix as ward_prefix from  `phong_tro`, `users` , `district`, `province`, `ward` where phong_tro.user=".$idUser." and  `user` in (select id from users) and phong_tro.id = " . $request->post . " and users.id = user and district.id = district and province.id = city and ward.id = ward");
            if(count($posts) == 0){
                return view('not_found.page_not_found_page');
            }
            $type_post['type_post'] = DB::select('select * from type_post');
            $province['province'] = Province::all();
            $district['district'] = [];
            $ward['ward'] =  [];
            return view('posts.editPost')->with($post)->with($province)->with($district)->with($ward)->with($type_post);
        }
        return view('not_found.page_not_found_page');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $images = "";
        if($request->file('image_post') != null){
            $images = ",`image`='";
            $input = $request->all();
            $images = $images."[";
            if($files = $request->file('image_post')){
                foreach($files as $file){
                    $name = $file->getClientOriginalName();
                    $name = time().rand().substr($name, strrpos($name, '.', 1));
                    $file->move('uploads',$name);
                    $images = $images.$name.',';
                }
            }
            $images = $images."]'";
        }
        DB::update("update `phong_tro` set `title`='".$request->title."',`content`='".$request->content."',`phone_number`='".$request->phonenumber."',`city`=".$request->province.",`ward`=".$request->ward.",`district`=".$request->district.",`acreage`=".$request->acreage.",`price`=".$request->price.",`room_number`=".$request->room_number.",`utilities`='".$request->utilities."',`type`=".$request->type_post."".$images." where id=".$request->id);
        return redirect()->back()->with('success', 'Cập nhật thành công!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        try {
            $idUser = Session::get('session_logged_in')->id;
            DB::update("update phong_tro set `status` = 3 where id=".$request->post." and user=".$idUser);
            return redirect()->back()->with('success', 'Xóa thành công!');
        } catch (\Exception $ex) {
            return redirect()->back()->with('error', 'Xóa thất bại!');
        }
    }
}
