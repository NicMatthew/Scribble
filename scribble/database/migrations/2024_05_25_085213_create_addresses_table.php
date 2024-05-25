<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use function Laravel\Prompts\table;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->id('AddressID');
            $table->foreignId('UserID')->constrained()->cascadeOnDelete()->cascadeOnUpdate()->references("UserID")->on('user');
            $table->string('AddressName');
            $table->string('RecipientName');
            $table->string('PostCode');
            $table->string('FullAddress');
            $table->string('PhoneNumber');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('addresses');
    }
};
