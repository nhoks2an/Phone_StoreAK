<?php 
namespace App\Models;
use App\Models\SanPham;
use Illuminate\Database\Eloquent\Model;
use App\Models\mapping;
class Cart{
    public $sp=null;
    public $tongtien =0;
    public $tongsoluong=0;
    public function constant($cart){
        if($cart)
        {
            $this->sp=$cart->sp;
            $this->tongtien=$cart->tongtien;
            $this->tongsoluong=$cart->tongsoluong;

        }
    }
    public function addcart(SanPham $sanpham,$id){
        $newsp=new SanPham();
        if($this->sanpham){
            if(array_key_exists($id,$sanpham)){
                $newsp=$sanpham[$id];
            }
        }
        // $newsp['soluong']++;
        // $newsp['gia']=$newsp['soluong']*$sanpham->gia;
        $this->sanpham[$id]=$newsp;
        // $this->tongtien+=$sanpham->gia;
        // $this->soluong++;
    }
}
?>