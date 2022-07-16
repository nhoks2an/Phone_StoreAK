<?php

namespace App\Http\Controllers;
use App\Models\SanPham;
use App\Models\RAM;
use App\Models\SlideShow;
use App\Models\mapping;
use App\Models\ROM;
use App\Models\ThietKe;
use App\Models\LoaiSanPham;
use App\Models\GioiThieu;
use App\Models\Sologan;
use App\Models\ChinhSach;
use App\Models\HeDieuHanh;
use App\Models\TinhNangDB;
use App\Models\ManHinh;
use App\Models\Banner;
use App\Models\MauSac;
use App\Models\TTLienHe;
use App\Models\Hang;
use App\Models\HieuNangPin;
use App\Models\Camera;
use App\Models\HinhAnh;
use App\Models\Post;
use App\Models\TinTuc;
use Illuminate\Http\Request;
use App\Http\Controllers\equest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;

class LoaddingController extends Controller
{
    protected function fixImageab(HinhAnh $hinhanh)
    {
        if(Storage::disk('public')->exists($hinhanh->hinhanh)){
            $hinhanh->hinhanh = Storage::url($hinhanh->hinhanh);
        }else{
            $hinhanh->hinhanh = '/images/noimage.jpg';
        }
    }
    protected function fixImage(TinTuc $tinTuc)
    {
        if(Storage::disk('public')->exists($tinTuc->hinhanh)){
            $tinTuc->hinhanh = Storage::url($tinTuc->hinhanh);
        }else{
            $tinTuc->hinhanh = '/images/noimage.jpg';
        }
    }
    protected function fixImageSH(SlideShow $slideShow)
    {
        if(Storage::disk('public')->exists($slideShow->hinhanh)){
            $slideShow->hinhanh = Storage::url($slideShow->hinhanh);
        }else{
            $slideShow->hinhanh = '/images/noimage.jpg';
        }
    }
    protected function fixImageBN(Banner $banner)
    {
        if(Storage::disk('public')->exists($banner->hinhanh)){
            $banner->hinhanh = Storage::url($banner->hinhanh);
        }else{
            $banner->hinhanh = '/images/noimage.jpg';
        }
    }
    protected function fixImageHang(Hang $hang)
    {
        if(Storage::disk('public')->exists($hang->hinhanh)){
            $hang->hinhanh = Storage::url($hang->hinhanh);
        }else{
            $hang->hinhanh = '/images/noimage.jpg';
        }
    }
    // tintuc
    public function loadtintuc()
    {
        $lsttt = TinTuc::orderBy('created_at','DESC')->paginate(2);
        foreach($lsttt as $tt){
            $this->fixImage($tt);
        }
        return view('user.sanpham.index',['lsttt'=>$lsttt]);
    }
   public function loadding()
   {
    $lshow = SlideShow::all();
    foreach($lshow as $sh)
    {
       $this->fixImageSH($sh);
    }
    $lstbanner = Banner::all();
    foreach($lstbanner as $banner)
    {
       $this->fixImageBN($banner);
    }
    $sanPham = SanPham::where('noibat','=','1')->get();
    $lstsanpham = SanPham::where('noibat','=','0')->get();
    foreach($sanPham as $sp)
    {     
        $mapping = mapping::where('id_sanpham','=',$sp->id)->get();
    }
  
    $lstchinhsach = ChinhSach::all();
    $lsthang = Hang::all();
    foreach($lsthang as $hang)
    {
        $this->fixImageHang($hang);
        $lstloai = LoaiSanPham::where('id_hang','=',$hang->id)->get();
    }
    return View::make('user.index.index', compact('sanPham','lsthang','lstloai','lstchinhsach','lstsanpham','lshow','lstbanner'))->nest('user.index.index','user.layout.footer', compact('sanPham','lsthang','lstchinhsach','lstsanpham','lshow','lstbanner'));
   }

// chi tiet sp
   public function detail($id)
   {
    $sanPham = SanPham::where('id','=',$id)->first();
    $mapping = mapping::where('id_sanpham','=',$id)->get();
    $lsthinhanh = HinhAnh::where('id_sanpham','=',$id)->get();
    $lstloai= LoaiSanPham::where('id','=',$id)->get();
    $spcungloai=SanPham::where('id_loaisp','=',$sanPham->id_loaisp,'and id<>',$sanPham->id)->paginate(4);;
    foreach($mapping as $mp)
    {  
    }
    foreach($lsthinhanh as $hinhanh)
    {  
        $this->fixImageab($hinhanh);
    }
    return View('user.sanpham.detailproduct',['sanPham'=>$sanPham,'mapping'=>$mapping,'lsthinhanh'=>$lsthinhanh,'lstloai'=>$lstloai,'spcungloai'=>$spcungloai]);
   }
//    load chi tiet tin tuc
    public function detailchitiet($id)
    {
    $sologan = Sologan::all();
    $tintuc = TinTuc::where('id','=',$id)->first();
    foreach($tintuc as $tt)
    {
    }
    return View('user.sanpham.chitiet',['tintuc'=>$tintuc,'sologan'=>$sologan]);
    }
    //    gioi thieu
   public function loadgioithieu()
   {
    $gioithieu = GioiThieu::all();
    foreach($gioithieu as $gt)
    {
        
    }
    return View('user.gioithieu.index',['gioithieu'=>$gioithieu]);
   }
    // lien he
    public function loadlienhe()
    {
    return View('user.lienhe.index',);
    }

