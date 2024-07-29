<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Review;
use App\Models\Product;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use App\Models\TransactionDetail;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function checkWishlist($products) {
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
        return $products;
    }

    public function index()
    {
        // Fetch latest 8 products, including images and entries
        $products = Product::with(['images', 'entries'])
            ->orderBy('created_at', 'desc')
            ->take(8)
            ->get();

        $banners = Banner::all();

        if(Auth::check()){
            $products = $this->checkWishlist($products);
        }

        // dd($products);

        // Add the first image and the minimum price to the main product object
        foreach ($products as $product) {
            // Adding the first image
            $product->ProductImage = $product->images->first()->Image ?? '/path/to/default-image.jpg';

            // Adding the minimum price
            $product->Price = $product->entries->min('Price');

            $averageRating = Review::where('ProductID', $product->ProductID)
                               ->avg('Rating');

            // Calculate full stars, half star, and empty stars
            $fullStars = floor($averageRating);
            $halfStar = ($averageRating - $fullStars) >= 0.5;
            $emptyStars = 5 - ceil($averageRating);

            // Ensure fullStars, halfStar, and emptyStars are integers
            // $fullStars = (int) $fullStars;
            // $emptyStars = (int) $emptyStars;

            // Store star ratings in the product object
            $product->stars = [
                'fullStars' => $fullStars,
                'halfStar' => $halfStar,
                'emptyStars' => $emptyStars
            ];

                // Fetch total quantity sold
            $totalQuantitySold = TransactionDetail::where('ProductID', $product->ProductID)
            ->where('TransactionStatus', '!=', 'Cancelled')
            ->sum('Quantity');

            // Store total quantity sold in product object
            $product->totalQuantitySold = $totalQuantitySold;
        }
        // if(auth())

        return view('home', ['products' => $products, "banners" => $banners]);
    }
}
