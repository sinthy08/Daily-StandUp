<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create()
    {
        return view('create');
    }

    public function store()
    {
//
//        request()->validate([
//            'name' => '',
//            'username' => '',
//            'email' => '',
//            'password' => ''
//        ]);
        $attributes = request()->validate([
            'name'=> 'required|max:255',
            'username'=>'required|max:255|min:3|unique:users,username',
            'email'=> 'required|email|max:255|unique:users,email',
            'password' => 'required|max:255|min:3'
        ]);

        $attributes['password']= bcrypt($attributes['password']);

      //  User::create($attributes);

        auth()->login(User::create($attributes));

//        //user login
//
//       // auth()->login($user);
//
        return redirect('/')->with('success', 'New member added');
    }

}
