@extends('layouts.appindex')

@section('content')
</div>
</div>

    <div class="small-container editsinger-product">       
         
        <div class="row">         
            
            <div class="col-2" id="discripproduct">
                
                {{-- {{ dd($prouctidphoto->first()) }} --}}
                <img src="/{{$prouctidphoto->first()->filename}}"  width="100%" id="productimg">
                    
                <div class="small-img-row">
                    @foreach ($prouctidphoto as $item)  
                    <div class="small-img-col">                        
                        <img src="/{{ $item->filename }}" width="100%" class="smallimg">  
                        <form action="{{route('admin.img', $item->id)}}" method="post">
                            @csrf                        
                        <input type="submit" class="btn-danger" value="ลบ">
                         </form>          
                    </div>
                    @endforeach
                </div>
            </div>
            
           
            <div class="col-2" id="discripproduct2">    
                <p id="editprofuct">แก้ไขข้อมูลสินค้า</p>  
                      
                @foreach ($productid as $productids)
                <form action="{{route('admin.updateproduct', $productids->id)}}" method="POST" enctype="multipart/form-data"> 
                    
                    @csrf 
                    @method("PATCH")  
                <h4>ชื่อสินค้า : <input type="text" name="nameproduct" value="{{ $productids->nameproduct }}"></h4>                                        
                <h4>ราคา :  <input type="text" name="piceproduct" value=" {{ $productids->piceproduct }}"> </h4>
                <h4>เพิ่มรูป : <input type="file"  name="photos[]" id="fileimg" multiple></h4>              
                <h3>รายละเอียดสินค้า<i class="fa fa-indent" ></i></h3><br>               
                    <div class="ppppp9">
                        <textarea name="discriptionproduct" id="" cols="25" rows="5">{{ $productids->discriptionproduct }}</textarea>
                       
                    </div>                   
                
                @endforeach
                <input type="submit" value="แก้ไขข้อมูลสินค้า" id="btnaddimg">
            </form>
             </div>
        </div>
    </div>

@endsection