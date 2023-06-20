<?php

namespace App\Http\Controllers;

use App\Models\Discount;
use App\Models\Enrol;
use App\Models\Fee;
use App\Models\User;

class PaymentController extends Controller
{
    public function index()
    {
        $fees = Fee::withCount(['payments' => fn ($query) => $query->paid()])
            ->get()->keyBy('id');

        //dd($fees);
        $discountedScn = Discount::all('scn');
       // dump($fees instanceof \Illuminate\Database\Eloquent\Collection);



        //$enrols = Enrol::query()->whereIn('scn',$discountedScn)->with('user')->whereHas('user')->get();

        $discounted_sum = User::query()->join('payments','payments.user_id','=','users.id')
            ->join('transactions','transactions.id','=', 'payments.transaction_id')
            ->whereIn('enrol_id',(Enrol::whereIn('scn', $discountedScn)->pluck('id')))
            //->get();
            ->whereHas('payments', fn($q)=> $q->paid() )
            ->sum('amount');

       // dd($discounted_sum);

//        $users = User::query()->with('payments.transaction')
//            ->whereIn('enrol_id',(Enrol::whereIn('scn', $discountedScn)->pluck('id'))
//        )->whereHas('payments', fn($q)=> $q->paid() )->sum('amount');



            //= user()->enrol->scn ?? Null;


        return view('users.payments.index', compact(['fees', 'discounted_sum']));
    }


    public function show(User $user)
    {

        return view('users.payments.show', compact('user'));
    }
}
