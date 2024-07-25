 <!-- Sidebar -->
 <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{url('')}}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{url('index')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{route('user.index')}}">
            <i class="fas fa-fw fa-users"></i>
            <span>User</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{route('posts.index')}}">
            <i class="fas fa-fw fa-blog"></i>
            <span>Posts</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{route('comment.index')}}">
            <i class="fas fa-fw fa-comments"></i>
            <span>Comment</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Tugas Praktik Mandiri
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTpm"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-tasks"></i>
            <span>Tugas Praktik</span>
        </a>
        <div id="collapseTpm" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">TPM :</h6>
                <a class="collapse-item" href="{{url('dataArray')}}">Sesi 1</a>
                <a class="collapse-item" href="cards.html">Cards</a>
            </div>
        </div>
    </li>
</ul>
<!-- End of Sidebar -->