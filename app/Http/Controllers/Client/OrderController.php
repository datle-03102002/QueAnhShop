<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
class OrderController extends Controller
{
    public function index(){
        // dd(Auth::user()->id);
        $cart = Cart::with(['product'=>function($query){
            $query->with('images')->select('id', 'name', 'price', 'slug');
        }])->where('user_id',Auth::id())->get();
        foreach ($cart as $key=>$item) {
            $quantity  = $item->product->productDetail->where('size',$item->size)->where('color',$item->color)->select('quantity')->first();
            $item['stock']=$quantity['quantity'];
        }
        return view('client.page.thanhtoan',compact('cart'));
    }
    public function OrderSucess(){

    }
    public function checkout(Request $request){
        // dd($request);
        if($request->checkout == 'cash'){
            
        }
        else{
            return $this->Create_VNPay_payment($request->address_rdo);
        }
    }

    public function responseVNPAY(Request $request){
        $vnp_SecureHash = $request->vnp_SecureHash;
        $vnp_HashSecret = 'NAVBRQKIYHLUQBUWRGJFKDZKOVFNGYOO';
        $inputData = array();
        foreach ($_GET as $key => $value) {
            if (substr($key, 0, 4) == "vnp_") {
                $inputData[$key] = $value;
            }
        }
        
        unset($inputData['vnp_SecureHash']);
        ksort($inputData);
        $i = 0;
        $hashData = "";
        foreach ($inputData as $key => $value) {
            if ($i == 1) {
                $hashData = $hashData . '&' . urlencode($key) . "=" . urlencode($value);
            } else {
                $hashData = $hashData . urlencode($key) . "=" . urlencode($value);
                $i = 1;
            }
        }

        $secureHash = hash_hmac('sha512', $hashData, $vnp_HashSecret);
        if ($secureHash == $vnp_SecureHash) {
            dd($request->vnp_ResponseCode);
            if ($request->vnp_ResponseCode == '00') {
                // dd('oke');
            }
            else{

            }
        }
    }
    public function Create_VNPay_payment($address_rdo){
        // dd('oke');
        $cart = Cart::where('user_id',Auth::id())->get();
        $code_cart = rand(0,9999) +1;

        $tong =0 ;
        foreach ($cart as $item) {
            $tong +=$item->quantity*$item->product->price;
        }

        $vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
        $vnp_Returnurl = "http://127.0.0.1:8000/responseVNPAY";
        $vnp_TmnCode = "3XZ62T96";//Mã website tại VNPAY 
        $vnp_HashSecret = "NAVBRQKIYHLUQBUWRGJFKDZKOVFNGYOO"; //Chuỗi bí mật
        $order_id = $code_cart;
        $vnp_TxnRef = $order_id;
        $vnp_OrderInfo = 'Thanh toán đơn hàng';
        $vnp_OrderType = 'billpayment';
        $vnp_Amount = $tong * 100;
        $vnp_Locale = 'vn';
        $vnp_BankCode = 'ncb';
        $vnp_IpAddr = $_SERVER['REMOTE_ADDR'];
        
        $inputData = array(
            "vnp_Version" => "2.1.0",
            "vnp_TmnCode" => $vnp_TmnCode,
            "vnp_Amount" => $vnp_Amount,
            "vnp_Command" => "pay",
            "vnp_CreateDate" => date('YmdHis'),
            "vnp_CurrCode" => "VND",
            "vnp_IpAddr" => $vnp_IpAddr,
            "vnp_Locale" => $vnp_Locale,
            "vnp_OrderInfo" => $vnp_OrderInfo,
            "vnp_OrderType" => $vnp_OrderType,
            "vnp_ReturnUrl" => $vnp_Returnurl,
            "vnp_TxnRef" => $vnp_TxnRef
        );
        if (isset($vnp_BankCode) && $vnp_BankCode != "") {
            $inputData['vnp_BankCode'] = $vnp_BankCode;
        }
        if (isset($vnp_Bill_State) && $vnp_Bill_State != "") {
            $inputData['vnp_Bill_State'] = $vnp_Bill_State;
        }
        ksort($inputData);
        $query = "";
        $i = 0;
        $hashdata = "";
        foreach ($inputData as $key => $value) {
            if ($i == 1) {
                $hashdata .= '&' . urlencode($key) . "=" . urlencode($value);
            } else {
                $hashdata .= urlencode($key) . "=" . urlencode($value);
                $i = 1;
            }
            $query .= urlencode($key) . "=" . urlencode($value) . '&';
        }
        $vnp_Url = $vnp_Url . "?" . $query;
        if (isset($vnp_HashSecret)) {
            $vnpSecureHash =   hash_hmac('sha512', $hashdata, $vnp_HashSecret);//  
            $vnp_Url .= 'vnp_SecureHash=' . $vnpSecureHash;
        }
        return Redirect($vnp_Url);   
    }
}
