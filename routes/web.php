<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RAMController;
use App\Http\Controllers\ROMController;
use App\Http\Controllers\MauSacController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\GioiThieuController;
use App\Http\Controllers\TinTucController;
use App\Http\Controllers\ChinhSachController;
use App\Http\Controllers\ManHinhController;
use App\Http\Controllers\CameraController;
use App\Http\Controllers\HieuNangPinController;
use App\Http\Controllers\TinhNangDBController;
use App\Http\Controllers\HeDieuHanhController;
use App\Http\Controllers\ThietKeController;
use App\Http\Controllers\HangController;
use App\Http\Controllers\LoaiSanPhamController;
use App\Http\Controllers\SanPhamController;
use App\Http\Controllers\TaiKhoanController;
use App\Http\Controllers\SlideShowController;
use App\Http\Controllers\SologanController;
use Illuminate\Support\Facades\DB;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('user.index.index');
})->name('user');
Route::get('/sanpham', function () {
    return view('user.sanpham.index');
})->name('sanpham');
Route::get('/chitietsanpham', function () {
    return view('user.sanpham.detailproduct');
})->name('chitietsanpham');
Route::get('/lienhe', function () {
    return view('user.lienhe.index');
})->name('lienhe');
Route::get('/dangnhap', function () {
    return view('user.login.login');
})->name('dangnhap');
Route::get('/dangky', function () {
    return view('user.login.register');
})->name('dangky');
Route::get('/sanpham', function () {
    return view('user.sanpham.index');
})->name('sanpham');
Route::get('/giohang', function () {
    return view('user.cart.cart');
})->name('giohang');







Route::get('/admin/', function () {
    return view('dangnhap.index');
})->name('dangnhap');

Route::get('/admin/dashboard', function () {
    return view('dashboard.index');
})->name('dashboard');

// san pham




    // hoa don
Route::get('/admin/hoadon', function () {
    return view('hoadon.index');
    })->name('hoadon');
    
Route::get('/admin/cthoadon', function () {
    return view('cthoadon.index');
    })->name('cthoadon');

Route::get('/admin/sologan', function () {
    return view('sologan.index');
    })->name('sologan');
    
// Route::get('/admin/gioithieu', function () {
//     return view('gioithieu.index');
//     })->name('gioithieu');

Route::get('/admin/banner', function () {
    return view('banner.index');
    })->name('banner');

// Route::get('/admin/footer', function () {
//     return view('footer.index');
//     })->name('footer');
    
Route::get('/admin/logo', function () {
    return view('logo.index');
    })->name('logo');
    // slideshow
Route::get('/admin/slideshow', function () {
    return view('slideshow.index');
    })->name('slideshow');

Route::get('/admin/themowl', function () {
    return view('slideshow.them');
    })->name('themowl');

// Route::get('/admin/suaowl', function () {
//     return view('slideshow.sua');
//     })->name('suaowl');

Route::get('/admin/binhluan', function () {
    return view('binhluan.index');
    })->name('binhluan');
    // loai san pham
Route::get('/admin/loai', function () {
    return view('loai.index');
    })->name('loai');

Route::get('/admin/themloai', function () {
    return view('loai.them_loai');
    })->name('themloai');

Route::get('/admin/sualoai', function () {
    return view('loai.sua_loai');
    })->name('sualoai');
    //  dang nhap
Route::get('/admin/dangnhap', function () {
    return view('dangnhap.index');
    })->name('dangnhap');
    // ram
Route::resource('/RAM',RAMController::class);

Route::resource('/footer',FooterController::class);
Route::resource('/gioithieu',GioiThieuController::class);
Route::resource('/tinTuc',TinTucController::class);
Route::resource('/chinhSach',ChinhSachController::class);
Route::resource('/slideShow',SlideShowController::class);
Route::resource('/sologan',SologanController::class);
// Route::get('/admin/ram', function () {
//     return view('ram.index');
//     })->name('ram');

// Route::get('/admin/themram', function () {
//     return view('ram.them_ram');
//     })->name('themram');
        // rom
Route::get('/admin/rom', function () {
    return view('rom.index');
    })->name('rom');
Route::get('/admin/themrom', function () {
    return view('rom.them_rom');
    })->name('themrom');

Route::get('/admin/camera', function () {
    return view('camera.index');
    })->name('camera');
Route::get('/admin/themcamera', function () {
    return view('camera.them_camera');
    })->name('themcamera');

Route::get('/admin/thietke', function () {
    return view('thietke.index');
    })->name('thietke');
Route::get('/admin/themthietke', function () {
    return view('thietke.them_thietke');
    })->name('themthietke');

Route::get('/admin/manhinh', function () {
    return view('manhinh.index');
    })->name('manhinh');
Route::get('/admin/themmanhinh', function () {
    return view('manhinh.them_manhinh');
    })->name('themmanhinh');

Route::get('/admin/hieunangpin', function () {
    return view('hieunangpin.index');
    })->name('hieunangpin');
Route::get('/admin/themhieunangpin', function () {
    return view('hieunangpin.them');
    })->name('themhieunangpin');

Route::get('/admin/tinhnangdb', function () {
    return view('tinhnangdb.index');
    })->name('tinhnangdb');
Route::get('/admin/themtinhnangdb', function () {
    return view('tinhnangdb.them_tinhnangdb');
    })->name('themtinhnangdb');

Route::get('/admin/hieudieuhanh', function () {
    return view('hedieuhanh.index');
    })->name('hedieuhanh');
Route::get('/admin/themhedieuhanh', function () {
    return view('hedieuhanh.them_hedieuhanh');
    })->name('themhedieuhanh');
Route::resource('/ROM',ROMController::class);
Route::resource('/camera',CameraController::class);
Route::resource('/manhinh',ManHinhController::class);
Route::resource('/hieunangpin',HieuNangPinController::class);
Route::resource('/tinhnangdb',TinhNangDBController::class);
Route::resource('/hedieuhanh',HeDieuHanhController::class);
Route::resource('/thietke',ThietKeController::class);
Route::resource('/mausac',MauSacController::class);
Route::resource('/hang',HangController::class);
Route::resource('/loaiSanPham',LoaiSanPhamController::class);
Route::resource('/sanPham',SanPhamController::class);
Route::resource('/taikhoan',TaiKhoanController::class);













Route::get('/admin/loader', function () {
    return view('dangnhap.loader');
    })->name('loader');
        // tin tuc
Route::get('/admin/tintuc', function () {
    return view('tintuc.index');
    })->name('tintuc');
    
Route::get('/admin/themtintuc', function () {
    return view('tintuc.Them_tintuc');
    })->name('themtintuc');
    
Route::get('/admin/suatintuc', function () {
    return view('tintuc.sua_tintuc');
    })->name('suatintuc');