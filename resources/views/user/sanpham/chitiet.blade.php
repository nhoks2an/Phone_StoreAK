@extends('user.index')
@section('sidebar')
@parent
<?php 
?>
<div class="bg-container">
<div class="wrap-main w-clear">
    <div class="title-lienhe"><span>{{$tintuc->tieude}}</span> <p class="tilte-dichvu2">{{$sologan->tieude}}</p></div>
    <div class=" w-clear">
        {{$tintuc->noidung}}
    </div>
</div>

@endsection
@section('Them')
@endsection