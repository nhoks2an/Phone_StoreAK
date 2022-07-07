<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class mapping extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $guarded = [];
    protected $table ="mappings";
    protected $fillable = [
        'id',
        'id_sanpham',
       'id_rom',
       'id_ram',
       'id_mau',
       'soluong',
       'giacu',
       'giamoi',
        'hienthi',
    ];
    public function RAM()
    {
        return $this->belongsTo('App\Models\RAM', 'id_ram', 'id');
    }
    public function ROM()
    {
        return $this->belongsTo('App\Models\ROM', 'id_rom', 'id');
    }
    public function mausac()
    {
        return $this->belongsTo('App\Models\MauSac', 'id_mau', 'id');
    }
    public function sanpham()
    {
        return $this->belongsTo('App\Models\SanPham', 'id_sanpham', 'id');
    }
    
}