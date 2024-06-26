<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Variant extends Model
{
    use HasFactory;

    public function entry()
    {
        return $this->hasOne(ProductEntry::class, 'VariantID', 'VariantID');
    }

    public function images() {
        return $this->hasMany(ProductImage::class, 'VariantID', 'VariantID');
    }

}
