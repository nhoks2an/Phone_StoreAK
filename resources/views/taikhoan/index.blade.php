@extends('layout.layout')
@section('sidebar')
    @parent
<div class="taikhoan">
    <div class="btn-themmoi">
      
        <a class="btn btn-sm bg-gradient-secondary" id="delete-all" href="{{route('taikhoan.index')}}"
        title=""><i class="fas fa-redo mr-2"></i>Quay lại</a>
        <!-- Topbar Search -->
        <div class="form-inline form-search d-inline-block align-middle ml-3">
            <form action="" >
                <div class="input-group input-group-sm" >
                    <input class="form-control form-control-navbar text-sm" name="key"
                        placeholder="Nhập địa chỉ email" aria-label="Tìm kiếm">
                    <div class="input-group-append bg-primary rounded-right">
                        <button class="btn btn-navbar text-white" type="submit"
                            onclick="">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </form>     
        </div>
    </div>
    <div class="row">
    </div>
   <div class="card card-primary card-outline text-sm mb-0">
    <div class="card-header">
            <h3 class="card-title">
                Danh sách tài khoản
            </h3>
        </div>
        @if(count($lsttaikhoan)===0)
        <div class="alert alert-warning w-100" role="alert" style="margin-top: 10px;">
            <p style="margin: auto;">Không tìm thấy nội dung bạn yêu cầu</p>
        </div>
        @else
        <div class="card-body table-responsive p-0">
            <table class="table table-hover">
                <thead>
                    <tr>
                      
                        <th class="align-middle">Hình</th>
                        <th class="align-middle" style="width:30%">Họ tên</th>
                        <th class="align-middle" style="width:30%">Email</th>
                        <th class="align-middle text-center">Thao tác</th>
                    </tr>
                </thead>
                @foreach($lsttaikhoan as $taikhoan)
                <tbody>
                    <tr>
                      
                        <td class="align-middle">
                            <a><img src="{{$taikhoan->hinhanh}}" alt=""class="rounded img-preview"></a>
                        </td>
                        <td class="align-middle">
                            <span>{{$taikhoan->hoten}}</span>
                        </td>
                        <td class="align-middle">
                            <span>{{$taikhoan->email}}</span>
                        </td>
                        <td class="align-middle text-center text-md text-nowrap">
                    
                            <a href="{{route('taikhoan.show',['taikhoan'=>$taikhoan])}}">
                                <i class="fas fa-edit"></i>
                            </a> 
    
                        </td>
                    </tr>
                </tbody>
                @endforeach
            </table>
            @foreach($lsttaikhoan as $taikhoan)
          
            @endforeach
        </div>
        @endif
   </div>
</div>
<hr>
<!-- phan trang -->
<div class="search">
    {{$lsttaikhoan->appends(request()->all())->links()}}
</div>
<div class="thong-bao">
            @if(session('message'))
            <span class="alert alert-success">
                <strong>{{session('message')}}</strong>
            </span>
            @endif
        </div>
@section('scripts')

@endsection
@section('Them')
@endsection
@endsection