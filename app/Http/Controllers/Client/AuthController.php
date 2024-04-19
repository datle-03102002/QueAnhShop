<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Address;
use App\Models\User;
use Session;


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
            // dd(Auth::user()->role);
            // dd(Auth::id());
            if(Auth::user()->role=='admin'){
                return redirect()->route('dashboard');
            }
            else{
                // dd(Auth::id());
                session()->push('user_id', Auth::id());
                // dd(session()->get('user_id'));
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
    public function getAddress(){
        // $user = Auth::user();
        // dd(Auth::id());
        $address = Address::where('user_id',Auth::id())->get();

        $data =  '';
        foreach ($address as $key => $item) {
            $data .= '<li class="cus-radio align-items-center justify-content-between">
                            <input type="radio" name="address_rdo" value="26" id="radio'.$item->id.'" checked="">
                            <label for="radio'.$item->id.'">
                                <span>'.$item->name.'</span>
                                <span>'.$item->phone.'</span>
                                <span>'.$item->address.'</span>
                            </label>
                            <div>
                                <button type="button" data-toggle="modal" data-target="#EditAddressModal"
                                    class="edit-address btn btn-outline-primary" data-id="26" data-name="Đạt Lê"
                                    data-phone="0346531944" data-address="Tân kỳ, Nghệ An adadad">Sửa</button>
                                <button type="button" class="dlt-address btn btn-outline-primary ml-2"
                                    data-id="26">Xóa</button>
                            </div>
                        </li>';
        }   
    
        return response()->json($data);
    }
}
