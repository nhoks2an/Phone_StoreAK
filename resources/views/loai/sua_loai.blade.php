@extends('layout.layout')
@section('sidebar')
    @parent
<form method="post" action="{{route('loaiSanPham.update',['loaiSanPham'=>$loaiSanPham])}}" enctype="multipart/form-data">
@csrf  
@method('PATCH')
<div class="btn-themmoi">
    <button class="btn btn-sm bg-gradient-primary submit-check" type="submit">
        <i class="far fa-save mr-2"></i>
        Cập nhật
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
                <h3 class="card-title">Thông tin loại sản phẩm</h3>
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
                                    <label for="namevi"> Tên lọai sản phẩm:</label>
                                    <input type="text" class="form-control for-seo text-sm" name="tenloaisp" placeholder="Loại sản phẩm" value="{{$loaiSanPham->tenloaisp}}">
                                    @if($errors->has('tenloaisp'))
                                        <div class="alert alert-danger" style="margin-top:10px;">
                                            {{$errors->first('tenloaisp')}}
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
                <h3 class="card-title">Danh mục Sản phẩm</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                </div>
            </div>
            <div class="card-body">
                <div class="form-group-category row">
                    <div class="form-group col-xl-6 col-sm-4">
                        <label class="d-block" for="id_list">Hãng:</label>
                        <select id="id_list" name="tenhang" data-level="0" data-type="san-pham" data-table="#_product_cat" data-child="id_cat" class="form-control select2 select-category select2-hidden-accessible" data-select2-id="id_list" tabindex="-1" aria-label="Default select example">
                        @foreach($lsthang as $hang)
                            <option value="{{$hang->id}}">{{$hang->tenhang}}</option>
                            @endforeach 
                        </select></span>
                    </div> 
                </div> 
            </div> 
        </div>                   
    </div>
</div>
</form>
@section('Them')
@endsection
@endsection






