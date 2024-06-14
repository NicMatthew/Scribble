<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Wishlist;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        // Fetch latest 8 products, including images and entries
        $products = Product::with(['images', 'entries'])
            ->orderBy('created_at', 'desc')
            ->get();

        if(Auth::check()){
            foreach($products as $product) {
            $wish = Wishlist::where('UserID', Auth::user()->UserID)
            ->where('ProductID', $product->ProductID)
            ->first();

            if ($wish != null) {
                $product->inWishlist = true;
            } else {
                $product->inWishlist = null;
            }
        }
        }

        // dd($products);

        // Add the first image and the minimum price to the main product object
        foreach ($products as $product) {
            // Adding the first image
            $product->ProductImage = $product->images->first()->Image ?? '/path/to/default-image.jpg';

            // Adding the minimum price
            $product->Price = $product->entries->min('Price');
        }
        // if(auth())

        return view('home', ['products' => $products]);
    }
}
