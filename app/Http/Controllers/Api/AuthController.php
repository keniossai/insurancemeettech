<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Password;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('throttle:5,1');
    }

    public function login(Request $request)
    {
        if (! Auth::attempt($request->except('remember'), $request->boolean('remember'))) {
            return Response::api(__('auth.failed'), 401);
        }

        if (! $request->expectsJson()) return back(); // This shouldn't happen!

        return Response::api(['message' => 'Welcome Back...']);
    }

    public function forgot(Request $request)
    {
        $status = Password::sendResetLink($request->only('email'));

        if ($status !== Password::RESET_LINK_SENT) {
            return Response::api(__($status), 400);
        }

        return Response::api([
            'title'   => "Check your email",
            'message' => "We've sent you a special link. Please check your email to continue.",
        ]);
    }

    public function reset(Request $request)
    {
        $request->validate(['password' => 'required|min:5|confirmed']);

        $status = Password::reset($request->all(), function (User $user, $password) {
            $user->password = $password;
            $user->save();

            Auth::login($user);
        });

        if ($status !== Password::PASSWORD_RESET) {
            return Response::api(__($status), 400);
        }

        return Response::api([
            'title'   => "Done",
            'message' => "Use your new password for subsequent login.",
        ]);
    }
}
