<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    use HasFactory;

     public function category()
    {
        return $this->belongsTo(Category::class, 'CategoryProductID', 'CategoryProductID');
    }

    public function products()
    {
        return $this->hasMany(Product::class, 'SubCategoryProductID', 'SubCategoryProductID');
    }
}
