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
            $table->foreignId('VoucherShipmentID')->constrained()->cascadeOnDelete()->cascadeOnUpdate()->references("VoucherShipmentID")->on('voucher_shipments');
            $table->date('TransactionDate');
            $table->string('TransactionStatus');
            $table->string('ReviewStatus');
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
