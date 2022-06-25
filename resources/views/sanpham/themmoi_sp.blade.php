@extends('layout.layout')
@section('sidebar')
@parent
<div class="btn-themmoi">
    <button class="btn btn-sm bg-gradient-primary submit-check" type="submit">
        <i class="far fa-save mr-2"></i>
        Lưu
    </button>
    <button class="btn btn-sm bg-gradient-success submit-check" type="submit">
        <i class="fas fa-redo mr-2""></i>
            Lưu tại trang
        </button>
        <button class=" btn btn-sm bg-gradient-secondary" type="reset">
            <i class="fas fa-redo mr-2""></i>
            Làm lại
        </button>

        <a href=" #" class="btn btn-sm bg-gradient-danger">
                <i class="fas fa-sign-out-alt mr-2"></i>
                Thoát
                </a>
</div>
<div class="row">
    <div class="col-xl-8">
        <div class="card card-primary card-outline text-sm">
            <div class="card-header">
                <h3 class="card-title">Nội dung Sản phẩm</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                            class="fas fa-minus"></i></button>
                </div>
            </div>
            <div class="card-body">
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
                                    <input type="text" class="form-control for-seo text-sm" name="data[namevi]"
                                        id="namevi" placeholder="Tiêu đề (vi)" value="" required="">
                                </div>
                                <div class="form-group">
                                    <label for="descvi">Mô tả (vi):</label>
                                    <textarea class="form-control for-seo text-sm " name="content" id="descvi" rows="5"
                                        placeholder="Mô tả (vi)"></textarea>
                                </div>
                                <div class="form-group-category row">
                                    <div class="form-group col-xl-6 col-sm-4">
                                        <label class="d-block" for="id_list">Camera:</label>
                                        <select id="id_list" name="data[id_list]" data-level="0" data-type="san-pham"
                                            data-table="#_product_cat" data-child="id_cat"
                                            class="form-control select2 select-category select2-hidden-accessible"
                                            data-select2-id="id_list" tabindex="-1" aria-hidden="true">
                                            <option value="0" data-select2-id="2">Chọn camera</option>
                                            <option value="4" data-select2-id="4">Tiêu đề tên vấy cưới</option>
                                            <option value="3" data-select2-id="5">áo polo</option>
                                            <option value="2" data-select2-id="6">Áo Thun</option>
                                        </select></span>
                                    </div>
                                    <div class="form-group col-xl-6 col-sm-4">
                                        <label class="d-block" for="id_list">Màn hình:</label>
                                        <select id="id_list" name="data[id_list]" data-level="0" data-type="san-pham"
                                            data-table="#_product_cat" data-child="id_cat"
                                            class="form-control select2 select-category select2-hidden-accessible"
                                            data-select2-id="id_list" tabindex="-1" aria-hidden="true">
                                            <option value="0" data-select2-id="2">Chọn màn hình</option>
                                            <option value="4" data-select2-id="4">Tiêu đề tên vấy cưới</option>
                                            <option value="3" data-select2-id="5">áo polo</option>
                                            <option value="2" data-select2-id="6">Áo Thun</option>
                                        </select></span>
                                    </div>
                                </div>
                                <div class="form-group-category row">
                                    <div class="form-group col-xl-6 col-sm-4">
                                        <label class="d-block" for="id_list">Ram:</label>
                                        <select id="id_list" name="data[id_list]" data-level="0" data-type="san-pham"
                                            data-table="#_product_cat" data-child="id_cat"
                                            class="form-control select2 select-category select2-hidden-accessible"
                                            data-select2-id="id_list" tabindex="-1" aria-hidden="true">
                                            <option value="0" data-select2-id="2">Chọn ram</option>
                                            <option value="4" data-select2-id="4">Tiêu đề tên vấy cưới</option>
                                            <option value="3" data-select2-id="5">áo polo</option>
                                            <option value="2" data-select2-id="6">Áo Thun</option>
                                        </select></span>
                                    </div>
                                    <div class="form-group col-xl-6 col-sm-4">
                                        <label class="d-block" for="id_list">Rom:</label>
                                        <select id="id_list" name="data[id_list]" data-level="0" data-type="san-pham"
                                            data-table="#_product_cat" data-child="id_cat"
                                            class="form-control select2 select-category select2-hidden-accessible"
                                            data-select2-id="id_list" tabindex="-1" aria-hidden="true">
                                            <option value="0" data-select2-id="2">Chọn rom</option>
                                            <option value="4" data-select2-id="4">Tiêu đề tên vấy cưới</option>
                                            <option value="3" data-select2-id="5">áo polo</option>
                                            <option value="2" data-select2-id="6">Áo Thun</option>
                                        </select></span>
                                    </div>
                                </div>
                                <div class="form-group-category row">
                                    <div class="form-group col-xl-6 col-sm-4">
                                        <label class="d-block" for="id_list">Hệ điều hành:</label>
                                        <select id="id_list" name="data[id_list]" data-level="0" data-type="san-pham"
                                            data-table="#_product_cat" data-child="id_cat"
                                            class="form-control select2 select-category select2-hidden-accessible"
                                            data-select2-id="id_list" tabindex="-1" aria-hidden="true">
                                            <option value="0" data-select2-id="2">Chọn hệ điều hành</option>
                                            <option value="4" data-select2-id="4">Tiêu đề tên vấy cưới</option>
                                            <option value="3" data-select2-id="5">áo polo</option>
                                            <option value="2" data-select2-id="6">Áo Thun</option>
                                        </select></span>
                                    </div>
                                    <div class="form-group col-xl-6 col-sm-4">
                                        <label class="d-block" for="id_list">Hiêu năng đặc biệt:</label>
                                        <select id="id_list" name="data[id_list]" data-level="0" data-type="san-pham"
                                            data-table="#_product_cat" data-child="id_cat"
                                            class="form-control select2 select-category select2-hidden-accessible"
                                            data-select2-id="id_list" tabindex="-1" aria-hidden="true">
                                            <option value="0" data-select2-id="2">Chọn hiệu năng đặcc biệt</option>
                                            <option value="4" data-select2-id="4">Tiêu đề tên vấy cưới</option>
                                            <option value="3" data-select2-id="5">áo polo</option>
                                            <option value="2" data-select2-id="6">Áo Thun</option>
                                        </select></span>
                                    </div>
                                </div>
                                <div class="form-group-category row">
                                    <div class="form-group col-xl-6 col-sm-4">
                                        <label class="d-block" for="id_list">Màu sắc:</label>
                                        <select id="id_list" name="data[id_list]" data-level="0" data-type="san-pham"
                                            data-table="#_product_cat" data-child="id_cat"
                                            class="form-control select2 select-category select2-hidden-accessible"
                                            data-select2-id="id_list" tabindex="-1" aria-hidden="true">
                                            <option value="0" data-select2-id="2">Chọn màu</option>
                                            <option value="4" data-select2-id="4">Tiêu đề tên vấy cưới</option>
                                            <option value="3" data-select2-id="5">áo polo</option>
                                            <option value="2" data-select2-id="6">Áo Thun</option>
                                        </select></span>
                                    </div>
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
                <h3 class="card-title">Danh mục Sản phẩm</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                            class="fas fa-minus"></i></button>
                </div>
            </div>
            <div class="card-body">
                <div class="form-group-category row">
                    <div class="form-group col-xl-6 col-sm-4">
                        <label class="d-block" for="id_list">Loại sản phẩm:</label>
                        <select id="id_list" name="data[id_list]" data-level="0" data-type="san-pham"
                            data-table="#_product_cat" data-child="id_cat"
                            class="form-control select2 select-category select2-hidden-accessible"
                            data-select2-id="id_list" tabindex="-1" aria-hidden="true">
                            <option value="0" data-select2-id="2">Chọn loại</option>
                            <option value="4" data-select2-id="4">Tiêu đề tên vấy cưới</option>
                            <option value="3" data-select2-id="5">áo polo</option>
                            <option value="2" data-select2-id="6">Áo Thun</option>
                        </select></span>
                    </div>
                    <div class="form-group col-xl-6 col-sm-4">
                        <label class="d-block" for="id_list">Hãng:</label>
                        <select id="id_list" name="data[id_list]" data-level="0" data-type="san-pham"
                            data-table="#_product_cat" data-child="id_cat"
                            class="form-control select2 select-category select2-hidden-accessible"
                            data-select2-id="id_list" tabindex="-1" aria-hidden="true">
                            <option value="0" data-select2-id="2">Chọn hãng</option>
                            <option value="4" data-select2-id="4">Tiêu đề tên vấy cưới</option>
                            <option value="3" data-select2-id="5">áo polo</option>
                            <option value="2" data-select2-id="6">Áo Thun</option>
                        </select></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="card card-primary card-outline text-sm">
            <div class="card-header">
                <h3 class="card-title">Hình ảnh 1 Sản phẩm</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                            class="fas fa-minus"></i></button>
                </div>
            </div>
            <div class="card-body">
                <div class="photoUpload-zone">
                    <div class="photoUpload-detail" id="photoUpload-preview">
                        <img class="rounded" src="" alt="">
                    </div>
                    <label class="photoUpload-file" id="photo-zone" for="file-zone">
                        <input type="file" name="file" id="file-zone">
                        <i class="fas fa-cloud-upload-alt"></i>
                        <p class="photoUpload-drop">Kéo và thả hình vào đây</p>
                        <p class="photoUpload-or">hoặc</p>
                        <p class="photoUpload-choose btn btn-sm bg-gradient-success">Chọn hình</p>
                    </label>
                    <div class="photoUpload-dimension">Width: 334 px - Height: 334 px (.jpg|.gif|.png|.jpeg|.gif)</div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="card card-primary card-outline text-sm">
    <div class="card-header">
        <h3 class="card-title">Thông tin Sản phẩm</h3>
        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
        </div>
    </div>
    <div class="card-body">
        <div class="form-group">
            <div class="form-group d-inline-block mb-2 mr-2">
                <label for="noibat-checkbox" class="d-inline-block align-middle mb-0 mr-2">Nổi bật:</label>
                <div class="custom-control custom-checkbox d-inline-block align-middle">
                    <input type="checkbox" class="custom-control-input noibat-checkbox" name="status[noibat]"
                        id="noibat-checkbox" checked="" value="noibat">
                    <label for="noibat-checkbox" class="custom-control-label"></label>
                </div>
            </div>
            <div class="form-group d-inline-block mb-2 mr-2">
                <label for="hienthi-checkbox" class="d-inline-block align-middle mb-0 mr-2">Hiển thị:</label>
                <div class="custom-control custom-checkbox d-inline-block align-middle">
                    <input type="checkbox" class="custom-control-input hienthi-checkbox" name="status[hienthi]"
                        id="hienthi-checkbox" checked="" value="hienthi">
                    <label for="hienthi-checkbox" class="custom-control-label"></label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="numb" class="d-inline-block align-middle mb-0 mr-2">Số thứ tự:</label>
            <input type="number" class="form-control form-control-mini d-inline-block align-middle text-sm" min="0"
                name="data[numb]" id="numb" placeholder="Số thứ tự" value="1">
        </div>
        <div class="row">
            <div class="form-group col-md-4">
                <label class="d-block" for="code">Mã sản phẩm:</label>
                <input type="text" class="form-control text-sm" name="data[code]" id="code" placeholder="Mã sản phẩm"
                    value="">
            </div>
            <div class="form-group col-md-4">
                <label class="d-block" for="regular_price">Giá bán:</label>
                <div class="input-group">
                    <input type="text" class="form-control format-price regular_price text-sm"
                        name="data[regular_price]" id="regular_price" placeholder="Giá bán" value="">
                    <div class="input-group-append">
                        <div class="input-group-text"><strong>VNĐ</strong></div>
                    </div>
                </div>
            </div>
            <div class="form-group col-md-4">
                <label class="d-block" for="sale_price">Giá mới:</label>
                <div class="input-group">
                    <input type="text" class="form-control format-price sale_price text-sm" name="data[sale_price]"
                        id="sale_price" placeholder="Giá mới" value="">
                    <div class="input-group-append">
                        <div class="input-group-text"><strong>VNĐ</strong></div>
                    </div>
                </div>
            </div>
            <div class="form-group col-md-4">
                <label class="d-block" for="discount">Chiết khấu:</label>
                <div class="input-group">
                    <input type="text" class="form-control discount text-sm" name="data[discount]" id="discount"
                        placeholder="Chiết khấu" value="" maxlength="3" readonly="">
                    <div class="input-group-append">
                        <div class="input-group-text"><strong>%</strong></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@section('Them')
@endsection