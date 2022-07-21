@extends('layout.layout')
@section('sidebar')
@parent

<div class="taikhoan">
    <div class="btn-themmoi">
        <button type="button" class="btn btn-sm bg-gradient-primary text-white" data-toggle="modal"
            data-target="#addadminprofile">
            <i class="fas fa-plus mr-2"></i> Thêm mới
        </button>

        <a class="btn btn-sm bg-gradient-secondary" id="delete-all" href="" title=""><i
                class="fas fa-redo mr-2"></i>Quay lại</a>

    </div>
    <div class="card-footer form-group-category text-sm bg-light row">
    </div>
    <div class="card card-primary card-outline text-sm mb-0">
        <div class="card-header">
            <h3 class="card-title">
                Danh sách sản phẩm
            </h3>
        </div>
        <div class="card-body table-responsive p-0">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th class="align-middle text-center">Sản Phẩm</th>
                        <th class="align-middle text-center">Màu</th>
                        <th class="align-middle text-center">RAM</th>
                        <th class="align-middle text-center">Số lượng</th>
                        <th class="align-middle text-center">Giá bán</th>
                        <th class="align-middle text-center">Giá mới</th>
                        <th class="align-middle text-center">Thao tác</th>
                    </tr>
                </thead>
                @foreach($lstspmp as $spmp)
                <tbody>
                    <tr>

                        <td class="align-middle text-center">
                            <span>{{$spmp->sanpham->tensanpham}}</span>
                        </td>
                        <td class="align-middle text-center">
                            <span>{{$spmp->mausac->tenmau}}</span>
                        </td>
                        <td class="align-middle text-center text-md text-nowrap">
                            <span>{{$spmp->RAM->soram}}G</span>
                        </td>
                        <td class="align-middle text-center text-md text-nowrap">
                            <span>{{$spmp->soluong}} Cái</span>
                        </td>
                        <td class="align-middle text-center text-md text-nowrap">
                            <span>{{$spmp->giacu}}VNĐ</span>
                        </td>
                        <td class="align-middle text-center text-md text-nowrap">
                            <span>{{$spmp->giamoi}}VNĐ</span>
                        </td>
                        <td class="align-middle text-center text-md text-nowrap">
                            <button data-toggle="modal" data-target="" class="sua" type="button" value="{{$spmp->id}}"
                                style="border: none;background:none;color:#4e73df;">
                                <i class="fas fa-edit"></i>
                            </button>
                            <button type="submit" class="btnxoa text-danger " style="border: none;background: none;"
                                value="{{$spmp->id}}">
                                <i class="color fas fa-trash-alt"></i>
                            </button>

                        </td>
                    </tr>
                </tbody>
                @endforeach
            </table>
        </div>
    </div>
    <!-- modal them-->
    <div class="x modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Thêm chi tiết sản phẩm</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{route('sanPham.storemp')}}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group-category row">
                            <div class="form-group col-xl-6 col-sm-4">
                                <label class="d-block" for="id_list">Màu sắc:</label>
                                <select id="id_list" name="id_mau" data-level="0" data-type="san-pham"
                                    data-table="#_product_cat" data-child="id_cat"
                                    class="form-control select2 select-category select2-hidden-accessible"
                                    data-select2-id="id_list" tabindex="-1" aria-hidden="true">

                                    @foreach($lstmausac as $mau)
                                    <option value="{{$mau->id}}">{{$mau->tenmau}}</option>
                                    @endforeach
                                </select></span>
                            </div>
                            <div class="form-group col-xl-6 col-sm-4">
                                <label class="d-block" for="id_list">Số lượng:</label>
                                <input type="number" name="soluong" class="form-control" placeholder="Số lượng">
                                @if($errors->has('soluong'))
                                <div class="alert alert-danger" style="margin-top:10px;">
                                    {{$errors->first('soluong')}}
                                </div>
                                @endif
                            </div>
                        </div>
                        <div class="form-group-category row">
                            <div class="form-group col-xl-6 col-sm-4">
                                <label class="d-block" for="id_list">RAM:</label>
                                <select id="id_list" name="id_ram" data-level="0" data-type="san-pham"
                                    data-table="#_product_cat" data-child="id_cat"
                                    class="form-control select2 select-category select2-hidden-accessible"
                                    data-select2-id="id_list" tabindex="-1" aria-hidden="true">

                                    @foreach($lstram as $ram)
                                    <option value="{{$ram->id}}">{{$ram->soram}}</option>
                                    @endforeach
                                </select></span>
                                @if($errors->has('id_ram'))
                                <div class="alert alert-danger" style="margin-top:10px;">
                                    {{$errors->first('id_ram')}}
                                </div>
                                @endif
                            </div>
                            <div class="form-group col-xl-6 col-sm-4">
                                <label class="d-block" for="id_list">ROM:</label>
                                <select id="id_list" name="id_rom" data-level="0" data-type="san-pham"
                                    data-table="#_product_cat" data-child="id_cat"
                                    class="form-control select2 select-category select2-hidden-accessible"
                                    data-select2-id="id_list" tabindex="-1" aria-hidden="true">

                                    @foreach($lstrom as $rom)
                                    <option value="{{$rom->id}}">{{$rom->sorom}}</option>
                                    @endforeach
                                </select></span>
                            </div>
                        </div>
                        <div class="form-group-category row">
                            <div class="form-group col-md-6">
                                <label class="d-block" for="regular_price">Giá bán:</label>
                                <div class="input-group">
                                    <input type="text" class="form-control format-price regular_price text-sm"
                                        name="giacu" id="regular_price" placeholder="Giá bán" value="{{old('giacu')}}">
                                    <div class="input-group-append">
                                        <div class="input-group-text"><strong> VNĐ</strong></div>
                                    </div>
                                </div>
                                @if($errors->has('giacu'))
                                <div class="alert alert-danger" style="margin-top:10px;">
                                    {{$errors->first('giacu')}}
                                </div>
                                @endif
                            </div>
                            <div class="form-group col-md-6">
                                <label class="d-block" for="sale_price">Giá mới:</label>
                                <div class="input-group">
                                    <input type="text" class="form-control format-price sale_price text-sm"
                                        name="giamoi" id="sale_price" placeholder="Giá mới" value="{{old('giamoi')}}">
                                    <div class="input-group-append">
                                        <div class="input-group-text"><strong> VNĐ</strong></div>
                                    </div>
                                </div>
                                @if($errors->has('giamoi'))
                                <div class="alert alert-danger" style="margin-top:10px;">
                                    {{$errors->first('giamoi')}}
                                </div>
                                @endif
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Thoát</button>
                        <button type="submit" name="registerbtn" class="btn btn-primary">Lưu</button>
                        <input type="hidden" name="themmp" id="themmp" value="{{$sanPham}}">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- modal cap nhat -->
    <div class="x modal fade" id="sua" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Cập nhật thông tin</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{route('sanPham.updatemp')}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="modal-body">
                        <div class="form-group-category row">
                            <div class="form-group col-xl-6 col-sm-4">
                                <label class="d-block" for="id_list">Màu sắc:</label>
                                <select id="id_list" name="id_mau" data-level="0" data-type="san-pham"
                                    data-table="#_product_cat" data-child="id_cat"
                                    class="form-control select2 select-category select2-hidden-accessible"
                                    data-select2-id="id_list" tabindex="-1" aria-hidden="true">

                                    @foreach($lstmausac as $mau)
                                    <option value="{{$mau->id}}">{{$mau->tenmau}}</option>
                                    @endforeach
                                </select></span>
                            </div>
                            <div class="form-group col-xl-6 col-sm-4">
                                <label class="d-block" for="id_list">Số lượng:</label>
                                <input type="number" name="soluong" class="form-control" placeholder="Số lượng">
                                @if($errors->has('soluong'))
                                <div class="alert alert-danger" style="margin-top:10px;">
                                    {{$errors->first('soluong')}}
                                </div>
                                @endif
                            </div>

                        </div>
                        <div class="form-group-category row">
                            <div class="form-group col-xl-6 col-sm-4">
                                <label class="d-block" for="id_list">RAM:</label>
                                <select id="id_list" name="id_ram" data-level="0" data-type="san-pham"
                                    data-table="#_product_cat" data-child="id_cat"
                                    class="form-control select2 select-category select2-hidden-accessible"
                                    data-select2-id="id_list" tabindex="-1" aria-hidden="true">

                                    @foreach($lstram as $ram)
                                    <option value="{{$ram->id}}">{{$ram->soram}}</option>
                                    @endforeach
                                </select></span>
                            </div>
                            <div class="form-group col-xl-6 col-sm-4">
                                <label class="d-block" for="id_list">ROM:</label>
                                <select id="id_list" name="id_rom" data-level="0" data-type="san-pham"
                                    data-table="#_product_cat" data-child="id_cat"
                                    class="form-control select2 select-category select2-hidden-accessible"
                                    data-select2-id="id_list" tabindex="-1" aria-hidden="true">

                                    @foreach($lstrom as $rom)
                                    <option value="{{$rom->id}}">{{$rom->sorom}}</option>
                                    @endforeach
                                </select></span>
                            </div>
                        </div>
                        <div class="form-group-category row">
                            <div class="form-group col-md-6">
                                <label class="d-block" for="regular_price">Giá bán:</label>
                                <div class="input-group">
