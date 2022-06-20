@extends('layout.layout')
@section('sidebar')
    @parent
<section class="">
    <div class="card-footer text-sm sticky-top">
    	<a class="btn btn-sm bg-gradient-primary text-white" href="{{route('themtintuc')}}" title="Thêm mới"><i class="fas fa-plus mr-2"></i>Thêm mới</a>
        <a class="btn btn-sm bg-gradient-danger text-white" id="delete-all" data-url="index.php?com=news&amp;act=delete&amp;type=tin-tuc" title="Xóa tất cả"><i class="far fa-trash-alt mr-2"></i>Xóa tất cả</a>
        <div class="form-inline form-search d-inline-block align-middle ml-3">
            <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar text-sm" type="search" id="keyword" placeholder="Tìm kiếm" aria-label="Tìm kiếm" value="" onkeypress="doEnter(event,'keyword','index.php?com=news&amp;act=man&amp;type=tin-tuc')">
                <div class="input-group-append bg-primary rounded-right">
                    <button class="btn btn-navbar text-white" type="button" onclick="onSearch('keyword','index.php?com=news&amp;act=man&amp;type=tin-tuc')">
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
                        <th class="align-middle text-center" width="10%">STT</th>
													<th class="align-middle">Hình</th>
												<th class="align-middle" style="width:30%">Tiêu đề</th>
																			<th class="align-middle text-center">Nổi bật</th>
													<th class="align-middle text-center">Hiển thị</th>
						                        <th class="align-middle text-center">Thao tác</th>
                    </tr>
                </thead>
                                    <tbody>
                                                    <tr>
                                <td class="align-middle">
                                    <div class="custom-control custom-checkbox my-checkbox">
                                        <input type="checkbox" class="custom-control-input select-checkbox" id="select-checkbox-3" value="3">
                                        <label for="select-checkbox-3" class="custom-control-label"></label>
                                    </div>
                                </td>
                                <td class="align-middle">
                                    <input type="number" class="form-control form-control-mini m-auto update-numb" min="0" value="0" data-id="3" data-table="news">
                                </td>
                                                                    <td class="align-middle">
                                    	<a href="index.php?com=news&amp;act=edit&amp;type=tin-tuc&amp;id=3" title="Make up Cô Dâu ee (1) (1)Make up Cô Dâu ee (1) (1)Make up Cô Dâu ee (1) (1)make-up-co-dau-ee-1-1">
                                            <img class="rounded img-preview" onerror="this.src='http://localhost/VuVanQuan_0480522W/thumbs/100x100x1/assets/images/noimage.png';" src="http://localhost/VuVanQuan_0480522W/thumbs/100x100x1/upload/news/hinhanh1-tintuc-6306.png" alt="Make up Cô Dâu ee (1) (1)Make up Cô Dâu ee (1) (1)Make up Cô Dâu ee (1) (1)make-up-co-dau-ee-1-1">                                        </a>
                                    </td>
                                                                <td class="align-middle">
                                    <a class="text-dark text-break" href="index.php?com=news&amp;act=edit&amp;type=tin-tuc&amp;id=3" title="Make up Cô Dâu ee (1) (1)Make up Cô Dâu ee (1) (1)Make up Cô Dâu ee (1) (1)make-up-co-dau-ee-1-1">Make up Cô Dâu ee (1) (1)Make up Cô Dâu ee (1) (1)Make up Cô Dâu ee (1) (1)make-up-co-dau-ee-1-1</a>
                                    <div class="tool-action mt-2 w-clear">
                                                                            	                                    		<a class="text-primary mr-3" href="http://localhost/VuVanQuan_0480522W/make-up-co-dau-ee-1-1" target="_blank" title="Make up Cô Dâu ee (1) (1)Make up Cô Dâu ee (1) (1)Make up Cô Dâu ee (1) (1)make-up-co-dau-ee-1-1"><i class="far fa-eye mr-1"></i>View</a>
                                    	                                    	<a class="text-info mr-3" href="index.php?com=news&amp;act=edit&amp;type=tin-tuc&amp;id=3" title="Make up Cô Dâu ee (1) (1)Make up Cô Dâu ee (1) (1)Make up Cô Dâu ee (1) (1)make-up-co-dau-ee-1-1"><i class="far fa-edit mr-1"></i>Edit</a>
                                    	                                    		<div class="dropdown">
			                            		<a id="dropdownCopy" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle text-success p-0 pr-3"><i class="far fa-clone mr-1"></i>Copy</a>
									            <ul aria-labelledby="dropdownCopy" class="dropdown-menu border-0 shadow">
									                <li><a href="#" class="dropdown-item copy-now" data-id="3" data-table="news" data-copyimg="1"><i class="far fa-caret-square-right text-secondary mr-2"></i>Sao chép ngay</a></li>
									                <li><a href="index.php?com=news&amp;act=copy&amp;type=tin-tuc&amp;id_copy=3" class="dropdown-item"><i class="far fa-caret-square-right text-secondary mr-2"></i>Chỉnh sửa thông tin</a></li>
									            </ul>
			                            	</div>
                                    	                                    	<a class="text-danger" id="delete-item" data-url="index.php?com=news&amp;act=delete&amp;type=tin-tuc&amp;id=3" title="Make up Cô Dâu ee (1) (1)Make up Cô Dâu ee (1) (1)Make up Cô Dâu ee (1) (1)make-up-co-dau-ee-1-1"><i class="far fa-trash-alt mr-1"></i>Delete</a>
                                    </div>
                                </td>
                                                                                                                                    <td class="align-middle text-center">
                                        <div class="custom-control custom-checkbox my-checkbox">
                                            <input type="checkbox" class="custom-control-input show-checkbox" id="show-checkbox-noibat-3" data-table="news" data-id="3" data-attr="noibat" checked="">
                                            <label for="show-checkbox-noibat-3" class="custom-control-label"></label>
                                        </div>
                                    </td>
                                                                    <td class="align-middle text-center">
                                        <div class="custom-control custom-checkbox my-checkbox">
                                            <input type="checkbox" class="custom-control-input show-checkbox" id="show-checkbox-hienthi-3" data-table="news" data-id="3" data-attr="hienthi" checked="">
                                            <label for="show-checkbox-hienthi-3" class="custom-control-label"></label>
                                        </div>
                                    </td>
                                                                <td class="align-middle text-center text-md text-nowrap">
                                	                                    	<div class="dropdown d-inline-block align-middle">
		                            		<a id="dropdownCopy" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle text-success p-0 pr-2"><i class="far fa-clone"></i></a>
								            <ul aria-labelledby="dropdownCopy" class="dropdown-menu border-0 shadow">
								                <li><a href="#" class="dropdown-item copy-now" data-id="3" data-table="news"><i class="far fa-caret-square-right text-secondary mr-2"></i>Sao chép ngay</a></li>
								                <li><a href="index.php?com=news&amp;act=copy&amp;type=tin-tuc&amp;id=3" class="dropdown-item"><i class="far fa-caret-square-right text-secondary mr-2"></i>Chỉnh sửa thông tin</a></li>
								            </ul>
		                            	</div>
                                                                        <a class="text-primary mr-2" href="{{route('suatintuc')}}" title="Chỉnh sửa"><i class="fas fa-edit"></i></a>
                                    <a class="text-danger" id="delete-item" data-url="index.php?com=news&amp;act=delete&amp;type=tin-tuc&amp;id=3" title="Xóa"><i class="fas fa-trash-alt"></i></a>
                                </td>
                            </tr>
                                                    <tr>
                                <td class="align-middle">
                                    <div class="custom-control custom-checkbox my-checkbox">
                                        <input type="checkbox" class="custom-control-input select-checkbox" id="select-checkbox-2" value="2">
                                        <label for="select-checkbox-2" class="custom-control-label"></label>
                                    </div>
                                </td>
                                <td class="align-middle">
                                    <input type="number" class="form-control form-control-mini m-auto update-numb" min="0" value="0" data-id="2" data-table="news">
                                </td>
                                                                    <td class="align-middle">
                                    	<a href="index.php?com=news&amp;act=edit&amp;type=tin-tuc&amp;id=2" title="Make up Cô Dâu ee (1)make-up-co-dau-ee-1">
                                            <img class="rounded img-preview" onerror="this.src='http://localhost/VuVanQuan_0480522W/thumbs/100x100x1/assets/images/noimage.png';" src="http://localhost/VuVanQuan_0480522W/thumbs/100x100x1/upload/news/hinhanh1-album-3003-1050.png" alt="Make up Cô Dâu ee (1)make-up-co-dau-ee-1">                                        </a>
                                    </td>
                                                                <td class="align-middle">
                                    <a class="text-dark text-break" href="index.php?com=news&amp;act=edit&amp;type=tin-tuc&amp;id=2" title="Make up Cô Dâu ee (1)make-up-co-dau-ee-1">Make up Cô Dâu ee (1)make-up-co-dau-ee-1</a>
                                    <div class="tool-action mt-2 w-clear">
                                                                            	                                    		<a class="text-primary mr-3" href="http://localhost/VuVanQuan_0480522W/make-up-co-dau-ee-1" target="_blank" title="Make up Cô Dâu ee (1)make-up-co-dau-ee-1"><i class="far fa-eye mr-1"></i>View</a>
                                    	                                    	<a class="text-info mr-3" href="index.php?com=news&amp;act=edit&amp;type=tin-tuc&amp;id=2" title="Make up Cô Dâu ee (1)make-up-co-dau-ee-1"><i class="far fa-edit mr-1"></i>Edit</a>
                                    	                                    		<div class="dropdown">
			                            		<a id="dropdownCopy" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle text-success p-0 pr-3"><i class="far fa-clone mr-1"></i>Copy</a>
									            <ul aria-labelledby="dropdownCopy" class="dropdown-menu border-0 shadow">
									                <li><a href="#" class="dropdown-item copy-now" data-id="2" data-table="news" data-copyimg="1"><i class="far fa-caret-square-right text-secondary mr-2"></i>Sao chép ngay</a></li>
									                <li><a href="index.php?com=news&amp;act=copy&amp;type=tin-tuc&amp;id_copy=2" class="dropdown-item"><i class="far fa-caret-square-right text-secondary mr-2"></i>Chỉnh sửa thông tin</a></li>
									            </ul>
			                            	</div>
                                    	                                    	<a class="text-danger" id="delete-item" data-url="index.php?com=news&amp;act=delete&amp;type=tin-tuc&amp;id=2" title="Make up Cô Dâu ee (1)make-up-co-dau-ee-1"><i class="far fa-trash-alt mr-1"></i>Delete</a>
                                    </div>
                                </td>
                                                                                                                                    <td class="align-middle text-center">
                                        <div class="custom-control custom-checkbox my-checkbox">
                                            <input type="checkbox" class="custom-control-input show-checkbox" id="show-checkbox-noibat-2" data-table="news" data-id="2" data-attr="noibat" checked="">
                                            <label for="show-checkbox-noibat-2" class="custom-control-label"></label>
                                        </div>
                                    </td>
                                                                    <td class="align-middle text-center">
                                        <div class="custom-control custom-checkbox my-checkbox">
                                            <input type="checkbox" class="custom-control-input show-checkbox" id="show-checkbox-hienthi-2" data-table="news" data-id="2" data-attr="hienthi" checked="">
                                            <label for="show-checkbox-hienthi-2" class="custom-control-label"></label>
                                        </div>
                                    </td>
                                                                <td class="align-middle text-center text-md text-nowrap">
                                	                                    	<div class="dropdown d-inline-block align-middle">
		                            		<a id="dropdownCopy" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle text-success p-0 pr-2"><i class="far fa-clone"></i></a>
								            <ul aria-labelledby="dropdownCopy" class="dropdown-menu border-0 shadow">
								                <li><a href="#" class="dropdown-item copy-now" data-id="2" data-table="news"><i class="far fa-caret-square-right text-secondary mr-2"></i>Sao chép ngay</a></li>
								                <li><a href="index.php?com=news&amp;act=copy&amp;type=tin-tuc&amp;id=2" class="dropdown-item"><i class="far fa-caret-square-right text-secondary mr-2"></i>Chỉnh sửa thông tin</a></li>
								            </ul>
		                            	</div>
                                                                        <a class="text-primary mr-2" href="index.php?com=news&amp;act=edit&amp;type=tin-tuc&amp;id=2" title="Chỉnh sửa"><i class="fas fa-edit"></i></a>
                                    <a class="text-danger" id="delete-item" data-url="index.php?com=news&amp;act=delete&amp;type=tin-tuc&amp;id=2" title="Xóa"><i class="fas fa-trash-alt"></i></a>
                                </td>
                            </tr>
                                                    <tr>
                                <td class="align-middle">
                                    <div class="custom-control custom-checkbox my-checkbox">
                                        <input type="checkbox" class="custom-control-input select-checkbox" id="select-checkbox-1" value="1">
                                        <label for="select-checkbox-1" class="custom-control-label"></label>
                                    </div>
                                </td>
                                <td class="align-middle">
                                    <input type="number" class="form-control form-control-mini m-auto update-numb" min="0" value="1" data-id="1" data-table="news">
                                </td>
                                                                    <td class="align-middle">
                                    	<a href="index.php?com=news&amp;act=edit&amp;type=tin-tuc&amp;id=1" title="Make up Cô Dâu ee">
                                            <img class="rounded img-preview" onerror="this.src='http://localhost/VuVanQuan_0480522W/thumbs/100x100x1/assets/images/noimage.png';" src="http://localhost/VuVanQuan_0480522W/thumbs/100x100x1/upload/news/hinhanh1-tintuc-4243.png" alt="Make up Cô Dâu ee">                                        </a>
                                    </td>
                                                                <td class="align-middle">
                                    <a class="text-dark text-break" href="index.php?com=news&amp;act=edit&amp;type=tin-tuc&amp;id=1" title="Make up Cô Dâu ee">Make up Cô Dâu ee</a>
                                    <div class="tool-action mt-2 w-clear">
                                                                            	                                    		<a class="text-primary mr-3" href="http://localhost/VuVanQuan_0480522W/make-up-co-dau-ee" target="_blank" title="Make up Cô Dâu ee"><i class="far fa-eye mr-1"></i>View</a>
                                    	                                    	<a class="text-info mr-3" href="index.php?com=news&amp;act=edit&amp;type=tin-tuc&amp;id=1" title="Make up Cô Dâu ee"><i class="far fa-edit mr-1"></i>Edit</a>
                                    	                                    		<div class="dropdown">
			                            		<a id="dropdownCopy" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle text-success p-0 pr-3"><i class="far fa-clone mr-1"></i>Copy</a>
									            <ul aria-labelledby="dropdownCopy" class="dropdown-menu border-0 shadow">
									                <li><a href="#" class="dropdown-item copy-now" data-id="1" data-table="news" data-copyimg="1"><i class="far fa-caret-square-right text-secondary mr-2"></i>Sao chép ngay</a></li>
									                <li><a href="index.php?com=news&amp;act=copy&amp;type=tin-tuc&amp;id_copy=1" class="dropdown-item"><i class="far fa-caret-square-right text-secondary mr-2"></i>Chỉnh sửa thông tin</a></li>
									            </ul>
			                            	</div>
                                    	                                    	<a class="text-danger" id="delete-item" data-url="index.php?com=news&amp;act=delete&amp;type=tin-tuc&amp;id=1" title="Make up Cô Dâu ee"><i class="far fa-trash-alt mr-1"></i>Delete</a>
                                    </div>
                                </td>
                                                                                                                                    <td class="align-middle text-center">
                                        <div class="custom-control custom-checkbox my-checkbox">
                                            <input type="checkbox" class="custom-control-input show-checkbox" id="show-checkbox-noibat-1" data-table="news" data-id="1" data-attr="noibat" checked="">
                                            <label for="show-checkbox-noibat-1" class="custom-control-label"></label>
                                        </div>
                                    </td>
                                                                    <td class="align-middle text-center">
                                        <div class="custom-control custom-checkbox my-checkbox">
                                            <input type="checkbox" class="custom-control-input show-checkbox" id="show-checkbox-hienthi-1" data-table="news" data-id="1" data-attr="hienthi" checked="">
                                            <label for="show-checkbox-hienthi-1" class="custom-control-label"></label>
                                        </div>
                                    </td>
                                                                <td class="align-middle text-center text-md text-nowrap">
                                	                                    	<div class="dropdown d-inline-block align-middle">
		                            		<a id="dropdownCopy" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle text-success p-0 pr-2"><i class="far fa-clone"></i></a>
								            <ul aria-labelledby="dropdownCopy" class="dropdown-menu border-0 shadow">
								                <li><a href="#" class="dropdown-item copy-now" data-id="1" data-table="news"><i class="far fa-caret-square-right text-secondary mr-2"></i>Sao chép ngay</a></li>
								                <li><a href="index.php?com=news&amp;act=copy&amp;type=tin-tuc&amp;id=1" class="dropdown-item"><i class="far fa-caret-square-right text-secondary mr-2"></i>Chỉnh sửa thông tin</a></li>
								            </ul>
		                            	</div>
                                                                        <a class="text-primary mr-2" href="index.php?com=news&amp;act=edit&amp;type=tin-tuc&amp;id=1" title="Chỉnh sửa"><i class="fas fa-edit"></i></a>
                                    <a class="text-danger" id="delete-item" data-url="index.php?com=news&amp;act=delete&amp;type=tin-tuc&amp;id=1" title="Xóa"><i class="fas fa-trash-alt"></i></a>
                                </td>
                            </tr>
                                            </tbody>
                            </table>
        </div>
    </div>
        <div class="card-footer text-sm">
    	<a class="btn btn-sm bg-gradient-primary text-white" href="index.php?com=news&amp;act=add&amp;type=tin-tuc" title="Thêm mới"><i class="fas fa-plus mr-2"></i>Thêm mới</a>
        <a class="btn btn-sm bg-gradient-danger text-white" id="delete-all" data-url="index.php?com=news&amp;act=delete&amp;type=tin-tuc" title="Xóa tất cả"><i class="far fa-trash-alt mr-2"></i>Xóa tất cả</a>
    </div>
</section>
    
@endsection
@section('Them')
@endsection   