<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;
use App\Models\MainCategory;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('main_categories', function (Blueprint $table) {
            if (!Schema::hasColumn('main_categories', 'slug')) {
                $table->string('slug')->nullable()->unique()->after('main_category');
            }
        });

        // Generate slugs for existing main categories
        $categories = MainCategory::all();
        foreach ($categories as $cat) {
            if (empty($cat->slug)) {
                $baseSlug = Str::slug($cat->main_category);
                $slug = $baseSlug ?: 'category-' . $cat->id;
                $count = 1;
                while (MainCategory::where('slug', $slug)->where('id', '!=', $cat->id)->exists()) {
                    $slug = $baseSlug . '-' . $count;
                    $count++;
                }
                $cat->slug = $slug;
                $cat->save();
            }
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('main_categories', function (Blueprint $table) {
            if (Schema::hasColumn('main_categories', 'slug')) {
                $table->dropColumn('slug');
            }
        });
    }
};
