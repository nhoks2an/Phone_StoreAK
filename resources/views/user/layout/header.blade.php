<div class="header">
    <div class="center-layout">
        <div class="header-top flex">
            <div class="title-banner">
                <marquee>Chào mừng bạn đến với website AK Phone</marquee>
            </div>
            <div class="btn-ac">
                <ul>

                    <!-- <li><i class="fas fa-user"></i><a href="">Thông tin cá nhân</a></li>
                    <li><i class="fas fa-user"></i><a href="">Đăng xuất</a></li> -->
                </ul>
            </div>
        </div>
        <div class="header-bottom">
            <div class="logo">
                <img src="../images/logo.png">
            </div>
            <div class="banner"></div>
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
                    <li><i class="fas fa-home"></i><a href="/">Trang chủ</a></li>
                    <li><i class="fas fa-newspaper"></i><a href="sanpham">Tin tức</a></li>
                    <li><i class="fas fa-address-card"></i><a href="">Giới thiệu</a></li>
                    <li><i class="fas fa-headset"></i><a href="lienhe">Liên hệ</a></li>
                    <li><i class="fas fa-shopping-cart"></i><a href="{{route('giohang')}}">Giỏ hàng</a></li>
                    <li><i class="fas fa-user"></i><a href="dangnhap">Đăng nhập</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>