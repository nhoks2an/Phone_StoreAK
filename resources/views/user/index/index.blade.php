@extends('user.index')
@section('sidebar')
@parent
<?php 
$conn = mysqli_connect ('localhost', 'root', '', 'store_phone');
mysqli_set_charset($conn, 'UTF8'); 
$sqlhang = 'SELECT * FROM hangs';
$sqlloai = 'SELECT * FROM loai_san_phams'; 
$sqlmau = 'SELECT * FROM mau_sacs'; 
$sqlhedieuhanh = 'SELECT * FROM he_dieu_hanhs'; 
$sqlpin = 'SELECT * FROM hieu_nang_pins'; 
$sqlmanhinh = 'SELECT * FROM man_hinhs'; 
$sqlcamera = 'SELECT * FROM cameras';
$sqlcram = 'SELECT * FROM r_a_m_s'; 
$sqlrom = 'SELECT * FROM r_o_m_s'; 

$resulthang = $conn->query($sqlhang);
$resultloai = $conn->query($sqlloai);
$resultmau = $conn->query($sqlmau);
$resultpin = $conn->query($sqlpin);
$resultmanhinh = $conn->query($sqlmanhinh);
$resultcamera = $conn->query($sqlcamera);
$resultram = $conn->query($sqlcram);
$resultrom = $conn->query($sqlrom);
$resulthedieuhanh = $conn->query($sqlhedieuhanh);

$hang = [];
$pin = [];
$mau = [];
$hedieuhanh = [];
$ram = [];
$rom = [];
$manhinh = [];
$camera = [];
$loai = [];


while($row = $resultpin->fetch_assoc()) {
	$pin[]=$row;
}
while($row = $resulthang->fetch_assoc()) {
	$hang[]=$row;
}
while($row = $resultmanhinh->fetch_assoc()) {
	$manhinh[]=$row;
}
while($row = $resultcamera->fetch_assoc()) {
	$camera[]=$row;
}
while($row = $resultram->fetch_assoc()) {
	$ram[]=$row;
}
while($row = $resultrom->fetch_assoc()) {
	$rom[]=$row;
}
while($row = $resultmau->fetch_assoc()) {
	$mau[]=$row;
}
while($row = $resulthedieuhanh->fetch_assoc()) {
	$hedieuhanh[]=$row;
}
while($row = $resultloai->fetch_assoc()) {
	$loai[]=$row;
}
mysqli_close($conn);
?>
<script type="text/javascript" crossorigin="anonymous" async=""
    src="//livehelp.tgdd.vn/design/defaulttheme/js/widgetv2/index.js?2022518"></script>
<script src="https://script.crazyegg.com/pages/versioned/common-scripts/11.1.447.js" type="text/javascript" async="">
</script>
<script src="https://connect.facebook.net/signals/config/1634413043451608?v=2.9.62&amp;r=stable" async=""></script>
<script async="" src="//connect.facebook.net/en_US/fbevents.js"></script>
<script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script>
<script type="text/javascript" async="" src="https://script.crazyegg.com/pages/scripts/0017/3880.js"></script>
<script type="text/javascript" async="" src="https://www.googleadservices.com/pagead/conversion_async.js"></script>
<script type="text/javascript" async=""
    src="https://www.googletagmanager.com/gtag/js?id=G-TLRZMSX5ME&amp;l=dataLayer&amp;cx=c"></script>
<script async="" src="https://www.googletagmanager.com/gtm.js?id=GTM-WKQZL8"></script>
<div class="bg-container">
    <div class="swiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="images/slider.png"></div>
            <div class="swiper-slide"><img src="images/slider.png"></div>
            <div class="swiper-slide"><img src="images/slider.png"></div>
            <div class="swiper-slide"><img src="images/slider.png"></div>
            <div class="swiper-slide"><img src="images/slider.png"></div>
        </div>
        <div class="swiper-pagination"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>
</div>
<div class="boloc center">
    <div class="custom-select">
        <select>
            <option value="0">Hãng</option>
            @foreach($hang as $key => $item)
            <option value=""><?php echo $item['tenhang'];?></option>
            @endforeach
        </select>
    </div>
    <div class="custom-select">
        <select>
            <option value="0">Giá</option>
            <option value="1">1.000.000 - 3.000.000đ</option>
            <option value="2">3.000.000 - 5.000.000đ</option>
            <option value="3">5.000.000 - 10.000.000đ</option>
            <option value="4">10.000.000 - 20.000.000đ</option>
            <option value="5">>20.000.000đ</option>
        </select>
    </div>
    <div class="custom-select">
        <select>
            <option value="0">Loại điện thoại</option>
            <option value="1">Android</option>
            <option value="2">IOS</option>
        </select>
    </div>
    <div class="custom-select">
        <select>
            <option value="0">Màu</option>
            @foreach($mau as $key => $item)
            <option value=""><?php echo $item['tenmau'];?></option>
            @endforeach
        </select>
    </div>
    <div class="custom-select">
        <select>
            <option value="0">RAM</option>
            @foreach($ram as $key => $item)
            <option value=""><?php echo $item['soram'].' GB';?></option>
            @endforeach
        </select>
    </div>
    <div class="custom-select">
        <select>
            <option value="0">Bộ nhớ trong</option>
            @foreach($rom as $key => $item)
            <option value=""><?php echo $item['sorom'].' GB';?></option>
            @endforeach
        </select>
    </div>
    <div class="custom-select">
        <select>
            <option value="0">Camera</option>
            @foreach($camera as $key => $item)
            <option value=""><?php echo $item['tencamera'];?></option>
            @endforeach
        </select>
    </div>
    <div class="custom-select">
        <select>
            <option value="0">Màn hình</option>
            @foreach($manhinh as $key => $item)
            <option value=""><?php echo $item['thongso'];?></option>
            @endforeach
        </select>
    </div>
</div>
<div class="box-filter center">
    <div class="box-quicklink  block-scroll-main">
        <div class="lst-quickfilter q-manu ">
            <a href="dtdd-apple-iphone" data-href="dtdd-apple-iphone" data-index="0"
                class="box-quicklink__item bd-radius quicklink-logo">
                <img src="../images/logo-iphone.png" width="30" class="no-text">

            </a>
            <a href="dtdd-samsung" data-href="dtdd-samsung" data-index="0"
                class="box-quicklink__item bd-radius quicklink-logo">
                <img src="../images/samsung.png" width="30" class="no-text">

            </a>
            <a href="dtdd-oppo" data-href="dtdd-oppo" data-index="0"
                class="box-quicklink__item bd-radius quicklink-logo">
                <img src="../images/OPPO.jpg" width="30" class="no-text">

            </a>
            <a href="dtdd-xiaomi" data-href="dtdd-xiaomi" data-index="0"
                class="box-quicklink__item bd-radius quicklink-logo">
                <img src="../images/logo-xiaomi.png" width="30" class="no-text">

            </a>
            <a href="dtdd-vivo" data-href="dtdd-vivo" data-index="0"
                class="box-quicklink__item bd-radius quicklink-logo">
                <img src="../images/vivo-logo.png" width="30" class="no-text">

            </a>
            <a href="dtdd-realme" data-href="dtdd-realme" data-index="0"
                class="box-quicklink__item bd-radius quicklink-logo">
                <img src="../images/realme.png" width="30" class="no-text">

            </a>
            <a href="dtdd-itel" data-href="dtdd-itel" data-index="0"
                class="box-quicklink__item bd-radius quicklink-logo">
                <img src="../images/itel.jpg" width="30" class="no-text">

            </a>
        </div>
    </div>
</div>
<div class="box-noibat">
    <div class="center-layout">
        <div class="center">
            <div class="title-name">SẢN PHẨM BÁN CHẠY</div>
        </div>
        <div class="multiple-items">
            <div class="item">
                <div class="img"><a class="scale-img" href="chitietsanpham"><img src="images/oppoa5.jpg"></a></div>
                <div class="noidung">
                    <div class="ten"><a href="">Điện thoại OPPO A5</a></div>
                    <div class="tt-gia">
                        <div class="gia"><span>5000000đ</span></div>
                        <div class="giacu">10000000đ</div>
                    </div>
                </div>
                <div class="promote">
                    <a href="/dien-thoai-di-dong/iphone-11-128gb-chinh-hang-vn-a">
                        <ul>
                            <li><span class="bag">KM</span> Thanh toán qua VNPAY giảm thêm tới 500.000đ</li>
                            <li><span class="bag">KM</span> GIẢM THÊM TỚI 1.200.000đ khi Thu cũ - Lên đời iPhone Series
                            </li>
                            <li><span class="bag">KM</span> Tặng sim data Mobifone Hera 5G (2.5GB/ngày) (Chưa bao gồm
                                tháng đầu tiên) - Lưu ý: chỉ áp dụng mua trực tiếp tại cửa hàng.</li>
                            <li><span class="bag">KM</span> Mua kèm củ sạc nhanh Innostyle USB-C PD 20W Minigo III,
                                White - Chính hãng với giá 290.000đ </li>
                            <li><span class="bag">KM</span> Hỗ trợ trả góp 0% qua thẻ tín dụng 26 ngân hàng - Chi tiết
                                LH 19002091 (Áp dụng với các sản phẩm trên 3 triệu)</li>
                        </ul>
                    </a>
                </div>
            </div>
            <div class="item">
                <div class="img"><a class="scale-img" href="chitietsanpham"><img src="images/oppoa5.jpg"></a></div>
                <div class="noidung">
                    <div class="ten"><a href="">Điện thoại OPPO A5</a></div>
                    <div class="tt-gia">
                        <div class="gia"><span>5000000đ</span></div>
                        <div class="giacu">10000000đ</div>
                    </div>
                </div>
                <div class="promote">
                    <a href="/dien-thoai-di-dong/iphone-11-128gb-chinh-hang-vn-a">
                        <ul>
                            <li><span class="bag">KM</span> Thanh toán qua VNPAY giảm thêm tới 500.000đ</li>
                            <li><span class="bag">KM</span> GIẢM THÊM TỚI 1.200.000đ khi Thu cũ - Lên đời iPhone Series
                            </li>
                            <li><span class="bag">KM</span> Tặng sim data Mobifone Hera 5G (2.5GB/ngày) (Chưa bao gồm
                                tháng đầu tiên) - Lưu ý: chỉ áp dụng mua trực tiếp tại cửa hàng.</li>
                            <li><span class="bag">KM</span> Mua kèm củ sạc nhanh Innostyle USB-C PD 20W Minigo III,
                                White - Chính hãng với giá 290.000đ </li>
                            <li><span class="bag">KM</span> Hỗ trợ trả góp 0% qua thẻ tín dụng 26 ngân hàng - Chi tiết
                                LH 19002091 (Áp dụng với các sản phẩm trên 3 triệu)</li>
                        </ul>
                    </a>
                </div>
            </div>
            <div class="item">
                <div class="img"><a class="scale-img" href="chitietsanpham"><img src="images/oppoa5.jpg"></a></div>
                <div class="noidung">
                    <div class="ten"><a href="">Điện thoại OPPO A5</a></div>
                    <div class="tt-gia">
                        <div class="gia"><span>5000000đ</span></div>
                        <div class="giacu">10000000đ</div>
                    </div>
                </div>
                <div class="promote">
                    <a href="/dien-thoai-di-dong/iphone-11-128gb-chinh-hang-vn-a">
                        <ul>
                            <li><span class="bag">KM</span> Thanh toán qua VNPAY giảm thêm tới 500.000đ</li>
                            <li><span class="bag">KM</span> GIẢM THÊM TỚI 1.200.000đ khi Thu cũ - Lên đời iPhone Series
                            </li>
                            <li><span class="bag">KM</span> Tặng sim data Mobifone Hera 5G (2.5GB/ngày) (Chưa bao gồm
                                tháng đầu tiên) - Lưu ý: chỉ áp dụng mua trực tiếp tại cửa hàng.</li>
                            <li><span class="bag">KM</span> Mua kèm củ sạc nhanh Innostyle USB-C PD 20W Minigo III,
                                White - Chính hãng với giá 290.000đ </li>
                            <li><span class="bag">KM</span> Hỗ trợ trả góp 0% qua thẻ tín dụng 26 ngân hàng - Chi tiết
                                LH 19002091 (Áp dụng với các sản phẩm trên 3 triệu)</li>
                        </ul>
                    </a>
                </div>
            </div>
            <div class="item">
                <div class="img"><a class="scale-img" href="chitietsanpham"><img src="images/oppoa5.jpg"></a></div>
                <div class="noidung">
                    <div class="ten"><a href="">Điện thoại OPPO A5</a></div>
                    <div class="tt-gia">
                        <div class="gia"><span>5000000đ</span></div>
                        <div class="giacu">10000000đ</div>
                    </div>
                </div>
                <div class="promote">
                    <a href="/dien-thoai-di-dong/iphone-11-128gb-chinh-hang-vn-a">
                        <ul>
                            <li><span class="bag">KM</span> Thanh toán qua VNPAY giảm thêm tới 500.000đ</li>
                            <li><span class="bag">KM</span> GIẢM THÊM TỚI 1.200.000đ khi Thu cũ - Lên đời iPhone Series
                            </li>
                            <li><span class="bag">KM</span> Tặng sim data Mobifone Hera 5G (2.5GB/ngày) (Chưa bao gồm
                                tháng đầu tiên) - Lưu ý: chỉ áp dụng mua trực tiếp tại cửa hàng.</li>
                            <li><span class="bag">KM</span> Mua kèm củ sạc nhanh Innostyle USB-C PD 20W Minigo III,
                                White - Chính hãng với giá 290.000đ </li>
                            <li><span class="bag">KM</span> Hỗ trợ trả góp 0% qua thẻ tín dụng 26 ngân hàng - Chi tiết
                                LH 19002091 (Áp dụng với các sản phẩm trên 3 triệu)</li>
                        </ul>
                    </a>
                </div>
            </div>
            <div class="item">
                <div class="img"><a class="scale-img" href="chitietsanpham"><img src="images/oppoa5.jpg"></a></div>
                <div class="noidung">
                    <div class="ten"><a href="">Điện thoại OPPO A5</a></div>
                    <div class="tt-gia">
                        <div class="gia"><span>5000000đ</span></div>
                        <div class="giacu">10000000đ</div>
                    </div>
                </div>
                <div class="promote">
                    <a href="/dien-thoai-di-dong/iphone-11-128gb-chinh-hang-vn-a">
                        <ul>
                            <li><span class="bag">KM</span> Thanh toán qua VNPAY giảm thêm tới 500.000đ</li>
                            <li><span class="bag">KM</span> GIẢM THÊM TỚI 1.200.000đ khi Thu cũ - Lên đời iPhone Series
                            </li>
                            <li><span class="bag">KM</span> Tặng sim data Mobifone Hera 5G (2.5GB/ngày) (Chưa bao gồm
                                tháng đầu tiên) - Lưu ý: chỉ áp dụng mua trực tiếp tại cửa hàng.</li>
                            <li><span class="bag">KM</span> Mua kèm củ sạc nhanh Innostyle USB-C PD 20W Minigo III,
                                White - Chính hãng với giá 290.000đ </li>
                            <li><span class="bag">KM</span> Hỗ trợ trả góp 0% qua thẻ tín dụng 26 ngân hàng - Chi tiết
                                LH 19002091 (Áp dụng với các sản phẩm trên 3 triệu)</li>
                        </ul>
                    </a>
                </div>
            </div>
            <div class="item">
                <div class="img"><a class="scale-img" href="chitietsanpham"><img src="images/oppoa5.jpg"></a></div>
                <div class="noidung">
                    <div class="ten"><a href="">Điện thoại OPPO A5</a></div>
                    <div class="tt-gia">
                        <div class="gia"><span>5000000đ</span></div>
                        <div class="giacu">10000000đ</div>
                    </div>
                </div>
                <div class="promote">
                    <a href="/dien-thoai-di-dong/iphone-11-128gb-chinh-hang-vn-a">
                        <ul>
                            <li><span class="bag">KM</span> Thanh toán qua VNPAY giảm thêm tới 500.000đ</li>
                            <li><span class="bag">KM</span> GIẢM THÊM TỚI 1.200.000đ khi Thu cũ - Lên đời iPhone Series
                            </li>
                            <li><span class="bag">KM</span> Tặng sim data Mobifone Hera 5G (2.5GB/ngày) (Chưa bao gồm
                                tháng đầu tiên) - Lưu ý: chỉ áp dụng mua trực tiếp tại cửa hàng.</li>
                            <li><span class="bag">KM</span> Mua kèm củ sạc nhanh Innostyle USB-C PD 20W Minigo III,
                                White - Chính hãng với giá 290.000đ </li>
                            <li><span class="bag">KM</span> Hỗ trợ trả góp 0% qua thẻ tín dụng 26 ngân hàng - Chi tiết
                                LH 19002091 (Áp dụng với các sản phẩm trên 3 triệu)</li>
                        </ul>
                    </a>
                </div>
            </div>
            <div class="item">
                <div class="img"><a class="scale-img" href="chitietsanpham"><img src="images/oppoa5.jpg"></a></div>
                <div class="noidung">
                    <div class="ten"><a href="">Điện thoại OPPO A5</a></div>
                    <div class="tt-gia">
                        <div class="gia"><span>5000000đ</span></div>
                        <div class="giacu">10000000đ</div>
                    </div>
                </div>
                <div class="promote">
                    <a href="/dien-thoai-di-dong/iphone-11-128gb-chinh-hang-vn-a">
                        <ul>
                            <li><span class="bag">KM</span> Thanh toán qua VNPAY giảm thêm tới 500.000đ</li>
                            <li><span class="bag">KM</span> GIẢM THÊM TỚI 1.200.000đ khi Thu cũ - Lên đời iPhone Series
                            </li>
                            <li><span class="bag">KM</span> Tặng sim data Mobifone Hera 5G (2.5GB/ngày) (Chưa bao gồm
                                tháng đầu tiên) - Lưu ý: chỉ áp dụng mua trực tiếp tại cửa hàng.</li>
                            <li><span class="bag">KM</span> Mua kèm củ sạc nhanh Innostyle USB-C PD 20W Minigo III,
                                White - Chính hãng với giá 290.000đ </li>
                            <li><span class="bag">KM</span> Hỗ trợ trả góp 0% qua thẻ tín dụng 26 ngân hàng - Chi tiết
                                LH 19002091 (Áp dụng với các sản phẩm trên 3 triệu)</li>
                        </ul>
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>
<div class="banner-sanpham">
    <div class="owl-theme owl-carousel">
        <div class="img-sp"><img src="../images/samsung-galaxy-z-fold-3.jpg" alt=""></div>
    </div>
