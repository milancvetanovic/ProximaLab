<?php

namespace App\Http\Controllers;

use App\Mail\Welcome;
use App\User;

class ClientsController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'operator']);
    }

    public function index() {
        $clients = User::all()->where('operator', 0);

        return view('operator.clients.index', compact('clients'));
    }

    public function create() {
        return view('operator.clients.create');
    }

    public function store() {
        $this->validate(request(),[
            'name' => 'required|max:191',
            'email' => 'required|email',
            'password' => 'required|max:191'
        ]);

        $client = User::create([
            'name' => request('name'),
            'email' => request('email'),
            'password' => bcrypt(request('password')),
            'operator' => 0,
            'address' => request('address')
        ]);

        \Mail::to($client)->send(new Welcome($client));

        session()->flash('message', 'You have successfully created new client');

        return redirect('/operator/clients');
    }

    public function show(User $client) {
        return view('operator.clients.show', compact('client'));
    }

    public function edit(User $client) {
        return view('operator.clients.edit', compact('client'));
    }

    public function update(User $client) {
        $this->validate(request(),[
            'name' => 'required|max:191',
            'email' => 'required|email',
        ]);

        $client->update([
            'name' => request('name'),
            'email' => request('email'),
            'address' => request('address'),
        ]);

        session()->flash('message', 'You have successfully updated client s details');

        return redirect('/operator/clients/'.$client->id);

    }

    public function destroy(User $client) {
        $client->delete();

        session()->flash('message', 'You have successfully deleted client.');

        return redirect('/operator/clients');
    }
}
