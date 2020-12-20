@extends('layouts.app')
@section('title') Schedule Appointment @endsection
@section('content')
@include('layouts.header')
    <section class="container">
        <div class="row">
            <div class="col-lg-3">
                @include('layouts.side')
            </div>

            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header"><i class="fas fa-info-circle"></i>&emsp;Schedule Appointment <span class="float-right">{{$app->patient->first_name}}&nbsp; {{$app->patient->last_name}}&nbsp; ({{$app->patient->patient_serial}})</span> </div>
                    <div class="card-body">
                        <form action="" class="form-group">
                            <label for="phone">Mobile Number:</label>
                            <input type="text" name="phone" value="{{ $app->patient->phone_number}}" class="form-control mb-2" readonly=readonly id="">
                            <label for="complaint">Submitted Complaint:</label>
                            <textarea name="complaint" id="" class="form-control mb-2" readonly=readonly cols="30" rows="5">{{ $app->complaints }}</textarea>
                            <label for="physician">Attach a Physician:</label>
                            <select name="doctor" id="" class="form-control mb-2">
                                @foreach($docs as $doc)
                                    <option value="{{$doc->first_name}}-{{$doc->last_name}}"> Dr. {{$doc->first_name}} - {{$doc->specialization}}</option>
                                @endforeach
                            </select>
                            <button class="btn btn-info btn-block"><i class="fas fa-cloud-upload-alt"></i>&emsp; Make Schedule</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection