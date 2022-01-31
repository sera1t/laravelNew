<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserAllController extends Controller
{
    public function userAll()
    {
        $user_name = array();
        $user_name = User::all();
        if(session()->has('loginId'))
        {
            return view('user_all', compact('user_name'));
        }
        else
        {
            return back()->with('fail', 'You do not have access to this page');
        }
    }
}
