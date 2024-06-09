<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{
    public function index()
    {
        // Fetch latest 8 products, including images and entries
        $products = Product::with(['images', 'entries'])
            ->orderBy('created_at', 'desc')
            ->limit(8)
            ->get();

        // Add the first image and the minimum price to the main product object
        foreach ($products as $product) {
            // Adding the first image
            $product->ProductImage = $product->images->first()->Image ?? '/path/to/default-image.jpg';

            // Adding the minimum price
            $product->Price = $product->entries->min('Price');
        }

        return view('home', ['products' => $products]);
    }
}
