<!-- booking part start-->
<section class="booking_part">
    <div class="container book_check_sec">
        <div class="row">
            <div class="col-lg-12">
                <div class="booking_menu">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="hotel-tab" data-toggle="tab" href="#flight" role="tab" aria-controls="hotel" aria-selected="true"><img src="{{env('ASSETS_URL')}}img/flight_icon.svg" class="book_tab_icon" /> Flight</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" id="place-tab" data-toggle="tab" href="#hotel" role="tab" aria-controls="place" aria-selected="false"><img src="{{env('ASSETS_URL')}}img/hotel_icon.svg" class="book_tab_icon" /> Hotel</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" id="tricket-tab" data-toggle="tab" href="#hotel_flight" role="tab" aria-controls="tricket" aria-selected="false"><img src="{{env('ASSETS_URL')}}img/hotel_icon.svg" class="book_tab_icon" /> Flight + Hotel</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" id="tricket-tab" data-toggle="tab" href="#" role="tab" aria-controls="tricke" aria-selected="false"><img src="{{env('ASSETS_URL')}}img/car_icon.svg" class="book_tab_icon" /> Flight + Car</a>
                        </li>

                    </ul>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="booking_content" style="height: 245px;">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="flight" role="tabpanel" aria-labelledby="hotel-tab">
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
                                            <div class="w-100 float-left">
                                                <div class="radio_area">
                                                    <input type="radio" value="international" checked name="flight_type" id="internationalFlights" />
                                                    <label for="internationalFlights">International flights</label>
                                                </div>

                                                <div class="radio_area">
                                                    <input type="radio" value="domestic" name="flight_type" id="domesticFlight"/>
                                                    <label for="domesticFlight">Domestic flights</label>
                                                </div>

                                            </div>

                                            <div class="waybtn">
                                                <button onclick="return SelectTripType('O')" class="slt oneway">One way</button>
                                                <button class="roundway" onclick="return SelectTripType('R')">Round trip</button>
                                            </div>
                                            <div class="srcformbx">
                                                <div class="col-6 col-lg-3 lbl swap">
                                                    <strong class="swap">From </strong>

                                                    <input type="text" name="flying_from_N" data-target="Fly_Depart_airport" autocomplete="off" data-search-results="fromResults" value="" class="fly-from-input airportslist" placeholder="From" id="flying_from_N" onclick="autodiv_from();" />

                                                    <b id="Fly_Depart_airport">Airport Name or City Name</b>

                                                    <img src="{{asset('/public/img/swap.png')}}" style="cursor:pointer;" width="31" height="30" alt="Swap" title="Swap">
                                                    <div class="fromtopopup frompopup">
                                                        <div class="search_flight_result_div">
                                                            <ul id="fromResults">
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-6 col-lg-3 lbl">

                                                    <strong>To</strong>
                                                    <input name="flying_to_N" type="text" data-target="Fly_Dest_airport" autocomplete="off" data-search-results="toResults" class="fly-to-input airportslist" value="" placeholder="To" id="flying_to_N" onclick="autodiv_to();" />
                                                    <b id="Fly_Dest_airport">Airport Name or City Name</b>

                                                    <div class="fromtopopup topopup">
                                                        <div class="search_flight_result_div">
                                                            <ul id="toResults">
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-lg-2 lbl" id="Fly_dep_datepickerid">
                                                    <strong>Departure <i class="fa fa-angle-down"></i></strong>
                                                    <input id="datepicker_1" name="departure_date" placeholder="DD/MM/YYYY" autocomplete="off" style="font-size: 20px;margin-top: 19px;">
                                                </div>
                                                <div class="col-6 col-lg-2 lbl" onclick="return SelectTripType('R')" id="Fly_ret_datepickerid" disabled="disabled" style="cursor: no-drop; background: #f5f2f2; ">
                                                    <strong>Return <i class="fa fa-angle-down"></i></strong>
                                                    <input id="datepicker_2" name="return_date" placeholder="DD/MM/YYYY" autocomplete="off" style="font-size: 20px;margin-top: 19px;">
                                                </div>
                                                <div class="col-12 col-lg-2 lbl lst" id="adult_div">
                                                    <input type="hidden" id="adult" name="adult" value="1" />
                                                    <strong>Travellers & Class <i class="fa fa-angle-down"></i></strong>
                                                    <span><big id="travel_id">1</big> Traveller</span>
                                                    <b id="cabin_id">Economy</b>

                                                </div>

                                                <div class="popup adultdrop" id="flightsCal">
                                                    <span class="adult1">
                                                        <span class="ad_left">
                                                            <img src="{{env('ASSETS_URL')}}img/adult.png" alt="Adult Flights">
                                                            Adults (16+)
                                                        </span> <span class="ad_right">
                                                            <input type="button" class="minus maincalculations" data-target="adults" value="-">
                                                            <input type="text" class="count" value="1" id="sub1" name="adults">
                                                            <input type="button" class="plus maincalculations" data-target="adults" value="+">
                                                        </span>
                                                    </span>

                                                    <span class="adult1">
                                                        <span class="ad_left">
                                                            <img src="{{env('ASSETS_URL')}}img/adult.png" alt="Adult Flights">
                                                            Young Adults (12-15)
                                                        </span> <span class="ad_right">
                                                            <input type="button" class="minus maincalculations" data-target="young_adults" value="-">
                                                            <input type="text" class="count" value="0" id="sub2" name="young_adults">
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
                                                            <input type="text" class="count" value="0" id="sub3" name="children">
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
                                                            <input type="text" class="count" value="0" id="sub4" name="infant">
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
                                    <button id="searchengine_btn" type="submit">Search</button>
                                </form>
                            </div>

                        </div>

                        <div class="tab-pane fade show" id="hotel" role="tabpanel" aria-labelledby="hotel-tab">
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
                                                    <span style="font-size: 18px; margin-top: 20px;"><big id="travel_id" style="font-size: 18px;">1</big> Rooms, 2 Guests</span>
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
                                                            <img src="{{env('ASSETS_URL')}}img/adult.png" alt="Adult Flights">
                                                            Adults (16+)
                                                        </span> <span class="ad_right">
                                                            <input type="button" class="minus maincalulation" value="-" id="sub1minus">
                                                            <input type="text" class="count" value="1" id="sub1">
                                                            <input type="button" class="plus maincalulation" value="+" id="sub1plus">
                                                        </span>
                                                    </span>

                                                    <span class="adult1">
                                                        <span class="ad_left">
                                                            <img src="{{env('ASSETS_URL')}}img/adult.png" alt="Adult Flights">
                                                            Young Adults (12-15)
                                                        </span> <span class="ad_right">
                                                            <input type="button" class="minus maincalulation" value="-" id="sub1minus">
                                                            <input type="text" class="count" value="1" id="sub1">
                                                            <input type="button" class="plus maincalulation" value="+" id="sub1plus">
                                                        </span>
                                                    </span>

                                                    <span class="adult1">
                                                        <span class="ad_left">
                                                            <img src="{{env('ASSETS_URL')}}img/child.png" alt="Child Flights">
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
                                                            <img src="{{env('ASSETS_URL')}}img/infant.png" alt="Infant Flights">
                                                            Infant (Under 2 year)
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
                                                    <span class="done"><a>Confirm</a></span>

                                                </div>

                                            </div>
                                        </div>

                                    </section>
                                    <button id="searchengine_btn" type="submit">Search</button>
                                </form>
                                <script src="{{ env('ASSETS_URL') }}bundles/autocomplate41de?v=12342424d23424567fffsss"></script>

                            </div>

                        </div>

                        <div class="tab-pane fade show" id="hotel_flight" role="tabpanel" aria-labelledby="hotel-tab">
                            <div class="booking_form">
                                <form action="{{route('searchFlight')}}" method="post">
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
                                                <button onclick="return SelectTripType('O')" class="slt oneway">One way</button>
                                                <button class="roundway" onclick="return SelectTripType('R')">Round trip</button>
                                            </div>



                                            <div class="srcformbx">
                                                <div class="col-6 col-lg-3 lbl swap">
                                                    <strong class="swap">From </strong>
                                                    <input type="text" name="flying_from_N" value="" data-target="Fly_Depart_airport" class="fly-from-input airportslist" placeholder="From" id="flying_from_N" autocomplete="off" />
                                                    <b id="Fly_Depart_airport">Airport Name or City Name</b>
                                                    <img src="{{env('ASSETS_URL')}}img/swap.png" style="cursor:pointer;" onclick="swapfun()" width="31" height="30" alt="Swap" title="Swap">
                                                    <div class="fromtopopup frompopup">
                                                        <label>
                                                            <i class="fa fa-search"></i>
                                                            <input type="text" name="flying_from" class="fly-from-input ac_input" autocomplete="off" placeholder="From" id="flying_from" />
                                                        </label>
                                                    </div>
                                                </div>

                                                <div class="col-6 col-lg-3 lbl">

                                                    <strong>To</strong>
                                                    <input name="flying_to_N" type="text" data-target="Fly_Dest_airport" class="fly-to-input" value="" placeholder="To" id="flying_to_N" onclick="autodiv_to();" autocomplete="off" />
                                                    <b id="Fly_Dest_airport">Airport Name or City Name</b>

                                                    <div class="fromtopopup topopup">
                                                        <label>
                                                            <i class="fa fa-search"></i>

                                                            <input type="text" name="flying_to" class="fly-from-input ac_input" autocomplete="off" placeholder="To" id="flying_to" />
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-lg-2 lbl" id="Fly_dep_datepickerid">
                                                    <strong>Departure <i class="fa fa-angle-down"></i></strong>
                                                    <input id="datepicker_1" name="departure_date" placeholder="00/00/0000" style="font-size: 20px;margin-top: 19px;">
                                                </div>
                                                <div class="col-6 col-lg-2 lbl" onclick="return SelectTripType('R')" id="Fly_ret_datepickerid" disabled="disabled" style="cursor: no-drop; background: #f5f2f2; ">
                                                    <strong>Return <i class="fa fa-angle-down"></i></strong>
                                                    <input id="datepicker_2" placeholde name="return_date" r="00/00/0000" style="font-size: 20px;margin-top: 19px;">
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
                                                            <img src="{{env('ASSETS_URL')}}img/adult.png" alt="Adult Flights">
                                                            Adults (12+)
                                                        </span> <span class="ad_right">
                                                            <input type="button" class="minus maincalulation" value="-" id="sub1minus">
                                                            <input type="text" class="count" value="1" id="sub1">
                                                            <input type="button" class="plus maincalulation" value="+" id="sub1plus">
                                                        </span>
                                                    </span>
                                                    <span class="adult1">
                                                        <span class="ad_left">
                                                            <img src="{{env('ASSETS_URL')}}img/child.png" alt="Child Flights">
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
                                                            <img src="{{env('ASSETS_URL')}}img/infant.png" alt="Infant Flights">
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
                                    <button id="searchengine_btn" type="submit">Search</button>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Header part end-->