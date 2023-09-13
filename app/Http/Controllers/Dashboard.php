<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Order;
use App\Models\product;
use App\Models\Sale;
use App\Models\Stock;
use Illuminate\Http\Request;

class Dashboard extends Controller
{
    //
    public function index(){
      $orders=Order::count();
      $sales=Sale::count();
      $customers=Customer::count();
      $stocks=Stock::count();
      $product=product::all();
      $date=date('Y-m-d');

      return view('dashboard',compact('orders','sales','customers','stocks','product','date'));
    }
}
