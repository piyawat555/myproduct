<?php

namespace App\Http\Controllers;
use App\Http\Requests\orderproductRequest;
use Illuminate\Http\Request;
use App\Order;
use App\Orderproduct;
use App\cartproduct;
use Illuminate\Support\Facades\Storage;
use session;
use Image;
use Auth;
class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function order(Request $request){
        $coutns= count($request->input('numproduct'));
        $product_id= $request->input('product_id');
        $numproduct= $request->input('numproduct');
  
        
       
      $user=Auth::user()->id;
      
        $adres=$request->get('addressuserorder');
    foreach ($request->file('usersellphotos') as $photo) {           
        $filenamewithextension = $photo->getClientOriginalName();
        $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
        $extension = $photo->getClientOriginalExtension();
        $filenametostore = $filename.'_'.uniqid().'.'.$extension;
        Storage::put('public/images/'. $filenametostore, fopen($photo, 'r+'));
        Storage::put('public/images/thumbnail/'. $filenametostore, fopen($photo, 'r+'));
        $thumbnailpath = public_path('storage/images/thumbnail/'.$filenametostore);
        $thumbnailpath2= 'storage/images/thumbnail/'.$filenametostore;
        $img = Image::make($thumbnailpath)->fit(500, 500, function($constraint) {
            $constraint->aspectRatio();
        });
        $img->save($thumbnailpath);
       
       $test= Order::create([ 
            'user_id'=> $user,
            'addressuserorder' =>$adres,           
            'filename' => $thumbnailpath2,            
            'approve'=>0
        ]);
    }
    
   $order_id= $test->id;
  
       
   for ($i=0; $i < $coutns ; $i++) { 
   
    Orderproduct::create([ 
        'order_id'=>$order_id,
        'product_id'=> $product_id[$i],      
        'numproduct'=> $numproduct[$i]
        ]);
    }  
    $yo=cartproduct::where('user_id',$user)->get();
    foreach ($yo as $deleteproduct) {
        cartproduct::where('product_id',$deleteproduct->product_id)->delete();
      
    }
           
    return back();
    
    }
}
