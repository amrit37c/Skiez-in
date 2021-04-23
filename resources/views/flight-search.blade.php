<!-- Stored in resources/views/child.blade.php -->
@extends('layouts.master')

@section('title', 'Home' . ' | ' . env('APP_NAME'))

@section('content')
<!-- booking part start-->
<section class="booking_part mt-1" style="background: #fff; box-shadow: 0 0 8px #0000001c;">
    <div class="container book_check_sec" style="background-image: none; padding-bottom: 0;">
        <div class="row">
            <div class="col-lg-10">
                <div class="booking_content booking_content_cstm1" style="box-shadow: none; padding: 10px 0px;float: left;">
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
                                    <input type="hidden" name="fromFullName" >
                                    <input type="hidden" name="toFullName" >
                                    <section class="serchBox">
                                        <div class="searchEng">
                                            <div class="waybtn" style="width:29%;">
                                                <button onclick="return SelectTripType('O')" class="slt oneway">One way</button>
                                                <button class="roundway" onclick="return SelectTripType('R')">Round trip</button>
                                            </div>
                                            <div class="srcformbx">
                                                <div class="col-6 col-lg-3 lbl swap search_nav_two">
                                                    <strong class="swap">From </strong>

                                                    <input type="text" name="flying_from_N" data-target="Fly_Depart_airport" data-search-results="fromResults" value="<?= $_GET["flying_from_N"] ?>" class="fly-from-input airportslist" placeholder="From" id="flying_from_N" onclick="autodiv_from();" />

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
                                                    <input name="flying_to_N" type="text" data-target="Fly_Dest_airport" data-search-results="toResults" class="fly-to-input airportslist" value="<?= $_GET["flying_to_N"] ?>" placeholder="To" id="flying_to_N" onclick="autodiv_to();" />
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
                                                    <input id="datepicker_1" name="departure_date" value="<?= $_GET["departure_date"] ?>" placeholder="DD/MM/YYYY" style="font-size: 20px;margin-top: 19px;">
                                                </div>
                                                <div class="col-6 col-lg-2 lbl search_nav_two" onclick="return SelectTripType('R')" id="Fly_ret_datepickerid" disabled="disabled" style="cursor: no-drop; background: #f5f2f2; ">
                                                    <strong>Return <i class="fa fa-angle-down"></i></strong>
                                                    <input id="datepicker_2" name="return_date" value="<?= $_GET["return_date"] ?>" placeholder="DD/MM/YYYY" style="font-size: 20px;margin-top: 19px;">
                                                </div>
                                                <div class="col-12 col-lg-2 lbl lst search_nav_two" id="adult_div">
                                                    <input type="hidden" id="adult" name="adult" value="1" />
                                                    <strong>Travellers & Class <i class="fa fa-angle-down"></i></strong>
                                                    <span><big id="travel_id"><?= ($_GET["adults"] + $_GET["young_adults"] + $_GET["children"] + $_GET["infant"]) ?></big> Traveller</span>
                                                    <b id="cabin_id">Economy</b>
                                                </div>

                                                <div class="popup adultdrop" id="flightsCal">
                                                    <span class="adult1">
                                                        <span class="ad_left">
                                                            <img src="{{env('ASSETS_URL')}}img/adult.png" alt="Adult Flights">
                                                            Adults (16+)
                                                        </span> <span class="ad_right">
                                                            <input type="button" class="minus maincalculations" data-target="adults" value="-">
                                                            <input type="text" class="count" value="<?= $_GET["adults"] ?>" id="sub1" name="adults">
                                                            <input type="button" class="plus maincalculations" data-target="adults" value="+">
                                                        </span>
                                                    </span>

                                                    <span class="adult1">
                                                        <span class="ad_left">
                                                            <img src="{{env('ASSETS_URL')}}img/adult.png" alt="Adult Flights">
                                                            Young Adults (12-15)
                                                        </span> <span class="ad_right">
                                                            <input type="button" class="minus maincalculations" data-target="young_adults" value="-">
                                                            <input type="text" class="count" value="<?= $_GET["young_adults"] ?>" id="sub2" name="young_adults">
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
                                                            <input type="text" class="count" value="<?= $_GET["children"] ?>" id="sub3" name="children">
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
                                                            <input type="text" class="count" value="<?= $_GET["infant"] ?>" id="sub4" name="infant">
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-2">
                <!-- <a href="#" class="btn_1 d-lg-block refine_btn" style="margin-top: 80px;"><i class="fas fa-filter"></i> Refine Results</a> -->
                <button type="submit" id="" class="btn_1 d-lg-block refine_btn" style="margin-top: 80px;" name="submit"><i class="fas fa-filter"></i> Refine Results</button>
            </div>
            </form>
        </div>
    </div>
