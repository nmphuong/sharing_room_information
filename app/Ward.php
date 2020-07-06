<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ward extends Model
{
    //
    protected $table = 'ward';
    protected $fillable = ['_name','_prefix','_province_id','_district_id'];
}
