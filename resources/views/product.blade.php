@extends('layouts.appindex')

@section('content')
</div>
</div>

    <div class="small-container singer-product">            
        <div class="row">         
            
            <div class="col-2" id="discripproduct">
                
                
                <img src="/{{$prouctidphoto->first()->filename}}"  width="100%" id="productimg">
               
                <div class="small-img-row">
                    @foreach ($prouctidphoto as $item)  
                    <div class="small-img-col">                        
                        <img src="/{{ $item->filename }}" width="100%" class="smallimg">                       
                    </div>
                    @endforeach
                </div>
            </div>
            
           
            <div class="col-2" id="discripproduct2">
                <div class="aaaa">
                    @foreach ($productid as $productids)
                    @if (Auth::guard('admin')->check())
                    <a href="{{route('admin.deleteproduct', $productids->id)}}"  id="btn11">ลบ</a>   
                   
                    <a href="{{route('admin.editproduct', $productids->id)}}"  id="btn22" >แก้ไข</a>
                    @endif  
                    @endforeach
                </div>
                @foreach ($productid as $productids)
                <h1>ชื่อสินค้า : {{ $productids->nameproduct }}</h1>                              
                <h4>ราคา : {{ $productids->piceproduct }}</h4>
                @if (Auth::guard('web')->check())
                <form action="/addcartproduct" method="post">
                    @csrf
                <input type="number" value="1" name="numberproduct">
                <input type="hidden" name="product_id" value="{{$productids->id }}">
                <button type="submit" id="btnsent">
                    <a>เพิ่มใส่ตะกร้า</a> 
                 </button>                
                 </form>
                 @endif
                <h3>รายละเอียดสินค้า<i class="fa fa-indent" ></i></h3><br>
            
                
                    <div class="ppppp9"><p>{{ $productids->discriptionproduct }}</p></div>
                    
                
                 
               
                {{-- <small id="pp1">{{ $productids->discriptionproduct }}</small> --}}
                
                @endforeach
             </div>
        </div>
    </div>

@endsection