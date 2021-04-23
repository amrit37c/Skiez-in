<!-- Stored in resources/views/child.blade.php -->
@extends('layouts.master')

@section('title', 'Home' . ' | ' . env('APP_NAME'))

@section('content')

<!-- banner part start-->
<section class="banner_part">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-10">
                <div class="banner_text text-center">
                    <div class="banner_text_iner">
                        <h1>DISCOVER WITH US</h1>
                        <p>Let’s start your journey with us, your dream will come true</p>
                        <a href="#" class="btn_1">Discover Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- banner part start-->

@include('partials.bookingpart')

<!--top place start-->
<section class="top_place section_padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6">
                <div class="section_tittle text-center">
                    <h2>FEATURED TRIP</h2>
                </div>
            </div>
        </div>
        <div class="row">

            <div class="col-lg-12 col-md-12">
                <div class="top_package_adst">


                    <div class="row single_place top_package_row">

                        <div class="col-md-6"></div>

                        <div class="col-md-6 package_btm_detail package_top_detail">
                            <h2>Luxury Greece</h2>
                            <h5>6 Days 5 Night</h5>
                            <p>Lorem ipsum dolor sit amet, id altera persequeris vim, mea an appareat prodesset. Cu mea error eripuit delicata. Nec soluta aliquid similique eu, eu melius constituam sit. Et nam soleat accusamus. Vim hinc aeque viderer no.</p>
                            <a href="#" class="place_btn">View Detail</a>
                        </div>
                    </div>

                </div>
            </div>



            <div class="col-lg-6 col-md-6">
                <div class="single_place">
                    <img src="{{env('ASSETS_URL')}}img/package_img2.png" alt="">
                    <div class="hover_Text d-flex align-items-end justify-content-between">
                        <div class="hover_text_iner">
                            <a href="#" class="place_btn">View Detail</a>
                        </div>

                    </div>

                    <div class="package_btm_detail">
                        <h2>Belgia Village</h2>
                        <h5>3 Days 2 Night</h5>
                        <p>Lorem ipsum dolor sit amet, id altera persequeris vim, mea an appareat prodesset. Cu mea error eripuit delicata. Nec soluta aliquid similique eu, eu melius constituam sit. Et nam soleat accusamus. Vim hinc aeque viderer no.</p>
                    </div>
                </div>
            </div>


            <div class="col-lg-6 col-md-6">
                <div class="single_place">
                    <img src="{{env('ASSETS_URL')}}img/package_img3.png" alt="">
                    <div class="hover_Text d-flex align-items-end justify-content-between">
                        <div class="hover_text_iner">
                            <a href="#" class="place_btn">View Detail</a>
                        </div>

                    </div>

                    <div class="package_btm_detail">
                        <h2>Middle East Paradise</h2>
                        <h5>6 Days 5 Night</h5>
                        <p>Lorem ipsum dolor sit amet, id altera persequeris vim, mea an appareat prodesset. Cu mea error eripuit delicata. Nec soluta aliquid similique eu, eu melius constituam sit. Et nam soleat accusamus. Vim hinc aeque viderer no.</p>
                    </div>
                </div>
            </div>


            <div class="col-md-12 text-center">
                <a href="#" class="veiw_more_btn">VIEW MORE DESTINATION</a>
            </div>


        </div>
    </div>
</section>
<!--top place end-->

