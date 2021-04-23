@extends('layouts.master')

@section('title', 'About Us' . ' | ' . env('APP_NAME'))

@section('content')
<!--top place start-->
<section class="section_padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6">
                <div class="section_tittle section_tittle_top text-center">
                    <h2>About <span>Us</span></h2>
                </div>
            </div>
        </div>

    </div>
</section>
<!--top place end-->




<section class="">
    <div class="container">
        <div class="row">
            <div class="col-md-7 ">
                <h4>SKIEZ TRAVELS AND LOGISTICS PVT LTD</h4>

                <p class="mt-3">Skiez Travels and Logistics Pvt Ltd is an active company having its office in New
                    Delhi. The company represents international airlines as their General Sales Agents in India.
                    Beginning with its first exclusive representation agreement with Mahan Airways in 2020.</p>

                <p>Skiez Travels and Logistics Pvt. Ltd services are committed to providing its partners with a
                    product and service that is consistently excellent, professional, innovative and customer-driven
                    in order to ensure their successful entry into and continued growth in global markets.In terms
                    of the airlines werepresent, our company focuses on analysing the business, identifying untapped
                    markets and promoting the airline as a tourist destination by selling packages. Through powerful
                    marketing tools and customized development strategies, its experienced and specialized
                    executives work towards strengthening the competitiveness of the company it represents whilst
                    its experienced sales teams promotes airline servicesby maintaining daily contact with all
                    travel agencies and transportation agencies in India with the objective of dynamically
                    increasing sales.</p>
            </div>

            <div class="col-md-5 ">
                <img src="{{asset('/public/img/about_right.png')}}" />
            </div>

            <div class="col-md-12">
                <p>As a GSA we possess a modern infrastructure as well as all the means to provide for airlines’
                    smooth running and presence in India, including online booking and ticketing departments,
                    accounting and financial services, specialized legal and IT departments. Weendeavour to meet the
                    individual needs of each company and maintain high level of its services whilst keeping its
                    international image intact.</p>
            </div>
        </div>
    </div>
</section>

<section class="abour_subs">
    <div class="container">
        <div class="row">
            <div class="col-md-7 ">
                <img src="{{asset('/public/img/always_help.jfif')}}" style="width: 90% !important;" />
            </div>

            <div class="col-md-5 pt-4">
                <h1 class="mt-5"><strong class="mb-5">Vision</strong></h1>

                <p class="mt-3">To be the number one General Sales Agent and provide the finest passenger handling,
                    airport supervision services and cargo sales in India through our professional and highly
                    motivated personnel, guaranteeing the fulfilment of all the needs of our clients and
                    shareholders.</p>
            </div>

        </div>
    </div>
</section>

@endsection