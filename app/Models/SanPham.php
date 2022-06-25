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
       'sorom',
        'trangthai',
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





   
}
