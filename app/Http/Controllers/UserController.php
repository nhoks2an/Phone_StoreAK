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
use Illuminate\Support\File;
class UserController extends Controller
{
    protected function fixImage(User $user)
    {
        if(Storage::disk('public')->exists($user->hinhanh)){
            $user->hinhanh = Storage::url($user->hinhanh);
        }else{
            $user->hinhanh = '/images/noimage.jpg';
        }
    }
    public function show()
    {
        return view('user.login.register');
    }
    public function login()
    {
        return view('user.login.login');
    }
    public function showprofile(User $user)
    {
        $user=User::where('id','=',Session::get('loginId'))->first();
        return view('user.profile.profile',['user'=>$user]);
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

            $user = DB::table('users')->where('email',$request->email)->first();
            if(!$user){
                $newUser = new User();
                $newUser->name= '';
                $newUser->diachi = $request ->diachi;
                $newUser->email = $request ->email;
                $newUser->hoten = $request ->hoten;
                $newUser->sodienthoai = $request ->sodienthoai;
                $newUser->hinhanh = '../images/noimg.png';
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
        if($user)
        {
            if($user->hienthi==1){
                if(Hash::check($request->password,$user->password))
                {
                    $request->session()->put('loginId',$user->id);
                    return redirect('/');
                }
                else{
                    return back()->with('fail','Mật khẩu không chính xác!');
                }
            } else {
                return back()->with('fail','Tài khoản đã bị khoá!');
            }
        } else
        {
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

    public function update(Request $request, User $user)
    {
        if($request->hasFile('hinhanh')){
            $user->hinhanh = $request->file('hinhanh')->store('images/user/'.$user->id,'public');
        }
            $user->fill([
                'hoten'=>$request->input('hoten'),
                'email'=>$request->input('email'),
                'phai'=>$request->input('phai'),
                'sodienthoai'=>$request->input('sodienthoai'),
                'diachi'=>$request->input('diachi'),
                'ngaysinh'=>$request->input('ngaysinh'),
                'hienthi'=>1,
            ]);
            $user->save(); 
                return dd($user);
        return back()->with('message','Lưu Thành Công!');

    }

    public function logout()
    {
        if(Session::has('loginId'))
        {
            Session::pull('loginId');
        }
        return redirect('/');
    }


}