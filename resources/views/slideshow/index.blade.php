@extends('layout.layout')
@section('sidebar')
@parent
<section class="content">
    <div class="card-footer text-sm sticky-top">
        <a class="btn btn-sm bg-gradient-primary text-white" href="{{route('slideShow.create')}}" title="Thêm mới"><i
                class="fas fa-plus mr-2"></i>Thêm mới</a>
        <a class="btn btn-sm bg-gradient-danger text-white" id="delete-all"
            data-url="index.php?com=photo&amp;act=delete_photo&amp;type=slide" title="Xóa tất cả"><i
                class="far fa-trash-alt mr-2"></i>Xóa tất cả</a>
    </div>
    <div class="card card-primary card-outline text-sm mb-0">
        <div class="card-header">
            <h3 class="card-title">Danh sách Slideshow</h3>
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
                      
                        <th class="align-middle text-center" width="8%">Hình</th>
                        <th class="align-middle">Link</th>
                        <th class="align-middle text-center">Hiển thị</th>
                        <th class="align-middle text-center">Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($lstslide as $slide)
                    <tr>
                        <td class="align-middle">
                            <div class="custom-control custom-checkbox my-checkbox">
                                <input type="checkbox" class="custom-control-input select-checkbox"
                                    id="select-checkbox-1" value="1">
                                <label for="select-checkbox-1" class="custom-control-label"></label>
                            </div>
                        </td>
                        <td class="align-middle text-center">
                            <a href="index.php?com=photo&amp;act=edit_photo&amp;type=slide&amp;id=1" title="">
                                <img class="rounded img-preview" onerror="" src="{{$slide->hinhanh}}" alt=""> </a>
                        </td>
                        <td class="align-middle">
                            <a class="text-dark text-break"
                                href="index.php?com=photo&amp;act=edit_photo&amp;type=slide&amp;id=1"
                                title="">{{$slide->lienket}}</a>
                        </td>
                        <td class="align-middle text-center">
                            <div class="custom-control custom-checkbox my-checkbox">
                                <input type="checkbox" class="custom-control-input show-checkbox"
                                    id="show-checkbox-hienthi-1" data-table="photo" data-id="1" data-attr="hienthi"
                                    checked="">
                                <label for="show-checkbox-hienthi-1" class="custom-control-label"></label>
                            </div>
                        </td>
                        <td class="align-middle text-center text-md text-nowrap">
                            <a class="text-primary mr-2" href="{{route('slideShow.show',['slideShow'=>$slide])}}"title="Chỉnh sửa"><i class="fas fa-edit"></i></a>
                                <button  type="submit" class="btnxoa text-danger "style="border: none;background: none;" value="{{$slide->id}}">
                                    <i class="color fas fa-trash-alt"></i>
                                </button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            @foreach($lstslide as $slide)
             <!-- modal -->
             <div class="modal fade" id="SlideModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Thông báo</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>  
                        <form method="post" action="{{route('slideShow.destroy',$slide->id)}}">
                                @csrf
                                @method('DELETE')
                            <div class="modal-body">
                                Bạn có chắc chắn muốn xóa !
                            </div>
                            <input type="hidden"  name="slide" id="slide">
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
</section>
@section('scripts')
<script>
	$(document).on('click', '.btnxoa', function() {
        $('#SlideModal').modal({
            show: true
        });
        var slide_id = $(this).val();
        $('#slide').val(slide_id);
        
	});
</script>
@endsection
@endsection
@section('Them')
@endsection