<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

class BinhLuan extends Model
{
    use HasFactory, Notifiable;
    use SoftDeletes;
    protected $guarded = [];
    protected $table ="binh_luans";
    protected $fillable = [
        'id',
       'id_sp',
       'id_kh',
       'id_rep',
        'trangthai',
    ];
    public function taikhoan()
    {
        return $this->belongsTo(User::class);
    }
    
    public function sanpham()
    {
        return $this->belongsTo(SanPham::class);
    }
}
