<?php

namespace App\Http\Controllers;
use Auth;
use App\cartproduct;
use Illuminate\Http\Request;
use App\User;
class cartController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request){
       
       $user= Auth::user()->id;
        $cartuser=cartproduct::where('user_id',$request->id)->get();
        $userto =User::where('id',$user)->get();
        // dd($user);
        if(!$cartuser->isNotEmpty()){    
            foreach ($userto as $test2){
            }    
            $this->authorize('delete',$test2);
            return view('cart',compact('cartuser','userto'));
        }else{
            foreach ($cartuser as $test){
            }
            // dd($test);
            $this->authorize('view',$test);
            return view('cart',compact('cartuser','userto'));
        }
       
        // return view('cart',compact('cartuser'));
    }
    public function cart(Request $request){
       $numberproduct=$request->get('numberproduct');
       $product_id=$request->get('product_id');
       $user_id=Auth::user()->id;
       $dtest= cartproduct::where('user_id',$user_id)->get();
       
       if(!$dtest->isNotEmpty()){
        cartproduct::create([
            'product_id'=>$product_id,
            'user_id'=>$user_id,
            'numproduct'=>$numberproduct
        ]);
        
       } else if(!$dtest->isEmpty()){
        foreach($dtest as $testcart){
            $rr=$testcart->product_id;
        }if("$rr"==="$product_id"){
            cartproduct::firstOrCreate([
                'product_id'=>$product_id,
                'user_id'=>$user_id,
                'numproduct'=>$numberproduct
            ]);
           

        }else{
            cartproduct::firstOrCreate([
                'product_id'=>$product_id,
                'user_id'=>$user_id,
                'numproduct'=>$numberproduct
            ]);
        }


    }




     
    return redirect()->route('product',['id' =>$product_id]);
    }

    public function remove($id){
        cartproduct::where('id',$id)->delete();
        return back();
    }
}
