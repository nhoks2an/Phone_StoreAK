@extends('layout.layout')
@section('sidebar')
    @parent
<div class="taikhoan">
    <div class="btn-themmoi">
        <a class="btn btn-sm bg-gradient-danger text-white" id="delete-all" data-url="index.php?com=product&amp;act=delete&amp;type=san-pham" title="Xóa tất cả"><i class="far fa-trash-alt mr-2"></i>Xóa tất cả</a>
        <a class="btn btn-sm bg-gradient-secondary" id="delete-all" href="{{route('taikhoan.index')}}"
        title=""><i class="fas fa-redo mr-2"></i>Quay lại</a>
        <!-- Topbar Search -->
        <div class="form-inline form-search d-inline-block align-middle ml-3">
            <form action="" >
                <div class="input-group input-group-sm" >
                    <input class="form-control form-control-navbar text-sm" name="key"
                        placeholder="Nhập địa chỉ email" aria-label="Tìm kiếm">
                    <div class="input-group-append bg-primary rounded-right">
                        <button class="btn btn-navbar text-white" type="submit"
                            onclick="">
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
                Danh sách tài khoản
            </h3>
        </div>
        <div class="card-body table-responsive p-0">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th class="align-middle" with="5%">
                            <div class="custom-control custom-checkbox my-checkbox">
                                <input type="checkbox" class="custom-control-input" id="selectall-checkbox">
                                <label for="selectall-checkbox" class="custom-control-label"></label>
                            </div>
                        </th>
                        <th class="align-middle">Hình</th>
                        <th class="align-middle" style="width:30%">Họ tên</th>
                        <th class="align-middle" style="width:30%">Email</th>
                        <th class="align-middle text-center">Thao tác</th>
                    </tr>
                </thead>
                @foreach($lsttaikhoan as $taikhoan)
                <tbody>
                    <tr>
                        <td class="align-middle">
                        <div class="custom-control custom-checkbox my-checkbox">
                                <input type="checkbox" class="custom-control-input select-checkbox">
                                <label for="select-checkbox-35"class="custom-control-label"></label>
                        </div>
                        </td>
                        <td class="align-middle">
                            <a><img src="{{$taikhoan->hinhanh}}" alt=""class="rounded img-preview"></a>
                        </td>
                        <td class="align-middle">
                            <span>{{$taikhoan->hoten}}</span>
                        </td>
                        <td class="align-middle">
                            <span>{{$taikhoan->email}}</span>
                        </td>
                        <td class="align-middle text-center text-md text-nowrap">
                    
                            <a href="{{route('taikhoan.show',['taikhoan'=>$taikhoan])}}">
                                <i class="fas fa-edit"></i>
                            </a> 
                            <button  type="submit" class="btnxoa text-danger "style="border: none;background: none;" value="{{$taikhoan->id}}">
                                <i class="color fas fa-trash-alt"></i>
                            </button>
                        </td>
                    </tr>
                </tbody>
                @endforeach
            </table>
            @foreach($lsttaikhoan as $taikhoan)
            <div class="modal fade" id="TaiKhoanModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Thông báo</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>  
                        <form method="post" action="{{route('taikhoan.destroy',$taikhoan->id)}}">
                            @csrf
                            @method('DELETE')
                            <div class="modal-body">
                                Bạn có chắc chắn muốn xóa ?
                            </div>
                            <input type="hidden"  name="taikhoan" id="taikhoan">
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Thoát</button>
                                <button type="submit" class="btn btn-primary">Xác nhận</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
   </div>
</div>
<hr>
<!-- phan trang -->
<div class="search">
    {{$lsttaikhoan->appends(request()->all())->links()}}
</div>
@section('scripts')
<script>
	$(document).on('click', '.btnxoa', function() {
        $('#TaiKhoanModal').modal({
            show: true
        });
        var taikhoan_id = $(this).val();
        $('#taikhoan').val(taikhoan_id);
        
	});
</script>
@endsection
@section('Them')
@endsection
@endsection