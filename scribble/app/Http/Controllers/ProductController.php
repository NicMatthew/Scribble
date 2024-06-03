<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;


class ProductController extends Controller
{
    public function searchProducts(Request $request)
    {
        $searchTerm = $request->input('search_term');

        $searchResults = Product::where('name', 'like', "%".strtolower($searchTerm)."%")->get();

        return view('product-catalog', compact('searchResults', 'searchTerm'));
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
}