<!doctype html>
<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
    <link rel="icon" href="{{asset('/public/img/favicon.png')}}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('public/css/bootstrap.min.css') }}">
    <!-- animate CSS -->
    <link rel="stylesheet" href="{{ asset('public/css/animate.css') }}">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="{{ asset('public/css/owl.carousel.min.css') }}">
    <!-- themify CSS -->
    <link rel="stylesheet" href="{{ asset('public/css/themify-icons.css') }}">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="{{ env('public/css/flaticon.css') }}">
    <!-- fontawesome CSS -->
    <link rel="stylesheet" href="{{asset('public/fontawesome/css/all.min.css')}}">
    <!-- magnific CSS -->
    <link rel="stylesheet" href="{{ asset('public/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/gijgo.min.css') }}">
    <!-- niceselect CSS -->
    <link rel="stylesheet" href="{{ asset('public/css/nice-select.css') }}">
    <!-- slick CSS -->
    <link rel="stylesheet" href="{{ asset('public/css/slick.css') }}">
    <!-- style CSS -->
    <link rel="stylesheet" href="{{ asset('public/css/style.css') }}">

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <link href="{{ asset('/public/bundles/css19a0.css?v=1234455667899') }}" rel="stylesheet" />
    <script src="{{ asset('/public/bundles/Script9776?v=gthh') }}"></script>
    <script src="{{ asset('/public/bundles/seachengine02b9?v=4242424242424') }}"></script>

    <!-- font awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">


    <!------------------------------ google fonts ------------------------------>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">


    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">
    <style>
        /* Extra styles for the cancel button */
        .cancelbtn {
            width: auto;
            padding: 10px 18px;
            background-color: #2493e0;
        }

        /* Center the image and position the close button */
        .imgcontainer {
            text-align: center;
            margin: 24px 0 12px 0;
            position: relative;
        }

        img.avatar {
            width: 40%;
            border-radius: 50%;
        }

        span.psw {
            float: right;
            padding-top: 16px;
        }

        /* The Modal (background) */
        .modal {
            display: none;
            /* Hidden by default */
            position: fixed;
            /* Stay in place */
            z-index: 99999;
            /* Sit on top */
            left: 0;
            top: 0;
            width: 100%;
            /* Full width */
            height: 100%;
            /* Full height */
            overflow: auto;
            /* Enable scroll if needed */
            background-color: rgb(0, 0, 0);
            /* Fallback color */
            background-color: rgba(0, 0, 0, 0.4);
            /* Black w/ opacity */
            padding-top: 60px;
        }

        .modall {
            display: none;
            /* Hidden by default */
            position: fixed;
            /* Stay in place */
            z-index: 99999;
            /* Sit on top */
            left: 0;
            top: 0;
            width: 100%;
            /* Full width */
            height: 100%;
            /* Full height */
            overflow: auto;
            /* Enable scroll if needed */
            background-color: rgb(0, 0, 0);
            /* Fallback color */
            background-color: rgba(0, 0, 0, 0.4);
            /* Black w/ opacity */
            padding-top: 60px;
        }

        /* Modal Content/Box */
        .modal-content {
            flex-direction: inherit !important;
            background-color: #fefefe;
            margin: 5% auto 0% auto;
            border: 1px solid #888;
            width: 35%;
            padding: 30px 50px 30px 50px;
            border-radius: 13px;
            border: none;
            text-align: center;
        }

        /* The Close Button (x) */
        .close {
            position: absolute;
            right: 13px;
            top: 0;
            color: #000;
            font-size: 30px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: #2493e0;
            cursor: pointer;
        }

        /* Add Zoom Animation */
        .animate {
            -webkit-animation: animatezoom 0.6s;
            animation: animatezoom 0.6s
        }

        .animateee {
            width: 100%;
            float: left;
        }

        .animateee h6 {
            font-size: 17px;
            text-align: center;
            font-weight: 400;
            color: #000000c4;
            margin-bottom: 25px;
            margin-top: 30px;
            font-family: 'Poppins', sans-serif;
        }

        .animateee h6 span {
            font-weight: 600;
        }



        .animateee input {
            margin-bottom: 10px;
            padding: 10px 10px 10px 12px;
            width: 90%;
            float: left;
            border: none;
            border-radius: 0px;
            font-size: 15px;
            background: #F7F7F7;
            border-left: 5px solid #08423b;
        }

        .pop_span2 {
            width: 10%;
            float: left;
            background: #F7F7F7;
            padding: 10px 0;
        }

        .pop_span2 i {
            color: #00000042;
        }

        .animateee button {
            border: 0;
            width: 100%;
            float: left;
            margin-top: 15px;
            padding: 10px 0;
        }

        .animateee input::placeholder {
            color: #00000042;
        }

        .agent_btm_pop {
            width: 100%;
            float: left;
            border-top: 1px solid #00000017;
            margin-top: 40px;
            padding-top: 12px;
        }

        .agent_btm_pop p {
            margin: 0;
            width: 50%;
            float: left;
            text-align: right;
            font-size: 12px;
            color: #08413b;
            font-weight: 500;
            font-family: 'Poppins', sans-serif;
            padding-right: 5px;
            padding-top: 5px;
        }

        .agent_btm_pop button {
            width: auto;
            float: inherit;
            font-size: 12px;
            margin-top: 0;
            padding: 9px 14px;
            background: #08413b;
            margin-left: 10px;
        }

        .or_sec {
            border-top: 1px solid #bdbbbb54;
            margin-top: 35px;
        }

        .or_sec h5 {
            width: 12%;
            background: #fff;
            margin-top: -13px !important;
            margin: 0 auto;
        }

        .or_sec a {
            width: 50%;
            float: left;
            margin-top: 20px;
            text-align: center;
        }

        .or_sec a img {
            width: 85%;
        }




        .fromtopopup {
            display: none;
            width: 330px;
            position: absolute;
            left: 1px;
            top: 63px !important;
            float: left !important;
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
            padding: 20px 8px;
            height: 240px;
            overflow: scroll;
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

        .radio_area {
            width: 20%;
            float: left;
            margin-bottom: 10px;
        }

        .radio_area input {
            width: 20% !important;
            float: left;
        }

        .radio_area label {
            width: 80% !important;
            float: left;
            font-size: 13px;
            line-height: 13px;
        }

        .search_flight_result_div {
            width: 100%;
            float: left;
        }

        .search_flight_result_div ul {
            width: 100%;
            float: left;
        }

        .search_flight_result_div ul li {
            width: 100%;
            float: left;
            color: #000000c9;
            font-size: 13px;
            border-bottom: 1px solid #d7d7d7;
            padding-bottom: 5px;
            letter-spacing: 0.5px;
        }

        .search_flight_result_div ul li b {
            color: #000;
            float: right;
        }

        .search_flight_result_div ul li i {
            color: #000000c9 !important;
            float: left !important;
            font-size: 13px !important;
            margin-right: 8px;
            padding-top: 4px;
        }



        @media screen and (max-width: 500px) {
            .radio_area {
                width: 100%;
                float: left;
            }
        }





        @-webkit-keyframes animatezoom {
            from {
                -webkit-transform: scale(0)
            }

            to {
                -webkit-transform: scale(1)
            }
        }

        @keyframes animatezoom {
            from {
                transform: scale(0)
            }

            to {
                transform: scale(1)
            }
        }

        /* Change styles for span and cancel button on extra small screens */
        @media screen and (max-width: 300px) {
            span.psw {
                display: block;
                float: none;
            }

            .cancelbtn {
                width: 100%;
            }
        }
    </style>
</head>

<body>
    <!-------------------------------------::login/register modal::--------------------------------------->
    <div id="id01" class="modal">
        <div class="modal-content">
            <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
            <form class="animate animateee">
                <img src="{{asset('/public/img/logo.svg')}}" />
                <h6>Nice to see you again.. <span>Login here</span></h6>
                <div id="otpResponse1">

                </div>
                <div class="container">
                    <input type="text" placeholder="Your 10 digit mobile number" name="custMobileNumber">
                    <span class="pop_span2">
                        <i class="fas fa-mobile-alt"></i>
                    </span><br>

                    <div id="receivedOtp" style="display: none">
                        <input type="number" placeholder="Please Enter received OTP" name="receivedOtp">
                        <span class="pop_span2">
                            <i class="fas fa-key"></i>
                        </span><br>
                    </div>

                    <button type="button" class="btn_1 d-none d-lg-block" onclick="generateOtp('custMobileNumber', 'otpResponse1', 'receivedOtp', this, 1)">GENERATE OTP</button>


                    <div class="agent_btm_pop">
                        <p>Are you a Skiez Agent</p>
                        <button type="button" class="btn_1 d-none d-lg-block" data-toggle="modal" data-target="#exampleModal">Agent Login</button>
                    </div>

                </div>


            </form>
        </div>
    </div>



    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content w-100 mt-5">
                <form class="animate animateee">
                    <img src="{{asset('/public/img/logo.svg')}}" />
                    <h6>Nice to see you again.. <span>Login here</span></h6>
                    <div id="otpResponse2">

                    </div>
                    <div class="container">
                        <input type="text" placeholder="Your 10 digit mobile number" name="agentMobileNumber">
                        <span class="pop_span2">
                            <i class="fas fa-mobile-alt"></i>
                        </span><br>

                        <div id="receivedOtpAgent" style="display: none">
                            <input type="number" placeholder="Please Enter received OTP" name="receivedOtpAgent">
                            <span class="pop_span2">
                                <i class="fas fa-key"></i>
                            </span><br>
                        </div>

                        <button type="button" class="btn_1 d-none d-lg-block" onclick="generateOtp('agentMobileNumber', 'otpResponse2', 'receivedOtpAgent', this, 2)">GENERATE OTP</button>
                        <!-- <div class="container">
                            <input type="text" placeholder="Your 10 digit mobile number" name="uname">
                            <span class="pop_span2">
                                <i class="fas fa-mobile-alt"></i>
                            </span><br>

                            <button type="button" class="btn_1 d-none d-lg-block" onclick="location.href='agent_dashboard.html'">GENERATE OTP</button>


                        </div> -->
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!--::header part start::-->
    <header class="main_menu">
        <div class="sub_menu">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-2">
                        <div class="sub_menu_social_icon" style="float: left;">
                            <span><img src="{{asset('/public/img/phone_top_icon.svg')}}" class="mr-2" />+91 011 47407777</a></span>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-2 ">
                        <div class="sub_menu_social_icon">
                            <a target="_blank" href="{{env('FB_URL')}}"><img src="{{asset('/public/img/facebook.svg')}}" /></a>
                            <a target="_blank" href="{{env('INSTA_URL')}}"><img src="{{asset('/public/img/insta.svg')}}" /></a>
                            <a target="_blank" href="{{env('TWITTER_URL')}}"><img src="{{asset('/public/img/twitter.svg')}}" /></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main_menu_iner">
            <div class="container">
                <div class="row align-items-center ">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg navbar-light justify-content-between">
                            <a class="navbar-brand" href="{{route('home')}}"> <img src="{{asset('/public/img/logo.svg')}}" alt="logo" style="width: 90%;" /> </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link {{route('home') == Request::url() ? 'active_nav' : ''}}" href="{{route('home')}}">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link {{route('about') == Request::url() ? 'active_nav' : ''}}" href="{{route('about')}}">About</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link {{route('flightBooking') == Request::url() ? 'active_nav' : ''}}" href="{{route('flightBooking')}}">Flight Booking</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link {{route('hotelBooking') == Request::url() ? 'active_nav' : ''}}" href="{{route('hotelBooking')}}">Hotel Booking</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link {{route('packages') == Request::url() ? 'active_nav' : ''}}" href="{{route('packages')}}">packages</a>
                                    </li>
                                </ul>
                            </div>
                            @if(Session::has("user_id"))
                            <a onclick="myFunctionmenu()" class="dropbtnn btn_1 d-lg-block d-none main_login user_login_drp" onclick="document.getElementById('id01').style.display='block'">
                                <i class="fas fa-user"></i> Hi.. {{Session::get("first_name")}} <i class="fas fa-sort-down"></i>
                            </a>

                            <div id="myDropdownn" class="dropdown-contentt" style="top: 66px;right: -16px;">
                                <span>{{Session::get("first_name")}} {{Session::get("last_name")}}</span>
                                <a href="{{ Session::get('user_type') == '1' ? route('dashboard') : route('agentDashboard') }}"><i class="fas fa-user-circle"></i> Profile</a>
                                <!-- <a href="agent_profile.html"><i class="fas fa-user-circle"></i> Profile</a> -->
                                <a href="{{route('logout')}}"><i class="fas fa-power-off"></i> LOGOUT</a>
                            </div>
                            <!-- <a href="{{ Session::get('user_type') == '1' ? route('dashboard') : route('agentDashboard') }}" class="btn_1 d-lg-block d-none main_login">My Account</a> -->
                            @else
                            <a href="#" class="btn_1 d-lg-block d-none main_login" onclick="document.getElementById('id01').style.display='block'">Log In</a>
                            @endif
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header part end-->

    @yield('content')

    <!-- footer part start-->
    <footer class="footer-area">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-sm-6 col-md-2">
                    <div class="single-footer-widget">
                        <h4>Quick Links</h4>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About Company</a></li>
                            <li><a href="#">Testimonials</a></li>
                            <li><a href="#">Infrastructure</a></li>
                        </ul>

                    </div>
                </div>


                <div class="col-sm-6 col-md-2">
                    <div class="single-footer-widget">
                        <h4>Support</h4>
                        <ul>
                            <li><a href="#">Get Started</a></li>
                            <li><a href="{{route('privacy')}}">Privacy Policy</a></li>
                            <li><a href="{{route('termsConditions')}}">Terms & Conditions</a></li>
                            <li><a href="{{route('refundPolicy')}}">Refund Policy</a></li>
                            <li><a href="#">Help</a></li>
                        </ul>

                    </div>
                </div>


                <div class="col-sm-6 col-md-3">
                    <div class="single-footer-widget footer_icon">
                        <h4>Address</h4>
                        <p>Skiez Travels and Logistics Private Limited - GSA For Mahan Air in India<br>

                            +91 011 47407777<br>
                            info@mahanair.in
                        </p>


                    </div>
                </div>

                <div class="col-sm-6 col-md-1"></div>


                <div class="col-sm-6 col-md-3">
                    <div class="single-footer-widget">
                        <h4>Subscribe Newsletter</h4>
                        <div class="form-wrap" id="mc_embed_signup">
                            <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="form-inline">
                                <input class="form-control" name="EMAIL" placeholder="Your Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email Address '" required="" type="email">
                                <button class="click-btn btn btn-default text-uppercase"> <i class="far fa-paper-plane"></i>
                                </button>
                                <div style="position: absolute; left: -5000px;">
                                    <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
                                </div>

                                <div class="info"></div>
                            </form>
                        </div>
                        <p>Download Our App</p>

                        <div class="dwnloade_icons">
                            <a href="#"><img src="{{env('ASSETS_URL')}}img/play_store.svg" /></a>
                            <a href="#"><img src="{{env('ASSETS_URL')}}img/google-play.svg" /></a>
                        </div>

                    </div>
                </div>

            </div>
        </div>
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="copyright_part_text text-center">
                        <p class="footer-text m-0">
                            &copy; 2020 Reserved by ABC Company Limited.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer part end-->

    <!-- jquery plugins here-->
    <script src="{{asset('/public/js/jquery-1.12.1.min.js')}}"></script>
    <!-- popper js -->
    <script src="{{asset('/public/js/popper.min.js')}}"></script>
    <!-- bootstrap js -->
    <script src="{{asset('/public/js/bootstrap.min.js')}}"></script>
    <!-- magnific js -->
    <script src="{{asset('/public/js/jquery.magnific-popup.js')}}"></script>
    <!-- swiper js -->
    <script src="{{asset('/public/js/owl.carousel.min.js')}}"></script>
    <!-- masonry js -->
    <script src="{{asset('/public/js/masonry.pkgd.js')}}"></script>
    <!-- masonry js -->
    <script src="{{asset('/public/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('/public/js/gijgo.min.js')}}"></script>
    <!-- contact js -->
    <script src="{{asset('/public/js/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{asset('/public/js/jquery.form.js')}}"></script>
    <script src="{{asset('/public/js/jquery.validate.min.js')}}"></script>
    <script src="{{asset('/public/js/mail-script.js')}}"></script>
    <script src="{{asset('/public/js/contact.js')}}"></script>
    <!-- custom js -->
    <script src="{{asset('/public/js/custom.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.7.0/moment.min.js"></script>


    <!-- Login Modal -->
    <script>
        // Get the modal
        var modal = document.getElementById('id01');

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }

        function next() {
            window.location.assign("flight_search.html")
        }
    </script>
    <script>
        jQuery(document).ready(function() {
            jQuery(".airportslist").on("input", function(e) {
                // alert("asjdhba");
                var code = $(this).val();
                var parent = $(this).parent();
                var siblings = $(this).siblings();
                var searchTarget = $(this).attr("data-search-results");
                var dataTarget = $(this).attr("data-target");
                var inputField = $(this).attr("name");
                if (code.length < 3) {
                    return;
                }
                setTimeout(() => {
                    jQuery.ajax({
                        data: `code=${code}`,
                        type: "get",
                        url: "<?= env("APP_URL") . env("AIRPORTS_LIST") ?>",
                        success: function(result) {
                            if (result.length == 0) {
                                $(siblings[3]).children().append("<ul><li>No airports available.</li></ul>");
                            } else {
                                var a = 0;
                                var popup = ``;
                                while (a < result.length) {
                                    popup += `<li data-action='fillairport' data-input='${inputField}' data-target='${dataTarget}' data-code='${result[a].code}' data-name='${result[a].name}' data-country='${result[a].country}'>
                                            <i class="fas fa-plane"></i> ${result[a].name},${result[a].location} - ${result[a].country} <b>[${result[a].code}]</b>
                                        </li>`;
                                    a++;
                                }
                            }
                            $(`#${searchTarget}`).html(popup);
                        },
                        error: function(error) {
                            console.log(error);
                        }
                    })
                }, 200);
            });

            jQuery("body").on("click", "[data-action=fillairport]", function() {
                // console.log($(this).attr("data-target"));
                var targetElem = $(this).attr("data-target");
                var inputFields = $(this).attr("data-input");
                $(`[name='${inputFields}']`).val($(this).attr("data-code"));
                $(`#${targetElem}`).html($(this).text());
                $(".fromtopopup").css({
                    "display": "none"
                });
            });

            jQuery(".maincalculations").on("click", function() {
                var action = $(this).val();
                var target = ($(this).attr("data-target"));
                var currentVal = parseInt($(`[name=${target}]`).val());
                if (action == "-") {
                    var newVal = (currentVal - 1);
                    if (newVal < 0) {
                        newVal = 0;
                    }
                    $(`[name=${target}]`).val(newVal);
                } else if (action == "+") {
                    var newVal = (currentVal + 1);
                    $(`[name=${target}]`).val(newVal);
                }
            });

            jQuery(".calculate").on("click", function() {
                var targetDiv = $(this).attr("data-target");
                var sum = 0;
                $(`#${targetDiv} .count`).each(function() {
                    console.log($(this).val());
                    sum += parseInt($(this).val());
                });
                $("#travel_id").text(sum);
            });

            $("#sortFlights").on("change", function() {
                if ($(this).val() == 0) {
                    $(".searched-flights").attr('id', '');
                } else {
                    $(".searched-flights").attr('id', 'top-to-bottom');
                }
            });

            $("#last-day-flights").on('click', function() {
                var crntDate = $('[name=departure_date]').val();
                var date = $('[name=departure_date]').val(moment(crntDate).subtract(1, 'days').format('MM/DD/YYYY'));
            });

            $("#next-day-flights").on('click', function() {
                var crntDate = $('[name=departure_date]').val();
                var date = $('[name=departure_date]').val(moment(crntDate).add(1, 'days').format('MM/DD/YYYY'));
            })
        })

        function generateOtp(mobileNumber, msgDiv, targetDiv, e, type) {
            var mobileNumber = $(`[name=${mobileNumber}]`).val();
            var otpBtn = e;
            jQuery.ajax({
                url: "{{route('generateOtp')}}",
                type: "post",
                data: {
                    "_token": "{{csrf_token()}}",
                    "mobile_number": mobileNumber,
                },
                success: function(result) {
                    // console.log(result);
                    result = JSON.parse(result);
                    if (result.Status === "Success") {
                        $(`#${msgDiv}`).html(`<p class='alert alert-success'>${result.message}</p>`);
                        $(`#${targetDiv}`).css({
                            display: "block"
                        });
                        if (type == 2) {
                            $(otpBtn).replaceWith(`<button type="button" class="btn_1 d-none d-lg-block" onclick="verifyOtp('agentMobileNumber', 'receivedOtpAgent', ${type})">Login</button>`);
                        } else {
                            $(otpBtn).replaceWith(`<button type="button" class="btn_1 d-none d-lg-block" onclick="verifyOtp('custMobileNumber', 'receivedOtp', ${type})">Login</button>`);
                        }
                    } else {
                        $(`#${msgDiv}`).html(`<p class='alert alert-danger'>${result.message}</p>`);
                    }
                },
                error: function(error) {
                    console.log(error);
                }
            })
        }

        function verifyOtp(mobileNumber, otp, type) {
            var mobileNumber = $(`[name=${mobileNumber}]`).val();
            var otp = $(`[name=${otp}]`).val();
            jQuery.ajax({
                url: "{{route('verifyOtp')}}",
                type: "post",
                data: {
                    "_token": "{{csrf_token()}}",
                    "mobile_number": mobileNumber,
                    "otp": otp,
                    "type": type
                },
                success: function(result) {
                    console.log(result);
                    result = JSON.parse(result);
                    alert(result.Message);
                    if (result.Status == "Success") {
                        location.reload();
                    }
                },
                error: function(error) {
                    console.log(error);
                }
            })
        }
    </script>

    <script>
        /* When the user clicks on the button, 
    toggle between hiding and showing the dropdown content */
        function myFunctionmenu() {
            document.getElementById("myDropdownn").classList.toggle("show");
        }

        // Close the dropdown if the user clicks outside of it
        window.onclick = function(event) {
            if (!event.target.matches('.dropbtnn')) {
                var dropdowns = document.getElementsByClassName("dropdown-contentt");
                var i;
                for (i = 0; i < dropdowns.length; i++) {
                    var openDropdown = dropdowns[i];
                    if (openDropdown.classList.contains('show')) {
                        openDropdown.classList.remove('show');
                    }
                }
            }
        }


        function openCity(evt, cityName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
        }

        // Get the element with id="defaultOpen" and click on it
        document.getElementById("defaultOpen").click();
    </script>
</body>



</html>