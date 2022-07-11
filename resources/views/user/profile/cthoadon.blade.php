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
                    <th>Sản phẩm</th>
                    <th>Phân loại</th>
                    <th>Số lượng</th>
                    <th>Thành tiền</th>
                </tr>
            </thead>
            <tbody>
                @foreach($cthd as $key => $ct)
                <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$ct->id_hoadon}}</td>
                    <td>{{$ct->sanpham->tensanpham}}</td>
                    <td>{{$ct->mapping->mausac->tenmau}}-{{$ct->mapping->ram->soram}}GB-{{$ct->mapping->rom->sorom}}GB
                    </td>
                    <td>{{$ct->soluong}}</td>
                    <td>{{$ct->thanhtien}}VNĐ</td>
                </tr>
                @endforeach
            </tbody>
        </table>


    </div>
</div>

@endsection
@section('Them')
@endsection