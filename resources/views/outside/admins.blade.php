@extends('layouts.admin_outside')

@section('admins')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9 col-lg-12 col-xl-10">
                <div class="card shadow-lg o-hidden border-0 my-5">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-flex">
                                <div class="flex-grow-1 bg-login-image"
                                    style="background-image: url(&quot;assets/img/dogs/image3.jpeg?h=cbc3a40dae521ddee89bf6b026abde71&quot;);">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h4 class="text-dark mb-4">Welcome Back!</h4>
                                    </div>
                                    <form action="/admins_login" method="POST" class="user">
                                        @csrf
                                        <div class="form-group"><input class="form-control form-control" type="email"
                                                aria-describedby="emailHelp"
                                                placeholder="Enter Email Address..." name="email">
                                                <small class="text-danger">
                                                    @error('email')
                                                        {{ $message }}
                                                    @enderror
                                                </small>
                                            </div>
                                        <div class="form-group"><input class="form-control form-control" type="password"
                                                placeholder="Password" name="password">
                                                <small class="text-danger">
                                                    @error('password')
                                                        {{ $message }}
                                                    @enderror
                                                </small>
                                            </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <div class="form-check"><input class="form-check-input custom-control-input"
                                                        type="checkbox" id="formCheck-1"><label
                                                        class="form-check-label custom-control-label"
                                                        for="formCheck-1">Remember Me</label></div>
                                            </div>
                                        </div><button class="btn btn-primary btn-block text-white btn" type="submit">Login</button>
                                        <hr>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
