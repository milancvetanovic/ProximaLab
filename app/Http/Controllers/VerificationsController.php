<?php

namespace App\Http\Controllers;

use App\Verification;
use Illuminate\Http\Request;

class VerificationsController extends Controller
{
    /*
    public function __construct()
    {
        $this->middleware('auth');
    } */

    public function showVerifications(){
        $verifications = Verification::all();

        //dd(auth()->user()->operator);

        return view('verifications.showVerifications', compact('verifications'));
    }
}
