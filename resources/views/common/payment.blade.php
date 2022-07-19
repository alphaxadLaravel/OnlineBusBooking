@extends('layouts.app')
@section('title', 'Payments - Online Bus Booking System')

@section('pages')

    <div class="payment padding-bt">
        <div class="osahan-header-nav shadow-sm p-3 d-flex align-items-center bg-danger">
            <h5 class="font-weight-normal mb-0 text-white">
                <a class="text-danger mr-3" href="/select_seat"><i class="icofont-rounded-left"></i></a>
                Payment
            </h5>
            <div class="ml-auto d-flex align-items-center">
                <a class="toggle osahan-toggle h4 m-0 text-white ml-auto" href="#"><i
                        class="icofont-navigation-menu"></i></a>
            </div>
        </div>

        <div class="your-ticket pt-2">
            <div class="p-3">
                <div class="bg-white rounded-1 shadow-sm p-2 mb-2">
                    <div class="row mx-0 px-1">
                        <div class="col-6 p-0">
                            <small class="text-muted mb-1 f-10 pr-1">GOING FROM</small>
                            <p class="small mb-0"> DAR ES SALAAM</p>
                        </div>
                        <div class="col-6 p-0">
                            <small class="text-muted mb-1 f-10 pr-1">GOING TO</small>
                            <p class="small mb-0"> TANGA</p>
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded-1 shadow-sm p-2 mb-2 w-100">
                    <div class="row mx-0 px-1">
                        <div class="col-12 p-0 mb-2">
                            <small class="text-danger mb-1 f-10 pr-1">PICKUP FROM</small>
                            <p class="small mb-0 l-hght-14"> Magufuri Bus Terminal, - 6:15 AM</p>
                        </div>
                        <div class="col-12 p-0">
                            <small class="text-danger mb-1 f-10 pr-1">DROPPING AT</small>
                            <p class="small mb-0 l-hght-14">Manza Bay, Tanga - 4: 00 PM</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="list_item d-flex col-12 m-0 p-3 bg-white shadow-sm rounded-1 shadow-sm">
            <div class="d-flex w-100">
                <div class="bus_details w-100">
                    <p class="mb-2 l-hght-18 font-weight-bold">Traveller’s Info.</p>
                    <div class="l-hght-10 d-flex align-items-center my-2">
                        <small class="text-muted mb-0 pr-1">Passenger</small>
                        <p class="small mb-0 ml-auto l-hght-14"> ATHUMANI RAMADHANI</p>
                    </div>
                    <div class="l-hght-10 d-flex align-items-center my-2">
                        <small class="text-muted mb-0 pr-1">Ticket Number</small>
                        <p class="small mb-0 ml-auto l-hght-14"> 1313</p>
                    </div>
                    <div class="l-hght-10 d-flex align-items-center my-2">
                        <small class="text-muted mb-0 pr-1">Seat No</small>
                        <p class="small mb-0 ml-auto l-hght-14"> C1</p>
                    </div>
                    <div class="l-hght-10 d-flex align-items-center mt-3">
                        <p class="mb-0 pr-1 font-weight-bold">Amount To Be Paid</p>
                        <p class="mb-0 ml-auto l-hght-14 text-danger font-weight-bold">Tsh. 30000</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="payment-borrad shadow-sm bg-white mt-2 rounded-1">
            <div class="border-bottom p-3">
                <div class="w-100 mastercard custom-control custom-radio custom-control-inline mr-0">
                    <input type="radio" id="customRadiomaster1" name="customRadiocard1" class="custom-control-input"
                        checked>
                    <label class="custom-control-label small w-100" for="customRadiomaster1">
                        <div class="">
                            <p class="mb-0 text-dark">Airtel Money</p>
                            <small class="text-muted">Pay from Airtel Money account</small>
                        </div>
                    </label>
                </div>
            </div>
            <div class="p-3">
                <div class="w-100 visa custom-control custom-radio custom-control-inline mr-0">
                    <input type="radio" id="customRadiovisa1" name="customRadiocard1" class="custom-control-input">
                    <label class="custom-control-label small w-100" for="customRadiovisa1">

                        <div class="">
                            <p class="mb-0 text-dark">M-pesa</p>
                            <small class="text-muted">Pay from visa account using Mpesa payment </small>
                        </div>

                    </label>
                </div>
            </div>
        </div>
    </div>

    <div class="fixed-bottom view-seatbt p-3">
        <a href="/checkout" class="btn btn-danger btn-block d-flex align-items-center osahanbus-btn rounded-1">
            <span class="text-left l-hght-14">
                TOTAL Tsh. 30000<br>
                <small class="f-10 text-white-50">Seats Selected : 1</small>
            </span>
            <span class="font-weight-bold ml-auto">CONFIRM</span>
        </a>
    </div>
@endsection
