<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Auth;

class SessionsController extends Controller
{
    public function create()
    {
        return view('sessions.create');
    }

    /**
     * @throws ValidationException
     */
    public function store()
    {
       // return 'success';
        $attributes= request()->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
//
//        if (!auth()->attempt($attributes)) {
//            throw ValidationException::withMessages([
//                'email' => 'Your provided credentials could not be verified.'
//            ]);
//        }

        session()->regenerate();

        return redirect('/showtask')->with('success', 'Welcome Back!');
    }

    public function destroy()
    {
//        auth()->logout();

        return redirect('/');
    }

}
