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
        Schema::create('product_images', function (Blueprint $table) {
            $table->id('ImageProductID');
            $table->foreignId('VariantID')->constrained()->cascadeOnDelete()->cascadeOnUpdate()->references("VariantID")->on('variants');
            $table->foreignId('ProductID')->constrained()->cascadeOnDelete()->cascadeOnUpdate()->references("ProductID")->on('products');
            $table->longText('Image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_images');
    }
};
