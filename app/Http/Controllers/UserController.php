<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\tbl_social;
use Socialite;
use App\Models\Sologan;
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
        $sologan = Sologan::all();
        return view('user.login.register',['sologan'=>$sologan]);
    }
    public function login()
    {
        $sologan = Sologan::all();
        return view('user.login.login',['sologan'=>$sologan]);
    }
    public function showprofile(User $user)
    {
        $user=User::where('id','=',Session::get('loginId'))->first();
        return view('user.profile.profile',['user'=>$user]);
    }
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|regex:/^[a-zA-Z0-9_]+@gmail.com$/|unique:users,email',
            'sodienthoai' => 'required|min:10|max:10',
            'matkhau'=>'required|min:6',
            'hoten'=>'required',
            'diachi'=>'required',
        ],
        [
            'email.required' => 'Email Không Được Bỏ Trống',
            'email.unique' => 'Email Đã Tồn Tại',
            'hoten.required' => 'Họ Tên Không Được Bỏ Trống',
            'diachi.required' => 'Địa Chỉ Không Được Bỏ Trống',
            'matkhau.required' => 'Password Không Được Bỏ Trống',
            'email.regex' => 'Email Không Đúng Định Dạng',
            'sodienthoai.required' => 'Số Điện Thoại Không Đúng Định Dạng',
            'sodienthoai.min' => 'Số Điện Thoại Không Đúng',
            'matkhau.min' => 'Password Phải Lớn Hơn 6 Ký Tự',
            'sodienthoai.max' => 'Số Điện Thoại Không Đúng',
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
            'email'=>'required|email|regex:/^[a-zA-Z0-9_]+@gmail.com$/',
            'password'=>'required|min:6'
        ],
        [
            'email.required' => 'Email Không Được Bỏ Trống',
            'email.regex' => 'Email Không Đúng Định Dạng',
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
        $request->validate([
            'hoten'=>'required',
            'email'=>'required|email|regex:/^[a-zA-Z0-9_]+@gmail.com$/',
            'sodienthoai'=>'required',
            'ngaysinh'=>'required',
            'diachi'=>'required',
            
        ],
        [
            'hoten.required' => 'Họ Tên Không Được Bỏ Trống',
            'sodienthoai.required' => 'Số Điện Thoại Không Được Bỏ Trống',
            'diachi.required' => 'Địa Chỉ Không Được Bỏ Trống',
            'ngaysinh.required' => 'Ngày Sinh Không Được Bỏ Trống',
            'email.regex' => 'Email Không Đúng Định Dạng',
            'password.required' => 'Mật Khẩu Không Được Bỏ Trống',
        ]);
        $us=User::where('email',$request->email)->where('id','<>',$user->id)->first();
        if($us==null)
        {
            if($request->hasFile('hinhanh')){
                $user->hinhanh = $request->file('hinhanh')->store('images/user/'.$user->id,'public');
                $user->save(); 
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
            return back()->with('message','Lưu Thành Công!');
        }
        else
        {
            return back()->with('fail','Email đã tồn tại!');
        }

    }

    public function logout()
    {
        if(Session::has('loginId'))
        {
            Session::pull('loginId');
        }
        return redirect('/');
    }
    public function doimatkhau()
    {
        return view('user.profile.doimatkhau');
    }
    public function updatepass(Request $request)
    {
        $request->validate([
            'newpass'=>'required|min:6',
        ],
        [
            'newpass.required' => 'Mật khẩu ít nhất 6 kí tự!',
        ]);   
        $user = User::where('id','=',$request->iduser)->first();
        if($request->newpass==$request->newpw)
        {
            if(Hash::check($request->oldpass,$user->password))
                {
                    $user->password=$request->newpass;
                    $user->save();
                    return Redirect::route('user.showprofile')->with('message','Đổi mật khẩu thành công!');
                }
                else
                {
                    return back()->with('fail','Mật khẩu không chính xác!');
                }
        }
        else
        {
            return back()->with('fail','Mật khẩu xác nhận không khớp!');
        }
    }


    public function login_google(Request $request ){
        return Socialite::driver('google')->redirect();
   }
    public function callback_google(){
        $users = Socialite::driver('google')->stateless()->user(); 
        $authUser = $this->findOrCreateUser($users,'google');
        if($authUser)
        {
        $account_name = User::where('id',$authUser->id_user)->first();
        Session::put('name',$account_name->name);
        Session::put('login_normal',true);
        Session::put('loginId',$account_name->id);
        } else if($customer_new){
            $account_name = User::where('id',$authUser->id_user)->first();
            Session::put('name',$account_name->name);
            Session::put('login_normal',true);
            Session::put('loginId',$account_name->id);
        }
        return redirect('/')->with('message', 'Đăng nhập thành công');
     }

    public function findOrCreateUser($users, $provider){
        $authUser = tbl_social::where('provider_user_id', $users->id)->first();
        if($authUser){
            return $authUser;
        } else {
            $customer_new = new tbl_social([
                'provider_user_id' => $users->id,
                'provider' => strtoupper($provider)
            ]);
        // $hieu = new tbl_social([
        //     'provider_user_id' => $users->id,
        //     'provider' => strtoupper($provider)
        // ]);
        $orang = User::where('email',$users->email)->first();

            if(!$orang){
                $orang = User::create([
                    'hoten' =>'',
                    'name' => $users->name,
                    'email' => $users->email,
                    'password' => '',
                    'sodienthoai' => '',
                    'diachi'=>'',
                    'hienthi' => 1, 
                ]);
            }
        $customer_new->login()->associate($orang);
        $customer_new->save();
        return $customer_new;
        }

    }

}