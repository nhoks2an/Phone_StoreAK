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
use App\Http\Controllers\BinhLuanController;
use App\Http\Controllers\SlideShowController;
use App\Http\Controllers\SologanController;
use App\Http\Controllers\UserController;
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
// Route::get('/trangchu', function () {
//     return view('user.index.index');
// })->name('user');
Route::get('/sanpham', function () {
    return view('user.sanpham.index');
})->name('sanpham');
Route::get('/chitietsanpham', function () {
    return view('user.sanpham.detailproduct');
})->name('chitietsanpham');
Route::get('/lienhe', function () {
    return view('user.lienhe.index');
})->name('lienhe');
// Route::get('/dangnhap', function () {
//     return view('user.login.login');
// })->name('dangnhapus');
// Route::get('/dangky', function () {
//     return view('user.login.register');
// })->name('dangky');
Route::get('/sanpham', function () {
    return view('user.sanpham.index');
})->name('sanpham');
Route::get('/giohang', function () {
    return view('user.cart.cart');
})->name('giohang');



Route::get('/logout',[UserController::class,'logout'])->name('user.logout');
Route::get('/trangchu',[UserController::class,'index'])->name('user.index');
Route::get('/register',[UserController::class,'show'])->name('user.show');
Route::get('/dangky',[UserController::class,'store'])->name('user.store');
Route::get('/dangnhap',[UserController::class,'login'])->name('user.login');
Route::get('/login',[UserController::class,'loginUser'])->name('user.loginUser');
// Route::get('/admin/', function () {
//     return view('dangnhap.index');
// })->name('dangnhap');

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
Route::resource('/binhluan',BinhLuanController::class);













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