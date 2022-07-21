@extends('layout.layout')
@section('sidebar')
@parent

<div class="taikhoan">
    <div class="btn-themmoi">
        <a class="btn btn-sm bg-gradient-primary text-white" href="{{route('mausac.create')}}" title="Thêm mới"><i
                class="fas fa-plus mr-2"></i>Thêm mới</a>
      
        <a class="btn btn-sm bg-gradient-secondary" id="delete-all" href="{{route('mausac.index')}}" title=""><i
                class="fas fa-redo mr-2"></i>Quay lại</a>
        <!-- Topbar Search -->
        <div class="form-inline form-search d-inline-block align-middle ml-3">
            <form action="">
                <div class="input-group input-group-sm">
                    <input class="form-control form-control-navbar text-sm" name="key" placeholder="Nhập tên màu"
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
    <div class="row"></div>
    <div class="card card-primary card-outline text-sm mb-0">
        <div class="card-header">
            <h3 class="card-title">
                Danh sách màu sắc
            </h3>
        </div>
        @if(count($lstmausac)===0)
        <div class="alert alert-warning w-100" role="alert" style="margin-top: 10px;">
            <p style="margin: auto;">Không tìm thấy nội dung bạn yêu cầu</p>
        </div>
        @else
        <div class="card-body table-responsive p-0">
            <table class="table table-hover">
                <thead>
                    <tr>
                   
                        <th class="align-middle" style="width:30%">Tên màu</th>
                        <th class="align-middle text-center">Thao tác</th>
                    </tr>
                </thead>
                @foreach($lstmausac as $mausac)
                <tbody>
                    <tr>
                 
                        <td class="align-middle">
                            <span>{{$mausac->tenmau}}</span>
                        </td>
                        <td class="align-middle text-center text-md text-nowrap">
                            <button type="submit" class="btnxoa text-danger" style="background: none;border: none;"
                                value="{{$mausac->id}}">
                                <i class="color fas fa-trash-alt"></i>
                            </button>
                        </td>
                    </tr>
                </tbody>
                @endforeach
            </table>
            <!-- modal -->
            <div class="modal fade" id="MauModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Thông báo</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form method="post" action="{{route('mausac.destroy',$mausac->id)}}">
                            @csrf
                            @method('DELETE')
                            <div class="modal-body">
                                Bạn có chắc chắn muốn xóa ?
                            </div>
                        
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Thoát</button>
                                <button type="submit" class="btn btn-primary">Xác nhận</button>
                                <input type="hidden"  name="xoamau" id="xoamau" value="{{$mausac}}">
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
    {{$lstmausac->appends(request()->all())->links()}}
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
    $('#MauModal').modal({
        show: true
    });
    var mau_id = $(this).val();
    $('#xoamau').val(mau_id);

});
</script>
@endsection
@endsection
@section('Them')
@endsection