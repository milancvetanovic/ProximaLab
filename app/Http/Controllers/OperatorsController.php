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

    public function store() {
        $this->validate(request(),[
            'name' => 'required|max:255',
            'email' => 'required|email',
            'password' => 'required'
        ]);

        User::create([
            'name' => request('name'),
            'email' => request('email'),
            'password' => bcrypt(request('password')),
            'operator' => 1
        ]);

        session()->flash('message', 'You have successfully added a new operator.');

        return redirect('operator/operators');
    }

    public function show(User $operator) {
        //dd($operator->toArray());
        if ($operator->operator) {
            return view('operator.operators.show', compact('operator'));
        }
        return redirect('operator/operators');
    }

    public function edit(User $operator) {
        return view('operator.operators.edit', compact('operator'));
    }

    public function update(User $operator) {
        $this->validate(request(),[
           'name' => 'required|max:255',
           'email' => 'required|email'
        ]);

        $operator->update([
            'name' => request('name'),
            'email' => request('email')
        ]);

        session()->flash('message', 'You have successfully updated operator s information');

        return redirect('/operator/operators/'.$operator->id);
    }

    public function destroy(User $operator) {
        $operator->delete();

        return redirect('operator/operators');
    }
}
