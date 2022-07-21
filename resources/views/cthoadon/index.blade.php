@extends('layout.layout')
@section('sidebar')
@parent

<div class="taikhoan">
    <div class="btn-themmoi">
       <!-- Topbar Search -->
       <div class="form-inline form-search d-inline-block align-middle ml-3">
            <form action="">
                <div class="input-group input-group-sm">
                    <input class="form-control form-control-navbar text-sm" name="key" placeholder="Nhập mã hóa đơn"
                        aria-label="Tìm kiếm">
                    <div class="input-group-append bg-primary rounded-right">
                        <button class="btn btn-navbar text-white" type="submit" onclick="">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="row">

    </div>
    <div class="card card-primary card-outline text-sm mb-0">
        <div class="card-header">
            <h3 class="card-title">
                Danh sách chi tiết hóa đơn
            </h3>
        </div>
        @if(count($cthoadon)===0)
        <div class="alert alert-warning w-100" role="alert" style="margin-top: 10px;">
            <p style="margin: auto;">Không tìm thấy nội dung bạn yêu cầu</p>
        </div>
        @else
        <div class="card-body table-responsive p-0">
            <table class="table table-hover">
                <thead>
                    <tr>
                 
                        <th class="align-middle">Mã chi tiết</th>
                        <th class="align-middle">Mã đơn hàng</th>
                        <th class="align-middle">Mã sãn phẩm</th>
                        <th class="align-middle">Mã loại</th>
                        <th class="align-middle">Số lượng</th>
                        <th class="align-middle">Thành tiền</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($cthoadon as $cthd)
                    <tr>
                     
                        <td class="align-middle">
                            {{$cthd->id}}
                        </td>
                        <td class="align-middle">
                            {{$cthd->id_hoadon}}
                        </td>
                        <td class="align-middle">
                            {{$cthd->id_sanpham}}
                        </td>
                        <td class="align-middle">
                            {{$cthd->id_map}}
                        </td>
                        <td class="align-middle">
                            {{$cthd->soluong}}
                        </td>
                        <td class="align-middle">
                            {{$cthd->thanhtien}}VNĐ
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @endif
    </div>
</div>
<hr>
<!-- phan trang -->
<div class="search">
    {{$cthoadon->appends(request()->all())->links()}}
</div>
@section('Them')
@endsection
@endsection