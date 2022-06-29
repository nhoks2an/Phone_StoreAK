<?php

namespace App\Http\Controllers;
Use App\models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class DangnhapController extends Controller
{

    public function showForm(){
        return view('dangnhap.index');
    }
    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function authenticate(Request $request)
    {

        $validatedData = $request->validate(
            [
              
                'name' => 'required',
                'password' => 'required',
            ],
            [
             
                'name.required' => 'Tài khoản không được bỏ tróng',
                'password.required' => 'Mật khẩu không được bỏ tróng',
            ]
        );
        $credentials = $request->only('name', 'password');
        $password =md5($credentials['password']);
      
         $dangnhap =  User::where('name',$request->name)->where('password', $password)->first();
         if($dangnhap !=null){
              $request->session()->regenerate();
              Auth::login($dangnhap);
            
              return redirect()->route('dashboard');
         }
         else{
              return back()->withErrors([
               'name' => 'Sai Tài Khoản Hoặc Mật Khẩu !',
          ]);
         }
       
    }
    /**
 * Log the user out of the application.
 *
 * @param  \Illuminate\Http\Request  $request
 * @return \Illuminate\Http\Response
 */
public function logout(Request $request)
{
    Auth::logout();
 
    $request->session()->invalidate();
 
    $request->session()->regenerateToken();
 
    return redirect()->route('login');
}
}
