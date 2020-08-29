<?php

namespace App;
use App\Product;
use App\ProductsPhoto;
use Illuminate\Database\Eloquent\Model;

class ProductsPhoto extends Model
{
    protected $fillable = ['product_id', 'filename'];
    
    
    public function products()
    {
        return $this->belongsTo(Product::class);
    }
}
