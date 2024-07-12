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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id('TransactionID');
            $table->foreignId('UserID')->constrained()->cascadeOnDelete()->cascadeOnUpdate()->references("UserID")->on('users');
            $table->string('VoucherShipmentID')->nullable();
            $table->string('VoucherProductID')->nullable();
            $table->date('TransactionDate');
            $table->string('TransactionStatus');
            $table->string('ReviewStatus');
            $table->integer('TotalPrice');
            $table->foreignId("AddressID")->constrained()->cascadeOnDelete()->cascadeOnUpdate()->references("AddressID")->on('addresses');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
