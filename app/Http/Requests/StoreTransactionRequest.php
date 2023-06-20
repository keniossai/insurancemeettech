<?php

namespace App\Http\Requests;

use App\Models\Fee;
use App\Models\Payment;
use App\Models\Transaction;
use Illuminate\Foundation\Http\FormRequest;

class StoreTransactionRequest extends FormRequest
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
        $fee = Fee::find($this->fee_id);

        return Transaction::whereHas('payments', function ($query) use ($fee) {


            $transaction = Transaction::create([
                'reference' => uniqid('nba'),
                'amount'    => $fee->amountPayable
            ]);

            Payment::updateOrCreate(
                ['user_id'          => $this->user->id, 'fee_id' => $fee->id],
                ['transaction_id'   => $transaction->id]
            );

            return $transaction;
        });
    }
}
