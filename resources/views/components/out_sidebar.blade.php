<nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-danger p-0">
    <div class="container-fluid d-flex flex-column p-0"><a
            class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
            <div class="sidebar-brand-icon rotate-n-15"><i class="fas fa-laugh-wink"></i></div>
            <div class="sidebar-brand-text mx-3"><span>Bus ticketing</span></div>
        </a>
        <hr class="sidebar-divider my-0">
        <ul class="navbar-nav text-light" id="accordionSidebar">
            <li class="nav-item"><a class="nav-link {{ request()->is('my_ticket') ? 'active' : '' }}"
                data-toggle="modal" data-target="#modelId"><i class="fas fa-eye"></i><span>My Ticket</span></a></li>
                <li class="nav-item"><a class="nav-link {{ request()->is('/') ? 'active' : '' }}"
                    href="/"><i class="fas fa-search"></i><span>Search</span></a></li>
        </ul>
        <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle"
                type="button"></button></div>
    </div>
</nav>


<!-- Modal -->
<div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">View Your Tickets</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">
                <form action="/my_ticket" method="post">
                    @csrf 
                    <div class="form-group">
                        <input type="text"
                          class="form-control" name="phone" id="" aria-describedby="helpId" placeholder="Enter Phone Number..">
                          <small class="text-danger">
                            @error('phone')
                                {{ $message }}
                            @enderror
                        </small>
                        </div>
                      <button type="submit" class="btn btn-sm btn-outline-danger">View Ticket</button>
                </form>
            </div>
            <
        </div>
    </div>
</div>
