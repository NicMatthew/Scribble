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
        $products = Product::where(function($query) use ($search){

            $query->where('NameProduct', 'like', "%$search%");

        })
        ->get();
        return view('product-catalog', compact('products', 'search'));

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

    public function product_catalog1(Request $request)
    {
        $searchTerm = $request->input('search_term');
        $showall = $request->has('show_all'); // Check for "show_all" hidden field

        $productsQuery = Product::selectRaw('NameProduct, products.ProductID, Rating, MIN(price) as Price')
            ->join('product_entries', 'products.ProductID', '=', 'product_entries.ProductID')
            ->groupBy('ProductID');

        if (!$showall && $searchTerm) {
            // Search case
            $productsQuery->where('name', 'like', "%".strtolower($searchTerm)."%");
        }

        $products = $productsQuery->get();

        // Efficient product image attachment
        $products = $products->map(function ($product) {
            $image = Product::join('product_images', 'products.ProductID', '=', 'product_images.ProductID')
                ->where('products.ProductID', $product->ProductID)
                ->get()
                ->first();

            if ($image) { // Check if image exists before adding
                $product->ProductImage = $image->Image;
            }

            return $product;
        });

        $message = ''; // Initialize message for product not found
        if ($searchTerm && $products->isEmpty()) {
            $message = 'Product not found.';
        }

        return view('product-catalog', compact('products', 'searchTerm', 'message'));
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

        return view('product-catalog', compact('products', 'categoryName'));
    }

}