@extends('layout.layout')
@section('sidebar')
@parent
<form method="post" action="{{route('sanPham.update',['sanPham'=>$sanPham])}}" enctype="multipart/form-data">
    @csrf
    @method('PATCH')
    <div class="btn-themmoi">
        <button class="btn btn-sm bg-gradient-primary submit-check" type="submit">
            <i class="far fa-save mr-2"></i>
            Cập nhật
        </button>
        <button class="btn btn-sm bg-gradient-secondary" type="reset">
            <i class="fas fa-redo mr-2"></i>
            Làm lại
        </button>
        <a href=" #" class="btn btn-sm bg-gradient-danger"><i class="fas fa-sign-out-alt mr-2"></i>Thoát</a>
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
                                        <input type="text" class="form-control for-seo text-sm" name="tensanpham"
                                            id="namevi" placeholder="Tiêu đề (vi)" value="{{$sanPham->tensanpham}}">
                                        @if($errors->has('tensanpham'))
                                        <div class="alert alert-danger" style="margin-top:10px;">
                                            {{$errors->first('tensanpham')}}
                                        </div>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="descvi">Mô tả (vi):</label>
                                        <textarea class="form-control for-seo text-sm " name="mota" id="descvi" rows="5"
                                            placeholder="Mô tả (vi)">{{$sanPham->mota}}</textarea>
                                        @if($errors->has('mota'))
                                        <div class="alert alert-danger" style="margin-top:10px;">
                                            {{$errors->first('mota')}}
                                        </div>
                                        @endif
                                    </div>
                                    <div class="form-group-category row">
                                        <div class="form-group col-xl-6 col-sm-4">
                                            <label class="d-block" for="id_list">Camera:</label>
                                            <select id="id_list" name="id_camera" data-level="0" data-type="san-pham"
                                                data-table="#_product_cat" data-child="id_cat"
                                                class="form-control select2 select-category select2-hidden-accessible"
                                                data-select2-id="id_list" tabindex="-1" aria-hidden="true">
                                                <option>Chọn camera</option>
                                                @foreach($lstcamera as $camera)
                                                <option value="{{$camera->id}} " @if($sanPham->id_camera == $camera->id)
                                                    selected @endif >{{$camera->tencamera}}</option>
                                                @endforeach
                                            </select></span>
                                        </div>
                                        <div class="form-group col-xl-6 col-sm-4">
                                            <label class="d-block" for="id_list">Màn hình:</label>
                                            <select id="id_list" name="id_manhinh" data-level="0" data-type="san-pham"
                                                data-table="#_product_cat" data-child="id_cat"
                                                class="form-control select2 select-category select2-hidden-accessible"
                                                data-select2-id="id_list" tabindex="-1" aria-hidden="true">
                                                <option value="0" data-select2-id="2">Chọn màn hình</option>
                                                @foreach($lstmanhinh as $manhinh)
                                                <option value="{{$manhinh->id}}" @if($sanPham->id_manhinh ==
                                                    $manhinh->id) selected @endif >{{$manhinh->thongso}}</option>
                                                @endforeach
                                            </select></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group-category row">
                                    <div class="form-group col-xl-6 col-sm-4">
                                        <label class="d-block" for="id_list">Hệ điều hành:</label>
                                        <select id="id_list" name="id_hedieuhanh" data-level="0"
                                            class="form-control select2 select-category select2-hidden-accessible"
                                            data-select2-id="id_list" tabindex="-1" aria-hidden="true">
                                            <option value="0" data-select2-id="2">Chọn hệ điều hành</option>
                                            @foreach($lsthedieuhanh as $hedieuhanh)
                                            <option value="{{$hedieuhanh->id}}" @if($sanPham->id_hedieuhanh ==
                                                $hedieuhanh->id) selected @endif >{{$hedieuhanh->tenhedieuhanh}}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group col-xl-6 col-sm-4">
                                        <label class="d-block" for="id_list">Tính năng đặc biệt:</label>
                                        <select id="id_list" name="id_tinhnangdb" data-level="0" data-type="san-pham"
                                            data-table="#_product_cat" data-child="id_cat"
                                            class="form-control select2 select-category select2-hidden-accessible"
                                            data-select2-id="id_list" tabindex="-1" aria-hidden="true">
                                            <option value="0" data-select2-id="2">Tính năng năng đặc biệt</option>
                                            @foreach($lsttinhnangdb as $tinhnangdb)
                                            <option value="{{$tinhnangdb->id}}" @if($sanPham->id_tinhnangdb ==
                                                $tinhnangdb->id) selected @endif >{{$tinhnangdb->tentinhnang}}</option>
                                            @endforeach
                                        </select></span>
                                    </div>
                                </div>
                                <div class="form-group-category row">
                                    <div class="form-group col-xl-6 col-sm-4">
                                        <label class="d-block" for="id_list">Thiết kế:</label>
                                        <select id="id_list" name="id_thietke" data-level="0" data-type="san-pham"
                                            data-table="#_product_cat" data-child="id_cat"
                                            class="form-control select2 select-category select2-hidden-accessible"
                                            data-select2-id="id_list" tabindex="-1" aria-hidden="true">
                                            <option value="0" data-select2-id="2">Chọn thiết kế</option>
                                            @foreach($lstthietke as $thietke)
                                            <option value="{{$thietke->id}}" @if($sanPham->id_thietke == $thietke->id)
                                                selected @endif >{{$thietke->ten}}</option>
                                            @endforeach
                                        </select></span>
                                    </div>
                                    <div class="form-group col-xl-6 col-sm-4">
                                        <label class="d-block" for="id_list">Hiệu năng & Pin:</label>
                                        <select id="id_list" name="id_hieunangpin" data-level="0" data-type="san-pham"
                                            data-table="#_product_cat" data-child="id_cat"
                                            class="form-control select2 select-category select2-hidden-accessible"
                                            data-select2-id="id_list" tabindex="-1" aria-hidden="true">
                                            <option value="0" data-select2-id="2">Chọn hiệu năng & pin</option>
                                            @foreach($lsthieunangpin as $hieunangpin)
                                            <option value="{{$hieunangpin->id}}" @if($sanPham->id_hieunangpin ==
                                                $hieunangpin->id) selected @endif >{{$hieunangpin->tenhieunang}}
                                            </option>
                                            @endforeach
                                        </select></span>
                                    </div>
                                    <div class="form-group col-xl-6 col-sm-4">

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
                            <select id="id_list" name="id_loai" data-level="0" data-type="san-pham"
                                data-table="#_product_cat" data-child="id_cat"
                                class="form-control select2 select-category select2-hidden-accessible"
                                data-select2-id="id_list" tabindex="-1" aria-hidden="true">
                                <option value="0" data-select2-id="2">Chọn loại</option>
                                @foreach($lstloai as $loai)
                                <option value="{{$loai->id}}" @if($sanPham->id_loaisp == $loai->id) selected @endif
                                    >{{$loai->tenloaisp}}</option>
                                @endforeach
                            </select></span>
                        </div>

                    </div>
                </div>
            </div>
            <div class="card card-primary card-outline text-sm">
                <div class="card-header">
                    <h3 class="card-title">Hình ảnh sản phẩm</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                class="fas fa-minus"></i></button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="photoUpload-zone">
                        <div class="photoUpload-detail" id="photoUpload-preview">
                            <img class="rounded" src="/storage/{{$sanPham->hinhanh}}" alt="Alt Photo" id="hinhanh">
                        </div>
                        <label class="photoUpload-file" id="photo-zone" for="file-zone">
                            <input type="file" name="hinhanh" id="file-zone">
                            <i class="fas fa-cloud-upload-alt"></i>
                            <p class="photoUpload-drop">Kéo và thả hình vào đây</p>
                            <p class="photoUpload-or">hoặc</p>
                            <p class="photoUpload-choose btn btn-sm bg-gradient-success">Chọn hình</p>
                        </label>
                    </div>
                    @if($errors->has('hinhanh'))
                    <div class="alert alert-danger" style="margin-top:10px;">
                        {{$errors->first('hinhanh')}}
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <div class="card card-primary card-outline text-sm">
        <div class="card-header">
            <h3 class="card-title">Thông tin Sản phẩm</h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                        class="fas fa-minus"></i></button>
            </div>
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="form-group d-inline-block mb-2 mr-2">
                    <label for="noibat-checkbox" class="d-inline-block align-middle mb-0 mr-2">Nổi bật:</label>
                    <div class="custom-control custom-checkbox d-inline-block align-middle">
                        @if($sanPham->noibat)
                        <input type="checkbox" class="custom-control-input noibat-checkbox" name="noibat"
                            id="noibat-checkbox" checked="" value="">
                        @else
                        <input type="checkbox" class="custom-control-input noibat-checkbox" name="noibat"
                            id="noibat-checkbox" value="">
                        @endif
                        <label for="noibat-checkbox" class="custom-control-label"></label>
                    </div>
                </div>
                <div class="form-group d-inline-block mb-2 mr-2">
                    <label for="hienthi-checkbox" class="d-inline-block align-middle mb-0 mr-2">Hiển thị:</label>
                    <div class="custom-control custom-checkbox d-inline-block align-middle">
                        @if($sanPham->hienthi)
                        <input type="checkbox" class="custom-control-input hienthi-checkbox" name="hienthi"
                            id="hienthi-checkbox" checked="" value="">
                        @else
                        <input type="checkbox" class="custom-control-input hienthi-checkbox" name="hienthi"
                            id="hienthi-checkbox" value="">
                        @endif
                        <label for="hienthi-checkbox" class="custom-control-label"></label>
                    </div>
                </div>
            </div>
            <div class="card-body">
            <div  class="form-group-category row">
                <div class="form-group col-md-6">
                    <label class="d-block" for="regular_price">Giá min:</label>
                    <div class="input-group">
                        <input type="text" class="form-control format-price regular_price text-sm" name="giamin" id="regular_price" placeholder="Giá min" value="{{$sanPham->giamin}}">
                        <div class="input-group-append">
                            <div class="input-group-text"><strong> VNĐ</strong></div>
                        </div>
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <label class="d-block" for="sale_price">Giá max:</label>
                    <div class="input-group">
                        <input type="text" class="form-control format-price sale_price text-sm" name="giamax" id="sale_price" placeholder="Giá max" value="{{$sanPham->giamax}}">
                        <div class="input-group-append">
                            <div class="input-group-text"><strong> VNĐ</strong></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
</form>

<script>
/* Img Preview */
const input = document.getElementById("file-zone");
const image = document.getElementById("hinhanh");

input.addEventListener("change", (e) => {
    if (e.target.files.length) {
        const src = URL.createObjectURL(e.target.files[0]);
        image.src = src;
    }
});
</script>
@endsection
@section('Them')
@endsection