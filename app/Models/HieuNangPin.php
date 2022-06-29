<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

class HieuNangPin extends Model
{
    use HasFactory, Notifiable;
    use SoftDeletes;
    protected $guarded = [];
    protected $table ="hieu_nang_pins";
    protected $fillable = [
        'id',
       'tenhieunang',
        'hienthi',
    ];
    public function scopeSearch($query){
        if($key = request()->key)
            {
                $query = $query->where('tenhieunang','like','%'.$key.'%');
            }
        return $query;           
    }
}
