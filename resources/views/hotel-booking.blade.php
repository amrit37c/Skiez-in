<!-- Stored in resources/views/child.blade.php -->
@extends('layouts.master')

@section('title', 'Book Hotels' . ' | ' . env('APP_NAME'))

@section('content');
    <!--top place start-->
    <section class="section_padding hotel_booking_bg flight_banner">
        <div class="container">
            <div class="row">
            </div>
        </div>
    </section>
    <!--top place end-->


    <!-- booking part start-->
    <section class="booking_part mt-5">
        <div class="container book_check_sec pb-0" style="background-image: none;">
            <div class="row">
                <div class="col-lg-12">
                    <div class="booking_menu">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="hotel-tab" data-toggle="tab" href="#flight" role="tab" aria-controls="hotel" aria-selected="true"><img src="img/flight_icon.svg" class="book_tab_icon" /> Flight</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" id="place-tab" data-toggle="tab" href="#hotel" role="tab" aria-controls="place" aria-selected="false"><img src="img/hotel_icon.svg" class="book_tab_icon" /> Hotel</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" id="tricket-tab" data-toggle="tab" href="#hotel_flight" role="tab" aria-controls="tricket" aria-selected="false"><img src="img/hotel_icon.svg" class="book_tab_icon" /> Flight + Hotel</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" id="tricket-tab" data-toggle="tab" href="#" role="tab" aria-controls="tricke" aria-selected="false"><img src="img/car_icon.svg" class="book_tab_icon" /> Flight + Car</a>
                            </li>

                        </ul>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="booking_content" style="height: 245px;">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="flight" role="tabpanel" aria-labelledby="hotel-tab">
                                <div class="booking_form">
                                    <script src="bundles/seachengine02b9?v=4242424242424"></script>

                                    <form action="" method="post">
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
                                                <div class="waybtn">
                                                    <button onclick="return SelectTripType('O')" class="slt oneway">One
                                                        way</button>
                                                    <button class="roundway" onclick="return SelectTripType('R')">Round
                                                        trip</button>
                                                </div>



                                                <div class="srcformbx">

                                                    <div class="col-6 col-lg-3 lbl swap">
                                                        <strong class="swap">From </strong>
                                                        <input type="text" name="flying_from_N" value="" class="fly-from-input" placeholder="From" id="flying_from_N" onclick="autodiv_from();" autocomplete="off" />
                                                        <b id="Fly_Depart_airport">Airport Name or City Name</b>
                                                        <img src="img/swap.png" style="cursor:pointer;" onclick="swapfun()" width="31" height="30" alt="Swap" title="Swap">
                                                        <div class="fromtopopup frompopup">
                                                            <label>
                                                                <i class="fa fa-search"></i>
                                                                <input type="text" name="flying_from" class="fly-from-input ac_input" autocomplete="off" placeholder="From" id="flying_from" />
                                                            </label>
                                                            <div class="staticway">
                                                                <h5>Popular Cities</h5>
                                                                <ul>
                                                                    <li onclick="setsearhengine('Delhi', 'DEL', 'Indira Gandhi International Airport', 'India', 'IN')">
                                                                        Delhi</li>
                                                                    <li onclick="setsearhengine('Bangalore', 'BLR', 'Bengaluru International Airport', 'India', 'IN')">
                                                                        Bangalore</li>
                                                                    <li onclick="setsearhengine('Mumbai', 'BOM', 'Chhatrapati Shivaji International Airport', 'India', 'IN')">
                                                                        Mumbai</li>
                                                                    <li onclick="setsearhengine('Hyderabad', 'HYD', 'Shamshabad Rajiv Gandhi International Airport', 'India', 'IN')">
                                                                        Hyderabad</li>
                                                                    <li onclick="setsearhengine('Kolkata', 'CCU', 'Netaji Subhas Chandra Bose International Airport', 'India', 'IN')">
                                                                        Kolkata</li>
                                                                    <li onclick="setsearhengine('Chennai', 'MAA', 'Chennai Airport', 'India', 'IN')">
                                                                        Chennai/Madras</li>
                                                                    <li onclick="setsearhengine('Ahmedabad', 'AMD', 'Ahmedabad International Airport', 'India', 'IN')">
                                                                        Ahmedabad</li>
                                                                    <li onclick="setsearhengine('Pune', 'PNQ', 'Lohegaon Airport', 'India', 'IN')">
                                                                        Pune</li>
                                                                    <li onclick="setsearhengine('Guwahati', 'GAU', 'Bordoloi International Airport', 'India', 'IN')">
                                                                        Guwahati</li>
                                                                    <li onclick="setsearhengine('Goa', 'GOI', 'Dabolim Airport', 'India', 'IN')">
                                                                        Goa</li>
                                                                    <li onclick="setsearhengine('Lucknow', 'LKO', 'Amausi Airport', 'India', 'IN')">
                                                                        Lucknow</li>
                                                                    <li onclick="setsearhengine('Bhubaneswar', 'BBI', 'Biju Patnaik Airport', 'India', 'IN')">
                                                                        Bhubaneswar</li>
                                                                    <li onclick="setsearhengine('Cochin', 'COK', 'Chochin International Airport', 'India', 'IN')">
                                                                        Cochin</li>
                                                                    <li onclick="setsearhengine('Jaipur', 'JAI', 'Sanganeer Airport', 'India', 'IN')">
                                                                        Jaipur</li>
                                                                    <li onclick="setsearhengine('Patna', 'PAT', 'Jai Prakash Narayan Airport', 'India', 'IN')">
                                                                        Patna</li>
                                                                    <li onclick="setsearhengine('Srinagar', 'SXR', 'Srinagar International Airport', 'India', 'IN')">
                                                                        Srinagar</li>
                                                                    <li onclick="setsearhengine('Nagpur', 'NAG', 'Dr Ambedkar International Airport', 'India', 'IN')">
                                                                        Nagpur</li>
                                                                    <li onclick="setsearhengine('Agartala', 'IXA', 'Singerbhil Airport', 'India', 'IN')">
                                                                        Agartala</li>
                                                                </ul>
                                                            </div>

                                                        </div>
                                                    </div>

                                                    <div class="col-6 col-lg-3 lbl">

                                                        <strong>To</strong>
                                                        <input name="flying_to_N" type="text" class="fly-to-input" value="" placeholder="To" id="flying_to_N" onclick="autodiv_to();" autocomplete="off" />
                                                        <b id="Fly_Dest_airport">Airport Name or City Name</b>

                                                        <div class="fromtopopup topopup">
                                                            <label>
                                                                <i class="fa fa-search"></i>

                                                                <input type="text" name="flying_to" class="fly-from-input ac_input" autocomplete="off" placeholder="To" id="flying_to" />
                                                            </label>
                                                            <div class="staticway">
                                                                <h5>Popular Cities</h5>
                                                                <ul>
                                                                    <li onclick="setsearhengine_Return('Delhi', 'DEL', 'Indira Gandhi International Airport', 'India', 'IN')">
                                                                        Delhi</li>
                                                                    <li onclick="setsearhengine_Return('Bangalore', 'BLR', 'Bengaluru International Airport', 'India', 'IN')">
                                                                        Bangalore</li>
                                                                    <li onclick="setsearhengine_Return('Mumbai', 'BOM', 'Chhatrapati Shivaji International Airport', 'India', 'IN')">
                                                                        Mumbai</li>
                                                                    <li onclick="setsearhengine_Return('Hyderabad', 'HYD', 'Shamshabad Rajiv Gandhi International Airport', 'India', 'IN')">
                                                                        Hyderabad</li>
                                                                    <li onclick="setsearhengine_Return('Kolkata', 'CCU', 'Netaji Subhas Chandra Bose International Airport', 'India', 'IN')">
                                                                        Kolkata</li>
                                                                    <li onclick="setsearhengine_Return('Chennai', 'MAA', 'Chennai Airport', 'India', 'IN')">
                                                                        Chennai/Madras</li>
                                                                    <li onclick="setsearhengine_Return('Ahmedabad', 'AMD', 'Ahmedabad International Airport', 'India', 'IN')">
                                                                        Ahmedabad</li>
                                                                    <li onclick="setsearhengine_Return('Pune', 'PNQ', 'Lohegaon Airport', 'India', 'IN')">
                                                                        Pune</li>
                                                                    <li onclick="setsearhengine_Return('Guwahati', 'GAU', 'Bordoloi International Airport', 'India', 'IN')">
                                                                        Guwahati</li>
                                                                    <li onclick="setsearhengine_Return('Goa', 'GOI', 'Dabolim Airport', 'India', 'IN')">
                                                                        Goa</li>
                                                                    <li onclick="setsearhengine_Return('Lucknow', 'LKO', 'Amausi Airport', 'India', 'IN')">
                                                                        Lucknow</li>
                                                                    <li onclick="setsearhengine_Return('Bhubaneswar', 'BBI', 'Biju Patnaik Airport', 'India', 'IN')">
                                                                        Bhubaneswar</li>
                                                                    <li onclick="setsearhengine_Return('Cochin', 'COK', 'Chochin International Airport', 'India', 'IN')">
                                                                        Cochin</li>
                                                                    <li onclick="setsearhengine_Return('Jaipur', 'JAI', 'Sanganeer Airport', 'India', 'IN')">
                                                                        Jaipur</li>
                                                                    <li onclick="setsearhengine_Return('Patna', 'PAT', 'Jai Prakash Narayan Airport', 'India', 'IN')">
                                                                        Patna</li>
                                                                    <li onclick="setsearhengine_Return('Srinagar', 'SXR', 'Srinagar International Airport', 'India', 'IN')">
                                                                        Srinagar</li>
                                                                    <li onclick="setsearhengine_Return('Nagpur', 'NAG', 'Dr Ambedkar International Airport', 'India', 'IN')">
                                                                        Nagpur</li>
                                                                    <li onclick="setsearhengine_Return('Agartala', 'IXA', 'Singerbhil Airport', 'India', 'IN')">
                                                                        Agartala</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6 col-lg-2 lbl" id="Fly_dep_datepickerid">
                                                        <strong>Departure <i class="fa fa-angle-down"></i></strong>
                                                        <input id="datepicker_1" placeholder="00/00/0000" style="font-size: 20px;margin-top: 19px;">
                                                    </div>
                                                    <div class="col-6 col-lg-2 lbl" onclick="return SelectTripType('R')" id="Fly_ret_datepickerid" disabled="disabled" style="cursor: no-drop; background: #f5f2f2; ">
                                                        <strong>Return <i class="fa fa-angle-down"></i></strong>
                                                        <input id="datepicker_2" placeholder="00/00/0000" style="font-size: 20px;margin-top: 19px;">
                                                    </div>
                                                    <div class="col-12 col-lg-2 lbl lst" id="adult_div">
                                                        <input type="hidden" id="adult" name="adult" value="1" />
                                                        <strong>Travellers & Class <i class="fa fa-angle-down"></i></strong>
                                                        <span><big id="travel_id">1</big> Traveller</span>
                                                        <b id="cabin_id">Economy</b>

                                                    </div>

                                                    <div class="popup adultdrop">
                                                        <span class="adult1">
                                                            <span class="ad_left">
                                                                <img src="img/adult.png" alt="Adult Flights">
                                                                Adults (12+)
                                                            </span> <span class="ad_right">
                                                                <input type="button" class="minus maincalulation" value="-" id="sub1minus">
                                                                <input type="text" class="count" value="1" id="sub1">
                                                                <input type="button" class="plus maincalulation" value="+" id="sub1plus">
                                                            </span>
                                                        </span>
                                                        <span class="adult1">
                                                            <span class="ad_left">
                                                                <img src="img/child.png" alt="Child Flights">
                                                                Children (2-11)
                                                            </span>
                                                            <span class="ad_right">
                                                                <input type="button" class="minus maincalulation" value="-" id="sub2minus">
                                                                <input type="text" class="count" value="0" id="sub2">
                                                                <input type="button" class="plus maincalulation" value="+" id="sub2plus">
                                                            </span>
                                                        </span>
                                                        <span class="adult1">
                                                            <span class="ad_left">
                                                                <img src="img/infant.png" alt="Infant Flights">
                                                                Infant
                                                            </span>
                                                            <span class="ad_right">
                                                                <input type="button" class="minus maincalulation" value="-" id="sub3minus">
                                                                <input type="text" class="count" value="0" id="sub3">
                                                                <input type="button" class="plus maincalulation" value="+" id="sub3plus">
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
                                                        <span class="done"><a>Done</a></span>

                                                    </div>

                                                </div>
                                            </div>

                                        </section>
                                        <style>
                                            .fromtopopup {
                                                display: none;
                                                width: 340px;
                                                position: absolute;
                                                left: 0;
                                                top: 30px;
                                                float: left;
                                                -webkit-border-radius: 4px;
                                                -moz-border-radius: 4px;
                                                border-radius: 4px;
                                                background-color: #ffffff;
                                                -webkit-box-shadow: 0 1px 6px 0 rgba(0, 0, 0, 0.2);
                                                -moz-box-shadow: 0 1px 6px 0 rgba(0, 0, 0, 0.2);
                                                box-shadow: 0 1px 6px 0 rgba(0, 0, 0, 0.2);
                                                z-index: 9999;
                                            }

                                            .fromtopopup label {
                                                width: 100%;
                                                position: relative;
                                                min-height: auto;
                                            }

                                            .fromtopopup label i {
                                                position: absolute;
                                                left: 10px;
                                                top: 15px;
                                                font-size: 12px;
                                            }

                                            .fromtopopup p {
                                                color: #666;
                                                font-size: 13px;
                                                padding: 0px 10px;
                                            }

                                            .fromtopopup input {
                                                width: 100% !important;
                                                background: #ffffff !important;
                                                -webkit-box-shadow: 0 2px 3px 0 rgba(204, 204, 204, 0.1);
                                                -moz-box-shadow: 0 2px 3px 0 rgba(204, 204, 204, 0.1);
                                                box-shadow: 0 2px 3px 0 rgba(204, 204, 204, 0.1);
                                                padding: 11px 10px 11px 30px;
                                                outline: 0;
                                                border: 0;
                                                width: 100%;
                                                font-size: 15px !important;
                                                color: #666;
                                                font-weight: normal !important;
                                            }

                                            .fromtopopup input:focus {
                                                outline: 0;
                                                border: 0;
                                            }
                                        </style>
                                    </form>

                                    <a id="searchengine_btn" href="flight_search.html">Search</a>

                                    <!-- <button id="searchengine_btn" onclick="next()">Search</button> -->
                                    <script src="bundles/autocomplate41de?v=12342424d23424567fffsss"></script>

                                </div>

                            </div>

                            <div class="tab-pane fade show" id="hotel" role="tabpanel" aria-labelledby="hotel-tab">
                                <div class="booking_form">
                                    <script src="bundles/seachengine02b9?v=4242424242424"></script>

                                    <form action="" method="post">
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

                                                <div class="srcformbx">

                                                    <div class="col-6 col-lg-6 lbl swap">
                                                        <strong class="swap">DESTINATION</strong>

                                                        <i class="fas fa-map-marker-alt desti-icon_lft"></i>
                                                        <input type="text" name="flying_from_N" value="" class="fly-from-input desti-from-input" placeholder="Enter City, Area or Hotel name" id="flying_from_N" onclick="autodiv_from();" autocomplete="off" />

                                                        <div class="fromtopopup frompopup">
                                                            <label>
                                                                <i class="fa fa-search"></i>
                                                                <input type="text" name="flying_from" class="fly-from-input ac_input" autocomplete="off" placeholder="From" id="flying_from" />
                                                            </label>
                                                            <div class="staticway">
                                                                <h5>Popular Cities</h5>
                                                                <ul>
                                                                    <li onclick="setsearhengine('Delhi', 'DEL', 'Indira Gandhi International Airport', 'India', 'IN')">
                                                                        Delhi</li>
                                                                    <li onclick="setsearhengine('Bangalore', 'BLR', 'Bengaluru International Airport', 'India', 'IN')">
                                                                        Bangalore</li>
                                                                    <li onclick="setsearhengine('Mumbai', 'BOM', 'Chhatrapati Shivaji International Airport', 'India', 'IN')">
                                                                        Mumbai</li>
                                                                    <li onclick="setsearhengine('Hyderabad', 'HYD', 'Shamshabad Rajiv Gandhi International Airport', 'India', 'IN')">
                                                                        Hyderabad</li>
                                                                    <li onclick="setsearhengine('Kolkata', 'CCU', 'Netaji Subhas Chandra Bose International Airport', 'India', 'IN')">
                                                                        Kolkata</li>
                                                                    <li onclick="setsearhengine('Chennai', 'MAA', 'Chennai Airport', 'India', 'IN')">
                                                                        Chennai/Madras</li>
                                                                    <li onclick="setsearhengine('Ahmedabad', 'AMD', 'Ahmedabad International Airport', 'India', 'IN')">
                                                                        Ahmedabad</li>
                                                                    <li onclick="setsearhengine('Pune', 'PNQ', 'Lohegaon Airport', 'India', 'IN')">
                                                                        Pune</li>
                                                                    <li onclick="setsearhengine('Guwahati', 'GAU', 'Bordoloi International Airport', 'India', 'IN')">
                                                                        Guwahati</li>
                                                                    <li onclick="setsearhengine('Goa', 'GOI', 'Dabolim Airport', 'India', 'IN')">
                                                                        Goa</li>
                                                                    <li onclick="setsearhengine('Lucknow', 'LKO', 'Amausi Airport', 'India', 'IN')">
                                                                        Lucknow</li>
                                                                    <li onclick="setsearhengine('Bhubaneswar', 'BBI', 'Biju Patnaik Airport', 'India', 'IN')">
                                                                        Bhubaneswar</li>
                                                                    <li onclick="setsearhengine('Cochin', 'COK', 'Chochin International Airport', 'India', 'IN')">
                                                                        Cochin</li>
                                                                    <li onclick="setsearhengine('Jaipur', 'JAI', 'Sanganeer Airport', 'India', 'IN')">
                                                                        Jaipur</li>
                                                                    <li onclick="setsearhengine('Patna', 'PAT', 'Jai Prakash Narayan Airport', 'India', 'IN')">
                                                                        Patna</li>
                                                                    <li onclick="setsearhengine('Srinagar', 'SXR', 'Srinagar International Airport', 'India', 'IN')">
                                                                        Srinagar</li>
                                                                    <li onclick="setsearhengine('Nagpur', 'NAG', 'Dr Ambedkar International Airport', 'India', 'IN')">
                                                                        Nagpur</li>
                                                                    <li onclick="setsearhengine('Agartala', 'IXA', 'Singerbhil Airport', 'India', 'IN')">
                                                                        Agartala</li>
                                                                </ul>
                                                            </div>

                                                        </div>
                                                    </div>


                                                    <div class="col-6 col-lg-2 lbl" id="Fly_dep_datepickerid" style="border-bottom: 1px solid #cbcbcb;">
                                                        <strong>Check In <i class="fa fa-angle-down"></i></strong>
                                                        <input id="datepicker_3" placeholder="00/00/0000" style="font-size: 20px;margin-top: 19px;">
                                                    </div>

                                                    <div class="col-6 col-lg-2 lbl" id="Fly_dep_datepickerid" style="border-bottom: 1px solid #cbcbcb;">
                                                        <strong>Check Out <i class="fa fa-angle-down"></i></strong>
                                                        <input id="datepicker_4" placeholder="00/00/0000" style="font-size: 20px;margin-top: 19px;">
                                                    </div>

                                                    <div class="col-12 col-lg-2 lbl lst" id="adult_div" style="border-bottom: 1px solid #cbcbcb;">
                                                        <input type="hidden" id="adult" name="adult" value="1" />
                                                        <strong>Rooms & Guests <i class="fa fa-angle-down"></i></strong>
                                                        <span style="font-size: 18px; margin-top: 20px;"><big id="travel_id" style="font-size: 18px;">1</big> Rooms, 2
                                                            Guests</span>
                                                    </div>




                                                    <div class="col-6 col-lg-3 lbl" id="Fly_dep_datepickerid" style="min-height: 52px; border-top: 1px solid #cbcbcb;">
                                                        <strong>Nationality</strong>
                                                        <select name="" id="" class="national_dropdn">
                                                            <option value="">India</option>
                                                            <option value="">China</option>
                                                            <option value="">America</option>
                                                            <option value="">Japan</option>
                                                        </select>
                                                    </div>

                                                    <div class="col-6 col-lg-3 lbl" id="Fly_dep_datepickerid" style="min-height: 52px; border-top: 1px solid #cbcbcb;">
                                                        <strong>Residence</strong>
                                                        <select name="" id="" class="national_dropdn">
                                                            <option value="">India</option>
                                                            <option value="">China</option>
                                                            <option value="">America</option>
                                                            <option value="">Japan</option>
                                                        </select>
                                                    </div>






                                                    <div class="popup adultdrop">
                                                        <span class="adult1">
                                                            <span class="ad_left">
                                                                <img src="img/adult.png" alt="Adult Flights">
                                                                Adults (12+)
                                                            </span> <span class="ad_right">
                                                                <input type="button" class="minus maincalulation" value="-" id="sub1minus">
                                                                <input type="text" class="count" value="1" id="sub1">
                                                                <input type="button" class="plus maincalulation" value="+" id="sub1plus">
                                                            </span>
                                                        </span>
                                                        <span class="adult1">
                                                            <span class="ad_left">
                                                                <img src="img/child.png" alt="Child Flights">
                                                                Children (2-11)
                                                            </span>
                                                            <span class="ad_right">
                                                                <input type="button" class="minus maincalulation" value="-" id="sub2minus">
                                                                <input type="text" class="count" value="0" id="sub2">
                                                                <input type="button" class="plus maincalulation" value="+" id="sub2plus">
                                                            </span>
                                                        </span>
                                                        <span class="adult1">
                                                            <span class="ad_left">
                                                                <img src="img/infant.png" alt="Infant Flights">
                                                                Infant
                                                            </span>
                                                            <span class="ad_right">
                                                                <input type="button" class="minus maincalulation" value="-" id="sub3minus">
                                                                <input type="text" class="count" value="0" id="sub3">
                                                                <input type="button" class="plus maincalulation" value="+" id="sub3plus">
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
                                                        <span class="done"><a>Done</a></span>

                                                    </div>

                                                </div>
                                            </div>

                                        </section>
                                        <style>
                                            .fromtopopup {
                                                display: none;
                                                width: 340px;
                                                position: absolute;
                                                left: 0;
                                                top: 30px;
                                                float: left;
                                                -webkit-border-radius: 4px;
                                                -moz-border-radius: 4px;
                                                border-radius: 4px;
                                                background-color: #ffffff;
                                                -webkit-box-shadow: 0 1px 6px 0 rgba(0, 0, 0, 0.2);
                                                -moz-box-shadow: 0 1px 6px 0 rgba(0, 0, 0, 0.2);
                                                box-shadow: 0 1px 6px 0 rgba(0, 0, 0, 0.2);
                                                z-index: 9999;
                                            }

                                            .fromtopopup label {
                                                width: 100%;
                                                position: relative;
                                                min-height: auto;
                                            }

                                            .fromtopopup label i {
                                                position: absolute;
                                                left: 10px;
                                                top: 15px;
                                                font-size: 12px;
                                            }

                                            .fromtopopup p {
                                                color: #666;
                                                font-size: 13px;
                                                padding: 0px 10px;
                                            }

                                            .fromtopopup input {
                                                width: 100% !important;
                                                background: #ffffff !important;
                                                -webkit-box-shadow: 0 2px 3px 0 rgba(204, 204, 204, 0.1);
                                                -moz-box-shadow: 0 2px 3px 0 rgba(204, 204, 204, 0.1);
                                                box-shadow: 0 2px 3px 0 rgba(204, 204, 204, 0.1);
                                                padding: 11px 10px 11px 30px;
                                                outline: 0;
                                                border: 0;
                                                width: 100%;
                                                font-size: 15px !important;
                                                color: #666;
                                                font-weight: normal !important;
                                            }

                                            .fromtopopup input:focus {
                                                outline: 0;
                                                border: 0;
                                            }
                                        </style>
                                    </form>

                                    <a id="searchengine_btn" href="hotel_search.html">Search</a>

                                    <!-- <button id="searchengine_btn" onclick="next()">Search</button> -->
                                    <script src="bundles/autocomplate41de?v=12342424d23424567fffsss"></script>

                                </div>

                            </div>

                            <div class="tab-pane fade show" id="hotel_flight" role="tabpanel" aria-labelledby="hotel-tab">
                                <div class="booking_form">
                                    <script src="bundles/seachengine02b9?v=4242424242424"></script>

                                    <form action="" method="post">
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
                                                <div class="waybtn">
                                                    <button onclick="return SelectTripType('O')" class="slt oneway">One
                                                        way</button>
                                                    <button class="roundway" onclick="return SelectTripType('R')">Round
                                                        trip</button>
                                                </div>



                                                <div class="srcformbx">

                                                    <div class="col-6 col-lg-3 lbl swap">
                                                        <strong class="swap">From </strong>
                                                        <input type="text" name="flying_from_N" value="" class="fly-from-input" placeholder="From" id="flying_from_N" onclick="autodiv_from();" autocomplete="off" />
                                                        <b id="Fly_Depart_airport">Airport Name or City Name</b>
                                                        <img src="img/swap.png" style="cursor:pointer;" onclick="swapfun()" width="31" height="30" alt="Swap" title="Swap">
                                                        <div class="fromtopopup frompopup">
                                                            <label>
                                                                <i class="fa fa-search"></i>
                                                                <input type="text" name="flying_from" class="fly-from-input ac_input" autocomplete="off" placeholder="From" id="flying_from" />
                                                            </label>
                                                            <div class="staticway">
                                                                <h5>Popular Cities</h5>
                                                                <ul>
                                                                    <li onclick="setsearhengine('Delhi', 'DEL', 'Indira Gandhi International Airport', 'India', 'IN')">
                                                                        Delhi</li>
                                                                    <li onclick="setsearhengine('Bangalore', 'BLR', 'Bengaluru International Airport', 'India', 'IN')">
                                                                        Bangalore</li>
                                                                    <li onclick="setsearhengine('Mumbai', 'BOM', 'Chhatrapati Shivaji International Airport', 'India', 'IN')">
                                                                        Mumbai</li>
                                                                    <li onclick="setsearhengine('Hyderabad', 'HYD', 'Shamshabad Rajiv Gandhi International Airport', 'India', 'IN')">
                                                                        Hyderabad</li>
                                                                    <li onclick="setsearhengine('Kolkata', 'CCU', 'Netaji Subhas Chandra Bose International Airport', 'India', 'IN')">
                                                                        Kolkata</li>
                                                                    <li onclick="setsearhengine('Chennai', 'MAA', 'Chennai Airport', 'India', 'IN')">
                                                                        Chennai/Madras</li>
                                                                    <li onclick="setsearhengine('Ahmedabad', 'AMD', 'Ahmedabad International Airport', 'India', 'IN')">
                                                                        Ahmedabad</li>
                                                                    <li onclick="setsearhengine('Pune', 'PNQ', 'Lohegaon Airport', 'India', 'IN')">
                                                                        Pune</li>
                                                                    <li onclick="setsearhengine('Guwahati', 'GAU', 'Bordoloi International Airport', 'India', 'IN')">
                                                                        Guwahati</li>
                                                                    <li onclick="setsearhengine('Goa', 'GOI', 'Dabolim Airport', 'India', 'IN')">
                                                                        Goa</li>
                                                                    <li onclick="setsearhengine('Lucknow', 'LKO', 'Amausi Airport', 'India', 'IN')">
                                                                        Lucknow</li>
                                                                    <li onclick="setsearhengine('Bhubaneswar', 'BBI', 'Biju Patnaik Airport', 'India', 'IN')">
                                                                        Bhubaneswar</li>
                                                                    <li onclick="setsearhengine('Cochin', 'COK', 'Chochin International Airport', 'India', 'IN')">
                                                                        Cochin</li>
                                                                    <li onclick="setsearhengine('Jaipur', 'JAI', 'Sanganeer Airport', 'India', 'IN')">
                                                                        Jaipur</li>
                                                                    <li onclick="setsearhengine('Patna', 'PAT', 'Jai Prakash Narayan Airport', 'India', 'IN')">
                                                                        Patna</li>
                                                                    <li onclick="setsearhengine('Srinagar', 'SXR', 'Srinagar International Airport', 'India', 'IN')">
                                                                        Srinagar</li>
                                                                    <li onclick="setsearhengine('Nagpur', 'NAG', 'Dr Ambedkar International Airport', 'India', 'IN')">
                                                                        Nagpur</li>
                                                                    <li onclick="setsearhengine('Agartala', 'IXA', 'Singerbhil Airport', 'India', 'IN')">
                                                                        Agartala</li>
                                                                </ul>
                                                            </div>

                                                        </div>
                                                    </div>

                                                    <div class="col-6 col-lg-3 lbl">

                                                        <strong>To</strong>
                                                        <input name="flying_to_N" type="text" class="fly-to-input" value="" placeholder="To" id="flying_to_N" onclick="autodiv_to();" autocomplete="off" />
                                                        <b id="Fly_Dest_airport">Airport Name or City Name</b>

                                                        <div class="fromtopopup topopup">
                                                            <label>
                                                                <i class="fa fa-search"></i>

                                                                <input type="text" name="flying_to" class="fly-from-input ac_input" autocomplete="off" placeholder="To" id="flying_to" />
                                                            </label>
                                                            <div class="staticway">
                                                                <h5>Popular Cities</h5>
                                                                <ul>
                                                                    <li onclick="setsearhengine_Return('Delhi', 'DEL', 'Indira Gandhi International Airport', 'India', 'IN')">
                                                                        Delhi</li>
                                                                    <li onclick="setsearhengine_Return('Bangalore', 'BLR', 'Bengaluru International Airport', 'India', 'IN')">
                                                                        Bangalore</li>
                                                                    <li onclick="setsearhengine_Return('Mumbai', 'BOM', 'Chhatrapati Shivaji International Airport', 'India', 'IN')">
                                                                        Mumbai</li>
                                                                    <li onclick="setsearhengine_Return('Hyderabad', 'HYD', 'Shamshabad Rajiv Gandhi International Airport', 'India', 'IN')">
                                                                        Hyderabad</li>
                                                                    <li onclick="setsearhengine_Return('Kolkata', 'CCU', 'Netaji Subhas Chandra Bose International Airport', 'India', 'IN')">
                                                                        Kolkata</li>
                                                                    <li onclick="setsearhengine_Return('Chennai', 'MAA', 'Chennai Airport', 'India', 'IN')">
                                                                        Chennai/Madras</li>
                                                                    <li onclick="setsearhengine_Return('Ahmedabad', 'AMD', 'Ahmedabad International Airport', 'India', 'IN')">
                                                                        Ahmedabad</li>
                                                                    <li onclick="setsearhengine_Return('Pune', 'PNQ', 'Lohegaon Airport', 'India', 'IN')">
                                                                        Pune</li>
                                                                    <li onclick="setsearhengine_Return('Guwahati', 'GAU', 'Bordoloi International Airport', 'India', 'IN')">
                                                                        Guwahati</li>
                                                                    <li onclick="setsearhengine_Return('Goa', 'GOI', 'Dabolim Airport', 'India', 'IN')">
                                                                        Goa</li>
                                                                    <li onclick="setsearhengine_Return('Lucknow', 'LKO', 'Amausi Airport', 'India', 'IN')">
                                                                        Lucknow</li>
                                                                    <li onclick="setsearhengine_Return('Bhubaneswar', 'BBI', 'Biju Patnaik Airport', 'India', 'IN')">
                                                                        Bhubaneswar</li>
                                                                    <li onclick="setsearhengine_Return('Cochin', 'COK', 'Chochin International Airport', 'India', 'IN')">
                                                                        Cochin</li>
                                                                    <li onclick="setsearhengine_Return('Jaipur', 'JAI', 'Sanganeer Airport', 'India', 'IN')">
                                                                        Jaipur</li>
                                                                    <li onclick="setsearhengine_Return('Patna', 'PAT', 'Jai Prakash Narayan Airport', 'India', 'IN')">
                                                                        Patna</li>
                                                                    <li onclick="setsearhengine_Return('Srinagar', 'SXR', 'Srinagar International Airport', 'India', 'IN')">
                                                                        Srinagar</li>
                                                                    <li onclick="setsearhengine_Return('Nagpur', 'NAG', 'Dr Ambedkar International Airport', 'India', 'IN')">
                                                                        Nagpur</li>
                                                                    <li onclick="setsearhengine_Return('Agartala', 'IXA', 'Singerbhil Airport', 'India', 'IN')">
                                                                        Agartala</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6 col-lg-2 lbl" id="Fly_dep_datepickerid">
                                                        <strong>Departure <i class="fa fa-angle-down"></i></strong>
                                                        <input id="datepicker_1" placeholder="00/00/0000" style="font-size: 20px;margin-top: 19px;">
                                                    </div>
                                                    <div class="col-6 col-lg-2 lbl" onclick="return SelectTripType('R')" id="Fly_ret_datepickerid" disabled="disabled" style="cursor: no-drop; background: #f5f2f2; ">
                                                        <strong>Return <i class="fa fa-angle-down"></i></strong>
                                                        <input id="datepicker_2" placeholder="00/00/0000" style="font-size: 20px;margin-top: 19px;">
                                                    </div>
                                                    <div class="col-12 col-lg-2 lbl lst" id="adult_div">
                                                        <input type="hidden" id="adult" name="adult" value="1" />
                                                        <strong>Travellers & Class <i class="fa fa-angle-down"></i></strong>
                                                        <span><big id="travel_id">1</big> Traveller</span>
                                                        <b id="cabin_id">Economy</b>

                                                    </div>

                                                    <div class="popup adultdrop">
                                                        <span class="adult1">
                                                            <span class="ad_left">
                                                                <img src="img/adult.png" alt="Adult Flights">
                                                                Adults (12+)
                                                            </span> <span class="ad_right">
                                                                <input type="button" class="minus maincalulation" value="-" id="sub1minus">
                                                                <input type="text" class="count" value="1" id="sub1">
                                                                <input type="button" class="plus maincalulation" value="+" id="sub1plus">
                                                            </span>
                                                        </span>
                                                        <span class="adult1">
                                                            <span class="ad_left">
                                                                <img src="img/child.png" alt="Child Flights">
                                                                Children (2-11)
                                                            </span>
                                                            <span class="ad_right">
                                                                <input type="button" class="minus maincalulation" value="-" id="sub2minus">
                                                                <input type="text" class="count" value="0" id="sub2">
                                                                <input type="button" class="plus maincalulation" value="+" id="sub2plus">
                                                            </span>
                                                        </span>
                                                        <span class="adult1">
                                                            <span class="ad_left">
                                                                <img src="img/infant.png" alt="Infant Flights">
                                                                Infant
                                                            </span>
                                                            <span class="ad_right">
                                                                <input type="button" class="minus maincalulation" value="-" id="sub3minus">
                                                                <input type="text" class="count" value="0" id="sub3">
                                                                <input type="button" class="plus maincalulation" value="+" id="sub3plus">
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
                                                        <span class="done"><a>Done</a></span>

                                                    </div>

                                                </div>
                                            </div>

                                        </section>
                                        <style>
                                            .fromtopopup {
                                                display: none;
                                                width: 340px;
                                                position: absolute;
                                                left: 0;
                                                top: 30px;
                                                float: left;
                                                -webkit-border-radius: 4px;
                                                -moz-border-radius: 4px;
                                                border-radius: 4px;
                                                background-color: #ffffff;
                                                -webkit-box-shadow: 0 1px 6px 0 rgba(0, 0, 0, 0.2);
                                                -moz-box-shadow: 0 1px 6px 0 rgba(0, 0, 0, 0.2);
                                                box-shadow: 0 1px 6px 0 rgba(0, 0, 0, 0.2);
                                                z-index: 9999;
                                            }

                                            .fromtopopup label {
                                                width: 100%;
                                                position: relative;
                                                min-height: auto;
                                            }

                                            .fromtopopup label i {
                                                position: absolute;
                                                left: 10px;
                                                top: 15px;
                                                font-size: 12px;
                                            }

                                            .fromtopopup p {
                                                color: #666;
                                                font-size: 13px;
                                                padding: 0px 10px;
                                            }

                                            .fromtopopup input {
                                                width: 100% !important;
                                                background: #ffffff !important;
                                                -webkit-box-shadow: 0 2px 3px 0 rgba(204, 204, 204, 0.1);
                                                -moz-box-shadow: 0 2px 3px 0 rgba(204, 204, 204, 0.1);
                                                box-shadow: 0 2px 3px 0 rgba(204, 204, 204, 0.1);
                                                padding: 11px 10px 11px 30px;
                                                outline: 0;
                                                border: 0;
                                                width: 100%;
                                                font-size: 15px !important;
                                                color: #666;
                                                font-weight: normal !important;
                                            }

                                            .fromtopopup input:focus {
                                                outline: 0;
                                                border: 0;
                                            }
                                        </style>
                                    </form>

                                    <a id="searchengine_btn" href="hotel_flight_search.html">Search</a>

                                    <!-- <button id="searchengine_btn" onclick="next()">Search</button> -->
                                    <script src="bundles/autocomplate41de?v=12342424d23424567fffsss"></script>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Header part end-->

    <section class="best_services section_padding mt-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6">
                    <div class="section_tittle text-center">
                        <h2>TOP HOLIDAY DESTINATIONS</h2>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-lg-3 col-sm-6">
                    <div class="top_flights_routes">
                        <img src="img/top_flight_r1.png" alt="">

                        <div class="top_flights_routes_details">
                            <h3>Dubai</h3>

                            <a href="#">VIEW FLIGHT</a>
                        </div>

                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="top_flights_routes">
                        <img src="img/top_flight_r9.png" alt="">

                        <div class="top_flights_routes_details">
                            <h3>Goa</h3>

                            <a href="#">VIEW FLIGHT</a>
                        </div>

                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="top_flights_routes">
                        <img src="img/top_flight_r10.png" alt="">

                        <div class="top_flights_routes_details">
                            <h3>Kashmir</h3>
                            <a href="#">VIEW FLIGHT</a>
                        </div>

                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="top_flights_routes">
                        <img src="img/top_flight_r11.png" alt="">

                        <div class="top_flights_routes_details">
                            <h3>Thailand</h3>

                            <a href="#">VIEW FLIGHT</a>
                        </div>

                    </div>
                </div>
            </div>


        </div>
    </section>

    <section class="grece_jewel section_padding">
        <div class="container">
            <div class="row mt-3">

                <div class="col-lg-6 col-sm-6 grece_jewl_left">
                    <h1>Magical Santorini
                        Greece’s Jewel</h1>

                    <p>Candy-colored houses carved into cliffs, sapphire waters,
                        gleaming white buildings topped with half-spheres
                        the color of a stormy sky.</p>

                    <a href="#">Explore more</a>
                </div>

                <div class="col-lg-6 col-sm-6">
                    <img src="img/grece_jewel_right_img.png" />
                </div>


            </div>
    </section>

    <section class="best_services section_padding">
        <div class="container">
            <div class="row mt-3">
                <div class="col-lg-4 col-sm-6">
                    <div class="top_flights_routes">
                        <img src="img/hotel_top_des1.png" alt="">

                        <div class="top_flights_routes_details">
                            <h3 style="font-size: 27px;font-weight: 500;margin-bottom: 15px;">Magical Paris</h3>
                            <p style="font-size: 13px;color: #00000091;line-height: 20px;">City of light, one of the
                                most famous cities in the world is
                                waiting to be explored. Some of the most famous
                                museums, food and landmarks are waiting for you in
                                Paris.</p>

                            <div class="btm_top_desti">
                                <div class="rating_sec_top_desti">
                                    <span class="fa fa-star star_checked"></span>
                                    <span class="fa fa-star star_checked"></span>
                                    <span class="fa fa-star star_checked"></span>
                                    <span class="fa fa-star star_checked"></span>
                                    <span class="fa fa-star"></span>
                                </div>

                                <p>2436 Ratings</p>
                            </div>

                        </div>

                    </div>
                </div>



                <div class="col-lg-4 col-sm-6">
                    <div class="top_flights_routes">
                        <img src="img/hotel_top_des2.png" alt="">

                        <div class="top_flights_routes_details">
                            <h3 style="font-size: 27px;font-weight: 500;margin-bottom: 15px;">Classic London</h3>
                            <p style="font-size: 13px;color: #00000091;line-height: 20px;">City of light, one of the
                                most famous cities in the world is
                                waiting to be explored. Some of the most famous
                                museums, food and landmarks are waiting for you in
                                Paris.</p>

                            <div class="btm_top_desti">
                                <div class="rating_sec_top_desti">
                                    <span class="fa fa-star star_checked"></span>
                                    <span class="fa fa-star star_checked"></span>
                                    <span class="fa fa-star star_checked"></span>
                                    <span class="fa fa-star star_checked"></span>
                                    <span class="fa fa-star"></span>
                                </div>

                                <p>5438 Ratings</p>
                            </div>

                        </div>

                    </div>
                </div>




                <div class="col-lg-4 col-sm-6">
                    <div class="top_flights_routes">
                        <img src="img/hotel_top_des3.png" alt="">

                        <div class="top_flights_routes_details">
                            <h3 style="font-size: 27px;font-weight: 500;margin-bottom: 15px;">Famous New York</h3>
                            <p style="font-size: 13px;color: #00000091;line-height: 20px;">City of light, one of the
                                most famous cities in the world is waiting to be explored. Some of the most famous
                                museums, food and landmarks are waiting for you in Paris.</p>

                            <div class="btm_top_desti">
                                <div class="rating_sec_top_desti">
                                    <span class="fa fa-star star_checked"></span>
                                    <span class="fa fa-star star_checked"></span>
                                    <span class="fa fa-star star_checked"></span>
                                    <span class="fa fa-star star_checked"></span>
                                    <span class="fa fa-star"></span>
                                </div>

                                <p>1243 Ratings</p>
                            </div>

                        </div>

                    </div>
                </div>




            </div>


        </div>
    </section>

    <section class="section_padding download_app_bg">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <img src="img/phone.png" style="float:right; width:68%" />
                </div>

                <div class="col-md-8">
                    <div class="download_sec_hotel_book">
                        <h1>Download Our Free App!</h1>
                        <p>Download our free app and stay up to date with all our latest discounts, articles and
                            reviews. Take a look at
                            all the world’s top destinations and decide where to spend your perfect vacation.</p>

                        <a href="#">Download Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection