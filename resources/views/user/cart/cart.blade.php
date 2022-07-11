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

                                    <img src="../images/oppoa5.jpg" alt="">
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



                            <div class="price-procart col-3 col-md-4">
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
                                    <input type="text" class="form-control text-sm" id="fullname" name="name"
                                        placeholder="Họ tên" value="" required="">
                                    <div class="invalid-feedback">Vui lòng nhập họ và tên</div>
                                </div>
                                <div class="input-cart col-md-6">
                                    <input type="number" class="form-control text-sm" id="phone" name="sodienthoai"
                                        placeholder="Số điện thoại" value="" required="">
                                    <div class="invalid-feedback">Vui lòng nhập số điện thoại</div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="input-cart col-md-4">
                                    <select class="select-city-cart custom-select text-sm" required="" id="city"
                                        name="dataOrder[city]">
                                        <option value="">Tỉnh/thành phố</option>
                                        <option value="1">Thành phố Hà Nội</option>
                                        <option value="2">Tỉnh Hà Giang</option>
                                        <option value="3">Tỉnh Cao Bằng</option>
                                        <option value="4">Tỉnh Bắc Kạn</option>


                                        <option value="5">Tỉnh Tuyên Quang</option>


                                        <option value="6">Tỉnh Lào Cai</option>


                                        <option value="7">Tỉnh Điện Biên</option>


                                        <option value="8">Tỉnh Lai Châu</option>


                                        <option value="9">Tỉnh Sơn La</option>


                                        <option value="10">Tỉnh Yên Bái</option>


                                        <option value="11">Tỉnh Hoà Bình</option>


                                        <option value="12">Tỉnh Thái Nguyên</option>


                                        <option value="13">Tỉnh Lạng Sơn</option>


                                        <option value="14">Tỉnh Quảng Ninh</option>


                                        <option value="15">Tỉnh Bắc Giang</option>


                                        <option value="16">Tỉnh Phú Thọ</option>


                                        <option value="17">Tỉnh Vĩnh Phúc</option>


                                        <option value="18">Tỉnh Bắc Ninh</option>


                                        <option value="19">Tỉnh Hải Dương</option>


                                        <option value="20">Thành phố Hải Phòng</option>


                                        <option value="21">Tỉnh Hưng Yên</option>


                                        <option value="22">Tỉnh Thái Bình</option>


                                        <option value="23">Tỉnh Hà Nam</option>


                                        <option value="24">Tỉnh Nam Định</option>


                                        <option value="25">Tỉnh Ninh Bình</option>


                                        <option value="26">Tỉnh Thanh Hóa</option>


                                        <option value="27">Tỉnh Nghệ An</option>


                                        <option value="28">Tỉnh Hà Tĩnh</option>


                                        <option value="29">Tỉnh Quảng Bình</option>


                                        <option value="30">Tỉnh Quảng Trị</option>


                                        <option value="31">Tỉnh Thừa Thiên Huế</option>


                                        <option value="32">Thành phố Đà Nẵng</option>


                                        <option value="33">Tỉnh Quảng Nam</option>


                                        <option value="34">Tỉnh Quảng Ngãi</option>


                                        <option value="35">Tỉnh Bình Định</option>


                                        <option value="36">Tỉnh Phú Yên</option>


                                        <option value="37">Tỉnh Khánh Hòa</option>


                                        <option value="38">Tỉnh Ninh Thuận</option>


                                        <option value="39">Tỉnh Bình Thuận</option>


                                        <option value="40">Tỉnh Kon Tum</option>


                                        <option value="41">Tỉnh Gia Lai</option>


                                        <option value="42">Tỉnh Đắk Lắk</option>


                                        <option value="43">Tỉnh Đắk Nông</option>


                                        <option value="44">Tỉnh Lâm Đồng</option>


                                        <option value="45">Tỉnh Bình Phước</option>


                                        <option value="46">Tỉnh Tây Ninh</option>


                                        <option value="47">Tỉnh Bình Dương</option>


                                        <option value="48">Tỉnh Đồng Nai</option>


                                        <option value="49">Tỉnh Bà Rịa - Vũng Tàu</option>


                                        <option value="50">Thành phố Hồ Chí Minh</option>


                                        <option value="51">Tỉnh Long An</option>


                                        <option value="52">Tỉnh Tiền Giang</option>


                                        <option value="53">Tỉnh Bến Tre</option>


                                        <option value="54">Tỉnh Trà Vinh</option>


                                        <option value="55">Tỉnh Vĩnh Long</option>


                                        <option value="56">Tỉnh Đồng Tháp</option>


                                        <option value="57">Tỉnh An Giang</option>


                                        <option value="58">Tỉnh Kiên Giang</option>


                                        <option value="59">Thành phố Cần Thơ</option>


                                        <option value="60">Tỉnh Hậu Giang</option>


                                        <option value="61">Tỉnh Sóc Trăng</option>


                                        <option value="62">Tỉnh Bạc Liêu</option>


                                        <option value="63">Tỉnh Cà Mau</option>


                                    </select>

                                    <div class="invalid-feedback">Vui lòng chọn tỉnh thành</div>

                                </div>

                                <div class="input-cart col-md-4">

                                    <select class="select-district-cart select-district custom-select text-sm"
                                        required="" id="district" name="dataOrder[district]">

                                        <option value="">Quận/huyện</option>


                                        <option value="210">Quận Hồng Bàng</option>


                                        <option value="211">Quận Ngô Quyền</option>


                                        <option value="212">Quận Lê Chân</option>


                                        <option value="213">Quận Hải An</option>


                                        <option value="214">Quận Kiến An</option>


                                        <option value="215">Quận Đồ Sơn</option>


                                        <option value="216">Quận Dương Kinh</option>


                                        <option value="217">Huyện Thuỷ Nguyên</option>


                                        <option value="218">Huyện An Dương</option>


                                        <option value="219">Huyện An Lão</option>


                                        <option value="220">Huyện Kiến Thuỵ</option>


                                        <option value="221">Huyện Tiên Lãng</option>


                                        <option value="222">Huyện Vĩnh Bảo</option>


                                        <option value="223">Huyện Cát Hải</option>


                                        <option value="224">Huyện Bạch Long Vĩ</option>

                                    </select>

                                    <div class="invalid-feedback">Vui lòng chọn quận huyện</div>

                                </div>

                                <div class="input-cart col-md-4">

                                    <select class="select-ward-cart select-ward custom-select text-sm" required=""
                                        id="ward" name="dataOrder[ward]">

                                        <option value="">Phường/xã</option>


                                        <option value="3590">Phường Máy Chai</option>


                                        <option value="3591">Phường Máy Tơ</option>


                                        <option value="3592">Phường Vạn Mỹ</option>


                                        <option value="3593">Phường Cầu Tre</option>


                                        <option value="3594">Phường Lạc Viên</option>


                                        <option value="3595">Phường Cầu Đất</option>


                                        <option value="3596">Phường Gia Viên</option>


                                        <option value="3597">Phường Đông Khê</option>


                                        <option value="3598">Phường Lê Lợi</option>


                                        <option value="3599">Phường Đằng Giang</option>


                                        <option value="3600">Phường Lạch Tray</option>


                                        <option value="3601">Phường Đổng Quốc Bình</option>

                                    </select>

                                    <div class="invalid-feedback">Vui lòng chọn phường xã</div>

                                </div>

                            </div>

                            <div class="input-cart">

                                <input type="text" class="form-control text-sm" id="address" name="diachi"
                                    placeholder="Địa chỉ" value="" required="">

                                <div class="invalid-feedback">Vui lòng nhập địa chỉ</div>

                            </div>

                        </div>

                        <input type="submit" class="btn-cart btn btn-primary btn-lg btn-block" name="thanhtoan"
                            value="Thanh toán">

                    </div>


                </form>
            </div>


        </div>

    </div>


</div>
@endsection
@section('Them')
@endsection