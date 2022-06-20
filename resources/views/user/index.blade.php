    @include('user.layout.head')
    @section('sidebar')
    @include('user.layout.header')
    @yield('content')
    @show
    @include('user.layout.footer')
    @yield('Them')
    @include('user.layout.script')

