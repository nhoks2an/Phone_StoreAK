<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

class TTLienHe extends Model
{
    use HasFactory;
    use HasFactory, Notifiable;
    use SoftDeletes;
    protected $guarded = [];
    protected $table ="t_t_lien_hes";
    protected $fillable = [
        'id',
       'noidung',
    ];
}
