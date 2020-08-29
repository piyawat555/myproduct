@extends('layouts.appindex')

@section('content')
</div>
</div>

<div class="addproduct" >
    @if (count($errors) > 0)
<ul><li>{{ $errors }}</li></ul>
@endif

<div class="container" >  
        <h5>เพิ่มข้อมูลสินค้า</h5>
        <form action="{{ route('admin.upload') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
               
                <label for=""id="labelproduct">ชื่อสินค้า : </label>
                <input type="text" name="nameproduct" >
            </div>
            <div class="form-group">
                <label for="" id="piceproduct">ราคา : </label>
                <input type="text" name="piceproduct" >
            </div>
            <div class="form-group">
                <label for="story" id="labeltext">รายละเอียดเกี่ยวกับสินค้าของคุณ : </label>
                <textarea name="discriptionproduct" id="" cols="25" rows="5" placeholder="รายละเอียด"></textarea>
                
            </div>
            <div class="form-group">
                <label for="" id="labelproduct">รูปภาพ : </label>
                <input type="file"  name="photos[]" id="fileimg" multiple>
                
            </div>
            <input type="submit" value="เพิ่มข้อมูลสินค้า" id="btnaddimg">
        </form>   
</div>
</div>


@endsection