<div class="card-body">
    <div class="row">
        <div class="col-md-6 text-nowrap">
            <div id="dataTable_length" class="dataTables_length" aria-controls="dataTable"><label>Show&nbsp;<select class="form-control form-control-sm custom-select custom-select-sm">
                        <option value="10" selected="">10</option>
                        <option value="25">25</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                    </select>&nbsp;</label></div>
        </div>
        <div class="col-md-6">
            <div class="text-md-right dataTables_filter" id="dataTable_filter"><label><input type="search" class="form-control form-control-sm" aria-controls="dataTable" placeholder="Search"></label></div>
        </div>
    </div>
    <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
        <table class="table my-0" id="dataTable">
            <thead>
                <tr>
                    <th>Bus Name</th>
                    <th>Region From</th>
                    <th>Region To</th>
                    <th>Date</th>
                    <th>Depart Time</th>
                    <th>Arrival Time</th>
                    <th>Pickup Area</th>
                    <th>Arrival Area</th>
                </tr>
            </thead>
            <tbody>
                @for ($i = 0; $i < 5; $i++)
                <tr>
                    <td>Alpha Jozee</td>
                    <td>Abood Express</td>
                    <td>C1</td>
                    <td>60,000</td>
                    <td class="text-success">6,000</td>
                    <td>20/02/2022</td>
                    <td class="text-primary">Recived..</td>
                </tr>
                @endfor
            </tbody>
            
        </table>
    </div>
    <div class="row">
        <div class="col-md-6 align-self-center">
            <p id="dataTable_info" class="dataTables_info" role="status" aria-live="polite">Showing 1 to 10 of 27</p>
        </div>
        <div class="col-md-6">
            <nav class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers">
                <ul class="pagination">
                    <li class="page-item disabled"><a class="page-link" aria-label="Previous" href="#"><span aria-hidden="true">«</span></a></li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" aria-label="Next" href="#"><span aria-hidden="true">»</span></a></li>
                </ul>
            </nav>
        </div>
    </div>
</div>