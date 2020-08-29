<?php

namespace App\Http\Controllers;
use App\Order;
use App\User;
use Illuminate\Http\Request;

class statusOrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function status($id){
        $oderstatus=Order::where('user_id',$id)->get();
        $userto =User::where('id',$id)->get();
        if(!$userto->isNotEmpty()){
            return view('status',compact('oderstatus','userto'));
        }else{
            foreach($userto as $userss){

            }
            $this->authorize('update',$userss);
            return view('status',compact('oderstatus','userto'));
        }
        
    }
}
