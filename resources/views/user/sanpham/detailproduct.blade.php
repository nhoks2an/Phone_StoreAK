@extends('user.index')
@section('sidebar')
    @parent
<div class="grid-pro-detail w-clear">
    <div class="row">
    <div class="left-pro-detail col-xl-4">
<ul id="etalage">
	@foreach($lsthinhanh as $hinhanh)
	<li>
		<img class="etalage_source_image" src="{{$hinhanh->hinhanh}}" class="img-responsive" />
	</li>
	@endforeach
</ul>
    </div>
    <div class="right-pro-detail col-xl-7">
		<div class="row">
			<div class="col-xl-8">
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
							<form method="post" action="{{route('loadding.loadmau',[$mp->id_ram])}}"class="item selected dungluong">
								@csrf
								<input type="hidden" id="" name="id_ramm" value="{{$mp->id_ram}}">
								<button  type="submit">
								<strong>{{$mp->mausac->tenmau}}</strong>/<strong>{{$mp->ram->soram}}G</strong>
									<div>
									<strong class="giaban">{{$mp->giacu}}₫</strong>
									</div>
								</button>
							</form>	
								@endforeach
						</div>
					</div>
					<div >
						<button class="btn-giohang" tyle="submit" style="margin-top:10px">
							<span href="#">Thêm vào giỏ hàng</span>
						</button>
					</div>
				</ul>  
			</div>
			<div class="col-xl-5">
				<h3>Thông số kỹ thuật Samsung Galaxy S22 Ultra - 12GB/256GB - Chính hãng</h3>
				<div class="specs-special">
						<ol>
							<li>
								<strong>Dung lượng pin:</strong>
								<span>5000 mAh</span>
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
        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Thông tin sản phẩm</button>
    </li>
    <li class="nav-item" role="presentation">
        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Bình luận</button>
    </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">{{$sanPham->mota}}</div>
  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">Bình luận</div>
</div>
</div>
</div>

<div class="sanphamlienquan">
    <div class="center-layout">
        <div class="center"><div class="title-name">SẢN PHẨM CÙNG LOẠI</div></div>
        <div class="list-item">
        <div class="item">
			<div class="img"><a class="scale-img" href=""><img src="images/oppoa5.jpg"></a></div>
			<div class="noidung">
				<div class="ten"><a href="">Điện thoại OPPO A5</a></div>
				<div class="tt-gia">
					<div class="gia"><span>5000000đ</span></div>
					<div class="giacu">10000000đ</div>
				</div>
			</div>
		</div>
        <div class="item">
			<div class="img"><a class="scale-img" href=""><img src="images/oppoa5.jpg"></a></div>
			<div class="noidung">
				<div class="ten"><a href="">Điện thoại OPPO A5</a></div>
				<div class="tt-gia">
					<div class="gia"><span>5000000đ</span></div>
					<div class="giacu">10000000đ</div>
				</div>
			</div>
		</div>
        <div class="item">
			<div class="img"><a class="scale-img" href=""><img src="images/oppoa5.jpg"></a></div>
			<div class="noidung">
				<div class="ten"><a href="">Điện thoại OPPO A5</a></div>
				<div class="tt-gia">
					<div class="gia"><span>5000000đ</span></div>
					<div class="giacu">10000000đ</div>
				</div>
			</div>
		</div>
        <div class="item">
			<div class="img"><a class="scale-img" href=""><img src="images/oppoa5.jpg"></a></div>
			<div class="noidung">
				<div class="ten"><a href="">Điện thoại OPPO A5</a></div>
				<div class="tt-gia">
					<div class="gia"><span>5000000đ</span></div>
					<div class="giacu">10000000đ</div>
				</div>
			</div>
		</div>
        <div class="item">
			<div class="img"><a class="scale-img" href=""><img src="images/oppoa5.jpg"></a></div>
			<div class="noidung">
				<div class="ten"><a href="">Điện thoại OPPO A5</a></div>
				<div class="tt-gia">
					<div class="gia"><span>5000000đ</span></div>
					<div class="giacu">10000000đ</div>
				</div>
			</div>
		</div>
        <div class="item">
			<div class="img"><a class="scale-img" href=""><img src="images/oppoa5.jpg"></a></div>
			<div class="noidung">
				<div class="ten"><a href="">Điện thoại OPPO A5</a></div>
				<div class="tt-gia">
					<div class="gia"><span>5000000đ</span></div>
					<div class="giacu">10000000đ</div>
				</div>
			</div>
		</div>
        <div class="item">
			<div class="img"><a class="scale-img" href=""><img src="images/oppoa5.jpg"></a></div>
			<div class="noidung">
				<div class="ten"><a href="">Điện thoại OPPO A5</a></div>
				<div class="tt-gia">
					<div class="gia"><span>5000000đ</span></div>
					<div class="giacu">10000000đ</div>
				</div>
			</div>
		</div>

    </div>
    </div>
</div>
@endsection
@section('Them')
@endsection   