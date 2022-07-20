@extends('layout.layout')
@section('sidebar')
@parent
<section class="content">
    <div class="card-footer text-sm sticky-top">
        <a class="btn btn-sm bg-gradient-primary text-white" href="{{route('banner.create')}}" title="Thêm mới"><i
                class="fas fa-plus mr-2"></i>Thêm mới</a>
     
    </div>
    <div class="card card-primary card-outline text-sm mb-0">
        <div class="card-header">
            <h3 class="card-title">Danh sách banner</h3>
        </div>
        <div class="card-body table-responsive p-0">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th class="align-middle text-center">Hình</th>
                        <th class="align-middle text-center">Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach( $lstbanner as $banner)
                    <tr>
                        <td class="align-middle text-center">
                            <a href="" title="">
                                <img class="rounded img-preview" onerror="" src="{{$banner->hinhanh}}" alt=""> </a>
                        </td>
                  
                        <td class="align-middle text-center text-md text-nowrap">
                            <button type="submit" class="btnxoa text-danger " style="border: none;background: none;"
                                value="{{$banner->id}}">
                                <i class="color fas fa-trash-alt"></i>
                            </button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
           
            <!-- modal -->
            <div class="modal fade" id="bannerModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Thông báo</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form method="post" action="{{route('banner.destroy',$banner->id)}}">
                            @csrf
                            @method('DELETE')
                            <div class="modal-body">
                                Bạn có chắc chắn muốn xóa ?
                            </div>
                            <input type="hidden" name="bn" id="bn">
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Thoát</button>
                                <button type="submit" class="btn btn-primary">Xác nhận</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
       
        </div>
    </div>
</section>
<hr>
  <!-- phan trang -->
  <div class="search">
        {{$lstbanner->appends(request()->all())->links()}}
    </div>
<div class="thong-bao">
    @if(session('message'))
    <span class="alert alert-success">
        <strong>{{session('message')}}</strong>
    </span>
    @endif
</div>
@section('scripts')
<script>
$(document).on('click', '.btnxoa', function() {
    $('#bannerModal').modal({
        show: true
    });
    var bn_id = $(this).val();
    $('#bn').val(bn_id);

});
</script>
@endsection
@endsection
@section('Them')
@endsection