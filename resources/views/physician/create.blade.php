@extends('layouts.app')
@section('title')Doctor's Management @endsection
@section('content')
@include('layouts.header')
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
            @if(Session::has('message'))
                <div class="alert alert-info">{{Session('message')}}</div>
            @endif
                <div class="card">
                    <div class="card-header"> <i class="fas fa-plus"></i> &emsp; New Doctor Record <span class='float-right' onclick="window.history.back()"><i class="fas fa-long-arrow-alt-left"></i> Previous Page</span></div>
                    <div class="card-body">
                        <form action="{{route('physician.store')}}" method="POST" class="form-group">
                            @csrf
                            <input type="text" name="first_name" placeholder="First Name" required=required class='form-control mt-2'>
                            <input type="text" name="last_name" placeholder="Last Name" required=required class='form-control mt-2'>
                            <input type="text" name="phone" placeholder="Phone Number" required=required class='form-control mt-2'>
                            <input type="email" name="email" placeholder="E-mail" required=required class='form-control mt-2'>
                            <input type="text" name="specialization" placeholder="Specialization" required=required class='form-control mt-2'>
                            <button class="btn  btn-block mt-2 btn-info">Add Doctor</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection