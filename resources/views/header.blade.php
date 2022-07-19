<!-- Topbar -->
<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

    <!-- Sidebar Toggle (Topbar) -->
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
    </button>

        <div>
            <span class="xinchao"> Xin chào Admin!</span>
        </div>

    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto">
        <div class="topbar-divider d-none d-sm-block"></div>

        <li class="nav-item d-sm-inline-block">
            <form method ="post" action="{{route('logout')}}"> 
                @csrf
                <button  type="submit" class="nav-link" style="border: none;background: #fff;"><i class="fas fa-sign-out-alt mr-1"></i>Đăng xuất</button>
            </form>     
        </li>
    </ul>

</nav>
<!-- End of Topbar -->



