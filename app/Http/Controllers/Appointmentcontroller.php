<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patient;
use App\Appointment;

class Appointmentcontroller extends Controller
{

    // Patients Login 
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

//Patient creating appointment
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

//show appointment form to patient
    public function show()
    {
        return view('appointment.create');
    }


// admin viewing submitted appointment
    public function manage(){
        $appointments = Appointment::where('is_attended',0)->orderBy('id','DESC')->simplePaginate(5);
        return view('appointment.manage', compact('appointments'));
    }

    //Admin Scheduling appointment with patient and sending feedback message
    public function single(Request $request, $id)
    {
        $docs = \App\Physician::all();
        $app = Appointment::findorFail($id);
        return view('appointment.schedule', compact(['docs','app']));
    }
// update attended schedule
    public function update(Request $request, $id){
        $app = Appointment::find($id);
        $app->is_attended = 1;
        $app->save();
        return ['ok'];
    }
    public function destroy(Request $request)
    {
        $request->session()->flush();
        return redirect('/');
    }
}
