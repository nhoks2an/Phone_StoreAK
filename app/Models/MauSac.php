<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

class MauSac extends Model
{
    use HasFactory, Notifiable;
    use SoftDeletes;
    protected $guarded = [];
    protected $table ="mau_sacs";
    protected $fillable = [
        'id',
       'tenmau',
        'hienthi',
    ];
    public function scopeSearch($query){
        if($key = request()->key)
            {
                $query = $query->where('tenmau','like','%'.$key.'%');
            }
        return $query;           
    }
    public function mapping()
    {
        return $this->hasMany('App\Models\mapping', 'id_mau', 'id');
    }
}
