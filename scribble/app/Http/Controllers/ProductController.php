<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\SubCategory;
use Illuminate\Support\Arr;


class ProductController extends Controller
{
    public function product_catalog(){
        $products = Product::selectRaw('NameProduct, products.ProductID, Rating, MIN(price) as Price')
        ->join('product_entries','products.ProductID','=','product_entries.ProductID')
        ->groupBy('ProductID')->get();

        // $products = (array) $products;

        
        foreach($products as $product){
            $image = Product::join('product_images','products.ProductID','=','product_images.ProductID')
            ->where('products.ProductID',$product->ProductID)->get()->first();
            $imageArray = array('ProductImage' => $image);

            $product["ProductImage"] = $image->Image;

        }


        // ->join('product_images','products.ProductID','=','product_images.ProductID')
        return view('product-catalog',
        ['products' => $products]);
    }


    public function showCategory($categoryName)
    {
        // Fetch category based on name
        $category = Category::where('NameCategory', $categoryName)->firstOrFail();

        // Fetch sub-categories under this category
        $subCategoryIds = $category->subCategories->pluck('SubCategoryProductID')->toArray();

        // Fetch products that belong to these sub-categories, including images and entries
        $products = Product::with(['images', 'entries'])
            ->whereIn('SubCategoryProductID', $subCategoryIds)
            ->get();

        // Add the first image and the minimum price to the main product object
        foreach ($products as $product) {
            // Adding the first image
            $product->ProductImage = $product->images->first()->Image ?? '/path/to/default-image.jpg';

            // Adding the minimum price
            $product->Price = $product->entries->min('Price');
        }

        $search = null;
        $categories = Category::all();
        $subcategories = SubCategory::all();

        return view('product-catalog', compact('products', 'categoryName', 'search','categories','subcategories'));

        // return view('product-catalog', compact('products', 'categoryName'));
    }

    public function showAllProducts(Request $request)
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
        // dd($category);
        return view('product-catalog', compact('products', 'search','categories','subcategories', 'category_select', 'subcategory_select', 'sorting'));
        
    }

}