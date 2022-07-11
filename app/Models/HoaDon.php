<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
class HoaDon extends Model
{
    use HasFactory, Notifiable;
    use SoftDeletes;
    protected $guarded = [];
    protected $table ="hoa_dons";
    protected $fillable = [
        'id',
       'id_kh',
       'diachi',
       'sodienthoai',
       'tongtien',
       'id_thanhpho',
       'id_quan',
       'id_phuong',
        'trangthai',
    ];
    public function khachhang()
    {
        return $this->belongsTo('App\Models\User', 'id_kh', 'id');
    }
    public function trangthaihd()
    {
        return $this->belongsTo('App\Models\trangthaihd', 'trangthai', 'id');
    }
    public function thanhpho()
    {
        return $this->belongsTo('App\Models\ThanhPho', 'id_thanhpho', 'id');
    }
    public function quan()
    {
        return $this->belongsTo('App\Models\Quan', 'id_quan', 'id');
    }
    public function phuong()
    {
        return $this->belongsTo('App\Models\Phuong', 'id_phuong', 'id');
    }
}