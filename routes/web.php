<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'HomeController@index')->name('home');

Route::get('/about-us', function () {
    return view("about");
})->name("about");

Route::get("/flight-booking", function () {
    return view("flights-booking");
})->name("flightBooking");

Route::get("/hotel-booking", function () {
    return view("hotel-booking");
})->name("hotelBooking");

Route::get("/packages", function () {
    return view("flights-booking");
})->name("packages");

Route::get("/search-flights", "HomeController@flightSearch")->name("searchFlight");

Route::get("/test", 'HomeController@testAPi');

Route::get("/agent-dashboard", "AgentController@index")->name("agentDashboard");

Route::get('/orders-history', "AgentController@ordersHistory")->name('AgentOrders');

Route::get("/login", "HomeController@Login")->name("login");

Route::get("/privacy-policy", function () {
    return view("privacy");
})->name('privacy');

Route::get("/book-flight", "HomeController@bookFlightGet")->name("bookFlight");

Route::post("/book-flight", "HomeController@bookFlight")->name("bookFlight");

Route::get("/terms-and-conditions", function () {
    return view("termsConditions");
})->name("termsConditions");

Route::get("logout", "HomeController@logout")->name('logout');

Route::post("generateOtp", "HomeController@generateOtp")->name('generateOtp');
Route::post("verifyOtp", "HomeController@verifyOtp")->name('verifyOtp');

Route::post("review-itinerary", "HomeController@reviewBooking")->name("reviewBooking");

Route::get("review-itinerary", "HomeController@directAccessNotAllowed");

Route::post("/bookTicket", "HomeController@bookTicket")->name('bookTicket');

Route::get("dashboard", "HomeController@dashboard")->name('dashboard');

Route::get("searchBooking", "HomeController@searchBooking")->name("searchBooking");

Route::post("/request-balance", "AgentController@requestBalance")->name('requestBalance');

Route::get("/refund-policy", function(){
    return view('refund-policy');
})->name('refundPolicy');

Route::get("/testEmail", "HomeController@sendEmail");


//----------Admin Routes------------//
Route::prefix('admin')->group(function () {
    Route::get('/', 'AdminController@index')->name('adminLogin');
    Route::post("/", 'AdminController@login')->name('adminLogin');

    Route::get('dashboard', 'AdminController@dashboard')->name('adminDashboard');

    Route::get('logout', 'AdminController@logout')->name('adminLogout');

    Route::get('/agents-list', 'AdminController@agentList')->name('adminAgentsList');

    Route::prefix('/agent')->group(function () {
        Route::get('/{agent_id}', "AdminController@editAgent")->name("editAgent");
        Route::post('/{agent_id}', 'AdminController@updateAgent')->name('updateAgent');
    });

    Route::get('/users-list', 'AdminController@userList')->name('adminUsersList');

    Route::post('update-user', 'AdminController@updateUser')->name('updateUser');

    Route::get('/balance-requests', 'AdminController@balanceRequests')->name('blncRqsts');

    Route::post("/approve-balance", 'AdminController@approveBalance')->name('approveBalance');

    Route::get('/booked-tickets', 'AdminController@bookedTickets')->name('ticketHistory');
});
//---------------------//