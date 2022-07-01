@extends('user.index')
@section('sidebar')
@parent
<div class="box-profile">
    <div class="center-layout">
     <div class="txt-pro">Hồ Sơ Của Tôi</div>
     <div class="flex">
        <div class="left-box">
            <div class="img-pro">
                <img src="../images/noimg.png">
            </div>
            <div class="btn-pro">
                <div class="center-pro">
                    <form action="#" enctype="multipart/form-data">
                      <div class="input-file-container">  
                        <input class="input-file" id="my-file" type="file">
                        <label tabindex="0" for="my-file" class="input-file-trigger">Chọn Ảnh</label>
                    </div>
                    <p class="file-return"></p>
                </form>
            </div>
        </div>
    </div>
    <div class="right-box">
        <div class="thongtin">
            <div class="border-tt">Thông tin cá nhân</div>
            <div class="input-pro"><div class="name-pro">Tên</div> <input type="" name="" value="{{$datauser->hoten}}"></div>
            <div class="input-pro"> <div class="name-pro">Email</div> <input type="" name="" value="{{$datauser->email}}"></div>
            <div class="input-pro"> <div class="name-pro">Số điện thoại</div> <input type="" name="" value="{{$datauser->sodienthoai}}"></div>
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
            <div class="input-pro"> <div class="name-pro">Ngày sinh</div><input type="date" id="birthdaytime" name="birthdaytime"></div>
            <div class="btn-pro-save"> <button>Lưu</button></div>
        </div>
    </div>
</div>
</div>
</div>
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
</script>
@endsection
@section('Them')
@endsection