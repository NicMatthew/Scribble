<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;


class ProductController extends Controller
{
    public function searchProducts(Request $request)
    {
        $searchTerm = $request->input('search_term');

        $searchResults = Product::where('name', 'like', "%".strtolower($searchTerm)."%")->get();

        return view('product-catalog', compact('searchResults', 'searchTerm'));
    }
}
