@extends('user.index')
@section('sidebar')
    @parent
<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <form class="login100-form validate-form" asp-controller="home" asp-action="login">
                <span class="login100-form-title p-b-26">
                    Đăng nhập
                </span>
                <span class="login100-form-title p-b-48">
                    <i class="zmdi zmdi-font"></i>
                </span>

                <div class="wrap-input100 validate-input" data-validate="Nhập tài khoản">
                    <input class="input100" type="text" name="username">
                    
                    <span class="focus-input100" data-placeholder="Tài khoản"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Nhập mật khẩu">
                    <span class="btn-show-pass">
                        <i class="zmdi zmdi-eye"></i>
                    </span>
                    <input class="input100" type="password" name="password">
                    <span class="focus-input100" data-placeholder="Mật khẩu"></span>
                </div>

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
                        Don’t have an account?
                    </span>

                    <a class="txt2" href="{{route('dangky')}}">
                        Sign Up
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@section('Them')
@endsection   