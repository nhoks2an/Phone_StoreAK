@extends('user.index')
@section('sidebar')
@parent
<?php $tongtien=0; ?>
<div class="box-cart">

    <div class="wrap-cart">
        <div class="row">


            <div class="top-cart col-12 col-lg-7">

                <p class="title-cart">Giỏ hàng của bạn:</p>

                <div class="list-procart">
                    @foreach($cart as $item)
                    <div class="procart procart">

                        <div class="form-row">

                            <div class="pic-procart col-3 col-md-2">

                                <a class="text-decoration-none" href="" target="_blank" title="">

                                    <img src="/storage/{{$item->sanpham->hinhanh}}" alt="">
                                </a>



                            </div>
                            <div class="info-procart col-6 col-md-4">
                                <h3 class="name-procart"><a class="text-decoration-none" href="" target="_blank"
                                        title="">{{$item->sanpham->tensanpham}}</a>
                                </h3>
                                <div class="properties-procart">
                                    <div class="row">

                                        <div class="phanloai">
                                            Phân loại:
                                            {{$item->mapping->mausac->tenmau}}-{{$item->mapping->ram->soram}}GB-{{$item->mapping->rom->sorom}}GB
                                        </div>
                                    </div>
                                    <p class="price-new-cart">
                                        Giá: {{$item->mapping->giamoi}} VNĐ
                                    </p>
                                    <p class="price-new-cart">
                                        Tổng tiền: {{$item->mapping->giamoi*$item->soluong}} VNĐ
                                    </p>
                                </div>

                            </div>



                            <div class="col-3 col-md-4">
                                <div class="price-procart">
                                    <div class="txt-sl">
                                        Số lượng:
                                    </div>
                                    <div class="flex">
                                        <form method="post" action="{{route('cart.updateminus')}}"
                                            enctype="multipart/form-data">
                                            @csrf
                                            @method('POST')
                                            <input type="hidden" name="idcart" value="{{$item->id}}">
                                            <button class="" type="submit">
                                                <span class="flus is-form">-</span>
                                            </button>
                                        </form>
                                        <input aria-label="quantity" class="input-qty" max="999" min="1" type="number"
                                            value="{{$item->soluong}}">
                                        <form method="post" action="{{route('cart.updateplus')}}"
                                            enctype="multipart/form-data">
                                            @csrf
                                            @method('POST')
                                            <input type="hidden" name="idcart" value="{{$item->id}}">
                                            <button class="" type="submit">
                                                <span class="flus is-form">+</span>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                                <div class="tonkho"><span>Tồn kho: {{$item->mapping->soluong}}</span></div>
                            </div>
                            <div class="price-procart col-3 col-md-2">
                                <form method="post" action="{{route('cart.deletecart')}}" enctype="multipart/form-data">
                                    @csrf
                                    @method('POST')
                                    <input type="hidden" name="idcart" value="{{$item->id}}">
                                    <button class="del-procart text-decoration-none">
                                        <i class="fa fa-times-circle"></i>
                                        <span>Xóa</span>
                                    </button>
                                </form>
                            </div>


                        </div>

                    </div>
                    <?php $tongtien += $item->mapping->giamoi*$item->soluong;?>
                    @endforeach
                </div>

                <div class="money-procart">



                    <div class="total-procart d-flex align-items-center justify-content-between">

                        <p>Tổng tiền:</p>

                        <p class="total-price load-price-total">
                            <?php echo $tongtien; ?> VNĐ

                        </p>

                    </div>
                    <div class="thong-bao">
                        @if(session('message'))
                        <span class="alert alert-success">
                            <strong>{{session('message')}}</strong>
                        </span>
                        @endif
                        @if(session('fail'))
                        <span class="alert alert-danger">
                            <strong>{{session('fail')}}</strong>
                        </span>
                        @endif
                    </div>
                </div>

            </div>

            <div class="bottom-cart col-12 col-lg-5">
                <form method="post" action="{{route('dathang.addhd')}}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id_user" value="{{$datauser->id}}">
                    <input type="hidden" name="tongtien" value="{{$tongtien}}">
                    <div class="section-cart">
                        <p class="title-cart">Hình thức thanh toán:</p>
                        <div class="information-cart">
                            <div class="payments-cart custom-control custom-radio">
                                <input type="radio" class="custom-control-input" id="payments-16"
                                    name="dataOrder[payments]" value="16" required="" checked>
                                <label class="payments-label custom-control-label active" for="payments-16"
                                    data-payments="16">Thanh toán sau khi nhận hàng</label>
                            </div>
                            <div class="payments-cart custom-control custom-radio">
                                <input type="radio" class="custom-control-input" id="payments-15"
                                    name="dataOrder[payments]" value="15" required="">
                                <label class="payments-label custom-control-label" for="payments-15"
                                    data-payments="15">Thanh toán trực tuyến</label>
                                <div class="payments-info payments-info-15 transition"></div>
                            </div>
                        </div>
                        <p class="title-cart">Thông tin giao hàng:</p>
                        <div class="information-cart">
                            <div class="form-row">
                                <div class="input-cart col-md-6">
                                    Tên:
                                    <input type="text" class="form-control text-sm" id="fullname" name="name"
                                        placeholder="Họ tên" value="{{$datauser->hoten}}" required="">
                                    <div class="invalid-feedback">Vui lòng nhập họ và tên</div>
                                </div>
                                <div class="input-cart col-md-6">
                                    Số điện thoại:
                                    <input type="number" class="form-control text-sm" id="phone" name="sodienthoai"
                                        placeholder="Số điện thoại" value="{{$datauser->sodienthoai}}" required="">
                                    <div class="invalid-feedback">Vui lòng nhập số điện thoại</div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="input-cart">

                                    <select class="select-city-cart custom-select text-sm thanhpho" required=""
                                        id="thanhpho" name="thanhpho" data-type="thanhpho" onchange="load()">
                                        <option value="">Tỉnh/thành phố</option>
                                        @foreach($tp as $ttp)
                                        <option value="{{$ttp->id}}">{{$ttp->_name}}</option>
                                        @endforeach
                                    </select>

                                    <div class="invalid-feedback">Vui lòng chọn tỉnh thành</div>
                                </div>
                                <div class="input-cart">
                                    <select class="select-district-cart select-district custom-select text-sm thanhpho"
                                        required="" id="quan" name="quan" data-type="quan" id="quan"
                                        onchange="loadphuong()">
                                        <option value="">Quận/huyện</option>
                                    </select>
                                    <div class="invalid-feedback">Vui lòng chọn quận huyện</div>
                                </div>

                                <div class="input-cart">
                                    <select class="select-ward-cart select-ward custom-select text-sm js_location"
                                        required="" id="phuong" name="phuong" data-type="phuong">
                                        <option value="">Phường/xã</option>
                                    </select>

                                    <div class="invalid-feedback">Vui lòng chọn phường xã</div>

                                </div>

                            </div>

                            <div class="input-cart">
                                Địa chỉ giao hàng:
                                <input type="text" class="form-control text-sm" id="address" name="diachi"
                                    placeholder="Địa chỉ" value="{{$datauser->diachi}}" required="">

                                <div class="invalid-feedback">Vui lòng nhập địa chỉ</div>

                            </div>

                        </div>

                        <input type="submit" class="btn-cart btn btn-primary btn-lg btn-block" name="thanhtoan"
                            value="Đặt hàng">

                    </div>


                </form>
            </div>


        </div>

    </div>


