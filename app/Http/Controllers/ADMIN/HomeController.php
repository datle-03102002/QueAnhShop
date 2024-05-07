<?php

namespace App\Http\Controllers\ADMIN;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Product;
use App\Models\OrderDetail;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
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

    public function dashboard()
{
    $startDate = Carbon::now()->subDays(7);
    $endDate = Carbon::now();

    $products = Product::all();
    $data = [];
    $data1 = [];

    foreach ($products as $product) {
    //     $salesData = OrderDetail::with(['order' => function ($query) use ($startDate, $endDate) {
    //     $query->whereBetween('orderDate', [$startDate, $endDate]);
    // }])
    // ->where('product_id', $product->id)
    // ->selectRaw('DATE(order.orderDate) as date, SUM(orderdetail.quantity) as total_quantity')
    // ->groupBy('date')
    // ->get()
    // ->pluck('total_quantity', 'date')
    // ->toArray();
        $salesData = OrderDetail::join('order', 'orderdetail.order_id', '=', 'order.id')
                    ->where('orderdetail.product_id', $product->id)
                    ->whereBetween('order.orderDate', [$startDate, $endDate])
                    ->selectRaw('DATE(order.orderDate) as date, SUM(orderdetail.quantity) as total_quantity')
                    ->groupBy('date')
                    ->get()
                    ->pluck('total_quantity', 'date')
                    ->toArray();
        $salesData1 = OrderDetail::join('order', 'orderdetail.order_id', '=', 'order.id')
                    ->where('orderdetail.product_id', $product->id)
                    ->whereBetween('order.orderDate', [$startDate, $endDate])
                    ->selectRaw('DATE(order.orderDate) as date, SUM(orderdetail.quantity *10000) as total_quantity')
                    ->groupBy('date')
                    ->get()
                    ->pluck('total_quantity', 'date')
                    ->toArray();

        $data[] = [
            'label' => $product->name,
            'data' => $this->fillMissingDates($startDate, $endDate, $salesData),
        ];
        $data1[] = [
            'label' => $product->name,
            'data' => $this->fillMissingDates($startDate, $endDate, $salesData1),
        ];
    }

    $labels = $this->getDateRange($startDate, $endDate);
    foreach ($labels as $key => $label) {
        $labels[$key] = $label->format('d/m');
    }
    // dd($da);
    return view('admin.components.home',compact('data','labels','data1'));
}

private function fillMissingDates($startDate, $endDate, $salesData)
{
    $dateRange = $this->getDateRange($startDate, $endDate);
    $filledData = [];

    foreach ($dateRange as $date) {
        $formattedDate = $date->format('Y-m-d');
        $filledData[$formattedDate] = $salesData[$formattedDate] ?? 0;
    }

    return array_values($filledData);
}

private function getDateRange($startDate, $endDate)
{
    $dateRange = [];
    $currentDate = $startDate->copy();

    while ($currentDate->lte($endDate)) {
        $dateRange[] = $currentDate->copy();
        $currentDate->addDay();
    }

    return $dateRange;
}
    // public function dashboard(){
    //     $start_date = Carbon::now()->subDays(30); // Ngày bắt đầu, ví dụ lấy dữ liệu trong 30 ngày gần đây
    //     $end_date = Carbon::now(); // Ngày kết thúc, hiện tại
    //     $date_range = [];
    //     $current_date = $start_date->copy();
    //     while ($current_date->lte($end_date)) {
    //         $date_range[] = $current_date->copy();
    //         $current_date->addDay();
    //     }
    //     $orders = Order::whereBetween('orderDate', [$start_date,$end_date])
    //                ->orderBy('orderDate')
    //                ->get();
    //     $data = [];
    //     foreach ($date_range as $date) {
    //         $formatted_date = $date->format('Y-m-d');
    //         $data[$formatted_date] = 0; // Khởi tạo dữ liệu cho ngày này là 0
    //     }
    //     // $labels = $orders->pluck('orderDate')->map(function ($date) {
    //     //     return Carbon::parse($date)->format('Y-m-d'); // Định dạng lại ngày theo định dạng mong muốn
    //     // });
    //     // dd($orders);
    //     foreach ($orders as $order) {
    //         $order_date = Carbon::parse($order->orderDate)->format('Y-m-d');
    //         $data[$order_date] += 1; // Tăng giá trị đếm cho ngày này lên 1
    //     }
    //     // dd($productsWithSales);
    //         // $data =[
    //         //     'data'=>[
    //         //         $data,
    //         //         $labels
    //         //     ]
    //         // ];
    //     return view('admin.components.home',compact('data'));
    // }
    public function thongke(Request $request){
        // dd($request);
        $startDate = explode('-',$request->start_date);
        $endDate = explode('-',$request->end_date);
        $doanhthu = Order::select(
                    Order::raw('YEAR(orderDate) AS year'),
                    Order::raw('MONTH(orderDate) AS month'),
                    Order::raw('SUM(totalMoney) AS doanhthu')
                    )
                    ->whereRaw("MONTH(orderDate)")
                    ->groupBy('year', 'month')
                    ->orderBy('year', 'desc')
                    ->orderBy('month', 'desc')
                    ->get();
        
    }
}
