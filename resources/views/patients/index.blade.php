@extends('layouts.app')
@section('title')Patient's Management @endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="card">
                    <div class="card-header"> <i class="fas fa-plus"></i> &emsp; New Patient Record <span class='float-right' onclick="window.history.back()"><i class="fas fa-long-arrow-alt-left"></i> Previous Page</span></div>
                    <div class="card-body">
                        <form action="" class="form-group">
                            <input type="text" name="" class="form-control" readonly required=required placeholder="Patient's Serial Number" id="">
                            <input type="text" placeholder="First Name" required=required class='form-control mt-2'>
                            <input type="text" placeholder="Last Name" required=required class='form-control mt-2'>
                            <input type="date" placeholder="Patient Date of Birth" required=required class='form-control mt-2'>
                            <input type="text" placeholder="Phone Number" required=required class='form-control mt-2'>
                            <input type="text" placeholder="Next of Kin Full Name" required=required class='form-control mt-2'>
                            <input type="text" placeholder="Next of Kin Phone Number" required=required class='form-control mt-2'>
                            <textarea name="address" id="" cols="30" rows="2" placeholder="Patient/Next of Kin Address" class="form-control mt-2"></textarea>
                            <button class="btn  btn-block mt-2 btn-info">Add Patient</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection