@extends('layouts.outside')
@section('title', 'Welcome - Online Bus Booking System')

@section('outside')
<div class="osahan-index bg-c d-flex align-items-center justify-content-center vh-100 index-page">
    <div class="text-center">
        <a href="landing.html">
            <i class="icofont-bus text-white display-1 bg-danger p-4 rounded-circle"></i>
        </a><br>
        <div class="spinner"></div>
    </div>
</div>
<div class="osahan-fotter fixed-bottom m-3">
    <a class="btn btn-block px-4 py-3 d-flex align-items-center osahanbus-btlan btn-danger text-white shadow"
        href="/landing">
        Get Started <i class="icofont-arrow-right ml-auto"></i>
    </a>
</div>
@endsection