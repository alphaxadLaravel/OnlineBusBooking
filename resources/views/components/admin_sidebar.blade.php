<nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-danger p-0">
    <div class="container-fluid d-flex flex-column p-0"><a
            class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
            <div class="sidebar-brand-icon rotate-n-15"><i class="fas fa-laugh-wink"></i></div>
            <div class="sidebar-brand-text mx-3"><span>Bus ticketing</span></div>
        </a>
        <hr class="sidebar-divider my-0">
        <ul class="navbar-nav text-light" id="accordionSidebar">
            @if (!session()->get('user')['role'])
                <li class="nav-item"><a class="nav-link {{ request()->is('add_company') ? 'active' : '' }}"
                        href="/add_company"><i class="fas fa-plus"></i><span>Add Company</span></a></li>
            @endif
            @if (session()->get('user')['role'] == 'admin')
                <li class="nav-item"><a class="nav-link {{ request()->is('admin_dashboard') ? 'active' : '' }}"
                        href="/admin_dashboard"><i class="fas fa-tachometer-alt"></i><span>Dashboard</span></a></li>
                <li class="nav-item"><a class="nav-link {{ request()->is('add_company') ? 'active' : '' }}"
                        href="/add_company"><i class="fas fa-plus"></i><span>Add Company</span></a></li>

                <li class="nav-item"><a class="nav-link {{ request()->is('companies') ? 'active' : '' }}"
                        href="/companies"><i class="fas fa-users"></i><span>Companies</span></a></li>
            @endif

            @if (session()->get('user')['role'] == 'SubAdmin')
                <li class="nav-item"><a class="nav-link {{ request()->is('admin_dashboard') ? 'active' : '' }}"
                        href="/admin_dashboard"><i class="fas fa-tachometer-alt"></i><span>Dashboard</span></a></li>
                <li class="nav-item"><a class="nav-link {{ request()->is('add_bus') ? 'active' : '' }}"
                        href="/add_bus"><i class="fas fa-plus"></i><span>Add
                            Bus</span></a></li>
                <li class="nav-item"><a class="nav-link {{ request()->is('bus_route') ? 'active' : '' }}"
                        href="/bus_route"><i class="fas fa-plus"></i><span>New Bus Route</span></a></li>

                <li class="nav-item"><a class="nav-link {{ request()->is('add_agent') ? 'active' : '' }}"
                        href="/add_agent"><i class="fas fa-user-plus"></i><span>Add
                            Agent</span></a></li>
                <li class="nav-item"><a class="nav-link {{ request()->is('agents_list') ? 'active' : '' }}"
                        href="/agents_list"><i class="fas fa-users"></i><span>Agents
                            lists</span></a></li>

                <li class="nav-item"><a class="nav-link {{ request()->is('bus_list') ? 'active' : '' }}"
                        href="/bus_list"><i class="fas fa-bus"></i><span>Bus
                            lists</span></a></li>

                <li class="nav-item"><a class="nav-link {{ request()->is('routes_available') ? 'active' : '' }}"
                        href="/routes_available"><i class="fas fa-bus"></i><span>routes Available</span></a></li>

                <li class="nav-item"><a class="nav-link {{ request()->is('bookings') ? 'active' : '' }}"
                        href="/bookings"><i class="fas fa-book"></i><span>All
                            Bookings</span></a></li>

                <li class="nav-item"></li>
                <li class="nav-item"><a class="nav-link {{ request()->is('invoices') ? 'active' : '' }}"
                        href="/invoices"><i class="fas fa-donate"></i><span>Invoices</span></a></li>


                <li class="nav-item"><a class="nav-link {{ request()->is('transactions') ? 'active' : '' }}"
                        href="/transactions"><i class="fas fa-donate"></i><span>Transactions</span></a></li>
            @endif

        </ul>
        <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle"
                type="button"></button></div>
    </div>
</nav>
