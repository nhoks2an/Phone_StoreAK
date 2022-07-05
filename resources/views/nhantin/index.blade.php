@extends('layout.layout')
@section('sidebar')
    @parent
    <section class="content">
    <div class="card-footer text-sm sticky-top">
        <a class="btn btn-sm bg-gradient-danger text-white" id="delete-all" data-url="index.php?com=contact&amp;act=delete" title="Xóa tất cả"><i class="far fa-trash-alt mr-2"></i>Xóa tất cả</a>
    </div>
    <div class="card card-primary card-outline text-sm mb-0">
        <div class="card-header">
            <h3 class="card-title">Danh sách liên hệ</h3>
        </div>
        <div class="card-body table-responsive p-0">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th class="align-middle" width="5%">
                            <div class="custom-control custom-checkbox my-checkbox">
                                <input type="checkbox" class="custom-control-input" id="selectall-checkbox">
                                <label for="selectall-checkbox" class="custom-control-label"></label>
                            </div>
                        </th>
                     
                        <th class="align-middle">Họ tên</th>
                        <th class="align-middle">Điện thoại</th>
                        <th class="align-middle">Email</th>
                        <th class="align-middle text-center">Trạng thái</th>
                        <th class="align-middle text-center">Thao tác</th>
                    </tr>
                </thead>
                @foreach($lienhe as $lh)
                <tbody>
                    <tr>
                        <td class="align-middle text-center">
                            <div class="custom-control custom-checkbox my-checkbox">
                                <input type="checkbox" class="custom-control-input select-checkbox">
                                <label for="select-checkbox-35"class="custom-control-label"></label>
                            </div>
                        </td>
                        <td class="text-center"><span>{{$lh->hoten}}</span></td>
                        <td class="text-center"><span>{{$lh->sodienthoai}}</span></td>
                        <td class="text-center"><span>{{$lh->email}}</span></td>
                        <td class="text-center"><span>Chưa duyệt</span></td>
                        <td class="align-middle text-center text-md text-nowrap">
                            <a href="{{route('lienhe.show',['lienhe'=>$lh])}}">
                                <i class="fas fa-edit"></i>
                            </a> 
                        </td>
                    </tr>
                </tbody>
                @endforeach
            </table>
        </div>
    </div>
</section>
@section('Them')
@endsection
@endsection