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
use App\Http\Controllers\DangnhapController;
use App\Http\Controllers\BinhLuanController;

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

Route::get('/dashboard', function () {
    return view('dashboard.index');
})->name('dashboard');
    // hoa don
Route::get('/admin/hoadon', function () {
    return view('hoadon.index');
    })->name('hoadon');
    
Route::get('/admin/cthoadon', function () {
    return view('cthoadon.index');
    })->name('cthoadon');
    //  dang nhap
Route::resource('/RAM',RAMController::class)->middleware('auth');
Route::resource('/footer',FooterController::class)->middleware('auth');
Route::resource('/gioithieu',GioiThieuController::class)->middleware('auth');
Route::resource('/tinTuc',TinTucController::class)->middleware('auth');
Route::resource('/chinhSach',ChinhSachController::class)->middleware('auth');
Route::resource('/slideShow',SlideShowController::class)->middleware('auth');
Route::resource('/sologan',SologanController::class)->middleware('auth');
Route::resource('/ROM',ROMController::class)->middleware('auth');
Route::resource('/camera',CameraController::class)->middleware('auth');
Route::resource('/manhinh',ManHinhController::class)->middleware('auth');
Route::resource('/hieunangpin',HieuNangPinController::class)->middleware('auth');
Route::resource('/tinhnangdb',TinhNangDBController::class)->middleware('auth');
Route::resource('/hedieuhanh',HeDieuHanhController::class)->middleware('auth');
Route::resource('/thietke',ThietKeController::class)->middleware('auth');
Route::resource('/mausac',MauSacController::class)->middleware('auth');
Route::resource('/hang',HangController::class)->middleware('auth');
Route::resource('/loaiSanPham',LoaiSanPhamController::class)->middleware('auth');
Route::resource('/sanPham',SanPhamController::class)->middleware('auth');
Route::resource('/taikhoan',TaiKhoanController::class)->middleware('auth');
Route::resource('/binhluan',BinhLuanController::class)->middleware('auth');
Route::get('login', [DangnhapController::class,'showForm'])->name('login');
Route::post('login', [DangnhapController::class,'authenticate'])->name('login');
Route::post('logout', [DangnhapController::class,'logout'])->name('logout');


Route::get('/admin/loader', function () {
    return view('dangnhap.loader');
    })->name('loader');
    
