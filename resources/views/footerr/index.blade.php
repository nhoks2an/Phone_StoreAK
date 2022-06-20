@extends('layout.layout')
@section('sidebar')
    @parent
<section class="content">
    <form class="validation-form" novalidate="" method="post" action="index.php?com=static&amp;act=save&amp;type=footer" enctype="multipart/form-data">
        <div class="card-footer text-sm sticky-top">
            <button type="submit" class="btn btn-sm bg-gradient-primary submit-check"><i class="far fa-save mr-2"></i>Lưu</button>
            <button type="reset" class="btn btn-sm bg-gradient-secondary"><i class="fas fa-redo mr-2"></i>Làm lại</button>
        </div>

                
        <div class="row">
            <div class="col-12">
                <div class="card card-primary card-outline text-sm">
                    <div class="card-header">
                        <h3 class="card-title">Nội dung Footer</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                        </div>
                    </div>
                    <div class="card-body">
                                                <div class="form-group">
                                                                                        <div class="form-group d-inline-block mb-2 mr-2">
                                    <label for="hienthi-checkbox" class="d-inline-block align-middle mb-0 mr-2">Hiển thị:</label>
                                    <div class="custom-control custom-checkbox d-inline-block align-middle">
                                        <input type="checkbox" class="custom-control-input hienthi-checkbox" name="status[hienthi]" id="hienthi-checkbox" checked="" value="hienthi">
                                        <label for="hienthi-checkbox" class="custom-control-label"></label>
                                    </div>
                                </div>
                                                    </div>
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
                                                        <input type="text" class="form-control for-seo text-sm" name="data[namevi]" id="namevi" placeholder="Tiêu đề (vi)" value="công ty thời trang" required="">
                                                    </div>
                                                                                                                                                                                                    <div class="form-group">
                                                        <label for="contentvi">Nội dung (vi):</label>
                                                        <textarea class="form-control for-seo text-sm form-control-ckeditor" name="data[contentvi]" id="contentvi" rows="5" placeholder="Nội dung (vi)" style="visibility: hidden; display: none;">&lt;p&gt;Địa chỉ: Tầng 3 số 102 Nguyễn Hoàng, Mỹ Đình 2, Hà Nội&lt;/p&gt;



                                                    </div>
                                                                                            </div>
                                                                            </div>
                                </div>
                            </div>
                                            </div>
                </div>
            </div>
            <div class="d-none">
                            </div>
        </div>
                <div class="card-footer text-sm">
            <button type="submit" class="btn btn-sm bg-gradient-primary submit-check"><i class="far fa-save mr-2"></i>Lưu</button>
            <button type="reset" class="btn btn-sm bg-gradient-secondary"><i class="fas fa-redo mr-2"></i>Làm lại</button>
        </div>
    <input type="hidden" name="hash" value="hvfHigPXVG"></form>
</section>
@section('Them')
@endsection
@endsection