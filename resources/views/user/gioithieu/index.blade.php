@extends('user.index')
@section('sidebar')
@parent
<?php 
?>
<div class="bg-container">
<div class="wrap-main w-clear">
    @foreach($gioithieu as $gt)
    <div class="title-lienhe"><span>{{$gt->tieude}}</span> @foreach($sologan as $slg)<p class="tilte-dichvu2">{{$slg->tieude}}</p>  @endforeach</div>
    <div class=" w-clear">
        {{$gt->noidung}}
    </div>
    @endforeach
</div>
</div>
@endsection
@section('Them')
@endsection