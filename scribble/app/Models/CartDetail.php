<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartDetail extends Model
{
    use HasFactory;

    protected $table = 'cart_details'; // Sesuaikan dengan nama tabel yang benar

    protected $fillable = ['ProductID', 'VariantID', 'UserID', 'Quantity']; // Atribut yang bisa diisi

    // Relasi dengan model Product
    public function product()
    {
        return $this->belongsTo(Product::class, 'ProductID', 'ProductID');
    }

    // Relasi dengan model User
    public function user()
    {
        return $this->belongsTo(User::class, 'UserID', 'UserID');
    }

    // Relasi dengan model Variant
    public function variant()
    {
        return $this->belongsTo(Variant::class, 'VariantID', 'VariantID');
    }
}
