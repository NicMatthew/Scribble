<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;

class OrderAdminController extends Controller
{
    public function index()
    {
        // Ambil semua data transaksi
        $transactions = Transaction::all();
        
        // Kirim data ke view
        return view('admin.order-admin', compact('transactions'));
    }

    public function updateStatus(Request $request, $id)
    {
        $transaction = Transaction::findOrFail($id);

        // Update status based on the input status from the form
        $transaction->TransactionStatus = $request->input('status');
        $transaction->save();

        return redirect()->back()->with('success', 'Order status updated successfully.');
    }
}
