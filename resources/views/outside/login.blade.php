@extends('layouts.outside')
@section('title', 'Login - Online Bus Booking System')

@section('outside')
    <div class="osahan-signup">
        <div class="osahan-header-nav shadow-sm p-3 d-flex align-items-center bg-danger">
            <h5 class="font-weight-normal mb-0 text-white">
                <a class="text-danger mr-3" href="/landing"><i class="icofont-rounded-left"></i></a>
                Agent Please Sign in to continue
            </h5>

        </div>
        <div class="px-3 pt-3 pb-5">
            <form action="/home">
                @csrf
                <div class="form-group">
                    <label class="text-muted f-10 mb-1">Your Email</label>
                    <input type="email" class="form-control" placeholder="Enter Your Email">
                </div>
                <div class="form-group">
                    <label class="text-muted f-10 mb-1">Password</label>
                    <input type="password" class="form-control" placeholder="Enter Your Password">
                </div>
                <button type="submit" class="btn btn-danger btn-block osahanbus-btn mb-4 rounded-1">SIGN IN</button>
            </form>
            <div class="sign-or d-flex align-items-center justify-content-center mb-4">
            </div>
        </div>
    </div>
@endsection
