@extends('layouts.app')
@section('title') Manage Appointment @endsection
@section('content')
@include('layouts.header')
    <section class="container">
        <div class="row">
            <div class="col-lg-3">
                @include('layouts.side')
            </div>

            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header"> <i class="fas fa-database"></i> &emsp; Appointments Management</div>
                    <div class="card-body">
                    @if (!empty($appointments))
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                <th scope="col">Card/Serial Number</th>
                                <th scope="col">Name</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Manage</th>

                                </tr>
                            </thead>
                            
                            <tbody>
                            @foreach($appointments as $app)
                                <tr>
                                <th scope="row">{{$app->patient->patient_serial}}</th>
                                <td>{{$app->patient->first_name}}-{{$app->patient->last_name}}</td>
                                <td>{{$app->patient->phone_number}}</td>
                                <td><a href="{{route('appointment.single', $app->id)}}" class="btn btn-info"><i class="fas fa-eye"></i>&emsp;Manage</a></td>
                                <!-- <td>{{$app->complaints}}</td> -->
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @else
                        <p class="lead text-center">No Data Found</p>
                    @endif
                    </div>
                    <div class="card-footer">
                        &copy LifeCare Hospital {{ date('Y')}} <span class="float-right">{{date('D/M/Y -- h:i:s', time())}}</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 invisible">
                <div class="card">
                    <div class="card-header"> Schedule Appointment </div>
                    <div class="card-body">
                        <input type="text" name="" class="form-control mb-2" readonly=readonly id="">
                        <textarea name="" id="" class="form-control" readonly=readonly cols="30" rows="10"></textarea>
                        <select name="" id="" class="form-control">
                            <option value=""></option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection