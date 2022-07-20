<div class="container-fluid">
    <h3 class="text-dark mb-4">All Agents</h3>
    @if (Session::has('agent'))
        <div class="alert alert-success alert-dismissible" role="alert">
            New Agent added successfully!
        </div>
    @endif
    <div class="card shadow">
        <div class="card-header py-3">
            <p class="text-primary m-0 font-weight-bold">Agents Available</p>
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
                            <th>Agent Name</th>
                            <th>Bus Name</th>
                            <th>Email</th>
                            <th>Phone Number</th>
                            {{-- <th>Manage</th> --}}
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($agents_list as $agent)
                            <tr>
                                <td>{{$agent->bus->bus}}</td>
                                <td>{{$agent->fullname}}</td>
                                <td>{{ $agent->email }}</td>
                                <td>{{ $agent->phone }}</td>
                                {{-- <td><a href="#" class="btn btn-sm btn-outline-secondary"><i
                                            class="fas fa-trash"></i></a></td> --}}
                            </tr>
                        @endforeach

                    </tbody>

                </table>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <nav class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers">
                        {{ $agents_list->links() }}
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
