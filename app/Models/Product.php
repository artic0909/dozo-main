<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['pr_image', 'main_cat', 'sub_cat', 'pr_title', 'pr_desc'];

    public function mainCategory()
    {
        return $this->belongsTo(MainCategory::class, 'main_cat');
    }

    public function subCategory()
    {
        return $this->belongsTo(SubCategory::class, 'sub_cat');
    }
}