<?php

namespace App\Http\Controllers\ADMIN;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{    
    public function AdminLogin(Request $request){
        $data = $request->all();
        // dd($data);
        if (Auth::attempt(['name'=>$data['userName'],'password'=>$data['password']])) {
            // $request->session()->regenerate();
           if(Auth::user()->role == 'admin'){
               return redirect()->route('dashboard');
           }
           else{
            toastr()->error('Bạn không có quyền');
           }
        }
        
        return back()->withErrors(['Sai'=>'Tài khoản hoặc mật khẩu không đúng']);
    }
    public function logout(){
        session()->forget('admin');
        return  redirect('login');
    }
    public function dashboard(){
        return view('admin.components.dashboard');
    }
    public function upload(Request $request){
        if($request->hasFile('file')){
            $images = [];
            foreach ($request->file('file') as $image) {
                $imageName = $image->getClientOriginalName();
                $image->move(public_path('assets/uploads'),$imageName);
                // Thêm đường dẫn của ảnh vào mảng
                $images[] = '/uploads/' . $imageName;
            }
            $jsonImages = json_encode($images);
            dd($jsonImages);
        }
    }
}
