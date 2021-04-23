<!-- Stored in resources/views/child.blade.php -->
@extends('layouts.master')

@section('title', 'Home' . ' | ' . env('APP_NAME'))

@section('content')


<!-- booking part start-->
<section class="booking_part mt-1" style="background: #fff; box-shadow: 0 0 8px #0000001c;">
    <div class="container book_check_sec" style="background-image: none; padding-bottom: 0;">
        <div class="row">

            <div class="col-lg-10">
                <div class="booking_content" style="box-shadow: none; padding: 10px 0px;float: left;">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="hotel" role="tabpanel" aria-labelledby="hotel-tab">
                            <div class="booking_form">
                                <form action="{{route('searchFlight')}}" method="get">
                                    <section class="serchBox">
                                        <div class="searchEng">
                                            <div class="waybtn" style="width:29%;">
                                                <button onclick="return SelectTripType('O')" class="slt oneway">One way</button>
                                                <button class="roundway" onclick="return SelectTripType('R')">Round trip</button>
                                            </div>
                                            <div class="srcformbx">
                                                <div class="col-6 col-lg-3 lbl swap search_nav_two">
                                                    <strong class="swap">From </strong>

                                                    <input type="text" name="flying_from_N" data-target="Fly_Depart_airport" data-search-results="fromResults" value="<?= @$flightsDetails["flying_from_N"] ?>" class="fly-from-input airportslist" placeholder="From" id="flying_from_N" onclick="autodiv_from();" />

                                                    <b id="Fly_Depart_airport">Airport Name or City Name</b>

                                                    <img src="{{asset('/public/img/swap.png')}}" style="cursor:pointer;" width="31" height="30" alt="Swap" title="Swap">
                                                    <div class="fromtopopup frompopup">
                                                        <div class="search_flight_result_div">
                                                            <ul id="fromResults">
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-6 col-lg-3 lbl search_nav_two">

                                                    <strong>To</strong>
                                                    <input name="flying_to_N" type="text" data-target="Fly_Dest_airport" data-search-results="toResults" class="fly-to-input airportslist" value="<?= @$flightsDetails["flying_to_N"] ?>" placeholder="To" id="flying_to_N" onclick="autodiv_to();" />
                                                    <b id="Fly_Dest_airport">Airport Name or City Name</b>

                                                    <div class="fromtopopup topopup">
                                                        <div class="search_flight_result_div">
                                                            <ul id="toResults">
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-lg-2 lbl search_nav_two" id="Fly_dep_datepickerid">
                                                    <strong>Departure <i class="fa fa-angle-down"></i></strong>
                                                    <input id="datepicker_1" name="departure_date" value="<?= @$flightsDetails["departure_date"] ?>" placeholder="DD/MM/YYYY" style="font-size: 20px;margin-top: 19px;">
                                                </div>
                                                <div class="col-6 col-lg-2 lbl search_nav_two" onclick="return SelectTripType('R')" id="Fly_ret_datepickerid" disabled="disabled" style="cursor: no-drop; background: #f5f2f2; ">
                                                    <strong>Return <i class="fa fa-angle-down"></i></strong>
                                                    <input id="datepicker_2" name="return_date" value="<?= @$flightsDetails["return_date"] ?>" placeholder="DD/MM/YYYY" style="font-size: 20px;margin-top: 19px;">
                                                </div>
                                                <div class="col-12 col-lg-2 lbl lst search_nav_two" id="adult_div">
                                                    <input type="hidden" id="adult" name="adult" value="1" />
                                                    <strong>Travellers & Class <i class="fa fa-angle-down"></i></strong>
                                                    <span><big id="travel_id"><?= (@$flightsDetails["adults"] + @$flightsDetails["young_adults"] + @$flightsDetails["children"] + @$flightsDetails["infant"]) ?></big> Traveller</span>
                                                    <b id="cabin_id">Economy</b>
                                                </div>

                                                <div class="popup adultdrop" id="flightsCal">
                                                    <span class="adult1">
                                                        <span class="ad_left">
                                                            <img src="{{env('ASSETS_URL')}}img/adult.png" alt="Adult Flights">
                                                            Adults (16+)
                                                        </span> <span class="ad_right">
                                                            <input type="button" class="minus maincalculations" data-target="adults" value="-">
                                                            <input type="text" class="count" value="<?= @$flightsDetails["adults"] ?>" id="sub1" name="adults">
                                                            <input type="button" class="plus maincalculations" data-target="adults" value="+">
                                                        </span>
                                                    </span>

                                                    <span class="adult1">
                                                        <span class="ad_left">
                                                            <img src="{{env('ASSETS_URL')}}img/adult.png" alt="Adult Flights">
                                                            Young Adults (12-15)
                                                        </span> <span class="ad_right">
                                                            <input type="button" class="minus maincalculations" data-target="young_adults" value="-">
                                                            <input type="text" class="count" value="<?= @$flightsDetails["young_adults"] ?>" id="sub2" name="young_adults">
                                                            <input type="button" class="plus maincalculations" data-target="young_adults" value="+">
                                                        </span>
                                                    </span>

                                                    <span class="adult1">
                                                        <span class="ad_left">
                                                            <img src="{{env('ASSETS_URL')}}img/child.png" alt="Child Flights">
                                                            Children (2-11)
                                                        </span>
                                                        <span class="ad_right">
                                                            <input type="button" class="minus maincalculations" data-target="children" value="-">
                                                            <input type="text" class="count" value="<?= @$flightsDetails["children"] ?>" id="sub3" name="children">
                                                            <input type="button" class="plus maincalculations" data-target="children" value="+">
                                                        </span>
                                                    </span>
                                                    <span class="adult1">
                                                        <span class="ad_left">
                                                            <img src="{{env('ASSETS_URL')}}img/infant.png" alt="Infant Flights">
                                                            Infant (Under 2 Year)
                                                        </span>
                                                        <span class="ad_right">
                                                            <input type="button" class="minus maincalculations" data-target="infant" value="-">
                                                            <input type="text" class="count" value="<?= @$flightsDetails["infant"] ?>" id="sub4" name="infant">
                                                            <input type="button" class="plus maincalculations" data-target="infant" value="+">
                                                        </span>
                                                    </span>
                                                    <div>
                                                        <span>&nbsp;</span>
                                                        <span>Choose Travel Class</span>
                                                    </div>
                                                    <div class="search-sixbox">
                                                        <select name="ddlCabinClass" id="ddlCabinClass" onchange="getval_Cabin();" class=" fly-cabin-input ac_input">
                                                            <option value="2" selected="selected">Economy</option>
                                                            <option value="3">Premium Economy</option>
                                                            <option value="4">Business</option>
                                                            <option value="6">First</option>
                                                        </select>

                                                        <div class="search-eightbox" style="display:none;">
                                                            <div class="custom-control custom-checkbox pt-2 text-left">
                                                                <input type="checkbox" id="chkIsDirect" class="custom-control-input">
                                                                <label class="custom-control-label" for="chkIsDirect">Direct
                                                                    Flight</label>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <span class="done calculate" data-target="flightsCal"><a>Confirm</a></span>

                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-2">
                <h6 class="total_paid_ammount">Total Ammount to be Paid <span>₹ <?= $flightsDetails["totalFair"] ?></span></h6>
            </div>

        </div>
    </div>
