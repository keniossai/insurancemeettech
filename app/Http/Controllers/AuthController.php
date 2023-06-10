<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register()
    {
        $categories = Category::all();
        $branches   = Branch::all();

        return view('auth.register.index', compact(['categories', 'branches']));
    }


    public function logout()
    {
        Auth::logout();

        return to_route('login');
    }
}
