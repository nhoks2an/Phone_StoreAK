
            <ul class="nav nav-pills nav-sidebar flex-column background navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
                    <div class="sidebar-brand-icon rotate-n-15">
                        <i class="fas fa-laugh-wink"></i>
                    </div>
                    <div class="sidebar-brand-text mx-3">AK Admin</div>
                </a>
                <li class="nav-item {{(request()->is('dashboard')) ? 'menu-open' : '' }}">
                    <a class="nav-link {{(request()->is('dashboard')) ? 'active' : '' }}" href="{{route('dashboard')}}">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item {{(request()->is('taikhoan')) ||(request()->is('taikhoan/*')) ? 'menu-open' : '' }}">
                     <a class="nav-link {{(request()->is('taikhoan')) ||(request()->is('taikhoan/*')) ? 'active' : '' }} " href="{{route('taikhoan.index')}}">
                     <i class="fas fa-user-cog"></i>
                        <p>
                            Quản lý tài khoản
                        </p>
                    </a>
                </li>
                <li class="nav-item {{ (request()->is('hang')) || (request()->is('loaiSanPham')) || (request()->is('sanPham')) || (request()->is('hang/create')) ||(request()->is('hang/*')) || (request()->is('loaiSanPham/create')) ||(request()->is('loaiSanPham/*')) || (request()->is('sanPham/create')) ||(request()->is('sanPham/*')) ||(request()->is('stock/*'))||(request()->is('abum/*')) ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ (request()->is('hang')) || (request()->is('loaiSanPham')) || (request()->is('sanPham')) || (request()->is('hang/create')) ||(request()->is('hang/*')) || (request()->is('loaiSanPham/create')) ||(request()->is('loaiSanPham/*')) || (request()->is('sanPham/create')) ||(request()->is('sanPham/*')) ||(request()->is('stock/*')) ||(request()->is('abum/*')) ? 'active' : '' }}">
                    <i class="fas fas fa-boxes"></i>
                        <p>
                             Quản lý sản phẩm
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('hang.index')}}" class="nav-link {{ (request()->is('hang')) || (request()->is('hang/create')) ||(request()->is('hang/*')) ? 'active' : ''}}">
                            <i class="far fa-caret-square-right"></i>
                                <p>Hãng</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('loaiSanPham.index')}}" class="nav-link {{ (request()->is('loaiSanPham')) || (request()->is('loaiSanPham/create')) ||(request()->is('loaiSanPham/*')) ? 'active' : ''}}">
                            <i class="far fa-caret-square-right"></i>
                                <p>Loại sản phẩm</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('sanPham.index')}}" class="nav-link {{ (request()->is('sanPham')) || (request()->is('sanPham/create')) ||(request()->is('sanPham/*')) ||(request()->is('stock/*'))||(request()->is('abum/*')) ? 'active' : ''}}">
                            <i class="far fa-caret-square-right"></i>
                                <p>  Sản phẩm</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item {{(request()->is('camera')) || (request()->is('RAM')) || (request()->is('ROM')) ||
                            (request()->is('manhinh')) || (request()->is('hieunangpin')) || (request()->is('hedieuhanh')) ||
                        (request()->is('tinhnangdb')) || (request()->is('thietke')) || (request()->is('mausac')) || (request()->is('camera/create'))
                        || (request()->is('RAM/create'))|| (request()->is('ROM/create')) || (request()->is('manhinh/create')) || (request()->is('hieunangpin/create'))
                        || (request()->is('hedieuhanh/create')) || (request()->is('tinhnangdb/create')) || (request()->is('thietke/create')) || (request()->is('mausac/create')) ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{(request()->is('camera')) || (request()->is('RAM')) || (request()->is('ROM')) ||
                            (request()->is('manhinh')) || (request()->is('hieunangpin')) || (request()->is('hedieuhanh')) ||
                        (request()->is('tinhnangdb')) || (request()->is('thietke')) || (request()->is('mausac')) || (request()->is('camera/create'))
                        || (request()->is('RAM/create'))|| (request()->is('ROM/create')) || (request()->is('manhinh/create')) || (request()->is('hieunangpin/create'))
                        || (request()->is('hedieuhanh/create')) || (request()->is('tinhnangdb/create')) || (request()->is('thietke/create')) || (request()->is('mausac/create')) ? 'active' : '' }}">
                    <i class="fas fas fa-boxes"></i>
                        <p>
                            Quản lý chi tiết SP
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('camera.index')}}" class="nav-link {{ (request()->is('camera')) || (request()->is('camera/create')) ? 'active' : ''}}">
                            <i class="far fa-caret-square-right"></i>
                                <p>Camera</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('RAM.index')}}" class="nav-link {{ (request()->is('RAM')) || (request()->is('RAM/create')) ? 'active' : ''}}">
                            <i class="far fa-caret-square-right"></i>
                                <p>Ram</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('ROM.index')}}" class="nav-link {{ (request()->is('ROM')) || (request()->is('ROM/create')) ? 'active' : ''}}">
                            <i class="far fa-caret-square-right"></i>
                                <p>Rom</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('manhinh.index')}}" class="nav-link {{ (request()->is('manhinh')) || (request()->is('manhinh/create'))? 'active' : ''}}">
                            <i class="far fa-caret-square-right"></i>
                                <p>Màn hình</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('hieunangpin.index')}}" class="nav-link {{ (request()->is('hieunangpin')) || (request()->is('hieunangpin/create'))  ? 'active' : ''}}">
                            <i class="far fa-caret-square-right"></i>
                                <p>Hiệu năng & Pin</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('hedieuhanh.index')}}" class="nav-link {{ (request()->is('hedieuhanh')) || (request()->is('hedieuhanh/create'))  ? 'active' : ''}}">
                            <i class="far fa-caret-square-right"></i>
                                <p>Hệ điều hành</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('tinhnangdb.index')}}" class="nav-link {{ (request()->is('tinhnangdb')) || (request()->is('tinhnangdb/create')) ? 'active' : ''}}">
                            <i class="far fa-caret-square-right"></i>
                                <p>Tính năng</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('thietke.index')}}" class="nav-link {{ (request()->is('thietke')) || (request()->is('thietke/create')) ? 'active' : ''}}">
                            <i class="far fa-caret-square-right"></i>
                                <p>Thiết kế</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('mausac.index')}}" class="nav-link {{ (request()->is('mausac')) || (request()->is('mausac/create')) ? 'active' : ''}}">
                            <i class="far fa-caret-square-right"></i>
                                <p> Màu sắc</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item {{ (request()->is('hoadon')) || (request()->is('hoadon23')) || (request()->is('hoadon4')) || (request()->is('cthoadon')) ||(request()->is('hoadon1'))  ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ (request()->is('hoadon')) || (request()->is('hoadon23')) || (request()->is('hoadon4')) || (request()->is('cthoadon')) ||(request()->is('hoadon1')) ? 'active' : '' }}">
                    <i class="fas fa-file-invoice-dollar"></i>
                        <p>
                            Quản lý hóa đơn
                         
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('hoadon.index')}}" class="nav-link {{ (request()->is('hoadon')) ||(request()->is('hoadon1')) ? 'active' : ''}}">
                            <i class="far fa-caret-square-right"></i>
                                <p>Chưa duyệt</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('hoadon.indexduyet')}}" class="nav-link {{ (request()->is('hoadon23')) ? 'active' : ''}}">
                            <i class="far fa-caret-square-right"></i>
                                <p>Đã duyệt</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('hoadon.indexgiao')}}" class="nav-link {{ (request()->is('hoadon4')) ? 'active' : ''}}">
                            <i class="far fa-caret-square-right"></i>
                                <p>  Đã giao</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('cthoadon.index')}}" class="nav-link {{ (request()->is('cthoadon')) ? 'active' : ''}}">
                            <i class="far fa-caret-square-right"></i>
                                <p> Chi tiết hóa đơn</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item {{ (request()->is('sologan')) || (request()->is('gioithieu')) || (request()->is('thongtinlh')) || (request()->is('footer'))  ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ (request()->is('sologan')) || (request()->is('gioithieu')) || (request()->is('thongtinlh')) || (request()->is('footer')) ? 'active' : '' }}">
                    <i class="fas fas fa-bookmark"></i>
                        <p>
                        Quản lý trang tĩnh
                          
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('sologan.index')}}" class="nav-link {{ (request()->is('sologan')) ? 'active' : ''}}">
                            <i class="far fa-caret-square-right"></i>
                                <p>Slogan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('gioithieu.index')}}" class="nav-link {{ (request()->is('gioithieu')) ? 'active' : ''}}">
                            <i class="far fa-caret-square-right"></i>
                                <p>Giới thiệu</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('thongtinlh.index')}}" class="nav-link {{ (request()->is('thongtinlh')) ? 'active' : ''}}">
                            <i class="far fa-caret-square-right"></i>
                                <p>Liên hệ</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('footer.index')}}" class="nav-link {{ (request()->is('footer')) ? 'active' : ''}}">
                            <i class="far fa-caret-square-right"></i>
                                <p>Footer</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item {{ (request()->is('slideShow')) || (request()->is('slideShow/create')) || (request()->is('slideShow/*')) || (request()->is('banner/create')) || (request()->is('banner'))  ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ (request()->is('slideShow')) || (request()->is('slideShow/create')) || (request()->is('slideShow/*')) || (request()->is('banner/create')) || (request()->is('banner')) ? 'active' : '' }}">
                    <i class="fas fas fa-photo-video"></i>
                        <p>
                        Quản lý Hình ảnh
                          
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('slideShow.index')}}" class="nav-link {{ (request()->is('slideShow')) || (request()->is('slideShow/create')) || (request()->is('slideShow/*')) ? 'active' : ''}}">
                            <i class="far fa-caret-square-right"></i>
                                <p>    SlideShow</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('banner.index')}}" class="nav-link {{ (request()->is('banner')) || (request()->is('banner/create')) ? 'active' : ''}}">
                            <i class="far fa-caret-square-right"></i>
                                <p>  Banner</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item {{ (request()->is('tinTuc')) || (request()->is('tinTuc/create')) || (request()->is('tinTuc/*')) || (request()->is('chinhSach/create')) || (request()->is('chinhSach')) || (request()->is('chinhSach/*'))   ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ (request()->is('tinTuc')) || (request()->is('tinTuc/create')) || (request()->is('tinTuc/*')) || (request()->is('chinhSach/create')) || (request()->is('chinhSach')) || (request()->is('chinhSach/*'))   ? 'active' : '' }}">
                    <i class=" far fa-newspaper"></i>
                        <p>
                        Quản lý bài viết<i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('tinTuc.index')}}" class="nav-link {{ (request()->is('tinTuc')) || (request()->is('tinTuc/create')) || (request()->is('tinTuc/*')) ? 'active' : ''}}">
                            <i class="far fa-caret-square-right"></i>
                                <p>        Tin
                    tức</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('chinhSach.index')}}" class="nav-link {{ (request()->is('chinhSach')) || (request()->is('chinhSach/create')) || (request()->is('chinhSach/*'))  ? 'active' : ''}}">
                            <i class="far fa-caret-square-right"></i>
                                <p>   Chính sách</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item {{(request()->is('lienhe')) ? 'menu-open' : '' }}">
                    <a class="nav-link {{(request()->is('lienhe')) ? 'active' : '' }}" href="{{route('lienhe.index')}}">
                        <i class="fas fa-envelope"></i>
                        <p>
                        Quản lý nhận tin
                        </p>
                    </a>
                </li>

            </ul>


<!-- End of Sidebar -->
<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>
<!-- Logout Modal-->






