<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Review;
use App\Models\Product;
use App\Models\Category;
use App\Models\Wishlist;
use App\Models\SubCategory;
use Illuminate\Support\Arr;
use App\Models\ProductEntry;
use App\Models\ProductImage;
// use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Http\Request;
use App\Models\TransactionDetail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Pagination\LengthAwarePaginator;


class ProductController extends Controller
{
    public function checkWishlist($products) {
        if (Auth::check()) {
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
        } else {
            foreach($products as $product) {
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
            $averageRating = Review::where('ProductID', $product->ProductID)
                               ->avg('Rating');


            // Calculate stars logic
            $fullStars = floor($averageRating);
            $halfStar = ($averageRating - $fullStars) >= 0.5;
            $emptyStars = 5 - ceil($averageRating);

            // $averageRating = $reviews->avg('Rating');

        // $fullStars = floor($averageRating);
        // $halfStar = ($averageRating - $fullStars) >= 0.5;

        // // Calculate empty stars count
        // $emptyStars = 5 - $fullStars - ($halfStar ? 1 : 0);

            // Store stars data in product object
            $product->stars = [
                'fullStars' => $fullStars,
                'halfStar' => $halfStar,
                'emptyStars' => $emptyStars
            ];

            // Fetch total quantity sold
            $totalQuantitySold = TransactionDetail::where('ProductID', $product->ProductID)
                                                ->sum('Quantity');

            // Store total quantity sold in product object
            $product->totalQuantitySold = $totalQuantitySold;
        }

        // dd($products);

        return $products;
    }

    protected function setProductCard($products) {
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
            ->sum('Quantity');

            // Store total quantity sold in product object
            $product->totalQuantitySold = $totalQuantitySold;
        }
        return $products;
    }

    public function showProductDetail($productID) {
        $selectedProduct = Product::where("ProductID", $productID)->first();
        $selectedProduct = [$selectedProduct];
        $selectedProduct = $this->checkWishlist($selectedProduct);
        $selectedProduct = $selectedProduct[0];

        $variants = ProductEntry::join("variants", "variants.VariantID", "=", "product_entries.VariantID")
                                ->join("product_images", "product_images.VariantID", "=", "product_entries.VariantID")
                                ->where("product_images.ProductID", $productID)
                                ->where("product_entries.ProductID", $productID)
                                ->get();

        $reviews = Review::where('ProductID', $productID)
                    ->with('reviewer') // Eager load the reviewer information
                    ->get();

        $totalQuantitySold = TransactionDetail::where('ProductID', $productID)
                    ->sum('Quantity');


        $averageRating = $reviews->avg('Rating');
        $reviewCount = Review::where('ProductID', $productID)->count();

        $fullStars = floor($averageRating);
        $halfStar = ($averageRating - $fullStars) >= 0.5;

        // Calculate empty stars count
        $emptyStars = 5 - $fullStars - ($halfStar ? 1 : 0);

        if ($selectedProduct == null) {
            return redirect()->route("product-catalog");
        }

        $products = Product::with(['images', 'entries']) // Eager load images and entries
                            ->get()->random(10);

        // Add the first image and the minimum price to the main product object
        $products = $this->setProductCard($products);

        // Get wishlist product IDs
        $wishlistProductIDs=null;

        if(auth()->check() == true){
            $wishlistProductIDs = Wishlist::where('UserID', Auth::id())->pluck('ProductID')->toArray();
            $products = $this->checkWishlist($products);
        }

        return view("product-detail", compact("selectedProduct", "variants", "products","wishlistProductIDs", "reviews", "averageRating", "reviewCount", "fullStars", "halfStar", "emptyStars", "totalQuantitySold"));
    }


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

        // Get the products as a collection
        $products = $query->get();

        // Process the products
        $products = $this->setImageAndMinPrice($products);

        if ($sorting != null && $sorting != "") {
            if ($sorting == "Lowest Price") {
                $products = $products->sortBy("Price");
            } elseif ($sorting == "Highest Price") {
                $products = $products->sortByDesc("Price");
            } elseif ($sorting == "Top Sales") {
                $products = $products->sortByDesc("totalQuantitySold");
            }
        }

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

        $products = $this->checkWishlist($products);

        // Manually paginate the results
        $perPage = 16;
        $currentPage = LengthAwarePaginator::resolveCurrentPage();
        $currentItems = $products->slice(($currentPage - 1) * $perPage, $perPage)->all();
        $paginatedProducts = new LengthAwarePaginator($currentItems, $products->count(), $perPage, $currentPage, [
            'path' => LengthAwarePaginator::resolveCurrentPath(),
            'query' => $request->query(),
        ]);

        return view('product-catalog', compact('paginatedProducts', 'search', 'categories', 'subcategories', 'category_select', 'subcategory_select', 'sorting'));
    }

        public function toggleWishlist(Request $request)
        {
            $user = Auth::user();
            $productId = $request->input('product_id');

            $wishlistItem = Wishlist::where('UserID', $user->UserID)->where('ProductID', $productId)->first();

            if ($wishlistItem) {
                Wishlist::where('UserID', $user->UserID)
                        ->where('ProductID', $productId)
                        ->delete();
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
}
