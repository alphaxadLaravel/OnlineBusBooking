@extends('layouts.geust')
@section('title', 'Search Bus - Online Bus Booking System')

@section('geust')


    <form action="/search" method="POST">
        @csrf

        <div class="row justify-content-center">
            <div class="col-md-9 col-lg-12 col-xl-10">
                <div class="card shadow-lg o-hidden border-0 my-5">

                    @if (Session::has('dates'))
                        <div class="alert alert-danger alert-dismissible m-3" role="alert">
                            Date Selected has already Passed!
                        </div>
                    @endif

                    @if (Session::has('route'))
                        <div class="alert alert-danger alert-dismissible m-3" role="alert">
                            Travel date or Route is not currently Availabe!
                        </div>
                    @endif

                    @if (Session::has('regions'))
                        <div class="alert alert-danger alert-dismissible m-3" role="alert">
                            From & Regions cant be The same..
                        </div>
                    @endif

                    <div class="card-body px-4">
                        <div class="form-row">
                            
                            <h6 class="text-danger">Find Your Best Route Here</h6>
                            <div class="col-md-12">
                                <label for="" class="mb-2"><span class="icofont-search-map text-danger"></span>
                                    From</label><br>
                                <select class=" form-control" name="from">
                                    <option value="">Choose Region from...</option>
                                    <option value="Dar">dar-es-Salaam</option>
                                    <option value="mwanza">Mwanza</option>
                                    <option value="kigoma">Kigoma</option>
                                    <option value="mbeya">Mbeya</option>
                                    <option value="Arusha">Arusha</option>
                                    <option value="Dodoma">Dodoma</option>
                                </select>
                            </div>
                            <div class="col-md-12">

                                <label for="" class="mb-2"><span class="icofont-google-map text-danger"></span>
                                    To</label><br>
                                <select class=" form-control" name="to">
                                    <option value="">Choose region to...</option>
                                    <option value="Dar">dar-es-Salaam</option>
                                    <option value="mwanza">Mwanza</option>
                                    <option value="kigoma">Kigoma</option>
                                    <option value="mbeya">Mbeya</option>
                                    <option value="Arusha">Arusha</option>
                                    <option value="Dodoma">Dodoma</option>
                                </select>

                            </div>
                            <div class="col-md-12">
                                <div class="form-group  pb-1">
                                    <label class="mb-2"><span class=" text-danger"></span>
                                        Date</label><br>
                                    <input name="date"  class="form-control  p-0" type="date">
                                   
                                </div>
                            </div>

                        </div>

                        <div class="form-group"><button class="btn btn-danger  btn-block" type="submit">Submit
                                Search</button></div>

                    </div>
                </div>
            </div>
        </div>

    </form>


@endsection
