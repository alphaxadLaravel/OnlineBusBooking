@extends('layouts.admin')
@section('title', 'Add New Agent - Online Bus Booking')

@section('admin')
    <div class="container-fluid">
        <h3 class="text-dark mb-4">Add new Agent</h3>

        <form action="/new_agent" method="POST">
            @csrf
            <div class="row mb-3">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col">
                            <div class="card shadow mb-3">
                                <div class="card-header py-3">
                                    <p class="text-primary m-0 font-weight-bold">Agent Credentials</p>
                                </div>
                                <div class="card-body">
                                    <div class="form-row">
                                        <div class="col">
                                            <div class="form-group"><label for="username"><strong>Agent
                                                        Fullnamee</strong><br></label><input class="form-control"
                                                    type="text" placeholder="Enter Agent Fullname" name="agent">
                                                <small class="text-danger">
                                                    @error('agent')
                                                        {{ $message }}
                                                    @enderror
                                                </small>
                                            </div>

                                        </div>
                                        <div class="col">
                                            <div class="form-group"><label for="email"><strong>Agent Phone
                                                        Number</strong></label><input class="form-control" type="number"
                                                    placeholder="Enter Agent Phone e.g 07.." name="phone">
                                                    <small class="text-danger">
                                                        @error('phone')
                                                            {{ $message }}
                                                        @enderror
                                                    </small>
                                                </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col">
                                            <div class="form-group"><label for="username"><strong>Agent
                                                        Email</strong><br></label><input class="form-control" type="email"
                                                    placeholder="Enter Agent Email" name="email">
                                                    <small class="text-danger">
                                                        @error('email')
                                                            {{ $message }}
                                                        @enderror
                                                    </small>
                                                </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group"><label for="email"><strong>Agent
                                                        Password</strong></label><input class="form-control" type="password"
                                                    placeholder="Enter Agent Password" name="password">
                                                    <small class="text-danger">
                                                        @error('password')
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

    </div>
@endsection
