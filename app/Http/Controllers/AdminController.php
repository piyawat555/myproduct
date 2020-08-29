<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\ProductsPhoto;
use App\cartproduct;
use Image;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\editRequest;
class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function addproduct()
    {
        return view('addproduct');
    }
   
    public function index(){
            $allproduct=Product::orderBy('updated_at', 'desc')->paginate(8);
        return view('admin.admins',compact('allproduct'));
    }
    public function edit($id){
        $productid= Product::where('id',$id)->get();
            $prouctidphoto = ProductsPhoto::where('product_id',$id)->get();
            
           return view('editproduct',compact('productid','prouctidphoto'));
    } 
    public function deleteproduct($id){
    //    dd($id);
        ProductsPhoto::where('product_id',$id)->delete();
        Product::where('id',$id)->delete();
        cartproduct::where('product_id',$id)->delete();
        
        return redirect()->route('admin.dashboard');
    }

    public function deleteimg($id){
        
        ProductsPhoto::where('id',$id)->delete();
        return back();
    }

    public function editproduct(editRequest $request,$id){
      
        Product::where('id',$id)->update([
            'nameproduct' =>$request->nameproduct,
            'piceproduct' =>$request->piceproduct,
            'discriptionproduct'=>$request->discriptionproduct
        ]);
       
           if($request->photos==null){
            return redirect()->route('admin.dashboard');
           }else{
        foreach ($request->photos as $photo) {
            
           
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
            // $filename = $photo->store('public');
            ProductsPhoto::create([
                'product_id' => $id,
                'filename' => $thumbnailpath2
            ]);
        }
    }
        return redirect()->route('admin.dashboard');
    }
    
}
