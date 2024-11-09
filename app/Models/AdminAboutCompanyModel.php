<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdminAboutCompanyModel extends Model
{
    public $fillable=[
        'ab_img',
        'ab_b_desc',
        'ab_desc',
        'ab_year',
        'ab_email',
        'ab_num',
    ];
}
