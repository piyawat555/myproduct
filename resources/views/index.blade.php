@extends('layouts.appindex')

@section('content')
<div class="row">
    <div class="col-2">
        
        <h1>ยินดีต้อนรับ<br>เข้าสู่เว็บของเรา !</h1>
        <p>ขอให้ทุกท่านสนุกไปกับการเลือกซื้อสินค้า<br> ต่าง ๆ ที่มีคนลงขาย</p>
        <a href="" class="btn">ดูรายละเอียดต่าง ๆ  &#10137;</a>
    </div>
    <div class="col-2">
        <img src="https://www.kindpng.com/picc/b/292/2924605.png" alt="">
    </div>
</div>
</div>
<div class="small-container">
    

    <h2 class="title">สินค้าตัวอย่าง</h2>
    <div class="row">
        @foreach ($allproduct as $item)       
        <div class="col-4">
            <a href="/product/{{ $item->id }}">
            <img src="{{ $item->photoproducts->first()->filename}}" alt="">
            </a>
            <h4>{{ $item->nameproduct }}</h4>
            <div class="rating">
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star-o"></i>
            </div>
            <p>{{ $item->piceproduct }} ฿</p>
        </div>
        @endforeach
    </div>
    {{ $allproduct->links() }}
   
    
</div>
<div class="offer">
    <div class="small-container">
        <div class="row">
            <div class="col-2">
                <img src="https://www.pngkey.com/png/full/227-2275536_graphic-download-gundam-vector-astray-00-raiser-hg.png" width="450px" height="350px" class="offer-img">
            </div>
            <div class="col-2">
                <p>Exclusively Avalible on Redstroe </p>
                <h1>Special Gundum </h1>
                <small>The Mi Smartband 4 features a 39.9% larger (than mi Band 3 )
                    AMOLLED color full-touch display with adjustable brightness,so 
                    everything is clear as can be.
                </small>
                <a href="" class="btn">Buy Now &#8594;</a>
            </div>
        </div>
    </div>
</div>
<div class="testimonial">
    <div class="small-container">
        <div class="row">
            <div class="col-3">
                <i class="fa fa-quote-left"></i>
                <p>asdasdasdasdasdasdasd
                    asdasdasfdasgfdgsfda
                    dasdasdasdasdasdasdxz
                </p>
                <div class="rating">
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <img src="https://sortgaming.com/wp-content/uploads/2019/10/Kimetsu-no-Yaiba-Mugen-Ressha-Hen-%E0%B8%8B%E0%B8%AD%E0%B8%A3%E0%B9%8C%E0%B8%97%E0%B9%80%E0%B8%81%E0%B8%A1%E0%B8%A1%E0%B8%B4%E0%B9%88%E0%B8%87-Sortgaming.jpg" alt="">
                <h3>Piyawat</h3>
            </div>
            <div class="col-3">
                <i class="fa fa-quote-left"></i>
                <p>asdasdasdasdasdasdasd
                    asdasdasfdasgfdgsfda
                    dasdasdasdasdasdasdxz
                </p>
                <div class="rating">
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <img src="https://sortgaming.com/wp-content/uploads/2019/10/Kimetsu-no-Yaiba-Mugen-Ressha-Hen-%E0%B8%8B%E0%B8%AD%E0%B8%A3%E0%B9%8C%E0%B8%97%E0%B9%80%E0%B8%81%E0%B8%A1%E0%B8%A1%E0%B8%B4%E0%B9%88%E0%B8%87-Sortgaming.jpg" alt="">
                <h3>Piyawat</h3>
            </div>
            <div class="col-3">
                <i class="fa fa-quote-left"></i>
                <p>asdasdasdasdasdasdasd
                    asdasdasfdasgfdgsfda
                    dasdasdasdasdasdasdxz
                </p>
                <div class="rating">
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <img src="https://sortgaming.com/wp-content/uploads/2019/10/Kimetsu-no-Yaiba-Mugen-Ressha-Hen-%E0%B8%8B%E0%B8%AD%E0%B8%A3%E0%B9%8C%E0%B8%97%E0%B9%80%E0%B8%81%E0%B8%A1%E0%B8%A1%E0%B8%B4%E0%B9%88%E0%B8%87-Sortgaming.jpg" alt="">
                <h3>Piyawat</h3>
            </div>
        </div>
    </div>
</div>