</section>
<!-- Header part end-->


<section class="refine_result">
    <div class="container">
        <div class="row">
            <div class="refine_rslt_row refine_rslt_form refine_rslt_form_active">
                <a href="#"><span>1</span> Travellers' Details <i class="fas fa-caret-right"></i></a>
            </div>

            <div class="refine_rslt_row refine_rslt_form refine_rslt_form_active">
                <a href="#"><span>2</span> Review Itinerary <i class="fas fa-caret-right"></i></a>
            </div>

            <div class="refine_rslt_row refine_rslt_form">
                <a href="#"><span>3</span> Make Payment<i class="fas fa-caret-right"></i></a>
            </div>
        </div>
    </div>
</section>




<section class="result_search_flights">
    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto">

                @if(!empty($priceQuate['soapBody']['ns1OTA_AirPriceRS']['ns1Errors']))
                <p class='alert alert-danger mt-4'>Please Retry booking, transaction timed out already.</p>
                @else
                <div class="row">
                    <div class="book_formsec_headi">
                        <h1><i class="fas fa-plane"></i> Review Itinerary <span>One Way</span></h1>
                    </div>
                </div>

                <div class="row book_formsec_1 iternary_book_formsec mt-0 py-3">
                    <div class="col-md-12 iternary_traveller_top_detail">
                        <h1><i class="fas fa-plane"></i> {{$flightsDetails['from']}} to {{$flightsDetails['to']}}
                            <span>{{ date('d M, Y h:i', strtotime($flightsDetails['arrivalTime'])) }}</span>
                            <!-- <span>1 Stop</span> -->
                        </h1>

                        <div class="row book_formsec_1 mt-0 pt-3 mb-0">
                            <div class="col-md-12 iternary_flight_time_dtl">

                                <div class="row">
                                    <div class="col-md-3 layover_flights_lr">
                                        <h1><span>{{$flightsDetails['from']}}</span></h1>
                                        <h2><span>{{$flightsDetails['fromTerminal']}}</span></h2>
                                        <h3>{{ date('h:i A', strtotime($flightsDetails['arrivalTime'])) }}</h3>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="layover_flights_dtl">
                                            <img src="img/flight_logo3.svg" />
                                            <span>
                                                <h5>Mahan</h5>
                                                <h6>{{$flightsDetails['flightNumber']}}</h6>
                                                <!-- <p>2h 30m</p> -->
                                            </span>

                                        </div>
                                    </div>

                                    <div class="col-md-3 layover_flights_lr layover_flights_r">
                                        <h1><span>{{$flightsDetails['to']}}</span></h1>
                                        <h2>{{$flightsDetails['toTerminal']}}</h2>
                                        <h3>{{ date('h:i A', strtotime($flightsDetails['departureTime'])) }}</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="book_formsec_headi">
                        <h1><i class="fas fa-user-friends"></i> Travellers' Details</h1>
                    </div>
                </div>

                <div class="row book_formsec_1 mt-0 py-3">
                    <div class="col-md-12 iternary_traveller_detail">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Name</th>
                                    <!-- <th scope="col">Type</th> -->
                                    <th scope="col">DOB</th>
                                    <th scope="col">Passport</th>
                                    <th scope="col">Frequent Flier No.</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">Mr {{$userDetails['first_name'] . ' '. $userDetails['last_name']}}</th>
                                    <!-- <td></td> -->
                                    <td>{{ date('d M, Y', strtotime($userDetails['date_of_birth'])) }}</td>
                                    <td>-</td>
                                    <td>-</td>
                                </tr>
                            </tbody>
                        </table>



                        <p><i class="fas fa-user"></i> Contact Details</p>
                        <p><span>Email:</span> {{$userDetails['email']}}</p>
                        <p><span>Mobile:</span> +91-{{$userDetails['mobile_number']}}</p>
                    </div>
                </div>

                <div class="row">
                    <div class="book_formsec_headi">
                        <h1><i class="fas fa-user-friends"></i> Payment Details</h1>
                    </div>
                </div>
                @if(isset($priceQuate))
                <div class="row book_formsec_1 mt-0 py-3">
                    <div class="col-md-12 iternary_traveller_detail">
                        <table class="table">
                            <tr>
                                <th scope="col">Base Fare</th>
                                <td scope="col">{{$priceQuate['soapBody']['ns1OTA_AirPriceRS']['ns1PricedItineraries']['ns1PricedItinerary']['ns1AirItineraryPricingInfo']['ns1ItinTotalFare']['ns1TotalEquivFare']['@attributes']['Amount']}}</td>
                            </tr>
                            <tr>
                                <th scope='col'>Total Fare</th>
                                <td scope="col">{{$priceQuate['soapBody']['ns1OTA_AirPriceRS']['ns1PricedItineraries']['ns1PricedItinerary']['ns1AirItineraryPricingInfo']['ns1ItinTotalFare']['ns1TotalEquivFare']['@attributes']['Amount']}}</td>
                            </tr>
                        </table>
                    </div>
                </div>
                @else
                <div class="row book_formsec_1 mt-0 py-3">
                    <div class="col-md-12 iternary_traveller_detail">
                        <table class="table">
                            <tr>
                                <th scope="col">Base Fare</th>
                                <td scope="col">₹ {{$viaPrice->fare->totalFare->base->amount}}</td>
                            </tr>
                            <tr>
                                <th scope='col'>Taxes</th>
                                <td scope="col">₹ {{$viaPrice->fare->totalFare->tax->amount}}</td>
                            </tr>
                            <tr>
                                <th scope='col'>Total</th>
                                <th scope='col'>₹ {{$viaPrice->fare->totalFare->total->amount}}</th>
                            </tr>
                        </table>
                    </div>
                </div>
                @endif

                <div class="row book_formsec_1">
                    <div class="col-md-12 checkpay_sec_booking_form my-4">
                        <span class="iternary_btm_total_amnt">
                            <h6 class="total_paid_ammount">Ammount to be Paid <span>₹ {{$flightsDetails['totalFair']}}</span></h6>
                            <p>+ Payment Fee</p>
                        </span>

                        <p2>Something Wrong? <a href="{{redirect()->back()}}">Edit Details</a></p2>
                        <p3>All OK?</p3>
                        <form method="post" action="{{route('bookTicket')}}">
                            {!!isset($viaPrice->itinKey) ? '<input type="hidden" name="itinKey" value="'.$viaPrice->itinKey.'">' : ''!!}
                            <input type="hidden" name='_token' value="{{csrf_token()}}">
                            <button type="submit" class="proceed_booking_btn"><i class="fas fa-lock"></i> <span><strong>Make Payment</strong> 100% Secure and Easy to Use</span></button>
                        </form>
                    </div>

                </div>
                @endif
            </div>

        </div>
    </div>
</section>

@endsection