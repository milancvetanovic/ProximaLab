<?php

namespace App\Http\Controllers;

use App\User;

class OperatorsController extends Controller
{
    public function __construct()
    {
        $this->middleware('operator');
    }

    public function index() {
        $operators = User::all()->where('operator', true);

        return view('operator.operators.index', compact('operators'));
    }
}
