@extends('user.index')
@section('sidebar')
@parent
<div class="center-layout">
    <div class="title-lienhe"><span>LỊCH SỬ MUA HÀNG</span></div>
    <div class="list-donhang">
        <table class="greyGridTable">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Mã HD</th>
                    <th>Địa chỉ giao</th>
                    <th>Tổng tiền</th>
                    <th>Chi tiết đơn hàng</th>
                    <th>Tình trạng</th>
                    <th>Thao tác</th>
                </tr>
            </thead>
            <tbody>
                @foreach($hoadon as $key => $hd)
                <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$hd->id}}</td>
                    <td>{{$hd->diachi}}</td>
                    <td>{{$hd->tongtien}}</td>
                    <td>
                        <form method="post" action="{{route('dathang.show')}}" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{$hd->id}}">
                            <button type="submit" style="color:blue" href="">Xem chi tiết</button>
                        </form>
                    </td>
                    <td>{{$hd->trangthaihd->tentrangthai}}</td>
                    <td>
                        @if($hd->trangthai=='1')
                        <form method="post" action="{{route('dathang.huy')}}" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{$hd->id}}">
                            <button type="submit" style="color:red" href="">Huỷ đơn hàng</button>
                        </form>
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>


    </div>
</div>
<hr>
<!-- phan trang -->
<div class="search" style="
    margin: auto;
">
    {{$hoadon->appends(request()->all())->links()}}
</div>
@endsection
@section('Them')
@endsection