<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $table = 'phong_tro';
    protected $fillable = ['title', 'content', 'phone_number', 'image', 'user', 'city', 'ward', 'district','acreage', 'price', 'day_post', 'room_number', 'utilities', 'vip', 'favorite', 'type', 'status'];
}

