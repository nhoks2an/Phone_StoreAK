@extends('user.index')
@section('sidebar')
@parent
<div class="bg-container">
<div class="wrap-main w-clear">
   
    <div class="title-lienhe"><span>Tìm kiếm</span></div>
        <!-- Topbar Search -->
        <div class="form-inline form-search d-inline-block align-middle ml-3">
            <form action="">
                <div class="input-group input-group-sm">
                    <input class="form-control form-control-navbar text-sm" name="key" placeholder="Tìm kiếm"
                        aria-label="Tìm kiếm">
                    <div class="input-group-append bg-primary rounded-right">
                        <button class="btn btn-navbar text-white" type="submit" onclick="">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
        @if(count($lstsanpham)===0)
        <div class="alert alert-warning w-100" role="alert" style="margin-top: 10px;">
            <p style="margin: auto;">Không tìm thấy nội dung bạn yêu cầu</p>
        </div>
        @else
    <div class="center-layout">
        <div class="list-item-sanpham" id="">
         @foreach($lstsanpham as $sanpham)
            <div class="item-sanpham">
                <div class="img"><a class="scale-img" href="{{route('loadding.detail',[$sanpham->id])}}"><img src="/storage/{{$sanpham->hinhanh}}"></a></div>
                <div class=" noidung">
                    <div class="ten"><a >{{$sanpham->tensanpham}}</a></div>
                    <div class="tt-gia">
                    <div class="gia" >{{$sanpham->giamin}}đ - {{$sanpham->giamax}}đ</div>
                    </div>
                    <div class ="mota">
                        <ul>
                            <li><span class="">Màn hình:</span> {{$sanpham->manhinh->thongso}}</li>
                            <li><span class="">Hệ điều hành:</span> {{$sanpham->hedieuhanh->tenhedieuhanh}}</li>
                            <li><span class="">Camera:</span> {{$sanpham->camera->tencamera}}</li>
                            <li><span class="">Pin:</span> {{$sanpham->hieunangpin->tenhieunang}}</li>
                        </ul>
                    </div>
                </div>
                <div class="promote">
                <a href="{{route('loadding.detail',[$sanpham->id])}}">
                    <div class= "mota-sampham">{{$sanpham->mota}}</div>
                </a>
                </div>
            </div>
        @endforeach
        </div>
    </div>
    @endif
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