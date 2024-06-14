<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CartDetail;
use App\Models\ProductImage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function index()
    {
        $user_id = Auth::id();
        $cartItems = CartDetail::where('UserID', $user_id)
                    ->with('product', 'user', 'variant.entry')
                    ->get();

        return view('cart', compact('cartItems'));
    }

//     public function index()
// {
//     $user_id = Auth::id();
    
//     // Ambil cart items dengan relasi yang dibutuhkan
//     $cartItems = CartDetail::where('UserID', $user_id)
//                     ->with('product', 'user', 'variant.entry') // Memuat relasi entry dari variant
//                     ->get();

//     // Loop melalui setiap item keranjang untuk menambahkan data gambar
//     foreach ($cartItems as $item) {
//         // Ambil gambar pertama yang sesuai dengan ProductID dan VariantID dari tabel product_images
//         $productImage = ProductImage::where('ProductID', $item->ProductID)
//                                    ->where('VariantID', $item->VariantID)
//                                    ->first();
//         // Jika gambar ditemukan, tambahkan data gambar ke dalam item
//         if ($productImage) {
//             $item->image = $productImage->Image;
//             dd($item->Image);
//         } else {
//             $item->image = null; // Atau set null jika gambar tidak ditemukan
//         }
//     }

//     return view('cart', compact('cartItems'));
// }

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

    // public function update(Request $request, CartDetail $cartDetail)
    // {
    //     // Ambil data quantity dari request
    //     $quantity = $request->input('quantity');

    //     // Update quantity di database
    //     $cartDetail->update([
    //         'Quantity' => $quantity,
    //     ]);

    //     // Redirect kembali ke halaman cart dengan pesan sukses
    //     return redirect()->route('cart.index')->with('success', 'Quantity updated successfully!');
    // }

    public function update(Request $request, $product_id, $variant_id, $user_id)
    {
        // Ambil data CartDetail yang sesuai
        $cartDetail = CartDetail::where('ProductID', $product_id)
                                ->where('VariantID', $variant_id)
                                ->where('UserID', $user_id)
                                ->first();
        
        // if ($cartDetail) {
        //     // Update quantity di CartDetail dengan nilai baru dari request
        //     CartDetail::where('ProductID', $product_id)
        //             ->where('VariantID', $variant_id)
        //             ->where('UserID', $user_id)
        //             ->update(["Quantity" => $request->quantity]);
        // } 

        if ($cartDetail) {
            // Hitung quantity baru
            $quantity = $cartDetail->Quantity + $request->quantity;

            // Update quantity di CartDetail
            CartDetail::where('ProductID', $product_id)
                                ->where('VariantID', $variant_id)
                                ->where('UserID', $user_id)
                                ->update(["Quantity" => $quantity]);
        } 
        // Redirect atau berikan respons sesuai kebutuhan
        return redirect()->back()->with('success', 'Quantity updated successfully.');
    }

}
