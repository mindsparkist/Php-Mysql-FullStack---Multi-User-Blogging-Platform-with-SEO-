<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Admin Panel</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item <?php if ($page=='dashboard') {
    echo 'active';
}?>">
        <a class="nav-link" href="dashboard.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>
    <!-- analytics -->
    <li class="nav-item <?php if ($page=='analytics') {
    echo 'active';
}?>">
        <a class="nav-link" href="analytics.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Analytics</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        <i class="fas fa-pen fa-fw"></i> Post
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item <?php if ($page=='newpost') {
    echo 'active';
}?>">
        <a class="nav-link" href="newpost.php">
            <i class="fas fa-pen-nib"></i>
            <span>Add New Post</span>
        </a>
    </li>

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item <?php if ($page=='category') {
    echo 'active';
}?>">
        <a class="nav-link " href="categories.php">
            <i class="fa fa-list-alt"></i>
            <span>category</span></a>
    </li>
    <!-- contract us -->
    <li class="nav-item <?php if ($page=='contact') {
    echo 'active';
}?>">
        <a class="nav-link " href="contract.php">
            <i class="fa fa-envelope" aria-hidden="true"></i>
            <span>contract</span></a>
    </li>

    <li class="nav-item <?php if ($page=='Comment') {
    echo 'active';
}?>">
        <a class="nav-link " href="#">
            <i class="fa fa-comment"></i>
            <span>Comment</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Manage Admin
    </div>


    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item <?php if ($page=='MAdmin') {
    echo 'active';
}?>">
        <a class="nav-link" href="#">
            <i class="fa fa-user"></i>
            <span>Manage Admin</span></a>
    </li>

    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link" target="_blank" href="http://localhost/blog/">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Live Blog</span></a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="logout.php">
            <i class="fas fa-sign-out-alt"></i>
            <span>Logout</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>



</ul>
<!-- End of Sidebar -->