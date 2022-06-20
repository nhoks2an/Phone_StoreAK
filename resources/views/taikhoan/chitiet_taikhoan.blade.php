@extends('layout.layout')
@section('sidebar')
    @parent
<div class="btn-themmoi">
    <button class="btn btn-sm bg-gradient-primary submit-check" type="submit">
        <i class="far fa-save mr-2"></i>
        Khóa
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
<div class="hinhanh col-xl-4">	
    <div class="card card-primary card-outline text-sm">
        <div class="card-header">
            <h3 class="card-title">Ảnh dại diện</h3>
        </div>
    <img class="rounded" src="data:image/jpeg;base64,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" >	</div>
 </div>   	
 <div class=" col-xl-8">
    <div class="card card-primary card-outline text-sm ">
        <div class="card-header">
            <h3 class="card-title">Thông tin tài khoản</h3>
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
                                <label for="namevi">Họ và tên:</label>
                                <input type="text" class="form-control for-seo text-sm" name="data[hoten]" id="hoten" placeholder="Họ và tên" value="" required="">
                            </div>
                            <div class="form-group">
                                <label for="namevi">Địa chỉ:</label>
                                <input type="text" class="form-control for-seo text-sm" name="data[diachi]" id="diachi" placeholder="Địa chỉ" value="" required="">
                            </div>
                                <div class="form-group col-xl-6 col-sm-4">
                                    <label class="d-block" for="id_list">Phái:</label>
                                    <select id="id_list" name="data[id_list]" data-level="0" data-type="san-pham" data-table="#_product_cat" data-child="id_cat" class="form-control select2 select-category select2-hidden-accessible" data-select2-id="id_list" tabindex="-1" aria-hidden="true"><option value="0" data-select2-id="2">Chọn phái</option><option value="4" data-select2-id="4">Nam</option><option value="3" data-select2-id="5">Nữ</option><option value="2" data-select2-id="6"></option></select></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="namevi">SĐT:</label>
                                <input type="number" class="form-control for-seo text-sm" name="data[sdti]" id="sdt" placeholder="Số điện thoại" value="" required="">
                            </div>
                            <div class="form-group">
                                <label for="namevi">Email:</label>
                                <input type="email" class="form-control for-seo text-sm" name="data[email]" id="email" placeholder="Email" value="" required="">
                            </div>
                            <div class="form-group">
                                <label for="namevi">Mật khẩu:</label>
                                <input type="password" class="form-control for-seo text-sm" name="data[matkhau]" id="matkhau" placeholder="Mật khẩu" value="" required="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>           
    </div>
</div> 
</div>   
@section('Them')
@endsection
@endsection



