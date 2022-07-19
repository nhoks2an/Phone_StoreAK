@extends('layout.layout')
@section('sidebar')
    @parent
<form method="post" action="{{route('taikhoan.update',['taikhoan'=>$taikhoan])}}" enctype="multipart/form-data">
@csrf
@method('PATCH')
<div class="btn-themmoi">
    <button class="btn btn-sm bg-gradient-primary submit-check" type="submit">
        <i class="far fa-save mr-2"></i>
        Khóa tài khoản
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
    <img class="rounded" src="{{$taikhoan->hinhanh}}" >	</div>
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
                                <input type="text" class="form-control for-seo text-sm" name="hoten" id="hoten" placeholder="Họ và tên" value="{{$taikhoan->hoten}}" disabled >
                            </div>
                            <div class="form-group">
                                <label for="namevi">Địa chỉ:</label>
                                <input type="text" class="form-control for-seo text-sm" name="diachi" id="diachi" placeholder="Địa chỉ" value="{{$taikhoan->diachi}}" disabled>
                            </div>
                               <div class="row">
                                <div class="form-group col-xl-6 ">
                                        <label class="d-block" for="id_list">Phái:</label>
                                        <input type="text" class="form-control for-seo text-sm" name="email" id="email" placeholder="Phái" value="{{$taikhoan->phai}}" disabled>
                                    </div>
                                    <div class="form-group col-xl-6">
                                        <label for="namevi">SĐT:</label>
                                        <input type="number" class="form-control for-seo text-sm" name="sodienthoai" id="sdt" placeholder="Số điện thoại" value="{{$taikhoan->sodienthoai}}" disabled>
                                    </div>
                               </div>
                            </div>
                         
                            <div class="form-group">
                                <label for="namevi">Email:</label>
                                <input type="email" class="form-control for-seo text-sm" name="email" id="email" placeholder="Email" value="{{$taikhoan->email}}" disabled>
                            </div>
                            <div class="form-group">
                                <label for="namevi">Mật khẩu:</label>
                                <input type="password" class="form-control for-seo text-sm" name="matkhau" id="matkhau" placeholder="Mật khẩu" value="{{$taikhoan->password}}" disabled>
                            </div>
                        </div>
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



