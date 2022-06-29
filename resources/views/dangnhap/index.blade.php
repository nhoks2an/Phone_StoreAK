<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="../asset/css/fontawesome512/all.css" rel="stylesheet">
    <link href="../asset/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="../asset/css/animate.min.css" rel="stylesheet">
    <link href="../asset/css/adminlte.css" rel="stylesheet">
    <link href="../asset/css/adminlte-style.css" rel="stylesheet">
    <link href="../asset/css/style.css" rel="stylesheet">   

    <script src="../asset/js/jquery.min.js"></script>
    <script src="../asset/js/adminlte.js"></script>
    <script src="../asset/js/ap/apps.js"></script>
    <script src="../asset/js/moment.min.js"></script>
    <!-- Js Config -->

</head>
<body class="sidebar-mini text-sm login-page">
   
        <div class="login-view-website text-sm"><a href="{{route('user')}}" target="_blank" title="Xem website"><i class="fas fa-reply mr-2"></i>Xem website</a></div>
        <form method="post" action="{{route('login')}}">
        @csrf
            <div class="login-box">
                <div class="card">
                    <div class="card-body login-card-body">
                        <p class="login-box-msg">Đăng nhập hệ thống</p>
                        <form enctype="multipart/form-data">
                            <div class="input-group mb-3">
                                <div class="input-group-append login-input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-user"></span>
                                    </div>
                                </div>
                                <input type="text" class="form-control text-sm" name="name" id="name" placeholder="Tài khoản *" autocomplete="off" value="{{old('name')}}">
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-append login-input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-lock"></span>
                                    </div>
                                </div>
                                <input type="password" class="form-control text-sm" name="password" id="password" placeholder="Mật khẩu *" autocomplete="off" >
                                <div class="input-group-append">
                                    <div class="input-group-text show-password">
                                        <span class="fas fa-eye" id="hiden" onclick="showPassword()"></span>
                                    </div>
                                </div>    
                            </div>
                         
                            <button type="submit" class="btn btn-sm bg-gradient-danger btn-block btn-login text-sm p-2">
                            <div class="sk-chase d-none">
                                    <div class="sk-chase-dot"></div>
                                    <div class="sk-chase-dot"></div>
                                    <div class="sk-chase-dot"></div>
                                    <div class="sk-chase-dot"></div>
                                    <div class="sk-chase-dot"></div>
                                    <div class="sk-chase-dot"></div>
                                </div>
                                <span>Đăng nhập</span>
                            </button>
                                 @if($errors->has('name'))
                                    <div class="alert alert-danger" style="margin-top:10px;">
                                        {{$errors->first('name')}}
                                    </div>
                                @endif
                                @if($errors->has('password'))
                                    <div class="alert alert-danger" style="margin-top:10px;">
                                        {{$errors->first('password')}}
                                    </div>
                                @endif
                            <div class="alert my-alert alert-login d-none text-center text-sm p-2 mb-0 mt-2" role="alert"></div>
                        </form>
                    </div>
                </div>
            </div>
        <div class="login-copyright text-sm">Powered by <a href="#" target="_blank" title="Thiết Kế Website An Khang">Thiết Kế Website An Khang</a></div>
    </form>
    <!-- hien password -->
    <script type="text/javascript">
        const password = document.getElementById('password');
        const hiden = document.getElementById('hiden');

        function showPassword(){
           if(password.type === 'password'){
            password.setAttribute('type','text');
            hiden.classList.add('fa-eye-slash');
           }else{
            password.setAttribute('type','password');
            hiden.classList.remove('fa-eye-slash');
           }
        }


    </script>
</body>

</html>

@section('scripts')

@endsection 