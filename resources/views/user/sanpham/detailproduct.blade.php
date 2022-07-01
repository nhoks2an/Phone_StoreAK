@extends('user.index')
@section('sidebar')
    @parent
<div class="grid-pro-detail w-clear">
    <div class="row">
    <div class="left-pro-detail col-md-6 col-lg-5 mb-4">
<ul id="etalage">
        <li>
        <img class="etalage_source_image" src="../images/oppoa5.jpg" class="img-responsive" />
        </li>
        <li>
        <img class="etalage_source_image" src="../images/oppoa5.jpg" class="img-responsive" />
        </li>
        <li>
        <img class="etalage_source_image" src="../images/oppoa5.jpg" class="img-responsive" />
        </li>
        <li>
        <img class="etalage_source_image" src="../images/logo.png" class="img-responsive" />
        </li>
</ul>
    </div>
    <div class="right-pro-detail col-md-6 col-lg-7 mb-4">
        <p class="title-pro-detail mb-2"></p>
        
        <div class="social-plugin social-plugin-pro-detail w-clear">
        </div>
        <div class="desc-pro-detail"></div>
        <ul class="attr-pro-detail">
          
                <li class="w-clear"> 
                    <label class="attr-label-pro-detail">Mã:</label>
                    <div class="attr-content-pro-detail">555</div>
                </li>

            
            <li class="w-clear">
                <label class="attr-label-pro-detail">Giá:</label>
                <div class="attr-content-pro-detail">
                        <span class="price-new-pro-detail">55555555đ</span>
                        <span class="price-old-pro-detail">999999999đ</span>
                </div>
            </li>
        </ul>        
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
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">Lorem Ipsum chỉ đơn giản là một đoạn văn bản giả, được dùng vào việc trình bày và dàn trang phục vụ cho in ấn. Lorem Ipsum đã được sử dụng như một văn bản chuẩn cho ngành công nghiệp in ấn từ những năm 1500, khi một họa sĩ vô danh ghép nhiều đoạn văn bản với nhau để tạo thành một bản mẫu văn bản. Đoạn văn bản này không những đã tồn tại năm thế kỉ, mà khi được áp dụng vào tin học văn phòng, nội dung của nó vẫn không hề bị thay đổi. Nó đã được phổ biến trong những năm 1960 nhờ việc bán những bản giấy Letraset in những đoạn Lorem Ipsum, và gần đây hơn, được sử dụng trong các ứng dụng dàn trang, như Aldus PageMaker.</div>
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