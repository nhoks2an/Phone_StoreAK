@extends('user.index')
@section('sidebar')
@parent
<div class="register">
    <div class="box-dangki">
        <form action="{{route('user.store')}}" enctype="multipart/form-data">
            @csrf
            <span class="login100-form-title p-b-26">
                ĐĂNG KÝ
            </span>
            <div class="form-group wrap-input100 validate-input">
                <input asp-for="Email" class="input100" type="text" name="email" placeholder="Nhập email" value="{{old('email')}}">
            </div>
            @if($errors->has('email'))
            <div class="text-danger">{{$errors->first('email')}}</div>
            @endif
            <div class="form-group wrap-input100 validate-input">
                <input asp-for="Password" type="password" class="input100 " name="matkhau" placeholder="Nhập mật khẩu" >
              
            </div>
            @if($errors->has('matkhau'))
                <div class="text-danger">{{$errors->first('matkhau')}}</div>
                @endif
            <div class="wrap-input100 validate-input form-group">
                <input name="sodienthoai" class="input100" type="number" placeholder="Nhập số điện thoại" value="{{old('sodienthoai')}}">
            </div>
                 @if($errors->has('sodienthoai'))
                <div class="text-danger">{{$errors->first('sodienthoai')}}</div>
                @endif
            <div class="wrap-input100 validate-input form-group">
                <input name="hoten" class="input100" placeholder="Nhập họ tên" value="{{old('hoten')}}">
            </div>
            @if($errors->has('hoten'))
                <div class="text-danger">{{$errors->first('hoten')}}</div>
                @endif
            <div class="wrap-input100 validate-input form-group">
                <input name="diachi" class="input100 " placeholder="Nhập địa chỉ" value="{{old('diachi')}}">
              
            </div>
            @if($errors->has('diachi'))
                <div class="text-danger">{{$errors->first('diachi')}}</div>
                @endif
            <div>
                @if(session('message'))
                <div class="text-danger">
                    <strong>{{session('message')}}</strong>
                </div>
                @endif
            </div>
          
            <div class="form-group">
                <div class="container-login100-form-btn">
                    <div class="wrap-login100-form-btn">
                        <div class="login100-form-bgbtn"></div>
                        <button class="login100-form-btn">
                            ĐĂNG KÝ
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
@section('Them')
@endsection