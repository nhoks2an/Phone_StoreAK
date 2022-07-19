@extends('user.index')
@section('sidebar')
@parent
<form action="{{route('user.update',['user'=>$user])}}" enctype="multipart/form-data">
    @csrf
    @method('PATCH')
    <div class="box-profile">
        <div class="center-layout">
            <div class="txt-pro">Hồ Sơ Của Tôi</div>
            <div class="flex">
                    <div class="card-body">
                        <div class="photoUpload-zone">
                            <div class="photoUpload-detail" id="photoUpload-preview">
                                <img class="rounded" src="/storage/{{$datauser->hinhanh}}" alt="Alt Photo" id="hinhanh_taikhoan">
                            </div>
                            <label class="photoUpload-file" id="photo-zone" for="file-zone">
                                <input type="file" name="hinhanh" id="file-zone" accept="image/*">
                                <i class="fas fa-cloud-upload-alt"></i>
                                <p class="photoUpload-drop">Kéo và thả hình vào đây</p>
                                <p class="photoUpload-or">hoặc</p>
                                <p class="photoUpload-choose btn btn-sm bg-gradient-success">Chọn hình</p>
                            </label>
                            <div class="photoUpload-dimension">
                            </div>
                        </div>
                    </div>
                <div class="right-box">
                    <div class="thongtin">
                        <div class="border-tt">Thông tin cá nhân</div>
                        <div class="input-pro">
                            <div class="name-pro">Tên</div><input type="text" name="hoten" value="{{$datauser->hoten}}">
                        </div>
                        @if($errors->has('hoten'))
                                        <div class="alert alert-danger" style="margin-top:10px;">
                                            {{$errors->first('hoten')}}
                                        </div>
                                    @endif
                        <div class="input-pro">
                            <div class="name-pro">Email</div> <input type="text" name="email"
                                value="{{$datauser->email}}">
                        </div>
                        @if($errors->has('email'))
                                        <div class="alert alert-danger" style="margin-top:10px;">
                                            {{$errors->first('email')}}
                                        </div>
                                    @endif
                        <div class="input-pro">
                            <div class="name-pro">Số điện thoại</div> <input type="number" name="sodienthoai"
                                value="{{$datauser->sodienthoai}}">
                        </div>
                        @if($errors->has('sodienthoai'))
                                        <div class="alert alert-danger" style="margin-top:10px;">
                                            {{$errors->first('sodienthoai')}}
                                        </div>
                                    @endif
                        <div class="input-pro">
                            <div class="name-pro">Địa chỉ</div> <input type="text" name="diachi"
                                value="{{$datauser->diachi}}">
                        </div>
                        @if($errors->has('diachi'))
                                        <div class="alert alert-danger" style="margin-top:10px;">
                                            {{$errors->first('diachi')}}
                                        </div>
                                    @endif
                        <div class="input-pro">
                            <div class="name-pro">Giới tính</div>
                            <div class="flex-gioitinh">
                                <div class="gioitinh">
                                    <input type="radio" name="phai" value="Nam">
                                    <label for="html">Nam</label><br>
                                </div>
                                <div class="gioitinh">
                                    <input type="radio" name="phai" value="Nữ">
                                    <label for="html">Nữ</label><br>
                                </div>
                            </div>
                        </div>
                        <div class="input-pro">
                            <div class="name-pro">Ngày sinh</div><input type="date" id="birthdaytime" name="ngaysinh"
                                value="{{$datauser->ngaysinh}}">
                        </div>
                        
                        <div class="btn-pro-save"> <button tyle="submit">Lưu</button></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

<script type="">
    document.querySelector("html").classList.add('js');

    var fileInput  = document.querySelector( ".input-file" ),  
    button     = document.querySelector( ".input-file-trigger" ),
    the_return = document.querySelector(".file-return");

    button.addEventListener( "keydown", function( event ) {  
        if ( event.keyCode == 13 || event.keyCode == 32 ) {  
            fileInput.focus();  
        }  
    });
    button.addEventListener( "click", function( event ) {
     fileInput.focus();
     return false;
 });  
    fileInput.addEventListener( "change", function( event ) {  
        the_return.innerHTML = this.value;  
    });  
    imgInp.onchange = evt => {
  const [file] = imgInp.files
  if (file) {
    blah.src = URL.createObjectURL(file)
  }
}
</script>
<script>
/* Img Preview */
const input = document.getElementById("file-zone");
const image = document.getElementById("hinhanh_taikhoan");

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