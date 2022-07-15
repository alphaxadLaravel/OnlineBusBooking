<?php

use Illuminate\Support\Facades\Route;



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

// Single Bus here
Route::get('/single_bus', function () {
    return view('common.single_bus');
});

// Seat Selected
Route::get('/select_seat', function () {
    return view('common.select_seat');
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

// Add new Agent
Route::get('/add_agent', function () {
    return view('admin.add_agent');
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