<!doctype html>
<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
    <link rel="icon" href="{{asset('/public/img/favicon.png')}}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('/public/css/bootstrap.min.css')}}">
    <!-- animate CSS -->
    <link rel="stylesheet" href="{{asset('/public/css/animate.css')}}">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="{{asset('/public/css/owl.carousel.min.css')}}">
    <!-- themify CSS -->
    <link rel="stylesheet" href="{{asset('/public/css/themify-icons.css')}}">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="{{asset('/public/css/flaticon.css')}}">
    <!-- fontawesome CSS -->
    <link rel="stylesheet" href="{{asset('/public/fontawesome/css/all.min.css')}}">
    <!-- magnific CSS -->
    <link rel="stylesheet" href="{{asset('/public/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('/public/css/gijgo.min.css')}}">
    <!-- niceselect CSS -->
    <link rel="stylesheet" href="{{asset('/public/css/nice-select.css')}}">
    <!-- slick CSS -->
    <link rel="stylesheet" href="{{asset('/public/css/slick.css')}}">
    <!-- style CSS -->
    <link rel="stylesheet" href="{{asset('/public/css/style.css')}}">



    <link href="{{asset('public/bundles/css19a0.css?v=1234455667899')}}" rel="stylesheet" />
    <script src="{{asset('public/bundles/Script9776?v=gthh')}}"></script>


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
            font-weight: bold;
            border: 2px solid #08413A;
            border-radius: 50px;
            color: #08413A;
            opacity: 1;
            padding: 0 6px;
            margin-top: 7px;
            font-size: 26px;
            z-index: 999;
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
            <form class="animate animateee py-5" name="add-balance">
                <h6><span style="color: #000; font-size: 20px;">Add Balance</span> in to their Account</h6>
                <span id="blncresponse"></span>
                <div class="container">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="text" placeholder="₹  Enter Ammount" name="amount" class="w-100">
                    <br>

                    <button type="button" class="btn_1 d-none d-lg-block" onclick="balanceRequest('add-balance')">Next</button>


                </div>


            </form>
        </div>
    </div>

    <div class="container-fluid top-bar">
        <div class="row">
            <div class="col-md-3">
                <a href="{{route('home')}}"><img src="{{asset('public/img/logo2.svg')}}" class="logo img-fluid" />
                    <p></p>
                </a>
            </div>

            <div class="col-md-6"></div>

            <div class="col-md-3">


                <div class="dropdownnn seller_dash_top_right">

                    <button onclick="myFunctionmenuu()" class="noti_btn">
                        <i class="fas fa-bell"></i>
                    </button>

                    <div id="myDropdownnn" class="dropdown-contenttt">
                        <span>ALBERT</span>
                        <a href="{{route('agentDashboard')}}"><i class="fas fa-user-circle"></i> Profile</a>
                        <a href="{{route('logout')}}"><i class="fas fa-power-off"></i> LOGOUT</a>
                    </div>
                </div>

                <div class="dropdownn seller_dash_top_right_r">

                    <button onclick="myFunctionmenu()" class="dropbtnn">
                        {{@Session::get('first_name')}} <i class="fas fa-angle-down"></i> <img src="{{asset('public/img/admin_.svg')}}" />
                    </button>

                    <div id="myDropdownn" class="dropdown-contentt">
                        <span>{{@Session::get('first_name')}}</span>
                        <a href="{{route('agentDashboard')}}"><i class="fas fa-user-circle"></i> Profile</a>
                        <a href="{{route('logout')}}"><i class="fas fa-power-off"></i> LOGOUT</a>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <div class="seller_dasboard_left_panel seller_dasboard_left_panel">
                    <ul>
                        <div class="nav_top_profile">
                            <img src="{{asset('public/img/admin_.svg')}}" />
                            <span>
                                <p>Wellcome Back! </p>
                                <h1>{{@Session::get('first_name')}} {{@Session::get('last_name')}}</h1>
                            </span>
                        </div>
                        <li><a href="{{route('agentDashboard')}}" class="seller_inner_nav {{route('agentDashboard') == Request::url() ? 'active_seller_inner_nav' : ''}}"><i class="fas fa-tachometer-alt"></i>Dashboard </a></li>
                        <li><a href="{{route('AgentOrders')}}" class="seller_inner_nav {{route('AgentOrders') == Request::url() ? 'active_seller_inner_nav' : ''}}"><i class="fas fa-box"></i>Order Hisory </a></li>
                        <li><a href="#agent_report.html" class="seller_inner_nav"><i class="fas fa-clipboard-list"></i>Reports </a></li>
                    </ul>
                </div>
            </div>

            @yield('content')

        </div>
    </div>

    <!--_________________________________select city________________________________________-->
    <!--_________________________________select city________________________________________-->
    <script>
        /* When the user clicks on the button, 
        toggle between hiding and showing the dropdown content */
        function myFunction() {
            document.getElementById("myDropdown").classList.toggle("show");
        }

        // Close the dropdown if the user clicks outside of it
        window.onclick = function(event) {
            if (!event.target.matches('.dropbtn')) {
                var dropdowns = document.getElementsByClassName("dropdown-content");
                var i;
                for (i = 0; i < dropdowns.length; i++) {
                    var openDropdown = dropdowns[i];
                    if (openDropdown.classList.contains('show')) {
                        openDropdown.classList.remove('show');
                    }
                }
            }
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
    </script>

    <script>
        function balanceRequest(formName){
            var formData = $(`form[name=${formName}]`).serialize();
            jQuery.ajax({
                type: "post",
                data: formData,
                url: "{{route('requestBalance')}}",
                success: function(result){
                    if(result.error == false){
                        $("#blncresponse").html(`<p class='alert alert-danger'>${result.message}</p>`);
                    }else{
                        $("#blncresponse").html(`<p class='alert alert-success'>${result.message}</p>`);
                    }
                    console.log(result);
                },
                error: function(error){
                    console.log(error);
                }
            });
        }
    </script>

    <!--_________________________________bar chart________________________________________-->
    <!--_________________________________bar chart________________________________________-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    <script>
        var densityCanvas = document.getElementById("densityChart");

        Chart.defaults.global.defaultFontFamily = "";
        Chart.defaults.global.defaultFontSize = 18;

        var densityData = {
            label: '',
            data: [5500, 5243, 5514, 3933, 1326, 687, 1271, 1638],
            backgroundColor: 'rgba(0, 99, 132, 0.6)',
            borderWidth: 0,
            yAxisID: "y-axis-density"
        };

        var gravityData = {
            label: '',
            data: [, , , , , , , ],
            backgroundColor: '',
            borderWidth: 0,
            yAxisID: "y-axis-gravity"
        };

        var planetData = {
            labels: ["", "", "", "", "", "", "", ""],
            datasets: [densityData, gravityData]
        };

        var chartOptions = {
            scales: {
                xAxes: [{
                    barPercentage: 1,
                    categoryPercentage: 0.6
                }],
                yAxes: [{
                    id: "y-axis-density"
                }, {
                    id: "y-axis-gravity"
                }]
            }
        };

        var barChart = new Chart(densityCanvas, {
            type: 'bar',
            data: planetData,
            options: chartOptions
        });
    </script>


    <!-- jquery plugins here-->
    <script src="{{ asset('/public/js/jquery-1.12.1.min.js') }}"></script>
    <!-- popper js -->
    <script src="{{ asset('/public/js/popper.min.js') }}"></script>
    <!-- bootstrap js -->
    <script src="{{ asset('/public/js/bootstrap.min.js') }}"></script>
    <!-- magnific js -->
    <script src="{{ asset('/public/js/jquery.magnific-popup.js') }}"></script>
    <!-- swiper js -->
    <script src="{{ asset('/public/js/owl.carousel.min.js') }}"></script>
    <!-- masonry js -->
    <script src="{{ asset('/public/js/masonry.pkgd.js') }}"></script>
    <!-- masonry js -->
    <script src="{{ asset('/public/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('/public/js/gijgo.min.js') }}"></script>
    <!-- contact js -->
    <script src="{{ asset('/public/js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('/public/js/jquery.form.js') }}"></script>
    <script src="{{ asset('/public/js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('/public/js/mail-script.js') }}"></script>
    <script src="{{ asset('/public/js/contact.js') }}"></script>
    <!-- custom js -->
    <script src="{{ asset('/public/js/custom.js') }}"></script>



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

</body>



</html>