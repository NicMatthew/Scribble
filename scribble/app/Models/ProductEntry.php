<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductEntry extends Model
{
    use HasFactory;
    
    // protected $primaryKey = ['ProductID', 'VariantID'];
    
    // protected $fillable = ['ProductID', 'VariantID', 'Stock', 'Price'];

    // public function product()
    // {
    //     return $this->belongsTo(Product::class, 'ProductID', 'ProductID');
    // }

    protected $table = 'product_entries';
    
    protected $primaryKey = ['ProductID', 'VariantID'];
    
    public $incrementing = false;
    
    protected $fillable = ['ProductID', 'VariantID', 'Stock', 'Price'];

    protected function setKeysForSaveQuery($query)
    {
        $query
            ->where('ProductID', '=', $this->getAttribute('ProductID'))
            ->where('VariantID', '=', $this->getAttribute('VariantID'));

        return $query;
    }
}
