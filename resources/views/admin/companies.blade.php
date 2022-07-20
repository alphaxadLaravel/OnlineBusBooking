@extends('layouts.admin')
@section('title', 'All Companies Available - Online Bus Booking')

@section('admin')
    <div class="container-fluid">
        <h3 class="text-dark mb-4">All Companies</h3>
        @if (Session::has('added'))
            <div class="alert alert-success alert-dismissible" role="alert">
                New Company Added Successfully!
            </div>
        @endif
        <div class="card shadow">
            <div class="card-header py-3">
                <p class="text-primary m-0 font-weight-bold">Available Company List</p>
            </div>

            @livewire('companies')
        </div>
    </div>
@endsection
