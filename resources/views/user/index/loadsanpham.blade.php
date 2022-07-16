@extends('user.index')
@section('sidebar')
@parent
<?php 
?>
<div class="boloc center">
    <div class="custom-select">
        <select>
        @foreach($lstloai as $loai)
            <option value="0">Loại Sản Phẩm</option>
            <option value="1">{{$loai->tenloaisp}}</option>
        @endforeach  
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

<div class="box-sanpham">
    <div class="center-layout">
        <div class="list-item-sanpham" id="">
        @foreach($lstsanpham as $sanpham)
            <div class="item-sanpham">
                <div class="img"><a class="scale-img" href="{{route('loadding.detail',[$sanpham->id])}}"><img src="/storage/{{$sanpham->hinhanh}}"></a></div>
                <div class=" noidung">
                    <div class="ten"><a href="{{route('loadding.detail',[$sanpham->id])}}">{{$sanpham->tensanpham}}</a></div>
                    <div class="tt-gia">
                    <div class="gia" >{{$sanpham->giamin}}đ - {{$sanpham->giamax}}đ</div>
                    </div>
                </div>
                <div class ="mota">
                    <ul>
                        <li><span class="">Màn hình:</span> {{$sanpham->manhinh->thongso}}</li>
                        <li><span class="">Hệ điều hành:</span> {{$sanpham->hedieuhanh->tenhedieuhanh}}</li>
                        <li><span class="">Camera:</span> {{$sanpham->camera->tencamera}}</li>
                        <li><span class="">Pin:</span> {{$sanpham->hieunangpin->tenhieunang}}</li>
                    </ul>
                </div>
                <div class="promote">
                <a href="{{route('loadding.detail',[$sanpham->id])}}">
                    <div class= "mota-sampham">{{$sanpham->mota}}</div>
                </a>
                </div>
            </div>
     @endforeach
        </div>
        <hr>
<!-- phan trang -->
<div class="search" style="margin: auto;">
    {{$lstsanpham->appends(request()->all())->links()}}
</div>
    </div>
</div>
@endsection
@section('Them')
@endsection




