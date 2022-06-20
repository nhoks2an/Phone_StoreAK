@extends('user.index')
@section('sidebar')
    @parent
<div class="register">
    <div class="box-dangki">
        <form asp-action="Register" enctype="multipart/form-data">
            <div asp-validation-summary="ModelOnly" class="text-danger"></div>
            <div class="form-group wrap-input100 validate-input" data-validate="Valid email is: a@b.c">
                <input asp-for="Email" class="input100" type="text" name="Email">
                <span asp-validation-for="Email" class="focus-input100" data-placeholder="Email"></span>
            </div>
            <div class="form-group wrap-input100 validate-input" data-validate="Enter password">
                <input asp-for="Password" class="input100 " name="password">
                <span asp-validation-for="Password" class="focus-input100" data-placeholder="Mật khẩu"></span>
            </div>
            <div class="wrap-input100 validate-input form-group">
                <input asp-for="SDT" class="input100 ">
                <span asp-validation-for="SDT" class="focus-input100" data-placeholder="Số điện thoại"></span>
            </div>
            <div class="wrap-input100 validate-input form-group">
                <input asp-for="HoTen" class="input100 ">
                <span asp-validation-for="HoTen" class="focus-input100" data-placeholder="Họ tên"></span>
            </div>
            <div class="wrap-input100 validate-input form-group">
                <input asp-for="DiaChi" class="input100 ">
                <span asp-validation-for="DiaChi" class="focus-input100" data-placeholder="Địa chỉ"></span>
            </div>
            <div class="form-group">
                <div class="container-login100-form-btn">
                    <div class="wrap-login100-form-btn">
                        <div class="login100-form-bgbtn"></div>
                        <button class="login100-form-btn">
                            Sign Up
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