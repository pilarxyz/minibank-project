<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <img src="https://cdn.discordapp.com/attachments/785538389566029844/975911245112836116/Logo.png" alt="Logo" class="logo" width="80%" />
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseDashboard" aria-expanded="true"
            aria-controls="collapseDashboard">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
        <div id="collapseDashboard" class="collapse show" aria-labelledby="headingPages"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Admin Menu :</h6>
                <a class="collapse-item" href="{{ url('/admin/home')}}">Employee Data</a>
                <a class="collapse-item" href="{{ url('/admin/create')}}">Create Account</a>
                <a class="collapse-item" href="{{ route('admin.config') }}">Configuration</a>
                <div class="collapse-divider"></div>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">
    
    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>