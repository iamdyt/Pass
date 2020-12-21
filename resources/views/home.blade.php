@extends('layouts.app')
@section('content')
@include('layouts.header')
<div class="container">
    <div class="row justify-content-center">
    <div class="col-lg-3">
        @include('layouts.side')
    </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard <span class="float-right">{{auth()->user()->name}}&emsp; <a href="{{route('home.logout')}}"><i class="fas fa-power-off text-danger"></i></a></span></div>

                <div class="card-body">
                   <div class="row">
                        <!-- add a doctor -->
                        <div class="col-lg-6">
                            <div class="text-center">
                                <i class="fas fa-user-md" style="font-size:4rem;"></i>
                                <a href="{{route('physician.create')}}"><p class="lead text-dark">New Physician</p> </a>  
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
                                <a href="{{route('medication.create')}}"><p class="lead text-dark">Medications-Inventory</p></a>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="text-center">
                                <i class="fas fa-wheelchair" style="font-size:4rem;"></i>
                                <a href="{{route('appointment.manage')}}"><p class="lead text-dark">Appointment Request<b><sup class="lead" style="color:red;">({{$request_count}}) </sup></b></p></a>
                            </div>
                        </div> 
                   </div>
                   
                </div>
                <div class="card-footer">&copy LifeCare Hospital {{ date('Y')}} <span class="float-right">{{date('D/M/Y -- h:i:s', time())}}</span></div>
            </div>
        </div>
    </div>
</div>
<script>
//     setInterval(() => {
//         window.document.location.reload();
//     }, 9000);
// </script>
@endsection
