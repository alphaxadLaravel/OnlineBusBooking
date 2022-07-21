<div class="col-md-4">
    <button class="btn btn-sm btn-primary  btn-block" wire:click="select">Selected</button>
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
                    <div class="btn-group btn-group-toggle d-block mb-1">
                        <label class=" @if ($seat->contains('a1')) btn bg-danger @endif">
                            <input type="checkbox" wire:model="selected" value="a1"
                                @if ($seat->contains('b1')) disabled @endif>
                            A1
                    </div>

                    <div class="btn-group btn-group-toggle d-block mb-1">
                        <label class="">
                            <input type="checkbox" wire:model="selected" value="b1">
                            B1
                        </label>
                        <label class="btn check-seat btn-secondary small btn-sm rounded mr-2 mb-2">
                            <input type="checkbox" value="b2" autocomplete="off">
                            B2
                        </label>
                    </div>
                    <div class="btn-group btn-group-toggle d-block mb-1" data-toggle="buttons">
                        <label class="btn check-seat btn-danger small btn-sm rounded mr-2 mb-2">
                            <input type="checkbox" value="c1" autocomplete="off" checked disabled>
                            C1
                        </label>
                        <label class="btn check-seat btn-danger small btn-sm rounded mr-2 mb-2">
                            <input type="checkbox" value="c2" autocomplete="off" checked disabled>
                            C2
                        </label>
                    </div>
                    <div class="btn-group btn-group-toggle d-block mb-1" data-toggle="buttons">
                        <label class="btn check-seat btn-danger small btn-sm rounded mr-2 mb-2">
                            <input type="checkbox" value="d1" autocomplete="off" checked disabled>
                            D1
                        </label>
                        <label class="btn check-seat btn-success small btn-sm rounded mr-2 mb-2">
                            <input type="checkbox" value="d2" autocomplete="off">
                            D2
                        </label>
                    </div>
                    <div class="btn-group btn-group-toggle d-block mb-1" data-toggle="buttons">
                        <label class="btn check-seat btn-success small btn-sm rounded mr-2 mb-2">
                            <input type="checkbox" value="e1" autocomplete="off">
                            E1
                        </label>
                        <label class="btn check-seat btn-success small btn-sm rounded mr-2 mb-2">
                            <input type="checkbox" value="e2" autocomplete="off">
                            E2
                        </label>
                    </div>
                    <div class="btn-group btn-group-toggle d-block mb-1" data-toggle="buttons">
                        <label class="btn check-seat btn-success small btn-sm rounded mr-2 mb-2">
                            <input type="checkbox" value="f1" autocomplete="off">
                            F1
                        </label>
                        <label class="btn check-seat btn-success small btn-sm rounded mr-2 mb-2">
                            <input type="checkbox" value="f2" autocomplete="off">
                            F2
                        </label>
                    </div>
                    <div class="btn-group btn-group-toggle d-block mb-1" data-toggle="buttons">
                        <label class="btn check-seat btn-success small btn-sm rounded mr-2 mb-2">
                            <input type="checkbox" value="f1" autocomplete="off">
                            F1
                        </label>
                        <label class="btn check-seat btn-success small btn-sm rounded mr-2 mb-2">
                            <input type="checkbox" value="f2" autocomplete="off">
                            F2
                        </label>
                    </div>
                    <div class="btn-group btn-group-toggle d-block mb-1" data-toggle="buttons">
                        <label class="btn check-seat btn-success small btn-sm rounded mr-2 mb-2">
                            <input type="checkbox" value="f1" autocomplete="off">
                            F1
                        </label>
                        <label class="btn check-seat btn-success small btn-sm rounded mr-2 mb-2">
                            <input type="checkbox" value="f2" autocomplete="off">
                            F2
                        </label>
                    </div>
                    <div class="btn-group btn-group-toggle d-block mb-1" data-toggle="buttons">
                        <label class="btn check-seat btn-success small btn-sm rounded mr-2 mb-2">
                            <input type="checkbox" value="f1" autocomplete="off">
                            F1
                        </label>
                        <label class="btn check-seat btn-success small btn-sm rounded mr-2 mb-2">
                            <input type="checkbox" value="f2" autocomplete="off">
                            F2
                        </label>
                    </div>
                    <div class="btn-group btn-group-toggle d-block mb-1" data-toggle="buttons">
                        <label class="btn check-seat btn-success small btn-sm rounded mr-2 mb-2">
                            <input type="checkbox" value="f1" autocomplete="off">
                            F1
                        </label>
                        <label class="btn check-seat btn-success small btn-sm rounded mr-2 mb-2">
                            <input type="checkbox" value="f2" autocomplete="off">
                            F2
                        </label>
                    </div>
                    <div class="btn-group btn-group-toggle d-block mb-1" data-toggle="buttons">
                        <label class="btn check-seat btn-success small btn-sm rounded mr-2 mb-2">
                            <input type="checkbox" value="f1" autocomplete="off">
                            F1
                        </label>
                        <label class="btn check-seat btn-success small btn-sm rounded mr-2 mb-2">
                            <input type="checkbox" value="f2" autocomplete="off">
                            F2
                        </label>
                    </div>
                    <div class="btn-group btn-group-toggle d-block mb-1" data-toggle="buttons">
                        <label class="btn check-seat btn-success small btn-sm rounded mr-2 mb-2">
                            <input type="checkbox" value="f1" autocomplete="off">
                            F1
                        </label>
                        <label class="btn check-seat btn-success small btn-sm rounded mr-2 mb-2">
                            <input type="checkbox" value="f2" autocomplete="off">
                            F2
                        </label>
                    </div>
                    <div class="btn-group btn-group-toggle d-block mb-1" data-toggle="buttons">
                        <label class="btn check-seat btn-success small btn-sm rounded mr-2 mb-2">
                            <input type="checkbox" value="f1" autocomplete="off">
                            F1
                        </label>
                        <label class="btn check-seat btn-success small btn-sm rounded mr-2 mb-2">
                            <input type="checkbox" value="f2" autocomplete="off">
                            F2
                        </label>
                    </div>
                    <div class="btn-group btn-group-toggle d-block mb-1" data-toggle="buttons">
                        <label class="btn check-seat btn-success small btn-sm rounded mr-2 mb-2">
                            <input type="checkbox" value="f1" autocomplete="off">
                            F1
                        </label>
                        <label class="btn check-seat btn-success small btn-sm rounded mr-2 mb-2">
                            <input type="checkbox" value="f2" autocomplete="off">
                            F2
                        </label>
                    </div>
                    <div class="btn-group btn-group-toggle d-block mb-1" data-toggle="buttons">
                        <label class="btn check-seat btn-success small btn-sm rounded mr-2 mb-2">
                            <input type="checkbox" value="f1" autocomplete="off">
                            F1
                        </label>
                        <label class="btn check-seat btn-success small btn-sm rounded mr-2 mb-2">
                            <input type="checkbox" value="f2" autocomplete="off">
                            F2
                        </label>
                    </div>
                    <div class="btn-group btn-group-toggle d-block mb-1" data-toggle="buttons">
                        <label class="btn check-seat btn-success small btn-sm rounded mr-2 mb-2">
                            <input type="checkbox" value="g1" autocomplete="off">
                            G1
                        </label>
                        <label class="btn check-seat btn-success small btn-sm rounded mr-2 mb-2">
                            <input type="checkbox" value="g2" autocomplete="off">
                            G2
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-4 text-right pr-0">
            <img src="{{ asset('img/driver.png') }}" class="img-fluid mb-4">
            <div class="checkboxes-seat mt-4">
                <div class="btn-group btn-group-toggle d-block mb-1" data-toggle="buttons">
                    <label class="btn check-seat btn-success small btn-sm rounded mr-2 mb-2">
                        <input type="checkbox" value="b1" autocomplete="off">
                        B1
                    </label>
                    <label class="btn check-seat btn-success small btn-sm rounded mr-2 mb-2">
                        <input type="checkbox" value="b2" autocomplete="off">
                        B2
                    </label>
                </div>
                <div class="btn-group btn-group-toggle d-block mb-1" data-toggle="buttons">
                    <label class="btn check-seat btn-danger small btn-sm rounded mr-2 mb-2">
                        <input type="checkbox" value="c1" autocomplete="off" checked disabled>
                        C1
                    </label>
                    <label class="btn check-seat btn-danger small btn-sm rounded mr-2 mb-2">
                        <input type="checkbox" value="c2" autocomplete="off" checked disabled>
                        C2
                    </label>
                </div>
                <div class="btn-group btn-group-toggle d-block mb-1" data-toggle="buttons">
                    <label class="btn check-seat btn-danger small btn-sm rounded mr-2 mb-2">
                        <input type="checkbox" value="d1" autocomplete="off" checked disabled>
                        D1
                    </label>
                    <label class="btn check-seat btn-success small btn-sm rounded mr-2 mb-2">
                        <input type="checkbox" value="d2" autocomplete="off">
                        D2
                    </label>
                </div>
                <div class="btn-group btn-group-toggle d-block mb-1" data-toggle="buttons">
                    <label class="btn check-seat btn-success small btn-sm rounded mr-2 mb-2">
                        <input type="checkbox" value="e1" autocomplete="off">
                        E1
                    </label>
                    <label class="btn check-seat btn-success small btn-sm rounded mr-2 mb-2">
                        <input type="checkbox" value="e2" autocomplete="off">
                        E2
                    </label>
                </div>
                <div class="btn-group btn-group-toggle d-block mb-1" data-toggle="buttons">
                    <label class="btn check-seat btn-success small btn-sm rounded mr-2 mb-2">
                        <input type="checkbox" value="f1" autocomplete="off">
                        F1
                    </label>
                    <label class="btn check-seat btn-success small btn-sm rounded mr-2 mb-2">
                        <input type="checkbox" value="f2" autocomplete="off">
                        F2
                    </label>
                </div>
                <div class="btn-group btn-group-toggle d-block mb-1" data-toggle="buttons">
                    <label class="btn check-seat btn-success small btn-sm rounded mr-2 mb-2">
                        <input type="checkbox" value="f1" autocomplete="off">
                        F1
                    </label>
                    <label class="btn check-seat btn-success small btn-sm rounded mr-2 mb-2">
                        <input type="checkbox" value="f2" autocomplete="off">
                        F2
                    </label>
                </div>
                <div class="btn-group btn-group-toggle d-block mb-1" data-toggle="buttons">
                    <label class="btn check-seat btn-success small btn-sm rounded mr-2 mb-2">
                        <input type="checkbox" value="f1" autocomplete="off">
                        F1
                    </label>
                    <label class="btn check-seat btn-success small btn-sm rounded mr-2 mb-2">
                        <input type="checkbox" value="f2" autocomplete="off">
                        F2
                    </label>
                </div>
                <div class="btn-group btn-group-toggle d-block mb-1" data-toggle="buttons">
                    <label class="btn check-seat btn-success small btn-sm rounded mr-2 mb-2">
                        <input type="checkbox" value="f1" autocomplete="off">
                        F1
                    </label>
                    <label class="btn check-seat btn-success small btn-sm rounded mr-2 mb-2">
                        <input type="checkbox" value="f2" autocomplete="off">
                        F2
                    </label>
                </div>
                <div class="btn-group btn-group-toggle d-block mb-1" data-toggle="buttons">
                    <label class="btn check-seat btn-success small btn-sm rounded mr-2 mb-2">
                        <input type="checkbox" value="f1" autocomplete="off">
                        F1
                    </label>
                    <label class="btn check-seat btn-success small btn-sm rounded mr-2 mb-2">
                        <input type="checkbox" value="f2" autocomplete="off">
                        F2
                    </label>
                </div>
                <div class="btn-group btn-group-toggle d-block mb-1" data-toggle="buttons">
                    <label class="btn check-seat btn-success small btn-sm rounded mr-2 mb-2">
                        <input type="checkbox" value="f1" autocomplete="off">
                        F1
                    </label>
                    <label class="btn check-seat btn-success small btn-sm rounded mr-2 mb-2">
                        <input type="checkbox" value="f2" autocomplete="off">
                        F2
                    </label>
                </div>
                <div class="btn-group btn-group-toggle d-block mb-1" data-toggle="buttons">
                    <label class="btn check-seat btn-success small btn-sm rounded mr-2 mb-2">
                        <input type="checkbox" value="f1" autocomplete="off">
                        F1
                    </label>
                    <label class="btn check-seat btn-success small btn-sm rounded mr-2 mb-2">
                        <input type="checkbox" value="f2" autocomplete="off">
                        F2
                    </label>
                </div>
                <div class="btn-group btn-group-toggle d-block mb-1" data-toggle="buttons">
                    <label class="btn check-seat btn-success small btn-sm rounded mr-2 mb-2">
                        <input type="checkbox" value="f1" autocomplete="off">
                        F1
                    </label>
                    <label class="btn check-seat btn-success small btn-sm rounded mr-2 mb-2">
                        <input type="checkbox" value="f2" autocomplete="off">
                        F2
                    </label>
                </div>
                <div class="btn-group btn-group-toggle d-block mb-1" data-toggle="buttons">
                    <label class="btn check-seat btn-success small btn-sm rounded mr-2 mb-2">
                        <input type="checkbox" value="f1" autocomplete="off">
                        F1
                    </label>
                    <label class="btn check-seat btn-success small btn-sm rounded mr-2 mb-2">
                        <input type="checkbox" value="f2" autocomplete="off">
                        F2
                    </label>
                </div>
                <div class="btn-group btn-group-toggle d-block mb-1" data-toggle="buttons">
                    <label class="btn check-seat btn-success small btn-sm rounded mr-2 mb-2">
                        <input type="checkbox" value="f1" autocomplete="off">
                        F1
                    </label>
                    <label class="btn check-seat btn-success small btn-sm rounded mr-2 mb-2">
                        <input type="checkbox" value="f2" autocomplete="off">
                        F2
                    </label>
                </div>
                <div class="btn-group btn-group-toggle d-block mb-1" data-toggle="buttons">
                    <label class="btn check-seat btn-success small btn-sm rounded mr-2 mb-2">
                        <input type="checkbox" value="g1" autocomplete="off">
                        G1
                    </label>
                    <label class="btn check-seat btn-success small btn-sm rounded mr-2 mb-2">
                        <input type="checkbox" value="g2" autocomplete="off">
                        G2
                    </label>
                </div>
            </div>
        </div>
    </div>

</div>
