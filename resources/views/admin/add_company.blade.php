@extends('layouts.admin')
@section('title', 'Add New Company - Online Bus Booking')

@section('admin')
    <div class="container-fluid">
        <h3 class="text-dark mb-4">Add new Company</h3>
        @if (Session::has('exist'))
        <div class="alert alert-success alert-dismissible" role="alert">
            <small></small>
        </div>
    @endif
        <form action="/new_company" method="POST">
            @csrf
            <div class="row mb-3">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col">
                            <div class="card shadow mb-3">
                                <div class="card-header py-3">
                                    <p class="text-primary m-0 font-weight-bold">Company Details</p>
                                </div>
                                <div class="card-body">
                                    <div class="form-row">
                                        <div class="col">
                                            <div class="form-group"><label for="username"><strong>Company Name</strong><br></label><input class="form-control"
                                                    type="text" placeholder="Enter Company Name" name="company">
                                                <small class="text-danger">
                                                    @error('company')
                                                        {{ $message }}
                                                    @enderror
                                                </small>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col">
                            <div class="card shadow mb-3">
                                <div class="card-header py-3">
                                    <p class="text-primary m-0 font-weight-bold">Sub-Admin Details</p>
                                </div>
                                <div class="card-body">
                                  
                                    <div class="form-row">
                                        <div class="col">
                                            <div class="form-group"><label for="username"><strong>Sub-Admin Fullname</strong><br></label><input class="form-control"
                                                    type="text" placeholder="Enter Sub-admin Fullname" name="fullname">
                                                <small class="text-danger">
                                                    @error('fullname')
                                                        {{ $message }}
                                                    @enderror
                                                </small>
                                            </div>

                                        </div>
                                        <div class="col">
                                            <div class="form-group"><label for="email"><strong>Sub-Admin Phone</strong></label><input class="form-control" type="number"
                                                    placeholder="Enter sub-admin Phone e.g 07.." name="phone">
                                                    <small class="text-danger">
                                                        @error('phone')
                                                            {{ $message }}
                                                        @enderror
                                                    </small>
                                                </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group"><label for="username"><strong>Sub-Admin Email</strong><br></label><input class="form-control" type="email"
                                                    placeholder="Enter Sub-admin Email" name="email">
                                                    <small class="text-danger">
                                                        @error('email')
                                                            {{ $message }}
                                                        @enderror
                                                    </small>
                                                </div>
                                        </div>
                                    </div>
                                    <div class="form-group"><button class="btn btn-primary btn-sm" type="submit">Submit Company Details</button></div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </form>

    </div>
@endsection
