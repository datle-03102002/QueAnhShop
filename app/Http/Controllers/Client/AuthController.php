<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    function login(Request $request){
        $data = $request->validate([
            'username'=>'required',
            'password'=>'required'
        ],[
            'username.required'=>'Tên đăng nhập không được để trông',
            'password.required'=>'Mật khẩu không được để trống'
        ]);
        if(Auth::attempt(['name'=>$request->username, 'password'=>$request->password])){
            dd(Auth::user()->role);
            if(Auth::user()->role=='admin'){
                return redirect()->route('dashboard');
            }
            else{
                return redirect()->route('home');
            }
            // dd(Auth::check());
        }
        toastr()->error('Tài khoản hoặc mật khẩu sai');
        return redirect()->back()->withInput();
    }
    function logout(){
        Auth::logout();
        return redirect()->route('home');
    }
}
