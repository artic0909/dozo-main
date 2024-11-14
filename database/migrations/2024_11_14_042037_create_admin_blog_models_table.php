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
        Schema::create('admin_blog_models', function (Blueprint $table) {
            $table->id();
            $table->string('b_img');
            $table->string('b_title');
            $table->string('b_qt');
            $table->text('b_desc');
            $table->text('b_tag');
            $table->string('b_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admin_blog_models');
    }
};
