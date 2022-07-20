@extends('layouts.app')
@section('title', 'Bus Details - Online Bus Booking System')

@section('pages')
    <div class="Bus-Details padding-bt">
        <div class="osahan-header-nav shadow-sm p-3 d-flex align-items-center bg-danger">
            <h5 class="font-weight-normal mb-0 text-white">
                <a class="text-danger mr-3" href="/bus_listing"><i class="icofont-rounded-left"></i></a>
                Bus Details
            </h5>
            <div class="ml-auto d-flex align-items-center">
                <a class="toggle osahan-toggle h4 m-0 text-white ml-auto" href="#"><i
                        class="icofont-navigation-menu"></i></a>
            </div>
        </div>

        @foreach ($single_bus as $bus)
            <div class="list_item m-0 bg-white">
                <div class="px-3 py-3 tic-div border-bottom d-flex">
                    <img src="{{asset($bus->bus->photo)}}" class="img-fluid border rounded p-1 shape-img mr-3">
                    <div class="w-100">
                        <h6 class="my-1 l-hght-18 font-weight-bold">{{$bus->bus->company->companyName}}</h6>
                        <div class="start-rating f-10">

                            <div class="d-flex mt-2">
                                <p class="m-0"><i class="icofont-google-map mr-1 text-danger"></i><span
                                        class="small">{{$bus->region_from}} - {{$bus->region_to}}</span></p>
                                <p class="small ml-auto mb-0"><i class="icofont-bus mr-1 text-danger"></i>Tsh. {{number_format($bus->price)}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-white p-3">
                    <div class="row mx-0 mb-3">
                        <div class="col-6 p-0">
                            <small class="text-muted mb-1 f-10 pr-1">Wifi</small>
                            <p class="small mb-0 l-hght-14"> {{$bus->bus->wifi}}</p>
                        </div>
                        <div class="col-6 p-0">
                            <small class="text-muted mb-1 f-10 pr-1">AC</small>
                            <p class="small mb-0 l-hght-14"> {{$bus->bus->AC}}</p>
                        </div>
                    </div>
                    <div class="row mx-0 mb-3">
                        <div class="col-6 p-0">
                            <small class="text-muted mb-1 f-10 pr-1">Dinner / Lunch</small>
                            <p class="small mb-0 l-hght-14"> {{$bus->bus->food}}</p>
                        </div>
                        <div class="col-6 p-0">
                            <small class="text-muted mb-1 f-10 pr-1">Safety Features</small>
                            <p class="small mb-0 l-hght-14"> {{$bus->bus->safety}}</p>
                        </div>
                    </div>
                    <div class="row mx-0">
                        <div class="col-6 p-0">
                            <small class="text-muted mb-1 f-10 pr-1">Essentials</small>
                            <p class="small mb-0 l-hght-14">{{$bus->bus->essentials}}</p>
                        </div>
                        <div class="col-6 p-0">
                            <small class="text-muted mb-1 f-10 pr-1">Snacks</small>
                            <p class="small mb-0 l-hght-14">{{$bus->bus->snacks}} </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    <div class="bus-details pt-3 pb-0 px-3">
                        <div class="info" id="info">
                            <h6 class="font-weight-normal">About Abood Bus</h6>
                            <p class="text-muted small mb-3">{{$bus->bus->about}}</p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

    </div>

    <div class="fixed-bottom view-seatbt p-3">
        <a href="/select_seat/{{$bus->id}}" class="btn btn-danger btn-block osahanbus-btn rounded-1">Book Your Seats Now</a>
    </div>
@endsection
