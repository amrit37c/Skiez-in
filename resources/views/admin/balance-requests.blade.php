@extends('layouts.admin')

@section('title', 'Balance Requests')

@section('page-wrapper')

<main class="content">
    <div class="container-fluid p-0">

        <div class="row mb-2 mb-xl-3">
            <div class="col-auto d-none d-sm-block">
                <h3><strong>Blance</strong> Requests</h3>
            </div>

        </div>

        <div class="row">
            <div class="col-12 col-lg-12 col-xxl-12 d-flex">
                <div class="card flex-fill">
                    <div class="card-header">

                        <h5 class="card-title mb-0">Balance Requests List</h5>
                    </div>
                    <table class="table table-hover my-0">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th class="d-none d-xl-table-cell">Mobile Number</th>
                                <th class="d-none d-xl-table-cell">Requested Amount</th>
                                <th>Status</th>
                                <th class="d-none d-md-table-cell">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($blncRequests as $row)
                            <tr>
                                <td>{{$row['first_name']}}</td>
                                <td class="d-none d-xl-table-cell">{{$row['mobile_number']}}</td>
                                <td class="d-none d-xl-table-cell">{{$row['total_amount']}}</td>
                                <td><span class="badge {{$row['order_status'] == 'Requested' ? 'bg-success' : 'bg-warning'}}">{{$row["order_status"]}}</span></td>

                                <td class="d-none d-md-table-cell">
                                    <button type="button" data-order-id="{{$row['id']}}" class="update-balance" value="Approved"><i class="fas fa-check"></i></button>
                                    <button type="button" data-order-id="{{$row['id']}}" class="update-balance" value='Cancelled'><i class="fas fa-ban"></i></button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card flex-fill">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Requests History</h5>
                    </div>
                    <table class='table table-hover my-0'>
                        <thead>
                            <tr>
                                <th>Sr. No.</th>
                                <th>Name</th>
                                <th class="d-none d-xl-table-cell">Mobile Number</th>
                                <th class="d-none d-xl-table-cell">Requested Amount</th>
                                <th>Status</th>
                                <th class="d-none d-md-table-cell">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($history as $key => $hisRow)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$hisRow['first_name']}}</td>
                                <td class="d-none d-xl-table-cell">{{$hisRow['mobile_number']}}</td>
                                <td class="d-none d-xl-table-cell">{{$hisRow['total_amount']}}</td>
                                <td><span class="badge {{$hisRow['order_status'] == 'Requested' ? 'bg-success' : 'bg-warning'}}">{{$hisRow["order_status"]}}</span></td>

                                <td class="d-none d-md-table-cell">
                                    <button type="button" data-order-id="{{$hisRow['id']}}" class="update-balance" value="Approved"><i class="fas fa-check"></i></button>
                                    <button type="button" data-order-id="{{$hisRow['id']}}" class="update-balance" value='Cancelled'><i class="fas fa-ban"></i></button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <script>
        jQuery('.update-balance').on('click', function() {
            var orderId = $(this).attr('data-order-id');
            var status = $(this).val();
            jQuery.ajax({
                url: "{{route('approveBalance')}}",
                data: {
                    'order_id': orderId,
                    'status': status,
                    '_token': "{{csrf_token()}}"
                },
                type: "post",
                success: function(result) {
                    console.log(result);
                    if (result.status == false) {
                        alert(result.message);
                    } else {
                        alert(result.message);
                        location.reload();
                    }
                },
                error: function(error) {
                    console.log(error);
                }
            });
        })
    </script>
</main>

@endsection