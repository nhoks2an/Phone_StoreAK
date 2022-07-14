@extends('user.index')
@section('sidebar')
@parent
<?php 
?>
<div class="bg-container">
    <div class="wrap-main w-clear">
        @foreach($gioithieu as $gt)
        <div class="title-lienhe"><span class="title-name">{{$gt->tieude}}</span>
            <p class="tilte-dichvu2"></p>
        </div>
        <div class=" w-clear">
            <?php echo htmlspecialchars_decode($gt->noidung); ?>
        </div>
        @endforeach
    </div>
</div>
@endsection
@section('Them')
@endsection