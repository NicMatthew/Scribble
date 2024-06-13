<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductEntry;
use App\Models\ProductImage;
use App\Models\SubCategory;
use App\Models\Wishlist;
use Illuminate\Support\Arr;
use Auth;


class ProductController extends Controller
{
    public function showProductDetail($productID) {
        $selectedProduct = Product::where("ProductID", $productID)->first();
        $variants = ProductEntry::join("variants", "variants.VariantID", "=", "product_entries.VariantID")
                                ->join("product_images", "product_images.VariantID", "=", "product_entries.VariantID")
                                ->where("product_images.ProductID", $productID)
                                ->get();

        // dd($product);
        if ($selectedProduct == null) {
            return redirect()->route("product-catalog");
        }

        $products = Product::with(['images', 'entries']) // Eager load images and entries
                            ->get();

        // Add the first image and the minimum price to the main product object
        foreach ($products as $product) {
            // Adding the first image
            $product->ProductImage = $product->images->first()->Image ?? '/path/to/default-image.jpg';

            // Adding the minimum price
            $product->Price = $product->entries->min('Price');
        };

        // dd($products);

        // Get wishlist product IDs
        $user = Auth::user();
        $wishlistProductIDs = Wishlist::where('UserID', $user->UserID)->pluck('ProductID')->toArray();

        return view("product-detail", compact("selectedProduct", "variants", "products","wishlistProductIDs"));
    }
    public function showAllProducts (Request $request)
    {
        $selected = null;
        if($request->search != null){
            if($request->category != null || $request->category != ""){
                $search = $request->search;
                $category = $request->category;
                $products = Product::where('NameProduct', 'like', "%$search%")
                                    ->join("sub_categories","sub_categories.SubCategoryProductID","=","products.SubCategoryProductID")
                                    ->join("categories","sub_categories.CategoryProductID","=","categories.CategoryProductID")
                                    ->where("NameCategory","=",$category)
                                    ->with(['images', 'entries']) // Eager load images and entries
                                    ->get();

                // Add the first image and the minimum price to the main product object
                foreach ($products as $product) {
                    // Adding the first image
                    $product->ProductImage = $product->images->first()->Image ?? '/path/to/default-image.jpg';

                    // Adding the minimum price
                    $product->Price = $product->entries->min('Price');
                }

            }
            elseif ($request->sub_category != null || $request->sub_category != ""){
                $search = $request->search;
                $subcategory = $request->sub_category;
                $products = Product::where('NameProduct', 'like', "%$search%")
                                    ->join("sub_categories","sub_categories.SubCategoryProductID","=","products.SubCategoryProductID")
                                    ->where("NameSubCategory","=",$subcategory)
                                    ->with(['images', 'entries']) // Eager load images and entries
                                    ->get();

                // Add the first image and the minimum price to the main product object
                foreach ($products as $product) {
                    // Adding the first image
                    $product->ProductImage = $product->images->first()->Image ?? '/path/to/default-image.jpg';

                    // Adding the minimum price
                    $product->Price = $product->entries->min('Price');
                }

            }
            else{
                $search = $request->search;
                $products = Product::where('NameProduct', 'like', "%$search%")
                                    ->with(['images', 'entries']) // Eager load images and entries
                                    ->get();

                // Add the first image and the minimum price to the main product object
                foreach ($products as $product) {
                    // Adding the first image
                    $product->ProductImage = $product->images->first()->Image ?? '/path/to/default-image.jpg';

                    // Adding the minimum price
                    $product->Price = $product->entries->min('Price');
                }

                $categoryName = null;

            }

        }
        else{
            if($request->category != null || $request->category != ""){
                $category = $request->category;
                $products = Product::join("sub_categories","sub_categories.SubCategoryProductID","=","products.SubCategoryProductID")
                                    ->join("categories","sub_categories.CategoryProductID","=","categories.CategoryProductID")
                                    ->where("NameCategory","=",$category)
                                    ->with(['images', 'entries']) // Eager load images and entries
                                    ->get();

                // Add the first image and the minimum price to the main product object
                foreach ($products as $product) {
                    // Adding the first image
                    $product->ProductImage = $product->images->first()->Image ?? '/path/to/default-image.jpg';

                    // Adding the minimum price
                    $product->Price = $product->entries->min('Price');
                }

            }
            elseif ($request->sub_category != null || $request->sub_category != ""){
                $search = $request->search;
                $subcategory = $request->sub_category;
                $products = Product::join("sub_categories","sub_categories.SubCategoryProductID","=","products.SubCategoryProductID")
                                    ->where("NameSubCategory","=",$subcategory)
                                    ->with(['images', 'entries']) // Eager load images and entries
                                    ->get();

                // Add the first image and the minimum price to the main product object
                foreach ($products as $product) {
                    // Adding the first image
                    $product->ProductImage = $product->images->first()->Image ?? '/path/to/default-image.jpg';

                    // Adding the minimum price
                    $product->Price = $product->entries->min('Price');
                }

            }
            else{
                $search = $request->search;
                $products = Product::with(['images', 'entries']) // Eager load images and entries
                                    ->get();

                // Add the first image and the minimum price to the main product object
                foreach ($products as $product) {
                    // Adding the first image
                    $product->ProductImage = $product->images->first()->Image ?? '/path/to/default-image.jpg';

                    // Adding the minimum price
                    $product->Price = $product->entries->min('Price');
                }

                $categoryName = null;

            }
        }
        $search = $request->search;
        $category_select = $request->category;
        $subcategory_select = $request->sub_category;
        if($category_select == null && $subcategory_select != null){
            $category_select = Category::join("sub_categories","sub_categories.CategoryProductID","=","categories.CategoryProductID")->where("sub_categories.NameSubCategory", $subcategory_select)->get()->first()->NameCategory;
        }
        $categories = Category::all();
        $subcategories = SubCategory::all();
        $sorting = $request->sorting;

        if($request->sorting != null || $request->sorting != ""){
            $sorting = $request->sorting;
            if($sorting=="Lowest Price"){
                $products = $products->sortBy('Price');

            }elseif($sorting=="Highest Price"){
                $products = $products->sortByDesc('Price');
            }
            elseif($sorting=="Top Sales"){
                // masih menunggu transaksi

            }

        }

        // Get wishlist product IDs
        $user = Auth::user();
        $wishlistProductIDs = Wishlist::where('UserID', $user->UserID)->pluck('ProductID')->toArray();
        // dd($category);
        return view('product-catalog', compact('products', 'search','categories','subcategories', 'category_select', 'subcategory_select', 'sorting','wishlistProductIDs'));
    }

