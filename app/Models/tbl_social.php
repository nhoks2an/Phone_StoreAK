<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbl_social extends Model
{
    use HasFactory;
   public $timestamps = false;
   protected $table ="tbl_socials";
   protected $fillable = [
        'provider_user_id','provider','id_user'
   ];
   protected $primarykey = 'id';
   public function login(){
    return $this->belongsto ('App\Models\User','id_user');
   }

}
