<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
class Cart extends Model
{
    use HasFactory, Notifiable;
    protected $guarded = [];
    protected $table ="carts";
    protected $fillable = [
        'id',
       'id_kh',
       'id_sp',
        'id_map',
        'soluong'
    ];
    public function user()
    {
        return $this->belongsTo('App\Models\User', 'id_kh', 'id');
    }
    public function sanpham()
    {
        return $this->belongsTo('App\Models\SanPham', 'id_sp', 'id');
    }
    public function mapping()
    {
        return $this->belongsTo('App\Models\mapping', 'id_map', 'id');
    }
}
?>