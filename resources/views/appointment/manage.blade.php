@extends('layouts.app')
@section('title') Manage Appointment @endsection
@section('content')
    <section class="container">
        <div class="row">
            <div class="col-lg-3">
                @include('layouts.side')
            </div>

            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header">Appointment Management</div>
                    <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                            </tr>
                        </thead>
                        {{$data}}
                        <tbody>
                            <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            </tr>

                        </tbody>
                    </table>
                    </div>
                    <div class="card-footer">
                        &copy LifeCare Hospital {{ date('Y')}} <span class="float-right">{{date('D/M/Y -- h:i:s', time())}}</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection