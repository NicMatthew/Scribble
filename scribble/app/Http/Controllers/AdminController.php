<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductEntry;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function product_admin(){
        $products = ProductEntry::join('products','products.ProductID','=','product_entries.ProductID')
        ->join('variants','variants.VariantID','=','product_entries.VariantID')
        ->get()
        ;
        // dd($products);
        return view('/admin/product-admin',
        ['products' =>$products]);
    }
    public function product_add(){
        $products = request()->all();
        dd($products);
        $newProduct = new Product(); 
        $newProductEntry = new ProductEntry(); 
        $newSubCategory = new SubCategory();

        $newProduct->NameProduct= $products["ProductName"];
        $newProduct->Rating= 0;
        $newProduct->NameProduct= $products["DescriptionProduct"];
        
        $newSubCategory->NameProduct= $products["ProductName"];
        dd("test");
    }
    
}
