<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTransactionRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;

class TransactionController extends Controller
{
    public function __construct()
    {
        $this->middleware('verified');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param StoreTransactionRequest $request
     * @param User $user
     * @return Response|RedirectResponse
     */
    public function store(StoreTransactionRequest $request, User $user)
    {
        $transaction = $request->fulfill();

        if (!$request->expectsJson()) {
            return to_route('transactions.pay', $transaction);
        }

        return Response::api([
            'message' => 'Transaction Initialized',
            'data'    => $transaction
        ]);
    }
}
