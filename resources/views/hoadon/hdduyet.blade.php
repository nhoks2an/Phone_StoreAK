@extends('layout.layout')
@section('sidebar')
@parent

<div class="taikhoan">
    <div class="btn-themmoi">
      
            <a class="btn btn-sm bg-gradient-secondary" id="delete-all" href="{{route('hoadon23.index')}}"
        title=""><i class="fas fa-redo mr-2"></i>Quay lại</a>
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
                Danh sách hóa đơn
            </h3>
        </div>
        <div class="card-body table-responsive p-0">
            <table class="table table-hover">
                <thead>
                    <tr>
                       
                        <th class="align-middle">Mã HĐ</th>
                        <th class="align-middle">Khách hàng</th>
                        <th class="align-middle">Địa chỉ</th>
                        <th class="align-middle">Số điện thoại</th>
                        <th class="align-middle">Thành phố/Tỉnh</th>
                        <th class="align-middle">Quận/huyện</th>
                        <th class="align-middle">Phường/Xã</th>
                        <th class="align-middle">Tổng tiền</th>
                        <th class="align-middle">Trạng thái</th>
                        <th class="align-middle text-center">Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($hoadon as $hd)
                    <tr>
                
                        <td class="align-middle">
                            {{$hd->id}}
                        </td>
                        <td class="align-middle">
                            {{$hd->id_kh}}
                        </td>
                        <td class="align-middle">
                            {{$hd->diachi}}
                        </td>
                        <td class="align-middle">
                            {{$hd->sodienthoai}}
                        </td>
                        <td class="align-middle">
                            {{$hd->thanhpho->tenthanhpho}}
                        </td>
                        <td class="align-middle">
                            {{$hd->quan->tenquan}}
                        </td>
                        <td class="align-middle">
                            {{$hd->phuong->tenphuong}}
                        </td>
                        <td class="align-middle">
                            {{$hd->tongtien}} VNĐ
                        </td>
                        <td class="align-middle">
                            {{$hd->trangthaihd->tentrangthai}}
                        </td>
                        <td class="align-middle text-center text-md text-nowrap">
                            <form action="{{route('hoadon.sua')}}">
                                @csrf
                                <input type="hidden" value="{{$hd->id}}" name="idhd">
                                <button type="submit" style="background: none;border: none; color:#007bff">
                                    <i class="fas fa-edit"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<hr>
<!-- phan trang -->
<div class="search">
    {{$hoadon->appends(request()->all())->links()}}
</div>
@section('Them')
@endsection
@endsection