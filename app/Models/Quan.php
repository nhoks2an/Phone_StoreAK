<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quan extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table ="quans";
    protected $fillable = [
        'id',
       '_name',
       '_prefix',
       '_province_id',
    ];
}