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
        'hienthi',
    ];

    public function hang()
    {
        return $this->belongsTo('App\Models\Hang', 'id_hang', 'id');
    }

    public function scopeSearch($query){
        if($key = request()->key)
            {
                $query = $query->where('tenloaisp','like','%'.$key.'%');
            }
        return $query;           
    }
}
