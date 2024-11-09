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
        Schema::create('admin_home_banner_models', function (Blueprint $table) {
            $table->id();
            $table->string('home_banner');
            $table->text('h_s_desc');
            $table->string('h_title');
            $table->string('h_a_title');
            $table->string('h_p_name');
            $table->string('h_p_url');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admin_home_banner_models');
    }
};
