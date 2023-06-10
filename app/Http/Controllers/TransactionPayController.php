<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionPayController extends Controller
{
    public function __invoke(Transaction $transaction)
    {
        if ($transaction->payments()->first()->fee->hasExpired()) {
            abort(419);
        }

        return view('transactions.pay', compact('transaction'));
    }
}
