@extends('layout.layout')
@section('sidebar')
    @parent
<form method="post" action="{{route('hang.update',['hang'=>$hang])}}" enctype="multipart/form-data">
    @csrf  
    @method('PATCH')
    <div class="btn-themmoi">
        <button class="btn btn-sm bg-gradient-primary submit-check" type="submit">
            <i class="far fa-save mr-2"></i>
            Cập nhật
        </button>
        <button class="btn btn-sm bg-gradient-success submit-check" type="submit">
            <i class="fas fa-redo mr-2""></i>
            Lưu tại trang
        </button>
        <button class="btn btn-sm bg-gradient-secondary" type="reset">
            <i class="fas fa-redo mr-2""></i>
            Làm lại
        </button>
        <a href="#" class="btn btn-sm bg-gradient-danger">
            <i class="fas fa-sign-out-alt mr-2"></i>
            Thoát
        </a>  
    </div>

    <div class="row">
        <div class="col-xl-8">
            <div class="card card-primary card-outline text-sm ">
                <div class="card-header">
                    <h3 class="card-title">Thông tin loại hãng điện thoại</h3>
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
                                        <label for="namevi"> Tên hãng:</label>
                                        <input type="text" class="form-control for-seo text-sm" name="tenhang" value="{{$hang->tenhang}}">
                                        @if($errors->has('tenhang'))
                                            <div class="alert alert-danger" style="margin-top:10px;">
                                                {{$errors->first('tenhang')}}
                                            </div>  
                                         @endif
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
                    <h3 class="card-title">Hình ảnh logo hãng</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="photoUpload-zone">
                        <div class="photoUpload-detail" id="photoUpload-preview">
                            <img class="rounded"  src="{{$hang->hinhanh}}" alt="Alt Photo" id="hinhanh_hang">	</div>
                        <label class="photoUpload-file" id="photo-zone" for="file-zone">
                        <input type="file" name="hinhanh" id="file-zone">
                        <i class="fas fa-cloud-upload-alt"></i>
                        <p class="photoUpload-drop">Kéo và thả hình vào đây</p>
                        <p class="photoUpload-or">hoặc</p>
                        <p class="photoUpload-choose btn btn-sm bg-gradient-success">Chọn hình</p>
                        </label>
                 
                    </div>	
                </div>
            </div>
        </div>
    </div>
</form>
<script>
    /* Img Preview */
	const input = document.getElementById("file-zone");
    const image = document.getElementById("hinhanh_hang");

    input.addEventListener("change", (e) => {
        if (e.target.files.length) {
            const src = URL.createObjectURL(e.target.files[0]);
            image.src = src;
        }
	});
</script> 
@endsection






