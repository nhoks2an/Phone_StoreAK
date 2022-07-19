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
                            <input type="text" name="oldpass" required>
                        </div>
                        <div class="input-pro">
                            <div class="name-pro"> Mật khẩu mới:</div>
                            <input type="text" name="newpass" required>
                        </div>
                        @if($errors->has('newpass'))
                        <div class="alert alert-danger" style="margin-top:10px;">
                            {{$errors->first('newpass')}}
                        </div>
                        @endif
                        <div class="input-pro">
                            <div class="name-pro"> Xác nhận lại mật khẩu:</div>
                            <input type="text" name="newpw" required>
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
@endsection
@section('Them')
@endsection