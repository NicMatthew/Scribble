<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Transaction;
use App\Models\TransactionDetail;
use App\Models\VoucherProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransactionListController extends Controller
{
    //
    public function index(){
        $transactions = Transaction::where('transactions.UserID',auth()->id())->get();
        foreach($transactions as $transaction){
            $transaction->details = TransactionDetail::where('transaction_details.TransactionID',$transaction->TransactionID)
            ->join('products','products.ProductID','=','transaction_details.ProductID')
            ->join('variants','variants.VariantID','=','transaction_details.VariantID')
            ->join('product_entries', function ($join) {
                $join->on('product_entries.ProductID', '=', 'products.ProductID')
                    ->orOn('product_entries.VariantID', '=', 'variants.VariantID');
                })
            // ->join('product_entries','product_entries.ProductID','=','products.ProductID')
            // ->where('product_entries.VariantID','variants.VariantID')
            ->get();
            $transaction->Discount = VoucherProduct::where('VoucherProductID',$transaction->VoucherProductID)->get();
        }
        dd($transactions);

        return view('transaction-list');
    }
}
