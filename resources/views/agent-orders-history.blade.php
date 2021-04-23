@extends('layouts.agent')

@section('title', 'Agent Dashboard' . ' | ' . env('APP_NAME'))

@section('content')

<div class="col-md-9">
    <div class="dasboard_right_panel">
        <div class="row">
            <div class="col-md-12">
                <div class="dasboard_right_penel_top_heading vendor_table_sec seller_topBar_heading vendor_table_sec mt-3">
                    <h1>View Orders </h1>
                </div>
            </div>

            <div class="col-md-4 ml-auto">
                <div class="vendor_table_sec mt-1">
                    <div class="custom_vendor_input_sec seller_custom_vendor_input_sec">
                        <form method="get" action="{{route('AgentOrders')}}">
                            <div class="row">
                                <div class="col-md-3 pr-0">
                                    <p>Filter By:</p>
                                </div>
                                <div class="col-md-5">
                                    <select name="order_type" id="">
                                        <option value="1">Flight</option>
                                        <option value="2">Hotel</option>
                                        <option value="3">Flight + Hotel</option>
                                        <option value="4">Flight + Car</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <button type="submit" class="go_report_btn">Go</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="vendor_table_sec mt-3">
                    <table class="table agent_ordr_hstry_table">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col"><input type="checkbox" /></th>
                                <th scope="col" style="width:15%;">Order Date</th>
                                <th scope="col">Ticket ID</th>
                                <th scope="col">Customer Details</th>
                                <th scope="col">From- To / Passenger</th>
                                <th scope="col">Payment</th>
                                <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($orders as $row)
                            <tr>
                                <td><input type="checkbox" /></td>
                                <td>{{date('d M, Y', strtotime($row['ordered_at']))}}<br>{{date('H:i', strtotime($row['ordered_at']))}}</td>
                                <td>{{$row['booking_id']}}</td>
                                <td>{{$row['pessenger_name']}}<br>
                                    <!--kundra45@ gmai.....<br>9814652162-->
                                </td>
                                <td>{{$row['origin']}} to {{$row['destinatoin']}}<br>
                                    <!--Via: AirIndia<br>2 Adults-->
                                </td>
                                <td class="prize_table">{{$row['order_total']}}</td>
                                <td class="delivered_table">Delivered</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>


                    <!-- <div class="seller_btm_pagination">
                        <nav aria-label="Page navigation example" class="float-right mt-4 mt-4">
                            <ul class="pagination">
                                <li class="page-item pagination_seller_nav">
                                    <a class="page-link" href="#" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                </li>
                                <li class="page-item"><a class="page-link active_pagination" href="#">1</a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">4</a></li>
                                <li class="page-item"><a class="page-link" href="#">5</a></li>
                                <li class="page-item pagination_seller_nav">
                                    <a class="page-link" href="#" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div> -->
                </div>
            </div>

        </div>
    </div>
</div>

@endsection