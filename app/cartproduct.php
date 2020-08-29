<?php

namespace App;
use App\Product;
use App\cartproduct;
use Illuminate\Database\Eloquent\Model;

class cartproduct extends Model
{
    protected $fillable = ['user_id','product_id','numproduct'];
    protected $primaryKey = 'product_id';
    public function carts(){
        return $this->hasMany(Product::class,'id');
    }

    public function cartsuser(){
        return $this->belongsTo(cartproduct::class,'user_id');
    }
}
