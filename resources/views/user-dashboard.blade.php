@extends('layouts.master')

@section('title', 'Book Flights'. ' | ' .env('APP_NAME'))

@section('content')

<!-- banner part start-->
<section class="banner_user-dash_part">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="user_banner_left">
                    <img src="{{asset('public/img/user_pro_pic.png')}}" />

                    <span>
                        <h1>Hi {{@Session::get('userDetails')['first_name']}} {{@Session::get('userDetails')['last_name']}}</h1>
                        <p>welcome back</p>
                    </span>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="user_banner_right">
                    <span>
                        <p>{{@Session::get('userDetails')['first_name']}} {{@Session::get('userDetails')['last_name']}} <i class="far fa-user"></i></p>
                        <p>{{@Session::get('userDetails')['email']}} <i class="far fa-envelope"></i></p>
                        <p>{{@Session::get('userDetails')['mobile_number']}} <i class="fas fa-mobile-alt"></i></p>
                    </span>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- banner part start-->




<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="row userashboard_Cntn_area">
                <div class="row">
                    <div class="col-sm-12">
                        @if($errors)
                        {!!$errors->first()!!}
                        @endif
                    </div>
                </div>
                <div class="col-md-12 userdashbrd_cnt_tp_btn tab">
                    <button class="tablinks" onclick="openCity(event, 'dashboard')" id="defaultOpen">Dashboard</button>
                    <button class="tablinks" onclick="openCity(event, 'order_history')">Order History</button>
                </div>

                <div class="col-md-12">
                    <div class="userdashbrd_cnt_tabs_sec tabcontent" id="dashboard">
                        <div class="user_cnt_tabs_sec_l default">
                            <h1>My Bookings <span>{{count($todayOrders)}}</span></h1>

                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Depart Date</th>
                                        <th scope="col">Origin</th>
                                        <th scope="col">Destination</th>
                                        <th scope="col">Booking id.</th>
                                        <th scope="col">Passenger's name</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(count($todayOrders) == 0)
                                    <tr>
                                        <td colspan='6'>No Orders Placed yet</td>
                                    </tr>
                                    @else
                                    @foreach($todayOrders as $row)
                                    <tr>
                                        <td>{{$row['ordered_at']}}</td>
                                        <td>{{$row['origin']}}</td>
                                        <td>{{$row['destinatoin']}}</td>
                                        <td>{{$row['booking_id']}}</td>
                                        <td>{{$row['pessenger_name']}}</td>
                                        <td><button class="show_drp_room_slct">View Detail</button></td>
                                    </tr>
                                    @endforeach
                                    @endif
                                </tbody>
                            </table>

                            <div class="shownd_mybooking_selec show_drp_room_slct_show">
                                <div class="shownd_mybooking_selec_rm">
                                    <span class="box_top_con2"></span>

                                    <div class="my_booking_all_dtl">
                                        <div class="my_booking_all_dtlsec1">
                                            <span class="span_one">
                                                <h2>Chandigarh</h2>
                                                <span><img src="img/where_to.svg" /></span>
                                                <h2>Delhi</h2>
                                            </span>

                                            <span class="span_two">
                                                <p>Friday, 5 March 2021</p>
                                                <p>10:00 PM</p>
                                            </span>
                                        </div>

                                        <div class="my_booking_all_dtlsec2">
                                            <p><span>From:</span> Chandigarh Airport</p>
                                            <p><span>To: </span> New Delhi Airport</p>
                                            <p><span>Travel Time:</span> 2 hr</p>
                                        </div>
                                    </div>

                                    <div class="my_booking_all_dt2">
                                        <div class="my_booking_all_dtlsec2">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                                                scrambled it to make a type specimen book. It has survived not only five centuries,</p>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                        <div class="user_cnt_tabs_sec_l searched" style="display: none">
                            <h1>My Bookings <span id="resetSearch"><i class="fas fa-redo-alt"></i></span></h1>

                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Depart Date</th>
                                        <th scope="col">Origin</th>
                                        <th scope="col">Destination</th>
                                        <th scope="col">Booking id.</th>
                                        <th scope="col">Passenger's name</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody id="searchResults">

                                </tbody>
                            </table>
                        </div>

                        <div class="user_cnt_tabs_sec_r">
                            <h1>Check Booking Status</h1>
                            <input type="text" name="booking_id" placeholder="Enter your booking ID" /><button id="serachBooking">Check</button>
                            <p>Eg.CR7XXXX</p>
                        </div>
                    </div>

                    <div class="userdashbrd_cnt_tabs_sec tabcontent" id="order_history">
                        <div class="user_cnt_tabs_sec_l w-100" style="border: none;">
                            <h1>Order History</h1>



                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Order ID</th>
                                        <th scope="col">Depart Date</th>
                                        <th scope="col">Origin</th>
                                        <th scope="col">Destination</th>
                                        <th scope="col">Booking id.</th>
                                        <th scope="col">Passenger's name</th>
                                        <th scope="col"></th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>CE57R</td>
                                        <td>Friday, 5 March 2021 </td>
                                        <td>Chandigarh</td>
                                        <td>DElhi</td>
                                        <td>CE57R</td>
                                        <td>Kartik,Vishal</td>
                                        <th><span>₹ 9,933.13</span> </th>
                                        <td><button class="show_drp_room_slct">View Detail</button></td>
                                    </tr>

                                </tbody>
                            </table>

                            <div class="shownd_mybooking_selec show_drp_room_slct_show">
                                <div class="shownd_mybooking_selec_rm">
                                    <span class="box_top_con2"></span>

                                    <div class="my_booking_all_dtl">
                                        <div class="my_booking_all_dtlsec1">
                                            <span class="span_one">
                                                <h2>Chandigarh</h2>
                                                <span><img src="img/where_to.svg" /></span>
                                                <h2>Delhi</h2>
                                            </span>

                                            <span class="span_two">
                                                <p>Friday, 5 March 2021</p>
                                                <p>10:00 PM</p>
                                            </span>
                                        </div>

                                        <div class="my_booking_all_dtlsec2">
                                            <p><span>From:</span> Chandigarh Airport</p>
                                            <p><span>To: </span> New Delhi Airport</p>
                                            <p><span>Travel Time:</span> 2 hr</p>
                                        </div>
                                    </div>

                                    <div class="my_booking_all_dt2">
                                        <div class="my_booking_all_dtlsec2">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                                                scrambled it to make a type specimen book. It has survived not only five centuries,</p>
                                        </div>
                                    </div>


                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<script>
    jQuery("#serachBooking").on("click", function() {
        var bookingId = $("[name=booking_id]").val();
        jQuery.ajax({
            url: `{{route('searchBooking')}}`,
            type: "get",
            data: `booking_id=${bookingId}`,
            success: function(result) {
                result = JSON.parse(result);
                if (result.status == 0) {
                    alert(result.message);
                } else {
                    var rows = "";
                    var a = 0;
                    while (a < result.data.length) {
                        rows += `<tr>
                                <td>${result.data[a].ordered_at}</td>
                                <td>${result.data[a].origin}</td>
                                <td>${result.data[a].destinatoin}</td>
                                <td>${result.data[a].booking_id}</td>
                                <td>${result.data[a].pessenger_name}</td>
                                <td><button class="show_drp_room_slct">View Detail</button></td>
                            </tr>`;
                        a++;
                    }
                    $(".user_cnt_tabs_sec_l.default").css({
                        display: "none"
                    });
                    $(".user_cnt_tabs_sec_l.searched").css({
                        display: "block"
                    });
                    $("#searchResults").html(rows);
                }
            },
            error: function(error) {
                console.log(error);
            }
        })
    });

    $("#resetSearch").on("click", function() {
        $(".user_cnt_tabs_sec_l.default").css({
            display: "block"
        });
        $(".user_cnt_tabs_sec_l.searched").css({
            display: "none"
        });
    })
</script>

@endsection