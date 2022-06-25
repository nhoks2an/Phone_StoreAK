@extends('layout.layout')
@section('sidebar')
    @parent
<form method="post" action="{{route('thietke.store')}}" enctype="multipart/form-data">
@csrf
<div class="btn-themmoi">
    <button class="btn btn-sm bg-gradient-primary submit-check" type="submit">
        <i class="far fa-save mr-2"></i>
        Thêm mới
    </button>
   
    <button class="btn btn-sm bg-gradient-secondary" type="reset">
        <i class="fas fa-redo mr-2""></i>
        Làm lại
    </button>
    <a href="#" class="btn btn-sm bg-gradient-danger">
        <i class="fas fa-sign-out-alt mr-2"></i>
        Thoát
    </a>  
</div>

<div class="row">
    <div class="col-xl-12">
        <div class="card card-primary card-outline text-sm ">
            <div class="card-header">
                <h3 class="card-title">Thiết kế</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                </div>
            </div>
            <div class="card-body">
                <div class="card card-primary card-outline card-outline-tabs">
                    <div class="card-header p-0 border-bottom-0">
                        <ul class="nav nav-tabs" id="custom-tabs-three-tab-lang" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="tabs-lang" data-toggle="pill" href="#tabs-lang-vi" role="tab" aria-controls="tabs-lang-vi" aria-selected="true">Tiếng Việt</a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body card-article">
                        <div class="tab-content" id="custom-tabs-three-tabContent-lang">
                            <div class="tab-pane fade show active" id="tabs-lang-vi" role="tabpanel" aria-labelledby="tabs-lang">
                                <div class="form-group">
                                    <label for="namevi"> Thiết kế:</label>
                                    <input type="text" class="form-control for-seo text-sm" name="ten"  placeholder="Thiết kế" value="">
                                    @if($errors->has('ten'))
                                        <div class="alert alert-danger" style="margin-top:10px;">
                                            {{$errors->first('ten')}}
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
</div>
</form>
@section('Them')
@endsection
@endsection






