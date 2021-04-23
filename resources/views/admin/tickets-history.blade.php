@extends('layouts.admin')

@section('title', 'Users List')

@section('page-wrapper')

<main class="content">
    <div class="container-fluid p-0">

        <div class="row mb-2 mb-xl-3">
            <div class="col-auto d-none d-sm-block">
                <h3><strong>Agents</strong> List</h3>
            </div>

        </div>

        <div class="row">
            <div class="col-12 col-lg-12 col-xxl-12 d-flex">
                <div class="card flex-fill">
                    <div class="card-header">

                        <h5 class="card-title mb-0">Agents List</h5>
                    </div>
                    @if($errors->any())
                    <h4>{!! $errors->first() !!}</h4>
                    @endif

                    <table class="table table-bordered-table-stripped">
                        <thead>
                            <tr>
                                <th>Sr. No.</th>
                                <th>Agent/User</th>
                                <th>Passenger Name</th>
                                <th>Booking ID</th>
                                <th>From</th>
                                <th>To</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($ticketsHistory as $key => $ticket)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$ticket['first_name']}}</td>
                                    <td>{{$ticket['pessenger_name']}}</td>
                                    <td>{{$ticket['booking_id']}}</td>
                                    <td>{{$ticket['origin']}}</td>
                                    <td>{{$ticket['destinatoin']}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</main>


@endsection