</section>
<!-- Header part end-->

<!--section class="refine_result">
    <div class="container">
        <div class="row">

            <div class="refine_rslt_row">
                <h2><i class="fas fa-rupee-sign"></i> Price</h2>
                <span>
                    <p>₹5,608 - ₹16085</p>
                </span> <button><i class="fas fa-sort-down"></i></button>
            </div>

            <div class="refine_rslt_row">
                <h2><i class="fas fa-map-marker-alt"></i> Stops</h2>
                <span>
                    <p>2 Stops</p>
                </span> <button><i class="fas fa-sort-down"></i></button>
            </div>

            <div class="refine_rslt_row">
                <h2><i class="far fa-clock"></i> Times</h2>
                <span>
                    <p>All Times</p>
                </span> <button><i class="fas fa-sort-down"></i></button>
            </div>

            <div class="refine_rslt_row">
                <h2><i class="fas fa-star"></i> Itineraries</h2>
                <span>
                    <p>All Itineraries</p>
                </span> <button><i class="fas fa-sort-down"></i></button>
            </div>

            <div class="clear_refine_rslt_btn">
                <button><i class="fas fa-redo-alt"></i>

                    Clear Filters</button>
            </div>


        </div>
    </div>
</section-->

<section class="result_search_flights">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="result_number">
                    <span>
                        <button id="last-day-flights">Previous Day</button>
                        <button id="next-day-flights">Next Day</button>
                    </span>
                </div>
            </div>

            <div class="col-md-12">
                <div class="select_flight">
                    <p>Select onward flights</p>
                    <span>
                        <label for="sorting">Sort By</label>
                        <select id="sortFlights">
                            <option value="0">Low To High</option>
                            <option value="1">High To Low</option>
                        </select>
                    </span>
                </div>
            </div>
        </div>
        @if($type == 'mahan')
        <div class="row mt-4 mb-4">
            <?php
            $requestParams = explode("?", $_SERVER['REQUEST_URI']);
            if (!isset($result["soapBody"]["ns1OTA_AirAvailRS"]["ns1Success"])) {
                echo "<p class='alert alert-danger'>{$result["soapBody"]["ns1OTA_AirAvailRS"]["ns1Errors"]["ns1Error"]["@attributes"]["ShortText"]}</p>";
            } else {
                $flightsResult = $result["soapBody"]["ns1OTA_AirAvailRS"]["ns1AAAirAvailRSExt"]["ns1PricedItineraries"]["ns1PricedItinerary"]["ns1AirItinerary"]["ns1OriginDestinationOptions"]["ns1OriginDestinationOption"];
                // print_r(json_encode($flightsResult));
                if (!isset($flightsResult[0])) {
                    $flightsResult = $result["soapBody"]["ns1OTA_AirAvailRS"]["ns1AAAirAvailRSExt"]["ns1PricedItineraries"]["ns1PricedItinerary"]["ns1AirItinerary"]["ns1OriginDestinationOptions"]["ns1OriginDestinationOption"]["ns1FlightSegment"];
                    $terminals = $result["soapBody"]["ns1OTA_AirAvailRS"]["ns1OriginDestinationInformation"];
                    $priceDetails = $result["soapBody"]["ns1OTA_AirAvailRS"]["ns1AAAirAvailRSExt"]["ns1PricedItineraries"]["ns1PricedItinerary"]["ns1AirItineraryPricingInfo"]["ns1ItinTotalFare"]["ns1TotalEquivFareWithCCFee"]["@attributes"]["Amount"];
                    function hoursandmins($time, $format = '%02d:%02d')
                    {
                        if ($time < 1) {
                            return;
                        }
                        $hours = floor($time / 60);
                        $minutes = ($time % 60);
                        return sprintf($format, $hours, $minutes);
                    }
                    // print_r(json_encode($flightsResult));
                    // die;
                    // echo $flightsResult["ns1DepartureDateTime"] . "fsfsdf";
                    $dptTime = date("H:i A", strtotime($flightsResult["@attributes"]["DepartureDateTime"]));
                    $arvlTime = date("H:i A", strtotime($flightsResult["@attributes"]["ArrivalDateTime"]));
                    $flightNumber = $flightsResult["@attributes"]["FlightNumber"];
                    $trvlTime = ((strtotime($flightsResult["@attributes"]["DepartureDateTime"]) - strtotime($flightsResult["@attributes"]["ArrivalDateTime"])));
                    $timeGap = hoursandmins($trvlTime);
                    $originLoc = $flightsResult["ns1DepartureAirport"];
                    $destiLoc = $flightsResult["ns1ArrivalAirport"];
                    $rph = $flightsResult["@attributes"]["RPH"];
            ?>
                    <div class="col-md-6" data-sort="<?= $priceDetails ?>">
                        <form action="{{route('bookFlight')}}?<?= $requestParams[1] ?>" method="post">
                            {{ csrf_field() }}
                            <input type="hidden" name="from" value="<?= $_GET["flying_from_N"] ?>">
                            <input type="hidden" name="to" value="<?= $_GET["flying_to_N"] ?>">
                            <input type="hidden" name="totalFair" value="<?= $priceDetails ?>">
                            <input type="hidden" name="flightNumber" value="<?= $flightNumber ?>">
                            <input type="hidden" name="flightDate" value="<?= $_GET["departure_date"] ?>">
                            <input type="hidden" name="arrivalTime" value="<?= $terminals["ns1ArrivalDateTime"] ?>">
                            <input type="hidden" name="departureTime" value="<?= $terminals["ns1DepartureDateTime"] ?>">
                            <input type="hidden" name="fromTerminal" value="<?= $terminals["ns1OriginLocation"] ?>">
                            <input type="hidden" name="toTerminal" value="<?= $terminals["ns1DestinationLocation"] ?>">
                            <input type="hidden" name="rph" value="<?= $rph ?>">
                            <textarea style="visibility:hidden;" name="flightRepsonse" value=""><?php echo json_encode($result); ?></textarea>
                            <div class="shownd_flights">
                                <div class="flight_detail_shownd_flight">
                                    <div class="desti_time">
                                        <h2><?= $arvlTime ?></h2>
                                        <p><?= $_GET["flying_from_N"] ?></p>
                                    </div>

                                    <div class="desti_time_stop">
                                        <h2><?= $timeGap ?><span>Non-Stop</span></h2>
                                        <p><?= $_GET["flying_from_N"] ?> -> <?= $_GET["flying_to_N"] ?></p>
                                    </div>

                                    <div class="desti_time">
                                        <h2><?= $dptTime ?></h2>
                                        <p><?= $_GET["flying_to_N"] ?></p>
                                    </div>

                                    <div class="flight_company_logo">
                                        <!-- <img src="img/flight_logo.svg" /> -->
                                        <p><span><?= $flightNumber ?></span></p>
                                    </div>

                                    <div class="seat_flight_detail">
                                        <!-- <span>
                                    <p><i class="fas fa-user"></i> 2 Seats Left</p>
                                </span> -->
                                        <a href="#"><i class="fas fa-plane-departure"></i> Flight Details</a>
                                    </div>

                                </div>
                                <div class="price_book_shownd_flight">
                                    <h2>₹<?= $priceDetails ?></h2>
                                    <!-- <a href="book_flight.html">Book</a> -->
                                    @if(Session::has("user_id"))
                                    <button type="submit">Book</button>
                                    @else
                                    <a href="#" class="btn_1 d-lg-block main_login" onclick="document.getElementById('id01').style.display='block'">Book</a>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
            <?php
                } else {
                    echo "<p class='alert alert-danger'>No Flights Available</p>";
                }
            }
            ?>

            <!-- <div class="col-md-6">
                <div class="shownd_flights">
                    <div class="flight_detail_shownd_flight">
                        <div class="desti_time">
                            <h2>13:10</h2>
                            <p>Delhi</p>
                        </div>

                        <div class="desti_time_stop">
                            <h2>2h 5m <span>Non-Stop</span></h2>
                            <p>DEL -> GOI</p>
                        </div>

                        <div class="desti_time">
                            <h2>13:10</h2>
                            <p>Delhi</p>
                        </div>

                        <div class="flight_company_logo">
                            <img src="img/flight_logo.svg" />
                            <p>AirIndia<span>AI-883</span></p>
                        </div>

                        <div class="seat_flight_detail">
                            <span>
                                <p><i class="fas fa-user"></i> 2 Seats Left</p>
                            </span>
                            <a href="#"><i class="fas fa-plane-departure"></i> Flight Details</a>
                        </div>

                    </div>

                    <div class="price_book_shownd_flight">
                        <h2>₹5,608</h2>
                        <a href="book_flight.html">Book</a>
                    </div>
                </div>
            </div> -->
        </div>
        @else
        <?php
        $requestParams = explode("?", $_SERVER['REQUEST_URI']);
        ?>
        <div class='searched-flights' id="">
        @if(count($result->onwardJourneys) == 0)
            <p class='alert alert-danger'>No Results Found<p>
        @endif
        @foreach($result->onwardJourneys as $flight)
        <div class="row">
            <div class="col-md-6">
                <form action="{{route('bookFlight')}}?<?= $requestParams[1] ?>" method="post">
                    {{ csrf_field() }}
                    <input type="hidden" name="from" value="<?= $_GET["flying_from_N"] ?>">
                    <input type="hidden" name="to" value="<?= $_GET["flying_to_N"] ?>">
                    <input type="hidden" name="totalFair" value="{{$flight->fares->totalFare->total->amount}}">
                    <input type="hidden" name="flightDate" value="<?= $_GET["departure_date"] ?>">
                    <input type="hidden" name="flightNumber" value="{{$flight->flights[0]->carrier->code}}-{{$flight->flights[0]->flightNo}}">
                    <input type="hidden" name="arrivalTime" value='{{date("H:i", strtotime($flight->flights[0]->arrDetail->time))}}'>
                    <input type="hidden" name="departureTime" value='{{date("H:i", strtotime($flight->flights[0]->depDetail->time))}}'>
                    <input type="hidden" name="fromTerminal" value="{{isset($flight->flights[0]->depDetail->terminal) ? $flight->flights[0]->depDetail->terminal : $flight->flights[0]->depDetail->name}}">
                    <input type="hidden" name="toTerminal" value="{{isset($flight->flights[0]->arrDetail->terminal) ? $flight->flights[0]->arrDetail->terminal : $flight->flights[0]->arrDetail->name}}">
                    <textarea style="visibility:hidden;" name="flightRepsonse" value=""><?php echo json_encode($flight); ?></textarea>
                    <div class="shownd_flights">
                        <div class="flight_detail_shownd_flight">
                            <div class="desti_time">
                                <h2>{{date("H:i A", strtotime($flight->flights[0]->depDetail->time))}}</h2>
                                <p>{{$flight->flights[0]->depDetail->name}}</p>
                            </div>

                            <div class="desti_time_stop">
                                <h2>2h 5m <span>Non-Stop</span></h2>
                                <p>{{$flight->flights[0]->depDetail->code}} -> {{$flight->flights[0]->arrDetail->code}}</p>
                            </div>

                            <div class="desti_time">
                                <h2>{{date("H:i A", strtotime($flight->flights[0]->arrDetail->time))}}</h2>
                                <p>{{$flight->flights[0]->arrDetail->name}}</p>
                            </div>

                            <div class="flight_company_logo">
                                <img src="img/flight_logo.svg" />
                                <p>{{$flight->flights[0]->carrier->name}}<span>{{$flight->flights[0]->carrier->code}}-{{$flight->flights[0]->flightNo}}</span></p>
                            </div>

                            <div class="seat_flight_detail">
                                <span>
                                    <p><i class="fas fa-user"></i> {{@$flight->seatsLeft}} seats</p>
                                </span>
                                <a href="#"><i class="fas fa-plane-departure"></i> Flight Details</a>
                            </div>

                        </div>

                        <div class="price_book_shownd_flight">
                            <h2>₹{{$flight->fares->totalFare->total->amount}}</h2>
                            @if(Session::has("user_id"))
                            <button type="submit">Book</button>
                            @else
                            <a href="#" class="btn_1 d-lg-block main_login" onclick="document.getElementById('id01').style.display='block'">Book</a>
                            @endif
                        </div>
                    </div>
                </form>
            </div>
        </div>
        @endforeach
        </div>
        @endif
    </div>
</section>

@endsection