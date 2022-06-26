<!-- Sidebar -->
<ul class="background navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">AK Admin</div>
    </a>
    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{(request()->is('dashboard')) ? 'active' : '' }}">
        <a class="nav-link" href="{{route('dashboard')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <hr class="sidebar-divider my-0">

    <li class="nav-item {{(request()->is('taikhoan')) ? 'active' : '' }}">
        <a class="nav-link " href="{{route('taikhoan.index')}}">
            <i class="fas fa-user-cog"></i>
            <span>Quản lý tài khoản</span>
        </a>
    </li>
    <hr class="sidebar-divider my-0">
    <!-- quan li san pham -->
    <li
        class="nav-item {{(request()->is('hang')) ? 'active' : '' }} {{(request()->is('loaiSanPham')) ? 'active' : '' }} {{(request()->is('sanPham')) ? 'active' : '' }}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
            aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fas fa-boxes"></i>
            <span>Quản lý sản phẩm</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{route('hang.index')}}"> <i class="far fa-caret-square-right"></i>
                    Hãng</a>
                <a class="collapse-item" href="{{route('loaiSanPham.index')}}"> <i
                        class="far fa-caret-square-right"></i> Loại sản phẩm</a>
                <a class="collapse-item" href="{{route('sanPham.index')}}"> <i class="far fa-caret-square-right"></i>
                    Sản phẩm</a>
            </div>
        </div>
    </li>
    <hr class="sidebar-divider my-0">
    <li
        class="nav-item {{(request()->is('camera')) ? 'active' : '' }} {{(request()->is('RAM')) ? 'active' : '' }} {{(request()->is('ROM')) ? 'active' : '' }}
    {{(request()->is('manhinh')) ? 'active' : '' }} {{(request()->is('hieunangpin')) ? 'active' : '' }} {{(request()->is('hedieuhanh')) ? 'active' : '' }}
    {{(request()->is('tinhnangdb')) ? 'active' : '' }} {{(request()->is('thietke')) ? 'active' : '' }} {{(request()->is('mausac')) ? 'active' : '' }}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#chitietsanpham" aria-expanded="true"
            aria-controls="collapseUtilities">
            <i class="fas fas fa-boxes"></i>
            <span>Quản lý chi tiết SP</span>
        </a>
        <div id="chitietsanpham" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{route('camera.index')}}"> <i class="far fa-caret-square-right"></i>
                    Camera</a>
                <a class="collapse-item" href="{{route('RAM.index')}}"> <i class="far fa-caret-square-right"></i>
                    Ram</a>
                <a class="collapse-item" href="{{route('ROM.index')}}"> <i class="far fa-caret-square-right"></i>
                    Rom</a>
                <a class="collapse-item" href="{{route('manhinh.index')}}"> <i class="far fa-caret-square-right"></i>
                    Màn hình</a>
                <a class="collapse-item" href="{{route('hieunangpin.index')}}"> <i
                        class="far fa-caret-square-right"></i> Hiệu năng & Pin</a>
                <a class="collapse-item" href="{{route('hedieuhanh.index')}}"> <i class="far fa-caret-square-right"></i>
                    Hệ điều hành</a>
                <a class="collapse-item" href="{{route('tinhnangdb.index')}}"> <i class="far fa-caret-square-right"></i>
                    Tính năng</a>
                <a class="collapse-item" href="{{route('thietke.index')}}"> <i class="far fa-caret-square-right"></i>
                    Thiết kế</a>
                <a class="collapse-item" href="{{route('mausac.index')}}"> <i class="far fa-caret-square-right"></i> Màu
                    sắc</a>
            </div>
        </div>
    </li>
    <hr class="sidebar-divider my-0">
    <!-- hóa đơn -->
    <li
        class="nav-item {{(request()->is('hoadon')) ? 'active' : '' }} {{(request()->is('cthoadon')) ? 'active' : '' }}">
        <a class="nav-link collapsed" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true"
            aria-controls="collapsePages">
            <i class="fas fa-file-invoice-dollar"></i>
            <span>Quản lý hóa đơn</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{route('hoadon')}}"> <i class="far fa-caret-square-right"></i> Hóa
                    đơn</a>
                <a class="collapse-item" href="{{route('cthoadon')}}"> <i class="far fa-caret-square-right"></i> Chi
                    tiết hóa đơn</a>
            </div>
        </div>
    </li>
    <hr class="sidebar-divider my-0">
    <!-- tĩnh -->
    <li
        class="nav-item {{(request()->is('sologan')) ? 'active' : '' }} {{(request()->is('gioithieu')) ? 'active' : '' }} {{(request()->is('banner')) ? 'active' : '' }} {{(request()->is('footerr')) ? 'active' : '' }}">
        <a class="nav-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"
            aria-controls="collapseTwo">
            <i class="fas fas fa-bookmark"></i>
            <span>Quản lý trang tĩnh</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar" style="">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{route('sologan')}}"> <i class="far fa-caret-square-right"></i>
                    Slogan</a>
                <a class="collapse-item" href="{{route('gioithieu.index')}}"> <i class="far fa-caret-square-right"></i>
                    Giới thiệu</a>
                <a class="collapse-item" href="{{route('footer.index')}}"> <i class="far fa-caret-square-right"></i>
                    Footer</a>
            </div>
        </div>
    </li>
    <hr class="sidebar-divider my-0">
    <!-- tĩnh -->
    <li class="nav-item {{(request()->is('logo')) ? 'active' : '' }} {{(request()->is('slideshow')) ? 'active' : '' }}">
        <a class="nav-link collapsed" data-toggle="collapse" data-target="#collapseTwo1" aria-expanded="false"
            aria-controls="collapseTwo1">
            <i class="fas fas fa-photo-video"></i>
            <span>Quản lý Video- Hình ảnh</span>
        </a>
        <div id="collapseTwo1" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar" style="">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{route('slideshow')}}"> <i class="far fa-caret-square-right"></i>
                    SlideShow</a>
            </div>
        </div>
    </li>
    <hr class="sidebar-divider my-0">
    <li
        class="nav-item {{(request()->is('tinTuc')) ? 'active' : '' }} {{(request()->is('chinhSach')) ? 'active' : '' }}">
        <a class="nav-link collapsed" data-toggle="collapse" data-target="#tintuc" aria-expanded="false"
            aria-controls="tintuc">
            <i class="fas fas fa-photo-video"></i>
            <span>Quản lý bài viết</span>
        </a>
        <div id="tintuc" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar" style="">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{route('tinTuc.index')}}"> <i class="far fa-caret-square-right"></i> Tin
                    tức</a>
                <a class="collapse-item" href="{{route('chinhSach.index')}}"> <i class="far fa-caret-square-right"></i>
                    Chính sách</a>

            </div>
        </div>
    </li>
    <hr class="sidebar-divider my-0">
    <!-- Nav Item - Charts -->
    <li class="nav-item {{(request()->is('binhluan')) ? 'active' : '' }}">
        <a class="nav-link" href="{{route('binhluan.index')}}">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Quản lý bình luận</span></a>
    </li>
    <hr class="sidebar-divider my-0">
    <!-- Nav Item - Tables -->

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">
    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>
<!-- End of Sidebar -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="{{route('dangnhap')}}">Logout</a>
            </div>
        </div>
    </div>
</div>