<<<<<<< HEAD
                                    <input type="text" class="form-control format-price regular_price text-sm"
                                        name="giacu" id="regular_price" placeholder="Giá bán">
=======
                                    <input type="text" class="form-control format-price regular_price text-sm" name="giacu" id="regular_price" placeholder="Giá bán" value="{{old('giacu')}}">
>>>>>>> 9f42825354160d2725986e25e7c8d898de1dab4e
                                    <div class="input-group-append">
                                        <div class="input-group-text"><strong> VNĐ</strong></div>
                                    </div>
                                </div>
                                @if($errors->has('giacu'))
                                <div class="alert alert-danger" style="margin-top:10px;">
                                    {{$errors->first('giacu')}}
                                </div>
                                @endif
                            </div>
                            <div class="form-group col-md-6">
                                <label class="d-block" for="sale_price">Giá mới:</label>
                                <div class="input-group">
                                    <input type="text" class="form-control format-price sale_price text-sm"
                                        name="giamoi" id="sale_price" placeholder="Giá mới">
                                    <input type="text" class="form-control format-price sale_price text-sm" name="giamoi" id="sale_price" placeholder="Giá mới" value="{{old('giamoi')}}">
                                    <div class="input-group-append">
                                        <div class="input-group-text"><strong> VNĐ</strong></div>
                                    </div>
                                </div>
                                @if($errors->has('giamoi'))
                                <div class="alert alert-danger" style="margin-top:10px;">
                                    {{$errors->first('giamoi')}}
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Thoát</button>
                        <button type="submit" name="registerbtn" class="btn btn-primary">Lưu</button>
                        <input type="hidden" name="tensanpham" id="tensanpham" value="{{$sanPham}}">
                        <input type="hidden" name="tensanpham1" id="tensanpham1" value="{{$sanPham}}">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- modal xoa-->
    <div class="modal fade" id="xoaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Thông báo</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                        </button>
                    </div>  
                    <form method="post" action="{{route('sanPham.destroymp')}}">
                        @csrf
                        @method('DELETE')
                        <div class="modal-body">
                            Bạn có chắc chắn muốn xóa ?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Thoát</button>
                            <button type="submit" class="btn btn-primary">Xác nhận</button>
                            <input type="hidden"  name="xoasanpham" id="xoasanpham" value="{{$sanPham}}">
                            <input type="hidden"  name="xoasanpham1" id="xoasanpham1" value="{{$sanPham}}">
                          
                          
                        </div>
                    </form>
                </div>
                <form method="post" action="{{route('sanPham.destroymp')}}">
                    @csrf
                    @method('DELETE')
                    <div class="modal-body">
                        Bạn có chắc chắn muốn xóa ?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Thoát</button>
                        <button type="submit" class="btn btn-primary">Xác nhận</button>
                        <input type="hidden" name="xoasanpham" id="xoasanpham" value="{{$sanPham}}">
                        <input type="hidden" name="xoasanpham1" id="xoasanpham1" value="{{$sanPham}}">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <hr>
    <div class="search">
        {{$lstspmp->appends(request()->all())->links()}}
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
    $(document).on('click', '.sua', function() {
        $('#sua').modal({
            show: true
        });
        var sanpham_id = $(this).val();
        $('#tensanpham').val(sanpham_id);

    });
    </script>
    <script>
    $(document).on('click', '.btnxoa', function() {
        $('#xoaModal').modal({
            show: true
        });
        var sanpham_id = $(this).val();
        $('#xoasanpham').val(sanpham_id);

    });

    /* Product */
    if ($(".regular_price").length && $(".sale_price").length) {
        $(".regular_price, .sale_price").keyup(function() {
            var regular_price = $('.regular_price').val();
            var sale_price = ($('.sale_price').length) ? $('.sale_price').val() : 0;
            var discount = 0;

            if (regular_price == '' || regular_price == '0' || sale_price == '' || sale_price == '0') {
                discount = 0;
            } else {
                regular_price = regular_price.replace(/,/g, "");
                sale_price = (sale_price) ? sale_price.replace(/,/g, "") : 0;
                regular_price = parseInt(regular_price);
                sale_price = parseInt(sale_price);

                if (sale_price < regular_price) {
                    discount = 100 - ((sale_price * 100) / regular_price);
                    discount = roundNumber(discount, 0);
                } else {
                    $('.regular_price, .sale_price').val(0);
                    if ($(".discount").length) {
                        discount = 0;
                        $('.sale_price').val(0);
                    }
                }
            }

            if ($(".discount").length) {
                $('.discount').val(discount);
            }
        });
    }
    </script>
    @endsection
    @endsection
    @section('Them')
    @endsection