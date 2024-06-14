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
        $cartItems = DB::table('cart_details as cd')
                        ->join('products as p', 'cd.ProductID', '=', 'p.ProductID')
                        ->join('variants as v', 'cd.VariantID', '=', 'v.VariantID')
                        ->join('users as u', 'cd.UserID', '=', 'u.UserID')
                        ->leftJoin('product_entries as pe', function($join) {
                            $join->on('v.VariantID', '=', 'pe.VariantID')
                                ->on('p.ProductID', '=', 'pe.ProductID');
                        })
                        ->leftJoin('product_images as pi', function($join) {
                            $join->on('p.ProductID', '=', 'pi.ProductID')
                                ->on('v.VariantID', '=', 'pi.VariantID');
                        })
                        ->where('cd.UserID', $user_id)
                        ->select('cd.*', 'p.*', 'v.*', 'u.*', 'pe.*', 'pi.*')
                        ->get();

        return view('cart', compact('cartItems'));
    }
    // public function index()
    // {
    //     $user_id = Auth::id();
    //     $cartItems = CartDetail::where('UserID', $user_id)
    //                 ->with('product', 'user', 'variant.entry')
    //                 ->get();

    //     return view('cart', compact('cartItems'));
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

    public function update(Request $request, $product_id, $variant_id, $user_id)
    {
        // Ambil data CartDetail yang sesuai
        $cartDetail = CartDetail::where('ProductID', $product_id)
                                ->where('VariantID', $variant_id)
                                ->where('UserID', $user_id)
                                ->first();

        if ($cartDetail) {
            // Hitung quantity baru
            $quantity = $request->quantity;
            if ($quantity == 0) {
                // Hapus item dari keranjang
                CartDetail::where('ProductID', $product_id)
                        ->where('VariantID', $variant_id)
                        ->where('UserID', $user_id)
                        ->delete();
            }else{
                // Update quantity di CartDetail
                CartDetail::where('ProductID', $product_id)
                        ->where('VariantID', $variant_id)
                        ->where('UserID', $user_id)
                        ->update(["Quantity" => $quantity]);
            }
            
        } 
        // Redirect atau berikan respons sesuai kebutuhan
        return redirect()->back()->with('success', 'Quantity updated successfully.');
    }

}
