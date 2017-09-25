<?php

namespace App\Http\Controllers;

use App\User;

class ClientsController extends Controller
{
    public function __construct()
    {
        $this->middleware('operator');
    }

    public function index() {
        $clients = User::all()->where('operator', 0);

        return view('operator.clients.index', compact('clients'));
    }
}