</div>
<div class="box-sanpham">
    <div class="center-layout">
        <div class="center">
            <div class="title-name">SAMSUNG</div>
        </div>
        <div class="list-item">
            <div class="item">
                <div class="img"><a class="scale-img" href="chitietsanpham"><img src="images/oppoa5.jpg"></a></div>
                <div class="noidung">
                    <div class="ten"><a href="">Điện thoại OPPO A5</a></div>
                    <div class="tt-gia">
                        <div class="gia"><span>5000000đ</span></div>
                        <div class="giacu">10000000đ</div>
                    </div>
                </div>
                <div class="promote">
                    <a href="/dien-thoai-di-dong/iphone-11-128gb-chinh-hang-vn-a">
                        <ul>
                            <li><span class="bag">KM</span> Thanh toán qua VNPAY giảm thêm tới 500.000đ</li>
                            <li><span class="bag">KM</span> GIẢM THÊM TỚI 1.200.000đ khi Thu cũ - Lên đời iPhone Series
                            </li>
                            <li><span class="bag">KM</span> Tặng sim data Mobifone Hera 5G (2.5GB/ngày) (Chưa bao gồm
                                tháng đầu tiên) - Lưu ý: chỉ áp dụng mua trực tiếp tại cửa hàng.</li>
                            <li><span class="bag">KM</span> Mua kèm củ sạc nhanh Innostyle USB-C PD 20W Minigo III,
                                White - Chính hãng với giá 290.000đ </li>
                            <li><span class="bag">KM</span> Hỗ trợ trả góp 0% qua thẻ tín dụng 26 ngân hàng - Chi tiết
                                LH 19002091 (Áp dụng với các sản phẩm trên 3 triệu)</li>
                        </ul>
                    </a>
                </div>
            </div>
            <div class="item">
                <div class="img"><a class="scale-img" href="chitietsanpham"><img src="images/oppoa5.jpg"></a></div>
                <div class="noidung">
                    <div class="ten"><a href="">Điện thoại OPPO A5</a></div>
                    <div class="tt-gia">
                        <div class="gia"><span>5000000đ</span></div>
                        <div class="giacu">10000000đ</div>
                    </div>
                </div>
                <div class="promote">
                    <a href="/dien-thoai-di-dong/iphone-11-128gb-chinh-hang-vn-a">
                        <ul>
                            <li><span class="bag">KM</span> Thanh toán qua VNPAY giảm thêm tới 500.000đ</li>
                            <li><span class="bag">KM</span> GIẢM THÊM TỚI 1.200.000đ khi Thu cũ - Lên đời iPhone Series
                            </li>
                            <li><span class="bag">KM</span> Tặng sim data Mobifone Hera 5G (2.5GB/ngày) (Chưa bao gồm
                                tháng đầu tiên) - Lưu ý: chỉ áp dụng mua trực tiếp tại cửa hàng.</li>
                            <li><span class="bag">KM</span> Mua kèm củ sạc nhanh Innostyle USB-C PD 20W Minigo III,
                                White - Chính hãng với giá 290.000đ </li>
                            <li><span class="bag">KM</span> Hỗ trợ trả góp 0% qua thẻ tín dụng 26 ngân hàng - Chi tiết
                                LH 19002091 (Áp dụng với các sản phẩm trên 3 triệu)</li>
                        </ul>
                    </a>
                </div>
            </div>
            <div class="item">
                <div class="img"><a class="scale-img" href="chitietsanpham"><img src="images/oppoa5.jpg"></a></div>
                <div class="noidung">
                    <div class="ten"><a href="">Điện thoại OPPO A5</a></div>
                    <div class="tt-gia">
                        <div class="gia"><span>5000000đ</span></div>
                        <div class="giacu">10000000đ</div>
                    </div>
                </div>
                <div class="promote">
                    <a href="/dien-thoai-di-dong/iphone-11-128gb-chinh-hang-vn-a">
                        <ul>
                            <li><span class="bag">KM</span> Thanh toán qua VNPAY giảm thêm tới 500.000đ</li>
                            <li><span class="bag">KM</span> GIẢM THÊM TỚI 1.200.000đ khi Thu cũ - Lên đời iPhone Series
                            </li>
                            <li><span class="bag">KM</span> Tặng sim data Mobifone Hera 5G (2.5GB/ngày) (Chưa bao gồm
                                tháng đầu tiên) - Lưu ý: chỉ áp dụng mua trực tiếp tại cửa hàng.</li>
                            <li><span class="bag">KM</span> Mua kèm củ sạc nhanh Innostyle USB-C PD 20W Minigo III,
                                White - Chính hãng với giá 290.000đ </li>
                            <li><span class="bag">KM</span> Hỗ trợ trả góp 0% qua thẻ tín dụng 26 ngân hàng - Chi tiết
                                LH 19002091 (Áp dụng với các sản phẩm trên 3 triệu)</li>
                        </ul>
                    </a>
                </div>
            </div>
            <div class="item">
                <div class="img"><a class="scale-img" href="chitietsanpham"><img src="images/oppoa5.jpg"></a></div>
                <div class="noidung">
                    <div class="ten"><a href="">Điện thoại OPPO A5</a></div>
                    <div class="tt-gia">
                        <div class="gia"><span>5000000đ</span></div>
                        <div class="giacu">10000000đ</div>
                    </div>
                </div>
                <div class="promote">
                    <a href="/dien-thoai-di-dong/iphone-11-128gb-chinh-hang-vn-a">
                        <ul>
                            <li><span class="bag">KM</span> Thanh toán qua VNPAY giảm thêm tới 500.000đ</li>
                            <li><span class="bag">KM</span> GIẢM THÊM TỚI 1.200.000đ khi Thu cũ - Lên đời iPhone Series
                            </li>
                            <li><span class="bag">KM</span> Tặng sim data Mobifone Hera 5G (2.5GB/ngày) (Chưa bao gồm
                                tháng đầu tiên) - Lưu ý: chỉ áp dụng mua trực tiếp tại cửa hàng.</li>
                            <li><span class="bag">KM</span> Mua kèm củ sạc nhanh Innostyle USB-C PD 20W Minigo III,
                                White - Chính hãng với giá 290.000đ </li>
                            <li><span class="bag">KM</span> Hỗ trợ trả góp 0% qua thẻ tín dụng 26 ngân hàng - Chi tiết
                                LH 19002091 (Áp dụng với các sản phẩm trên 3 triệu)</li>
                        </ul>
                    </a>
                </div>
            </div>
            <div class="item">
                <div class="img"><a class="scale-img" href="chitietsanpham"><img src="images/oppoa5.jpg"></a></div>
                <div class="noidung">
                    <div class="ten"><a href="">Điện thoại OPPO A5</a></div>
                    <div class="tt-gia">
                        <div class="gia"><span>5000000đ</span></div>
                        <div class="giacu">10000000đ</div>
                    </div>
                </div>
                <div class="promote">
                    <a href="/dien-thoai-di-dong/iphone-11-128gb-chinh-hang-vn-a">
                        <ul>
                            <li><span class="bag">KM</span> Thanh toán qua VNPAY giảm thêm tới 500.000đ</li>
                            <li><span class="bag">KM</span> GIẢM THÊM TỚI 1.200.000đ khi Thu cũ - Lên đời iPhone Series
                            </li>
                            <li><span class="bag">KM</span> Tặng sim data Mobifone Hera 5G (2.5GB/ngày) (Chưa bao gồm
                                tháng đầu tiên) - Lưu ý: chỉ áp dụng mua trực tiếp tại cửa hàng.</li>
                            <li><span class="bag">KM</span> Mua kèm củ sạc nhanh Innostyle USB-C PD 20W Minigo III,
                                White - Chính hãng với giá 290.000đ </li>
                            <li><span class="bag">KM</span> Hỗ trợ trả góp 0% qua thẻ tín dụng 26 ngân hàng - Chi tiết
                                LH 19002091 (Áp dụng với các sản phẩm trên 3 triệu)</li>
                        </ul>
                    </a>
                </div>
            </div>
            <div class="item">
                <div class="img"><a class="scale-img" href="chitietsanpham"><img src="images/oppoa5.jpg"></a></div>
                <div class="noidung">
                    <div class="ten"><a href="">Điện thoại OPPO A5</a></div>
                    <div class="tt-gia">
                        <div class="gia"><span>5000000đ</span></div>
                        <div class="giacu">10000000đ</div>
                    </div>
                </div>
                <div class="promote">
                    <a href="/dien-thoai-di-dong/iphone-11-128gb-chinh-hang-vn-a">
                        <ul>
                            <li><span class="bag">KM</span> Thanh toán qua VNPAY giảm thêm tới 500.000đ</li>
                            <li><span class="bag">KM</span> GIẢM THÊM TỚI 1.200.000đ khi Thu cũ - Lên đời iPhone Series
                            </li>
                            <li><span class="bag">KM</span> Tặng sim data Mobifone Hera 5G (2.5GB/ngày) (Chưa bao gồm
                                tháng đầu tiên) - Lưu ý: chỉ áp dụng mua trực tiếp tại cửa hàng.</li>
                            <li><span class="bag">KM</span> Mua kèm củ sạc nhanh Innostyle USB-C PD 20W Minigo III,
                                White - Chính hãng với giá 290.000đ </li>
                            <li><span class="bag">KM</span> Hỗ trợ trả góp 0% qua thẻ tín dụng 26 ngân hàng - Chi tiết
                                LH 19002091 (Áp dụng với các sản phẩm trên 3 triệu)</li>
                        </ul>
                    </a>
                </div>
            </div>
            <div class="item">
                <div class="img"><a class="scale-img" href="chitietsanpham"><img src="images/oppoa5.jpg"></a></div>
                <div class="noidung">
                    <div class="ten"><a href="">Điện thoại OPPO A5</a></div>
                    <div class="tt-gia">
                        <div class="gia"><span>5000000đ</span></div>
                        <div class="giacu">10000000đ</div>
                    </div>
                </div>
                <div class="promote">
                    <a href="/dien-thoai-di-dong/iphone-11-128gb-chinh-hang-vn-a">
                        <ul>
                            <li><span class="bag">KM</span> Thanh toán qua VNPAY giảm thêm tới 500.000đ</li>
                            <li><span class="bag">KM</span> GIẢM THÊM TỚI 1.200.000đ khi Thu cũ - Lên đời iPhone Series
                            </li>
                            <li><span class="bag">KM</span> Tặng sim data Mobifone Hera 5G (2.5GB/ngày) (Chưa bao gồm
                                tháng đầu tiên) - Lưu ý: chỉ áp dụng mua trực tiếp tại cửa hàng.</li>
                            <li><span class="bag">KM</span> Mua kèm củ sạc nhanh Innostyle USB-C PD 20W Minigo III,
                                White - Chính hãng với giá 290.000đ </li>
                            <li><span class="bag">KM</span> Hỗ trợ trả góp 0% qua thẻ tín dụng 26 ngân hàng - Chi tiết
                                LH 19002091 (Áp dụng với các sản phẩm trên 3 triệu)</li>
                        </ul>
                    </a>
                </div>
            </div>

        </div>
        <div class="center-layout">
            <div class="center">
                <div class="title-name">APPLE</div>
            </div>
            <div class="list-item">
                <div class="item">
                    <div class="img"><a class="scale-img" href="chitietsanpham"><img src="images/oppoa5.jpg"></a></div>
                    <div class="noidung">
                        <div class="ten"><a href="">Điện thoại OPPO A5</a></div>
                        <div class="tt-gia">
                            <div class="gia"><span>5000000đ</span></div>
                            <div class="giacu">10000000đ</div>
                        </div>
                    </div>
                    <div class="promote">
                        <a href="/dien-thoai-di-dong/iphone-11-128gb-chinh-hang-vn-a">
                            <ul>
                                <li><span class="bag">KM</span> Thanh toán qua VNPAY giảm thêm tới 500.000đ</li>
                                <li><span class="bag">KM</span> GIẢM THÊM TỚI 1.200.000đ khi Thu cũ - Lên đời iPhone
                                    Series</li>
                                <li><span class="bag">KM</span> Tặng sim data Mobifone Hera 5G (2.5GB/ngày) (Chưa bao
                                    gồm tháng đầu tiên) - Lưu ý: chỉ áp dụng mua trực tiếp tại cửa hàng.</li>
                                <li><span class="bag">KM</span> Mua kèm củ sạc nhanh Innostyle USB-C PD 20W Minigo III,
                                    White - Chính hãng với giá 290.000đ </li>
                                <li><span class="bag">KM</span> Hỗ trợ trả góp 0% qua thẻ tín dụng 26 ngân hàng - Chi
                                    tiết LH 19002091 (Áp dụng với các sản phẩm trên 3 triệu)</li>
                            </ul>
                        </a>
                    </div>
                </div>
                <div class="item">
                    <div class="img"><a class="scale-img" href="chitietsanpham"><img src="images/oppoa5.jpg"></a></div>
                    <div class="noidung">
                        <div class="ten"><a href="">Điện thoại OPPO A5</a></div>
                        <div class="tt-gia">
                            <div class="gia"><span>5000000đ</span></div>
                            <div class="giacu">10000000đ</div>
                        </div>
                    </div>
                    <div class="promote">
                        <a href="/dien-thoai-di-dong/iphone-11-128gb-chinh-hang-vn-a">
                            <ul>
                                <li><span class="bag">KM</span> Thanh toán qua VNPAY giảm thêm tới 500.000đ</li>
                                <li><span class="bag">KM</span> GIẢM THÊM TỚI 1.200.000đ khi Thu cũ - Lên đời iPhone
                                    Series</li>
                                <li><span class="bag">KM</span> Tặng sim data Mobifone Hera 5G (2.5GB/ngày) (Chưa bao
                                    gồm tháng đầu tiên) - Lưu ý: chỉ áp dụng mua trực tiếp tại cửa hàng.</li>
                                <li><span class="bag">KM</span> Mua kèm củ sạc nhanh Innostyle USB-C PD 20W Minigo III,
                                    White - Chính hãng với giá 290.000đ </li>
                                <li><span class="bag">KM</span> Hỗ trợ trả góp 0% qua thẻ tín dụng 26 ngân hàng - Chi
                                    tiết LH 19002091 (Áp dụng với các sản phẩm trên 3 triệu)</li>
                            </ul>
                        </a>
                    </div>
                </div>
                <div class="item">
                    <div class="img"><a class="scale-img" href="chitietsanpham"><img src="images/oppoa5.jpg"></a></div>
                    <div class="noidung">
                        <div class="ten"><a href="">Điện thoại OPPO A5</a></div>
                        <div class="tt-gia">
                            <div class="gia"><span>5000000đ</span></div>
                            <div class="giacu">10000000đ</div>
                        </div>
                    </div>
                    <div class="promote">
                        <a href="/dien-thoai-di-dong/iphone-11-128gb-chinh-hang-vn-a">
                            <ul>
                                <li><span class="bag">KM</span> Thanh toán qua VNPAY giảm thêm tới 500.000đ</li>
                                <li><span class="bag">KM</span> GIẢM THÊM TỚI 1.200.000đ khi Thu cũ - Lên đời iPhone
                                    Series</li>
                                <li><span class="bag">KM</span> Tặng sim data Mobifone Hera 5G (2.5GB/ngày) (Chưa bao
                                    gồm tháng đầu tiên) - Lưu ý: chỉ áp dụng mua trực tiếp tại cửa hàng.</li>
                                <li><span class="bag">KM</span> Mua kèm củ sạc nhanh Innostyle USB-C PD 20W Minigo III,
                                    White - Chính hãng với giá 290.000đ </li>
                                <li><span class="bag">KM</span> Hỗ trợ trả góp 0% qua thẻ tín dụng 26 ngân hàng - Chi
                                    tiết LH 19002091 (Áp dụng với các sản phẩm trên 3 triệu)</li>
                            </ul>
                        </a>
                    </div>
                </div>
                <div class="item">
                    <div class="img"><a class="scale-img" href="chitietsanpham"><img src="images/oppoa5.jpg"></a></div>
                    <div class="noidung">
                        <div class="ten"><a href="">Điện thoại OPPO A5</a></div>
                        <div class="tt-gia">
                            <div class="gia"><span>5000000đ</span></div>
                            <div class="giacu">10000000đ</div>
                        </div>
                    </div>
                    <div class="promote">
                        <a href="/dien-thoai-di-dong/iphone-11-128gb-chinh-hang-vn-a">
                            <ul>
                                <li><span class="bag">KM</span> Thanh toán qua VNPAY giảm thêm tới 500.000đ</li>
                                <li><span class="bag">KM</span> GIẢM THÊM TỚI 1.200.000đ khi Thu cũ - Lên đời iPhone
                                    Series</li>
                                <li><span class="bag">KM</span> Tặng sim data Mobifone Hera 5G (2.5GB/ngày) (Chưa bao
                                    gồm tháng đầu tiên) - Lưu ý: chỉ áp dụng mua trực tiếp tại cửa hàng.</li>
                                <li><span class="bag">KM</span> Mua kèm củ sạc nhanh Innostyle USB-C PD 20W Minigo III,
                                    White - Chính hãng với giá 290.000đ </li>
                                <li><span class="bag">KM</span> Hỗ trợ trả góp 0% qua thẻ tín dụng 26 ngân hàng - Chi
                                    tiết LH 19002091 (Áp dụng với các sản phẩm trên 3 triệu)</li>
                            </ul>
                        </a>
                    </div>
                </div>
                <div class="item">
                    <div class="img"><a class="scale-img" href="chitietsanpham"><img src="images/oppoa5.jpg"></a></div>
                    <div class="noidung">
                        <div class="ten"><a href="">Điện thoại OPPO A5</a></div>
                        <div class="tt-gia">
                            <div class="gia"><span>5000000đ</span></div>
                            <div class="giacu">10000000đ</div>
                        </div>
                    </div>
                    <div class="promote">
                        <a href="/dien-thoai-di-dong/iphone-11-128gb-chinh-hang-vn-a">
                            <ul>
                                <li><span class="bag">KM</span> Thanh toán qua VNPAY giảm thêm tới 500.000đ</li>
                                <li><span class="bag">KM</span> GIẢM THÊM TỚI 1.200.000đ khi Thu cũ - Lên đời iPhone
                                    Series</li>
                                <li><span class="bag">KM</span> Tặng sim data Mobifone Hera 5G (2.5GB/ngày) (Chưa bao
                                    gồm tháng đầu tiên) - Lưu ý: chỉ áp dụng mua trực tiếp tại cửa hàng.</li>
                                <li><span class="bag">KM</span> Mua kèm củ sạc nhanh Innostyle USB-C PD 20W Minigo III,
                                    White - Chính hãng với giá 290.000đ </li>
                                <li><span class="bag">KM</span> Hỗ trợ trả góp 0% qua thẻ tín dụng 26 ngân hàng - Chi
                                    tiết LH 19002091 (Áp dụng với các sản phẩm trên 3 triệu)</li>
                            </ul>
                        </a>
                    </div>
                </div>
                <div class="item">
                    <div class="img"><a class="scale-img" href="chitietsanpham"><img src="images/oppoa5.jpg"></a></div>
                    <div class="noidung">
                        <div class="ten"><a href="">Điện thoại OPPO A5</a></div>
                        <div class="tt-gia">
                            <div class="gia"><span>5000000đ</span></div>
                            <div class="giacu">10000000đ</div>
                        </div>
                    </div>
                    <div class="promote">
                        <a href="/dien-thoai-di-dong/iphone-11-128gb-chinh-hang-vn-a">
                            <ul>
                                <li><span class="bag">KM</span> Thanh toán qua VNPAY giảm thêm tới 500.000đ</li>
                                <li><span class="bag">KM</span> GIẢM THÊM TỚI 1.200.000đ khi Thu cũ - Lên đời iPhone
                                    Series</li>
                                <li><span class="bag">KM</span> Tặng sim data Mobifone Hera 5G (2.5GB/ngày) (Chưa bao
                                    gồm tháng đầu tiên) - Lưu ý: chỉ áp dụng mua trực tiếp tại cửa hàng.</li>
                                <li><span class="bag">KM</span> Mua kèm củ sạc nhanh Innostyle USB-C PD 20W Minigo III,
                                    White - Chính hãng với giá 290.000đ </li>
                                <li><span class="bag">KM</span> Hỗ trợ trả góp 0% qua thẻ tín dụng 26 ngân hàng - Chi
                                    tiết LH 19002091 (Áp dụng với các sản phẩm trên 3 triệu)</li>
                            </ul>
                        </a>
                    </div>
                </div>
                <div class="item">
                    <div class="img"><a class="scale-img" href="chitietsanpham"><img src="images/oppoa5.jpg"></a></div>
                    <div class="noidung">
                        <div class="ten"><a href="">Điện thoại OPPO A5</a></div>
                        <div class="tt-gia">
                            <div class="gia"><span>5000000đ</span></div>
                            <div class="giacu">10000000đ</div>
                        </div>
                    </div>
                    <div class="promote">
                        <a href="/dien-thoai-di-dong/iphone-11-128gb-chinh-hang-vn-a">
                            <ul>
                                <li><span class="bag">KM</span> Thanh toán qua VNPAY giảm thêm tới 500.000đ</li>
                                <li><span class="bag">KM</span> GIẢM THÊM TỚI 1.200.000đ khi Thu cũ - Lên đời iPhone
                                    Series</li>
                                <li><span class="bag">KM</span> Tặng sim data Mobifone Hera 5G (2.5GB/ngày) (Chưa bao
                                    gồm tháng đầu tiên) - Lưu ý: chỉ áp dụng mua trực tiếp tại cửa hàng.</li>
                                <li><span class="bag">KM</span> Mua kèm củ sạc nhanh Innostyle USB-C PD 20W Minigo III,
                                    White - Chính hãng với giá 290.000đ </li>
                                <li><span class="bag">KM</span> Hỗ trợ trả góp 0% qua thẻ tín dụng 26 ngân hàng - Chi
                                    tiết LH 19002091 (Áp dụng với các sản phẩm trên 3 triệu)</li>
                            </ul>
                        </a>
                    </div>
                </div>

            </div>
            <div class="center-layout">
                <div class="center">
                    <div class="title-name">OPPO</div>
                </div>
                <div class="list-item">
                    <div class="item">
                        <div class="img"><a class="scale-img" href="chitietsanpham"><img src="images/oppoa5.jpg"></a>
                        </div>
                        <div class="noidung">
                            <div class="ten"><a href="">Điện thoại OPPO A5</a></div>
                            <div class="tt-gia">
                                <div class="gia"><span>5000000đ</span></div>
                                <div class="giacu">10000000đ</div>
                            </div>
                        </div>
                        <div class="promote">
                            <a href="/dien-thoai-di-dong/iphone-11-128gb-chinh-hang-vn-a">
                                <ul>
                                    <li><span class="bag">KM</span> Thanh toán qua VNPAY giảm thêm tới 500.000đ</li>
                                    <li><span class="bag">KM</span> GIẢM THÊM TỚI 1.200.000đ khi Thu cũ - Lên đời iPhone
                                        Series</li>
                                    <li><span class="bag">KM</span> Tặng sim data Mobifone Hera 5G (2.5GB/ngày) (Chưa
                                        bao gồm tháng đầu tiên) - Lưu ý: chỉ áp dụng mua trực tiếp tại cửa hàng.</li>
                                    <li><span class="bag">KM</span> Mua kèm củ sạc nhanh Innostyle USB-C PD 20W Minigo
                                        III, White - Chính hãng với giá 290.000đ </li>
                                    <li><span class="bag">KM</span> Hỗ trợ trả góp 0% qua thẻ tín dụng 26 ngân hàng -
                                        Chi tiết LH 19002091 (Áp dụng với các sản phẩm trên 3 triệu)</li>
                                </ul>
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="img"><a class="scale-img" href="chitietsanpham"><img src="images/oppoa5.jpg"></a>
                        </div>
                        <div class="noidung">
                            <div class="ten"><a href="">Điện thoại OPPO A5</a></div>
                            <div class="tt-gia">
                                <div class="gia"><span>5000000đ</span></div>
                                <div class="giacu">10000000đ</div>
                            </div>
                        </div>
                        <div class="promote">
                            <a href="/dien-thoai-di-dong/iphone-11-128gb-chinh-hang-vn-a">
                                <ul>
                                    <li><span class="bag">KM</span> Thanh toán qua VNPAY giảm thêm tới 500.000đ</li>
                                    <li><span class="bag">KM</span> GIẢM THÊM TỚI 1.200.000đ khi Thu cũ - Lên đời iPhone
                                        Series</li>
                                    <li><span class="bag">KM</span> Tặng sim data Mobifone Hera 5G (2.5GB/ngày) (Chưa
                                        bao gồm tháng đầu tiên) - Lưu ý: chỉ áp dụng mua trực tiếp tại cửa hàng.</li>
                                    <li><span class="bag">KM</span> Mua kèm củ sạc nhanh Innostyle USB-C PD 20W Minigo
                                        III, White - Chính hãng với giá 290.000đ </li>
                                    <li><span class="bag">KM</span> Hỗ trợ trả góp 0% qua thẻ tín dụng 26 ngân hàng -
                                        Chi tiết LH 19002091 (Áp dụng với các sản phẩm trên 3 triệu)</li>
                                </ul>
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="img"><a class="scale-img" href="chitietsanpham"><img src="images/oppoa5.jpg"></a>
                        </div>
                        <div class="noidung">
                            <div class="ten"><a href="">Điện thoại OPPO A5</a></div>
                            <div class="tt-gia">
                                <div class="gia"><span>5000000đ</span></div>
                                <div class="giacu">10000000đ</div>
                            </div>
                        </div>
                        <div class="promote">
                            <a href="/dien-thoai-di-dong/iphone-11-128gb-chinh-hang-vn-a">
                                <ul>
                                    <li><span class="bag">KM</span> Thanh toán qua VNPAY giảm thêm tới 500.000đ</li>
                                    <li><span class="bag">KM</span> GIẢM THÊM TỚI 1.200.000đ khi Thu cũ - Lên đời iPhone
                                        Series</li>
                                    <li><span class="bag">KM</span> Tặng sim data Mobifone Hera 5G (2.5GB/ngày) (Chưa
                                        bao gồm tháng đầu tiên) - Lưu ý: chỉ áp dụng mua trực tiếp tại cửa hàng.</li>
                                    <li><span class="bag">KM</span> Mua kèm củ sạc nhanh Innostyle USB-C PD 20W Minigo
                                        III, White - Chính hãng với giá 290.000đ </li>
                                    <li><span class="bag">KM</span> Hỗ trợ trả góp 0% qua thẻ tín dụng 26 ngân hàng -
                                        Chi tiết LH 19002091 (Áp dụng với các sản phẩm trên 3 triệu)</li>
                                </ul>
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="img"><a class="scale-img" href="chitietsanpham"><img src="images/oppoa5.jpg"></a>
                        </div>
                        <div class="noidung">
                            <div class="ten"><a href="">Điện thoại OPPO A5</a></div>
                            <div class="tt-gia">
                                <div class="gia"><span>5000000đ</span></div>
                                <div class="giacu">10000000đ</div>
                            </div>
                        </div>
                        <div class="promote">
                            <a href="/dien-thoai-di-dong/iphone-11-128gb-chinh-hang-vn-a">
                                <ul>
                                    <li><span class="bag">KM</span> Thanh toán qua VNPAY giảm thêm tới 500.000đ</li>
                                    <li><span class="bag">KM</span> GIẢM THÊM TỚI 1.200.000đ khi Thu cũ - Lên đời iPhone
                                        Series</li>
                                    <li><span class="bag">KM</span> Tặng sim data Mobifone Hera 5G (2.5GB/ngày) (Chưa
                                        bao gồm tháng đầu tiên) - Lưu ý: chỉ áp dụng mua trực tiếp tại cửa hàng.</li>
                                    <li><span class="bag">KM</span> Mua kèm củ sạc nhanh Innostyle USB-C PD 20W Minigo
                                        III, White - Chính hãng với giá 290.000đ </li>
                                    <li><span class="bag">KM</span> Hỗ trợ trả góp 0% qua thẻ tín dụng 26 ngân hàng -
                                        Chi tiết LH 19002091 (Áp dụng với các sản phẩm trên 3 triệu)</li>
                                </ul>
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="img"><a class="scale-img" href="chitietsanpham"><img src="images/oppoa5.jpg"></a>
                        </div>
                        <div class="noidung">
                            <div class="ten"><a href="">Điện thoại OPPO A5</a></div>
                            <div class="tt-gia">
                                <div class="gia"><span>5000000đ</span></div>
                                <div class="giacu">10000000đ</div>
                            </div>
                        </div>
                        <div class="promote">
                            <a href="/dien-thoai-di-dong/iphone-11-128gb-chinh-hang-vn-a">
                                <ul>
                                    <li><span class="bag">KM</span> Thanh toán qua VNPAY giảm thêm tới 500.000đ</li>
                                    <li><span class="bag">KM</span> GIẢM THÊM TỚI 1.200.000đ khi Thu cũ - Lên đời iPhone
                                        Series</li>
                                    <li><span class="bag">KM</span> Tặng sim data Mobifone Hera 5G (2.5GB/ngày) (Chưa
                                        bao gồm tháng đầu tiên) - Lưu ý: chỉ áp dụng mua trực tiếp tại cửa hàng.</li>
                                    <li><span class="bag">KM</span> Mua kèm củ sạc nhanh Innostyle USB-C PD 20W Minigo
                                        III, White - Chính hãng với giá 290.000đ </li>
                                    <li><span class="bag">KM</span> Hỗ trợ trả góp 0% qua thẻ tín dụng 26 ngân hàng -
                                        Chi tiết LH 19002091 (Áp dụng với các sản phẩm trên 3 triệu)</li>
                                </ul>
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="img"><a class="scale-img" href="chitietsanpham"><img src="images/oppoa5.jpg"></a>
                        </div>
                        <div class="noidung">
                            <div class="ten"><a href="">Điện thoại OPPO A5</a></div>
                            <div class="tt-gia">
                                <div class="gia"><span>5000000đ</span></div>
                                <div class="giacu">10000000đ</div>
                            </div>
                        </div>
                        <div class="promote">
                            <a href="/dien-thoai-di-dong/iphone-11-128gb-chinh-hang-vn-a">
                                <ul>
                                    <li><span class="bag">KM</span> Thanh toán qua VNPAY giảm thêm tới 500.000đ</li>
                                    <li><span class="bag">KM</span> GIẢM THÊM TỚI 1.200.000đ khi Thu cũ - Lên đời iPhone
                                        Series</li>
                                    <li><span class="bag">KM</span> Tặng sim data Mobifone Hera 5G (2.5GB/ngày) (Chưa
                                        bao gồm tháng đầu tiên) - Lưu ý: chỉ áp dụng mua trực tiếp tại cửa hàng.</li>
                                    <li><span class="bag">KM</span> Mua kèm củ sạc nhanh Innostyle USB-C PD 20W Minigo
                                        III, White - Chính hãng với giá 290.000đ </li>
                                    <li><span class="bag">KM</span> Hỗ trợ trả góp 0% qua thẻ tín dụng 26 ngân hàng -
                                        Chi tiết LH 19002091 (Áp dụng với các sản phẩm trên 3 triệu)</li>
                                </ul>
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="img"><a class="scale-img" href="chitietsanpham"><img src="images/oppoa5.jpg"></a>
                        </div>
                        <div class="noidung">
                            <div class="ten"><a href="">Điện thoại OPPO A5</a></div>
                            <div class="tt-gia">
                                <div class="gia"><span>5000000đ</span></div>
                                <div class="giacu">10000000đ</div>
                            </div>
                        </div>
                        <div class="promote">
                            <a href="/dien-thoai-di-dong/iphone-11-128gb-chinh-hang-vn-a">
                                <ul>
                                    <li><span class="bag">KM</span> Thanh toán qua VNPAY giảm thêm tới 500.000đ</li>
                                    <li><span class="bag">KM</span> GIẢM THÊM TỚI 1.200.000đ khi Thu cũ - Lên đời iPhone
                                        Series</li>
                                    <li><span class="bag">KM</span> Tặng sim data Mobifone Hera 5G (2.5GB/ngày) (Chưa
                                        bao gồm tháng đầu tiên) - Lưu ý: chỉ áp dụng mua trực tiếp tại cửa hàng.</li>
                                    <li><span class="bag">KM</span> Mua kèm củ sạc nhanh Innostyle USB-C PD 20W Minigo
                                        III, White - Chính hãng với giá 290.000đ </li>
                                    <li><span class="bag">KM</span> Hỗ trợ trả góp 0% qua thẻ tín dụng 26 ngân hàng -
                                        Chi tiết LH 19002091 (Áp dụng với các sản phẩm trên 3 triệu)</li>
                                </ul>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    @endsection
    @section('Them')
    @endsection