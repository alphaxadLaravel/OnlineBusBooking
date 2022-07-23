<form action="" wire:submit.prevent="lipia" method="post">

    <div class="row px-3">

        @csrf
        <div class="col-md-4">
            <div class="select-seat row bg-white mx-0 px-3 pt-3 pb-1 mb-3 rounded-1 shadow-sm">
                <div class="col-8 pl-0">
                    <div class="d-flex">
                        <div class="sold text-center">
                            <img src="{{ asset('img/sold-seat.png') }}" class="img-fluid mb-1">
                            <p class="small f-10">Sold Out</p>
                        </div>
                        <div class="sold text-center mx-3">
                            <img src="{{ asset('img/available-seat.png') }}" class="img-fluid mb-1">
                            <p class="small f-10">Available</p>
                        </div>
                        <div class="sold text-center">
                            <img src="{{ asset('img/selected-seat.png') }}" class="img-fluid mb-1">
                            <p class="small f-10">Selected</p>
                        </div>
                    </div>
                    <div>
                        <div class=" mt-4">
                            <div class="">
                                <label class="">
                                    <input type="checkbox" wire:model="selected" value=" a1">
                                    A1
                            </div>
                            <div class="">
                                <label class="">
                                    <input type="checkbox" wire:model="selected" value="b1">
                                    B1
                                </label>
                                <label class="">
                                    <input type="checkbox" wire:model="selected" value="b2">
                                    B2
                                </label>
                            </div>
                            <div class="">
                                <label class="">
                                    <input type="checkbox" wire:model="selected" value="c1" disabled>
                                    C1
                                </label>
                                <label class="">
                                    <input type="checkbox" wire:model="selected" value="c2" disabled>
                                    C2
                                </label>
                            </div>
                            <div class="">
                                <label class="">
                                    <input type="checkbox" wire:model="selected" value="d1" disabled>
                                    D1
                                </label>
                                <label class="">
                                    <input type="checkbox" wire:model="selected" value="d2">
                                    D2
                                </label>
                            </div>
                            <div class="">
                                <label class="">
                                    <input type="checkbox" wire:model="selected" value="e1">
                                    E1
                                </label>
                                <label class="">
                                    <input type="checkbox" wire:model="selected" value="e2">
                                    E2
                                </label>
                            </div>
                            <div class="">
                                <label class="">
                                    <input type="checkbox" wire:model="selected" value="g1">
                                    G1
                                </label>
                                <label class="">
                                    <input type="checkbox" wire:model="selected" value="g2">
                                    G2
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4 text-right pr-0">
                    <img src="{{ asset('img/driver.png') }}" class="img-fluid mb-4">
                    <div class="checkboxes-seat mt-4">
                        <div class="">
                            <label class="">
                                <input type="checkbox" wire:model="selected" value="h1">
                                H1
                            </label>
                            <label class="">
                                <input type="checkbox" wire:model="selected" value="h2">
                                H2
                            </label>
                        </div>
                        <div class="">
                            <label class="">
                                <input type="checkbox" wire:model="selected" value="c1" disabled>
                                C1
                            </label>
                            <label class="">
                                <input type="checkbox" wire:model="selected" value="c2" disabled>
                                C2
                            </label>
                        </div>
                        <div class="">
                            <label class="">
                                <input type="checkbox" wire:model="selected" value="d1" disabled>
                                D1
                            </label>
                            <label class="">
                                <input type="checkbox" wire:model="selected" value="k2">
                                K2
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-8">
            <div class="bg-white  shadow-sm  mb-3 ">
                <div class="row mx-0 p-3">
                    <div class="col-12 p-0 mb-2">
                        <small class="text-danger  pr-1">PICKUP FROM</small>
                        <p class="small mb-0 l-hght-14"> {{ $bus->depart_area }}, - {{ $bus->depart_time }} AM</p>
                    </div>
                    <div class="col-12 p-0">
                        <small class="text-danger  pr-1">DROPPING AT</small>
                        <p class="small mb-0 l-hght-14">{{ $bus->arrival_area }} - {{ $bus->arrival_time }} PM</p>
                    </div>
                </div>
            </div>

            <div class="bg-white  shadow-sm  mb-3 ">

                <div class="row p-3">
                    <div class="col-12 p-0 mb-2">
                        <h6 class="text-danger  px-3">Please fill your details</h6>
                    </div>
                    <div class="col-md-12">
                        <label class="text-muted mb-2 pr-1">Fullname</label>
                        <input type="text" wire:model="fullname" class="form-control ">
                        <small class="text-danger">
                            @error('fullname')
                                {{ $message }}
                            @enderror
                        </small>
                    </div>
                    <div class="col-md-12">
                        <label class="text-muted mb-2 pr-1">Email</label>
                        <input type="text" wire:model="email" class="form-control ">
                        <small class="text-danger">
                            @error('email')
                                {{ $message }}
                            @enderror
                        </small>
                    </div>
                    <div class="col-md-12">
                        <label class="text-muted mb-2 pr-1">Phone</label>
                        <input type="text" wire:model="phone" class="form-control ">
                        <small class="text-danger">
                            @error('phone')
                                {{ $message }}
                            @enderror
                        </small>
                    </div>

                </div>

                <div class="row px-5 py-3">
                    <div class="col-md-12 my-3">
                        <label class="">
                            <input type="radio" class="form-check-input" wire:model="branch" id=""
                                value="Airtel Money">
                            <span>Airtel Money</span> <br>
                            <small>Pay By Airtel Money</small>
                        </label>
                    </div>
                    <div class="col-md-12 my-3">
                        <label class="">
                            <input type="radio" class="form-check-input" wire:model="branch" id=""
                                value="M-Pesa">
                            <span>M-Pesa</span> <br>
                            <small>Pay By M-Pesa</small>
                        </label>
                    </div>
                    <div class="col-md-12 my-3">
                        <label class="">
                            <input type="radio" class="form-check-input" wire:model="branch" id=""
                                value="Credit Card">
                            <span>Credit Card</span> <br>
                            <small>Pay By Credit Card</small>
                        </label>
                    </div>
                </div>

                @if ($credit)
                    <div class=" small p-4">

                        <div class="form-group mb-2">
                            <div class="d-flex align-items-start">
                                <label for="" class="mb-1 small text-muted">Card Number</label>
                                <img src="img/master-card.png" class="img-fluid ml-auto rounded">
                            </div>
                            <input type="number" class="form-control form-control-sm"
                                placeholder="1234 5678 9145 4589" wire:model="card" aria-describedby="emailHelp">
                        </div>

                        <div class="form-group row mb-3">
                            <div class="col-8">
                                <label for="" class="mb-1 small text-muted">Month / Date</label>
                                <div class="d-flex border rounded">
                                    <input type="number"
                                        class="form-control text-center form-control-sm border-0 px-1"
                                        placeholder="DD" wire:model="" aria-describedby="mondateHelp">
                                    <span class="pt-2">/</span>
                                    <input type="number"
                                        class="form-control text-center form-control-sm border-0 px-1"
                                        placeholder="MM" wire:model="" aria-describedby="mondateHelp">
                                </div>
                            </div>
                            <div class="col-4">
                                <label for="exampleInputcvv1" class="mb-1 small text-muted">CVV</label>
                                <input type="number" class="form-control text-center form-control-sm"
                                    placeholder="000" wire:model="" aria-describedby="cvvHelp">
                            </div>
                        </div>

                        <div class="">
                            <button type="button" class="btn btn-danger btn-block" wire:click="lipia">Pay</button>

                        </div>

                    </div>
                @elseif($money)
                    @if (Session::has('account'))
                        <div class="alert alert-danger alert-dismissible mx-4" role="alert">
                            This payment account is not available!
                        </div>
                    @endif
                    <div class=" small p-4">

                        <div class="form-group mb-2">
                            <div class="d-flex align-items-start">
                                <label for="" class="mb-1 small text-muted"> M-Pesa Phone
                                    Number</label>
                            </div>
                            <input type="number" class="form-control form-control-sm" placeholder="07.."
                                wire:model="number" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group mb-2">
                            <div class="d-flex align-items-start">
                                <label for="" class="mb-1 small text-muted">M-PesaPIN</label>
                            </div>
                            <input type="number" class="form-control form-control-sm" placeholder="...."
                                wire:model="pin" aria-describedby="emailHelp">
                        </div>
                        <div class="">
                            <button type="submit" wire:click="lipia" class="btn btn-danger btn-block">Pay</button>
                        </div>
                    </div>
                @endif

            </div>
        </div>

    </div>
</form>
