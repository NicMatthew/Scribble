<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{
    public function index(){
            $products = Product::selectRaw('NameProduct, products.ProductID, Rating, MIN(price) as Price')
                ->join('product_entries', 'products.ProductID', '=', 'product_entries.ProductID')
                ->groupBy('ProductID')
                ->orderBy('products.created_at', 'desc') // Order by created_at descending (newest first)
                ->limit(8) // Limit to 9 results
                ->get();

            foreach ($products as $product) {
                $image = Product::join('product_images', 'products.ProductID', '=', 'product_images.ProductID')
                    ->where('products.ProductID', $product->ProductID)
                    ->get()
                    ->first();

                if ($image) { // Check if image exists before adding
                    $imageArray = array('ProductImage' => $image->Image);
                    $product["ProductImage"] = $imageArray['ProductImage'];
                }
            }

            return view('home', ['products' => $products]);
    }
}
