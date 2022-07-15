@extends('layouts.app')
@section('title', 'All Buses - Online Bus Booking System')

@section('pages')
    <div class="my-ticket padding-bt">
        <div class="osahan-header-nav shadow-sm p-3 d-flex align-items-center bg-danger">
            <h5 class="font-weight-normal mb-0 text-white">
                <a class="text-danger mr-3" href="home.html"><i class="icofont-rounded-left"></i></a>
                Your Bookings
            </h5>
            <div class="ml-auto d-flex align-items-center">
                <a class="toggle osahan-toggle h4 m-0 text-white ml-auto" href="#"><i
                        class="icofont-navigation-menu"></i></a>
            </div>
        </div>

        <div class="your-ticket border-top row m-0 p-3">

            <div class="bg-white rounded-1 shadow-sm p-3 mb-3 w-100">
                <a href="your-ticket.html">
                    <div class="d-flex align-items-center mb-2">
                        <small class="text-muted">Abood Bus</small>
                        <small class="text-success ml-auto f-10">CONFIRMED</small>
                    </div>
                    <h6 class="mb-3 l-hght-18 font-weight-bold text-dark">Mustapha Daffa TIN 9002- 2022 Certified</h6>
                </a>
                <div class="row mx-0 mb-3">
                    <div class="col-6 p-0">
                        <small class="text-muted mb-1 f-10 pr-1">GOING FROM</small>
                        <p class="small mb-0 l-hght-14"> DAR ES SALAAM</p>
                    </div>
                    <div class="col-6 p-0">
                        <small class="text-muted mb-1 f-10 pr-1">TO</small>
                        <p class="small mb-0 l-hght-14"> TANGA</p>
                    </div>
                </div>
                <div class="row mx-0">
                    <div class="col-6 p-0">
                        <small class="text-muted mb-1 f-10 pr-1">DATE OF JOURNEY</small>
                        <p class="small mb-0 l-hght-14"> 12 June, 2022</p>
                    </div>
                    <div class="col-6 p-0">
                        <small class="text-muted mb-1 f-10 pr-1">YOU RATED</small>
                        <p class="small mb-0 l-hght-14"> <a class="text-success font-weight-bold"
                                href="customer-feedback.html">RATE NOW</a></p>
                    </div>
                </div>
            </div>
            <div class="bg-white rounded-1 shadow-sm p-3 w-100">
                <a href="your-ticket.html">
                    <div class="d-flex align-items-center mb-2">
                        <small class="text-muted">BM Luxury Coach</small>
                        <small class="text-success ml-auto f-10">CONFIRMED</small>
                    </div>
                    <h6 class="mb-3 l-hght-18 font-weight-bold text-dark">Mustapha Daffa TIN 9002- 2022 Certified</h6>
                </a>
                <div class="row mx-0 mb-3">
                    <div class="col-6 p-0">
                        <small class="text-muted mb-1 f-10 pr-1">GOING FROM</small>
                        <p class="small mb-0 l-hght-14">MBEYA</p>
                    </div>
                    <div class="col-6 p-0">
                        <small class="text-muted mb-1 f-10 pr-1">TO</small>
                        <p class="small mb-0 l-hght-14"> ARUSHA</p>
                    </div>
                </div>
                <div class="row mx-0">
                    <div class="col-6 p-0">
                        <small class="text-muted mb-1 f-10 pr-1">DATE OF JOURNEY</small>
                        <p class="small mb-0 l-hght-14"> 21 May, 2022</p>
                    </div>
                    <div class="col-6 p-0">
                        <small class="text-muted mb-1 f-10 pr-1">YOU RATED</small>
                        <p class="small mb-0 l-hght-14"><span class="icofont-star text-warning"></span> 4.5</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
