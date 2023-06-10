<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Cache;

class GroupController extends Controller
{
    public function index(User $user)
    {
        $users = Cache::rememberForever("group.{$user->id}", fn () => $user->newCollection([$user]));

        return view('users.group.index', compact(['user', 'users']));
    }
}
