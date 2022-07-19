@extends('layout.layout')
@section('sidebar')
@parent

<div class="taikhoan">
    <div class="btn-themmoi">
        <button type="button" class="btn btn-sm bg-gradient-primary text-white" data-toggle="modal" data-target="#themab">
         <i class="fas fa-plus mr-2"></i> Thêm mới
        </button>
   
        <a class="btn btn-sm bg-gradient-secondary" id="delete-all" href=""
        title=""><i class="fas fa-redo mr-2"></i>Quay lại</a>
      
    </div>
    <div class="card-footer form-group-category text-sm bg-light row"></div>
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
                        <th class="align-middle text-center">Sản Phẩm</th>
                        <th class="align-middle text-center">Hình ảnh</th>
                        <th class="align-middle text-center">Thao tác</th>
                    </tr>
                </thead>
              @foreach($lsthinhanh as $hinhanh)
                <tbody>
                    <tr>
                        <td class="align-middle text-center">
                            <span>{{$hinhanh->sanpham->tensanpham}}</span>
                        </td>
                        <td class="align-middle text-center text-md text-nowrap">
                            <span> <img class="rounded img-preview" src="{{$hinhanh->hinhanh}}"></span>
                        </td>
                        <td class="align-middle text-center text-md text-nowrap">
                            <button  type="submit" class="btnxoa text-danger "style="border: none;background: none;" value="{{$hinhanh->id}}">
                                <i class="color fas fa-trash-alt"></i>
                            </button>
                        </td>
                    </tr>
                </tbody>
                @endforeach
            </table>
               <!-- modal them-->
               <div class="x modal fade" id="themab" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Thêm chi tiết sản phẩm</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form action="{{route('sanPham.storeab')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="modal-body">
                                    <div class="card card-primary card-outline text-sm">
                                        <div class="card-header">
                                            <h3 class="card-title">Hình ảnh Giới thiệu</h3>
                                            <div class="card-tools">
                                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="photoUpload-zone">
                                                <div class="photoUpload-detail" id="photoUpload-preview"><img class="rounded"  src="../img/noimage.jpg" alt="Alt Photo" id="hinhanhab">	</div>
                                                    <label class="photoUpload-file" id="photo-zone" for="file-zone">
                                                        <input type="file" name="hinhanh" id="file-zone">
                                                        <i class="fas fa-cloud-upload-alt"></i>
                                                        <p class="photoUpload-drop">Kéo và thả hình vào đây</p>
                                                        <p class="photoUpload-or">hoặc</p>
                                                        <p class="photoUpload-choose btn btn-sm bg-gradient-success">Chọn hình</p>
                                                    </label>
                                                </div>
                                            </div>
                                            @if($errors->has('hinhanh'))
                                    <div class="alert alert-danger" style="margin-top:10px;">
                                        {{$errors->first('hinhanh')}}
                                    </div>
                                    @endif
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Thoát</button>
                                        <button type="submit" name="registerbtn" class="btn btn-primary">Lưu</button>
                                        <input type="hidden" name="themab" id="themab" value="{{$sanPham}}">
                                    </div>
                                </div>    
                            </form>
                        </div>
                    </div>

                <!-- modal xoa-->
                <div class="modal fade" id="XoaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Thông báo</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>  
                            <form method="post" action="{{route('sanPham.destroyab')}}">
                                @csrf
                                @method('DELETE')
                                    <div class="modal-body">
                                        Bạn có chắc chắn muốn xóa ?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Thoát</button>
                                        <button type="submit" class="btn btn-primary">Xác nhận</button>
                                        <input type="hidden"  name="xoaabum" id="xoaabum">
                                        <input type="hidden"  name="xoaabum1" id="xoaabum1" value="{{$sanPham}}">
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
        </div>
   </div> 
</div>
<hr>
<!-- phan trang -->
<div class="search">
    {{$lsthinhanh->appends(request()->all())->links()}}
</div>
<div class="thong-bao">
    @if(session('message'))
    <span class="alert alert-success">
        <strong>{{session('message')}}</strong>
    </span>
    @endif
</div>
<script>
    /* Img Preview */
	const input = document.getElementById("file-zone");
    const image = document.getElementById("hinhanhab");

    input.addEventListener("change", (e) => {
        if (e.target.files.length) {
            const src = URL.createObjectURL(e.target.files[0]);
            image.src = src;
        }
	});
</script> 
@section('scripts')
<script>
    $(document).on('click', '.btnxoa', function() {
        $('#XoaModal').modal({
            show: true
        });
        var hinhanh_id = $(this).val();
        $('#xoaabum').val(hinhanh_id);
	});
</script>
@endsection
@endsection
@section('Them')
@endsection




