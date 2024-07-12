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
        Schema::create('transaction_details', function (Blueprint $table) {
            $table->foreignId('TransactionID')->constrained()->cascadeOnDelete()->cascadeOnUpdate()->references("TransactionID")->on('transactions');
            $table->foreignId('ProductID')->constrained()->cascadeOnDelete()->cascadeOnUpdate()->references("ProductID")->on('products');
            $table->foreignId('VariantID')->constrained()->cascadeOnDelete()->cascadeOnUpdate()->references("VariantID")->on('variants');
            $table->integer('Quantity');
            $table->primary(['TransactionID','ProductID','VariantID']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaction_details');
    }
};
