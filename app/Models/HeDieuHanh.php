<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

class HeDieuHanh extends Model
{
    use HasFactory, Notifiable;
    use SoftDeletes;
    protected $guarded = [];
    protected $table ="he_dieu_hanhs";
    protected $fillable = [
        'id',
       'tenhedieuhanh',
        'hienthi',
    ];

    public function scopeSearch($query){
        if($key = request()->key)
            {
                $query = $query->where('tenhedieuhanh','like','%'.$key.'%');
            }
        return $query;           
    }
}
