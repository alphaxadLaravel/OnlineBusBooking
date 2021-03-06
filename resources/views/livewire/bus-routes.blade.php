<div class="card-body">
    <div class="row">
        <div class="col-md-6 text-nowrap">
            <div id="dataTable_length" class="dataTables_length" aria-controls="dataTable"><label>Show&nbsp;<select
                        class="form-control form-control-sm custom-select custom-select-sm">
                        <option value="10" selected="">10</option>
                        <option value="25">25</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                    </select>&nbsp;</label></div>
        </div>
        <div class="col-md-6">
            <div class="text-md-right dataTables_filter" id="dataTable_filter"><label><input type="search"
                        class="form-control form-control-sm" aria-controls="dataTable" placeholder="Search"></label>
            </div>
        </div>
    </div>
    <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
        <table class="table my-0" id="dataTable">
            <thead>
                <tr>
                    <th>Bus Name</th>
                    <th>Region From</th>
                    <th>Region To</th>
                    <th>Travel Date</th>
                    <th>Price</th>
                    <th>Depart Time</th>
                    <th>Arrival Time</th>
                    <th>Pickup Area</th>
                    <th>Arrival Area</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($routes_available as $route)
                    <tr>
                        <td>{{$route->bus->bus}}</td>
                        <td>{{$route->region_from}}</td>
                        <td>{{$route->region_to}}</td>
                        <td>{{$route->travel_date}}</td>
                        <td class="text-success">{{number_format($route->price)}}</td>
                        <td>{{$route->depart_time}}</td>
                        <td>{{$route->arrival_time}}</td>
                        <td class="text-primary">{{$route->depart_area}}</td>
                        <td class="text-primary">{{$route->arrival_area}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="row">
        
        <div class="col-md-6">
            <nav class="d-lg-flex justify-content-end dataTables_paginate paging_simple_numbers">
                {{$routes_available->links()}}
            </nav>
        </div>
    </div>
</div>
