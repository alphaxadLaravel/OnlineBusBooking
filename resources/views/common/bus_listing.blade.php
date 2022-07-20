@extends('layouts.app')
@section('title', 'All Buses - Online Bus Booking System')

@section('pages')
    <div class="osahan-listing">
        <div class="osahan-header-nav shadow-sm p-3 d-flex align-items-center bg-danger">
            <h5 class="font-weight-normal mb-0 text-white">
                <a class="text-danger" href="/home"><i class="icofont-rounded-left"></i></a>
            </h5>
            <div class="ml-auto d-flex align-items-center">
                <a href="/home" class="text-white mx-3 h6 mb-0"><i class="icofont-search-1"></i></a>

                <a class="toggle osahan-toggle h4 m-0 text-white ml-auto" href="#"><i
                        class="icofont-navigation-menu"></i></a>
            </div>
        </div>
        <div class="osahan-listing p-0 m-0 row border-top">
            <div class="p-2 border-bottom w-100">
                <div class="bg-white border border-warning rounded-1 shadow-sm p-2">
                    <div class="row mx-0 px-1">
                        <div class="col-6 p-0">
                            <small class="text-muted mb-1 f-10 pr-1">GOING FROM</small>
                            <p class="small mb-0"> {{$from}}</p>
                        </div>
                        <div class="col-6 p-0">
                            <small class="text-muted mb-1 f-10 pr-1">GOING TO</small>
                            <p class="small mb-0"> {{$to}}</p>
                        </div>
                    </div>
                </div>
            </div>
            @foreach ($bus_list as $bus)
                <a href="/single_bus/{{$bus->id}}" class="text-dark col-6 px-0">
                    <div class="list_item_gird m-0 bg-white shadow-sm listing-item border-bottom border-right">
                        <div class="px-3 pt-3 tic-div">
                            <div class="list-item-img">
                                <img src={{asset($bus->bus->photo)}} class="img-fluid">
                            </div>
                            <p class="mb-0 l-hght-10">{{$bus->bus->company->companyName}}</p>
                            <span class="text-danger small">{{$bus->region_from}} - {{$bus->region_to}}</span>

                        </div>
                        <div class="p-3 d-flex">
                            <div class="bus_details w-100">
                                <div class="d-flex">
                                    <p><i class="icofont-wind mr-2 text-danger"></i><span class="small">{{$bus->bus->AC}}</span></p>
                                </div>
                                <div class="d-flex l-hght-10">
                                    <span class="icofont-clock-time small mr-2 text-danger"></span>
                                    <div>
                                        <small class="text-muted mb-2 d-block">Journey Start</small>
                                        <p class="small">{{$bus->travel_date}}, {{$bus->depart_time}}</p>
                                    </div>
                                </div>
                                <div class="d-flex l-hght-10">
                                    <span class="icofont-google-map small mr-2 text-danger"></span>
                                    <div>
                                        <small class="text-muted mb-2 d-block">From - To</small>
                                        <p class="small mb-1">{{$bus->region_from}} - {{$bus->region_to}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>

@endsection
