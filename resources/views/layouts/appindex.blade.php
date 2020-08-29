<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mypage</title>
    <script src="{{ asset('js/myscrip.js') }}" defer></script>
    <script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous"></script>
   
   
    
    <script src="{{ asset('js/sweet.js') }}" ></script>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
</head>
<body>
    <div class="header">
        <div class="container">
            <div class="navbar">
                <div class="logo">
                    <a href="/">
                        <img src="https://www.pngkey.com/png/full/233-2331134_shopee-700x217-shopee-logo-no-background.png" width="125px">
                    </a>
                                        
                </div>
                <nav>
                    <ul id="MenuItems">
                       
                        @if (Auth::guard('admin')->check())
                        <li><a href="{{ route('admin.allowproduct') }}">ตรวจสอบสินค้า</a></li>  
                        <li><a href="{{ route('admin.dashboard') }}">สินค้าทั้งหมด</a></li>  
                        <li><a href="{{ route('admin.addproduct') }}">เพิ่มข้อมูลสินค้า</a></li> 
                       
                        @endif                 
                         @guest

                        <li><a href="{{ route('login') }}">เข้าสู่ระบบสมาชิก</a></li>                        
                        @if (Route::has('register'))
                        <li><a href="{{ route('register') }}">{{ __('สมัครสมาชิก') }}</a></li> 
                        @endif
                     @else
                      
                     @if (Auth::guard('web')->check())
                   
                     <li><a href="/home">สินค้าต่างๆ</a></li>  
                     <li><a href="/cart/{{ Auth::user()->id }}">สินค้าของคุณ</a></li>  
                     <li><a href="{{ route('user.status',Auth::user()->id) }}">สถานะสินค้าที่สั่ง</a></li>
                     @endif
                     
                     <img src="https://p7.hiclipart.com/preview/442/477/305/computer-icons-user-profile-avatar-profile.jpg"  width="30px" height="30px" >              
                     <div class="dropdown">
                        <a class="dropbtn">ผู้ใช้ : {{ Auth::user()->name }}</a>
                        <div class="dropdown-content">
                            @if (Auth::guard('web')->check())
                            <li><a class="dropdown-item" href="{{ route('user.logout') }}"
                                onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();">
                                 {{ __('Logout') }}
                             </a> 
                         </li>  
                         @endif
                         @if (Auth::guard('admin')->check())
                            <li><a class="dropdown-item" href="{{ route('admin.logout') }}"
                                onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();">
                                 {{ __('Logout') }}
                             </a> 
                         </li>  
                         @endif
                        </div>
                      </div>
                                        
                    </ul>
                   
                    @endguest
                </nav>
                
                <img src="https://cdn3.iconfinder.com/data/icons/random-icon-set/512/list_1-512.png" class="menu-icon" onclick="menutoggle()">
            </div>
            
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        
        
         

    @yield('content')
        

    
</body>
</html>