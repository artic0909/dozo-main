<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InquryWindowModel extends Model
{
    public $fillable = [
        'cus_name',
        'cus_email',
        'cus_mob',
        'cus_add',
        'cus_pin',
        'cus_window_info',
        'cus_d_op',
    ];


    protected $casts = [
        'cus_window_info' => 'array',
    ];
}
