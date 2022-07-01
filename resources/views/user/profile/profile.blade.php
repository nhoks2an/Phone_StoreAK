@extends('user.index')
@section('sidebar')
@parent
<form method="post" action="{{route('taikhoan.update',['taikhoan'=>$datauser])}}" enctype="multipart/form-data">
    @csrf
    @method('PATCH')
    <div class="box-profile">
        <div class="center-layout">
            <div class="txt-pro">Hồ Sơ Của Tôi</div>
            <div class="flex">
                <div class="left-box">
                    <div class="img-pro">
                        <img src="../images/noimg.png" alt="Alt Photo" id="hinhanh_taikhoan">
                    </div>
                    <div class="btn-pro">
                        <div class="center-pro">
                            <form action="#" enctype="multipart/form-data">
                                <div class="input-file-container">
                                    <input class="input-file" id="my-file" type="file" name="hinhanh" id="file-zone">
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
                        <div class="input-pro">
                            <div class="name-pro">Tên</div><input type="text" name="hoten" value="{{$datauser->hoten}}">
                        </div>
                        <div class="input-pro">
                            <div class="name-pro">Email</div> <input type="text" name="email"
                                value="{{$datauser->email}}">
                        </div>
                        <div class="input-pro">
                            <div class="name-pro">Số điện thoại</div> <input type="number" name="sodienthoai"
                                value="{{$datauser->sodienthoai}}">
                        </div>
                        <div class="input-pro">
                            <div class="name-pro">Địa chỉ</div> <input type="text" name="diachi"
                                value="{{$datauser->diachi}}">
                        </div>
                        <div class="input-pro">
                            <div class="name-pro">Giới tính</div>
                            <div class="flex-gioitinh">
                                <div class="gioitinh">
                                    <input type="radio" name="phai" value="Nam">
                                    <label for="html">Nam</label><br>
                                </div>
                            </div>
                            <div class="right-box">
                                <div class="thongtin">
                                    <div class="border-tt">Thông tin cá nhân</div>
                                    <div class="input-pro">
                                        <div class="name-pro">Tên</div> <input type="" name="hoten"
                                            value="{{$datauser->hoten}}">
                                    </div>
                                    <div class="input-pro">
                                        <div class="name-pro">Email</div> <input type="" name="email"
                                            value="{{$datauser->email}}">
                                    </div>
                                    <div class="input-pro">
                                        <div class="name-pro">Số điện thoại</div> <input type="sodienthoai"
                                            name="sodienthoai" value="{{$datauser->sodienthoai}}">
                                    </div>
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
                                        <div class="name-pro">Ngày sinh</div><input type="date" id="birthdaytime"
                                            name="birthdaytime">
                                    </div>
                                    <div class="btn-pro-save"> <button type="submit">Lưu</button></div>
                                    <div>
                                        @if($errors->has('email'))
                                        <div class="alert alert-danger" style="margin-top:10px;">
                                            {{$errors->first('email')}}
                                        </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="input-pro">
                            <div class="name-pro">Ngày sinh</div><input type="date" id="birthdaytime" name="ngaysinh"
                                value={{$datauser->ngaysinh}}>
                        </div>
                        <div class="btn-pro-save"> <button tyle="submit">Lưu</button></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </from>
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
    $('#ful_hinhanh').change(function () {
            $('#HinhAnh').val('abc.jpg')
            previewFile(this, '#hinh')
        })
        function previewFile(input, imgID) {
            var file = input.files[0];

            if (file) {
                var reader = new FileReader();

                reader.onload = function () {
                    $(imgID).attr("src", reader.result);
                }

                reader.readAsDataURL(file);
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