<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactusModel extends Model
{
    public $fillable = [
        'email',
        'subject',
        'inquiry',
    ];
}
