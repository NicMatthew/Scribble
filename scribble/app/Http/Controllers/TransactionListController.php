<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Transaction;
use App\Models\TransactionDetail;
use App\Models\VoucherProduct;
use Illuminate\Cache\RedisTagSet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TransactionListController extends Controller
{
    //
    public function index(){
        $transactions = Transaction::where('transactions.UserID',auth()->id())->get();
        foreach($transactions as $transaction){
            $transaction->details = TransactionDetail::where('transaction_details.TransactionID', $transaction->TransactionID)
                ->join('products', 'products.ProductID', '=', 'transaction_details.ProductID')
                ->join('variants', 'variants.VariantID', '=', 'transaction_details.VariantID')
                ->join('product_entries', function ($join) {
                    $join->on('product_entries.ProductID', '=', 'products.ProductID')
                        ->on('product_entries.VariantID', '=', 'variants.VariantID');
                })
                ->leftJoinSub(
                    DB::table('product_images')
                        ->select('ProductID', 'VariantID', DB::raw('MIN(ImageProductID) as ImageID'))
                        ->groupBy('ProductID', 'VariantID'),
                    'first_images',
                    function ($join) {
                        $join->on('first_images.ProductID', '=', 'transaction_details.ProductID')
                            ->on('first_images.VariantID', '=', 'transaction_details.VariantID');
                    }
                )
                ->leftJoin('product_images', function ($join) {
                    $join->on('product_images.ImageProductID', '=', 'first_images.ImageID');
                })
                ->get();
            // discount masih belum
            $transaction->Discount = VoucherProduct::where('VoucherProductID',$transaction->VoucherProductID)->get();

            if ($transaction->TransactionStatus == "Paid") {
                $transaction->statusColor = "bnw";
            } else if ($transaction->TransactionStatus == "In Packaging") {
                $transaction->statusColor = "yellow";
            } else if ($transaction->TransactionStatus == "In Delivery") {
                $transaction->statusColor = "blue";
            } else if ($transaction->TransactionStatus == "Finished") {
                $transaction->statusColor = "green";
            } else if ($transaction->TransactionStatus == "Cancelled") {
                $transaction->statusColor = "pink";
            }
        }

        return view('transaction-list', compact('transactions'));
    }
    public function transaction_delete(){
        // jika mau diapus
        // Transaction::where('TransactionID',request()->TransactionID)->where('UserID',auth()->id())->delete();
        // TransactionDetail::where('TransactionID',request()->TransactionID)->delete();

        Transaction::where('TransactionID',request()->TransactionID)
        ->where('UserID',auth()->id())
        ->update(['TransactionStatus' => 'Cancelled']);
        return redirect()->route('transaction-list');
    }
}
