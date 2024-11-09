<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdminHomeBannerModel extends Model
{
    public $fillable = [
        'home_banner',
        'h_s_desc',
        'h_title',
        'h_a_title',
        'h_p_name',
        'h_p_url',
    ];
}
