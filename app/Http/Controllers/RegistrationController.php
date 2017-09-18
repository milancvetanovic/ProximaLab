<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class RegistrationController extends Controller
{
    public function __construct()
    {
        $this->middleware('operator');
    }

    public function showRegisterForm(){
        return view('registerForm');
    }

    public function store(){

        $this->validate(request(),[
           'name' => 'required',
           'email' => 'required|email',
           'password' => 'required'
        ]);

        if (request()->has('operator')){
            $operator = request('operator');
        } else {
            $operator = 0;
        }

        User::create([
            'name' => request('name'),
            'email' =>request('email'),
            'password' => bcrypt(request('password')),
            'operator' => $operator,
        ]);

        session()->flash('message', 'You have successfully added a new user!');

        return redirect('/register');
    }
}
