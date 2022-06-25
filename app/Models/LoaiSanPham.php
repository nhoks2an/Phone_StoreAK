<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

class LoaiSanPham extends Model
{
    use HasFactory, Notifiable;
    use SoftDeletes;
    protected $guarded = [];
    protected $table ="loai_san_phams";
    protected $fillable = [
        'id',
       'tenloaisp',
       'id_hang',
        'trangthai',
    ];

    public function hang()
    {
        return $this->belongsTo(Hang::class);
    }

  
}
