<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cache;
use Illuminate\Validation\Rule;

class GroupMemberController extends Controller
{
    public function store(Request $request, User $user)
    {
        $request->validate([
            'email' => [Rule::exists('users')->whereNotNull('email_verified_at')]
        ]);

        $member = User::whereEmail($request->email)->first();

        $users = Cache::get("group.{$user->id}");

        $users->when(fn ($users) => $users->doesntContain($member),
            function (Collection $users) use ($member) {
                $users->add($member);
            }
        );

        Cache::put($key = "group.{$user->id}", $users);
        Cache::forget("$key.transaction");

        return Response::api('Member added successfully.');
    }


    public function destroy(User $user, User $member)
    {
        $users = Cache::get($key = "group.{$user->id}");

        Cache::put($key, $users->reject(fn ($item) => $item->is($member)));
        Cache::forget("$key.transaction");

        return Response::api('Member removed successfully.');
    }
}
