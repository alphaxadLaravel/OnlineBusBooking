@extends('layouts.admin')
@section('title', 'Add Routes - Online Bus Booking')

@section('admin')
    <div class="container-fluid">
        <h3 class="text-dark mb-4">New Bus Route</h3>
        @if (Session::has('exist'))
            <div class="alert alert-danger alert-dismissible" role="alert">
                This Bus arleady Exist!!
            </div>
        @endif
        @if (Session::has('region'))
            <div class="alert alert-danger alert-dismissible" role="alert">
                The To & From Regions cant be the Same!
            </div>
        @endif
        @if (Session::has('date'))
            <div class="alert alert-danger alert-dismissible" role="alert">
                The Date Selected has Arleady Passed!
            </div>
        @endif
        <form action="/new_route" method="POST">
            @csrf
            <div class="row mb-3">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col">
                            <div class="card shadow mb-3">
                                <div class="card-header py-3">
                                    <p class="text-primary m-0 font-weight-bold">Route Details</p>
                                </div>
                                <div class="card-body">
                                    <div class="form-row">
                                        <div class="col">
                                            <div class="form-group"><label for="username"><strong> Bus Name
                                                    </strong><br></label>
                                                <select class="form-control" name="bus" id="">
                                                    <option value="">Select Bus Name..</option>
                                                    @foreach ($buses as $bus)
                                                        <option value="{{ $bus->id }}">{{ $bus->bus }}</option>
                                                    @endforeach
                                                </select>
                                                <small class="text-danger">
                                                    @error('bus')
                                                        {{ $message }}
                                                    @enderror
                                                </small>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group"><label for="username"><strong>Travel
                                                        Date</strong><br></label><input class="form-control" type="date"
                                                    id="username" placeholder="Enter Travel date" name="date">
                                                <small class="text-danger">
                                                    @error('date')
                                                        {{ $message }}
                                                    @enderror
                                                </small>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group"><label
                                                    for="email"><strong>Price</strong></label><input class="form-control"
                                                    type="number" placeholder="Enter Seat Price eg 30000" name="price">
                                                <small class="text-danger">
                                                    @error('price')
                                                        {{ $message }}
                                                    @enderror
                                                </small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col">
                                            <div class="form-group"><label for="first_name"><strong>Region
                                                        From</strong></label>
                                                <select class="form-control" name="region_from" id="">
                                                    <option value="">Select Region From..</option>
                                                    <option value="Dar">dar-es-Salaam</option>
                                                    <option value="mwanza">Mwanza</option>
                                                    <option value="kigoma">Kigoma</option>
                                                    <option value="mbeya">Mbeya</option>
                                                    <option value="Arusha">Arusha</option>
                                                    <option value="Dodoma">Dodoma</option>
                                                </select>
                                                <small class="text-danger">
                                                    @error('region_from')
                                                        {{ $message }}
                                                    @enderror
                                                </small>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group"><label for="last_name"><strong>Region
                                                        To</strong></label>
                                                <select class="form-control" name="region_to" id="">
                                                    <option value="">Select Region To..</option>
                                                    <option value="Dar">dar-es-Salaam</option>
                                                    <option value="mwanza">Mwanza</option>
                                                    <option value="kigoma">Kigoma</option>
                                                    <option value="mbeya">Mbeya</option>
                                                    <option value="Arusha">Arusha</option>
                                                    <option value="Dodoma">Dodoma</option>
                                                </select>
                                                <small class="text-danger">
                                                    @error('region_to')
                                                        {{ $message }}
                                                    @enderror
                                                </small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card shadow">
                                <div class="card-header py-3">
                                    <p class="text-primary m-0 font-weight-bold">Departure & Arrivals</p>
                                </div>
                                <div class="card-body">
                                    <div class="form-row">
                                        <div class="col">
                                            <div class="form-group"><label for="username"><strong>Depart
                                                        Time</strong><br></label><input class="form-control" type="time"
                                                    id="username" placeholder="Enter Travel date" name="time_left">
                                                <small class="text-danger">
                                                    @error('time_left')
                                                        {{ $message }}
                                                    @enderror
                                                </small>
                                            </div>
                                        </div>

                                        <div class="col">
                                            <div class="form-group"><label for="username"><strong>Pickup
                                                        Area</strong><br></label><input class="form-control"
                                                    type="text" id="username" placeholder="Enter Pickup Area"
                                                    name="pickup">
                                                <small class="text-danger">
                                                    @error('pickup')
                                                        {{ $message }}
                                                    @enderror
                                                </small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col">
                                            <div class="form-group"><label for="username"><strong>Arrival
                                                        Time</strong><br></label><input class="form-control"
                                                    type="time" id="username" placeholder="Enter Travel date"
                                                    name="time_arrival">
                                                <small class="text-danger">
                                                    @error('time_arrival')
                                                        {{ $message }}
                                                    @enderror
                                                </small>
                                            </div>
                                        </div>

                                        <div class="col">
                                            <div class="form-group"><label for="username"><strong>Arrival
                                                        Area</strong><br></label><input class="form-control"
                                                    type="text" id="username" placeholder="Enter Pickup Area"
                                                    name="arrival">
                                                <small class="text-danger">
                                                    @error('arrival')
                                                        {{ $message }}
                                                    @enderror
                                                </small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group"><button class="btn btn-primary btn-sm" type="submit">Submit
                                            Route</button></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </form>

    </div>
@endsection
