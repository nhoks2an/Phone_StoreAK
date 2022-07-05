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
       'id_camera',
       'id_manhinh',
       'id_tinhnangdb',
       'id_thietke',
       'id_hieunangpin',
       'id_hedieuhanh',
       'danhgia',
       'id_loaisp',
        'hienthi',
        'noibat',
    ];

    public function camera()
    {
        return $this->belongsTo('App\Models\Camera', 'id_camera', 'id');
    }
    public function hedieuhanh()
    {
        return $this->belongsTo('App\Models\HeDieuHanh', 'id_hedieuhanh', 'id');
    }
    public function manhinh()
    {
        return $this->belongsTo('App\Models\ManHinh', 'id_manhinh', 'id');
    }

    public function hang()
    {
        return $this->belongsTo('App\Models\Hang', 'id_hang', 'id');
    }
    public function tinhnangdb()
    {
        return $this->belongsTo('App\Models\TinhNangDB', 'id_tinhnangdb', 'id');
    }
    public function hieunangpin()
    {
        return $this->belongsTo('App\Models\HieuNangPin', 'id_hieunangpin', 'id');
    }
    public function thietke()
    {
        return $this->belongsTo('App\Models\ThietKe', 'id_thietke', 'id');
    }
    public function loaisanpham()
    {
        return $this->belongsTo('App\Models\LoaiSanPham', 'id_loaisp', 'id');
    }
    public function mapping()
    {
        return $this->hasMany('App\Models\mapping', 'id_sanpham', 'id');
    }
    public function hinhanh()
    {
        return $this->hasMany('App\Models\HinhAnh', 'id_sanpham', 'id');
    }

    public function binhluan()
    {
        return $this->hasMany('App\Models\BinhLuan', 'id_sp', 'id');
    }

    public function scopeSearch($query){
        if($key = request()->key)
            {
                $query = $query->where('tensanpham','like','%'.$key.'%');
            }
        return $query;           
    }


   
}