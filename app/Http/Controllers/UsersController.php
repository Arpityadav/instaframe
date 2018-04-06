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
}