    // public function addToWishlist(Request $request)
    // {
    //     $user = Auth::user();
    //     $productId = $request->input('product_id');

    //     $NewWishlist= new Wishlist();
    //     $NewWishlist->UserID = $user->UserID;
    //     $NewWishlist->ProductID = $productId;

    //     $NewWishlist->save();

    //     return redirect()->to($request->url);
    // }

    public function toggleWishlist(Request $request)
    {
        $user = Auth::user();
        $productId = $request->input('product_id');

        $wishlistItem = Wishlist::where('UserID', $user->UserID)->where('ProductID', $productId)->first();

        if ($wishlistItem) {
            $wishlistItem->delete();
        } else {
            $NewWishlist = new Wishlist();
            $NewWishlist->UserID = $user->UserID;
            $NewWishlist->ProductID = $productId;
            $NewWishlist->save();
        }

        return redirect()->to($request->url);
    }

    public function showWishlist()
    {
        $user = Auth::user();
        $wishlistProducts = Product::join("wishlists","wishlists.ProductID","=","products.ProductID")
        // ->join("product_images", "product_images.VariantID", "=", "product_entries.VariantID")
        ->where("UserID", $user->UserID)->get();

        return view('wishlist', compact('wishlistProducts'));
    }

    // public function removeFromWishlist(Request $request)
    // {
    //     $user = Auth::user();
    //     $productId = $request->input('product_id');

    //     Wishlist::where('UserID', $user->UserID)->where('ProductID', $productId)->delete();

    //     return redirect()->to($request->url);
    // }


}
