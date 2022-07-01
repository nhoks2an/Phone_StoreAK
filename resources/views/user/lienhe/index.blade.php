@extends('user.index')
@section('sidebar')
@parent
<div class="bg-container">
    <div class="lienhe">
        <div class="center-layout">
            <div class="row">
                <div class="contact-text col-lg-6">
                </div>
                <form class="contact-form validation-contact col-lg-6" novalidate method="post" action=""
                    enctype="multipart/form-data">
                    <div class="form-row">
                        <div class="contact-input col-sm-12">
                            <input type="text" class="form-control text-sm" id="fullname-contact"
                                placeholder="Nhập họ tên" />
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="contact-input col-sm-12">
                            <input type="text" class="form-control text-sm" id="address-contact"
                                placeholder="Nhập địa chỉ" />
                        </div>
                        <div class="contact-input col-sm-12">
                            <input type="email" class="form-control text-sm" id="email-contact"
                                placeholder="Nhập email" />
                        </div>
                    </div>
                    <div class="contact-input">
                        <textarea class="form-control text-sm" id="content-contact"
                            placeholder="Nhập nội dung"></textarea>
                    </div>
                    <input type="submit" class="btn btn-primary mr-2" name="submit-contact" value="Gửi" disabled />
                    <input type="reset" class="btn btn-secondary" value="Nhập lại" />
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
@section('Them')
@endsection