<?php

namespace App\Http\Controllers;
use App\Http\Requests\UploadRequest;
use Illuminate\Http\Request;
use App\Product;
use App\ProductsPhoto;
use Image;
use Illuminate\Support\Facades\Storage;
class UploadController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function uploadSubmit(UploadRequest $request)
    {
        
        
        $product = Product::create($request->all());
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
           $test= ProductsPhoto::create([
                'product_id' => $product->id,
                'filename' => $thumbnailpath2
            ]);
        }
       
        return redirect('product/'.$product->id);
    }
}
