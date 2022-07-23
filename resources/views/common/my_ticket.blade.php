@extends('layouts.geust')
@section('title', 'Bus Details - Online Bus Booking System')

@section('geust')
    <div class="your-ticket border-top row m-0 p-3">
        @if (Session::has('booked'))
            <div class="alert alert-success alert-dismissible" role="alert">
                Booking made Successfully!
            </div>
        @endif

        @if (session()->get('user')['role'] == 'Agent')

            @foreach ($agent_ticket as $ticket)
                <div class="bg-white rounded-1 shadow-sm p-3 mb-3 w-100">
                    <a href="your-ticket.html">
                        <div class="d-flex align-items-center mb-2">
                            <small class="text-muted">{{ $ticket->bus->bus }} - </small>
                            <small class="text-danger">{{ $ticket->agent->fullname }}</small>
                            <small class="text-success ml-auto f-10"> <span class="text-danger">{{ $ticket->ticket }}</span> -
                                CONFIRMED</small>
                        </div>
                        <h6 class="mb-3 l-hght-18 font-weight-bold text-dark">{{ $ticket->traveller->fullname }}</h6>
                    </a>
                    <div class="row mx-0 mb-3">
                        <div class="col-6 p-0">
                            <small class="text-muted mb-1 f-10 pr-1">Route</small>
                            <p class="small mb-0 l-hght-14"> {{ $ticket->from }} - {{ $ticket->to }} </p>
                        </div>
                        <div class="col-6 p-0">
                            <small class="text-muted mb-1 f-10 pr-1">Phone</small>
                            <p class="small mb-0 l-hght-14"> {{ $ticket->traveller->phone }}</p>
                        </div>
                    </div>
                    <div class="row mx-0">
                        <div class="col-6 p-0">
                            <small class="text-muted mb-1 f-10 pr-1">DATE </small>
                            <p class="small mb-0 l-hght-14"> {{ $ticket->date }}</p>
                        </div>
                        <div class="col-6 p-0">
                            <small class="text-muted mb-1 f-10 pr-1">Price</small>
                            <p class="small mb-0 l-hght-14"> <a class="text-success font-weight-bold"
                                    href="customer-feedback.html">{{ number_format($ticket->price) }}</a></p>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            @foreach ($traveller_ticket as $ticket)
                <div class="bg-white rounded-1 shadow-sm p-3 mb-3 w-100">
                    <a href="your-ticket.html">
                        <div class="d-flex align-items-center mb-2">
                            <small class="text-muted">{{ $ticket->bus->bus }}</small>
                            <small class="text-success ml-auto f-10"> <span class="text-danger">{{ $ticket->ticket }}</span>
                                -
                                CONFIRMED</small>
                        </div>
                        <h6 class="mb-3 l-hght-18 font-weight-bold text-dark">{{ $ticket->traveller->fullname }}</h6>
                    </a>
                    <div class="row mx-0 mb-3">
                        <div class="col-6 p-0">
                            <small class="text-muted mb-1 f-10 pr-1">Route</small>
                            <p class="small mb-0 l-hght-14"> {{ $ticket->from }} - {{ $ticket->to }} </p>
                        </div>
                        <div class="col-6 p-0">
                            <small class="text-muted mb-1 f-10 pr-1">Phone</small>
                            <p class="small mb-0 l-hght-14"> {{ $ticket->traveller->phone }}</p>
                        </div>
                    </div>
                    <div class="row mx-0">
                        <div class="col-6 p-0">
                            <small class="text-muted mb-1 f-10 pr-1">DATE </small>
                            <p class="small mb-0 l-hght-14"> {{ $ticket->date }}</p>
                        </div>
                        <div class="col-6 p-0">
                            <small class="text-muted mb-1 f-10 pr-1">Price</small>
                            <p class="small mb-0 l-hght-14"> <a class="text-success font-weight-bold"
                                    href="customer-feedback.html">{{ number_format($ticket->price) }}</a></p>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif



    </div>
@endsection
