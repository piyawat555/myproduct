@extends('layouts.appindex')

@section('content')
</div>
</div>    


@php
    $total =0;
@endphp

    <div class="small-container cart-page">
        <h3 class="carth5">รายการสินค้า</h3>
        @if (!$cartuser->isNotEmpty())
            <p class=carth5>ยังไม่มีรายการสินค้า</p>
            @elseif(count($cartuser) >= 1)
        <table>
            <tr>
                <th>ชื่อสินค้า</th>
                <th>จำนวนสินค้า</th>
                <th>ราคาสินค้า</th>               
            </tr>
            <tr>
                @foreach ($cartuser as $item)
                <td>
                    <div class="cart-info">    
                            @foreach ($item->carts as $items)
                        <img src="/{{ $items->photoproducts->first()->filename }}" alt="">
                        <div>
                            <p>{{ $items->nameproduct }}</p>
                            <small>ราคา: {{ $items->piceproduct }} บาท</small>
                            <br>
                            <form action="{{route('user.removeproduct', $item->id)}}" method="get" >
                                @csrf             
                                <button type="submit"  data-name="{{ $item->nameproduct }}"  class="btn-admindelect removecart" >
                                    <a id="asubmit">นำออก</a> 
                                 </button>
                            </form>
                        </div>
                           @endforeach
                    </div>
                </td>
                <td>{{ $item->numproduct }}</td>
                <td>{{ $items->piceproduct*$item->numproduct}} $</td>
                @php
                    $total += $items->piceproduct*$item->numproduct;
                @endphp
            </tr>
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
                <tr>
                    <td><button id="mysell" onclick="sell()" class="btn-usersell">สั่งซื้อ</button></td>
                    <td><a href="" class="btn-usersellback">กลับ</a></td>
                </tr>
            </table>
        </div>
    </div>
    {{-- @endcan --}}
    <div id="myModalsell" class="modal">

        <!-- Modal content -->
        
        <div class="modal-content">
          <span class="close">&times;</span>
          <p>กรอกข้อมูลของคุณ</p>
        </div>
        <div class="modal-body">
            <h1>รายการสินค้าทั้งหมดของคุณ</h1>
            
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
            <tr>
                
                @foreach ($cartuser as $item)
                <td>
                    <div class="cart-info">    
                            
                            @foreach ($item->carts as $items)
                            {{-- {{ dd($items->photoproducts) }} --}}
                        <img src="/{{ $items->photoproducts->first()->filename }}" alt="">
                        
                        

                        <div>
                            
                            <p>{{ $items->nameproduct }}</p>
                            <small>ราคา: {{ $items->piceproduct }} บาท</small>
                            <br>
                            
                            {{-- <a href="{{route('user.removeproduct', $item->id)}}" class="btn-admindelect">นำออก</a> --}}
                        </div>
                           @endforeach
                    </div>
                </td>
               
                <td>{{ $item->numproduct }}</td>
                <td>{{ $items->piceproduct*$item->numproduct}} $</td>
                @php
                    
                    $total += $items->piceproduct*$item->numproduct;
                @endphp
            </tr>
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
                 <form action="{{ route('user.order') }}" method="post"enctype="multipart/form-data" >
                     @csrf
                     @foreach ($cartuser as $item)
                    <div class="form-group">
                        <input type="hidden" name="product_id[]" value="{{ $item->product_id }}">                       
                        <input type="hidden" name="numproduct[]" value="{{ $item->numproduct }}">
                        
                    </div>
                    @endforeach
                     
                    <div class="form-group">
                        <label for="story" id="labeltext">ที่อยู่ของคุณ : </label>
                        <textarea name="addressuserorder" id="" cols="25" rows="5" placeholder="รายละเอียดที่อยู่"></textarea>
                        
                    </div>
                    
                    
                    <div class="form-group">
                        <label for="" id="labelproduct">รูปภาพสลิปการจ่ายเงิน : </label>
                        <input type="file"  name="usersellphotos[]" id="fileimg" >
                        
                    </div>
                  
                   
                    <input type="submit" value="ส่งข้อมูลการสั่งซื้อ" id="btnaddimg">

               
            </form>
        </div>
      </div>
    
      @endif 
@endsection