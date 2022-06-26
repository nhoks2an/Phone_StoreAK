@extends('layout.layout')
@section('sidebar')
@parent

    <div class="card-footer text-sm sticky-top">
        <a class="btn btn-sm bg-gradient-primary text-white" href="{{route('tinTuc.create')}}" title="Thêm mới"><i
                class="fas fa-plus mr-2"></i>Thêm mới</a>
        <a class="btn btn-sm bg-gradient-danger text-white" id="delete-all"
            data-url="index.php?com=news&amp;act=delete&amp;type=tin-tuc" title="Xóa tất cả"><i
                class="far fa-trash-alt mr-2"></i>Xóa tất cả</a>
        <div class="form-inline form-search d-inline-block align-middle ml-3">
            <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar text-sm" type="search" id="keyword"
                    placeholder="Tìm kiếm" aria-label="Tìm kiếm" value=""
                    onkeypress="doEnter(event,'keyword','index.php?com=news&amp;act=man&amp;type=tin-tuc')">
                <div class="input-group-append bg-primary rounded-right">
                    <button class="btn btn-navbar text-white" type="button"
                        onclick="onSearch('keyword','index.php?com=news&amp;act=man&amp;type=tin-tuc')">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="card card-primary card-outline text-sm mb-0">
        <div class="card-header">
            <h3 class="card-title">Danh sách Tin tức</h3>
        </div>
        <div class="card-body table-responsive p-0">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th class="align-middle" width="5%">
                            <div class="custom-control custom-checkbox my-checkbox">
                                <input type="checkbox" class="custom-control-input" id="selectall-checkbox">
                                <label for="selectall-checkbox" class="custom-control-label"></label>
                            </div>
                        </th>
                        <th class="align-middle">Hình</th>
                        <th class="align-middle" style="width:30%">Tiêu đề</th>
                        <th class="align-middle text-center">Nổi bật</th>
                        <th class="align-middle text-center">Hiển thị</th>
                        <th class="align-middle text-center">Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($lsttt as $tt)
                    <tr>
                        <td class="align-middle">
                            <div class="custom-control custom-checkbox my-checkbox">
                                <input type="checkbox" class="custom-control-input select-checkbox"
                                    id="select-checkbox-3" value="3">
                                <label for="select-checkbox-3" class="custom-control-label"></label>
                            </div>
                        </td>
                     
                        <td class="align-middle">
                            <a href="index.php?com=news&amp;act=edit&amp;type=tin-tuc&amp;id=3" title="{{$tt->tieude}}">
                                <img class="rounded img-preview" src="{{$tt->hinhanh}}" alt="">
                            </a>
                        </td>
                        <td class="align-middle">
                            <a class="text-dark text-break"
                                href="index.php?com=news&amp;act=edit&amp;type=tin-tuc&amp;id=3"
                                title=" (1) (1) (1) (1) (1) (1)make-up-co-dau-ee-1-1">{{$tt->tieude}}</a>
                        </td>
                        <td class="align-middle text-center">
                            <div class="custom-control custom-checkbox my-checkbox">
                                <input type="checkbox" class="custom-control-input show-checkbox"
                                    id="show-checkbox-noibat-3" data-table="news" data-id="3" data-attr="noibat"
                                    checked="">
                                <label for="show-checkbox-noibat-3" class="custom-control-label"></label>
                            </div>
                        </td>
                        <td class="align-middle text-center">
                            <div class="custom-control custom-checkbox my-checkbox">
                                <input type="checkbox" class="custom-control-input show-checkbox"
                                    id="show-checkbox-hienthi-3" data-table="news" data-id="3" data-attr="hienthi"
                                    checked="">
                                <label for="show-checkbox-hienthi-3" class="custom-control-label"></label>
                            </div>
                        </td>
                        <td class="align-middle text-center text-md text-nowrap">
                            <a class="text-primary mr-2" href="{{route('tinTuc.show',['tinTuc'=>$tt])}}"
                                title="Chỉnh sửa"><i class="fas fa-edit"></i></a>
                                <button  type="submit" class="btnxoa text-danger "style="border: none;background: none;" value="{{$tt->id}}">
                                        <i class="color fas fa-trash-alt"></i>
                                </button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            @foreach($lsttt as $tt)
            <div class="modal fade" id="TinTucModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Thông báo</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>  
                        <form method="post" action="{{route('tinTuc.destroy',$tt->id)}}">
                                @csrf
                                @method('DELETE')
                            <div class="modal-body">
                                Bạn có chắc chắn muốn xóa !
                            </div>
                            <input type="hidden"  name="tintuc" id="tintuc">
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
@section('scripts')
<script>
	$(document).on('click', '.btnxoa', function() {
        $('#TinTucModal').modal({
            show: true
        });
        var tintuc_id = $(this).val();
        $('#tintuc').val(tintuc_id);
        
	});
</script>
@endsection
@endsection
@section('Them')
@endsection