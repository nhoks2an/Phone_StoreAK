@extends('layout.layout')
@section('sidebar')
@parent


<div class="content">
    <div class="taikhoan">
        <div class="btn-themmoi">
            <a class="btn btn-sm bg-gradient-primary text-white" href="{{route('hang.create')}}" title="Thêm mới"><i
                    class="fas fa-plus mr-2"></i>Thêm mới</a>
            <a class="btn btn-sm bg-gradient-secondary" id="delete-all" href="{{route('hang.index')}}" title=""><i
                    class="fas fa-redo mr-2"></i>Quay lại</a>
            <!-- Topbar Search -->
            <div class="form-inline form-search d-inline-block align-middle ml-3">
                <form action="">
                    <div class="input-group input-group-sm">
                        <input class="form-control form-control-navbar text-sm" name="key" placeholder="Nhập tên hãng"
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
                    Danh sách hãng
                </h3>
            </div>
            @if(count($lsthang)===0)
        <div class="alert alert-warning w-100" role="alert" style="margin-top: 10px;">
            <p style="margin: auto;">Không tìm thấy nội dung bạn yêu cầu</p>
        </div>
        @else
            <div class="card-body table-responsive p-0">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th class="align-middle">Hình</th>
                            <th class="align-middle" style="width:30%">Tên hãng</th>
                            <th class="align-middle text-center">Thao tác</th>
                        </tr>
                    </thead>
                    @foreach($lsthang as $hang)

                    <tbody>
                        <tr>
                            <td class="align-middle">
                                <a title="">
                                    <img class="rounded img-preview" src="{{$hang->hinhanh}}"> </a>
                            </td>
                            <td class="align-middle">
                                <span>{{$hang->tenhang}}</span>
                            </td>
                            <td class="align-middle text-center text-md text-nowrap">

                                <a href="{{route('hang.show',['hang'=>$hang])}}">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <button type="button" class="btnxoa text-danger" style="background: none;border: none;"
                                    value="{{$hang->id}}">
                                    <i class="color fas fa-trash-alt"></i>
                                </button>

                            </td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>
                <!-- modal -->
                @foreach($lsthang as $hang)
                <div class="modal fade" id="HangModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Thông báo</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form method="post" action="{{route('hang.destroy',$hang->id)}}">
                                @csrf
                                @method('DELETE')
                                <div class="modal-body">
                                    Bạn có chắc chắn muốn xóa ?
                                </div>
                                <input type="hidden" name="hang" id="hang">
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
            @endif
        </div>
    </div>
</div>

<hr>
<!-- phan trang -->
<div class="search">
    {{$lsthang->appends(request()->all())->links()}}
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
    $('#HangModal').modal({
        show: true
    });
    var hang_id = $(this).val();
    $('#hang').val(hang_id);

});
</script>
@endsection

@section('Them')
@endsection
@endsection