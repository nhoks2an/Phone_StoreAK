@extends('layout.layout')
@section('sidebar')
    @parent
    <section class="content">
    <div class="card-footer text-sm sticky-top">
   
    </div>
    <div class="card card-primary card-outline text-sm mb-0">
        <div class="card-header">
            <h3 class="card-title">Danh sách liên hệ</h3>
        </div>
        <div class="card-body table-responsive p-0">
            <table class="table table-hover">
                <thead>
                    <tr>
                    
                     
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