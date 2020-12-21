@extends('layouts.app')
@section('title') All Patients @endsection
@section('content')
@include('layouts.header')
    <section class="container">
        <div class="row">
            <div class="col-lg-3 ">
                @include('layouts.side')
            </div>

            <div class="col-lg-9">
                <div class="card">
                    <div class="card-header"> <i class="fas fa-database"></i> &emsp; All Registered Patients</div>
                    <div class="card-body">
                    
                        <table id="dtable" class="table table-hover">
                            <thead>
                                <tr>
                                <th scope="col">CardNumber</th>
                                <th scope="col">First Name</th>
                                <th scope="col">Last Name</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Next of Kin</th>
                                <th scope="col">Address</th>

                                </tr>
                            </thead>
                        </table>
                    </div>
                    <div class="card-footer">
                        &copy LifeCare Hospital {{ date('Y')}} <span class="float-right">{{date('D/M/Y -- h:i:s', time())}}</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        $(()=>{
            $('#dtable').DataTable({
                "ajax":{
                    "url":"{{route('patient.allapi')}}",
                    "dataSrc":""
                    },
                "processing":true,
                "serverSide":true,
                "pageLength": 10,
                "pagingType": "simple",
                "columns":[
                    {"data":'patient_serial'},
                    {"data":'first_name'},
                    {"data":'last_name'},
                    {"data":'phone_number'},
                    {"data":'next_of_kin_name'},
                    {"data":'address'},
                ]
            });
        })
    </script>
@endsection