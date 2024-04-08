<?php

namespace App\Http\Controllers\ADMIN;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\productDetail;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Log;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product = Product::with('category')->paginate(10);
        // dd($product);
        return view('admin.components.Product.index',compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $category = Category::all();
        
        return view('admin.components.Product.index',compact('category'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        // dd($data);
        $product = new Product;
        $product->name = $data['name'];
        $product->description = $data['description'];
        $product->price = $data['price'];
        $product->stock = $data['quantity'];
        $product->create_at = Carbon::now();
        $product->create_by = 'admin';
        $product->category_id = $data['category'];
        $product->save();
        $productID = $product->id;
        // dd($productID);

        foreach($data['size'] as $key1=>$size){
            foreach ($data['color'] as $key2 => $color) {
                $product_detail = new productDetail;
                // dd($data[$size]);
                $product_detail->product_id = $productID;
                $product_detail->color = $color;
                $product_detail->size = $size;
                $product_detail->quantity = $data[$size];
                $product_detail->created_at = Carbon::now();
                $product_detail->save();
            }
        }
        return 'ok';



    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // $product = Product::find($id);
        $product = Product::with('productDetail')->find($id);
        $category = Category::all();
        // $productDetail = productDetail::where('product_id',$product->id)->get();
        // in_array('small', array_values($product_detail['size'));
        // dd($product->productDetail);
        return view('admin.components.Product.edit',compact('product','category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function changeStatus($status, $id){
        
        $product = Product::find($id);
        $product->status= $status == 'true' ? 1:0;
        $product->save();
        return response()->json(['code' => 200, 'mes' => $status == 'true' ? 1:0]);
    }
}
