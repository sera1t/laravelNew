<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function getProfile($email)
    {
        $user = User::where('email', $email)->first();

        if (!$user)
        {
            abort(404);
        }

        return view('profileUser', compact('user'));
    }
}
