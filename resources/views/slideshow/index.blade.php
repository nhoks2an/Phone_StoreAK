@extends('layout.layout')
@section('sidebar')
    @parent
<section class="content">
    <div class="card-footer text-sm sticky-top">
        <a class="btn btn-sm bg-gradient-primary text-white" href="{{route('themowl')}}" title="Thêm mới"><i class="fas fa-plus mr-2"></i>Thêm mới</a>
        <a class="btn btn-sm bg-gradient-danger text-white" id="delete-all" data-url="index.php?com=photo&amp;act=delete_photo&amp;type=slide" title="Xóa tất cả"><i class="far fa-trash-alt mr-2"></i>Xóa tất cả</a>
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
                        <th class="align-middle text-center" width="10%">STT</th>
                                                	<th class="align-middle text-center" width="8%">Hình</th>
				                                				        	<th class="align-middle" style="width:30%">Tiêu đề</th>
				        				        				        	<th class="align-middle">Link</th>
				        				        				        						  	<th class="align-middle text-center">Hiển thị</th>
						                        <th class="align-middle text-center">Thao tác</th>
                    </tr>
                </thead>
                                    <tbody>
                                                    <tr>
                                <td class="align-middle">
                                    <div class="custom-control custom-checkbox my-checkbox">
                                        <input type="checkbox" class="custom-control-input select-checkbox" id="select-checkbox-1" value="1">
                                        <label for="select-checkbox-1" class="custom-control-label"></label>
                                    </div>
                                </td>
                                <td class="align-middle">
                                    <input type="number" class="form-control form-control-mini m-auto update-numb" min="0" value="1" data-id="1" data-table="photo">
                                </td>
                                	                                <td class="align-middle text-center">
	                                    <a href="index.php?com=photo&amp;act=edit_photo&amp;type=slide&amp;id=1" title="">
                                            <img class="rounded img-preview" onerror="this.src='http://localhost/VuVanQuan_0480522W/thumbs/200x100x1/assets/images/noimage.png';" src="http://localhost/VuVanQuan_0480522W/thumbs/200x100x1/upload/photo/slider-65850.png" alt="">                                        </a>
	                                </td>
	                                                            	                                <td class="align-middle">
	                                    <a class="text-dark text-break" href="index.php?com=photo&amp;act=edit_photo&amp;type=slide&amp;id=1" title=""></a>
	                                </td>
	                                                                                            	<td class="align-middle"></td>
                                                                                                                                                                    <td class="align-middle text-center">
                                        <div class="custom-control custom-checkbox my-checkbox">
                                            <input type="checkbox" class="custom-control-input show-checkbox" id="show-checkbox-hienthi-1" data-table="photo" data-id="1" data-attr="hienthi" checked="">
                                            <label for="show-checkbox-hienthi-1" class="custom-control-label"></label>
                                        </div>
                                    </td>
                                                                <td class="align-middle text-center text-md text-nowrap">
                                    <a class="text-primary mr-2" href="{{route('suaowl')}}" title="Chỉnh sửa"><i class="fas fa-edit"></i></a>
                                    <a class="text-danger" id="delete-item" data-url="index.php?com=photo&amp;act=delete_photo&amp;type=slide&amp;id=1" title="Xóa"><i class="fas fa-trash-alt"></i></a>
                                </td>
                            </tr>
                                            </tbody>
                            </table>
        </div>
    </div>
        <div class="card-footer text-sm">
        <a class="btn btn-sm bg-gradient-primary text-white" href="{{route('themowl')}}" title="Thêm mới"><i class="fas fa-plus mr-2"></i>Thêm mới</a>
        <a class="btn btn-sm bg-gradient-danger text-white" id="delete-all" data-url="index.php?com=photo&amp;act=delete_photo&amp;type=slide" title="Xóa tất cả"><i class="far fa-trash-alt mr-2"></i>Xóa tất cả</a>
    </div>
</section>
@endsection
@section('Them')
@endsection   