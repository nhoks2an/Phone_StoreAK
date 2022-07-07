<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Hang extends Model
{
    use HasFactory, Notifiable;
    use SoftDeletes;
    protected $guarded = [];
    protected $table ="hangs";
    protected $fillable = [
        'id',
       'tenhang',
       'hinhanh',
        'hienthi',
    ];
    public function loaisp()
    {
        return $this->hasMany('App\Models\LoaiSanPham', 'id_hang', 'id');
    }
    public function scopeSearch($query){
        if($key = request()->key)
            {
                $query = $query->where('tenhang','like','%'.$key.'%');
            }
        return $query;           
    }
}
