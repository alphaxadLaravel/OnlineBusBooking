@extends('layouts.app')
@section('title', 'Seat Selection - Online Bus Booking System')

@section('pages')
    <div class="seat-select padding-bt">
        <div class="osahan-header-nav shadow-sm p-3 d-flex align-items-center bg-danger">
            <h5 class="font-weight-normal mb-0 text-white">
                <a class="text-danger mr-3" href="bus-details.html"><i class="icofont-rounded-left"></i></a>
                Bus Seat Select
            </h5>
            <div class="ml-auto d-flex align-items-center">
                <a class="toggle osahan-toggle h4 m-0 text-white ml-auto" href="#"><i
                        class="icofont-navigation-menu"></i></a>
            </div>
        </div>

        @foreach ($single_bus as $bus)
            <div class="bg-white rounded-1 shadow-sm p-3 mb-3 w-100">
                <div class="row mx-0 mb-3">
                    <div class="col-6 p-0">
                        <small class="text-muted mb-1 f-10 pr-1">Wifi</small>
                        <p class="small mb-0 l-hght-14"> Access in the bus</p>
                    </div>
                    <div class="col-6 p-0">
                        <small class="text-muted mb-1 f-10 pr-1">AC</small>
                        <p class="small mb-0 l-hght-14"> Ac is available</p>
                    </div>
                </div>
                <div class="row mx-0 mb-3">
                    <div class="col-6 p-0">
                        <small class="text-muted mb-1 f-10 pr-1">Dinner / Lunch</small>
                        <p class="small mb-0 l-hght-14"> No</p>
                    </div>
                    <div class="col-6 p-0">
                        <small class="text-muted mb-1 f-10 pr-1">Safety Features</small>
                        <p class="small mb-0 l-hght-14"> Sanitizer, Masks</p>
                    </div>
                </div>
                <div class="row mx-0">
                    <div class="col-6 p-0">
                        <small class="text-muted mb-1 f-10 pr-1">Essentials</small>
                        <p class="small mb-0 l-hght-14"> Water</p>
                    </div>
                    <div class="col-6 p-0">
                        <small class="text-muted mb-1 f-10 pr-1">Snacks</small>
                        <p class="small mb-0 l-hght-14">Juice / Biscuits </p>
                    </div>
                </div>
            </div>

           @livewire('select-seat')
            <div class="list_item d-flex col-12 m-0 p-3 bg-white shadow-sm rounded-1 shadow-sm">
                <div class="d-flex w-100">
                    <div class="bus_details w-100 pl-3">
                        <p class="mb-2 l-hght-18 font-weight-bold">Please Provide Your Details.</p>
                        <div class="l-hght-10 my-2">
                            <label class="text-muted mb-2 pr-1">Fullname</label>
                            <input type="text" class="form-control mb-0 ml-auto l-hght-14">
                        </div>

                        <div class="l-hght-10  my-2">
                            <label class="text-muted mb-2 pr-1">Phone Number</label>
                            <input type="text" class="form-control mb-0 ml-auto l-hght-14">
                        </div>
                        <div class="l-hght-10 my-2">
                            <p class="mb-0 pr-1 text-muted mb-2 ">Email</p>
                            <input type="text" class="form-control mb-0 ml-auto l-hght-14">
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div class="fixed-bottom view-seatbt p-3">
        <a href="/payment" class="btn btn-danger btn-block d-flex align-items-center osahanbus-btn rounded-1">
            <span class="text-left l-hght-14">
                TOTAL TSh. 30000<br>
                <small class="f-10 text-white-50">Seats Selected : 1</small>
            </span>
            <span class="font-weight-bold ml-auto">NEXT</span>
        </a>
    </div>
@endsection
