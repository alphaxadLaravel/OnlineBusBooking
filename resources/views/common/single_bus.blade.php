@extends('layouts.geust')
@section('title', 'Bus Details - Online Bus Booking System')

@section('admin')

    <div class="p-2 pt-0 px-3  w-100">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between px-3">
                    <div class="">
                        <small class="text-muted mb-1 f-10 pr-1">GOING FROM</small>
                        <p class="small mb-0"> {{session()->get('from')}}</p>
                    </div>
                    <div class="">
                        <small class="text-muted mb-1 f-10 pr-1">DATE</small>
                        <p class="small mb-0"> {{session()->get('date')}}</p>

                    </div>
                    <div class="">
                        <small class="text-muted mb-1 f-10 pr-1">GOING TO</small>
                        <p class="small mb-0"> {{session()->get('to')}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row px-3">
        <div class="col-md-12 mt-3 ">
            <div class="card mb-3 ">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="" class="w-100 rounded-left" style="height: 245px"
                            alt="...">
                    </div>

                    {{-- Login fomu inaanzia hapa --}}
                    <div class="col-md-8 ">
                        <div class="card-body ">
                            <div class="row">
                                <div class="col-md-12">
                                    <h6 class="text-danger">sdfsafasdfasfsdf</h6>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-4">
                                    <small class="">GOING FROM</small>
                                    <p class="small text-danger mb-0"> Dar-es-Salaam</p>
                                </div>
                                <div class="col-md-4">
                                    <small class="">GOING FROM</small>
                                    <p class="small mb-0"> fdfds</p>
                                </div>
                                <div class="col-md-4">
                                    <small class="">GOING FROM</small>
                                    <p class="small mb-0"> fdfds</p>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-4">
                                    <small class="">GOING FROM</small>
                                    <p class="small mb-0"> fdfds</p>
                                </div>
                                <div class="col-md-4">
                                    <small class="">GOING FROM</small>
                                    <p class="small mb-0"> fdfds</p>
                                </div>
                                <div class="col-md-4">
                                    <small class="">GOING FROM</small>
                                    <p class="small mb-0"> fdfds</p>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-4">
                                    <small class="">GOING FROM</small>
                                    <p class="small mb-0"> fdfds</p>
                                </div>
                                <div class="col-md-4">
                                    <small class="">GOING FROM</small>
                                    <p class="small mb-0"> fdfds</p>
                                </div>
                                <div class="col-md-4">
                                    <small class="">GOING FROM</small>
                                    <p class="small mb-0"> fdfds</p>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

   @livewire('checkout')
@endsection