<div class="brands">
    <div class="small-container">
        <div class="row">
            <div class="col-5">
                <img src="http://cdn28.us1.fansshare.com/photograph/mercedes/mercedes-benz-logo-transparent-background-logo-223668387.jpg" >
            </div>
            <div class="col-5">
                <img src="https://image.shutterstock.com/image-vector/coffee-logo-template-260nw-685627036.jpg">
            </div>
            <div class="col-5">
                <img src="https://image.shutterstock.com/image-photo/image-260nw-270948935.jpg" >
            </div>
            <div class="col-5">
                <img src="https://n7.nextpng.com/sticker-png/165/394/sticker-png-logo-pepsi-brand-product-label-pepsi-blue-text-label-trademark.png" >
            </div>
            <div class="col-5">
                <img src="https://pngimg.com/uploads/paypal/paypal_PNG12.png" >
            </div>
        </div>
    </div>
</div>

<div class="footer">
    <div class="container">
        <div class="row">
            <div class="footer-col-1">
                <h3>Download our App</h3>
                <p>Download App for Android and ios mobile phone</p>
                <div class="app-logo">
                    <img src="https://cdn.worldvectorlogo.com/logos/google-play-badge.svg" alt="">
                    <img src="https://sbobetsport24.files.wordpress.com/2018/06/app-store-logo.png" alt="">
                </div>                    
            </div>
            <div class="footer-col-2">
                <img src="https://cdn3.f-cdn.com/contestentries/864793/13943035/57fbec0b51644_thumb900.jpg" alt="">
                <p>Download App for Android and ios mobile phone</p>
            </div>
            <div class="footer-col-3">
                <h3>Useful Links</h3>
                <ul>
                    <li>Coupons</li>
                    <li>blog Post</li>
                    <li>Return Policy</li>
                    <li>Join Affiliate</li>
                </ul>
            </div>
            <div class="footer-col-4">
                <h3>Follow us</h3>
                <ul>
                    <li>FackBook</li>
                    <li>Twitter</li>
                    <li>Instagram</li>
                    <li>Youtube</li>
                </ul>
            </div>
        </div>
        <hr>
        <p class="copyright">Copyright 2020 - EZ</p>            
    </div>
