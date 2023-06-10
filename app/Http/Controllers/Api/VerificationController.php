<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class VerificationController extends Controller
{
    public function __construct()
    {
        $this->middleware('throttle:2,1');
    }

    public function __invoke(Request $request, User $user)
    {
        $user->sendEmailVerificationNotification();

        return Response::api('Verification link resent.');
    }
}
