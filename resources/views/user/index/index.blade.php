@extends('user.index')
@section('sidebar')
@parent
<?php 
?>
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

            <option value=""></option>

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

            <option value=""></option>

        </select>
    </div>
    <div class="custom-select">
        <select>
            <option value="0">Màu</option>

            <option value=""></option>

        </select>
    </div>
    <div class="custom-select">
        <select>
            <option value="0">RAM</option>

            <option value=""></option>

        </select>
    </div>
    <div class="custom-select">
        <select>
            <option value="0">Bộ nhớ trong</option>

            <option value=""></option>

        </select>
    </div>
    <div class="custom-select">
        <select>
            <option value="0">Camera</option>

            <option value=""></option>

        </select>
    </div>
    <div class="custom-select">
        <select>
            <option value="0">Màn hình</option>

            <option value=""></option>

        </select>
    </div>
</div>
<div class="box-filter center">
    <div class="box-quicklink  block-scroll-main">
        <div class="lst-quickfilter q-manu js_hang ">
            @foreach($lsthang as $hang)
            <a href="dtdd-apple-iphone" data-href="dtdd-apple-iphone" data-index="0"
                class="box-quicklink__item bd-radius quicklink-logo">
                <img src="{{$hang->hinhanh}}" width="30" class="no-text">
            </a>
            @endforeach

        </div>
    </div>
</div>
<div class="box-noibat">
    <div class="center-layout">
        <div class="center">
            <div class="title-name">SẢN PHẨM NỔI BẬT</div>
        </div>
        <div class="multiple-items">
            @foreach($sanPham as $sp)
            <div class="item">
                <div class="img"><a class="scale-img" href="{{route('loadding.detail',[$sp->id])}}"><img
                            src="/storage/{{$sp->hinhanh}}"></a></div>
                <div class=" noidung">
                    <div class="ten"><a href="" class="text-split">{{$sp->tensanpham}}</a></div>
                    <div class="tt-gia">
                        <div class="gia"></div>
                        <div class="giacu"></div>
                    </div>
                </div>
                <div class="promote">
                    <a href="">
                        <ul>
                            <li><span class="bag">KM</span> Thanh toán qua VNPAY giảm thêm tới 500.000đ</li>
                            <li><span class="bag">KM</span> GIẢM THÊM TỚI 1.200.000đ khi Thu cũ - Lên đời iPhone Series
                            </li>
                        </ul>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<div class="banner-sanpham">
    <div class="owl-theme owl-carousel">
        <div class="img-sp"><img src="../images/samsung-galaxy-z-fold-3.jpg" alt=""></div>
    </div>
</div>
<div class="box-sanpham">
    @foreach($lsthang as $hang)
    <div class="center-layout">
    <div class="center">
            <div class="title-name">{{$hang->tenhang}}</div>
        </div>
        <div class="list-item">
        @foreach($lstloai as $loai)
            <div class="item">
                <div class="img"><a class="scale-img" href="chitietsanpham"><img src=""></a></div>
                <div class=" noidung">
                    <div class="ten"><a href="">Điện thoại OPPO A5</a></div>
                    <div class="tt-gia">
                        <div class="gia"><span>{{$loai->tenloaisp}}</span></div>
                        <div class="giacu">10000000đ</div>
                    </div>
                </div>
                <div class="promote">
                    <a href="">
                        <ul>
                            <li><span class="bag">KM</span> Thanh toán qua VNPAY giảm thêm tới 500.000đ</li>
                            <li><span class="bag">KM</span> GIẢM THÊM TỚI 1.200.000đ khi Thu cũ - Lên đời iPhone Series
                            </li>
                        </ul>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    @endforeach
</div>

@endsection
@section('Them')
@endsection