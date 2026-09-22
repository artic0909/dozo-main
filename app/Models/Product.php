<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'pr_image',
        'gallery_images',
        'main_cat',
        'sub_cat',
        'pr_title',
        'slug',
        'pr_desc',
        'rate_sqm',
        'glass_spec',
        'dimensions',
        'profile_type',
        'hardware_spec',
        'features',
    ];

    protected $casts = [
        'gallery_images' => 'array',
        'features' => 'array',
    ];

    protected static function booted()
    {
        static::creating(function ($product) {
            if (empty($product->slug)) {
                $product->slug = static::generateUniqueSlug($product->pr_title);
            }
        });

        static::updating(function ($product) {
            if (empty($product->slug) || ($product->isDirty('pr_title') && !$product->isDirty('slug'))) {
                $product->slug = static::generateUniqueSlug($product->pr_title, $product->id);
            }
        });
    }

    public static function generateUniqueSlug($title, $ignoreId = null)
    {
        $baseSlug = Str::slug($title) ?: 'product-' . time();
        $slug = $baseSlug;
        $counter = 1;

        while (static::where('slug', $slug)->when($ignoreId, fn($q) => $q->where('id', '!=', $ignoreId))->exists()) {
            $slug = "{$baseSlug}-{$counter}";
            $counter++;
        }

        return $slug;
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function mainCategory()
    {
        return $this->belongsTo(MainCategory::class, 'main_cat');
    }

    public function subCategory()
    {
        return $this->belongsTo(SubCategory::class, 'sub_cat');
    }

    /**
     * Get all images including cover and gallery blueprints/elevations
     */
    public function getAllImagesAttribute()
    {
        $images = [];
        if (!empty($this->pr_image)) {
            $images[] = $this->pr_image;
        }
        if (is_array($this->gallery_images)) {
            foreach ($this->gallery_images as $img) {
                if (!empty($img) && !in_array($img, $images)) {
                    $images[] = $img;
                }
            }
        }
        return $images;
    }
}