    public function load_more_sanpham(Request $request)
    {
        $data = $request->all();

        if($data['id'] > 0){
            $lstsanpham = SanPham::where('noibat','=','0')->where('id','<',$data['id'])->orderby('id','DESC')->take(4)->get();
        }
        else{
            $lstsanpham = SanPham::where('noibat','=','0')->orderby('id','DESC')->take(4)->get();
        }
        $output = '';
        if(!$lstsanpham->isEmpty()){
            foreach($lstsanpham as $key => $sanpham)
            {
                $last_id = $sanpham->id;
                $output.= '<div class="item">
                                <div class="img"><a class="scale-img" href="'.url('/detail/'.$sanpham->id).'"><img src="'.url('storage/'.$sanpham->hinhanh).'""></a></div>
                                <div class=" noidung">
                                    <div class="ten"><a href="'.url('/detail/'.$sanpham->id).'">'.$sanpham->tensanpham.'</a></div>
                                    <div class="tt-gia">
                                    <div class="gia" >'.$sanpham->giamin.'đ - '.$sanpham->giamax.'đ</div>
                                    </div>
                                    <div class ="mota">
                                        <ul>
                                            <li><span class="">Màn hình:</span> '.$sanpham->manhinh->thongso.'</li>
                                            <li><span class="">Hệ điều hành:</span>'.$sanpham->hedieuhanh->tenhedieuhanh.'</li>
                                            <li><span class="">Camera:</span> '.$sanpham->camera->tencamera.'</li>
                                            <li><span class="">Pin:</span>'.$sanpham->hieunangpin->tenhieunang.'</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="promote">
                                    <a href="'.url('/detail/'.$sanpham->id).'">
                                       <div class= "mota-sampham">'.$sanpham->mota.'</div>
                                    </a>
                                </div>
                            </div>';    
                        
            }
            $output.='
                <button  type="button" name="load_more_button" class="btn btn-success form-control" data-id="'.$last_id.'"id ="load_more_button">
                    Xem Thêm
                </button>     
          ';
        }else{
            $output.='
                <button  type="button" name="load_more_button" class="btn btn-default form-control"id ="load_more_button">
                  Đang Cập Nhật Dữ Liệu....
                </button>     
           '; 
        }
        echo $output;
    }

    public function timkiem()
    {
    $lstsanpham = SanPham::all();
    return View('user.timkiem.index',['lstsanpham'=>$lstsanpham]);
    }

    public function loadhangtheosp(Request $request)
    {
        $data= $request->all();
    $lsthang = Hang::all();
    foreach($lsthang as $hang)
    {
        $this->fixImageHang($hang);    
    }
    $lstloai = LoaiSanPham::where('id_hang','=',$request->id_hang)->get();
    foreach($lstloai as $loai)
    {
        $lstsanpham = SanPham::where('id_loaisp','=',$loai->id)->paginate(5);
    }


    return View('user.index.loadsanpham',['lstsanpham'=>$lstsanpham,'lsthang'=>$lsthang,'lstloai'=>$lstloai]);
    
    }

   
  
    
}