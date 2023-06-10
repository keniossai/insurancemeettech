<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Speaker;
use Illuminate\Http\Response;

class SpeakerController extends Controller
{
    public function show(Speaker $speaker)
    {
        return Response::api([
            'status' => true,
            'data'   => (string) view('speakers.quick', compact('speaker'))
        ]);
    }
}