</div>
<script>
function load() {
    var id = $('#thanhpho').val();
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        type: "POST",
        url: "{{ route('loadvt') }}",
        data: {
            id: id
        },

        success: function(data) {
            console.log(data);
            $('#quan').html('');
            $('#quan').append(data);
        }
    })
}

function loadphuong() {
    var id = $('#quan').val();
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        type: "POST",
        url: "{{ route('loadphuong') }}",
        data: {
            id: id
        },

        success: function(data) {
            console.log(data);
            $('#phuong').html('');
            $('#phuong').append(data);
        }
    })
}
// $(document).ready(function() {
//     $('.js_location').change(function(event) {
//         event.preventDefault();
//         console.log("1")

//         let $this = $(this);
//         let type = $this.attr('data-type');
//         let parentID = $this.val();
//         $.ajax({
//                 method: "GET",
//                 url: route,
//                 data: {
//                     type,
//                     parent: parentID
//                 }
//             })
//             .done(function(msg) {
//                 if (msg.data) {
//                     let html = '';
//                     let element = '';
//                     if (type == 'thanhpho') {
//                         html = "<option>Chọn quận/huyện</option>";
//                         element = '#quan';
//                     } else {
//                         html = "<option>Chọn phường/xã</option>";
//                         element = '#phuong';
//                     }
//                     $.each(msg.data, function(index, value) {
//                         html += < option value = '"value.id"' > "value.name" < /option>
//                     })
//                     $(element).html('').append(html);

//                 }
//             })

//     });
// });
</script>
@endsection
@section('Them')
@endsection