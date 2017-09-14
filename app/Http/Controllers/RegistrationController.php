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

        //dd(request()->all());
        $this->validate(request(),[
           'name' => 'required',
           'email' => 'required|email',
           'password' => 'required'
        ]);

        $operator = request('operator');

        if ($operator){
            $user = User::create([
                'name' => request('name'),
                'email' =>request('email'),
                'password' => bcrypt(request('password')),
                'operator' => request('operator')
            ]);

            auth()->login($user);

            return redirect('/');
        }

        $user = User::create([
            'name' => request('name'),
            'email' =>request('email'),
            'password' => bcrypt(request('password')),
        ]);

        auth()->login($user);

        return redirect('/');
    }
}
