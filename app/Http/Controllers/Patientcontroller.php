<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Patientcontroller extends Controller
{
    public function index(){
        return view('patients.index');
    }
}
