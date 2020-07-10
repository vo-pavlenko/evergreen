<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request, User $user)
    {
        $users = $user->getUsersBySearch($request)->get();

        return view('users')->with('users',$users);
    }

    public function ajax(Request $request, User $user)
    {
        $users = $user->getUsersBySearch($request)->get();

        return view('results')->with('users',$users);
    }
}
