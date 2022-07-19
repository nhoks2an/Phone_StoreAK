@extends('user.index')
@section('sidebar')
@parent
<form method="post" action="{{route('cart.cart',['sanPham'=>$sanPham])}}" enctype="multipart/form-data">
    @csrf
    <div class="grid-pro-detail w-clear">
        <div class="row">
            <div class="left-pro-detail col-lg-4">
                <ul id="etalage">
                    @foreach($lsthinhanh as $hinhanh)
                    <li>
                        <img class="etalage_source_image" src="{{$hinhanh->hinhanh}}" class="img-responsive" />
                    </li>
                    @endforeach
                </ul>
            </div>
            <div class="right-pro-detail col-lg-8">
                <div class="row">
                    <div class="col-xl-6">
                        <p class="title-pro-detail mb-2"></p>
                        <div class="social-plugin social-plugin-pro-detail w-clear">
                        </div>
                        <div class="desc-pro-detail"></div>
                        <ul class="attr-pro-detail">
                            <li class="w-clear">
                                <label class="tensanpham attr-label-pro-detail">{{$sanPham->tensanpham}}</label>
                            </li>
                            <!-- <li class="w-clear">
						<label class="attr-label-pro-detail soluong" >Loại sản phẩm:</label>
						<div class="attr-content-pro-detail">
								<span class="giaban price-new-pro-detail"></span>
								<span class="price-old-pro-detail"></span>
						</div>
					</li> -->
                            <p class="freeship">
                                <i class="icon-freeship-truck"></i> <span>Miễn phí vận chuyển toàn quốc</span>
                            </p>
                            <div class="product-option color">
                                <strong class="label">Dung lượng và màu sắc</strong>
                                <div class="options" id="colorOptions" style="margin-top: 10px;">
                                    @foreach($mapping as $mp)
                                    <div class="item selected dungluong">
                                        <input type="radio" id="" name="cart_idmap" value="{{$mp->id}}" checked>
                                        <strong>{{$mp->mausac->tenmau}}</strong>/<strong>{{$mp->ram->soram}}G</strong>
                                        <div>
                                            <strong class="giaban">{{$mp->giamoi}}₫</strong>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="buttons_added">
                                <strong>Số lượng: </strong>
                                <span class="minus is-form">-</span>
                                <input aria-label="quantity" class="input-qty" max="999" min="1" name="soluong"
                                    type="number" value="1">
                                <span class="plus is-form">+</span>
                            </div>
                            <div class="flex">
                                @if($datauser!=null)
                                <input type="hidden" id="" class="id_user" name="id_user" value="{{$datauser->id}}">
                                @endif

                                <button class="btn-giohang add-to-cart" tyle="submit" name="" type="submit">
                                    <span>Thêm vào giỏ hàng</span>
                                </button>

                            </div>
                        </ul>
                    </div>
                    <div class="col-xl-6">

                        <div class="specs-special">
                            <h3>Thông số kĩ thuật</h3>
                            <ol>
                                <li>
                                    <strong>Màn hình: </strong>
                                    <span>{{$sanPham->manhinh->thongso}}</span>
                                </li>
                                <li>
                                    <strong>Camera: </strong>
                                    <span>{{$sanPham->camera->tencamera}}</span>
                                </li>
                                <li>
                                    <strong>Hệ điều hành: </strong>
                                    <span>{{$sanPham->hedieuhanh->tenhedieuhanh}}</span>
                                </li>
                                <li>
                                    <strong>Hiệu năng pin:</strong>
                                    <span>{{$sanPham->hieunangpin->tenhieunang}}</span>
                                </li>
                                <li>
                                    <strong>Tính năng đặc biệt: </strong>
                                    <span>{{$sanPham->tinhnangdb->tentinhnang}}</span>
                                </li>
                                <li>
                                    <strong>Thiết kế: </strong>
                                    <span>{{$sanPham->thietke->ten}}</span>
                                </li>
                                <li>
                                    <strong>Loại: </strong>
                                    <span>{{$sanPham->loaisanpham->tenloaisp}}</span>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tabs-pro-detail center-layout">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home"
                        type="button" role="tab" aria-controls="home" aria-selected="true">Thông tin sản phẩm</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile"
                        type="button" role="tab" aria-controls="profile" aria-selected="false">Bình luận</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="raiting-tab" data-bs-toggle="tab" data-bs-target="#raiting"
                        type="button" role="tab" aria-controls="raiting" aria-selected="false">Đánh giá</button>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    {{$sanPham->mota}}</div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <div id="fb-root"></div>
                    <script async defer crossorigin="anonymous"
                        src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v14.0" nonce="CjbcdpFc"></script>
                    <div class="fb-comments" data-href="{{route('loadding.detail',[$sanPham->id])}}" data-width=""
                        data-numposts="10"></div>
                </div>
                <div class="tab-pane fade" id="raiting" role="tabpanel" aria-labelledby="raiting-tab">
                    @if(Illuminate\Support\Facades\Auth::check())
                    @if($checkrating === 1)
                    <ul class="" title="Average-Rating" style="display: flex;">
                        @for($count = 1; $count <=5; $count ++) @php if($count <=$rating) { $color='color:#ffcc00;' ; }
                            else{ $color='color:#ccc;' ; } @endphp <li title=" Đánh giá sao"
                            id="{{$sanPham->id}}-{{$count}}" data-index="{{$count}}" data-id_sanpham="{{$sanPham->id}}"
                            data-rating="{{$rating}}" class="rating"
                            style="cursor:pointer; {{$color}}; font-size:50px;">&#9733;
                            </li>
                            @endfor
                            @if($datauser != null)
                            <input type="hidden" value="{{$datauser->id}}" name="datauser" id="datauser">
                            @endif

                            <div class="thongkesao" style="margin-left: 30px;">
                                <div class="side">
                                    <div>5 star</div>
                                </div>
                                <div class="middle">
                                    <div class="bar-container">
                                        <div class="bar-5" style="width:{{$avg5star}}px"></div>
                                    </div>
                                </div>
                                <div class="side right">
                                    <div>{{$rating5star}}</div>
                                </div>
                                <div class="side">
                                    <div>4 star</div>
                                </div>
                                <div class="middle">
                                    <div class="bar-container">
                                        <div class="bar-4" style="width:{{$avg4star}}px"></div>
                                    </div>
                                </div>
                                <div class="side right">
                                    <div>{{$rating4star}}</div>
                                </div>
                                <div class="side">
                                    <div>3 star</div>
                                </div>
                                <div class="middle">
                                    <div class="bar-container">
                                        <div class="bar-3" style="width:{{$avg3star}}px"></div>
                                    </div>
                                </div>
                                <div class="side right">
                                    <div>{{$rating3star}}</div>
                                </div>
                                <div class="side">
                                    <div>2 star</div>
                                </div>
                                <div class="middle">
                                    <div class="bar-container">
                                        <div class="bar-2" style="width:{{$avg2star}}px"></div>
                                    </div>
                                </div>
                                <div class="side right">
                                    <div>{{$rating3star}}</div>
                                </div>
                                <div class="side">
                                    <div>1 star</div>
                                </div>
                                <div class="middle">
                                    <div class="bar-container">
                                        <div class="bar-1" style="width:{{$avg1star}}px"></div>
                                    </div>
                                </div>
                                <div class="side right">
                                    <div>{{$rating1star}}</div>
                                </div>
                            </div>
                    </ul>

                    @else
                    <ul class="" title="Average-Rating" style="display: flex;">
                        @for($count = 1; $count <=5; $count ++) @php if($count <=$rating) { $color='color:#ffcc00;' ; }
                            else{ $color='color:#ccc;' ; } @endphp <li title=" Đánh giá sao"
                            id="{{$sanPham->id}}-{{$count}}" data-index="{{$count}}" data-id_sanpham="{{$sanPham->id}}"
                            data-rating="{{$rating}}" class="" style="cursor:pointer; {{$color}}; font-size:50px;">
                            &#9733;
                            </li>
                            @endfor
                            @if($datauser != null)
                            <input type="hidden" value="{{$datauser->id}}" name="datauser" id="datauser">
                            @endif
                            <div class="thongkesao" style="margin-left: 30px;">
                                <div class="side">
                                    <div>5 star</div>
                                </div>
                                <div class="middle">
                                    <div class="bar-container">
                                        <div class="bar-5" style="width:{{$avg5star}}px"></div>
                                    </div>
                                </div>
                                <div class="side right">
                                    <div>{{$rating5star}}</div>
                                </div>
                                <div class="side">
                                    <div>4 star</div>
                                </div>
                                <div class="middle">
                                    <div class="bar-container">
                                        <div class="bar-4" style="width:{{$avg4star}}px"></div>
                                    </div>
                                </div>
                                <div class="side right">
                                    <div>{{$rating4star}}</div>
                                </div>
                                <div class="side">
                                    <div>3 star</div>
                                </div>
                                <div class="middle">
                                    <div class="bar-container">
                                        <div class="bar-3" style="width:{{$avg3star}}px"></div>
                                    </div>
                                </div>
                                <div class="side right">
                                    <div>{{$rating3star}}</div>
                                </div>
                                <div class="side">
                                    <div>2 star</div>
                                </div>
                                <div class="middle">
                                    <div class="bar-container">
                                        <div class="bar-2" style="width:{{$avg2star}}px"></div>
                                    </div>
                                </div>
                                <div class="side right">
                                    <div>{{$rating3star}}</div>
                                </div>
                                <div class="side">
                                    <div>1 star</div>
                                </div>
                                <div class="middle">
                                    <div class="bar-container">
                                        <div class="bar-1" style="width:{{$avg1star}}px"></div>
                                    </div>
                                </div>
                                <div class="side right">
                                    <div>{{$rating1star}}</div>
                                </div>
                            </div>

                    </ul>
                    <div class="alert-warning" style="padding: 20px 0px;text-align: center;"> Vui lòng đăng nhập và mua
                        hàng để có thể đánh giá sản phẩm này!</div>
                    @endif

                    @endif
                </div>
            </div>
        </div>
