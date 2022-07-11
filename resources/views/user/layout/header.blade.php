<div class="top-container">
    <div class="box-header">
        <div class="header">
            <div class="header-top flex">
                <div class="title-banner">
                    <marquee>{{$sologan->tieude}}</marquee>
                </div>
            </div>
            <div class="center-layout-header">
                <div class="header-bottom">
                    <div class="logo">
                        <img src="../images/logo.png">
                    </div>
                    <div class="menu">
                        <div class="regions_search">
                            <div id="search" class="search search-contain s_close fr">
                                <div class="search-content">
                                    <form name="search_form" id="search_form" method="" acction="">
                                        <input type="text" value="" aria-label="Tìm kiếm sản phẩm?"
                                            placeholder="Tìm kiếm sản phẩm?" id="keyword" name="keyword"
                                            class="keyword input-text">
                                        <button type="submit" class="button-search button" aria-label="tìm kiếm"
                                            onclick="">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </form>
                                </div>

                            </div>
                        </div>
                        <ul>
                            <li class=""><a class="box-wall {{(request()->is('/')) ? 'active' : '' }}" href="/">Trang chủ</a></li>
                            <li><a class="box-wall {{(request()->is('tintuc1')) ? 'active' : '' }}" href="{{route('tinTuc1.index')}}">Tin tức</a></li>
                            <li><a class="box-wall {{(request()->is('gioithieuuser')) ? 'active' : '' }}" href="{{route('loadding.gioithieu')}}">Giới thiệu</a></li>
                            <li><a class="{{(request()->is('lienheuser')) ? 'active' : '' }}" href="{{route('loadding.lienheuser')}}">Liên hệ</a></li>
                            @if($datauser==null)
                            <li class="box-li"><i class="fas fa-shopping-cart"></i><a href="">Giỏ
                                    hàng</a>
                            </li>
                            <li class="box-li"><i class="fas fa-sign-in-alt"></i><a class="{{(request()->is('dangnhap')) ? 'active' : '' }}" href="{{route('user.login')}}">Đăng
                                    nhập</a></li>
                            @else
                            <li class="box-li"></i><a class="{{(request()->is('thongtincanhan')) ? 'active' : '' }}" href="{{route('user.showprofile',['user'=>$datauser])}}">Thông tin
                                    đăng nhập</a></li>
                            <li class="box-li"></i><a class="{{(request()->is('lichsumuahang')) ? 'active' : '' }}"  href="{{route('dathang.showhd',$datauser->id)}}">Lịch sử mua
                                    hàng</a></li>
                            <li class="box-li"><i class="fas fa-shopping-cart"></i><a
                                    href="{{route('cart.show',$datauser->id)}}">Giỏ
                                    hàng</a>
                            </li>
                            <li class="box-li"><i class="fas fa-sign-out-alt"></i><a
                                    href="{{route('user.logout')}}">Đăng xuất</a></li>
                            @endif
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>