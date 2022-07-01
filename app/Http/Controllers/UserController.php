<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Post;
use Hash;
use Session;
class UserController extends Controller
{
    public function show()
    {
        return view('user.login.register');
    }
    public function login()
    {
        return view('user.login.login');
    }
    public function store(Request $request)
    {
        $request->validate([
            'email'=>'required|email',
            'sodienthoai'=>'required|numeric'
        ],
        [
            'email.required' => 'Email Không Đúng Định Dạng',
            'sodienthoai.required' => 'Số Điện Thoại Không Đúng Định Dạng',
        ]);
            if($request->hasFile('hinhanh')){
                $file = $request->file('hinhanh');
                $upload = public_path('image/hinhanh');
                $file_name = time().'_'.$file->getClientOriginalName();
                $file->move($upload,$file_name);
            } else {
                $file_name = 'noname.jpg';
            }
            $user = DB::table('users')->where('email',$request->email)->first();
            if(!$user){
                $newUser = new User();
                $newUser->name= '';
                $newUser->diachi = $request ->diachi;
                $newUser->email = $request ->email;
                $newUser->hoten = $request ->hoten;
                $newUser->sodienthoai = $request ->sodienthoai;
                $newUser->hinhanh = $file_name;
                $newUser->password = $request ->matkhau;
                $newUser->hienthi = 1;
                $newUser->save();
                return redirect()->route('user.login')->with('message','Đăng ký thành công!');
            }
            else{
                return back()->with('message','Tài khoản đã tồn tại!');
            }
    }
    public function loginUser(Request $request)
    {
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:6'
        ],
        [
            'email.required' => 'Email Không Được Bỏ Trống',
            'password.required' => 'Mật Khẩu Không Được Bỏ Trống',
        ]);
        $user = User::where('email','=',$request->email)->first();
        if($user){
            if(Hash::check($request->password,$user->password))
            {
                $request->session()->put('loginId',$user->id);
                return redirect('trangchu');
            }
            else{
                return back()->with('fail','Mật khẩu không chính xác!');
            }
        } else {
            return back()->with('fail','Email chưa được đăng ký!');
        }
    }
    public function index()
    {
        $data=array();
        if(Session::has('loginId'))
        {
            $data = User::where('id','=',Session::get('loginId'))->first();
        }
        return view('user.index.index',compact('data'));
    } 
    public function logout()
    {
        if(Session::has('loginId'))
        {
            Session::pull('loginId');
        }
        return back();
    }


}