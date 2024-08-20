<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function loadAllUsers()
    {
        $all_users = User::all();
        return view('users',compact('all_users'));
    }

    public function loadAddUser()
    {
        return view('add-user');
    }

    public function AddUser(Request $request)
    {
        $request->validate([
            'full_name' => 'required|string',
            'email' => 'required|email|unique:users',
            'phone_number' => 'required',
            'password' => 'required|confirmed|min:8|max:64',
        ]);

        try {
            $new_user = new User;
            $new_user->name = $request->input('full_name');
            $new_user->email = $request->input('email');
            $new_user->phone_number = $request->input('phone_number');
            $new_user->password = Hash::make($request->input('password'));
            $new_user->save();
            return redirect('/users')->with('success', 'User added successfully');
        }catch (\exception $exception){
            return redirect('/add/user')->with('fail', $exception->getMessage());
        }



    }
}
