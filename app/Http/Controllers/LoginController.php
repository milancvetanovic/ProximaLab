<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\User;

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
    public function login() {
        $this->validateCredentials(); // Validate email address and password.

        /*
         * Check the user with that email address exists.
         */
        if ($this->getUser()->isEmpty()) {
            return back()->withErrors([
                'message' => 'We cant find a user with that email address.'
            ]);
        }

        if (!$this->attemptLogin()){               // Try to login user
            return back()->withErrors([            // Return error if failed.
                'message' => 'Password are wrong.'
            ]);
        }

        if (auth()->user()->operator){                                                                // Check if operator
            return redirect()->intended('/operator/verifications')->with('message', 'Welcome back!'); // Redirect to operator section
        }

        return redirect()->intended('/verifications')->with('message', 'Welcome back!'); // If is it client, redirect to client section.

    }

    /**
     * Destroy the user's current session.
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function logout() {
        auth()->logout();

        return redirect('/login')->with('message', 'You are logged out. Now what?');
    }

    /**
     * Validate login credentials.
     */
    protected function validateCredentials(){
        $this->validate(request(),[
            'email' => 'required|email',
            'password' => 'required'
        ]);
    }

    /**
     * Get the login credentials and requirements
     * @return array
     */
    protected function credentials() {
        return request()->only('email', 'password');
    }

    /**
     * Retrieve the user with provided email address.
     *
     * @return mixed
     */
    protected function getUser() {

        return User::where('email', request('email'))->get();
    }

    /**
     * Attempt to log the user into the application.
     *
     * @return bool
     */
    protected function attemptLogin() {
        return $this->guard()->attempt($this->credentials(), request()->filled('remember'));
    }

    /**
     * Get the guard to be used during authentication.
     *
     * @return \Illuminate\Contracts\Auth\Guard|\Illuminate\Contracts\Auth\StatefulGuard|mixed
     */
    protected function guard() {
        return auth()->guard();
    }
}
