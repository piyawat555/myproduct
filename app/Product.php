<?php

namespace App;
use App\Product;
use App\ProductsPhoto;
use App\cartproduct;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['nameproduct','piceproduct','discriptionproduct'];
    protected $primaryKey = 'id';
    public function photoproducts()
    {
        return $this->hasMany(ProductsPhoto::class,'product_id');
    }


    
    public function productscarts()
    {
        return $this->belongsTo(cartproduct::class,'id');
    }

   
}
