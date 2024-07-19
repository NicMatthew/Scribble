<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductEntry;
use App\Models\ProductImage;
use App\Models\SubCategory;
use App\Models\Wishlist;
// use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;


class ProductController extends Controller
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

    protected function setImageAndMinPrice($products) {
        foreach ($products as $product) {
            // Adding the first image
            $product->ProductImage = $product->images->first()->Image ?? '/path/to/default-image.jpg';

            // Adding the minimum price
            $product->Price = $product->entries->min('Price');
        }

        return $products;
    }
    public function showProductDetail($productID) {
        $selectedProduct = Product::where("ProductID", $productID)->first();

        if(Auth::check()){
            $wish = Wishlist::where('UserID', Auth::user()->UserID)
            ->where('ProductID', $selectedProduct->ProductID)
            ->first();

            if ($wish != null) {
                $selectedProduct->inWishlist = true;
            } else {
                $selectedProduct->inWishlist = null;
            }
        }

        $variants = ProductEntry::join("variants", "variants.VariantID", "=", "product_entries.VariantID")
                                ->join("product_images", "product_images.VariantID", "=", "product_entries.VariantID")
                                ->where("product_images.ProductID", $productID)
                                ->where("product_entries.ProductID", $productID)
                                ->get()
                                // ->sortBy('VariantName')
                                ;

        // dd($variants);
        // $variants = collect($variants);
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
        $wishlistProductIDs=null;

        if(auth()->check() == true){
            $wishlistProductIDs = Wishlist::where('UserID', Auth::id())->pluck('ProductID')->toArray();
            $products = $this->checkWishlist($products);
        }

        return view("product-detail", compact("selectedProduct", "variants", "products","wishlistProductIDs"));
    }
    // public function showAllProducts (Request $request)
    // {
    //     $selected = null;
    //     $products = null;
    //     $search = $request->search;
    //     $category_select = $request->category;
    //     $subcategory_select = $request->sub_category;

        
        
    //     if($search != null){
    //         if($category_select != null || $category_select != ""){
    //             $products = Product::where('NameProduct', 'like', "%$search%")
    //                                 ->join("sub_categories","sub_categories.SubCategoryProductID","=","products.SubCategoryProductID")
    //                                 ->join("categories","sub_categories.CategoryProductID","=","categories.CategoryProductID")
    //                                 ->where("NameCategory","=",$category_select)
    //                                 ->with(['images', 'entries']) // Eager load images and entries
    //                                 ->get();

    //         }
    //         elseif ($subcategory_select != null || $subcategory_select != ""){
    //             $products = Product::where('NameProduct', 'like', "%$search%")
    //                                 ->join("sub_categories","sub_categories.SubCategoryProductID","=","products.SubCategoryProductID")
    //                                 ->where("NameSubCategory","=",$subcategory_select)
    //                                 ->with(['images', 'entries']) // Eager load images and entries
    //                                 ->get();
    //         }
    //         else{
    //             $products = Product::where('NameProduct', 'like', "%$search%")
    //                                 ->with(['images', 'entries']) // Eager load images and entries
    //                                 ->get();

    //         }

    //     }
    //     else{
    //         if($category_select != null || $category_select != ""){
    //             $products = Product::join("sub_categories","sub_categories.SubCategoryProductID","=","products.SubCategoryProductID")
    //                                 ->join("categories","sub_categories.CategoryProductID","=","categories.CategoryProductID")
    //                                 ->where("NameCategory", "=", $category_select)
    //                                 ->with(['images', 'entries']) // Eager load images and entries
    //                                 ->get();

    //         }
    //         elseif ($subcategory_select != null || $subcategory_select != ""){
    //             $products = Product::join("sub_categories","sub_categories.SubCategoryProductID","=","products.SubCategoryProductID")
    //                                 ->where("NameSubCategory","=", $subcategory_select)
    //                                 ->with(['images', 'entries']) // Eager load images and entries
    //                                 ->get();

    //         }
    //         else{
    //             $products = Product::with(['images', 'entries']) // Eager load images and entries
    //                                 ->get();

    //             // Add the first image and the minimum price to the main product object

    //         }
    //     }

        
    //     $products = $this->setImageAndMinPrice($products);

    //     if($category_select == null && $subcategory_select != null){
    //         $category_select = Category::join("sub_categories","sub_categories.CategoryProductID","=","categories.CategoryProductID")->where("sub_categories.NameSubCategory", $subcategory_select)->get()->first()->NameCategory;
    //     }
    //     $categories = Category::all();
    //     $subcategories = SubCategory::all();
    //     $sorting = $request->sorting;

    //     if($sorting != null || $sorting != ""){
    //         if($sorting=="Lowest Price"){
    //             $products = $products->sortBy('Price');

    //         }elseif($sorting=="Highest Price"){
    //             $products = $products->sortByDesc('Price');
    //         }
    //         elseif($sorting=="Top Sales"){
    //             // masih menunggu transaksi

    //         }


    //     }


    //     // Get wishlist product IDs
    //     $user = Auth::user();
    //     if($user == null){
    //         return redirect()->route('log-in');
    //     }
    //     $wishlistProductIDs = Wishlist::where('UserID', $user->UserID)->pluck('ProductID')->toArray();

    //     $products = $this->checkWishlist($products);
    //     return view('product-catalog', compact('products', 'search','categories','subcategories', 'category_select', 'subcategory_select', 'sorting','wishlistProductIDs'));
    // }

    public function showAllProducts(Request $request)
{
    $selected = null;
    $search = $request->search;
    $category_select = $request->category;
    $subcategory_select = $request->sub_category;
    $sorting = $request->sorting;

    $query = Product::query();

    if ($search != null) {
        $query->where('NameProduct', 'like', "%$search%");
    }

    if ($category_select != null && $category_select != "") {
        $query->join("sub_categories", "sub_categories.SubCategoryProductID", "=", "products.SubCategoryProductID")
              ->join("categories", "sub_categories.CategoryProductID", "=", "categories.CategoryProductID")
              ->where("NameCategory", "=", $category_select);
    }

    if ($subcategory_select != null && $subcategory_select != "") {
        $query->join("sub_categories", "sub_categories.SubCategoryProductID", "=", "products.SubCategoryProductID")
              ->where("NameSubCategory", "=", $subcategory_select);
    }

    $query->with(['images', 'entries']);

    if ($sorting != null && $sorting != "") {
        if ($sorting == "Lowest Price") {
            $query->orderBy('Price', 'asc');
        } elseif ($sorting == "Highest Price") {
            $query->orderBy('Price', 'desc');
        }
    }

    // Get the products as a collection
    $products = $query->get();

    // Process the products
    $products = $this->setImageAndMinPrice($products);

    if ($category_select == null && $subcategory_select != null) {
        $category_select = Category::join("sub_categories", "sub_categories.CategoryProductID", "=", "categories.CategoryProductID")
                                    ->where("sub_categories.NameSubCategory", $subcategory_select)
                                    ->get()
                                    ->first()
                                    ->NameCategory;
    }

    $categories = Category::all();
    $subcategories = SubCategory::all();

    $user = Auth::user();
    if ($user == null) {
        return redirect()->route('log-in');
    }

    $wishlistProductIDs = Wishlist::where('UserID', $user->UserID)->pluck('ProductID')->toArray();
    $products = $this->checkWishlist($products);

    // Manually paginate the results
    $perPage = 16;
    $currentPage = LengthAwarePaginator::resolveCurrentPage();
    $currentItems = $products->slice(($currentPage - 1) * $perPage, $perPage)->all();
    $paginatedProducts = new LengthAwarePaginator($currentItems, $products->count(), $perPage, $currentPage, [
        'path' => LengthAwarePaginator::resolveCurrentPath()
    ]);

    return view('product-catalog', compact('paginatedProducts', 'search', 'categories', 'subcategories', 'category_select', 'subcategory_select', 'sorting', 'wishlistProductIDs'));
}

    public function toggleWishlist(Request $request)
    {
        if(auth()->check() == false){
            return redirect()->route('log-in');
        }
        $user = Auth::user();
        $productId = $request->input('product_id');

        $wishlistItem = Wishlist::where('UserID', $user->UserID)->where('ProductID', $productId)->first();

        if ($wishlistItem) {
            Wishlist::where('UserID', $user->UserID)
                    ->where('ProductID', $productId)
                    ->delete();
        // if ($wishlistItem) {
        //     $wishlistItem->delete();
        } else {
            $NewWishlist = new Wishlist();
            $NewWishlist->UserID = $user->UserID;
            $NewWishlist->ProductID = $productId;
            $NewWishlist->save();
        }

        return redirect()->back();
    }



    public function showWishlist()
{
    $user = Auth::user();

    // Get wishlist products with their images and entries
    $wishlistProducts = Product::with(['images', 'entries'])
        ->join("wishlists", "wishlists.ProductID", "=", "products.ProductID")
        ->where("UserID", $user->UserID)
        ->select('products.*')
        ->get();

    // Add the first image and the minimum price to each product in the wishlist
    foreach ($wishlistProducts as $product) {
        $product->ProductImage = $product->images->first()->Image ?? '/path/to/default-image.jpg';
        $product->Price = $product->entries->min('Price');
        $product->inWishlist = true;
    }

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
