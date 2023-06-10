<?php

namespace App\Observers;

use App\Models\Fee;
use App\Models\Payment;
use App\Models\Transaction;
use App\Models\User;
use App\Notifications\PasswordChanged;
use App\Notifications\Welcome;
use Illuminate\Auth\Events\Registered;

class UserObserver
{
    /**
     * Handle the User "creating" event.
     *
     * @param User $user
     * @return void
     */
    public function creating(User $user)
    {
        if($user->isMale())
        {
            $user->photo = 'nbaconference/user/defaults/male';
        }

        if($user->isFemale())
        {
            $user->photo = 'nbaconference/user/defaults/female';
        }
        $user->registered_at = now();
    }


    /**
     * Handle the User "created" event.
     *
     * @param User $user
     * @return void
     */
    public function created(User $user)
    {
        event(new Registered($user));
    }


    /**
     * Handle the User "updating" event.
     *
     * @param User $user
     * @return void
     */
    public function updating(User $user)
    {
        if ($user->isDirty('email')) {
            $user->email_verified_at = null;
        }

        if (is_null($user->registered_at)) {
            $user->registered_at = now();
        }
    }


    /**
     * Handle the User "updated" event.
     *
     * @param User $user
     * @return void
     */
    public function updated(User $user)
    {
        if ($user->wasChanged('password')) {
            $user->notify(new PasswordChanged);
        }

        if ($user->wasChanged('email')) {
            $user->payments()->pending()->delete();
            $user->sendEmailVerificationNotification();
        }
        if($user->wasChanged('category_id')){

            if ($user->category_id == 15) {

               $payment =  $user->payments()->latest()->first();

               if (empty($payment)){

                   $transaction = Transaction::create([
                       'reference' => uniqid('nba-sponsored'),
                       'amount'    => 0,
                   ]);

                   //4. Create payment
                   Payment::updateOrCreate(
                       ['user_id'          => $user->id, 'fee_id' => 65],
                       ['transaction_id'   => $transaction->id]
                   );
                   $transaction->paid_at = now();
                   $transaction->save();
               }
               else
               {
                   Transaction::query()->where('id', $payment->transaction_id)
                       ->update(['amount' => 0, 'paid_at'=> now()]);
               }

            }
            //$user->assignRegNumber();
            $user->notify(new Welcome);
        }
    }


    /**
     * Handle the User "deleted" event.
     *
     * @param User $user
     * @return void
     */
    public function deleted(User $user)
    {
        //
    }
}
