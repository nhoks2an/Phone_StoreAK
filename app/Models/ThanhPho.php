<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class ThanhPho extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table ="thanh_phos";
    protected $fillable = [
        'id',
       '_name',
       '_code',
    ];
}