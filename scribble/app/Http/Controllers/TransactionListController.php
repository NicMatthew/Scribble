<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductEntry;
use App\Models\Review;
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
        $transactions = $transactions->sortByDesc('TransactionID');

        return view('transaction-list', compact('transactions'));
    }
    public function transaction_delete(){
        
        Transaction::where('TransactionID',request()->TransactionID)
        ->where('UserID',auth()->id())
        ->update(['TransactionStatus' => 'Cancelled']);

        $this->increaseStock(request()->TransactionID);

        return redirect()->route('transaction-list');
    }

    private function increaseStock($transactionID)
    {
        $transactionDetails = TransactionDetail::where('TransactionID', $transactionID)->get();

        foreach ($transactionDetails as $detail) {
            $product = ProductEntry::where('ProductID', $detail->ProductID)
                                ->where('VariantID', $detail->VariantID)
                                ->first();

            if ($product) {
                $product->Stock += $detail->Quantity;
                $product->save();
            }
        }
    }

    public function transaction_review(){
        // dd(request()->all());
        $transaction = Transaction::where('TransactionID', request()->TransactionID)->first();
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
        // dd($transaction);
        return view('review', compact('transaction'));
    }
    public function transaction_review_add(){
        // dd();
        $transaction = Transaction::find(request()->TransactionID);
        $transaction->ReviewStatus = "Reviewed";
        $transaction->update();

        for ($i=0; $i < count(request()->ProductID); $i++) {
            # code...
            $newReview = new Review();
            $newReview->ProductID = request()->ProductID[$i];
            $newReview->VariantID = request()->VariantID[$i];
            $newReview->TextReview = request()->TextReview[$i];
            $newReview->Rating = request()->Rating[$i];
            if(request()->Image[0]->getClientOriginalName() != 'myFile.txt'){
                $image = request()->Image[$i];

                // Konversi gambar ke dalam base64
                $imageBase64 = base64_encode(file_get_contents($image->getRealPath()));
                // dd(request()->Image[$i]);
                $newReview->Image = 'data:'.$image->getClientMimeType().';base64,'.$imageBase64;

            }
            // dd($newReview->Image);
            $newReview->UserID = auth()->id();


            $newReview->save();
        }
        return redirect()->route('transaction-list');

        // dd('test');
    }
}
