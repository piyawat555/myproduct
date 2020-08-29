@extends('layouts.appindex')

@section('content')
</div>
</div>

<h3 class="admin-title">สินค้าทั้งหมด {{ $allproduct->count() }} รายการในหน้านี้</h3>
<div class="small-container cart-page">
    <table>
        <tr>
            <th>สินค้า</th>
            <th>ราคาสินค้า</th>
            <th>ลบ</th>  
            <th>แก้ไข</th>              
        </tr>
        <tr>
            @foreach ($allproduct as $item)          
            <td>
                <div class="cart-info">
                    <a href="{{route('product', $item->id)}}"> <img src="/{{ $item->photoproducts->first()->filename }}" alt=""> </a>    
                      
                <div>
                 <small>ชื่อสินค้า :{{ $item->nameproduct }}</small>
            </td>
            <td>{{ $item->piceproduct }}</td>
            <td><form action="{{route('admin.deleteproduct', $item->id)}}" method="post" >
                @csrf  
                @method("DELETE")
               
                <button type="submit"  data-name="{{ $item->nameproduct }}"  class="btn-admindelect deleteform" >
                    <a id="asubmit">ลบ</a> 
                 </button>
                {{-- <input type="submit" value="ลบ" data-name="{{ $item->nameproduct }}" class="btn-admindelete" id="formadmindelete"> --}}
            </form>
            </td>
            <td>
                <form action="{{route('admin.editproduct', $item->id)}}" method="get" >
                @csrf             
               
                <button type="submit"  data-name="{{ $item->nameproduct }}"  class="btn-admindelect editform" >
                    <a id="asubmit">แก้ไข</a> 
                 </button>
                {{-- <a  href="{{route('admin.editproduct', $item->id)}}"data-name="{{ $item->nameproduct }}" type="submit" class="btn-admindelect editform">แก้ไข</a> --}}
            </form>
                
                </td>
          
        </tr>
         @endforeach
    </table>
    <div class="numberproduct">
   {{ $allproduct->links() }}
   <div>
</div>

@endsection