<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RAMController;
use App\Http\Controllers\ROMController;
use App\Http\Controllers\MauSacController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\GioiThieuController;
use App\Http\Controllers\TinTucController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\ChinhSachController;
use App\Http\Controllers\ManHinhController;
use App\Http\Controllers\CameraController;
use App\Http\Controllers\HieuNangPinController;
use App\Http\Controllers\TinhNangDBController;
use App\Http\Controllers\HeDieuHanhController;
use App\Http\Controllers\ThietKeController;
use App\Http\Controllers\HangController;
use App\Http\Controllers\LoaiSanPhamController;
use App\Http\Controllers\LienHeController;
use App\Http\Controllers\TTLienHeController;
use App\Http\Controllers\SanPhamController;
use App\Http\Controllers\TaiKhoanController;
use App\Http\Controllers\DangnhapController;
use App\Http\Controllers\LoaddingController;
use App\Http\Controllers\BinhLuanController;
use App\Http\Controllers\SlideShowController;
use App\Http\Controllers\SologanController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\dathangController;
use App\Http\Controllers\HoaDonController;
use App\Http\Controllers\CTHoaDonController;
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



Route::get('/sanpham', function () {
    return view('user.sanpham.index');
})->name('sanpham');
Route::get('/chitietsanpham', function () {
    return view('user.sanpham.detailproduct');
})->name('chitietsanpham');


Route::get('/sanpham', function () {
    return view('user.sanpham.index');
})->name('sanpham');
// Route::get('/giohang', function () {
//     return view('user.cart.cart');
// })->name('giohang');
Route::get('/thongtinkhachhang', function () {
    return view('user.profile.profile');
})->name('profile');
Route::post('/donhang',[dathangController::class,'huy'])->name('dathang.huy');
Route::post('/ctdonhang',[dathangController::class,'show'])->name('dathang.show');
Route::post('/dathang',[dathangController::class,'addhd'])->name('dathang.addhd');
Route::get('/lichsumuahang/{hoadon}',[dathangController::class,'showhd'])->name('dathang.showhd');
Route::get('/thongtincanhan',[UserController::class,'showprofile'])->name('user.showprofile');
Route::get('/capnhap/{user}',[UserController::class,'update'])->name('user.update');
Route::get('/logout',[UserController::class,'logout'])->name('user.logout');
Route::get('/trangchu',[UserController::class,'index'])->name('user.index');
Route::get('/register',[UserController::class,'show'])->name('user.show');
Route::get('/dangky',[UserController::class,'store'])->name('user.store');
Route::get('/dangnhap',[UserController::class,'login'])->name('user.login');
Route::get('/xtdangnhap',[UserController::class,'loginUser'])->name('user.loginUser');
// Route::get('/admin', function () {
//     return view('dangnhap.index');
// })->name('dangnhap');
Route::get('/login',[UserController::class,'loginUser'])->name('user.loginUser');
Route::get('/dashboard', function () {
    return view('dashboard.index');
})->name('dashboard')->middleware('auth');
    // hoa don
Route::get('/admin/hoadon', function () {
    return view('hoadon.index');
    })->name('hoadon');
Route::get('/admin/cthoadon', function () {
    return view('cthoadon.index');
    })->name('cthoadon');
    //  dang nhap
