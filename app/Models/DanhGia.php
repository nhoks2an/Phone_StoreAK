<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DanhGia extends Model
{
    public $timestamps = false;
    protected $table ="danh_gias";
    protected $fillable = [
         'id','id_sanpham','id_user','rating',
    ];
    protected $primarykey = 'id';
    public function user(){
     return $this->belongsto ('App\Models\User','id_user');
    }

    public function sanpham(){
        return $this->belongsto ('App\Models\SanPham','id_sanpham');
    }
}
