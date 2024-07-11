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
        Schema::create('voucher_shipments', function (Blueprint $table) {
            $table->id('VoucherShipmentID');
            $table->string('VoucherName');
            $table->date('StartDate');
            $table->date('EndDate');
            $table->float('Value');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('voucher_shipments');
    }
};
