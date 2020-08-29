<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
class Orderproduct extends Model
{
    protected $guarded = [''];
    // protected $fillable = ['order_id','product_id','user_id','numproduct'];
    // protected $guarded = [''];
    protected $primaryKey = 'product_id';
    
    public function ordersphoto()
    {
        return $this->hasMany(Product::class,'id','product_id');
    }

}
