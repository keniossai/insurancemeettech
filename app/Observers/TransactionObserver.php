<?php

namespace App\Observers;

use App\Models\Transaction;
use App\Notifications\Welcome;
use Illuminate\Support\Facades\Notification;

class TransactionObserver
{
    /**
     * Handle the Transaction "created" event.
     *
     * @param Transaction $transaction
     * @return void
     */
    public function created(Transaction $transaction)
    {
        //
    }


    /**
     * Handle the Transaction "updated" event.
     *
     * @param Transaction $transaction
     * @return void
     */
    public function updated(Transaction $transaction)
    {
        if ($transaction->isPaid()) {

            dispatch(function () use ($transaction) {

                $transaction->notifiables()->each->assignRegNumber();

                Notification::send($transaction->notifiables(), new Welcome);
            });
        }
    }


    /**
     * Handle the Transaction "deleted" event.
     *
     * @param Transaction $transaction
     * @return void
     */
    public function deleted(Transaction $transaction)
    {
        //
    }
}
