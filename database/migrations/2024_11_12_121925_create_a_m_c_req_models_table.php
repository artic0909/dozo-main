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
        Schema::create('a_m_c_req_models', function (Blueprint $table) {
            $table->id();
            $table->string('fname');
            $table->string('email');
            $table->string('mob');
            $table->text('add');
            $table->string('pin');
            $table->json('window_info');
            $table->text('d_op');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('a_m_c_req_models');
    }
};
