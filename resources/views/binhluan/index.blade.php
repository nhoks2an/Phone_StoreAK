@extends('layout.layout')
@section('sidebar')
    @parent
<div class="content">
<div class="taikhoan">
    <div class="btn-themmoi">
      
            <!-- Topbar Search -->
        <div class="form-inline form-search d-inline-block align-middle ml-3">
            <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar text-sm" type="search" id="keyword" placeholder="Tìm kiếm" aria-label="Tìm kiếm" value="" onkeypress="doEnter(event,'keyword','index.php?com=product&amp;act=man&amp;type=san-pham')">
                <div class="input-group-append bg-primary rounded-right">
                    <button class="btn btn-navbar text-white" type="button" onclick="onSearch('keyword','index.php?com=product&amp;act=man&amp;type=san-pham')">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
   <div class="row">

   </div>
   <div class="card card-primary card-outline text-sm mb-0">
    <div class="card-header">
            <h3 class="card-title">
                Danh sách bình luận
            </h3>
        </div>
        <div class="card-body table-responsive p-0">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th class="align-middle" with="5%">
                            <div class="custom-control custom-checkbox my-checkbox">
                                <input type="checkbox" class="custom-control-input" id="selectall-checkbox">
                                <label for="selectall-checkbox" class="custom-control-label"></label>
                            </div>
                        </th>
                     
                        <th class="align-middle">Email</th>
                        <th class="align-middle" style="width:30%">Sản phẩm</th>
                        <th class="align-middle" style="width:30%">Nội dung</th>
                        <th class="align-middle text-center">Thao tác</th>
                    </tr>
                </thead>
                @foreach($lstbinhluan as $binhLuan)
                <tbody>
                    <tr>
                        <td class="align-middle">
                            <div class="custom-control custom-checkbox my-checkbox">
                                    <input type="checkbox" class="custom-control-input select-checkbox">
                                    <label for="select-checkbox-35"class="custom-control-label"></label>
                            </div>
                        </td>
                        <td class="align-middle">
                            @foreach($lsttaikhoan as $taikhoan)
                            <span value="{{$taikhoan->id}}">{{$taikhoan->email}}</span>
                            @endforeach    
                        </td>
                        <td class="align-middle">
                            @foreach($lstsanpham as $sanPham)
                            <span value="{{$sanPham->id}}">{{$sanPham->tensanpham}}</span>
                            @endforeach    
                        </td>
                        <td class="align-middle">
                            <span class="noidung text-split">{{$binhLuan->noidung}}</span>
                        </td>
                        <td class="align-middle text-center text-md text-nowrap">
                        <a href="#">
                            <i class="fas fa-edit"></i>
                        </a>
                        <a href="#"  class="text-danger">
                            <i class="color fas fa-trash-alt"></i>
                        </a>
                        </td>
                    </tr> 
                </tbody>
                @endforeach
            </table>
        </div>
   </div>
</div>
</div>
<hr>
<!-- phan trang -->
<div class="search">
    {{$lstbinhluan->appends(request()->all())->links()}}
</div>
@section('Them')
@endsection
@endsection