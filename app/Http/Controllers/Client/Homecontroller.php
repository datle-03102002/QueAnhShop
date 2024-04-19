<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\productDetail;
use App\Models\Images;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class Homecontroller extends Controller
{
    public function index(){
        // dd(Auth::user());
        $product = Product::with('images')->get();
        // dd($product[0]->images);
        return view('client.page.index',compact('product'));
    }
    public function cuahang(){
        $category = Category::all();
        $product = Product::paginate(3);
        // dd($product);
        return view('client.page.store',compact('category','product'));
    }
    public function chitietsanpham($name=""){
        if($name!=""){
            // $name = Str::replace('-',' ',$name);
            // dd($name);
            $product = Product::where('slug',$name)->with('images')->with('productDetail')->first();
            // dd()
            // dd($product);
            return view('client.page.chitietsanpham',compact('product'));
        }
        return redirect()->back();
    }
    public function locsanpham(Request $request){
        if(!isset($request->danhmuc) && !isset($request->min) && !isset($request->max)){
            return $this->cuahang();
        }  
        $danhmuc = $request->danhmuc;
        $min = $request->min;
        $max = $request->max;
        $category = Category::all();
        $query = Product::query();
        $danhmuc = explode(',', $danhmuc);
        // dd('oke');
        if($danhmuc=='' && $min=='' && $max ==''){
            // dd('1');
            return $this->cuahang();
        }
        
        else{
            if($danhmuc != ''){
                $query->whereIn('id',$danhmuc);
            }
            if($min != ''){
                $query->where('price','>=',$min);
            }
            if($max != ''){
                $query->where('price','<=',$max);
            }
            $product = $query->paginate(3);
            return view('client.page.store',compact('category','product'));
        }
    }
    public function getSizeAndColor($id){
        // dd($id);
        dd(Auth::id());
        $productDetail = ProductDetail::where('product_id',$id)->get();
        // dd($productDetail);
        return  response()->json([
            "status"=>200,
            'data'=>$productDetail
        ]);
    }
}
