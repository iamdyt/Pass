<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patient;
use App\Appointment;

class Appointmentcontroller extends Controller
{

    public function index(Request $request)
    {
        $serial = $request->serial;
        $result = Patient::where('patient_serial', $serial)->first();
        if($result){
             $request->session()->put([
                 'patient'=>$serial,
                 'result'=>$result,
                 'login'=>'1'
                 ]);
             return redirect()->route('appointment.show');
        } else{
            $request->session()->flash('message','Patient Record Not Found -- Please enter a valid Card/Serial number');
            return redirect('/');
        }
        
    }


    public function store(Request $request)
    {
        Appointment::unguard();
        $schedule = Appointment::create([
            'patient_id'=>$request->patient_id,
            'complaints'=>$request->complaints
        ]);
        if($schedule){
            $request->session()->flash('message','Success!!! -- A schedule of your meeting will be sent to your mobile');
        } else{
            $request->session()->flash('message','An error occured -- Please Try Again');
        }

        return redirect()->back();
    }


    public function show()
    {
        return view('appointment.create');
    }

    public function edit($id)
    {
        //
    }


    public function manage(){
        $appointment = Appointment::find(7);
        $data = $appointment->patient->first_name;
        return view('appointment.manage', compact('data'));
    }

    public function update(Request $request, $id)
    {
        //
    }


    public function destroy(Request $request)
    {
        $request->session()->flush();
        return redirect('/');
    }
}
