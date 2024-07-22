<?php

namespace App\Http\Controllers;

use App\Models\CartDetail;
use App\Models\ProductEntry;
use App\Models\Transaction;
use App\Models\TransactionDetail;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function makeOrder(Request $request) {
        // dd($request->all());
        $newTransHead = new Transaction();

        $newTransHead->UserID = auth()->id();
        $newTransHead->VoucherShipmentID = $request->voucherShipmentID;
        $newTransHead->VoucherProductID = $request->voucherProductID;
        $newTransHead->TransactionDate = Carbon::now()->toDateString();
        $newTransHead->TransactionStatus = "Unpaid";
        $newTransHead->ReviewStatus = "none";
        $newTransHead->AddressID = $request->addressID;
        $newTransHead->TotalPrice = $request->totalPrice;

        $newTransHead->save();

        for ($i = 0; $i < count($request->productIDs); $i++) {
            $newTransDetail = new TransactionDetail();

            $newTransDetail->TransactionID = $newTransHead->TransactionID;
            $newTransDetail->ProductID = $request->productIDs[$i];
            $newTransDetail->VariantID = $request->variantIDs[$i];
            $newTransDetail->Quantity = $request->quantity[$i];

            $newTransDetail->save();

            CartDetail::where('UserID', auth()->id())
                    ->where('ProductID', $request->productIDs[$i])
                    ->where('VariantID', $request->variantIDs[$i])
                    ->delete();
        }

        $totalPrice = $request->totalPrice;
        $transactionID = $newTransHead->TransactionID;

        return redirect()->route("payment", compact("totalPrice", "transactionID"));
    }

    public function qr() {
        $totalPrice = request()->totalPrice;
        $transactionID = request()->transactionID;

        return view("payment-qr", compact("transactionID", "totalPrice"));
    }

    public function paymentSuccess() {
        $transaction = Transaction::find(request()->transactionID);
        $transaction->TransactionStatus = "Paid";
        $transaction->update();
        
        $this->reduceStock($transaction->TransactionID);

        return redirect()->route("transaction-list");
    }

    private function reduceStock($transactionID)
    {
        $transactionDetails = TransactionDetail::where('TransactionID', $transactionID)->get();

        foreach ($transactionDetails as $detail) {
           
            $product = ProductEntry::where('ProductID', $detail->ProductID)
                                ->where('VariantID', $detail->VariantID)
                                ->first();
            if ($product) {
                $product->Stock -= $detail->Quantity;
                $product->save();
            }
        }
    }

    public function retryPayment($transactionID)
    {
        $transaction = Transaction::find($transactionID);

        if ($transaction && $transaction->TransactionStatus == "Unpaid") {
            return redirect()->route("payment", ['transactionID' => $transaction->TransactionID, 'totalPrice' => $transaction->TotalPrice]);
        }
    }
}
