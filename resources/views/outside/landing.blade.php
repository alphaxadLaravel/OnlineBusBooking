@extends('layouts.outside')
@section('title', 'landing Page - Online Bus Booking System')

@section('outside')
    {{-- <div class="d-flex justify-content-end p-3">
        <a href="/login" class="btn btn-danger rounded-1">Agent? SignIn Here</a>
    </div> --}}
    <div class="landing-page bg-danger">
        <div class="osahan-slider m-0">
            <div class="osahan-slider-item text-center bg-white">
                <div class="d-flex align-items-center justify-content-center vh-100 flex-column">
                    <i class="icofont-bus display-3 text-danger"></i>
                    <h5 class="mt-4 mb-3 text-danger">Digital Bus Ticketing System</h5>
                    <p class="text-center text-dark-50 mb-3 px-4">Save your time and extra Costs</p>
                    <a href="/login" class="btn btn-outline-danger text-danger">Agent? Login Here</a>
                        {{-- <span class="my-3">Are you an Agent? <a href="/login" class="text-danger ">Login Here</a></span> --}}

                </div>
            </div>
        </div>
    </div>

    <div class="osahan-fotter fixed-bottom m-3">
        <a href="/home" class="btn bg-white text-danger border-danger btn-block osahanbus-btlan">Start Booking Now</a>
    </div>
@endsection
