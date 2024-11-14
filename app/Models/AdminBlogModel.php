<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdminBlogModel extends Model
{
    public $fillable=[
        'b_img',
        'b_title',
        'b_qt',
        'b_desc',
        'b_tag',
        'b_date',
    ];
}
