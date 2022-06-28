<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

class SanPham extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table ="san_phams";
    protected $fillable = [
        'id',
       'tensanpham',
       'hinhanh',
       'mota',
       'giacu',
       'giamoi',
       'id_camera',
       'id_rom',
       'id_ram',
       'id_manhinh',
       'id_tinhnangdb',
       'id_thietke',
       'id_hieunangpin',
       'id_mau',
       'id_hedieuhanh',
       'danhgia',
       'soluong',
       'id_loaisp',
        'hienthi',
    ];
    public function RAM()
    {
        return $this->belongsTo(RAM::class);
    }
    public function camera()
    {
        return $this->belongsTo(Camera::class);
    }
    public function ROM()
    {
        return $this->belongsTo(ROM::class);
    }
    public function hedieuhhanh()
    {
        return $this->belongsTo(HeDieuHanh::class);
    }
    public function manhinh()
    {
        return $this->belongsTo(ManHinh::class);
    }

    public function hang()
    {
        return $this->belongsTo(Hang::class);
    }
    public function tinhnangdb()
    {
        return $this->belongsTo(TinhNangDB::class);
    }
    public function hieunangpin()
    {
        return $this->belongsTo(HieuNangPin::class);
    }
    public function thietke()
    {
        return $this->belongsTo(ThietKe::class);
    }
    public function mausac()
    {
        return $this->belongsTo(MauSac::class);
    }

    public function binhluan()
    {
        return $this->hasMany('App\Models\BinhLuan', 'id_sp', 'id');
    }




   
}
