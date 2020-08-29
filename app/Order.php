<?php

namespace App;
use App\Orderproduct;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['user_id','addressuserorder','filename','approve'];
    
    public function orders()
    {
        return $this->hasMany(Orderproduct::class,'order_id');
    }

    public function useroders()
    {
        
        return $this->hasMany(User::class,'id','user_id');
    }
}
