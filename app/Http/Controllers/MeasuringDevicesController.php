<?php

namespace App\Http\Controllers;

use App\MeasuringDevice;

class MeasuringDevicesController extends Controller
{
    public function __construct()
    {
        $this->middleware('operator');
    }

    public function index() {
        $measuringDevices = MeasuringDevice::all();

        return view('operator.measuringDevices.index', compact('measuringDevices'));
    }

    public function store() {
        $this->validate(request(),[
            'manufacturer' => 'required',
            'model' => 'required',
            'serial' => 'required'
        ]);

        MeasuringDevice::create([
            'manufacturer' => request('manufacturer'),
            'model' => request('model'),
            'serial' => request('serial')
        ]);

        session()->flash('message', 'You have successfully added new measuring device.');

        return redirect('operator/measuring_devices');
    }

    public function edit(MeasuringDevice $measuring_device) {

        return view('operator.measuringDevices.edit', compact('measuring_device'));
    }

    public function update(MeasuringDevice $measuring_device) {
        $this->validate(request(),[
            'manufacturer' => 'required',
            'model' => 'required',
            'serial' => 'required'
        ]);

        $measuring_device->update([
            'manufacturer' => request('manufacturer'),
            'model' => request('model'),
            'serial' => request('serial')
        ]);

        session()->flash('message', 'You have successfully updated measuring device.');

        return redirect('operator/measuring_devices');
    }
}
