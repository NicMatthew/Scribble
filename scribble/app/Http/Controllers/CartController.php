<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CartDetail;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index()
    {
        // Logika untuk menampilkan halaman keranjang belanja
        return view('cart.index'); // Gantilah 'cart.index' dengan nama view yang sesuai
    }

    public function addToCart(Request $request)
    {
        // Ambil data dari request
        $product_id = $request->input('product_id');
        $variant_id = $request->input('var'); // Tambahkan ini untuk mengambil variant_id
        $quantity = $request->input('quantity');
        $user_id = Auth::id();
        // dd($product_id);
        // dd($variant_id);
        // dd($quantity);
        // dd($user_id);

        // Simpan ke database, pastikan model Cart dan relationship sudah benar
        $cartDetail = CartDetail::updateOrCreate(
            [
                'ProductID' => $product_id,
                'VariantID' => $variant_id,
                'UserID' => $user_id,
            ],
            [
                'Quantity' => $quantity,
            ]
        );

        // Redirect ke halaman keranjang atau halaman lain yang sesuai
        return redirect()->route('cart.index')->with('success', 'Product added to cart successfully!');
    }
}
