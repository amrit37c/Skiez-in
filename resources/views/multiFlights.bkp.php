$a = 0;
                    foreach ($flightsResult as $flights) {
                        $dptTime = $flights["ns1DepartureDateTime"];
                        $arvlTime = $flights["ns1ArrivalDateTime"];
                        $originLoc = $flights["ns1OriginLocation"];
                        $destiLoc = $flights["ns1DestinationLocation"];
                        $flightNumber = $flights["ns1OriginDestinationOptions"]["ns1OriginDestinationOption"]["ns1FlightSegment"]["@attributes"]["FlightNumber"];
                    ?>
                        <div class="col-md-6">
                            <div class="shownd_flights">
                                <div class="flight_detail_shownd_flight">
                                    <div class="desti_time">
                                        <h2><?= $arvlTime ?></h2>
                                        <p><?= $originLoc ?></p>
                                    </div>

                                    <div class="desti_time_stop">
                                        <h2>2h 5m <span>Non-Stop</span></h2>
                                        <p><?= $_GET["flying_from_N"] ?> -> <?= $_GET["flying_to_N"] ?></p>
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
                        </div>
            <?php
                    }
                    $a++;