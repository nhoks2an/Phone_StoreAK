@extends('layout.layout')
@section('sidebar')
@parent
<section class="">
    <div class="card-footer text-sm sticky-top">
        <a class="btn btn-sm bg-gradient-primary text-white" href="{{route('chinhSach.create')}}" title="Thêm mới"><i
                class="fas fa-plus mr-2"></i>Thêm mới</a>
      
        <a class="btn btn-sm bg-gradient-secondary" id="delete-all" href="{{route('chinhSach.index')}}" title=""><i
                class="fas fa-redo mr-2"></i>Quay lại</a>
        <!-- Topbar Search -->
        <div class="form-inline form-search d-inline-block align-middle ml-3">
            <form action="">
                <div class="input-group input-group-sm">
                    <input class="form-control form-control-navbar text-sm" name="key" placeholder="Nhập tên chính sách"
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
    <div class="card card-primary card-outline text-sm mb-0">
        <div class="card-header">
            <h3 class="card-title">Danh sách Tin tức</h3>
        </div>
        @if(count($lstcs)===0)
        <div class="alert alert-warning w-100" role="alert" style="margin-top: 10px;">
            <p style="margin: auto;">Không tìm thấy nội dung bạn yêu cầu</p>
        </div>
        @else
        <div class="card-body table-responsive p-0">
            <table class="table table-hover">
                <thead>
                    <tr>
                      
                        <th class="align-middle" style="width:30%">Tiêu đề</th>
                        <th class="align-middle text-center">Hiển thị</th>
                        <th class="align-middle text-center">Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($lstcs as $cs)
                    <tr>
                        <td class="align-middle">
                            <a class="text-dark text-break"
                                title=" (1) (1) (1) (1) (1) (1)make-up-co-dau-ee-1-1">{{$cs->tieude}}</a>
                        </td>
                        <td class="align-middle text-center">
                            <div class="custom-control custom-checkbox my-checkbox">
                                @if($cs->hienthi)
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

                            <a class="text-primary mr-2" href="{{route('chinhSach.show',['chinhSach'=>$cs])}}"
                                title="Chỉnh sửa"><i class="fas fa-edit"></i></a>

                            <button type="submit" class="btnxoa text-danger " style="border: none;background: none;"
                                value="{{$cs->id}}">
                                <i class="color fas fa-trash-alt"></i>
                            </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @endif
    </div>
 
    <div class="modal fade" id="ChinhSachModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Thông báo</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="post" action="{{route('chinhSach.destroy')}}">
                    @csrf
                    @method('DELETE')
                    <div class="modal-body">
                        Bạn có chắc chắn muốn xóa ?
                    </div>
                 
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Thoát</button>
                        <button type="submit" class="btn btn-primary">Xác nhận</button>
                        <input type="hidden"  name="xoachinhsach" id="xoachinhsach" value="{{$cs}}">
                    </div>
                </form>
            </div>
        </div>
    </div>
 
</section>
<hr>
<!-- phan trang -->
<div class="search">
    {{$lstcs->appends(request()->all())->links()}}
</div>
<div class="thong-bao">
    @if(session('message'))
    <span class="alert alert-success">
        <strong>{{session('message')}}</strong>
    </span>
    @endif
</div>
<div class="thong-bao">
    @if(session('fail'))
    <span class="alert alert-danger">
        <strong>{{session('fail')}}</strong>
    </span>
    @endif
</div>
@section('scripts')
<script>
$(document).on('click', '.btnxoa', function() {
    $('#ChinhSachModal').modal({
        show: true
    });
    var chinhsach_id = $(this).val();
    $('#xoachinhsach').val(chinhsach_id);

});
</script>
@endsection
@endsection
@section('Them')
@endsection