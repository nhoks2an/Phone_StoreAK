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
<div class="boloc center">
    <div class="custom-select">
        <div class="box-filter center">
            <div class="box-quicklink  block-scroll-main">
                <div class="lst-quickfilter q-manu js_hang owl-th">
                    @foreach($lsthang as $hang)
                    <form action="{{route('loadhangtheosp',[$hang->id])}}" method="">
                        @csrf
                        <button type="submit" class="box-quicklink__item bd-radius quicklink-logo">
                            <img src="{{$hang->hinhanh}}" width="30" class="no-text">
                        </button>
                        <input type="hidden" value="{{$hang->id}}" name="id_hang">
                    </form>
                    @endforeach
                    @foreach($lsthang as $hang)
                    <form action="{{route('loadhangtheosp',[$hang->id])}}" method="">
                        @csrf
                        <button type="submit" class="box-quicklink__item bd-radius quicklink-logo">
                            <img src="{{$hang->hinhanh}}" width="30" class="no-text">
                        </button>
                        <input type="hidden" value="{{$hang->id}}" name="id_hang">
                    </form>
                    @endforeach
                    @foreach($lsthang as $hang)
                    <form action="{{route('loadhangtheosp',[$hang->id])}}" method="">
                        @csrf
                        <button type="submit" class="box-quicklink__item bd-radius quicklink-logo">
                            <img src="{{$hang->hinhanh}}" width="30" class="no-text">
                        </button>
                        <input type="hidden" value="{{$hang->id}}" name="id_hang">
                    </form>
                    @endforeach
                    <div class="col-md-4">
                        <form acction="">
                            @csrf
                            <select name="sort" id="sort" class="form-control">
                                <option value="{{Request::url()}}?sort_by=none">--Lọc--</option>
                                <option value="{{Request::url()}}?sort_by=tang_dan">--Giá tăng dần--</option>
                                <option value="{{Request::url()}}?sort_by=giam_dan">--Giảm giảm dần--</option>
                                <option value="{{Request::url()}}?sort_by=kytu_az">--A đến Z--</option>
                                <option value="{{Request::url()}}?sort_by=kytu_za">--Z đến A--</option>
                            </select>
                        </form>
                    </div>
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


                        <div class="box-sanpham">
                            <div class="center">
                                <div class="title-name">SẢN PHẨM</div>
                            </div>
                            <div class="center-layout">
                                <div class="list-item" id="all_sanpham">
                                </div>

                    </select>

                </div>
                <div class="custom-select">
                    <select>
                        <option value="0">Bộ nhớ trong</option>

                        <div class="box-filter center">
                            <div class="box-quicklink  block-scroll-main">
                                <div class="lst-quickfilter q-manu js_hang ">
                                    @foreach($lsthang as $hang)
                                    <form action="{{route('loadhangtheosp',[$hang->id])}}" method="">
                                        @csrf
                                        <button type="submit" class="box-quicklink__item bd-radius quicklink-logo">
                                            <img src="{{$hang->hinhanh}}" width="30" class="no-text">
                                        </button>
                                        <input type="hidden" value="{{$hang->id}}" name="id_hang">
                                    </form>
                                    @endforeach
                                </div>
                            </div>
                        </div>
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
                        <div class="noidung">
                            <div class="ten"><a href="{{route('loadding.detail',[$sp->id])}}"
                                    class="text-split">{{$sp->tensanpham}}</a></div>
                            <div class="tt-gia">
                                <div class="gia">{{$sp->giamin}}đ - {{$sp->giamax}}đ</div>
                            </div>
                            <div class="mota">
                                <ul>
                                    <li><span class="text-split">Màn hình:</span> {{$sp->manhinh->thongso}}</li>
                                    <li><span class="">Hệ điều hành:</span> {{$sp->hedieuhanh->tenhedieuhanh}}</li>
                                    <li><span class="">Camera:</span> {{$sp->camera->tencamera}}</li>
                                    <li class="lst-item"><span>Pin:{{$sp->hieunangpin->tenhieunang}}</span> </li>
                                </ul>
                            </div>
                        </div>
                        <div class="promote">
                            <a href="{{route('loadding.detail',[$sp->id])}}">
                                <div class="mota-sampham">{{$sp->mota}}</div>
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