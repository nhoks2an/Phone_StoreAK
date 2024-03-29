@extends('user.index')
@section('sidebar')
@parent

<div class="thong-bao">
    @if(session('message'))
    <span class="alert alert-success">
        <strong>{{session('message')}}</strong>
    </span>
    @endif
</div>
<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <form class="login100-form validate-form" action="{{route('user.loginUser')}}">
                <span class="login100-form-title p-b-26">
                    ĐĂNG NHẬP
                </span>
                <span class="login100-form-title p-b-48">
                    <i class="zmdi zmdi-font"></i>
                </span>

                <div class="wrap-input100 validate-input">
                    <input class="input100" type="text" name="email" placeholder="Nhập email" value="{{old('email')}}">
                </div>
                @if($errors->has('email'))
                <div class="text-danger">{{$errors->first('email')}}</div>
                @endif
                <div class="wrap-input100 validate-input">
                    <span class="btn-show-pass">
                        <i class="zmdi zmdi-eye"></i>
                    </span>
                    <input class="input100" type="password" name="password" placeholder="Nhập mật khẩu">
                </div>
                @if($errors->has('password'))
                <div class="text-danger">{{$errors->first('password')}}</div>
                @endif
                @if(Session::has('fail'))
                <div class="alert alert-danger">{{Session::get('fail')}}</div>
                @endif
                <div class="container-login100-form-btn">
                    <div class="wrap-login100-form-btn">
                        <div class="login100-form-bgbtn"></div>
                        <button class="login100-form-btn" type="submit">
                            Đăng nhập
                        </button>
                    </div>
                </div>

                <div class="text-center p-t-115">
                    <span class="txt1">
                        Chưa có tài khoản?
                    </span>

                    <a class="txt2" href="register">
                        Đăng ký
                    </a>
                </div>

                <div class="gg" style=" text-align: center; margin-top: 5px;">
                    <a class="hvr-float-shadow" href="{{route('login_google')}}"> <img src="images/gg.png"  width="10%" alt="Đăng nhập bằng google"></a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@section('Them')
@endsection