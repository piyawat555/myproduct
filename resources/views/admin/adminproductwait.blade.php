@extends('layouts.appindex')

@section('content')
<!-- CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</div>
</div>


@php
    $total =0;
@endphp
<div class="small-container cart-page">
    <table>
        <tr>
            <th>ชื่อผู้สั่ง</th>
            <th>รอตรวจสอบ</th>
            <th>สลิปของลูกค้า</th>  
            <th>ข้อมูลสินค้า</th> 
            <th>ไม่อนุมัติ</th>  
            <th>ที่อยู่ลูกค้า</th>             
        </tr>
          @foreach ($order as $item)
                        @foreach ($item->useroders  as $item2)
                        <tr> 
                        <td>
                            <div class="cart-info">  
                                <p>{{ $item2->name }}</p>     
                             </div>
                        </td>
                         <td>
                           <form action="{{ route('admin.allow', $item->id ) }}" method="POST">
                            @csrf 
                             @method("PATCH")
                             <button class="btn-success" type="submit" id="allowadmin">อนุมัติ</button>
                           </form>
                          </td>                       
                        <td>
                            <button class="btn-info" data-toggle="modal" data-target="#viewslip_{{$item->id}}" >ตรวจสอบสลิป</button>
                        </td>
                        <td><button  class="btn-info" data-toggle="modal" data-target="#view_{{$item->id}}" >ตรวจสอบข้อมูลสินค้า</button>
                            
                        </td>
                        <td><form action="{{ route('admin.dontallowproduct', $item->id ) }}" method="post">
                          @csrf 
                             @method("PATCH")
                           <button class="btn-danger" type="submit" id="admindontallowproduct">ไม่อนุมัติ</button>
                           
                         </form></td>
                        <td>
                            <button class="btn-info" data-toggle="modal" data-target="#viewadres_{{$item->id}}" >ตรวจสอบที่อยู่ลูกค้า</button>
                            
                        </td>
                    </tr>
                         @endforeach
                   @endforeach  
    </table>
</div>
@foreach ($order as $item)
<div class="modal fade" id="view_{{$item->id}}" >
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">รายการสินค้าทั้งหมดของลูกค้า</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
            <div class="modal-body">
      @php
        $total =0;
        @endphp
        <div class="small-container cart-page">
            <table>
                <tr>
                    <th>ชื่อสินค้า</th>
                    <th>จำนวนสินค้า</th>
                    <th>ราคาสินค้า</th>               
                </tr>
                @foreach ($item->orders as $item2)
                @foreach ($item2->ordersphoto as $item3)  
                <tr>
                    <td>                       
                        <div class="cart-info">                            
                            <img src="/{{ $item3->photoproducts->first()->filename }}" alt=""> 
                            <small>{{ $item3->nameproduct }}</small>                           
                        </div>             
                    </td>
                    @php
                    @endphp
                    <td>                       
                        <small>{{ $item2->numproduct }}</small>
                    </td>
                    <td>                       
                        <small>{{ $total +=$item3->piceproduct* $item2->numproduct}}</small>
                    </td>
                </tr>
                @endforeach  
                @endforeach  
            </table>
            <div class="total-price">
                <table>
                    <tr>
                        <td>เงินค่าสินค้า</td>
                        @php
                        echo "<td>";
                        echo  $total ;
                        echo "$";
                        echo "</td>";
                        @endphp
                    </tr>
                    <tr>
                        <td>เงินค่าจัดส่งสินค้า 100 บาท </td>
                        @php
                        echo "<td>";
                        echo  $total+100 ;
                        echo "$";
                        echo "</td>";
                        @endphp
                    </tr>
                    <tr>
                        <td>เงินรวมทั้งหมด</td>
                        @php
                        echo "<td>";
                        echo  $total+100 ;
                        echo "$";
                        echo "</td>";
                        @endphp
                    </tr>
                    
                </table>
           
        </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
          </div>
        </div>
      </div>
    </div>
</div>
    
<div class="modal fade" id="viewslip_{{$item->id}}">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">สลิปของลูกค้า </h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
         <div class="cart-info">
             <img src="/{{ $item->filename }}" alt="" width="300" height="450">
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="viewadres_{{$item->id}}">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">ที่อยู่ของลูกค้า </h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <div class="modal-body">
         <p class="ppppp9">{{$item->addressuserorder }}</p>            
        </div>
        
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  @endforeach  
@endsection