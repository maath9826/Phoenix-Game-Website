@extends('layout')

@section('content')
<div class="shopimg col-10 mx-auto"><h1 class="text-center">متجر العروض</h1></div>

<div class="products col-10  d-flex flex-wrap mx-auto" style="padding: 0 60px;">
    <?php $i=1;?>
    @foreach ($products as $product)

        <div class="product col-4" style="margin-bottom: 40px;">
            <div class="product-img-container">
                <div class="product-background mx-auto"></div>
                <img src="/images/uploads/products/{{$product->img}}" style="height: 100px; position: absolute;width:100px">
                <div class="product-outline mx-auto" style="z-index: 10;"></div>

            </div>

            <h5 class="text-center">{{$i}} - {{$product->name}}</h5>
            <div class="price d-flex align-items-center justify-content-center ">
                <div class="d-flex align-items-center" style="text-align:center;">
                    <div class="price-img" style="margin-right: 6px;"></div>
                    <span>{{$product->price}}</span>
                </div>

                {{-- <div class="d-flex align-items-center  ml-4">
                    <div class="discount"></div>
                    <div class="price-img mx-2"></div>
                    <span>8999</span>
                </div> --}}

            </div>
        </div>
        <?php $i++;?>
    @endforeach

    </div>
</div>

<div class="col-12 d-flex justify-content-center my-4">

    {{ $products->links()}}


</div>
@endsection
