@extends('user.index')
@section('sidebar')
@parent
<?php 
?>
<div class="bg-container">
    <div class="swiper">
        <div class="swiper-wrapper">
            @foreach($lshow as $ls)
            <div class="swiper-slide"><img src="{{$ls->hinhanh}}"></div>
            @endforeach
        </div>
        <div class="swiper-pagination"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>
</div>

<div class="box-filter center">
    <div class="box-quicklink  block-scroll-main">
        <div class="lst-quickfilter q-manu js_hang ">
            @foreach($lsthang as $hang)
            <form action="{{route('loadhangtheosp',[$hang->id])}}" method="">
                @csrf
            <button  type="submit" class="box-quicklink__item bd-radius quicklink-logo">
                <img src="{{$hang->hinhanh}}" width="30" class="no-text">
            </button>
            <input type="hidden" value="{{$hang->id}}" name="id_hang">
            </form>
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
                <div class="img"><a class="scale-img" href="{{route('loadding.detail',[$sp->id])}}"><img src="/storage/{{$sp->hinhanh}}"></a></div>
                <div class="noidung">
                    <div class="ten"><a href="{{route('loadding.detail',[$sp->id])}}" class="text-split">{{$sp->tensanpham}}</a></div>
                    <div class="tt-gia">
                        <div class="gia" >{{$sp->giamin}}đ - {{$sp->giamax}}đ</div>
                    </div>
                    <div class ="mota">
                        <ul>
                            <li><span class="text-split">Màn hình:</span> {{$sp->manhinh->thongso}}</li>
                            <li><span class="">Hệ điều hành:</span> {{$sp->hedieuhanh->tenhedieuhanh}}</li>
                            <li><span class="">Camera:</span> {{$sp->camera->tencamera}}</li>
                            <li class="lst-item"><span >Pin:{{$sp->hieunangpin->tenhieunang}}</span> </li>
                        </ul>
                    </div>
                </div>
                <div class="promote">
                <a href="{{route('loadding.detail',[$sp->id])}}">
                    <div class= "mota-sampham">{{$sp->mota}}</div>
                </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<div class="banner-sanpham">
    <div class="owl-theme owl-carousel">
        @foreach($lstbanner as $banner)
        <div class="img-sp"><img src="{{$banner->hinhanh}}" alt=""></div>
        @endforeach
    </div>
</div>


<div class="box-sanpham">
        <div class="center">
            <div class="title-name">SẢN PHẨM</div>
        </div>
     
    <div class="center-layout">
        <div class="list-item" id="all_sanpham">
        </div>
    </div>
</div>



@endsection
@section('Them')
@endsection




