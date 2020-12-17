@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard <span class="float-right">{{auth()->user()->name}}&emsp; <i class="fas fa-power-off text-danger"></i></span></div>

                <div class="card-body">
                   <div class="row">
                        <!-- add a doctor -->
                        <div class="col-lg-6">
                            <div class="text-center">
                                <i class="fas fa-user-md" style="font-size:4rem;"></i>
                                <a href=""><p class="lead text-dark">New Physician</p> </a>  
                            </div>
                        </div>   

                        <!-- Add Patients -->
                        <div class="col-lg-6">
                            <div class="text-center">
                                <i class="fas fa-plus-square" style="font-size:4rem;"></i>
                                <a href="{{route('patient.index')}}"><p class="lead text-dark ">New Patient</p></a>
                            </div>
                        </div>   
                   </div>

                   <div class="row mt-4">
                        <!-- Drug/Medications -->
                        <div class="col-lg-6">
                            <div class="text-center">
                                <i class="fas fa-medkit" style="font-size:4rem;"></i>
                                <a href=""><p class="lead text-dark">Medications-Inventory</p></a>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="text-center">
                                <i class="fas fa-wheelchair" style="font-size:4rem;"></i>
                                <a href=""><p class="lead text-dark">Appointment Request</p></a>
                            </div>
                        </div> 
                   </div>
                   
                </div>
                <div class="card-footer">&copy LifeCare Hospital {{ date('Y')}} <span class="float-right">{{date('D/M/Y -- h:i:s', time())}}</span></div>
            </div>
        </div>
    </div>
</div>
@endsection
