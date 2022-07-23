@extends('layouts.geust')
@section('title', 'All Buses - Online Bus Booking System')

@section('geust')
    <div class="p-2 pt-0 px-3  w-100">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between px-3">
                    <div class="">
                        <small class="text-muted mb-1 f-10 pr-1">GOING FROM</small>
                        <p class="small mb-0"> {{ session()->get('from') }}</p>
                    </div>
                    <div class="">
                        <small class="text-muted mb-1 f-10 pr-1">TRAVEL DATE</small>
                        <p class="small mb-0"> {{ session()->get('date') }}</p>

                    </div>
                    <div class="">
                        <small class="text-muted mb-1 f-10 pr-1">GOING TO</small>
                        <p class="small mb-0"> {{ session()->get('to') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mx-3 mt-3">
        @foreach ($buses as $bus)
            <div class="col-md-3 mb-3">
                <a href="/single_bus/{{ $bus->id }}" class="text-secondary">
                    <div class="card">
                        <img class="card-img-top" src="{{ asset($bus->bus->photo) }}" alt="">
                        <div class="card-body">
                            <h4 class="card-title text-danger">{{ $bus->bus->bus }}</h4>
                            <div class="row">
                                <div class="col-md-12 mb-2">
                                    <small class="text-bold">Rouete</small>
                                    <p class="card-text">{{ session()->get('from') }} <span class="text-danger">-</span>
                                        {{ session()->get('to') }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer d-flex justify-content-center align-items-center p-1">
                            <span><span class="text-">Price: Tsh</span><span class="text-danger">
                                    {{ $bus->price }}</span></span>

                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>

    {{-- <div class="container-fluid">

        <form action="/new_agent" method="POST">
            @csrf
            <div class="row mb-3">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col">
                            <div class="card shadow mb-3">
                                <div class="card-header py-3">
                                    <p class="text-primary m-0 font-weight-bold">Agent Details</p>
                                </div>
                                <div class="card-body">
                                    <div class="form-row">
                                        <div class="col">
                                            <div class="form-group"><label for="last_name"><strong>Agent's
                                                        Bus</strong></label>
                                                <select class="form-control" name="bus_name" id="">
                                                    <option value="">Select Agent's Bus..</option>
                                                   
                                                </select>
                                                <small class="text-danger">
                                                    @error('bus_name')
                                                        {{ $message }}
                                                    @enderror
                                                </small>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group"><label for="username"><strong>Agent
                                                        Fullname</strong><br></label><input class="form-control"
                                                    type="text" placeholder="Enter agent Fullname" name="fullname">
                                                <small class="text-danger">
                                                    @error('fullname')
                                                        {{ $message }}
                                                    @enderror
                                                </small>
                                            </div>

                                        </div>

                                    </div>
                                    <div class="form-row">
                                        <div class="col">
                                            <div class="form-group"><label for="email"><strong>Agent
                                                        Phone</strong></label><input class="form-control" type="number"
                                                    placeholder="Enter agent Phone e.g 07.." name="phone">
                                                <small class="text-danger">
                                                    @error('phone')
                                                        {{ $message }}
                                                    @enderror
                                                </small>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group"><label for="username"><strong>Agent
                                                        Email</strong><br></label><input class="form-control" type="email"
                                                    placeholder="Enter agent Email" name="email">
                                                <small class="text-danger">
                                                    @error('email')
                                                        {{ $message }}
                                                    @enderror
                                                </small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group"><button class="btn btn-primary btn-sm" type="submit">Submit
                                            Agent Details</button></div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </form>

    </div> --}}

@endsection
