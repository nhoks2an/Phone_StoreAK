@extends('layout.layout')
@section('sidebar')
@parent
<form method="post" action="{{route('gioithieu.update',['gioithieu'=>$gioiThieu])}}" enctype="multipart/form-data">
    @csrf
    @method('PATCH')
    <div class="card-footer text-sm sticky-top">
        <button type="submit" class="btn btn-sm bg-gradient-primary submit-check"><i
                class="far fa-save mr-2"></i>Lưu</button>
        <button type="submit" class="btn btn-sm bg-gradient-success submit-check" name="save-here"><i
                class="far fa-save mr-2"></i>Lưu tại trang</button>
        <button type="reset" class="btn btn-sm bg-gradient-secondary"><i class="fas fa-redo mr-2"></i>Làm
            lại</button>
        <a class="btn btn-sm bg-gradient-danger" href="index.php?com=news&amp;act=man&amp;type=tin-tuc" title="Thoát"><i
                class="fas fa-sign-out-alt mr-2"></i>Thoát</a>
    </div>
    <div class="row">
        <div class="col-xl-8">
            <div class="card card-primary card-outline text-sm">
                <div class="card-header">
                    <h3 class="card-title">Nội dung Giới thiệu</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                class="fas fa-minus"></i></button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="form-group">
                    </div>
                    <div class="form-group">
                        <div class="form-group d-inline-block mb-2 mr-2">
                            <label for="hienthi-checkbox" class="d-inline-block align-middle mb-0 mr-2">Hiển
                                thị:</label>
                            <div class="custom-control custom-checkbox d-inline-block align-middle">
                                <input type="checkbox" class="custom-control-input hienthi-checkbox" name="trangthai"
                                    id="hienthi-checkbox" checked="" value="hienthi">
                                <label for="hienthi-checkbox" class="custom-control-label"></label>
                            </div>
                        </div>
                    </div>
                    <div class="card card-primary card-outline card-outline-tabs">
                        <div class="card-header p-0 border-bottom-0">
                            <ul class="nav nav-tabs" id="custom-tabs-three-tab-lang" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="tabs-lang" data-toggle="pill" href="#tabs-lang-vi"
                                        role="tab" aria-controls="tabs-lang-vi" aria-selected="true">Tiếng Việt</a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body card-article">
                            <div class="tab-content" id="custom-tabs-three-tabContent-lang">
                                <div class="tab-pane fade show active" id="tabs-lang-vi" role="tabpanel"
                                    aria-labelledby="tabs-lang">
                                    <div class="form-group">
                                        <label for="namevi">Tiêu đề (vi):</label>
                                        <input type="text" class="form-control for-seo text-sm" name="tieude"
                                            id="namevi" placeholder="Tiêu đề (vi)" value="{{$gioiThieu->tieude}}"
                                            required="">
                                    </div>

                                    <div class="form-group">
                                        <label for="contentvi">Nội dung (vi):</label>
                                        <textarea class="form-control for-seo text-sm " name="content" id="descvi"
                                            rows="5" placeholder="Nội dung">{{$gioiThieu->noidung}}</textarea>
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
                    <h3 class="card-title">Hình ảnh Giới thiệu</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                class="fas fa-minus"></i></button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="photoUpload-zone">
                        <div class="photoUpload-detail" id="photoUpload-preview"></div>
                        <label class="photoUpload-file" id="photo-zone" for="file-zone">
                            <input type="file" name="file" id="file-zone">
                            <i class="fas fa-cloud-upload-alt"></i>
                            <p class="photoUpload-drop">Kéo và thả hình vào đây</p>
                            <p class="photoUpload-or">hoặc</p>
                            <p class="photoUpload-choose btn btn-sm bg-gradient-success">Chọn hình</p>
                        </label>
                        <div class="photoUpload-dimension">Width: 490 px - Height: 344 px
                            (.jpg|.gif|.png|.jpeg|.gif)</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
@section('Them')
@endsection
@endsection