@extends('layouts.admin')
@section('title', 'Bus Routes - Online Bus Booking')

@section('admin')
<div class="container-fluid">
    <h3 class="text-dark mb-4">All Routes</h3>
    <div class="card shadow">
        <div class="card-header py-3">
            <p class="text-primary m-0 font-weight-bold">Our Buses & their Routes</p>
        </div>
       @livewire('bus-routes')
    </div>
</div>
@endsection
