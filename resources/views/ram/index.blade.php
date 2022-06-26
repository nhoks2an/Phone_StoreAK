@extends('layout.layout')
@section('sidebar')
@parent

<div class="taikhoan">
    <div class="btn-themmoi">
        <a class="btn btn-sm bg-gradient-primary text-white" href="{{route('RAM.create')}}" title="Thêm mới"><i
                class="fas fa-plus mr-2"></i>Thêm mới</a>
        <a class="btn btn-sm bg-gradient-danger text-white" id="delete-all"
            data-url="index.php?com=product&amp;act=delete&amp;type=san-pham" title="Xóa tất cả"><i
                class="far fa-trash-alt mr-2"></i>Xóa tất cả</a>
        <!-- Topbar Search -->
        <div class="form-inline form-search d-inline-block align-middle ml-3">
            <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar text-sm" type="search" id="keyword"
                    placeholder="Tìm kiếm" aria-label="Tìm kiếm" value=""
                    onkeypress="doEnter(event,'keyword','index.php?com=product&amp;act=man&amp;type=san-pham')">
                <div class="input-group-append bg-primary rounded-right">
                    <button class="btn btn-navbar text-white" type="button"
                        onclick="onSearch('keyword','index.php?com=product&amp;act=man&amp;type=san-pham')">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="row"></div>
    <div class="card card-primary card-outline text-sm mb-0">
        <div class="card-header">
            <h3 class="card-title">
                Danh sách ram
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
                        <th class="align-middle">Ram</th>
                        <th class="align-middle text-center">Thao tác</th>
                    </tr>
                </thead>


                <tbody>
                    @foreach($lstram as $RAM)
                    <tr>
                        <td class="align-middle">
                            <div class="custom-control custom-checkbox my-checkbox">
                                <input type="checkbox" class="custom-control-input select-checkbox">
                                <label for="select-checkbox-35" class="custom-control-label"></label>
                            </div>
                        </td>
                        <td class="align-middle">
                            <span>{{$RAM->soram}}G</span>
                        </td>
                        <td class="align-middle text-center text-md text-nowrap">
                         
                                <button type="submit" class="btnxoa text-danger" style="background: none;border: none;" value="{{$RAM->id}}">
                                    <i class="color fas fa-trash-alt"></i>
                                </button>
                        
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            @foreach($lstram as $RAM)
            <!-- modal -->
            <div class="modal fade" id="RamModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Thông báo</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form method="post" action="{{route('RAM.destroy',$RAM->id)}}">
                            @csrf
                            @method('DELETE')
                            <div class="modal-body">
                                Bạn có chắc chắn muốn xóa !
                            </div>
                            <input type="hidden" name="ram" id="ram">
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
@section('scripts')
<script>
$(document).on('click', '.btnxoa', function() {
    $('#RamModal').modal({
        show: true
    });
    var ram_id = $(this).val();
    $('#ram').val(ram_id);

});
</script>
@endsection
@endsection
@section('Them')
@endsection