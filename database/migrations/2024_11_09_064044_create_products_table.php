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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('pr_image')->nullable();
            $table->foreignId('main_cat')->constrained('main_categories')->onDelete('cascade');
            $table->foreignId('sub_cat')->constrained('sub_categories')->onDelete('cascade');
            $table->string('pr_title');
            $table->text('pr_desc')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
