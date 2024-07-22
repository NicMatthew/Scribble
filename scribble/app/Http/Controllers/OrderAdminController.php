<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductEntry;
use App\Models\Transaction;
use App\Models\TransactionDetail;
use Illuminate\Http\Request;

class OrderAdminController extends Controller
{
    public function index()
    {
        // Ambil semua data transaksi
        $transactions = $transactions = Transaction::where('TransactionStatus', '!=', 'Unpaid')->paginate(10);
        
        // Kirim data ke view
        return view('admin.order-admin', compact('transactions'));
    }

    public function updateStatus(Request $request, $id)
    {
        $transaction = Transaction::findOrFail($id);

        // Update status based on the input status from the form
        $transaction->TransactionStatus = $request->input('status');
        $transaction->save();

        if ($request->input('status') == 'In Delivery') {
            $this->reduceStock($transaction->TransactionID);
        }

        return redirect()->back()->with('success', 'Order status updated successfully.');
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
}
