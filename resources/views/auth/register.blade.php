<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <script src="{{ asset('js/login.js') }}" defer></script>
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
    
</head>
<body>   
<div class="login-wrapper">
    <div class="login-left">
        <img src="https://images4.alphacoders.com/103/thumb-1920-1030342.jpg" alt="">
        <div class="h1">คลิ๊กเพื่อสมัครสมาชิก</div>
    </div>
    <div class="login-right">
        <div class="h2">สมัครสมาชิก</div>
        <form action="{{ route('register') }}" method="POST">         
           @csrf
        <div class="form-group">
           <label for="name">name</label>
            <input type="text"  id="name" placeholder="Fullname" name="name">
            
        </div>
        <div class="form-group">
           <label for="Email">E-mail</label>
           <input type="email"  id="email" placeholder="Email" name="email" required autocomplete="email" >
           
       </div>
       <div class="form-group">
           <label for="Password">password</label>
           <input type="password"  id="password" placeholder="Password" name="password" required autocomplete="new-password">
          
       </div>
       <div class="form-group">
           <label for="Confirm Password">Confirm Password</label>
           <input type="password"  placeholder="Confirm Password" name="password_confirmation" required autocomplete="new-password">
           
       </div>
       
       <div class="button-area">          
        <button type="submit" id="btn"class="btn btn-secondary">
            <a>สมัครสมาชิก</a> 
         </button>
         <a id="btn" class="btn btn-primary" href="/">ยกเลิก</a>           
       </div>
   </form>
    </div>
</div>

</body>
</html>