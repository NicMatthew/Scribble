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
        Schema::create('voucher_products', function (Blueprint $table) {
            $table->id('VoucherProductID');
            $table->string('VoucherName');
            $table->date('StartDate');
            $table->date('EndDate');
            $table->float('Value');
            $table->foreignId('DiscountCategory')->constrained()->cascadeOnDelete()->cascadeOnUpdate()->references("CategoryProductID")->on('categories');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('voucher_products');
    }
};
