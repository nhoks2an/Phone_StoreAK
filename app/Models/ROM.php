<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

class ROM extends Model
{
    use HasFactory, Notifiable;
    use SoftDeletes;
    protected $guarded = [];
    protected $table ="r_o_m_s";
    protected $fillable = [
        'id',
       'sorom',
        'hienthi',
    ];
    public function scopeSearch($query){
        if($key = request()->key)
            {
                $query = $query->where('sorom','like','%'.$key.'%');
            }
        return $query;           
    }
    public function mapping()
    {
        return $this->hasMany('App\Models\mapping', 'id_rom', 'id');
    }
}
