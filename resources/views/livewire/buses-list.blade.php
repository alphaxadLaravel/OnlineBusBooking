<div class="container-fluid">
    <h3 class="text-dark mb-4">All Buses</h3>
    @if (Session::has('bus'))
        <div class="alert alert-success alert-dismissible" role="alert">
            New Bus added successfully!
        </div>
    @endif
    <div class="card shadow">
        <div class="card-header py-3">
            <p class="text-primary m-0 font-weight-bold">Buses Available</p>
        </div>
        <div class="card-body">

            <div class="row">
                <div class="col-md-6 text-nowrap">
                    <div id="dataTable_length" class="dataTables_length" aria-controls="dataTable">
                        <label>Show&nbsp;<select class="form-control form-control-sm custom-select custom-select-sm">
                                <option value="10" selected="">10</option>
                                <option value="25">25</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                            </select>&nbsp;</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="text-md-right dataTables_filter" id="dataTable_filter"><label><input type="search"
                                class="form-control form-control-sm" aria-controls="dataTable"
                                placeholder="Search"></label></div>
                </div>
            </div>
            <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                <table class="table my-0" id="dataTable">
                    <thead>
                        <tr>
                            <th>Bus Name</th>
                            <th>AC</th>
                            <th>Launch/Dinner</th>
                            <th>WiFi</th>
                            <th>Essentials</th>
                            <th>Snacks</th>
                            <th>Safety</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($buses_list as $bus)
                            <tr>
                                <td><img class="rounded mr-2" width="30" height="30"
                                        src="{{ asset($bus->photo) }}">{{ ucwords($bus->bus) }}</td>
                                <td>{{ ucwords($bus->AC) }}</td>
                                <td>{{ ucwords($bus->food) }}</td>
                                <td>{{ ucwords($bus->wifi) }}</td>
                                <td>{{ ucwords($bus->essentials) }}</td>
                                <td>{{ ucwords($bus->snacks) }}</td>
                                <td>{{ ucwords($bus->safety) }}</td>
                                {{-- <td><a href="#" class="btn btn-sm btn-outline-secondary"><i
                                            class="fas fa-trash"></i></a></td> --}}
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <nav class="d-lg-flex justify-content-end dataTables_paginate paging_simple_numbers">
                        {{ $buses_list->links() }}
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
