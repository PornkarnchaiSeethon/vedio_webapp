<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Composer;

class ProfileController extends Controller
{
    public function __invoke($username)
    {
        $user = User::where('name', $username)->firstOrFail();
        return view('ProfilePage', compact('user'));
    }
}
