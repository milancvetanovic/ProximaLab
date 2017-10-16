<?php

namespace App\Http\Controllers;

use App\MeasuringDevice;
use App\User;
use App\Verification;
use App\VerifiedDevice;
use Illuminate\Support\Facades\Storage;
use function Symfony\Component\VarDumper\Tests\Caster\reflectionParameterFixture;

class VerificationsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->only('showVerifications');
        $this->middleware(['auth', 'operator'])->only('index', 'create');
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

    public function create() {
        $clients = User::where('operator', 0)->get();
        $measuringDevices = MeasuringDevice::all();
        $verifiedDevices = VerifiedDevice::all();

        return view('operator.verifications.create', compact('clients', 'measuringDevices', 'verifiedDevices'));
    }

    public function store() {

        $this->validate(request(), [
            'client' => 'required|integer',
            'verifiedDevice' => 'required|integer',
            'measuringDevice' => 'required|integer',
            'report' => 'required|file'
        ]);

        $path = Storage::disk('public')->put('reports', request()->file('report'));

        Verification::create([
            'dateOfVerification' => request('dateOfVerification'),
            'status' => request('status'),
            'testReport' => $path,
            'user_id' => auth()->user()->id,
            'measuring_device_id' => request('measuringDevice'),
            'verified_device_id' => request('verifiedDevice')
        ]);

        session()->flash('message', 'You have successfully added new verification.');

        return redirect('operator/verifications');

    }
}