<?php

namespace App\Http\Controllers;

use App\Models\Enrol;

class EnrolController extends Controller
{
    public function show(Enrol $enrol)
    {
        abort_unless($enrol->user, 404);

        return to_route('users.show', $enrol->user);
    }
}
