@extends('user.index')
@section('sidebar')
@parent
<div class="bg-container">
    <div class="title-lienhe"><span class="title-name">Liên Hệ</span>
        <p class="tilte-dichvu2"></p>
    </div>
    <div class="lienhe">
        <div class="center-layout">
            <div class="row">
                <div class="contact-text col-lg-6">
                    <div> <?php echo htmlspecialchars_decode($lh->noidung); ?></div>
                </div>
                <form class="contact-form validation-contact col-lg-6" novalidate method="post"
                    action="{{route('lienhe.create')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="">
                        <div class="contact-input col-sm-12">
                            <input type="text" class="form-control text-sm" id="fullname-contact" name="hoten"
                                value="{{old('hoten')}}" placeholder="Nhập họ tên" />
                        </div>
                        @if($errors->has('hoten'))
                        <div class="alert alert-danger" style="margin-top:10px;">
                            {{$errors->first('hoten')}}
                        </div>
                        @endif
                    </div>
                    <div class="">
                        <div class="contact-input col-sm-12">
                            <input type="text" class="form-control text-sm" id="address-contact" name="sodienthoai"
                                value="{{old('sodienthoai')}}" placeholder="Nhập số điện thoại" />
                        </div>
                        @if($errors->has('sodienthoai'))
                        <div class="alert alert-danger" style="margin-top:10px;">
                            {{$errors->first('sodienthoai')}}
                        </div>
                        @endif
                        <div class="contact-input col-sm-12">
                            <input type="email" class="form-control text-sm" id="email-contact" name="email"
                                value="{{old('email')}}" placeholder="Nhập email" />
                        </div>
                        @if($errors->has('email'))
                        <div class="alert alert-danger" style="margin-top:10px;">
                            {{$errors->first('email')}}
                        </div>
                        @endif
                    </div>
                    <div class="contact-input">
                        <textarea class="form-control text-sm" id="content-contact" name="noidung"
                            value="{{old('noidung')}}" placeholder="Nhập nội dung"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Gửi</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
@section('Them')
@endsection