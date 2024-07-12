<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransactionListController extends Controller
{
    //
    public function index(){
        $transactions = Transaction::join('transaction_details','transaction_details.TransactionID','=','transactions.TransactionID')
        ->where('transactions.UserID',auth()->id());
        
        return view('transaction-list');
    }
}
