<?php

namespace App\Http\Controllers;

use App\Models\Speaker;
use Illuminate\Support\Facades\Cache;

class HomeController extends Controller
{
    public function index()
    {
        $speakers = Cache::remember('speakers', now()->addDay(), fn () => Speaker::orderByDesc('is_key')
            ->limit(8)
            ->get());

        return view('home', compact('speakers'));
    }
}
