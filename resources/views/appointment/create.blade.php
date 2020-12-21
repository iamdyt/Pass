@extends('layouts.app')
@section('title') Book An Appointment @endsection
@section('content')
    <section class="container ">
    <h5 class="display-4 text-center mt-5 " style="color:#4f4f4f;">BOOK AN APPOINTMENT</h5>
    <p class="lead text-center" style="color:#4f4f4f;">Welcome, kindly fill all fields correctly before submitting, <br>
a notice of your schedule will be sent in few minutes.</p>
        <div class="row mt-2">
            <div class="col-lg-6 offset-lg-3">
            @if(Session::has('message'))
                <div class="alert alert-info">{{Session('message')}}</div>
            @endif
            
                <div class="card mb-4">
                    <div class="card-header">
                        <p>Book An Appointment <span class="float-right"> Card No: @if (Session::has('patient')) {{Session('patient')}} @endif </span></p>
                    </div>
                    <div class="card-body">
                        <form action="{{route('appointment.store')}}" method="POST" class="form-group">
                        {{csrf_field()}}
                            <input type="text" name="" value="@if (Session::has('result')){{Session('result.last_name')}} {{Session('result.first_name')}} @endif" readonly=readonly class="form-control" id="">
                            <textarea name="complaints" required=required id="" class="form-control mt-3" placeholder="Message/Commplaints" cols="30" rows="4"></textarea>
                            <small>You will get an appointment on your registered mobile number in few minutes.</small>
                            <input type="hidden" value=" @if (Session::has('result')) {{Session('result.id')}} @endif" name="patient_id">
                            <button class="btn btn-secondary btn-block mt-3">Schedule Appointment</button>
                        </form>
                        <a href="{{route('appointment.logout')}}" class="btn btn-danger btn-block mt-3">Close Session</a>
                    </div>
                    <div class="card-footer">&copy LifeCare Hospital {{ date('Y')}} <span class="float-right">{{date('D/M/Y -- h:i:s', time())}}</span></div>
                </div>
            </div>
        </div>
    </section>
@endsection