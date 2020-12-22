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
                        <form  class="form-group">
                            <label for="phone">Mobile Number:</label>
                            <input type="text" name="phone" value="{{ $app->patient->phone_number}}" class="form-control mb-2" readonly=readonly id="phone">
                            <label for="complaint">Submitted Complaint:</label>
                            <textarea name="complaint" id="" class="form-control mb-2" readonly=readonly cols="30" rows="5">{{ $app->complaints }}</textarea>
                            <label for="physician">Attach a Physician:</label>
                            <select name="doctor" id="doctor" class="form-control mb-2">
                                @foreach($docs as $doc)
                                    <option value="{{$doc->first_name}}-{{$doc->last_name}}"> Dr. {{$doc->first_name}} - {{$doc->specialization}}</option>
                                @endforeach
                            </select>
                            <label for="date">Schedule Date and Time:</label>
                            <input type="date" name="date" class="form-control mb-2" id="date">
                            <input type="text" name="time" maxlength=7 class="form-control mb-2" required=required placeholder="Time e.g 9:40AM" id="time">
                            <button type="button"  onclick="schedule()" class="btn btn-info btn-block"><i class="fas fa-cloud-upload-alt"></i>&emsp; Make Schedule</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        function schedule(){
                phone = $('#phone').val();
                doctor = $('#doctor').val();
                message = "Dear, {{$app->patient->first_name}} your appointment has been received and you have been scheduled to see Dr."+doctor+" at our clinic on "
                date = $('#date').val();
                time = $('#time').val();
                $.ajax({
                    method:"POST",
                    dataType:'jsonp',

                    url:"https://netbulksms.com/index.php?option=com_spc&comm=spc_api&username=Tecsun&password=@Netbulksms.com30&sender=LifeCare&recipient="+phone+"&message="+message+date+" "+"by "+time,
                    success: function(e){
                        console.log(e);
                    },
                    error:function(e){
                            Swal.fire(
                            'Sent!',
                            'Schedule Sent Successfully',
                            'success'
                            )
                            setTimeout(() => {
                                window.location.href="/staff/manage"
                            }, 2000);
                    },
                    completed: function(){

                    }
                })
        }
    </script>
@endsection