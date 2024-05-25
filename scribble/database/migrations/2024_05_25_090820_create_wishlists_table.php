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
        Schema::create('wishlists', function (Blueprint $table) {
            $table->foreignId('ProductID')->constrained()->cascadeOnDelete()->cascadeOnUpdate()->references("ProductID")->on('products');
            $table->foreignId('UserID')->constrained()->cascadeOnDelete()->cascadeOnUpdate()->references("UserID")->on('user');
            $table->primary(['ProductID','UserID']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wishlists');
    }
};
