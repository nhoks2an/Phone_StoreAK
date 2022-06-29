<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
class ChinhSach extends Model
{
    use HasFactory, Notifiable;
    use SoftDeletes;
    protected $guarded = [];
    protected $table ="chinh_saches";
    protected $fillable = [
        'id',
       'tieude',
       'noidung',
        'hienthi',
    ];
    public function scopeSearch($query){
        if($key = request()->key)
            {
                $query = $query->where('tieude','like','%'.$key.'%');
            }
        return $query;           
    }
}