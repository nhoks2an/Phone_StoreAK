@extends('user.index')
@section('sidebar')
@parent
<form action="{{route('user.updatepass')}}" enctype="multipart/form-data">
    <div class="box-profile">
        <div class="center-layout">
            <div class="txt-pro">Đổi mật khẩu</div>
            <div class="center-box">
                <div class="thongtin">
                    <div class="box-doimatkhau">
                        <div class="input-pro">
                            <div class="name-pro"> Mật khẩu hiện tại:</div>
                            <input type="password" name="oldpass" autocomplete="current-password" required=""
                                id="id_password">
                            <i class="far fa-eye" id="togglePassword" style="margin-left: -30px; cursor: pointer;"></i>
                        </div>
                        <div class="input-pro">
                            <div class="name-pro"> Mật khẩu mới:</div>
                            <input type="password" name="newpass" autocomplete="current-password" required=""
                                id="idpassword">
                            <i class="far fa-eye" id="togglenewPassword"
                                style="margin-left: -30px; cursor: pointer;"></i>
                        </div>
                        @if($errors->has('newpass'))
                        <div class="alert alert-danger" style="margin-top:10px;">
                            {{$errors->first('newpass')}}
                        </div>
                        @endif
                        <div class="input-pro">
                            <div class="name-pro"> Xác nhận lại mật khẩu:</div>
                            <input type="password" name="newpw" autocomplete="current-password" required="" id="idpass">
                            <i class="far fa-eye" id="togglePass" style="margin-left: -30px; cursor: pointer;"></i>
                        </div>
                        <input type="hidden" name="iduser" value="{{$datauser->id}}">
                    </div>
                </div>
                <div class="btn-pro-save">
                    <button tyle="submit">Lưu</button>
                </div>
                <div class="thongbao">
                    @if(session('fail'))
                    <span class="alert alert-danger">
                        <strong>{{session('fail')}}</strong>
                    </span>
                    @endif
                </div>
            </div>
        </div>
    </div>
    </div>
</form>
<script>
const togglePassword = document.querySelector('#togglePassword');
const password = document.querySelector('#id_password');
togglePassword.addEventListener('click', function(e) {
    // toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    // toggle the eye slash icon
    this.classList.toggle('fa-eye-slash');
});
</script>
<script>
const togglePassword1 = document.querySelector('#togglenewPassword');
const password1 = document.querySelector('#idpassword');
togglePassword1.addEventListener('click', function(e) {
    // toggle the type attribute
    const type = password1.getAttribute('type') === 'password' ? 'text' : 'password';
    password1.setAttribute('type', type);
    // toggle the eye slash icon
    this.classList.toggle('fa-eye-slash');
});
</script>
<script>
const togglePassword2 = document.querySelector('#togglePass');
const password2 = document.querySelector('#idpass');
togglePassword2.addEventListener('click', function(e) {
    // toggle the type attribute
    const type = password2.getAttribute('type') === 'password' ? 'text' : 'password';
    password2.setAttribute('type', type);
    // toggle the eye slash icon
    this.classList.toggle('fa-eye-slash');
});
</script>
@endsection
@section('Them')
@endsection