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
        Schema::create('inqury_window_models', function (Blueprint $table) {
            $table->id();
            $table->string('cus_name');
            $table->string('cus_email');
            $table->string('cus_mob');
            $table->text('cus_add');
            $table->string('cus_pin');
            $table->json('cus_window_info');
            $table->text('cus_d_op');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inqury_window_models');
    }
};
