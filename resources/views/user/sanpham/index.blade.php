@extends('user.index')
@section('sidebar')
@parent
<div class=" wrap-main w-clear">
    <div class="content-main row">
        @foreach($lsttt as $tt)
        <div class="news col-md-6">
            <div class="row">
                <a class="news-image col-sm-5" href="make-up-co-dau-ee" title="Make up Cô Dâu ee">
                    <span class="scale-img">
                        <img class="lazy w-100 loaded" style="height:160px;" src="{{$tt->hinhanh}}"
                            data-was-processed="true"></span>
                </a>
                <div class="news-info col-sm-7">
                    <h3 class="news-name">
                        <a class="text-decoration-none text-split transition" href="make-up-co-dau-ee"
                            title="Make up Cô Dâu ee">{{$tt->tieude}}</a>
                    </h3>
                    <p class="news-time">Ngày đăng: 19/04/2022 03:54 PM</p>
                    <div class="news-desc text-split">{{$tt->mota}}</div>
                </div>
            </div>
        </div>
        @endforeach
        <div class="clear"></div>
        <div class="col-12">
            <div class="pagination-home w-100"></div>
        </div>
    </div>
</div>
@endsection
@section('Them')
@endsection