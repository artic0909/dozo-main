<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class AMCReqModel extends Model
{
    public $fillable = [
        'fname',
        'email',
        'mob',
        'add',
        'pin',
        'window_info',
        'd_op',
    ];


    protected $casts = [
        'window_info' => 'array',
    ];
}
