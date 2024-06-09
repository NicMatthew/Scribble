<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Support\Arr;


class ProductController extends Controller
{
    public function search(Request $request)
    {
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

    return view('product-catalog', compact('products', 'categoryName', 'search'));
    }

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

        return view('product-catalog', compact('products', 'categoryName', 'search'));

        // return view('product-catalog', compact('products', 'categoryName'));
    }

    public function showAllProducts(Request $request)
    {
        // Fetch all products with their images and entries
        $products = Product::with(['images', 'entries'])->get();

        // Add the first image and the minimum price to the main product object
        foreach ($products as $product) {
            // Adding the first image
            $product->ProductImage = $product->images->first()->Image ?? '/path/to/default-image.jpg';

            // Adding the minimum price
            $product->Price = $product->entries->min('Price') ?? 'N/A';
        }

        $categoryName = null;
        $search = null; 
        return view('product-catalog', compact('products', 'categoryName', 'search'));
    }

}