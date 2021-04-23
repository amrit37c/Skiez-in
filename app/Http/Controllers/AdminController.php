<?php

namespace App\Http\Controllers;

use App\Admin;
use App\AgentBalance;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\ApisRequest;
use App\Orders;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use DB;

class AdminController extends BaseController
{

    public function index()
    {
        return view("admin.login")->with('error', '');
    }

    public function login(Request $request)
    {
        $result = Admin::where([
            ["username", '=', $request->input('username')], ['password', '=', $request->password]
        ])->get()->toArray();
        if (count($result) == 0) {
            $request->session()->put('adminDetails', $result);
            $request->session()->put('userType', 'admin');
            $request->session()->put('user_id', $result['id']);
            $request->session()->put('username', $result['username']);
            return view('admin.login')->with('error', 'Invalid Credentials');
        } else {
            return redirect()->route('adminDashboard');
        }
    }

    public function logout(Request $request)
    {
        $request->session()->forget('adminDetails');
        $request->session()->forget('userType');
        $request->session()->forget('user_id');
        $request->session()->forget('username');
        return redirect()->route('adminLogin');;
    }

    public function dashboard(Request $request)
    {
        return view('admin.home');
    }

    public function agentList(Request $request)
    {
        $result = User::where([
            ['user_type', '=', '2']
        ])->get()->toArray();
        return view('admin.usersList')->with(["userslist" => $result, "message" => ""]);
    }

    public function userList(Request $request)
    {
        $result = User::where([
            ['user_type', '=', '1']
        ])->get()->toArray();
        return view('admin.usersList')->with(["userslist" => $result, "message" => ""]);
    }

    public function updateUser(Request $request)
    {
        $data = $request->input();
        unset($data['_token']);
        $update = User::where('user_id', $data['user_id'])->update($data);
        if (!$update) {
            return redirect()->back()->withErrors(["message" => "<p class='alert alert-danger'>User Status updated Successfully</p>"]);
        } else {
            return redirect()->back()->withErrors(["message" => "<p class='alert alert-success'>User Status updated Successfully</p>"]);
        }
    }


    public function balanceRequests(Request $request)
    {
        $result = AgentBalance::where([
            ['order_status', '=', 'Requested']
        ])
            ->orWhere('order_status', 'Pending')
            ->join("users", 'users.user_id', '=', 'tbl_agent_blnc.user_id')
            ->get()->toArray();

        $history = AgentBalance::where([
            ['order_status', '!=', 'Pending'],
            ['txn_type', '=', 'Credit']
        ])
            ->orWhere([
                ['order_status', '!=', 'Requested'],
                ['txn_type', '=', 'Credit']
            ])
            ->join("users", 'users.user_id', '=', 'tbl_agent_blnc.user_id')
            ->get()->toArray();
        return view('admin.balance-requests')->with(array('blncRequests' => $result, 'history' => $history));
    }

    public function approveBalance(Request $request)
    {
        $agntBlnc = new AgentBalance();
        $result = $agntBlnc::where("id", $request->input('order_id'))->update(array("order_status" => $request->input('status')));
        if ($result) {
            return response()->json([
                'status'    =>      true,
                'message'   =>      'Balance updated',
            ]);
        } else {
            return response()->json([
                'status'    =>      false,
                'message'   =>      'Server error'
            ]);
        }
    }

    public function ordersHistory(Request $request)
    {
        return view('agent-orders-history');
    }

    public function editAgent(Request $request)
    {
        $agentDetails = User::where('user_id', $request->agent_id)->get()->toArray();
        return view('admin.edit-agent')->with(array('user_details' => $agentDetails[0], 'user_id' => $request->user_id));
    }

    public function updateAgent(Request $request)
    {
        $data = $request->input();
        unset($data['_token']);
        $updateAgent = User::where('user_id', $request->agent_id)->update($data);
        if (!$updateAgent) {
            return redirect()->route('editAgent', $request->agent_id)->withErrors(array('msg' => "<p class='alert alert-danger'>Server error, please try again later.</p>"));
        } else {
            return redirect()->route('editAgent', $request->agent_id)->withErrors(array('msg' => "<p class='alert alert-success'>User Update Successfully</p>"));
        }
    }

    public function bookedTickets(Request $request)
    {
        $offset = $request->input('page') ? ($request->input('page') * 20) : 0;
        $limit = env('TABLE_LIMITS');
        $orders = Orders::join('users', 'users.user_id', '=', 'orders.user_id')
            ->offset($offset)
            ->limit($limit)
            ->get()
            ->toArray();
        return view("admin.tickets-history")->with(array("ticketsHistory" => $orders));
    }
}
