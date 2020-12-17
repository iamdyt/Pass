@extends('layouts.app')
@section('title') Appointment Schedule System @endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="card" style="margin-top:10rem;">
                    <div class="card-header">
                        <p class="text-center">Patient Authentication</p>
                    </div>
                    <div class="card-body">
                        <form action="" class="form-group">
                            <input type="text" name="serial" class='form-control' required=required placeholder="Patient Serial Number" id="">
                            <button class="btn btn-success mt-4 btn-block rounded-0">Authenticate</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
