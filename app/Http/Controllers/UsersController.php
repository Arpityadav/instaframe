<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function show(User $user)
    {
        return view('user.show', compact('user'));
    }

    public function updateDP(User $user)
    {
    }

    protected function follow(User $user)
    {
        $following_id = $user->id;
        //the one we want to follow $following_id

        $user = auth()->user();
        // the current user

        $user->following()->attach($user);

        return redirect('/');
    }

    protected function unfollow(User $user)
    {
        $following_id = $user->id;
        //the one we want to follow $following_id

        $user = auth()->user();
        // the current user

        $user->following()->detach($following_id);

        return redirect('/');
    }
}
