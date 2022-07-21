@extends('layout.layout')
@section('sidebar')
@parent
<div class="taikhoan">
    <div class="btn-themmoi">
        <a class="btn btn-sm bg-gradient-primary text-white" href="{{route('sanPham.create')}}"><i
                class="fas fa-plus mr-2"></i>Thêm mới</a>
       
        <a class="btn btn-sm bg-gradient-secondary" id="delete-all" href="{{route('sanPham.index')}}" title=""><i
                class="fas fa-redo mr-2"></i>Quay lại</a>
        <!-- Topbar Search -->
        <div class="form-inline form-search d-inline-block align-middle ml-3">
            <form action="">
                <div class="input-group input-group-sm">
                    <input class="form-control form-control-navbar text-sm" name="key" placeholder="Nhập tên sản phẩm"
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
    <div class="card-footer form-group-category text-sm bg-light row">
     
    </div>
    <div class="card card-primary card-outline text-sm mb-0">
        <div class="card-header">
            <h3 class="card-title">
                Danh sách sản phẩm
            </h3>
        </div>
        @if(count($lstsanpham)===0)
        <div class="alert alert-warning w-100" role="alert" style="margin-top: 10px;">
            <p style="margin: auto;">Không tìm thấy nội dung bạn yêu cầu</p>
        </div>
        @else
        <div class="card-body table-responsive p-0">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th class="align-middle text-center">Hình</th>
                        <th class="align-middle text-center" style="width:30%">Tiêu đề</th>
                        <th class="align-middle text-center" style="width:30%">Nổi bật</th>
                        <th class="align-middle text-center" style="width:30%">Hiển thị</th>
                        <th class="align-middle text-center">Thao tác</th>
                    </tr>
                </thead>
                @foreach($lstsanpham as $sanPham)
                <tbody>
                    <tr>
                      
                        <td class="align-middle text-center">
                            <a><img class="rounded img-preview" src="{{$sanPham->hinhanh}}"> </a></a>
                        </td>
                        <td class="align-middle text-center">
                            <span>{{$sanPham->tensanpham}}</span>
                        </td>
                        <td class="align-middle text-center">
                            <div class="custom-control custom-checkbox my-checkbox">
                                @if($sanPham->noibat)
                                <input type="checkbox" class="custom-control-input hienthi-checkbox" name="noibat"
                                    id="hienthi-checkbox" checked="" value="">
                                @else
                                <input type="checkbox" class="custom-control-input hienthi-checkbox" name="noibat"
                                    id="hienthi-checkbox" value="">
                                @endif
                                <label for="show-checkbox-hienthi-3" class="custom-control-label"></label>
                            </div>
                        </td>
                        <td class="align-middle text-center">
                            <div class="custom-control custom-checkbox my-checkbox">
                                @if($sanPham->hienthi)
                                <input type="checkbox" class="custom-control-input hienthi-checkbox" name="hienthi"
                                    id="hienthi-checkbox" checked="" value="">
                                @else
                                <input type="checkbox" class="custom-control-input hienthi-checkbox" name="hienthi"
                                    id="hienthi-checkbox" value="">
                                @endif
                                <label for="show-checkbox-hienthi-3" class="custom-control-label"></label>
                            </div>
                        </td>
                        <td class="align-middle text-center text-md text-nowrap">
                            <a href="{{route('sanPham.show',['sanPham'=>$sanPham])}}">
                                <i class="fas fa-edit"></i>
                            </a>
                            <button type="submit" class="btnxoa text-danger " style="border: none;background: none;"
                                value="{{$sanPham->id}}">
                                <i class="color fas fa-trash-alt"></i>
                            </button>
                            <a href="{{route('sanPham.stock',[$sanPham->id])}}" class="box-chitiet "
                                style="border: none;background: none;">
                                <i class="fas fa-box-open" style="color: #999000;"></i>
                            </a>
                            <a href="{{route('sanPham.abum',[$sanPham->id])}}" class="box-chitiet "
                                style="border: none;background: none;">
                                <i class="fas fa-image" style="color:#00FF00;"></i>
                            </a>
                        </td>
                    </tr>
                </tbody>
                @endforeach
            </table>
                <div class="modal fade" id="SanPhamModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Thông báo</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form method="post" action="{{route('sanPham.destroy')}}">
                                @csrf
                                @method('DELETE')
                                <div class="modal-body">
                                    Bạn có chắc chắn muốn xóa ?
                                </div>
                             
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Thoát</button>
                                    <button type="submit" class="btn btn-primary">Xác nhận</button>
                                    <input type="hidden" name="xoasanphamm" id="xoasanphamm" value="{{$sanPham}}">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
        </div>
        @endif
        </div>
    </div>
<hr>
<!-- phan trang -->
<div class="search">
    {{$lstsanpham->appends(request()->all())->links()}}
</div>
<div class="thong-bao">
    @if(session('message'))
    <span class="alert alert-success">
        <strong>{{session('message')}}</strong>
    </span>
    @endif
</div>
@section('scripts')
<script>
    $(document).on('click', '.btnxoa', function() {
        $('#SanPhamModal').modal({
            show: true
        });
        var sanpham_id = $(this).val();
        $('#xoasanphamm').val(sanpham_id);
    });
</script>
@endsection

@section('Them')
@endsection
@endsection