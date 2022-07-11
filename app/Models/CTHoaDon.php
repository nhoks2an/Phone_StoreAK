<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
class CTHoaDon extends Model
{
    use HasFactory, Notifiable;
    use SoftDeletes;
    protected $guarded = [];
    protected $table ="c_t_hoa_dons";
    protected $fillable = [
        'id',
       'id_hoadon',
       'id_sanpham',
       'id_map',
       'soluong',
       'thanhtien',
        'hienthi',
    ];
    public function hoadon()
    {
        return $this->belongsTo('App\Models\HoaDon', 'id_hoadon', 'id');
    }
    public function sanpham()
    {
        return $this->belongsTo('App\Models\SanPham', 'id_sanpham', 'id');
    }
    public function mapping()
    {
        return $this->belongsTo('App\Models\mapping', 'id_map', 'id');
    }
}