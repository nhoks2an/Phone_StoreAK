@extends('layout.layout')
@section('sidebar')
@parent
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Thống kê</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Tạo báo cáo</a>
    </div>
    <!-- Content Row -->
    <div class="row">
        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <select class="doanhthuthang" name="doanhthuthang" id="doanhthuthang" onchange="thongkethang()">
                    <option value="">Chọn tháng</option>
                    <option value="Jan">Tháng 1</option>
                    <option value="Feb">Tháng 2</option>
                    <option value="Mar">Tháng 3</option>
                    <option value="Apr">Tháng 4</option>
                    <option value="May">Tháng 5</option>
                    <option value="Jun">Tháng 6</option>
                    <option value="Jul">Tháng 7</option>
                    <option value="Aug">Tháng 8</option>
                    <option value="Sep">Tháng 9</option>
                    <option value="Oct">Tháng 10</option>
                    <option value="Nov">Tháng 11</option>
                    <option value="Dec">Tháng 12</option>
                </select>
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Tông doanh thu Tháng</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800" id="dtthang">0VNĐ</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <select class="doanhthuthangthucte" name="doanhthuthangthucte" id="doanhthuthangthucte"
                    onchange="thongkethangthucte()">
                    <option value="">Chọn tháng</option>
                    <option value="Jan">Tháng 1</option>
                    <option value="Feb">Tháng 2</option>
                    <option value="Mar">Tháng 3</option>
                    <option value="Apr">Tháng 4</option>
                    <option value="May">Tháng 5</option>
                    <option value="Jun">Tháng 6</option>
                    <option value="Jul">Tháng 7</option>
                    <option value="Aug">Tháng 8</option>
                    <option value="Sep">Tháng 9</option>
                    <option value="Oct">Tháng 10</option>
                    <option value="Nov">Tháng 11</option>
                    <option value="Dec">Tháng 12</option>
                </select>
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Tổng doanh thu thực tế theo tháng</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800" id="dtthangtt">0VNĐ</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <select class="thongkehoadon" name="thongkehoadon" id="thongkehoadon" onchange="thongkehoadon()">
                    <option value="">Chọn năm</option>
                    @foreach($namhoadon as $year)
                    <option value="{{$year->namhd}}">Năm {{$year->namhd}}</option>
                    @endforeach
                </select>
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Tổng hợp hoá đơn của
                                năm
                            </div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto" id="hd">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800 text-font-hd ">Chưa
                                        duyệt:<span></span>
                                    </div>
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800 text-font-hd ">Đã
                                        duyệt:<span></span>
                                    </div>
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800 text-font-hd ">Đang
                                        giao:<span></span>
                                    </div>
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800 text-font-hd ">Đã
                                        giao:<span></span>
                                    </div>
                                </div>
                                <div class="col">
                                    <!-- <div class="progress progress-sm mr-2">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 50%"
                                            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <select class="thongkehoadon" name="thongkehoadon" id="thongkehoadon" onchange="" disabled>
                    <option value=""></option>
                </select>
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Sản phẩm bán chạy của
                                năm
                            </div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <?php $dem=1 ?>
                                    @foreach($sanpham as $sp)
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800 text-font-hd">Top
                                        {{$dem}}: Mã sản phẩm: {{$sp->id_sanpham}} <br> Mã mapping: {{$sp->id_map}} -
                                        Số
                                        lượng: {{$sp->tongsoluong}}
                                    </div>
                                    <?php $dem+=1 ?>
                                    @endforeach
                                </div>
                                <div class="col">
                                    <!-- <div class="progress progress-sm mr-2">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 50%"
                                            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div> -->

                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                Tổng doanh thu của năm</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{$tongdoanhthu}}VNĐ</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                Tổng doanh thu thực tế của năm</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{$tongdoanhthutt}}VNĐ</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Content Row -->
</div>
<!-- /.container-fluid -->
<script>
function thongkethang() {
    var thang = $('#doanhthuthang').val();
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        type: "GET",
        url: "{{ route('thongkethang') }}",
        data: {
            thang: thang
        },
        success: function(data) {
            console.log(data);
            $('#dtthang').html('');
            $('#dtthang').append(data);
        }
    })
};

function thongkethangthucte() {
    var thang = $('#doanhthuthangthucte').val();
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        type: "GET",
        url: "{{ route('thongkethangthucte') }}",
        data: {
            thang: thang
        },
        success: function(data) {
            console.log(data);
            $('#dtthangtt').html('');
            $('#dtthangtt').append(data);
        }
    })
};

function thongkehoadon() {
    var nam = $('#thongkehoadon').val();
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        type: "GET",
        url: "{{ route('thongkehoadon') }}",
        data: {
            nam: nam
        },
        success: function(data) {
            console.log(data);
            $('#hd').html('');
            $('#hd').append(data);
        }
    })
};
</script>
@section('Them')
@endsection
@endsection