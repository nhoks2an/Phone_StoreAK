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
    ];

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