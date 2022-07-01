<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

class HinhAnh extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table ="hinh_anhs";
    protected $fillable = [
        'id',
       'id_sanpham',
       'hinhanh',
        'hienthi',
    ];
    public function sanpham()
    {
        return $this->belongsTo('App\Models\SanPham', 'id_sanpham', 'id');
    }
}
