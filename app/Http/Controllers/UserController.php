<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use App\Models\Category;
use App\Models\Fee;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        //
    }


    public function profile(Request $request)
    {
        return $this->show($request->user());
    }


    public function show(User $user)
    {

        $payment    = $user->payments()->paid()->first();

        return view('users.show', compact(['user', 'payment']));
    }
}
