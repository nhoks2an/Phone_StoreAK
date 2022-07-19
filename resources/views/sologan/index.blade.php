@extends('layout.layout')
@section('sidebar')
@parent
<form class="validation-form" novalidate="" method="post" action="{{route('sologan.update',['sologan'=>$sologan])}}"
    enctype="multipart/form-data">
    @csrf
    @method('PATCH')
    <div class="card-footer text-sm sticky-top">
        <button type="submit" class="btn btn-sm bg-gradient-primary submit-check"><i
                class="far fa-save mr-2"></i>Lưu</button>
        <button type="reset" class="btn btn-sm bg-gradient-secondary"><i class="fas fa-redo mr-2"></i>Làm lại</button>
    </div>


    <div class="row">
        <div class="col-12">
            <div class="card card-primary card-outline text-sm">
                <div class="card-header">
                    <h3 class="card-title">Nội dung Slogan</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                class="fas fa-minus"></i></button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <div class="form-group d-inline-block mb-2 mr-2">
                            <label for="hienthi-checkbox" class="d-inline-block align-middle mb-0 mr-2">Hiển
                                thị:</label>
                            <div class="custom-control custom-checkbox d-inline-block align-middle">
                                <input type="checkbox" class="custom-control-input hienthi-checkbox"
                                    name="status[hienthi]" id="hienthi-checkbox" checked="" value="hienthi">
                                <label for="hienthi-checkbox" class="custom-control-label"></label>
                            </div>
                        </div>
                    </div>
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
                                        <label for="namevi">Tiêu đề:</label>
                                        <input type="text" class="form-control for-seo text-sm" name="tieude"
                                            id="namevi" placeholder="Tiêu đề" value="{{$sologan->tieude}}">
                                            @if($errors->has('tieude'))
                                            <div class="alert alert-danger" style="margin-top:10px;">
                                                {{$errors->first('tieude')}}
                                            </div>
                                            @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-none">
        </div>
    </div>
    <input type="hidden" name="hash" value="vZeTxjelfE">
</form>
<hr>
<div class="thong-bao">
    @if(session('message'))
    <span class="alert alert-success">
        <strong>{{session('message')}}</strong>
    </span>
    @endif
</div>
</section>
@section('scripts')
<script>
	$(document).on('click', '.btnxoa', function() {
        $('#ThietKeModal').modal({
            show: true
        });
        var thietke_id = $(this).val();
        $('#thietke').val(thietke_id);
        
	});
</script>
@endsection
@section('Them')
@endsection
@endsection