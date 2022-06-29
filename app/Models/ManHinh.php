<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

class ManHinh extends Model
{
    use HasFactory, Notifiable;
    use SoftDeletes;
    protected $guarded = [];
    protected $table ="man_hinhs";
    protected $fillable = [
        'id',
       'thongso',
        'hienthi',
    ];

    public function scopeSearch($query){
        if($key = request()->key)
            {
                $query = $query->where('thongso','like','%'.$key.'%');
            }
        return $query;           
    }
}
