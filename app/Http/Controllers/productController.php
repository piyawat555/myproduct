<?php

namespace App\Http\Controllers;
use App\Http\Requests\editRequest;
use Illuminate\Http\Request;
use App\Product;
use App\ProductsPhoto;
use Image;
use Illuminate\Support\Facades\Storage;
class productController extends Controller
{
    public function index($id){
           $productid= Product::where('id',$id)->get();
            $prouctidphoto = ProductsPhoto::where('product_id',$id)->get();
            
           return view('product',compact('productid','prouctidphoto'));
    }

  
    
   
   
    public function firstpage(){
   
    $allproduct=  Product::orderBy('updated_at', 'desc')->paginate(8);
        return view('index',compact('allproduct'));
    }
}
