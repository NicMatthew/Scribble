<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function subCategory()
    {
        return $this->belongsTo(SubCategory::class, 'SubCategoryProductID', 'SubCategoryProductID');
    }

    public function images()
    {
        return $this->hasMany(ProductImage::class, 'ProductID', 'ProductID');
    }

    public function entries()
    {
        return $this->hasMany(ProductEntry::class, 'ProductID', 'ProductID');
    }
}
