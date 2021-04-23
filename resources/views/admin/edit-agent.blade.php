@extends('layouts.admin')

@section('title', 'Edit Agent')

@section('page-wrapper')

<main class="content">
    <div class="container-fluid p-0">

        <div class="row mb-2 mb-xl-3">
            <div class="col-auto d-none d-sm-block">
                <h3><strong>Agent</strong> Profile</h3>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-lg-12 col-xxl-12 d-flex">
                <div class="card flex-fill w-100">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Edit Agent</h5>
                    </div>
                    <div class="card-body w-100">
                        @if($errors->any())
                        <h4>{!! $errors->first() !!}</h4><br>
                        @endif
                        <form method="post" class="container-fluid" action="{{route('updateAgent', $user_details['user_id'])}}">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="firstName">First Name</label>
                                        <input type="text" value="{{$user_details['first_name']}}" name="first_name" id="firstName" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="lastName">Last Name</label>
                                        <input type="text" value="{{$user_details['last_name']}}" name="last_name" id="lastName" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="mobileNumber">Mobile Number</label>
                                        <input type="text" value="{{$user_details['mobile_number']}}" name="mobile_number" id="mobileNumber" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" value="{{$user_details['email']}}" name="email" id="email" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="dob">Date Of Birth</label>
                                        <input type="date" value="{{$user_details['date_of_birth']}}" name="date_of_birth" id="dob" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="status">Status</label>
                                        <select name="status" class="form-control" id="status">
                                            <option value="">Select</option>
                                            <option value="1" {{$user_details['status'] == 1 ? 'selected' : ''}}>Active</option>
                                            <option value="0" {{$user_details['status'] == 0 ? 'selected' : ''}}>InActive</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-sm-4">
                                    <button type="submit" class="btn btn-primary btn-block">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</main>


@endsection