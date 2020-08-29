<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $allproduct=  Product::orderBy('updated_at', 'desc')->paginate(8);
        return view('home',compact('allproduct'));
       
    }
}
