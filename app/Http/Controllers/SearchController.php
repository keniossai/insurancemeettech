<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $users  = User::search($request->q)->limit(30)->get();

        return view('search.index', compact('users'));
    }
}
