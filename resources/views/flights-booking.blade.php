<!-- Stored in resources/views/child.blade.php -->
@extends('layouts.master')

@section('title', 'Book Flights'. ' | ' .env('APP_NAME'))

@section('content')

<!--top place start-->
<section class="section_padding flight_banner">
    <div class="container">
        <div class="row">
        </div>
    </div>
</section>
<!--top place end-->


@include('partials.bookingpart')



<section class="best_services section_padding mt-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6">
                <div class="section_tittle text-center">
                    <h2>TOP FLIGHT ROUTES</h2>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-lg-3 col-sm-6">
                <div class="top_flights_routes">
                    <img src="img/top_flight_r1.png" alt="">

                    <div class="top_flights_routes_details">
                        <h3>Bangalore to Delhi</h3>
                        <p>Fares from Rs. 3099</p>

                        <a href="#">VIEW FLIGHT</a>
                    </div>

                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="top_flights_routes">
                    <img src="img/top_flight_r2.png" alt="">

                    <div class="top_flights_routes_details">
                        <h3>Delhi to Bangkok</h3>
                        <p>Fares from Rs. 2905</p>

                        <a href="#">VIEW FLIGHT</a>
                    </div>

                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="top_flights_routes">
                    <img src="img/top_flight_r3.png" alt="">

                    <div class="top_flights_routes_details">
                        <h3>Hyderabad to Dubai</h3>
                        <p>Fares from Rs. 2905</p>

                        <a href="#">VIEW FLIGHT</a>
                    </div>

                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="top_flights_routes">
                    <img src="img/top_flight_r4.png" alt="">

                    <div class="top_flights_routes_details">
                        <h3>Mumbai to Goa</h3>
                        <p>Fares from Rs. 2905</p>

                        <a href="#">VIEW FLIGHT</a>
                    </div>

                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-lg-3 col-sm-6">
                <div class="top_flights_routes">
                    <img src="img/top_flight_r5.png" alt="">

                    <div class="top_flights_routes_details">
                        <h3>Bangalore to Delhi</h3>
                        <p>Fares from Rs. 3099</p>

                        <a href="#">VIEW FLIGHT</a>
                    </div>

                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="top_flights_routes">
                    <img src="img/top_flight_r6.png" alt="">

                    <div class="top_flights_routes_details">
                        <h3>Delhi to Bangkok</h3>
                        <p>Fares from Rs. 2905</p>

                        <a href="#">VIEW FLIGHT</a>
                    </div>

                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="top_flights_routes">
                    <img src="img/top_flight_r7.png" alt="">

                    <div class="top_flights_routes_details">
                        <h3>Hyderabad to Dubai</h3>
                        <p>Fares from Rs. 2905</p>

                        <a href="#">VIEW FLIGHT</a>
                    </div>

                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="top_flights_routes">
                    <img src="img/top_flight_r8.png" alt="">

                    <div class="top_flights_routes_details">
                        <h3>Mumbai to Goa</h3>
                        <p>Fares from Rs. 2905</p>

                        <a href="#">VIEW FLIGHT</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>



<section class="section_padding dubai_tour">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6">
                <div class="text-center">
                    <h2>See Dubai from the sky</h2>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-8 mt-5">
                <iframe width="560" height="315" class="w-100 float-left" src="https://www.youtube.com/embed/IdejM6wCkxA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</section>






<!--top place start-->
<section class="flight_btm_feature_tour section_padding" style="background-color: #fff;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="client_review_slider owl-carousel">
                    <div class="single_review_slider flight_single_review_slider">

                        <div class="rating_flight_feature_tour">
                            <span class="fa fa-star star_checked"></span>
                            <span class="fa fa-star star_checked"></span>
                            <span class="fa fa-star star_checked"></span>
                            <span class="fa fa-star star_checked"></span>
                            <span class="fa fa-star"></span>

                            <p>126 Visited</p>
                        </div>

                        <div class="rating_flight_detail_tour">
                            <p>Professional Guides</p>
                            <h2>Sea Voyages</h2>
                        </div>
                    </div>



                </div>
            </div>
        </div>
    </div>
</section>
<!--top place end-->


@endsection