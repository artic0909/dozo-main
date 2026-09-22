<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class AdminBlogModel extends Model
{
    public $fillable = [
        'b_img',
        'b_title',
        'slug',
        'b_qt',
        'b_desc',
        'b_tag',
        'b_date',
    ];

    protected static function booted()
    {
        static::creating(function ($blog) {
            if (empty($blog->slug)) {
                $blog->slug = static::generateUniqueSlug($blog->b_title);
            }
        });

        static::updating(function ($blog) {
            if (empty($blog->slug) || ($blog->isDirty('b_title') && !$blog->isDirty('slug'))) {
                $blog->slug = static::generateUniqueSlug($blog->b_title, $blog->id);
            }
        });
    }

    public static function generateUniqueSlug($title, $ignoreId = null)
    {
        $baseSlug = Str::slug($title) ?: 'blog-' . time();
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
}
