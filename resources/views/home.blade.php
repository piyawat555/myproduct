@extends('layouts.appindex')

@section('content')
</div>
</div>
<div class="homecontainer">
<div class="container" >
    
    <div class="small-container">
        <h2 class="title">สินค้าแนะนำ User</h2>
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
                <p>{{ $item->piceproduct }}$</p>
            </div>
            @endforeach
        </div>
        {{ $allproduct->links() }}
    </div>
            
</div>

@endsection
