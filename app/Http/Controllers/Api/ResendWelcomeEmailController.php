<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Notifications\Welcome;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ResendWelcomeEmailController extends Controller
{
    public function __construct()
    {
        $this->middleware('throttle:2,1');
    }

    public function __invoke(Request $request, User $user)
    {
        //
        $user->notify(new Welcome);

        return Response::api('Confirmation email resent.');
    }
}
