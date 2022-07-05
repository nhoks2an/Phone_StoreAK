@extends('layout.layout')
@section('sidebar')
@parent
<section class="content">
    <form class="validation-form" novalidate="" method="post" action="{{route('slideShow.store')}}"
        enctype="multipart/form-data">
        @csrf
        <div class="card-footer text-sm sticky-top">
            <button type="submit" class="btn btn-sm bg-gradient-primary submit-check"><i
                    class="far fa-save mr-2"></i>Lưu</button>
            <button type="reset" class="btn btn-sm bg-gradient-secondary"><i class="fas fa-redo mr-2"></i>Làm
                lại</button>
            <a class="btn btn-sm bg-gradient-danger" href="index.php?com=photo&amp;act=man_photo&amp;type=slide"
                title="Thoát"><i class="fas fa-sign-out-alt mr-2"></i>Thoát</a>
        </div>
        <div class="card card-primary card-outline text-sm">
            <div class="card-header">
                <h3 class="card-title">Slideshow: </h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                            class="fas fa-minus"></i></button>
                </div>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <div class="upload-file">
                        <p>Upload hình ảnh:</p>
                        <label class="upload-file-label mb-2" for="hinhanh">
                            <div class="upload-file-image rounded mb-3">
                                <img class="rounded" src="../img/noimage.jpg" alt="Alt Photo" id="img-item"
                                    width="683px" height="250px">
                            </div>
                            <div class="custom-file my-custom-file">
                                <input type="file" class="custom-file-input" name="hinhanh" lang="vi" id="file-zone">
                                <label class="custom-file-label mb-0" data-browse="Chọn" for="hinhanh">Chọn file</label>
                            </div>
                        </label>
                        <strong class="d-block text-sm">Width: 1366px - Height:
                            500px(.jpg|.gif|.png|.jpeg|.gif)</strong>
                        @if($errors->has('hinhanh'))
                        <div class="alert alert-danger" style="margin-top:10px;">
                            {{$errors->first('hinhanh')}}
                        </div>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <label for="link0">Link:</label>
                    <input type="text" class="form-control text-sm" name="link" id="link0" placeholder="Link" value="">
                    @if($errors->has('link'))
                    <div class="alert alert-danger" style="margin-top:10px;">
                        {{$errors->first('link')}}
                    </div>
                    @endif
                </div>
                <div class="form-group">
                    <div class="form-group d-inline-block mb-2 mr-2">
                        <label for="hienthi-checkbox0" class="d-inline-block align-middle mb-0 mr-2">Hiển thị:</label>
                        <div class="custom-control custom-checkbox d-inline-block align-middle">
                            <input type="checkbox" class="custom-control-input hienthi-checkbox0" name="hienthi"
                                id="hienthi-checkbox0" value="hienthi" checked="">
                            <label for="hienthi-checkbox0" class="custom-control-label"></label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</section>
<script>
/* Img Preview */
const input = document.getElementById("file-zone");
const image = document.getElementById("img-item");

input.addEventListener("change", (e) => {
    if (e.target.files.length) {
        const src = URL.createObjectURL(e.target.files[0]);
        image.src = src;
    }
});
</script>
@section('Them')
@endsection
@endsection