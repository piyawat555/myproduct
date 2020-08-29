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
            <img src="https://images6.alphacoders.com/100/1007788.jpg" alt="">
            <div class="h1">คลิกเพื่อเข้าสู่ระบบ</div>
        </div>
        <div class="login-right">
            <div class="h2">เข้าสู่ระบบ</div>
            <form method="POST" action="{{ route('login') }}">         
               @csrf       
            <div class="form-group">
               <label for="Email">E-mail</label>
               
               <input id="email" type="email" placeholder="Email"  name="email" required autocomplete="email" >
             
           </div>
           <div class="form-group">
               <label for="Password">password</label>
              
               <input type="password"  id="password" placeholder="Password" name="password" required autocomplete="password">
            
           </div>
          
           <div class="button-area">
               
               <button type="submit" id="btn"class="btn btn-secondary">
                  <a>เข้าสู่ระบบ</a> 
               </button>
               <a href="/"class="btn btn-primary" id="btn" >ยกเลิก</a>    
                          
           </div>
       </form>
        </div>
    </div>

</body>
</html>

{{-- <div class="card-body">
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="form-group row">
            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

            <div class="col-md-6">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

            <div class="col-md-6">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <div class="col-md-6 offset-md-4">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                    <label class="form-check-label" for="remember">
                        {{ __('Remember Me') }}
                    </label>
                </div>
            </div>
        </div>

        <div class="form-group row mb-0">
            <div class="col-md-8 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Login') }}
                </button>

                @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif
            </div>
        </div>
    </form>
</div> --}}