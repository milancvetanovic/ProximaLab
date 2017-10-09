<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * LoginController constructor.
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * Show login page.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showLoginForm() {
        return view('loginForm');
    }

    /**
     * Perform the login.
     *
     * @return $this|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
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

        return redirect('/verifications');

    }

    /**
     * Destroy the user's current session.
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
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
