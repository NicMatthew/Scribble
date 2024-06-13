<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CartDetail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function index()
    {
        $user_id = Auth::id();
        // dd($user_id);
        // $cartItems = CartDetail::where('UserID', $user_id)
        // ->with('product', 'user', 'variant')
        // ->get();
        // $cartItems = CartDetail::where('UserID', $user_id)
        // ->with('product.entries', 'variant')
        // ->get();

        $cartItems = CartDetail::where('UserID', $user_id)
                    ->with('product', 'user', 'variant.entry') // Memuat relasi entry dari variant
                    ->get();
        // $cartItems = CartDetail::where('UserID', $user_id)->get();
        // dd($cartItems);

        return view('cart', compact('cartItems'));
    }

    // public function addToCart(Request $request)
    // {
    //     // Ambil data dari request
    //     $product_id = $request->input('product_id');
    //     $variant_id = $request->input('var'); // Tambahkan ini untuk mengambil variant_id
    //     $quantity = $request->input('quantity');
    //     $user_id = Auth::id();
    //     // dd($product_id);
    //     // dd($variant_id);
    //     // dd($quantity);
    //     // dd($user_id);

    //     // Simpan ke database, pastikan model Cart dan relationship sudah benar
    //     $cartDetail = CartDetail::updateOrCreate(
    //         [
    //             'ProductID' => $product_id,
    //             'VariantID' => $variant_id,
    //             'UserID' => $user_id,
    //         ],
    //         [
    //             'Quantity' => $quantity,
    //         ]
    //     );

    //     // Redirect ke halaman keranjang atau halaman lain yang sesuai
    //     return redirect()->route('cart.index')->with('success', 'Product added to cart successfully!');
    // }

    public function addToCart(Request $request)
    {
        $product_id = $request->input('product_id');
        $variant_id = $request->input('var');
        $quantity = $request->input('quantity');
        $user_id = Auth::id();

        $cartDetail = CartDetail::where('ProductID', $product_id)
                                ->where('VariantID', $variant_id)
                                ->where('UserID', $user_id)
                                ->first();
        
        // Jika record tidak ditemukan, buat baru
        if ($cartDetail == null) {
            $NewcartDetail = new CartDetail();
            $NewcartDetail->ProductID = $product_id;
            $NewcartDetail->VariantID = $variant_id;
            $NewcartDetail->UserID = $user_id;
            $NewcartDetail->Quantity = $quantity;
            $NewcartDetail->save();
        } else {
            $quantity = $quantity + $cartDetail->Quantity;
            CartDetail::where('ProductID', $product_id)
                                ->where('VariantID', $variant_id)
                                ->where('UserID', $user_id)
                                ->update(["Quantity" => $quantity]);
        }

        // Redirect ke halaman keranjang atau halaman lain yang sesuai
        return redirect()->route('cart.index')->with('success', 'Product added to cart successfully!');
    }
}
