<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>AK Admin - Dashboard</title>
    <!-- Custom fonts for this template-->
    <link href="../asset/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="../asset/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="../asset/css/animate.min.css" rel="stylesheet">
    <link href="../asset/css/adminlte.css" rel="stylesheet">
    <link href="../asset/css/adminlte-style.css" rel="stylesheet">
    <link href="../asset/css/style.css" rel="stylesheet">
    <link href="../asset/css/menu-style.css" rel="stylesheet">
</head>

<body id="page-top">
    @section('sidebar')
    <!-- Page Wrapper -->
    <div id="wrapper">
        @include('menu')
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            @include('header')
            <!-- Main Content -->
            <div class="content">
                @yield('content')
                @show
            </div>
            @include('footer')
        </div>
        @yield('Them')
        @include('scripts')
        @yield('scripts')
        <!-- End of Content Wrapper -->
</body>

</html>