 <!-- Sidebar -->
 <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">MB ADMIN</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="/admin">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Users
    </div>

    <li class="nav-item active">
        <a class="nav-link" href="{{ route('diaries.index') }}">
            <i class="fa-solid fa-book"></i>
            <span>Diaries</span></a>
    </li>

    <li class="nav-item active">
        <a class="nav-link" href="{{ route('documents.index') }}">
            <i class="fa-regular fa-file-lines"></i>
            <span>Documentions</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Supervisor
    </div>

    <li class="nav-item active">
        <a class="nav-link" href="{{ route('approval-requests.index') }}">
            <i class="fa-solid fa-user-tie"></i>
            <span>Approval Request</span></a>
    </li>

    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Admin
    </div>

    <li class="nav-item active">
        <a class="nav-link" href="{{ route('users.index') }}">
            <i class="fa-solid fa-users"></i>
            <span>Users</span></a>
    </li>

</ul>
<!-- End of Sidebar -->