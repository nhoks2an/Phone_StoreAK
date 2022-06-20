@extends('layout.layout')
@section('sidebar')
    @parent
<section class="content">
    <form class="validation-form" novalidate="" method="post" action="index.php?com=photo&amp;act=save_photo&amp;type=slide" enctype="multipart/form-data">
        <div class="card-footer text-sm sticky-top">
            <button type="submit" class="btn btn-sm bg-gradient-primary submit-check"><i class="far fa-save mr-2"></i>Lưu</button>
            <button type="reset" class="btn btn-sm bg-gradient-secondary"><i class="fas fa-redo mr-2"></i>Làm lại</button>
            <a class="btn btn-sm bg-gradient-danger" href="index.php?com=photo&amp;act=man_photo&amp;type=slide" title="Thoát"><i class="fas fa-sign-out-alt mr-2"></i>Thoát</a>
        </div>

		<div class="card card-primary card-outline text-sm">
			<div class="card-header">
				<h3 class="card-title">Slideshow: 1</h3>
				<div class="card-tools">
					<button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
				</div>
			</div>
	    <div class="card-body">
			<div class="form-group">
	            <div class="upload-file">
					<p>Upload hình ảnh:</p>
					<label class="upload-file-label mb-2" for="file0">
						<div class="upload-file-image rounded mb-3">
							<img class="rounded img-upload" onerror="this.src='http://localhost/VuVanQuan_0480522W/thumbs/250x250x1/assets/images/noimage.png';" src="http://localhost/VuVanQuan_0480522W/assets/images/noimage.png" alt="No Image">	                    			</div>
						<div class="custom-file my-custom-file">
							<input type="file" class="custom-file-input" name="file0" id="file0" lang="vi">
							<label class="custom-file-label mb-0" data-browse="Chọn" for="file0">Chọn file</label>
						</div>
					</label>
					<strong class="d-block text-sm">Width: 1366 px - Height: 489 px (.jpg|.gif|.png|.jpeg|.gif)</strong>
				</div>
			</div>
	    <div class="form-group">
			<label for="link0">Link:</label>
			<input type="text" class="form-control text-sm" name="dataMulti[0][link]" id="link0" placeholder="Link" value="">
		</div>
		<div class="form-group">
			<div class="form-group d-inline-block mb-2 mr-2">
				<label for="hienthi-checkbox0" class="d-inline-block align-middle mb-0 mr-2">Hiển thị:</label>
				<div class="custom-control custom-checkbox d-inline-block align-middle">
					<input type="checkbox" class="custom-control-input hienthi-checkbox0" name="dataMulti[0][status][]" id="hienthi-checkbox0" value="hienthi" checked="">
					<label for="hienthi-checkbox0" class="custom-control-label"></label>
				</div>
			</div>
		</div>
		<div class="form-group">
			<label for="numb0" class="d-inline-block align-middle mb-0 mr-2">Số thứ tự:</label>
			<input type="number" class="form-control form-control-mini d-inline-block align-middle text-sm" min="0" name="dataMulti[0][numb]" id="numb0" placeholder="Số thứ tự" value="1">
		</div>
		<div class="card card-primary card-outline card-outline-tabs">
		<div class="card-header p-0 border-bottom-0">
			<ul class="nav nav-tabs" id="custom-tabs-three-tab-lang" role="tablist">
				<li class="nav-item">
					<a class="nav-link active" id="tabs-lang" data-toggle="pill" href="#tabs-lang-vi-0" role="tab" aria-controls="tabs-lang-vi-0" aria-selected="true">Tiếng Việt</a>
				</li>
			</ul>
		</div>
		<div class="card-body">
		    <div class="tab-content" id="custom-tabs-three-tabContent-lang">
		        <div class="tab-pane fade show active" id="tabs-lang-vi-0" role="tabpanel" aria-labelledby="tabs-lang">
		            <div class="form-group">
						<label for="namevi0">Tiêu đề (vi):</label>
						<input type="text" class="form-control text-sm" name="dataMulti[0][namevi]" id="namevi0" placeholder="Tiêu đề (vi)" value="">
		            </div>
				 </div>
		    </div>
		        	</div>
		        </div>
		    </div>
	    </div>
		<div class="card card-primary card-outline text-sm">
	        <div class="card-header">
				<h3 class="card-title">Slideshow: 2</h3>
				<div class="card-tools">
					<button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
				</div>
			</div>
	    <div class="card-body">
			<div class="form-group">
	                    	<div class="upload-file">
	                    		<p>Upload hình ảnh:</p>
	                    		<label class="upload-file-label mb-2" for="file1">
	                    			<div class="upload-file-image rounded mb-3">
	                    				<img class="rounded img-upload" onerror="this.src='http://localhost/VuVanQuan_0480522W/thumbs/250x250x1/assets/images/noimage.png';" src="http://localhost/VuVanQuan_0480522W/assets/images/noimage.png" alt="No Image">	                    			</div>
	                    			<div class="custom-file my-custom-file">
	                    				<input type="file" class="custom-file-input" name="file1" id="file1" lang="vi">
	                    				<label class="custom-file-label mb-0" data-browse="Chọn" for="file1">Chọn file</label>
	                    			</div>
	                    		</label>
	                    		<strong class="d-block text-sm">Width: 1366 px - Height: 489 px (.jpg|.gif|.png|.jpeg|.gif)</strong>
	                    	</div>
	                    </div>
	                	                		                <div class="form-group">
		                    <label for="link1">Link:</label>
		                    <input type="text" class="form-control text-sm" name="dataMulti[1][link]" id="link1" placeholder="Link" value="">
		                </div>
		            		            	                <div class="form-group">
					    					        <div class="form-group d-inline-block mb-2 mr-2">
					            <label for="hienthi-checkbox1" class="d-inline-block align-middle mb-0 mr-2">Hiển thị:</label>
					            <div class="custom-control custom-checkbox d-inline-block align-middle">
					                <input type="checkbox" class="custom-control-input hienthi-checkbox1" name="dataMulti[1][status][]" id="hienthi-checkbox1" value="hienthi" checked="">
					                <label for="hienthi-checkbox1" class="custom-control-label"></label>
					            </div>
					        </div>
					    					</div>
	                <div class="form-group">
						<label for="numb1" class="d-inline-block align-middle mb-0 mr-2">Số thứ tự:</label>
						<input type="number" class="form-control form-control-mini d-inline-block align-middle text-sm" min="0" name="dataMulti[1][numb]" id="numb1" placeholder="Số thứ tự" value="1">
					</div>
		            		                <div class="card card-primary card-outline card-outline-tabs">
		                    <div class="card-header p-0 border-bottom-0">
		                        <ul class="nav nav-tabs" id="custom-tabs-three-tab-lang" role="tablist">
		                            		                                <li class="nav-item">
		                                    <a class="nav-link active" id="tabs-lang" data-toggle="pill" href="#tabs-lang-vi-1" role="tab" aria-controls="tabs-lang-vi-1" aria-selected="true">Tiếng Việt</a>
		                                </li>
		                            		                        </ul>
		                    </div>
		                    <div class="card-body">
		                        <div class="tab-content" id="custom-tabs-three-tabContent-lang">
		                            		                                <div class="tab-pane fade show active" id="tabs-lang-vi-1" role="tabpanel" aria-labelledby="tabs-lang">
		                                    		                                        <div class="form-group">
		                                            <label for="namevi1">Tiêu đề (vi):</label>
		                                            <input type="text" class="form-control text-sm" name="dataMulti[1][namevi]" id="namevi1" placeholder="Tiêu đề (vi)" value="">
		                                        </div>
		                                    		                                    		                                    		                                </div>
		                            		                        </div>
		                    </div>
		                </div>
		            	            </div>
	        </div>
		        <div class="card-footer text-sm">
            <button type="submit" class="btn btn-sm bg-gradient-primary submit-check"><i class="far fa-save mr-2"></i>Lưu</button>
            <button type="reset" class="btn btn-sm bg-gradient-secondary"><i class="fas fa-redo mr-2"></i>Làm lại</button>
            <a class="btn btn-sm bg-gradient-danger" href="index.php?com=photo&amp;act=man_photo&amp;type=slide" title="Thoát"><i class="fas fa-sign-out-alt mr-2"></i>Thoát</a>
        </div>
    <input type="hidden" name="hash" value="WxTnbMcRR6"></form>
</section>
@section('Them')
@endsection
@endsection