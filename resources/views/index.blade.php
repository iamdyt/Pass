@extends('layouts.app')
@section('title') Appointment Schedule System @endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="card" style="margin-top:10rem;">
                    <div class="card-header">
                        <p class="text-center"><i class="fas fa-medkit"></i> &emsp; Patient Authentication</p>
                    </div>
                    <div class="card-body">
                        <form action="{{route('appointment.index')}}" method="POST" class="form-group">
                        {{csrf_field()}}
                        @if(Session::has('message'))
                            <div class="alert alert-danger">{{Session('message')}}</div>
                        @endif
                            <input type="text" name="serial" class='form-control' required=required placeholder="Patient Serial Number" id="">
                            <button class="btn btn-success mt-4 btn-block rounded-0">Authenticate</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
