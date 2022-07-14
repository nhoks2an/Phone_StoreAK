<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phuong extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table ="phuongs";
    protected $fillable = [
        'id',
       '_name',
       '_prefix',
       '_province_id',
       '_district_id',
    ];
}