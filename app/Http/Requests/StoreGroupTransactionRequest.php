<?php

namespace App\Http\Requests;

use App\Models\Payment;
use App\Models\Transaction;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Cache;

class StoreGroupTransactionRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }


    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [];
    }


    /**
     * Fulfill the request.
     *
     * @return Transaction
     */
    public function fulfill()
    {
        $users = Cache::get($key = "group.{$this->user->id}");

        start:

        $transaction = Cache::rememberForever("$key.transaction", function () use ($users) {

            $transaction = Transaction::create([
                'reference' => uniqid('nba-group'),
                'amount'    => $users->sum('fee.amount')
            ]);

            $users->each(function ($user) use ($transaction) {
                Payment::updateOrCreate(
                    ['user_id' => $user->id, 'fee_id' => $user->fee->id],
                    ['transaction_id' => $transaction->id]
                );
            });

            return $transaction;
        });

        if ($transaction->payments()->first()->fee->hasExpired()) {
            Cache::forget("$key.transaction");

            goto start;
        }

        return $transaction;
    }
}
