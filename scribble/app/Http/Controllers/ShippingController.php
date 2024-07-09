<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductImage;
use App\Models\Variant;
use App\Models\VoucherProduct;
use App\Models\VoucherShipment;
use Illuminate\Http\Request;

class ShippingController extends Controller
{
    public function index(Request $request)
    {
        //dd($request->all()); // Ini akan menampilkan semua data yang dikirimkan dalam request
        // Ambil data dari request
        $variants = $request->input('variants', []);
        $quantities = $request->input('quantities', []);
        $productIDs = $request->input('productIDs', []);
        
        // Buat array untuk menyimpan data produk yang dipilih
        $selectedProducts = [];

        // foreach ($productIDs as $index => $productID) {
        //     $selectedProducts[] = [
        //         'productID' => $productID,
        //         'variantID' => $variants[$index],
        //         'quantity' => $quantities[$index],
        //     ];
        // }
        foreach ($productIDs as $index => $productID) {
            // Ambil data produk dari database berdasarkan product_id dan variant_id
            $product = Product::where('products.ProductID', $productID)
                    ->join('product_entries', 'products.ProductID', '=', 'product_entries.ProductID')
                    ->join('variants', 'product_entries.VariantID', '=', 'variants.VariantID')
                    ->where('variants.VariantID', $variants[$index])
                    ->first();

            $image = ProductImage::where("VariantID", "=", $variants[$index])
                                    ->where("ProductID", "=", $productID)
                                    ->first();

            $product->ProductImage = $image->Image;

            if ($product) {
                // Jika produk ditemukan, tambahkan ke dalam array
                $selectedProducts[] = [
                    'productID' => $productID,
                    'productName' => $product->NameProduct,
                    'variantName' => $product->VariantName,
                    'productPrice' => $product->Price,
                    'quantity' => $request->input('quantities')[$index], // Ambil quantity dari request
                    'productImage' => $product->ProductImage,
                ];
            }
        }

        $voucherProduct = VoucherProduct::all();
        $voucherShipment = VoucherShipment::all();

        // dd($selectedProducts);

        // Kirim data ke Blade view shipping.blade.php
        return view('shipping',compact('selectedProducts','voucherProduct','voucherShipment'));
        // return view('shipping');
    }
}
