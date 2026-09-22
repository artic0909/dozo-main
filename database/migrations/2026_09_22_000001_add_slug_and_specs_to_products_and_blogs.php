<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Add specs, multi-images, and slug to products table
        Schema::table('products', function (Blueprint $table) {
            if (!Schema::hasColumn('products', 'slug')) {
                $table->string('slug')->nullable()->unique()->after('pr_title');
            }
            if (!Schema::hasColumn('products', 'gallery_images')) {
                $table->json('gallery_images')->nullable()->after('pr_image');
            }
            if (!Schema::hasColumn('products', 'rate_sqm')) {
                $table->string('rate_sqm')->nullable()->after('pr_desc');
            }
            if (!Schema::hasColumn('products', 'glass_spec')) {
                $table->string('glass_spec')->nullable()->after('rate_sqm');
            }
            if (!Schema::hasColumn('products', 'dimensions')) {
                $table->string('dimensions')->nullable()->after('glass_spec');
            }
            if (!Schema::hasColumn('products', 'profile_type')) {
                $table->string('profile_type')->nullable()->after('dimensions');
            }
            if (!Schema::hasColumn('products', 'hardware_spec')) {
                $table->string('hardware_spec')->nullable()->after('profile_type');
            }
            if (!Schema::hasColumn('products', 'features')) {
                $table->json('features')->nullable()->after('hardware_spec');
            }
        });

        // Add slug to admin_blog_models table
        Schema::table('admin_blog_models', function (Blueprint $table) {
            if (!Schema::hasColumn('admin_blog_models', 'slug')) {
                $table->string('slug')->nullable()->unique()->after('b_title');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn([
                'slug',
                'gallery_images',
                'rate_sqm',
                'glass_spec',
                'dimensions',
                'profile_type',
                'hardware_spec',
                'features',
            ]);
        });

        Schema::table('admin_blog_models', function (Blueprint $table) {
            $table->dropColumn(['slug']);
        });
    }
};
