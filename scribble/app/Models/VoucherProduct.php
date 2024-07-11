<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VoucherProduct extends Model
{
    use HasFactory;

    protected $primaryKey = "VoucherProductID";
    protected $table = "voucher_products";

    public function categoryName() {
        return $this->belongsTo(Category::class, "DiscountCategory", "CategoryProductID");
    }
}
