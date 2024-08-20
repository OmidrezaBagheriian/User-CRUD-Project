<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function loadAllUsers()
    {
        return view('users');
    }
}
