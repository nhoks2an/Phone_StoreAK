<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

class ThietKe extends Model
{
    use HasFactory, Notifiable;
    use SoftDeletes;
    protected $guarded = [];
    protected $table ="thiet_kes";
    protected $fillable = [
        'id',
       'ten',
        'hienthi',
    ];

    public function scopeSearch($query){
        if($key = request()->key)
            {
                $query = $query->where('ten','like','%'.$key.'%');
            }
        return $query;           
    }
}

