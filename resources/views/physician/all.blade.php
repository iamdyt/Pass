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
                    <div class="card-header"> <i class="fas fa-database"></i> &emsp; All Registered Physicians</div>
                    <div class="card-body">
                    
                        <table id="dtable" class="table table-hover">
                            <thead>
                                <tr>
                                <th scope="col">First Name</th>
                                <th scope="col">Last Name</th>
                                <th scope="col">Phone</th>
                                <th scope="col">E-mailn</th>
                                <th scope="col">Specialization</th>

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
                    "url":"{{route('physician.allapi')}}",
                    "dataSrc":""
                    },
                "processing":true,
                "serverSide":true,
                "pageLength": 10,
                "pagingType": "simple",
                "columns":[
                    {"data":'first_name'},
                    {"data":'last_name'},
                    {"data":'phone'},
                    {"data":'email'},
                    {"data":'specialization'},
                ]
            });
        })
    </script>
@endsection