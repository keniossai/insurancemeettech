<?php

namespace App\Http\Controllers;

use App\Models\Speaker;

class SpeakerController extends Controller
{
    public function index()
    {
        $speakers  = Speaker::orderByDesc('is_key')->simplePaginate(16);

        return view('speakers.index', compact('speakers'));
    }


    public function show(Speaker $speaker)
    {
        return view('speakers.show', compact('speaker'));
    }
}
