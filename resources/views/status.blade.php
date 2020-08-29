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
@if (count($userto) >= 1)
@foreach ($userto as $useree)    
@endforeach
@can('view', $useree )
<div class="small-container cart-page">
    <h3 class="carth5">สถานะของสินค้า</h3>
    @if (!$oderstatus->isNotEmpty())
    <p class=carth5>ยังไม่มีรายการสั่งสินค้า</p>
    @elseif(count($oderstatus) >= 1)
    <table>
        <tr>
            <th>รหัสรายการสินค้า</th>
            <th>ข้อมูลรายการสินค้าทั้งหมด</th> 
            <th>สถานะสินค้า</th>              
        </tr>
        @foreach ($oderstatus as $item)  
        <tr> 
            <td>{{$item->id }}</td>
            <td><button  data-toggle="modal" data-target="#vieworderproduct_{{$item->id}}" >รายการสินค้า</button></td>
            @if($item->approve ===0)
            <td>กำลังตรวจสอบสินค้า</td>
            @elseif($item->approve ===1)
            <td style="color: rgb(66, 23, 255);">ตรวจสอบสินค้าสำเร็จแล้วกำลังจัดส่ง</td>
            @elseif($item->approve ===3)
            <td style="color: red;">การตรวจสอบสินค้าไม่ถูกต้องกำลังโอนเงินกลับ</td>
            @endif
        </tr>
       
        @endforeach
    </table>
</div>
@foreach ($oderstatus as $item)  

<div class="modal fade" id="vieworderproduct_{{$item->id}}" >
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">รายการสินค้าทั้งหมด</h5>
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

@endforeach
@endif 
@endcan
@endif
@endsection