<!--top place start-->
<section class="event_part section_padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6">
                <div class="section_tittle text-center">
                    <h2 style="color: #fff;">OUR PACKAGE</h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3 our_package_hm">
                <h2>Luxury Paradise</h2>
                <span></span>
                <p>Lorem ipsum dolor sit amet, id altera
                    persequeris vim, mea an appareat prodesset.
                    Cu mea error eripuit delicata. Nec soluta aliquid
                    similique eu.</p>
            </div>

            <div class="col-md-3 our_package_hm">
                <h2>Deluxe Gold</h2>
                <span></span>
                <p>Lorem ipsum dolor sit amet, id altera
                    persequeris vim, mea an appareat prodesset.
                    Cu mea error eripuit delicata. Nec soluta aliquid
                    similique eu.</p>
            </div>

            <div class="col-md-3 our_package_hm">
                <h2>Premium Silver</h2>
                <span></span>
                <p>Lorem ipsum dolor sit amet, id altera
                    persequeris vim, mea an appareat prodesset.
                    Cu mea error eripuit delicata. Nec soluta aliquid
                    similique eu.</p>
            </div>


            <div class="col-md-3 our_package_hm">
                <h2>Premium Silver</h2>
                <span></span>
                <p>Lorem ipsum dolor sit amet, id altera
                    persequeris vim, mea an appareat prodesset.
                    Cu mea error eripuit delicata. Nec soluta aliquid
                    similique eu.</p>
            </div>


        </div>
    </div>
</section>
<!--top place end-->

<!--::industries start::-->
<section class="best_services section_padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6">
                <div class="section_tittle text-center">
                    <h2>WE OFFERED BEST SERVICES</h2>
                    <p>Lorem ipsum dolor sit amet, id altera persequeris vim, mea an appareat prodesset. Cu mea error eripuit delicata. Nec soluta aliquid similique eu, eu melius constituam sit.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="single_ihotel_list">
                    <img src="{{env('ASSETS_URL')}}img/services_1.png" alt="">

                    <div class="we_offer_details">
                        <h3> <a href="#"> Transportation</a></h3>
                        <p>All transportation cost we bear</p>
                    </div>

                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single_ihotel_list">
                    <img src="{{env('ASSETS_URL')}}img/services_2.png" alt="">
                    <div class="we_offer_details">
                        <h3> <a href="#"> Guidence</a></h3>
                        <p>We offer the best guidence for you</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single_ihotel_list">
                    <img src="{{env('ASSETS_URL')}}img/services_3.png" alt="">
                    <div class="we_offer_details">
                        <h3> <a href="#"> Accomodation</a></h3>
                        <p>Luxarious and comfortable</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single_ihotel_list">
                    <img src="{{env('ASSETS_URL')}}img/services_4.png" alt="">
                    <div class="we_offer_details">
                        <h3> <a href="#"> Discover world</a></h3>
                        <p>Best tour plan for your next tour</p>
                    </div>


                </div>
            </div>
        </div>
    </div>
</section>
<!--::industries end::-->

<!--::industries start::-->
<section class="best_services section_padding pt-0">
    <div class="container">

        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="single_ihotel_list single_ihotel_list_li text-center">
                    <img src="{{env('ASSETS_URL')}}img/traveller.svg" alt="">
                    <h3 style="margin-bottom: 0;"><strong>120,859</strong></h3>
                    <p style="font-size: 15px;">HAPPY TRAVELLERS</p>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="single_ihotel_list single_ihotel_list_li text-center">
                    <img src="{{env('ASSETS_URL')}}img/satis_tour.svg" alt="">
                    <h3 style="margin-bottom: 0;"><strong>2594</strong></h3>
                    <p style="font-size: 15px;">SATISFIED TOURS</p>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="single_ihotel_list single_ihotel_list_li text-center">
                    <img src="{{env('ASSETS_URL')}}img/world.svg" alt="">
                    <h3 style="margin-bottom: 0;"><strong>854</strong></h3>
                    <p style="font-size: 15px;">DESTINATION</p>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="single_ihotel_list single_ihotel_list_li text-center">
                    <img src="{{env('ASSETS_URL')}}img/destination.svg" alt="">
                    <h3 style="margin-bottom: 0;"><strong>978</strong></h3>
                    <p style="font-size: 15px;">DESTINATIONS</p>
                </div>
            </div>

        </div>
    </div>
</section>
<!--::industries end::-->
@endsection