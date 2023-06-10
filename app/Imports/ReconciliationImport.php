<?php

namespace App\Imports;

use App\Models\Fee;
use App\Models\Payment;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ReconciliationImport implements ToCollection,  WithHeadingRow
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $rows)
    {
        foreach ($rows as $row)
        {
            $user = User::whereEmail($row['email']);
            //1Check if the user exist and  Get the user id
            if($user->exists())
            {
                //2a. check the if the reference no exist
                $transExist = Transaction::whereNull('paid_at')->whereReference($row['reference'])->first();

                if ($transExist)
                {
                    $transExist->paid_at = now();
                    $transExist->save();
                }
                else
                {
                    $isPaid = Transaction::whereReference($row['reference'])->whereNotNull('paid_at')->first();

                    if (!$isPaid) {
                        //2b. create transaction with the reference and  paid_at null
                        $transaction = Transaction::create([
                            'reference' => $row['reference'],
                            'amount'    => $row['amount'],
                        ]);
                        // 3. create payment with transaction id and fee id
                        $fee = Fee::forUser($user->first())->first();
                        //4. Create payment
                        Payment::updateOrCreate(
                            ['user_id'          => $user->first()->id, 'fee_id' => $fee->id],
                            ['transaction_id'   => $transaction->id]
                        );
                        // 5. update transaction paid_at
                        //$t = Transaction::find($payment->transaction_id);
                        $transaction->paid_at = now();
                        $transaction->save();

                    }

                }
            }
        }
    }
}
