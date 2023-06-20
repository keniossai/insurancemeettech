<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function show(Transaction $transaction)
    {
        $transaction->load(['payments' => ['user']]);

        return view('transactions.show', compact('transaction'));
    }
}