</div>
@endsection
    {{-- <div class="header">
        <div class="container">
            <div class="navbar">
                <div class="logo">
                    <img src="https://www.pngkey.com/png/full/233-2331134_shopee-700x217-shopee-logo-no-background.png" width="125px">                    
                </div>
                <nav>
                    <ul id="MenuItems">
                        <li><a href="">หน้าหลัก</a></li>  
                        <li><a href="">สินค้าต่าง ๆ</a></li> 
                        <li><a href="">About</a></li> 
                        @guest
                        <li><a href="{{ route('login') }}">เข้าสู่ระบบ</a></li>                        
                        @if (Route::has('register'))
                        <li><a href="{{ route('register') }}">{{ __('สมัครสมาชิก') }}</a></li> 
                        @endif
                     @else                   
                     <li><a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a> 
                    </li>                     
                    </ul>
                    @endguest
                </nav>
                <img src="https://www.kindpng.com/picc/b/78/788306.png" width="30px" height="30px" >
                <img src="https://cdn3.iconfinder.com/data/icons/random-icon-set/512/list_1-512.png" class="menu-icon" onclick="menutoggle()">
            </div>
            
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
           
            <div class="row">
                <div class="col-2">
                    <h1>ยินดีต้อนรับ<br>เข้าสู่เว็บของเรา !</h1>
                    <p>ขอให้ทุกท่านสนุกไปกับการเลือกซื้อสินค้า<br> ต่าง ๆ ที่มีคนลงขาย</p>
                    <a href="" class="btn">ดูรายละเอียดต่าง ๆ  &#10137;</a>
                </div>
                <div class="col-2">
                    <img src="https://www.kindpng.com/picc/b/292/2924605.png" alt="">
                </div>
            </div>

        </div>

    </div>
    

    <div class="categories">
        <div class="small-container">
            <div class="row">
                <div class="col-3">
                    <img src="https://p.kindpng.com/picc/s/278-2780774_transparent-rc-car-png-remote-controlled-car-png.png" alt="">
                </div>
                <div class="col-3">
                    <img src="https://p.kindpng.com/picc/s/8-85142_mobile-phone-accessories-png-transparent-png.png" alt="">
                </div>
                <div class="col-3">
                    <img src="https://p.kindpng.com/picc/s/13-131957_mitsubishi-png-image-mobil-pajero-sport-png-transparent.png" alt="">
                </div>
            </div>
        </div>
        
    </div>
    
    <div class="small-container">
        <h2 class="title">ตัวอย่างสินค้า</h2>
        <div class="row">
            <div class="col-4">
                <img src="https://ae01.alicdn.com/kf/HTB18eYZjmYH8KJjSspdq6ARgVXaw/Gundam-Avalanche-Exia-Dash-HG-gundam.jpg" alt="">
                <h4>GunDam</h4>
                <div class="rating">
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>25.00$</p>
            </div>
            <div class="col-4">
                <img src="https://h.lnwfile.com/fqfsax.jpg" alt="">
                <h4>GunDam</h4>
                <div class="rating">
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star-half-o"></i>
                </div>
                <p>50.00$</p>
            </div>
            <div class="col-4">
                <img src="https://cf.shopee.co.th/file/0a1d967f22044c821e2eeb9ed598ca20" alt="">
                <h4>GunDam</h4>
                <div class="rating">
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star-half-o" ></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>100.00$</p>
            </div>
            <div class="col-4">
                <img src="https://d1j36w0bax18n0.cloudfront.net/media/catalog/product/r/b/rbs29220755-_2_.jpg" alt="">
                <h4>GunDam</h4>
                <div class="rating">
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star-half-o" ></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>150.00$</p>
            </div>
        </div>

        <h2 class="title">Latest Products</h2>
        <div class="row">
            <div class="col-4">
                <img src="https://imaginaire.com/en/images/GUNDAM-00-QANT-CELESTIAL-BEING-MOBILE-SUIT-GNT-0000-MASTER-GRADE-MOBILE-SUIT-GUNDAM-00__4543112656544-Z.JPG" alt="">
                <h4>GunDam</h4>
                <div class="rating">
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>25.00$</p>
            </div>
            <div class="col-4">
                <img src="https://da.lnwfile.com/eua8fl.jpg" alt="">
                <h4>GunDam</h4>
                <div class="rating">
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star-half-o"></i>
                </div>
                <p>50.00$</p>
            </div>
            <div class="col-4">
                <img src="https://cn.lnwfile.com/xxen5b.jpg" alt="">
                <h4>GunDam</h4>
                <div class="rating">
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star-half-o" ></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>100.00$</p>
            </div>
            <div class="col-4">
                <img src="https://dh.lnwfile.com/gjvdf0.jpg" alt="">
                <h4>GunDam</h4>
                <div class="rating">
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star-half-o" ></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>150.00$</p>
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <img src="https://previews.123rf.com/images/amnachphoto/amnachphoto1710/amnachphoto171000028/87374433-bangkok-thailand-october-11-2017-gundam-model-scale-1-100-produced-by-bandai-japan-gundam-plastic-mo.jpg" alt="">
                <h4>GunDam</h4>
                <div class="rating">
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>25.00$</p>
            </div>
            <div class="col-4">
                <img src="https://dv.lnwfile.com/m6jgpr.jpg" alt="">
                <h4>GunDam</h4>
                <div class="rating">
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star-half-o"></i>
                </div>
                <p>50.00$</p>
            </div>
            <div class="col-4">
                <img src="https://dv.lnwfile.com/snamlx.jpg" alt="">
                <h4>GunDam</h4>
                <div class="rating">
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star-half-o" ></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>100.00$</p>
            </div>
            <div class="col-4">
                <img src="https://inwfile.com/s-fu/lfrk4i.jpg" alt="">
                <h4>GunDam</h4>
                <div class="rating">
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star-half-o" ></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>150.00$</p>
            </div>
        </div>
    </div>
    <div class="offer">
        <div class="small-container">
            <div class="row">
                <div class="col-2">
                    <img src="https://www.pngkey.com/png/full/227-2275536_graphic-download-gundam-vector-astray-00-raiser-hg.png" width="450px" height="350px" class="offer-img">
                </div>
                <div class="col-2">
                    <p>Exclusively Avalible on Redstroe </p>
                    <h1>Special Gundum </h1>
                    <small>The Mi Smartband 4 features a 39.9% larger (than mi Band 3 )
                        AMOLLED color full-touch display with adjustable brightness,so 
                        everything is clear as can be.
                    </small>
                    <a href="" class="btn">Buy Now &#8594;</a>
                </div>
            </div>
        </div>
    </div>
    <div class="testimonial">
        <div class="small-container">
            <div class="row">
                <div class="col-3">
                    <i class="fa fa-quote-left"></i>
                    <p>asdasdasdasdasdasdasd
                        asdasdasfdasgfdgsfda
                        dasdasdasdasdasdasdxz
                    </p>
                    <div class="rating">
                        <i class="fa fa-star" ></i>
                        <i class="fa fa-star" ></i>
                        <i class="fa fa-star" ></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <img src="https://sortgaming.com/wp-content/uploads/2019/10/Kimetsu-no-Yaiba-Mugen-Ressha-Hen-%E0%B8%8B%E0%B8%AD%E0%B8%A3%E0%B9%8C%E0%B8%97%E0%B9%80%E0%B8%81%E0%B8%A1%E0%B8%A1%E0%B8%B4%E0%B9%88%E0%B8%87-Sortgaming.jpg" alt="">
                    <h3>Piyawat</h3>
                </div>
                <div class="col-3">
                    <i class="fa fa-quote-left"></i>
                    <p>asdasdasdasdasdasdasd
                        asdasdasfdasgfdgsfda
                        dasdasdasdasdasdasdxz
                    </p>
                    <div class="rating">
                        <i class="fa fa-star" ></i>
                        <i class="fa fa-star" ></i>
                        <i class="fa fa-star" ></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <img src="https://sortgaming.com/wp-content/uploads/2019/10/Kimetsu-no-Yaiba-Mugen-Ressha-Hen-%E0%B8%8B%E0%B8%AD%E0%B8%A3%E0%B9%8C%E0%B8%97%E0%B9%80%E0%B8%81%E0%B8%A1%E0%B8%A1%E0%B8%B4%E0%B9%88%E0%B8%87-Sortgaming.jpg" alt="">
                    <h3>Piyawat</h3>
                </div>
                <div class="col-3">
                    <i class="fa fa-quote-left"></i>
                    <p>asdasdasdasdasdasdasd
                        asdasdasfdasgfdgsfda
                        dasdasdasdasdasdasdxz
                    </p>
                    <div class="rating">
                        <i class="fa fa-star" ></i>
                        <i class="fa fa-star" ></i>
                        <i class="fa fa-star" ></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <img src="https://sortgaming.com/wp-content/uploads/2019/10/Kimetsu-no-Yaiba-Mugen-Ressha-Hen-%E0%B8%8B%E0%B8%AD%E0%B8%A3%E0%B9%8C%E0%B8%97%E0%B9%80%E0%B8%81%E0%B8%A1%E0%B8%A1%E0%B8%B4%E0%B9%88%E0%B8%87-Sortgaming.jpg" alt="">
                    <h3>Piyawat</h3>
                </div>
            </div>
        </div>
    </div>

    <div class="brands">
        <div class="small-container">
            <div class="row">
                <div class="col-5">
                    <img src="http://cdn28.us1.fansshare.com/photograph/mercedes/mercedes-benz-logo-transparent-background-logo-223668387.jpg" >
                </div>
                <div class="col-5">
                    <img src="https://image.shutterstock.com/image-vector/coffee-logo-template-260nw-685627036.jpg">
                </div>
                <div class="col-5">
                    <img src="https://image.shutterstock.com/image-photo/image-260nw-270948935.jpg" >
                </div>
                <div class="col-5">
                    <img src="https://n7.nextpng.com/sticker-png/165/394/sticker-png-logo-pepsi-brand-product-label-pepsi-blue-text-label-trademark.png" >
                </div>
                <div class="col-5">
                    <img src="https://pngimg.com/uploads/paypal/paypal_PNG12.png" >
                </div>
            </div>
        </div>
    </div>

    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col-1">
                    <h3>Download our App</h3>
                    <p>Download App for Android and ios mobile phone</p>
                    <div class="app-logo">
                        <img src="https://cdn.worldvectorlogo.com/logos/google-play-badge.svg" alt="">
                        <img src="https://sbobetsport24.files.wordpress.com/2018/06/app-store-logo.png" alt="">
                    </div>                    
                </div>
                <div class="footer-col-2">
                    <img src="https://cdn3.f-cdn.com/contestentries/864793/13943035/57fbec0b51644_thumb900.jpg" alt="">
                    <p>Download App for Android and ios mobile phone</p>
                </div>
                <div class="footer-col-3">
                    <h3>Useful Links</h3>
                    <ul>
                        <li>Coupons</li>
                        <li>blog Post</li>
                        <li>Return Policy</li>
                        <li>Join Affiliate</li>
                    </ul>
                </div>
                <div class="footer-col-4">
                    <h3>Follow us</h3>
                    <ul>
                        <li>FackBook</li>
                        <li>Twitter</li>
                        <li>Instagram</li>
                        <li>Youtube</li>
                    </ul>
                </div>
            </div>
            <hr>
            <p class="copyright">Copyright 2020 - EZ</p>            
        </div>
    </div> --}}
    
 


