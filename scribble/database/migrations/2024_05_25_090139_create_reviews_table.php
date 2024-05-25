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
        Schema::create('reviews', function (Blueprint $table) {
            $table->id('ReviewID');
            $table->foreignId('ProductID')->constrained()->cascadeOnDelete()->cascadeOnUpdate()->references("ProductID")->on('products');
            $table->foreignId('VariantID')->constrained()->cascadeOnDelete()->cascadeOnUpdate()->references("VariantID")->on('variants');
            $table->foreignId('UserID')->constrained()->cascadeOnDelete()->cascadeOnUpdate()->references("UserID")->on('user');
            $table->string('Image');
            $table->string('TextReview');
            $table->integer('Rating');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};
