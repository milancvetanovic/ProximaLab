<?php

namespace App\Http\Controllers;

use App\Verification;

class VerificationsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->only('showVerifications');
        $this->middleware('operator')->only('index');
    }

    public function index(){
        $verifications = Verification::latest()->get();

        return view('operator.verifications.index', compact('verifications'));
    }

    public function showVerifications(){

        $verifications = Verification::latest()->Where('user_id', auth()->user()->id)->get();

        return view('verifications.showVerifications', compact('verifications'));
    }
}
