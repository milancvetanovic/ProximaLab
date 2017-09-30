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
        $verifiedDevices = auth()->user()->verified_devices;

        foreach ($verifiedDevices as $verifiedDevice){
            $verifications[] = $verifiedDevice->verifications;
        }
        $verifications = array_collapse($verifications);

        return view('verifications.showVerifications', compact('verifications'));
    }
}
