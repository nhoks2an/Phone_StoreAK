@extends('layout.layout')
@section('sidebar')
    @parent
<section class="content">
    <form class="validation-form" novalidate="" method="post" action="index.php?com=news&amp;act=save&amp;type=tin-tuc" enctype="multipart/form-data">
        <div class="card-footer text-sm sticky-top">
            <button type="submit" class="btn btn-sm bg-gradient-primary submit-check"><i class="far fa-save mr-2"></i>Lưu</button>
            <button type="submit" class="btn btn-sm bg-gradient-success submit-check" name="save-here"><i class="far fa-save mr-2"></i>Lưu tại trang</button>
            <button type="reset" class="btn btn-sm bg-gradient-secondary"><i class="fas fa-redo mr-2"></i>Làm lại</button>
            <a class="btn btn-sm bg-gradient-danger" href="index.php?com=news&amp;act=man&amp;type=tin-tuc" title="Thoát"><i class="fas fa-sign-out-alt mr-2"></i>Thoát</a>
        </div>       
<div class="row">
    <div class="col-xl-8">
        <div class="card card-primary card-outline text-sm">
            <div class="card-header">
                <h3 class="card-title">Đường dẫn</h3>
                <span class="pl-2 text-danger">(Vui lòng không nhập trùng tiêu đề)</span>
            </div>
            <div class="card-body card-slug">
                <input type="hidden" class="slug-id" value="">
                <input type="hidden" class="slug-copy" value="0">
                <div class="card card-primary card-outline card-outline-tabs">
                    <div class="card-header p-0 border-bottom-0">
                        <ul class="nav nav-tabs" id="custom-tabs-three-tab-lang" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="tabs-lang" data-toggle="pill" href="#tabs-sluglang-vi" role="tab" aria-controls="tabs-sluglang-vi" aria-selected="true">Tiếng Việt</a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content" id="custom-tabs-three-tabContent-lang">
                            <div class="tab-pane fade show active" id="tabs-sluglang-vi" role="tabpanel" aria-labelledby="tabs-lang">
                                <div class="form-gourp mb-0">
                                    <label class="d-block">Đường dẫn mẫu (vi):<span class="pl-2 font-weight-normal" id="slugurlpreviewvi">http://localhost/VuVanQuan_0480522W/<strong class="text-info"></strong></span></label>
                                    <input type="text" class="form-control slug-input no-validate text-sm" name="slugvi" id="slugvi" placeholder="Đường dẫn (vi)" value="" required="">
                                    <input type="hidden" id="slug-defaultvi" value="">
                                    <p class="alert-slugvi text-danger d-none mt-2 mb-0" id="alert-slug-dangervi">
                                        <i class="fas fa-exclamation-triangle mr-1"></i>
                                        <span>Đường dẫn đã tồn tại. Đường dẫn truy cập mục này có thể bị trùng lặp.</span>
                                    </p>
                                    <p class="alert-slugvi text-success d-none mt-2 mb-0" id="alert-slug-successvi">
                                        <i class="fas fa-check-circle mr-1"></i>
                                        <span>Đường dẫn hợp lệ.</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</div>          
        <div class="card card-primary card-outline text-sm">
            <div class="card-header">
                <h3 class="card-title">Nội dung Tin tức</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                </div>
            </div>
            <div class="card-body">
                <div class="card card-primary card-outline card-outline-tabs">
                    <div class="card-header p-0 border-bottom-0">
                        <ul class="nav nav-tabs" id="custom-tabs-three-tab-lang" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="tabs-lang" data-toggle="pill" href="#tabs-lang-vi" role="tab" aria-controls="tabs-lang-vi" aria-selected="true">Tiếng Việt</a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body card-article">
                        <div class="tab-content" id="custom-tabs-three-tabContent-lang">
                            <div class="tab-pane fade show active" id="tabs-lang-vi" role="tabpanel" aria-labelledby="tabs-lang">
                                <div class="form-group">
                                    <label for="namevi">Tiêu đề (vi):</label>
                                    <input type="text" class="form-control for-seo text-sm" name="data[namevi]" id="namevi" placeholder="Tiêu đề (vi)" value="" required="">
                                </div>
                                <div class="form-group">
                                    <label for="descvi">Mô tả (vi):</label>
                                    <textarea class="form-control for-seo text-sm " name="data[descvi]" id="descvi" rows="5" placeholder="Mô tả (vi)"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="col-xl-4">           
                <div class="card card-primary card-outline text-sm">
                    <div class="card-header">
                        <h3 class="card-title">Hình ảnh Tin tức</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="photoUpload-zone">
                            <div class="photoUpload-detail" id="photoUpload-preview">
                                <img class="rounded" onerror="this.src='http://localhost/VuVanQuan_0480522W/thumbs/250x250x1/assets/images/noimage.png';" src="http://localhost/VuVanQuan_0480522W/assets/images/noimage.png" alt="Alt Photo">	</div>
                                    <label class="photoUpload-file" id="photo-zone" for="file-zone">
                                        <input type="file" name="file" id="file-zone">
                                        <i class="fas fa-cloud-upload-alt"></i>
                                        <p class="photoUpload-drop">Kéo và thả hình vào đây</p>
                                        <p class="photoUpload-or">hoặc</p>
                                        <p class="photoUpload-choose btn btn-sm bg-gradient-success">Chọn hình</p>
                                    </label>
                                    <div class="photoUpload-dimension">Width: 280 px - Height: 200 px (.jpg|.gif|.png|.jpeg|.gif)</div>
                            </div>                        
                        </div>
                    </div>
                </div>
        </div>
        <div class="card card-primary card-outline text-sm">
            <div class="card-header">
                <h3 class="card-title">Thông tin Tin tức</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                </div>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <div class="form-group d-inline-block mb-2 mr-2">
                        <label for="noibat-checkbox" class="d-inline-block align-middle mb-0 mr-2">Nổi bật:</label>
                        <div class="custom-control custom-checkbox d-inline-block align-middle">
                            <input type="checkbox" class="custom-control-input noibat-checkbox" name="status[noibat]" id="noibat-checkbox" checked="" value="noibat">
                            <label for="noibat-checkbox" class="custom-control-label"></label>
                        </div>
                    </div>
                    <div class="form-group d-inline-block mb-2 mr-2">
                        <label for="hienthi-checkbox" class="d-inline-block align-middle mb-0 mr-2">Hiển thị:</label>
                        <div class="custom-control custom-checkbox d-inline-block align-middle">
                            <input type="checkbox" class="custom-control-input hienthi-checkbox" name="status[hienthi]" id="hienthi-checkbox" checked="" value="hienthi">
                            <label for="hienthi-checkbox" class="custom-control-label"></label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="numb" class="d-inline-block align-middle mb-0 mr-2">Số thứ tự:</label>
                        <input type="number" class="form-control form-control-mini d-inline-block align-middle text-sm" min="0" name="data[numb]" id="numb" placeholder="Số thứ tự" value="1">
                    </div>
                </div>
            </div>
        </div>
         <div class="card-footer text-sm">
            <button type="submit" class="btn btn-sm bg-gradient-primary submit-check"><i class="far fa-save mr-2"></i>Lưu</button>
            <button type="submit" class="btn btn-sm bg-gradient-success submit-check" name="save-here"><i class="far fa-save mr-2"></i>Lưu tại trang</button>
            <button type="reset" class="btn btn-sm bg-gradient-secondary"><i class="fas fa-redo mr-2"></i>Làm lại</button>
            <a class="btn btn-sm bg-gradient-danger" href="index.php?com=news&amp;act=man&amp;type=tin-tuc" title="Thoát"><i class="fas fa-sign-out-alt mr-2"></i>Thoát</a>
            <input type="hidden" name="id" value="">
        </div>
        <input type="hidden" name="hash" value="dd30IA6mWW"></form>
</section>
    
@endsection
@section('Them')
@endsection   