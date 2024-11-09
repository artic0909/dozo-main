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
        Schema::create('admin_about_company_models', function (Blueprint $table) {
            $table->id();
            $table->string('ab_img');
            $table->text('ab_b_desc');
            $table->text('ab_desc');
            $table->string('ab_year');
            $table->string('ab_email');
            $table->string('ab_num');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admin_about_company_models');
    }
};
