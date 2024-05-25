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
        Schema::create('product_entries', function (Blueprint $table) {
            $table->foreignId('ProductID')->constrained()->cascadeOnDelete()->cascadeOnUpdate()->references("ProductID")->on('products');
            $table->foreignId('VariantID')->constrained()->cascadeOnDelete()->cascadeOnUpdate()->references("VariantID")->on('variants');
            $table->integer('Stock');
            $table->integer('Price');
            $table->timestamps();
            $table->primary(['ProductID','VariantID']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_entries');
    }
};
