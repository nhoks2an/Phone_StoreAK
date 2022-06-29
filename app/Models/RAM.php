<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

class RAM extends Model
{
    use HasFactory, Notifiable;
    use SoftDeletes;
    protected $guarded = [];
    protected $table ="r_a_m_s";
    protected $fillable = [
        'id',
       'soram',
        'hienthi',
    ];

    public function scopeSearch($query){
        if($key = request()->key)
            {
                $query = $query->where('soram','like','%'.$key.'%');
            }
        return $query;           
    }
}
