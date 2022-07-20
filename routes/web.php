<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\BusController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\SearchController;
use App\Models\Bus;

// page ya kwanza ku load system ikifunguka
Route::get('/', function () {
    return view('outside.splash');
});

// the landing page Route here
Route::get('/landing', function () {
    return view('outside.landing');
});

// Route to home page here
Route::get('/home', function () {
    return view('common.home');
});

// list of all busses here
Route::get('/bus_listing', function () {
    return view('common.bus_listing');
});


// ticket route here
Route::get('/your_ticket', function () {
    return view('common.ticket');
});

// payment route here
Route::get('/payment', function () {
    return view('common.payment');
});

// Checkout
Route::get('/checkout', function () {
    return view('common.checkout');
});

// login page here
Route::get('/login', function () {
    return view('outside.login');
});

// admin dashboard route here
Route::get('/admin_dashboard', function () {
    return view('admin.dashboard');
});

// Add new Bus here
Route::get('/add_bus', function () {
    return view('admin.add_bus');
});

// Busses List here
Route::get('/bus_list', function () {
    return view('admin.bus_list');
});

// List of Agents Here
Route::get('/agents_list', function () {
    return view('admin.agents_list');
});

// All Bookings here
Route::get('/bookings', function () {
    return view('admin.bookings');
});

// Add new Company here
Route::get('/add_company', function () {
    return view('admin.add_company');
});

// Route to transactions made
Route::get('/transactions', function () {
    return view('admin.transactions');
});



// Invoices routes here
Route::get('/invoices', function () {
    return view('admin.invoices');
});

// Admins login page here
Route::get('/admin', function () {
    return view('outside.admins');
});

// Adding new Agent here
Route::post('/new_agent',[AgentController::class,'addNewAgent']);

// Add new Bus Here
Route::post('/new_bus',[BusController::class,'addNewBus']);

// Add Company to Database
Route::post('/new_company',[CompanyController::class,'addCompany']);

// Send text mail
// Route::get('/send',[CompanyController::class,'mail']);

// user logging in hre
Route::post('/admins_login',[LoginController::class,'loginUsers']);

// got to add Agent
Route::get('/add_agent',[AgentController::class,'goAdAgent']);

// go to Add routes here
Route::get('/bus_route',[BusController::class,'goAddRoutes']);

// add Route here
Route::post('/new_route',[BusController::class,'newRoute']);

// Searching here
Route::post('/search',[SearchController::class,'searching']);

// Single Bus here
Route::get('/single_bus/{id}',[SearchController::class,'singleBus']);

// Seat Selected
Route::get('/select_seat/{id}',[SearchController::class,'selectSeat']);

// user data for booking
Route::post('/user_data/{id}',[BookingController::class,'userData']);

// Bus routes here
Route::get('/routes_available', function () {
    return view('admin.bus_routes');
});

// List of companies here
Route::get('/companies', function () {
    return view('admin.companies');
});