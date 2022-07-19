@extends('user.index')
@section('sidebar')
@parent
<?php 
?>
<div class="bg-container">
<div class="wrap-main w-clear">
    <div class="title-lienhe"><span>{{$tintuc->tieude}}</span></div>
    <div class=" w-clear">
        {{$tintuc->noidung}}
    </div>
</div>

@endsection
@section('Them')
@endsection