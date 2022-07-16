@extends('layouts.app')
@section('title', 'Bus Details - Online Bus Booking System')

@section('pages')
<div class="Bus-Details padding-bt">
    <div class="osahan-header-nav shadow-sm p-3 d-flex align-items-center bg-danger">
        <h5 class="font-weight-normal mb-0 text-white">
            <a class="text-danger mr-3" href="/bus_listing"><i class="icofont-rounded-left"></i></a>
            Bus Details
        </h5>
        <div class="ml-auto d-flex align-items-center">
            <a class="toggle osahan-toggle h4 m-0 text-white ml-auto" href="#"><i
                    class="icofont-navigation-menu"></i></a>
        </div>
    </div>

    <div class="list_item m-0 bg-white">
        <div class="px-3 py-3 tic-div border-bottom d-flex">
            <img src="img/listing/item1.png" class="img-fluid border rounded p-1 shape-img mr-3">
            <div class="w-100">
                <h6 class="my-1 l-hght-18 font-weight-bold">Abood Bus</h6>
                <div class="start-rating f-10">
                    
                    <div class="d-flex mt-2">
                        <p class="m-0"><i class="icofont-google-map mr-1 text-danger"></i><span class="small">Dar es
                                Salaam - Tanga</span></p>
                        <p class="small ml-auto mb-0"><i class="icofont-bus mr-1 text-danger"></i>Tsh. 30000</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-white p-3">
            <div class="row mx-0 mb-3">
                <div class="col-6 p-0">
                    <small class="text-muted mb-1 f-10 pr-1">Wifi</small>
                    <p class="small mb-0 l-hght-14"> Access in the bus</p>
                </div>
                <div class="col-6 p-0">
                    <small class="text-muted mb-1 f-10 pr-1">AC</small>
                    <p class="small mb-0 l-hght-14"> Ac is available</p>
                </div>
            </div>
            <div class="row mx-0 mb-3">
                <div class="col-6 p-0">
                    <small class="text-muted mb-1 f-10 pr-1">Dinner / Lunch</small>
                    <p class="small mb-0 l-hght-14"> No</p>
                </div>
                <div class="col-6 p-0">
                    <small class="text-muted mb-1 f-10 pr-1">Safety Features</small>
                    <p class="small mb-0 l-hght-14"> Sanitizer, Masks</p>
                </div>
            </div>
            <div class="row mx-0">
                <div class="col-6 p-0">
                    <small class="text-muted mb-1 f-10 pr-1">Essentials</small>
                    <p class="small mb-0 l-hght-14">Water</p>
                </div>
                <div class="col-6 p-0">
                    <small class="text-muted mb-1 f-10 pr-1">Snacks</small>
                    <p class="small mb-0 l-hght-14">Juice and Biscuits </p>
                </div>
            </div>
        </div>
    </div>
    
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
            <div class="bus-details pt-3 pb-0 px-3">
                <div class="info" id="info">
                    <h6 class="font-weight-normal">About Abood Bus</h6>
                    <p class="text-muted small mb-3">Abood bus has been in an industry of transportation for years
                        now and its clients are well satsfied on services that they are given</p>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
            <div class="bus-details pt-3 pb-0 px-3">
                <div class="review" id="review">
                    <h6 class="font-weight-normal">Review</h6>
                    <p class="mb-0"><span class="h4 mb-0">4.8</span><span class="h6">/5</span></p>
                    <span class="f-10">Punctuality</span>
                    <div class="review-rating row align-items-center">
                        <div class="start-rating f-8 col-3">
                            <i class="icofont-star text-danger"></i>
                            <i class="icofont-star text-danger"></i>
                            <i class="icofont-star text-danger"></i>
                            <i class="icofont-star text-danger"></i>
                            <i class="icofont-star text-danger"></i>
                        </div>
                        <div class="progress col-7 p-0">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 100%"
                                aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="col-2">
                            <span class="small">5.0</span>
                        </div>
                    </div>
                    <div class="review-rating row align-items-center">
                        <div class="start-rating f-8 col-3">
                            <i class="icofont-star text-danger"></i>
                            <i class="icofont-star text-danger"></i>
                            <i class="icofont-star text-danger"></i>
                            <i class="icofont-star text-danger"></i>
                            <i class="icofont-star text-muted"></i>
                        </div>
                        <div class="progress col-7 p-0">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 75%"
                                aria-valuenow="75" aria-valuemin="0" aria-valuemax="75"></div>
                        </div>
                        <div class="col-2">
                            <span class="small">4.0</span>
                        </div>
                    </div>
                    <div class="review-rating row align-items-center">
                        <div class="start-rating f-8 col-3">
                            <i class="icofont-star text-danger"></i>
                            <i class="icofont-star text-danger"></i>
                            <i class="icofont-star text-danger"></i>
                            <i class="icofont-star text-muted"></i>
                            <i class="icofont-star text-muted"></i>
                        </div>
                        <div class="progress col-7 p-0">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 50%"
                                aria-valuenow="50" aria-valuemin="0" aria-valuemax="50"></div>
                        </div>
                        <div class="col-2">
                            <span class="small">3.0</span>
                        </div>
                    </div>
                    <div class="review-rating row align-items-center">
                        <div class="start-rating f-8 col-3">
                            <i class="icofont-star text-danger"></i>
                            <i class="icofont-star text-danger"></i>
                            <i class="icofont-star text-muted"></i>
                            <i class="icofont-star text-muted"></i>
                            <i class="icofont-star text-muted"></i>
                        </div>
                        <div class="progress col-7 p-0">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 25%"
                                aria-valuenow="25" aria-valuemin="0" aria-valuemax="25"></div>
                        </div>
                        <div class="col-2">
                            <span class="small">2.0</span>
                        </div>
                    </div>
                    <div class="review-rating row align-items-center">
                        <div class="start-rating f-8 col-3">
                            <i class="icofont-star text-danger"></i>
                            <i class="icofont-star text-muted"></i>
                            <i class="icofont-star text-muted"></i>
                            <i class="icofont-star text-muted"></i>
                            <i class="icofont-star text-muted"></i>
                        </div>
                        <div class="progress col-7 p-0">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 5%"
                                aria-valuenow="5" aria-valuemin="0" aria-valuemax="5"></div>
                        </div>
                        <div class="col-2">
                            <span class="small">1.0</span>
                        </div>
                    </div>
                    <div class="comments mt-3">
                        <div class="reviews bg-white p-3 shadow-sm rounded-1 mb-3">
                            <div class="d-flex align-items-center mb-2">
                                <img src="img/review/r1.jpg" class="img-fluid rounded-pill">
                                <div class="ml-2">
                                    <p class="mb-0 small font-weight-bold">Mike Jhon</p>
                                    <div class="start-rating d-flex align-items-center f-8">
                                        <i class="icofont-star text-danger"></i>
                                        <i class="icofont-star text-danger"></i>
                                        <i class="icofont-star text-danger"></i>
                                        <i class="icofont-star text-danger"></i>
                                        <i class="icofont-star text-muted"></i>
                                        <span class="ml-2 small text-danger">Good</span>
                                    </div>
                                </div>
                                <div class="date ml-auto mb-auto small">
                                    <small class="f-10">24/03/2021</small>
                                </div>
                            </div>
                            <p class="small text-muted mb-0">Dummy comment Lorem ipsum dolor sit amet, consectetur
                                adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </p>
                        </div>
                        <div class="reviews bg-white p-3 shadow-sm rounded-1 mb-3">
                            <div class="d-flex align-items-center mb-2">
                                <img src="img/review/r2.jpg" class="img-fluid rounded-pill">
                                <div class="ml-2">
                                    <p class="mb-0 small font-weight-bold">Mike Jhon</p>
                                    <div class="start-rating d-flex align-items-center f-8">
                                        <i class="icofont-star text-danger"></i>
                                        <i class="icofont-star text-danger"></i>
                                        <i class="icofont-star text-muted"></i>
                                        <i class="icofont-star text-muted"></i>
                                        <i class="icofont-star text-muted"></i>
                                        <span class="ml-2 small text-danger">Not Good</span>
                                    </div>
                                </div>
                                <div class="date ml-auto mb-auto small">
                                    <small class="f-10">24/03/2020</small>
                                </div>
                            </div>
                            <p class="small text-muted mb-0">Not good item for dummy text item Lorem ipsum dolor sit
                                amet, consectetur adipisicing elit, tempor incididunt ut labore et dolore magna
                                aliqua.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
            <div class="bus-details pt-3 pb-0 px-3">

                <div class="pickpoint" id="pick">
                    <div class="bg-white shadow-sm rounded-1 p-3 mb-3">
                        <h6 class="border-bottom pb-3 mb-3">Boarding Point Selected</h6>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="customRadiopick1" name="customRadiopick1"
                                class="custom-control-input" checked>
                            <label class="custom-control-label small d-flex" for="customRadiopick1">
                                <p class="h6 mr-4 mb-0">4:30</p>
                                <div class="mb-0"><b>Opp. Bus Stand Nilo Poribohon</b> Opp. Bus Stand</div>
                            </label>
                        </div>
                    </div>
                    <div class="bg-white shadow-sm rounded-1 p-3">
                        <h6 class="border-bottom pb-3 mb-3">Droping Point Selected</h6>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="customRadiodrop1" name="customRadiodrop1"
                                class="custom-control-input" checked>
                            <label class="custom-control-label small d-flex" for="customRadiodrop1">
                                <p class="h6 mr-4 mb-0">10:30</p>
                                <p class="mb-0"><b>Opp. Bus Stand Chandigarh</b> Opp. Bus Stand</p>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="fixed-bottom view-seatbt p-3">
    <a href="/select_seat" class="btn btn-danger btn-block osahanbus-btn rounded-1">Book Your Seats Now</a>
</div>
@endsection