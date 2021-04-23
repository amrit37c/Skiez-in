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
                    <table class="table table-hover my-0">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th class="d-none d-xl-table-cell">Mobile Number</th>
                                <th class="d-none d-xl-table-cell">Email</th>
                                <th>Status</th>
                                <th class="d-none d-md-table-cell">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($userslist as $row)
                            <tr>
                                <td>{{$row['first_name']}} {{$row['last_name']}}</td>
                                <td class="d-none d-xl-table-cell">{{$row['mobile_number']}}</td>
                                <td class="d-none d-xl-table-cell">{{$row['email']}}</td>
                                <td>{!! $row['status'] == 1 ? '<span class="badge bg-success">Active</span>' : '<span class="badge bg-danger">In-Active</span>'!!}</td>

                                <td class="d-none d-md-table-cell">
                                    <form method="post" action="{{route('updateUser')}}">
                                        <a class='text-decoration-none text-dark' href="{{ route('editAgent', $row['user_id']) }}" title="Edit User">
                                            <i class="fas fa-user-edit"></i>
                                        </a>
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="hidden" name="user_id" value="{{ $row['user_id'] }}">
                                        <input type="hidden" name="status" value='{{ $row["status"] == 1 ? 0 : 1 }}'>
                                        <button class='btn {{ $row["status"] == 1 ? "text-danger" : "text-success" }}' title="Change User Status">
                                            {!! $row['status'] == 1 ? '<i class="fas fa-ban"></i>' : '<i class="fas fa-check"></i>' !!}
                                        </button>
                                    </form>
                                </td>
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