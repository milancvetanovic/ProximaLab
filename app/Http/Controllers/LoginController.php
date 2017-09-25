<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm() {
        return view('loginForm');
    }

    public function login(){
        $this->validate(request(),[
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (!auth()->attempt($this->getCredentials())){
            return back()->withErrors([
                'message' => 'Please check your credentials and try again.'
            ]);
        }

        session()->flash('message', 'Welcome back!');

        if (auth()->user()->operator){
            return redirect('/operator/verifications');
        }

        return redirect('/');

    }

    public function logout() {
        auth()->logout();

        session()->flash('message', 'You are logged out. Now what?');

        return redirect('/login');
    }

    /**
     * Get the login credentials and requirements
     * @return array
     */
    protected function getCredentials() {
        return [
            'email' => request('email'),
            'password' => request('password')
        ];
    }
}
