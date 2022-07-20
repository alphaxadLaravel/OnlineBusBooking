@extends('layouts.app')
@section('title', 'Home page - Online Bus Booking System')

@section('pages')
    <div class="osahan-verification padding-bt">
        <div class="p-3 shadow bg-danger danger-nav osahan-home-header">
            <div class="font-weight-normal mb-0 d-flex align-items-center">
                <img src="img/logo.png" class="img-fluid osahan-nav-logo">
                <div class="ml-auto d-flex align-items-center">

                    <a class="toggle osahan-toggle h4 m-0 text-white ml-auto" href="#"><i
                            class="icofont-navigation-menu"></i></a>
                </div>
            </div>
        </div>
        <div class="bg-danger px-3 pb-3">
            <div class="bg-white rounded-1 p-3">
                <form action="/search" method="post">
                    @csrf
                    <div class="form-group border-bottom pb-2">
                        <label for="exampleFormControlSelect1" class="mb-2"><span
                                class="icofont-search-map text-danger"></span> From</label><br>
                        <select class="js-example-basic-single form-control" name="from">
                            <option value="">Choose Region from...</option>
                            <option value="Dar">dar-es-Salaam</option>
                            <option value="mwanza">Mwanza</option>
                            <option value="kigoma">Kigoma</option>
                            <option value="mbeya">Mbeya</option>
                            <option value="Arusha">Arusha</option>
                            <option value="Dodoma">Dodoma</option>
                        </select>
                    </div>
                    <div class="form-group border-bottom pb-2">
                        <label for="exampleFormControlSelect1" class="mb-2"><span
                                class="icofont-google-map text-danger"></span> To</label><br>
                        <select class="js-example-basic-single form-control" name="to">
                            <option value="">Choose region to...</option>
                            <option value="Dar">dar-es-Salaam</option>
                            <option value="mwanza">Mwanza</option>
                            <option value="kigoma">Kigoma</option>
                            <option value="mbeya">Mbeya</option>
                            <option value="Arusha">Arusha</option>
                            <option value="Dodoma">Dodoma</option>
                        </select>
                    </div>
                    <div class="form-group border-bottom pb-1">
                        <label class="mb-2"><span class="icofont-ui-calendar text-danger"></span> Date</label><br>
                        <input name="date" class="form-control border-0 p-0" type="date">
                    </div>
                    <button class="btn btn-danger btn-block rounded-1" type="submit">Search</button>
                </form>
            </div>
        </div>

    </div>
@endsection
