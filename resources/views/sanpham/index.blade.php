@extends('layout.layout')
@section('sidebar')
    @parent
  
<div class="taikhoan">
    <div class="btn-themmoi">
        <a class="btn btn-sm bg-gradient-primary text-white" href="{{route('sanPham.create')}}" ><i class="fas fa-plus mr-2"></i>Thêm mới</a>
        <a class="btn btn-sm bg-gradient-danger text-white" id="delete-all" data-url="index.php?com=product&amp;act=delete&amp;type=san-pham" title="Xóa tất cả"><i class="far fa-trash-alt mr-2"></i>Xóa tất cả</a>
        <a class="btn btn-sm bg-gradient-secondary" id="delete-all" href="{{route('sanPham.index')}}"
        title=""><i class="fas fa-redo mr-2"></i>Quay lại</a>
        <!-- Topbar Search -->
        <div class="form-inline form-search d-inline-block align-middle ml-3">
            <form action="" >
                <div class="input-group input-group-sm" >
                    <input class="form-control form-control-navbar text-sm" name="key"
                        placeholder="Tìm kiếm" aria-label="Tìm kiếm">
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
    <div class="card-footer form-group-category text-sm bg-light row">
        <div class="form-group col-xl-2 col-lg-3 col-md-4 col-sm-4 mb-2"><select id="id_list" name="id_list" onchange="onchangeCategory($(this))" class="form-control filter-category select2 select2-hidden-accessible" data-select2-id="id_list" tabindex="-1" aria-hidden="true"><option value="0" data-select2-id="2">Chọn danh mục</option><option value="4" data-select2-id="4">Tiêu đề tên vấy cưới</option><option value="3" data-select2-id="5">áo polo</option><option value="2" data-select2-id="6">Áo Thun</option></select><span class="select2 select2-container select2-container--default select2-container--below" dir="ltr" data-select2-id="1" style="width: 183px;"><span class="selection"></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span></div>
        </div>
   <div class="card card-primary card-outline text-sm mb-0">
    <div class="card-header">
            <h3 class="card-title">
                Danh sách sản phẩm
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
                        <th class="align-middle text-center">Hình</th>
                        <th class="align-middle text-center" style="width:30%">Tiêu đề</th>
                        <th class="align-middle text-center">Thao tác</th>
                    </tr>
                </thead>
                @foreach($lstsanpham as $sanPham)
                <tbody>
                    <tr>
                        <td class="align-middle text-center">
                        <div class="custom-control custom-checkbox my-checkbox">
                            <input type="checkbox" class="custom-control-input select-checkbox">
                            <label for="select-checkbox-35"class="custom-control-label"></label>
                        </div>
                        </td>
                        <td class="align-middle text-center">
                            <a><img class="rounded img-preview" src="{{$sanPham->hinhanh}}">  </a></a>
                        </td>
                        <td class="align-middle text-center">
                        <span>{{$sanPham->tensanpham}}</span>
                        </td>
                        
                        <td class="align-middle text-center text-md text-nowrap">
                     
                             <a href="{{route('sanPham.show',['sanPham'=>$sanPham])}}">
                                <i class="fas fa-edit"></i>
                            </a> 
                            <button  type="submit" class="btnxoa text-danger "style="border: none;background: none;" value="{{$sanPham->id}}">
                                    <i class="color fas fa-trash-alt"></i>
                                </button>
                            <a href="{{route('sanPham.stock',[$sanPham->id])}}" class="box-chitiet "style="border: none;background: none;">
                                <i class="fas fa-box-open" style="color: #999000;"></i>
                            </a>  
                            <a href="{{route('sanPham.abum',[$sanPham->id])}}" class="box-chitiet "style="border: none;background: none;">
                                <i class="fas fa-image" style="color:#00FF00;"></i>
                            </a>  
                        </td>
                    </tr>
                </tbody>
                @endforeach
            </table>
            @foreach($lstsanpham as $sanPham)
               <!-- modal -->
            <div class="modal fade" id="SanPhamModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Thông báo</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>  
                        <form method="post" action="{{route('sanPham.destroymp',$sanPham->id)}}">
                        @csrf
                        @method('DELETE')
                            <div class="modal-body">
                                Bạn có chắc chắn muốn xóa !
                            </div>
                            <input type="hidden"  name="tensanpham" id="tensanpham">
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
    {{$lstsanpham->appends(request()->all())->links()}}
</div>
@section('scripts')
<script>
	$(document).on('click', '.btnxoa', function() {
        $('#SanPhamModal').modal({
            show: true
        });
        var sanpham_id = $(this).val();
        $('#tensanpham').val(sanpham_id);
        
	});
</script>
@endsection
@section('Them')
@endsection
@endsection