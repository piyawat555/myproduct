<?php

namespace App\Http\Controllers\Auth;
use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:admin',['except' =>['logout']]);
    }
    public function showLoginForm(){
        return view('auth.admin-login');
    }
    public function login(Request $request){
      $this->validate($request,[
        'email' => 'required|email',
        'password'=>'required|min:6'
      ]);
    //   dd(Auth::guard('admin'));
    if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {

        return redirect()->intended(route('admin.dashboard'));
    }
    
      return redirect()->back()->withInput($request->only('email'));
    }

    public function logout()
    {
       Auth::guard('admin')->logout();


      
        return redirect('/');
    }
    
}
