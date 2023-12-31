<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create()
    {
        return view('register.create');
    }

    public function store()
    {

        $attributes = request()->validate([
            'name' => 'required|max:255',
            'username' => 'required|min:3|max:255|unique:users,username',
            //users is the table, username is column
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|min:7|max:255'
        ]);

        $attributes['name'] = strip_tags($attributes['name']);
        $attributes['username'] = strip_tags($attributes['username']);
        $attributes['email'] = strip_tags($attributes['email']);

        $user = User::create($attributes);

        auth()->login($user);


        return redirect('/')->with('success', 'Your account has been created.');
    }
}