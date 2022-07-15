@extends('layouts.app')
@section('title', 'Checkout - Online Bus Booking System')

@section('pages')

<div class="payment padding-bt">
    <div class="osahan-header-nav shadow-sm p-3 d-flex align-items-center bg-danger">
        <h5 class="font-weight-normal mb-0 text-white">
            <a class="text-danger mr-3" href="payment.html"><i class="icofont-rounded-left"></i></a>
            Payment
        </h5>
        <div class="ml-auto d-flex align-items-center">
            <a class="toggle osahan-toggle h4 m-0 text-white ml-auto" href="#"><i
                    class="icofont-navigation-menu"></i></a>
        </div>
    </div>

    <div class="your-ticket p-3">
        <div class="list_item d-flex rounded-1 col-12 m-0 bg-white shadow-sm mb-3">
            <div class="pt-3 d-flex mb-auto">
                <img src="img/qr-code.png" class="img-fluid osahan-qr">
            </div>
            <div class="pl-3 py-3 d-flex w-100">
                <div class="bus_details w-100">
                    <p class="mb-2 l-hght-18 font-weight-bold">Abood Bus Ticket</p>
                    <div class="l-hght-10 d-flex align-items-center my-2">
                        <small class="text-muted mb-0 pr-1">Journey Start</small>
                        <p class="small mb-0 l-hght-14 ml-auto">05May, 12:00am</p>
                    </div>
                    <div class="l-hght-10 d-flex align-items-center my-2">
                        <small class="text-muted mb-0 pr-1">From - To</small>
                        <p class="small mb-0 l-hght-14 ml-auto">Dar es Salaam to Tanga</p>
                    </div>
                    <div class="l-hght-10 d-flex align-items-center my-2">
                        <small class="text-muted mb-0 pr-1">Pickup Point</small>
                        <p class="small mb-0 l-hght-14 ml-auto">Magufuri Bus Terminal (6:45)</p>
                    </div>
                    <div class="l-hght-10 d-flex align-items-center mt-2">
                        <small class="text-muted mb-0 pr-1">Seat No.</small>
                        <p class="small mb-0 l-hght-14 ml-auto">C1</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="fixed-bottom payment-borrad shadow bg-white m-3 rounded-1 p-3">
    <div class="d-flex small">
        <p>Total Payable Tsh</p>
        <p class="ml-auto font-weight-bold text-danger">Tsh. 30000</p>
    </div>
    <div class="d-flex small">
        <form class="w-100">
            <div class="form-group mb-2">
                <div class="d-flex align-items-start">
                    <label for="exampleInputEmail1" class="mb-1 small text-muted">Card Number</label>
                    <img src="img/master-card.png" class="img-fluid ml-auto rounded">
                </div>
                <input type="number" class="form-control form-control-sm" placeholder="1234 5678 9145 4589"
                    id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="form-group row mb-3">
                <div class="col-8">
                    <label for="exampleInputmondate1" class="mb-1 small text-muted">Month / Date</label>
                    <div class="d-flex border rounded">
                        <input type="number" class="form-control text-center form-control-sm border-0 px-1"
                            placeholder="DD" id="exampleInputmondate1" aria-describedby="mondateHelp">
                        <span class="pt-2">/</span>
                        <input type="number" class="form-control text-center form-control-sm border-0 px-1"
                            placeholder="MM" id="exampleInputmondate1" aria-describedby="mondateHelp">
                    </div>
                </div>
                <div class="col-4">
                    <label for="exampleInputcvv1" class="mb-1 small text-muted">CVV</label>
                    <input type="number" class="form-control text-center form-control-sm" placeholder="000"
                        id="exampleInputcvv1" aria-describedby="cvvHelp">
                </div>
            </div>
            <a href="#"><button type="button" class="btn btn-danger btn-block" data-toggle="modal"
                    data-target="#paymentModal">Pay</button></a>
        </form>
    </div>
</div>

<div class="modal fade" id="paymentModal" data-backdrop="static" tabindex="-1" data-keyboard="false">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content mx-4 rounded-2">
            <div class="modal-header d-none">
            </div>
            <div class="modal-body text-center py-4">
                <img src="img/valid.png" class="img-fluid mb-2">
                <h5 class="font-weight-normal">Payment Success!</h5>
                <p class="mb-4">The system is waiting for the<br>the ticket</p>
                <a href="/your_ticket" class="btn btn-sm btn-danger">Check Your Ticket</a>
            </div>
            <div class="modal-footer d-none">
            </div>
        </div>
    </div>
</div>
@endsection