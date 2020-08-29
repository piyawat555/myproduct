<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\orderproduct;
class adminOrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function productwait(){
       $order= Order::where('approve',0)->orderBy('created_at', 'ASC')->paginate(8);
       
        return view('admin.adminproductwait',compact('order'));
    }
    public function allowproduct($id){
        Order::where('id',$id)->update([
            'approve'=>1
        ]);
        return back();
    }
    public function dontallowproduct($id){
        Order::where('id',$id)->update([
            'approve'=>3
        ]);
        return back();
    }
}
