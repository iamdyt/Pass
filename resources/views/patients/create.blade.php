@extends('layouts.app')
@section('title')Patient's Management @endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="card">
                    <div class="card-header"> <i class="fas fa-plus"></i> &emsp; New Patient Record <span class='float-right' onclick="window.history.back()"><i class="fas fa-long-arrow-alt-left"></i> Previous Page</span></div>
                    <div class="card-body">
                        <form action="{{route('patient.create')}}" method="POST" class="form-group">
                            @csrf
                            <input type="text" name="patient_serial" class="form-control" value="{{$patient_serial}}" readonly required=required placeholder="Patient's Serial Number" id="">
                            <input type="text" name="first_name" placeholder="First Name" required=required class='form-control mt-2'>
                            <input type="text" name="last_name" placeholder="Last Name" required=required class='form-control mt-2'>
                            <input type="date" name="Date_of_birth" placeholder="Patient Date of Birth" required=required class='form-control mt-2'>
                            <input type="text" name="phone_number" placeholder="Phone Number" required=required class='form-control mt-2'>
                            <input type="text" name="next_of_kin_name" placeholder="Next of Kin Full Name" required=required class='form-control mt-2'>
                            <input type="text" name="next_of_kin_phone" placeholder="Next of Kin Phone Number" required=required class='form-control mt-2'>
                            <textarea name="address" id="" cols="30" rows="2" placeholder="Patient/Next of Kin Address" class="form-control mt-2"></textarea>
                            <button class="btn  btn-block mt-2 btn-info">Add Patient</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection