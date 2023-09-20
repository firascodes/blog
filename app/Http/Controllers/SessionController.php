<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{

    public function store()
    {
        //validate request
        $attributes = request()->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        //attempt to authenticate and login the users, based on provided credentials
        if (auth()->attempt($attributes)) {
            //session fixation
            session()->regenerate();
            //redirect with a success flash message
            return redirect('/')->with('success', 'Welcome Back!');
        }

        //auth failed
        // return back()->withInput()
        //     ->withErrors(['email' => 'Your provided credentials could not be verified']); //set $errors in the view

        throw ValidationException::withMessages(['email' => 'Your provided credentials could not be verified']);
    }

    public function create()
    {
        return view('sessions.create');
    }


    public function destroy()
    {
        auth()->logout();

        return redirect('/')->with('success', 'Logged Out!');
    }
}