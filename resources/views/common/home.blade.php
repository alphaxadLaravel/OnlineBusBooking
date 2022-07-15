@extends('layouts.app')
@section('title', 'Home page - Online Bus Booking System')

@section('pages')
<div class="osahan-verification padding-bt">
    <div class="p-3 shadow bg-danger danger-nav osahan-home-header">
        <div class="font-weight-normal mb-0 d-flex align-items-center">
            <img src="img/logo.png" class="img-fluid osahan-nav-logo">
            <div class="ml-auto d-flex align-items-center">

                <a class="toggle osahan-toggle h4 m-0 text-white ml-auto" href="#"><i
                        class="icofont-navigation-menu"></i></a>
            </div>
        </div>
    </div>
    <div class="bg-danger px-3 pb-3">
        <div class="bg-white rounded-1 p-3">
            <div class="form-group border-bottom pb-2">
                <label for="exampleFormControlSelect1" class="mb-2"><span
                        class="icofont-search-map text-danger"></span> From</label><br>
                <select class="js-example-basic-single form-control" name="state">
                    <option value="Amritsar">Dar es Salaam</option>
                    <option value="Agra">Morogoro</option>
                    <option value="Ahmedabad">Mwanza</option>
                    <option value="Bareilly">Tanga</option>
                    <option value="Bathinda">Mbeya</option>
                    <option value="Bhiwani">Arusha</option>
                </select>
            </div>
            <div class="form-group border-bottom pb-2">
                <label for="exampleFormControlSelect1" class="mb-2"><span
                        class="icofont-google-map text-danger"></span> To</label><br>
                <select class="js-example-basic-single form-control" name="state">
                    <option value="Amritsar">Dar es Salaam</option>
                    <option value="Agra">Morogoro</option>
                    <option value="Ahmedabad">Mwanza</option>
                    <option value="Bareilly">Tanga</option>
                    <option value="Bathinda">Mbeya</option>
                    <option value="Bhiwani">Arusha</option>
                </select>
            </div>
            <div class="form-group border-bottom pb-1">
                <label class="mb-2"><span class="icofont-ui-calendar text-danger"></span> Date</label><br>
                <input name="date" class="form-control border-0 p-0" type="date">
            </div>
            <a href="/bus_listing"><button class="btn btn-danger btn-block rounded-1">Search</button></a>
        </div>
    </div>
    <div class="p-3 bg-warning">
        <div class="row m-0">
            <div class="col-6 py-1 pr-1 pl-0">
                <div class="p-3 bg-white shadow-sm rounded-1">
                    <img class="img-fluid" src="img/safe-vehicles.svg" alt="">
                    <p class="mb-0 mt-4 font-weight-bold">Safe and Hygenic<br>Vehicles</p>
                </div>
            </div>
            <div class="col-6 py-1 pl-1 pr-0">
                <div class="p-3 bg-white shadow-sm rounded-1">
                    <img class="img-fluid" src="img/customer-support.svg" alt="">
                    <p class="mb-0 mt-4 font-weight-bold">Best Customer<br>Support</p>
                </div>
            </div>
            <div class="col-6 py-1 pr-1 pl-0">
                <div class="p-3 bg-white shadow-sm rounded-1">
                    <img class="img-fluid" src="img/live-tracking.svg" alt="">
                    <p class="mb-0 mt-4 font-weight-bold">Live Track your<br>Journey</p>
                </div>
            </div>
            <div class="col-6 py-1 pl-1 pr-0">
                <div class="p-3 bg-white shadow-sm rounded-1">
                    <img class="img-fluid" src="img/verified-drivers.svg" alt="">
                    <p class="mb-0 mt-4 font-weight-bold">Verified Drivers<br>and Vehicles</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection