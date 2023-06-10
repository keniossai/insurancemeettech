<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class RegisterController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'password'   => 'required|min:5|confirmed',
            'email'      => 'required|unique:users|email|confirmed',
            'phone'      => 'required|unique:users|digits_between:10,15',
            'enrol_id'   => 'nullable|required_with:branch_id|unique:users',
        ]);

        User::create($request->except('password_confirmation'));

        return Response::api([
            'title'   => "Check your email",
            'message' => "We have sent you a special link to continue."
        ]);
    }
}
