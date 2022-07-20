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
                    <th>Company Name</th>
                    <th>Admin Name</th>
                    <th>Admin Phone</th>
                    <th>Admin Email</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($companies as $company)
                    <tr>
                        <td>{{ $company->companyName }}</td>
                        <td>{{ $company->sub_admin->fullname }}</td>
                        <td>{{ $company->sub_admin->phone }}</td>
                        <td>{{ $company->sub_admin->email }}</td>
                    </tr>
                @endforeach             
            </tbody>
        </table>
    </div>
    <div class="row">
        <div class="col-md-6">
            <nav class="d-lg-flex justify-content-end dataTables_paginate paging_simple_numbers">
                {{$companies->links()}}
            </nav>
        </div>
    </div>
</div>
