<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\CartDetail;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\Transaction;
use App\Models\TransactionDetail;
use App\Models\Variant;
use App\Models\VoucherProduct;
use App\Models\VoucherShipment;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ShippingController extends Controller
{
    public function index(Request $request)
    {
        // Ambil data dari request
        $variants = $request->input('variants', []);
        $quantities = $request->input('quantities', []);
        $productIDs = $request->input('productIDs', []);
        $addressID = $request->addressID;

        // Buat array untuk menyimpan data produk yang dipilih
        $selectedProducts = [];

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
            // dd($product);

            if ($product) {
                // Jika produk ditemukan, tambahkan ke dalam array
                $selectedProducts[] = [
                    'productID' => $productID,
                    'productName' => $product->NameProduct,
                    'variantName' => $product->VariantName,
                    'productPrice' => $product->Price,
                    'quantity' => $request->input('quantities')[$index], // Ambil quantity dari request
                    'productImage' => $product->ProductImage,
                    "variantID" => $product->VariantID,
                    'CategoryID' => Category::join('sub_categories','sub_categories.CategoryProductID','=','categories.CategoryProductID')->where('SubCategoryProductID',$product->SubCategoryProductID)->first()->CategoryProductID
                ];
            }
        }

        $voucherProduct = VoucherProduct::all();
        $voucherShipment = VoucherShipment::all();
        $address = Address::find($addressID);

        return view('shipping',compact('selectedProducts','voucherProduct','voucherShipment', "address"));
    }

    public function buyNow(Request $request)
    {
        // Ambil data produk yang dibeli
        $productID = $request->input('productIDs');
        $quantity = $request->input('quantities');
        $variantID = $request->input('variants');
        $addressID = $request->addressID;

        // Ambil data produk dari database berdasarkan product_id dan variant_id
        $product = Product::where('products.ProductID', $productID)
                ->join('product_entries', 'products.ProductID', '=', 'product_entries.ProductID')
                ->join('variants', 'product_entries.VariantID', '=', 'variants.VariantID')
                ->where('variants.VariantID', $variantID)
                ->first();

        $image = ProductImage::where("VariantID", "=", $variantID)
                                ->where("ProductID", "=", $productID)
                                ->first();

        $product->ProductImage = $image->Image;

        // Jika produk ditemukan, buat array untuk produk yang dibeli
        if ($product) {
            $selectedProducts = [
                [
                    'productID' => $productID[0],
                    'productName' => $product->NameProduct,
                    'variantName' => $product->VariantName,
                    'productPrice' => $product->Price,
                    'quantity' => $quantity[0],
                    'productImage' => $product->ProductImage,
                    'variantID' => $variantID[0],
                    'CategoryID' => Category::join('sub_categories','sub_categories.CategoryProductID','=','categories.CategoryProductID')->where('SubCategoryProductID',$product->SubCategoryProductID)->first()->CategoryProductID
                ]
            ];
        }
        $voucherProduct = VoucherProduct::where("EndDate", ">=", now())->where("StartDate", "<=", now())->get();
        $voucherShipment = VoucherShipment::where("EndDate", ">=", now())->where("StartDate", "<=", now())->get();
        $address = Address::find($addressID);

        // Redirect ke halaman shipping dengan data produk yang dibeli
        return view('shipping', compact('selectedProducts', 'voucherProduct', 'voucherShipment', "address"));
    }
}
