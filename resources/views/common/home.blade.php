@extends('layouts.admin')
@section('title', 'Search Bus - Online Bus Booking System')

@section('admin')


    <form action="/new_agent" method="POST">
        @csrf

        <div class="row justify-content-center">
            <div class="col-md-9 col-lg-12 col-xl-10">
                <div class="card shadow-lg o-hidden border-0 my-5">
                    <div class="card-body px-4">
                            <div class="form-row">
                                <div class="col-md-12">
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
                                <div class="col-md-12">
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
                                <div class="col-md-12">
                                    <div class="form-group  pb-1">
                                        <label class="mb-2"><span class="icofont-ui-calendar text-danger"></span>
                                            Date</label><br>
                                        <input name="date" class="form-control  p-0" type="date">
                                    </div>
                                </div>

                            </div>
                            <div class="form-group"><button class="btn btn-primary  btn-block" type="submit">Submit
                                    Search</button></div>
                    </div>
                </div>
            </div>
        </div>
    </form>


@endsection