Route::get('/hoadon1',[HoaDonController::class,'sua'])->name('hoadon.sua')->middleware('auth');
Route::get('/hoadon23',[HoaDonController::class,'indexduyet'])->name('hoadon.indexduyet')->middleware('auth');
Route::get('/hoadon4',[HoaDonController::class,'indexgiao'])->name('hoadon.indexgiao')->middleware('auth');
Route::post('/duyethoadonhd',[HoaDonController::class,'duyet'])->name('hoadon.duyet')->middleware('auth');
Route::resource('/RAM',RAMController::class)->middleware('auth');
Route::resource('/hoadon',HoaDonController::class)->middleware('auth');
Route::resource('/cthoadon',CTHoaDonController::class)->middleware('auth');
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
Route::resource('/lienhe',LienHeController::class)->middleware('auth');
Route::resource('/banner',BannerController::class)->middleware('auth');
Route::resource('/thongtinlh',TTLienHeController::class)->middleware('auth');
Route::resource('/loaiSanPham',LoaiSanPhamController::class)->middleware('auth');
Route::resource('/sanPham',SanPhamController::class)->middleware('auth');
Route::get('/stock/{id}', [SanPhamController::class, 'indexmp'])->name('sanPham.stock');
Route::get('/lienheuser', [LoaddingController::class, 'loadlienhe'])->name('loadding.lienheuser');
Route::get('/gioithieuuser', [LoaddingController::class, 'loadgioithieu'])->name('loadding.gioithieu');
Route::get('/abum/{id}', [SanPhamController::class, 'indexab'])->name('sanPham.abum');
Route::post('/stock/add', [SanPhamController::class, 'storemp'])->name('sanPham.storemp');
Route::post('/abum/add', [SanPhamController::class, 'storeab'])->name('sanPham.storeab');
Route::put('/stock/update', [SanPhamController::class, 'updatemp'])->name('sanPham.updatemp');
Route::delete('/stock/delete', [SanPhamController::class, 'destroymp'])->name('sanPham.destroymp');
Route::delete('/abum/delete', [SanPhamController::class, 'destroyab'])->name('sanPham.destroyab');
Route::resource('/taikhoan',TaiKhoanController::class)->middleware('auth');
Route::resource('/binhluan',BinhLuanController::class)->middleware('auth');
Route::get('/admin', [DangnhapController::class,'showForm'])->name('loginadmin');
Route::post('/admin', [DangnhapController::class,'authenticate'])->name('loginadmin');
Route::post('logout', [DangnhapController::class,'logout'])->name('logout');
Route::get('/admin/loader', function () {
    return view('dangnhap.loader');
    })->name('loader');
Route::get('/admin/hoadon', function () {
    return view('hoadon.index');
    })->name('hoadon');
Route::get('/admin/cthoadon', function () {
    return view('cthoadon.index');
    })->name('cthoadon');

Route::get('/', [LoaddingController::class, 'loadding'])->name('user');  
Route::get('/tintuc1', [LoaddingController::class, 'loadtintuc'])->name('tinTuc1.index');  
Route::get('/detail/{id}', [LoaddingController::class, 'detail'])->name('loadding.detail'); 
Route::get('/chitiettintuc/{id}', [LoaddingController::class, 'detailchitiet'])->name('loadding.detailchitiet'); 
Route::post('/mau/{id}', [LoaddingController::class, 'loadmau'])->name('loadding.loadmau'); 
Route::get('/giohang/{id}', [CartController::class, 'show'])->name('cart.show'); 
Route::post('/themgiohang/{sanPham}', [CartController::class, 'cart'])->name('cart.cart');
Route::post('/lienhe', [LienHeController::class, 'store'])->name('lienhe.create'); 
Route::post('/addcart', [CartController::class, 'addcart'])->name('cart.addcart'); 
Route::post('/updatecartminus', [CartController::class, 'updateplus'])->name('cart.updateplus'); 
Route::post('/updatecartplus', [CartController::class, 'updateminus'])->name('cart.updateminus'); 
Route::post('/deletecart', [CartController::class, 'deletecart'])->name('cart.deletecart'); 
Route::post('/lienhe', [LienHeController::class, 'store'])->name('lienhe.create'); 
Route::PATCH('/khoataikhoan', [TaiKhoanController::class, 'khoataikhoan'])->name('taikhoan.khoataikhoan'); 
Route::post('/load_more_sanpham', [LoaddingController::class, 'load_more_sanpham'])->name('loadding.load_more_sanpham'); 
Route::get('/timkiem', [LoaddingController::class, 'timkiem'])->name('timkiem'); 
Route::get('/timkiemsanpham', [SanPhamController::class, 'timkiemsanpham'])->name('timkiemsanpham'); 
Route::get('/hangsp', [LoaddingController::class, 'loadhangtheosp'])->name('loadhangtheosp'); 

Route::post('/loadvt', [CartController::class, 'getvt'])->name('loadvt');
Route::post('/loadphuong', [CartController::class, 'getphuong'])->name('loadphuong');
Route::post('/insert_rating', [LoaddingController::class, 'insert_rating']);

Route::get('/login-google',[UserController::class, 'login_google'])->name('login_google'); 
Route::get('/dangnhap/google/callback',[UserController::class, 'callback_google'])->name('callback_google'); 
Route::get('/themgiohang/{sanPham}', [CartController::class, 'getvt'])->name('cart.getvt');
