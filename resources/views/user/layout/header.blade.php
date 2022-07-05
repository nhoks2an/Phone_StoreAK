<div class="top-container">
    <div class="box-header">
        <div class="header">
            <div class="header-top flex">
                <div class="title-banner">
                    @foreach($sologan as $slg)
                    <marquee>{{$slg->tieude}}</marquee>
                    @endforeach
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
                                    <form name="search_form" id="search_form" method="get"
                                        onsubmit="javascript: submit_form_search();return false;">
                                        <input type="text" value="" aria-label="Tìm kiếm sản phẩm?"
                                            placeholder="Tìm kiếm sản phẩm?" id="keyword" name="keyword"
                                            class="keyword input-text" autocomplete="off">

                                        <button type="submit" class="button-search button" aria-label="tìm kiếm">
                                            <i class="fas fa-search"></i>
                                        </button>

                                        <input type="hidden" name="module" value="news">
                                        <input type="hidden" name="module" id="link_search" value="">
                                        <input type="hidden" name="view" value="search">
                                        <input type="hidden" name="Itemid" value="10">
                                    </form>
                                </div>

                            </div>
                        </div>
                        <ul>
                            <li><a class="box-wall" href="/">Trang chủ</a></li>
                            <li><a class="box-wall" href="{{route('tinTuc1.index')}}">Tin tức</a></li>
                            <li><a class="box-wall" href="{{route('loadding.gioithieu')}}">Giới thiệu</a></li>
                            <li><a href="{{route('loadding.lienheuser')}}">Liên hệ</a></li>
                            @if($datauser==null)
                            <li class="box-li"><i class="fas fa-shopping-cart"></i><a href="{{route('cart.show')}}">Giỏ
                                    hàng</a>
                            </li>
                            <li class="box-li"><i class="fas fa-sign-in-alt"></i><a href="{{route('user.login')}}">Đăng
                                    nhập</a></li>
                            @else
                            <li class="box-li"></i><a href="{{route('user.showprofile',['user'=>$datauser])}}">Thông tin
                                    đăng nhập</a></li>
                            <li class="box-li"></i><a href="#">Lịch sử mua hàng</a></li>
                            <li class="box-li"><i class="fas fa-shopping-cart"></i><a href="{{route('cart.show')}}">Giỏ
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