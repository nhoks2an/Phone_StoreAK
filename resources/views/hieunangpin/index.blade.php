@extends('layout.layout')
@section('sidebar')
    @parent
<div class="taikhoan">
    <div class="btn-themmoi">
        <a class="btn btn-sm bg-gradient-primary text-white" href="{{route('themhieunangpin')}}" title="Thêm mới"><i class="fas fa-plus mr-2"></i>Thêm mới</a>
        <a class="btn btn-sm bg-gradient-danger text-white" id="delete-all" data-url="index.php?com=product&amp;act=delete&amp;type=san-pham" title="Xóa tất cả"><i class="far fa-trash-alt mr-2"></i>Xóa tất cả</a>
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
    <div class="row"></div>
   <div class="card card-primary card-outline text-sm mb-0">
    <div class="card-header">
            <h3 class="card-title">
                Danh sách hiệu năng & pin
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
                        <th class="tableSTT" width="10%">STT</th>
                        <th class="align-middle">Hiệu năng & pin</th>
                        <th class="align-middle text-center">Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="align-middle">
                        <div class="custom-control custom-checkbox my-checkbox">
                                <input type="checkbox" class="custom-control-input select-checkbox">
                                <label for="select-checkbox-35"class="custom-control-label"></label>
                        </div>
                        </td>
                        <td class="align-middle">
                            <input type="number" class="form-control form-control-mini m-auto update-numb">
                        </td>
                        <td class="align-middle">
                           <span>8G</span>
                        </td>
                        <td class="align-middle text-center text-md text-nowrap">
                        <a href="#"  class="text-danger">
                            <i class="color fas fa-trash-alt"></i>
                        </a>
                        </td>
                    </tr>
                  
                </tbody>
            </table>
        </div>
   </div>
</div>
@section('Them')
@endsection
@endsection