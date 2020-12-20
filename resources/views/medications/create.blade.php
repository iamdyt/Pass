@extends('layouts.app')
@section('title')Drugs Inventory @endsection
@section('content')
@include('layouts.header')
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
            @if(Session::has('message'))
                <div class="alert alert-info">{{Session('message')}}</div>
            @endif
                <div class="card">
                    <div class="card-header"> <i class="fas fa-plus"></i> &emsp; New Drug Record <span class='float-right' onclick="window.history.back()"><i class="fas fa-long-arrow-alt-left"></i> Previous Page</span></div>
                    <div class="card-body">
                        <form action="{{route('medication.store')}}" method="POST" class="form-group">
                            @csrf
                            <input type="text" name="drug_name" placeholder="Drug Name" required=required class='form-control mt-2'>
                            <input type="text" name="drug_brand" placeholder="Drug Brand" required=required class='form-control mt-2'>
                            <input type="number" name="quantity" placeholder="Quantity" required=required class='form-control mt-2'>
                            <button class="btn  btn-block mt-2 btn-info">Add Inventory</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection