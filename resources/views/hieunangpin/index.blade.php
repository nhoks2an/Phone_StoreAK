@extends('layout.layout')
@section('sidebar')
    @parent
<div class="taikhoan">
    <div class="btn-themmoi">
        <a class="btn btn-sm bg-gradient-primary text-white" href="{{route('hieunangpin.create')}}" title="Thêm mới"><i class="fas fa-plus mr-2"></i>Thêm mới</a>
        <a class="btn btn-sm bg-gradient-danger text-white" id="delete-all" data-url="index.php?com=product&amp;act=delete&amp;type=san-pham" title="Xóa tất cả"><i class="far fa-trash-alt mr-2"></i>Xóa tất cả</a>
        <a class="btn btn-sm bg-gradient-secondary" id="delete-all" href="{{route('hieunangpin.index')}}"
        title=""><i class="fas fa-redo mr-2"></i>Quay lại</a>
        <!-- Topbar Search -->
        <div class="form-inline form-search d-inline-block align-middle ml-3">
            <form action="" >
                <div class="input-group input-group-sm" >
                    <input class="form-control form-control-navbar text-sm" name="key"
                        placeholder="Nhập tên hiệu năng" aria-label="Tìm kiếm">
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
    <div class="row"></div>
   <div class="card card-primary card-outline text-sm mb-0">
    <div class="card-header">
            <h3 class="card-title">
                Danh sách hiệu năng & pin
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
                       
                        <th class="align-middle">Hiệu năng & pin</th>
                        <th class="align-middle text-center">Thao tác</th>
                    </tr>
                </thead>
                @foreach($lsthieunangpin as $hieunangpin)
                <tbody>
                    <tr>
                        <td class="align-middle">
                        <div class="custom-control custom-checkbox my-checkbox">
                                <input type="checkbox" class="custom-control-input select-checkbox">
                                <label for="select-checkbox-35"class="custom-control-label"></label>
                        </div>
                        </td>
                        
                        <td class="align-middle">
                           <span>{{$hieunangpin->tenhieunang}}</span>
                        </td>
                        <td class="align-middle text-center text-md text-nowrap">
                          
                                <button type="submit" class="btnxoa text-danger" style="background: none;border: none;" value="{{$hieunangpin->id}}">
                                    <i class="color fas fa-trash-alt"></i>
                                </button>  
                               
                            </td>
                        </td>
                    </tr>
                  
                </tbody>
                @endforeach
            </table>
            @foreach($lsthieunangpin as $hieunangpin)
            <!-- modal -->
            <div class="modal fade" id="HieuNangModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Thông báo</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>  
                        <form method="post" action="{{route('hieunangpin.destroy',$hieunangpin->id)}}">
                            @csrf
                            @method('DELETE')
                            <div class="modal-body">
                                Bạn có chắc chắn muốn xóa ?
                            </div>
                            <input type="hidden"  name="hieunang" id="hieunang">
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
    {{$lsthieunangpin->appends(request()->all())->links()}}
</div>
@section('scripts')
<script>
	$(document).on('click', '.btnxoa', function() {
        $('#HieuNangModal').modal({
            show: true
        });
        var hieunang_id = $(this).val();
        $('#hieunang').val(hieunang_id);
        
	});
</script>
@endsection
@section('Them')
@endsection
@endsection