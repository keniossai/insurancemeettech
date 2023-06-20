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
        return view('users.payments.index', compact(['fees', 'discounted_sum']));
    }


    public function show(User $user)
    {

        return view('users.payments.show', compact('user'));
    }
}
