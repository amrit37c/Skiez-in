<?php

namespace App\Http\Controllers;

use App\AgentBalance;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\ApisRequest;
use App\Orders;
use Illuminate\Http\Request;
use DB;

class AgentController extends BaseController
{

    public function index(Request $request)
    {
        $userId = $request->session()->get('user_id');
        $balance = AgentBalance::selectRaw("SUM(total_amount) as balance")
                    ->where('user_id', $userId)
                    ->where('order_status', 'Approved')
                    ->get()->toArray();
        return view("agent-dashboard")->with('balance', $balance[0]['balance']);
    }

    public function ordersHistory(Request $request){
        if(isset($_GET['order_type'])){
            // $orderType = array('order_type' => $_GET['order_type']);
            $result = Orders::where([
                ["user_id", '=', $request->session()->get('user_id')],
                ['order_type', '=', $_GET['order_type']]
            ])->get()->toArray();
        }else{
            $result = Orders::where([
                ["user_id", '=', $request->session()->get('user_id')]
            ])->get()->toArray();
        }
        return view('agent-orders-history')->with(["orders" => $result]);
    }

    public function requestBalance(Request $request){
        $blncRqst = new AgentBalance();
        $blncRqst->user_id =  $request->session()->get('user_id');
        $blncRqst->txn_type = "Credit";
        $blncRqst->total_amount = $request->input('amount');
        $blncRqst->order_id = uniqid();
        $blncRqst->order_status = "Requested";
        if($blncRqst->save()){
            return response()->json([
                'error'     =>  true,
                'message'   =>  'Balance will be updated soon',
            ], 200);
        }else{
            return response()->json([
                'error'     =>  true,
                'message'   =>  'Internal server error',
            ], 200);
        }
    }

}
