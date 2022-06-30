<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mapping extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table ="mappings";
    protected $fillable = [
        'id',
        'id_sanpham',
       'giacu',
       'giamoi',
       'id_rom',
       'id_ram',
       'id_mau',
       'soluong',
        'hienthi',
    ];
    public function RAM()
    {
        return $this->belongsTo(RAM::class);
    }
    public function ROM()
    {
        return $this->belongsTo(ROM::class);
    }
    public function mausac()
    {
        return $this->belongsTo(MauSac::class);
    }

    public function scopeSearch($query){
        if($key = request()->key)
            {
                $query = $query->where('tensanpham','like','%'.$key.'%');
            }
        return $query;           
    }
}