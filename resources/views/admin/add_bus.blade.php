@extends('layouts.admin')
@section('title', 'Add New Bus - Online Bus Booking')

@section('admin')
    <div class="container-fluid">
        <h3 class="text-dark mb-4">Add new Bus</h3>

        <form action="/login" method="POST">
            @csrf
            <div class="row mb-3">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col">
                            <div class="card shadow mb-3">
                                <div class="card-header py-3">
                                    <p class="text-primary m-0 font-weight-bold">Bus Details</p>
                                </div>
                                <div class="card-body">
                                    <div class="form-row">
                                        <div class="col">
                                            <div class="form-group"><label for="username"><strong>Bus
                                                        Name</strong><br></label><input class="form-control" type="text"
                                                    id="username" placeholder="Enter Bus name" name="bus"></div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group"><label
                                                    for="email"><strong>Price</strong></label><input class="form-control"
                                                    type="number" id="email" placeholder="Enter Seat Price eg 30000"
                                                    name="price"></div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col">
                                            <div class="form-group"><label for="first_name"><strong>Region
                                                        From</strong></label>
                                                <select class="form-control" name="region1" id="">
                                                    <option value="">Select Region From..</option>
                                                    <option value="Dar">dar-es-Salaam</option>
                                                    <option value="Dar">Mwanza</option>
                                                    <option value="Dar">Kigoma</option>
                                                    <option value="Dar">Mbeya</option>
                                                    <option value="Dar">Arusha</option>
                                                    <option value="Dar">Dodoma</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group"><label for="last_name"><strong>Region
                                                        To</strong></label>
                                                <select class="form-control" name="region1" id="">
                                                    <option value="">Select Region To..</option>
                                                    <option value="Dar">dar-es-Salaam</option>
                                                    <option value="Dar">Mwanza</option>
                                                    <option value="Dar">Kigoma</option>
                                                    <option value="Dar">Mbeya</option>
                                                    <option value="Dar">Arusha</option>
                                                    <option value="Dar">Dodoma</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card shadow">
                                <div class="card-header py-3">
                                    <p class="text-primary m-0 font-weight-bold">In Bus Services</p>
                                </div>
                                <div class="card-body">
                                    <div class="form-row">
                                        <div class="col">
                                            <div class="form-group"><label for="username"><strong> Launch / Dinner
                                                    </strong><br></label>
                                                <select class="form-control" name="region1" id="">
                                                    <option value="">Select Food Availability..</option>
                                                    <option value="Launch Only">Launch Only</option>
                                                    <option value="Dinner Only">Dinner Only</option>
                                                    <option value="Both Available">Both Available</option>
                                                    <option value="No">No</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group"><label
                                                    for="email"><strong>Essentials</strong></label>
                                                <select class="form-control" name="region1" id="">
                                                    <option value="">Select Essesntials..</option>
                                                    <option value="Water">Water</option>
                                                    <option value="Juice">Juice</option>
                                                    <option value="Soda">Soda</option>
                                                    <option value="Water & juice">Water & juice</option>
                                                    <option value="water & Soda">Water & Soda</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group"><label for="email"><strong>Snacks</strong></label>
                                                <select class="form-control" name="region1" id="">
                                                    <option value="">Select Snacks Availability..</option>
                                                    <option value="Biscuits">Biscuits</option>
                                                    <option value="cakes">Cakes</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col">
                                            <div class="form-group"><label for="username"><strong> WiFi
                                                    </strong><br></label>
                                                <select class="form-control" name="region1" id="">
                                                    <option value="">Select WiFi Availability..</option>
                                                    <option value="Free WiFi">Free WiFi</option>
                                                    <option value="No WiFi">No WiFi</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group"><label for="email"><strong>AC</strong></label>
                                                <select class="form-control" name="region1" id="">
                                                    <option value="">Select AC Availability..</option>
                                                    <option value="Full AC">Full AC</option>
                                                    <option value="No AC">No AC</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group"><label for="email"><strong>Safety
                                                        Features</strong></label>
                                                 <select class="form-control" name="region1" id="">
                                                    <option value="">Select Safety Availability..</option>
                                                    <option value="Sanitizer">Sanitizer</option>
                                                    <option value="Mask">Mask</option>
                                                    <option value="Mask & Sanitizer">Mask & Sanitizer</option>
                                                    </select>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card shadow mb-5">
                <div class="card-header py-3">
                    <p class="text-primary m-0 font-weight-bold">More Description</p>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group"><label for="signature"><strong>About The Bus</strong><br></label>
                                <textarea class="form-control" id="signature" rows="3" name="about"></textarea>
                            </div>
                            <div class="form-group">
                                <div class="form-group"><label for="username">
                                        <strong>Bus Photo</strong><br></label>
                                    <input class="form-control" type="file" name="bus">
                                </div>
                            </div>
                            <div class="form-group"><button class="btn btn-primary btn-sm" type="submit">Submit Bus
                                    Details</button></div>
                        </div>
                    </div>
                </div>
            </div>
        </form>

    </div>
@endsection