</form>
<div class="sanphamlienquan">
    <div class="center-layout">
        <div class="center">
            <div class="title-name">SẢN PHẨM CÙNG LOẠI</div>
        </div>
        <div class="list-item-sanpham">
            @foreach($spcungloai as $sp)
            <div class="item-sanpham">
                <div class="img"><a class="scale-img" href="{{route('loadding.detail',[$sp->id])}}"><img
                            src="/storage/{{$sp->hinhanh}}"></a></div>
                <div class=" noidung">
                    <div class="ten"><a href="{{route('loadding.detail',[$sp->id])}}"
                            class="text-split">{{$sp->tensanpham}}</a></div>
                    <div class="tt-gia">
                        <div class="gia">{{$sp->giamin}}đ - {{$sp->giamax}}đ</div>
                    </div>
                    <div class="mota">
                        <ul>
                            <li><span class="text-split">Màn hình:</span> {{$sp->manhinh->thongso}}</li>
                            <li><span class="">Hệ điều hành:</span> {{$sp->hedieuhanh->tenhedieuhanh}}</li>
                            <li><span class="">Camera:</span> {{$sp->camera->tencamera}}</li>
                            <li class="lst-item"><span>Pin:{{$sp->hieunangpin->tenhieunang}}</span> </li>
                        </ul>
                    </div>
                </div>
                <div class="promote">
                    <a href="{{route('loadding.detail',[$sp->id])}}">
                        <div class="mota-sampham">{{$sp->mota}}</div>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<hr>
<!-- phan trang -->
<div class="search" style="margin: auto;">
    {{$spcungloai->appends(request()->all())->links()}}
</div>
@endsection
@section('Them')
@endsection