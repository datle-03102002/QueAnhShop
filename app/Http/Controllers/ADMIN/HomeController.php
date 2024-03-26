<?php

namespace App\Http\Controllers\ADMIN;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    public function login(){
        return view('admin.components.login');
    }
    
    public function AdminLogin(Request $request){
        $data = $request->all();
        $result = DB::table('users')
                  ->where('email','=',$data['userName'])
                  ->where('password','=',$data['password'])
                  ->first();
        if($result!=null){
            session()->push('admin', 'value');
            return redirect()->route('dashboard');
        }
        return back()->withErrors(['Sai'=>'Tài khoản hoặc mật khẩu không đúng']);
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
            dd($images);
            $jsonImages = json_encode($images);
            dd($jsonImages);
        }
    }
}
