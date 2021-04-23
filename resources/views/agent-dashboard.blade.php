@extends('layouts.agent')

@section('title', 'Agent Dashboard' . ' | ' . env('APP_NAME'))

@section('content')
<div class="col-md-9">
    <div class="dasboard_right_panel">
        <div class="row">
            <div class="col-sm-12">
                @if($errors)
                {!!$errors->first()!!}
                @endif
            </div>
        </div>
        <div class="row">

            <div class="col-md-4">
                <div class="vendor_table_sec vendor_table_sec_dash mt-3">
                    <div class="dasboard_right_penel_top_heading">
                        <h1>Wallet</h1>
                        <img src="{{asset('public/img/wallet.svg')}}" /><span>₹ {!!$balance!!}</span>
                    </div>

                </div>
            </div>
            <div class="col-md-4">
                <div class="vendor_table_sec vendor_table_sec_dash mt-3">
                    <div class="dasboard_right_penel_top_heading">
                        <h1>Add Balance <span>in to their Wallet</span></h1>
                        <button onclick="document.getElementById('id01').style.display='block'"><img src="{{asset('public/img/plus.svg')}}" /></button>
                    </div>

                </div>
            </div>
            <div class="col-md-12">
                <div class="vendor_table_sec" style="border-radius: 25px;padding: 20px 40px;box-shadow: 0 0 9px #00000014;">
                    <div class="dasboard_right_penel_top_heading seller_dasboard_right_penel_top_heading">
                        <h1 style="border-bottom: 2px solid #EBF2F7;">Sales Overview</h1>
                    </div>
                    <canvas id="densityChart" width="600" height="250"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection