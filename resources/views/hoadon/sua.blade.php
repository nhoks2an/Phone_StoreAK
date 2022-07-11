@extends('layout.layout')
@section('sidebar')
@parent
<form method="post" action="{{route('hoadon.duyet')}}" enctype="multipart/form-data">
    @csrf
    <div class="">
        <input type="hidden" value="{{$hoadon->id}}" name="id_hd">
        <div class="card-footer text-sm sticky-top">
            <button type="submit" class="btn btn-sm bg-gradient-primary submit-check"><i
                    class="far fa-save mr-2"></i>Lưu</button>
            <a class="btn btn-sm bg-gradient-danger" href="index.php?com=news&amp;act=man&amp;type=tin-tuc"
                title="Thoát"><i class="fas fa-sign-out-alt mr-2"></i>Thoát</a>
        </div>
        <div class="card card-primary card-outline text-sm">
            <div class="card-header">
                <h3 class="card-title">Nội dung hoá đơn</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                            class="fas fa-minus"></i></button>
                </div>
            </div>
            <div class="card-body">
                <div class="card card-primary card-outline card-outline-tabs">
                    <div class="card-header p-0 border-bottom-0">
                        <ul class="nav nav-tabs" id="custom-tabs-three-tab-lang" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="tabs-lang" data-toggle="pill" href="#tabs-lang-vi"
                                    role="tab" aria-controls="tabs-lang-vi" aria-selected="true">Tiếng Việt</a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body card-article">
                        <div class="tab-content" id="custom-tabs-three-tabContent-lang">
                            <div class="tab-pane fade show active" id="tabs-lang-vi" role="tabpanel"
                                aria-labelledby="tabs-lang">
                                <div class="form-group">
                                    <label for="namevi">Mã khách hàng:</label>
                                    <input type="text" class="form-control for-seo text-sm" id="namevi" placeholder=""
                                        value="{{$hoadon->id}}">
                                </div>
                                <div class="form-group">
                                    <label for="namevi">Địa chỉ:</label>
                                    <input type="text" class="form-control for-seo text-sm" id="namevi" placeholder=""
                                        value="{{$hoadon->diachi}}">
                                </div>
                                <div class="form-group">
                                    <label for="namevi">Số điện thoại</label>
                                    <input type="text" class="form-control for-seo text-sm" id="namevi" placeholder=""
                                        value="{{$hoadon->sodienthoai}}">
                                </div>
                                <div class="form-group">
                                    <label for="namevi">Tổng tiền:</label>
                                    <input type="text" class="form-control for-seo text-sm" id="namevi" placeholder=""
                                        value="{{$hoadon->tongtien}}">
                                </div>
                                <div class="form-group">
                                    <label for="namevi">Mã thành phố/tỉnh:</label>
                                    <input type="text" class="form-control for-seo text-sm" id="namevi" placeholder=""
                                        value="{{$hoadon->id_thanhpho}}">
                                </div>
                                <div class="form-group">
                                    <label for="namevi">Mã quận/huyện:</label>
                                    <input type="text" class="form-control for-seo text-sm" id="namevi" placeholder=""
                                        value="{{$hoadon->id_quan}}">
                                </div>
                                <div class="form-group">
                                    <label for="namevi">Mã phường/xã:</label>
                                    <input type="text" class="form-control for-seo text-sm" id="namevi" placeholder=""
                                        value="{{$hoadon->id_phuong}}">
                                </div>
                                <div class="form-group-category row">
                                    <div class="form-group col-xl-6 col-sm-4">
                                        <label class="d-block" for="id_list">Trạng thái:</label>
                                        <select name="trangthaihd"
                                            class="form-control select2 select-category select2-hidden-accessible">
                                            <option>{{$hoadon->trangthaihd->tentrangthai}}</option>
                                            @foreach($trangthaihd as $tt)
                                            <option value="{{$tt->id}}">{{$tt->tentrangthai}}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</form>
@section('Them')
@endsection
@endsection