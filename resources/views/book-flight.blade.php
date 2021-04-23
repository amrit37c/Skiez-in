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
                                    <input id="from_wait" value="" type="hidden" />
                                    <input id="to_wait" value="" type="hidden" />
                                    <input type="hidden" name="device_app" id="device_app" value="2" />
                                    <input type="hidden" name="hfFromDate" id="hfFromDate" value="04/12/2020" />
                                    <input type="hidden" name="hfToDate" id="hfToDate" value="" />
                                    <input type="hidden" name="hfTripType" id="hfTripType" value="false" />
                                    <input type="hidden" name="hfAdult" id="hfAdult" value="" />
                                    <input type="hidden" name="hfChild" id="hfChild" value='' />
                                    <input type="hidden" name="hfInfant" id="hfInfant" value='' />
                                    <input type="hidden" name="hfdirect" id="hfdirect" />
                                    <input type="hidden" name="hdn_flying_from" id="hdn_flying_from" value="" />
                                    <input type="hidden" name="hdn_flying_to" id="hdn_flying_to" value="" />
                                    <input type="hidden" name="modify" id="modify" value="1" />

                                    <section class="serchBox">
                                        <div class="searchEng">
                                            <!--<div class="waybtn" style="width:29%;">-->
                                            <!--    <button onclick="return SelectTripType('O')" class="slt oneway">One way</button>-->
                                            <!--    <button class="roundway" onclick="return SelectTripType('R')">Round trip</button>-->
                                            <!--</div>-->
                                            <div class="srcformbx">
                                                <div class="col-6 col-lg-3 lbl swap search_nav_two">
                                                    <strong class="swap">From </strong>

                                                    <input type="text" readonly name="flying_from_N" data-target="Fly_Depart_airport" data-search-results="fromResults" value="<?= @$_GET["flying_from_N"] ?>" class="fly-from-input airportslist" placeholder="From" id="flying_from_N" />

                                                    <b id="Fly_Depart_airport"><?= $_GET['fromFullName'] ?></b>

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
                                                    <input name="flying_to_N" readonly type="text" data-target="Fly_Dest_airport" data-search-results="toResults" class="fly-to-input airportslist" value="<?= @$_GET["flying_to_N"] ?>" placeholder="To" id="flying_to_N"/>
                                                    <b id="Fly_Dest_airport"><?= $_GET['toFullName'] ?></b>

                                                    <div class="fromtopopup topopup">
                                                        <div class="search_flight_result_div">
                                                            <ul id="toResults">
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-lg-2 lbl search_nav_two" id="Fly_dep_datepickerid">
                                                    <strong>Departure <i class="fa fa-angle-down"></i></strong>
                                                    <input id="datepicker_1" readonly name="departure_date" value="<?= @$_GET["departure_date"] ?>" placeholder="DD/MM/YYYY" style="font-size: 20px;margin-top: 19px;">
                                                </div>
                                                <div class="col-6 col-lg-2 lbl search_nav_two" onclick="return SelectTripType('R')" id="Fly_ret_datepickerid" disabled="disabled" style="cursor: no-drop; background: #f5f2f2; ">
                                                    <strong>Return <i class="fa fa-angle-down"></i></strong>
                                                    <input id="datepicker_2" name="return_date" value="<?= @$_GET["return_date"] ?>" placeholder="DD/MM/YYYY" style="font-size: 20px;margin-top: 19px;">
                                                </div>
                                                <div class="col-12 col-lg-2 lbl lst search_nav_two">
                                                    <!--  id="adult_div" -->
                                                    <input type="hidden" id="adult" name="adult" value="1" />
                                                    <strong>Travellers & Class <i class="fa fa-angle-down"></i></strong>
                                                    <span><big id="travel_id"><?= (@$_GET["adults"] + @$_GET["young_adults"] + @$_GET["children"] + @$_GET["infant"]) ?></big> Traveller</span>
                                                    <b id="cabin_id">Economy</b>
                                                </div>

                                                <div class="popup adultdrop" id="flightsCal">
                                                    <span class="adult1">
                                                        <span class="ad_left">
                                                            <img src="{{env('ASSETS_URL')}}img/adult.png" alt="Adult Flights">
                                                            Adults (16+)
                                                        </span> <span class="ad_right">
                                                            <input type="button" disabled class="minus maincalculations" data-target="adults" value="-">
                                                            <input type="text" readonly class="count" value="<?= @$_GET["adults"] ?>" id="sub1" name="adults">
                                                            <input type="button" disabled class="plus maincalculations" data-target="adults" value="+">
                                                        </span>
                                                    </span>

                                                    <span class="adult1">
                                                        <span class="ad_left">
                                                            <img src="{{env('ASSETS_URL')}}img/adult.png" alt="Adult Flights">
                                                            Young Adults (12-15)
                                                        </span> <span class="ad_right">
                                                            <input type="button" class="minus maincalculations" data-target="young_adults" value="-">
                                                            <input type="text" class="count" value="<?= @$_GET["young_adults"] ?>" id="sub2" name="young_adults">
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
                                                            <input type="text" class="count" value="<?= @$_GET["children"] ?>" id="sub3" name="children">
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
                                                            <input type="text" class="count" value="<?= @$_GET["infant"] ?>" id="sub4" name="infant">
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
                <h6 class="total_paid_ammount">Total Ammount to be Paid <span>₹ <?= $data["totalFair"] ?></span></h6>
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

            <div class="refine_rslt_row refine_rslt_form">
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
            <form action="{{route('reviewBooking')}}" method="post">
                <input type="hidden" value="{{csrf_token()}}" name="_token">
                <div class="col-md-10 mx-auto">
                <div class="row book_formsec_1">
                        <div class="col-md-12 book_formtop_info">
                            <p><i class="fas fa-info-circle"></i> Please make sure the details entered below are exactly as per Traveller's ID</p>
                        </div>

                        <!--<div class="col-md-12 book_formsec_form_top_head">-->
                        <!--    <h5>MR. <span>Above 12 years</span></h5>-->
                        <!--</div>-->

                        <div class="col-md-2 book_form_detail mt-4">
                            <label for="title">Title</label>
                            <select name="title" id="title">
                                <option value="Mr">Mr</option>
                                <option value="Mrs">Mrs</option>
                                <option value="Miss">Miss</option>
                                <option value="Ms">Ms</option>
                                <option value="Master">Master</option>
                            </select>
                        </div>

                        <div class="col-md-4 book_form_detail_two mt-4">
                            <label for="">First Name / Given Name</label>
                            <input type="text" required placeholder="First Name" name="first_name" value="{{ @Session::get('user_type') == 1 ? @Session::get('user_details')['first_name'] : '' }}" />
                        </div>

                        <div class="col-md-3 book_form_detail_two mt-4">
                            <label for="">Last Name / Surname</label>
                            <input type="text" required placeholder="Last Name" name="last_name" value="{{ @Session::get('user_type') == 1 ? @Session::get('user_details')['last_name'] : '' }}" />
                        </div>

                        

                        <div class="col-md-3 book_form_detail_two mt-4">
                            <label for="">Date of Birth</label>
                            <input type="date" required name="date_of_birth" value="{{ @Session::get('user_type') == 1 ? @Session::get('user_details')['date_of_birth'] : '' }}">
                        </div>

                        

                        <div class="col-md-6 book_form_detail_two mt-4">
                            <label for="">Document Type</label>
                            <select name='doc_type'>
                                @if(Request::input('flight_type') == 'international')
                                <option value="PSPT">Passport</option>
                                @else
                                <option value="UIDAI">Adhar</option>
                                <option value="PSPT">Passport</option>
                                @endif
                            </select>
                        </div>

                        <div class="col-md-6 book_form_detail_two mt-4">
                            <label for="">Document Number</label>
                            <input type="text" required name="doc_number" placeholder="Document Number" />
                        </div>

                        <div class="col-md-6 book_form_detail_two mt-4">
                            <label for="">Document Expiry</label>
                            <input type="date" required name="doc_expiry" placeholder="Document Expiry" />
                        </div>

                        <div class="col-md-6 book_form_detail_two mt-4">
                            <label for="">Issue Country</label>
                            <input type="text" required name="issue_country" placeholder="Issue Country" />
                        </div>
                    </div>

                    <div class="row book_formsec_1">
                        <div class="col-md-12 book_formsec_form_top_head_two">
                            <h5>Select Seats (Optional)</h5>
                        </div>

                        <div class="col-md-12 book_formtop_info book_formtop_info_two">
                            <p><i class="fas fa-info-circle"></i> The final seat allocation is subject to availability</p>
                        </div>

                        <div class="col-md-4 mx-auto select_ae_seat">
                            <h6><i class="fas fa-plane"></i> Sel onward seat</h6>

                            <h5>Flight 1 <span><?= $data["from"] ?>-<?= $data["to"] ?> <strong><?= $data["flightNumber"] ?></strong></span></h5>

                        </div>
                    </div>


                    <div class="row book_formsec_1">
                        <div class="col-md-12 book_formtop_info">
                            <p><i class="fas fa-info-circle"></i> Your Ticket will be sent to this email address</p>
                        </div>

                        <div class="col-md-6 book_form_detail_two book_form_detail_two_si my-4">
                            <label for="">Mobile</label>

                            <select name="countryCode" id="">
                                <option value="91">+91</option>
                            </select>

                            <input type="text" placeholder="Mobile" name="mobile_number" value="{{ @Session::get('user_type') == 1 ? @Session::get('mobile_number') : '' }}" />
                        </div>

                        <div class="col-md-6 book_form_detail_two my-4">
                            <label for="">Email</label>
                            <input type="text" placeholder="Email" name="email" value="{{ @Session::get('user_type') == 1 ? @Session::get('email') : '' }}" />
                        </div>

                    </div>

                    <div class="row book_formsec_1">
                        <div class="col-md-12 book_formtop_info">
                            <p><i class="fas fa-info-circle"></i> Insurance fee as applicable will be added if you select yes and proceed. Read terms & conditions for more informations</p>
                        </div>

                        <div class="col-md-12 check_sec_booking_form my-4">
                            <input type="checkbox" value="1" name="insurance" checked>
                            <p>Add Travel Insurance - Safeguard your travel & yourself @ <span>₹133</span> (Per Passenger)</p>
                        </div>

                    </div>

                    <div class="row book_formsec_1">
                        <div class="col-md-12 check_sec_booking_form check_sec_booking_form_two my-4">
                            <input type="checkbox" value="1" name="conditoins" required checked>
                            <p>I have Read and Agree to the <a href="#">Terms & Condition</a></p>
                            <button type="submit" class="proceed_booking_btn">Proceed to Booking</button>
                        </div>

                    </div>
                </div>
            </form>
        </div>
</section>


@endsection