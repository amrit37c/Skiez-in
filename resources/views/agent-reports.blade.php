@extends('layouts.agent')

@section('title', 'Agent Dashboard' . ' | ' . env('APP_NAME'))

@section('content')
<div class="col-md-9">
    <div class="dasboard_right_panel">
        <div class="row">
            <div class="col-md-12">
                <div
                    class="dasboard_right_penel_top_heading vendor_table_sec seller_topBar_heading vendor_table_sec mt-3">
                    <h1>Reports</h1>
                </div>
            </div>

            <div class="col-md-8"></div>

            <div class="col-md-2">
                <div class="vendor_table_sec mt-1">
                    <div class="custom_vendor_input_sec seller_custom_vendor_input_sec">
                        <div class="row">

                            <div class="col-md-12">
                                <select name="" id="" style="border: none; pad">
                                    <option value="">Monthly</option>
                                    <option value="">Yearly</option>
                                    <option value="">Weekly</option>
                                </select>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-md-2">
                <div class="vendor_table_sec mt-1">
                    <div class="custom_vendor_input_sec seller_custom_vendor_input_sec">
                        <div class="row">

                            <div class="col-md-12 xport_xcel">
                                <button><img src="img/excel.svg" /> EXPORT</button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>







            <div class="col-md-12">
                <div class="vendor_table_sec mt-3">
                    <table class="table agent_ordr_hstry_table">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">Report</th>
                                <th scope="col">Ticket ID</th>
                                <th scope="col">Customer Details</th>
                                <th scope="col">From- To / Passenger</th>
                                <th scope="col">Payment</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>18-Nov-2020 &nbsp;&nbsp; 06:55 PM</td>
                                <td>59M3K9865M</td>
                                <td>Deepak Kundra,kundra45@ gmai.....<br>9814652162</td>
                                <td>Chandigarh to Delhi,Via: AirIndia<br>2 Adults</td>
                                <td class="prize_table">45000.00</td>
                                <td class="xport_xcel2"><button><img src="img/excel.svg" /> EXPORT</button>
                                </td>
                            </tr>

                            <tr>
                                <td>18-Nov-2020 &nbsp;&nbsp; 06:55 PM</td>
                                <td>59M3K9865M</td>
                                <td>Deepak Kundra,kundra45@ gmai.....<br>9814652162</td>
                                <td>Chandigarh to Delhi,Via: AirIndia<br>2 Adults</td>
                                <td class="prize_table">45000.00</td>
                                <td class="xport_xcel2"><button><img src="img/excel.svg" /> EXPORT</button>
                                </td>
                            </tr>

                            <tr>
                                <td>18-Nov-2020 &nbsp;&nbsp; 06:55 PM</td>
                                <td>59M3K9865M</td>
                                <td>Deepak Kundra,kundra45@ gmai.....<br>9814652162</td>
                                <td>Chandigarh to Delhi,Via: AirIndia<br>2 Adults</td>
                                <td class="prize_table">45000.00</td>
                                <td class="xport_xcel2"><button><img src="img/excel.svg" /> EXPORT</button>
                                </td>
                            </tr>

                            <tr>
                                <td>18-Nov-2020 &nbsp;&nbsp; 06:55 PM</td>
                                <td>59M3K9865M</td>
                                <td>Deepak Kundra,kundra45@ gmai.....<br>9814652162</td>
                                <td>Chandigarh to Delhi,Via: AirIndia<br>2 Adults</td>
                                <td class="prize_table">45000.00</td>
                                <td class="xport_xcel2"><button><img src="img/excel.svg" /> EXPORT</button>
                                </td>
                            </tr>

                            <tr>
                                <td>18-Nov-2020 &nbsp;&nbsp; 06:55 PM</td>
                                <td>59M3K9865M</td>
                                <td>Deepak Kundra,kundra45@ gmai.....<br>9814652162</td>
                                <td>Chandigarh to Delhi,Via: AirIndia<br>2 Adults</td>
                                <td class="prize_table">45000.00</td>
                                <td class="xport_xcel2"><button><img src="img/excel.svg" /> EXPORT</button>
                                </td>
                            </tr>

                            <tr>
                                <td>18-Nov-2020 &nbsp;&nbsp; 06:55 PM</td>
                                <td>59M3K9865M</td>
                                <td>Deepak Kundra,kundra45@ gmai.....<br>9814652162</td>
                                <td>Chandigarh to Delhi,Via: AirIndia<br>2 Adults</td>
                                <td class="prize_table">45000.00</td>
                                <td class="xport_xcel2"><button><img src="img/excel.svg" /> EXPORT</button>
                                </td>
                            </tr>

                            <tr>
                                <td>18-Nov-2020 &nbsp;&nbsp; 06:55 PM</td>
                                <td>59M3K9865M</td>
                                <td>Deepak Kundra,kundra45@ gmai.....<br>9814652162</td>
                                <td>Chandigarh to Delhi,Via: AirIndia<br>2 Adults</td>
                                <td class="prize_table">45000.00</td>
                                <td class="xport_xcel2"><button><img src="img/excel.svg" /> EXPORT</button>
                                </td>
                            </tr>

                        </tbody>
                    </table>


                    <div class="seller_btm_pagination">
                        <nav aria-label="Page navigation example" class="float-right mt-4 mt-4">
                            <ul class="pagination">
                                <li class="page-item pagination_seller_nav">
                                    <a class="page-link" href="#" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                </li>
                                <li class="page-item"><a class="page-link active_pagination" href="#">1</a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">4</a></li>
                                <li class="page-item"><a class="page-link" href="#">5</a></li>
                                <li class="page-item pagination_seller_nav">
                                    <a class="page-link" href="#" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection