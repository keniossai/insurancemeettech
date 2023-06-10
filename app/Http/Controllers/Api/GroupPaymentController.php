<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreGroupTransactionRequest;
use App\Models\User;
use Illuminate\Http\Response;

class GroupPaymentController extends Controller
{
    public function store(StoreGroupTransactionRequest $request, User $user)
    {
        $transaction = $request->fulfill();

        return Response::api([
            'message'       => 'Transaction Initialized',
            'data'          => [
                'transaction' => $transaction,
                'invoice_url' => route('transactions.show', $transaction),
            ]
        ]);
    }
}
