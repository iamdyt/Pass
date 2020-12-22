<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\User;
use App\Patient;


class Patientcontroller extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $patient_serial = "LFC".date('Y').rand(1, date('Y'));
        return view('patients.create', compact('patient_serial')); 
    }

    public function create(Request $request){
        $validated_data = $request->validate([
            'patient_serial'=>'',
            'first_name'=>'string|required',
            'last_name'=>'string|required',
            'Date_of_birth'=>'string|required',
            'phone_number'=>'string|required',
            'address'=>'string|required',
            'next_of_kin_name'=>'string|required',
            'next_of_kin_phone'=>'string|required',
        ]);
        
        Patient::unguard();
        Patient::create($validated_data);
        return redirect()->route('home');
        
    }

    public function all(){
        return view('patients.all');
    }
    public function allapi(){
        $patients = Patient::all();
        return $patients;
    }
}
