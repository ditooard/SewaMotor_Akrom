<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fa fa-motorcycle" aria-hidden="true"></i>
        </div>
        <div class="sidebar-brand-text mx-3">AKROM</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->

    <li class="nav-item active">
        <a class="nav-link" href="{{ route('dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>DASHBOARD</span></a>
    </li>
    <hr class="sidebar-divider">

    @if (auth()->user()->level == "customer")

    <li class="nav-item active">
        <a class="nav-link" href="{{ route('createSewa') }}">
            <i class="fa fa-car" aria-hidden="true"></i>
            <span>Sewa Kendaraan</span></a>
    </li>

    <hr class="sidebar-divider">

    <li class="nav-item active">
        <a class="nav-link" href="{{ route('statusSewaCst') }}">
            <i class="fa fa-info-circle" aria-hidden="true"></i>
            <span>Status Sewa</span></a>
    </li>

    <hr class="sidebar-divider">

    <li class="nav-item active">
        <a class="nav-link" href="{{ route('riwayatSewa') }}">
            <i class="fa fa-bookmark" aria-hidden="true"></i>
            <span>Riwayat Sewa</span></a>
    </li>

    <hr class="sidebar-divider">

    <li class="nav-item active">
        <a class="nav-link" href="{{ route('customer.membership') }}">
            <i class="fa fa-star" aria-hidden="true"></i>
            <span>Membership</span></a>
    </li>

    @endif


    @if (auth()->user()->level == "admin")
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('admin.tampilFormDataMotor') }}">
            <i class="fa fa-motorcycle"></i>
            <span>Data Kendaraan</span></a>
    </li>

    <hr class="sidebar-divider">

    <li class="nav-item active">
        <a class="nav-link" href="{{ route('admin.daftarPenyewa') }}">
            <i class="fas fa-fw fa-table"></i>
            <span>Daftar Penyewa</span></a>
    </li>

    <hr class="sidebar-divider">

    <li class="nav-item active">
        <a class="nav-link" href="{{ route('admin.sewaMotor') }}">
            <i class="fa fa-info-circle" aria-hidden="true"></i>
            <span>Status Sewa</span></a>
    </li>

    <hr class="sidebar-divider">

    <li class="nav-item active">
        <a class="nav-link" href="{{ route('admin.validasiKtp') }}">
            <i class="fa fa-check-circle" aria-hidden="true"></i>
            <span>Validasi KTP</span></a>
    </li>

    <hr class="sidebar-divider">

    <li class="nav-item active">
        <a class="nav-link" href="{{ route('admin.validasiMember') }}">
            <i class="fa fa-star" aria-hidden="true"></i>
            <span> Validasi Membership</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    @endif
    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

    <!-- Sidebar Message -->
   

</ul>