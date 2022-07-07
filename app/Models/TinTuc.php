<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
class TinTuc extends Model
{
    use HasFactory, Notifiable;
    use SoftDeletes;
    protected $guarded = [];
    protected $table ="tin_tucs";
    protected $fillable = [
        'id',
       'tieude',
       'mota',
       'hinhanh',
       'noidung',
        'hienthi',
        'created_at'
    ];
    public function scopeSearch($query){
        if($key = request()->key)
            {
                $query = $query->where('tieude','like','%'.$key.'%');
            }
        return $query;           
    }
}