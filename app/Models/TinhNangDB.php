<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

class TinhNangDB extends Model
{
    use HasFactory, Notifiable;
    use SoftDeletes;
    protected $guarded = [];
    protected $table ="tinh_nang_d_b_s";
    protected $fillable = [
        'id',
       'tentinhnang',
        'hienthi',
    ];

    public function scopeSearch($query){
        if($key = request()->key)
            {
                $query = $query->where('tentinhnang','like','%'.$key.'%');
            }
        return $query;           
    }
}
