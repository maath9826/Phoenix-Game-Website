
@extends('layouts.app')

@section('content')



        <div class="col-9 mx-auto form-container d-flex flex-wrap" style="text-align: right ;">
            @foreach ($products as $product)
            <div class="product col-4 mb-4" >
                <div class="product-img"></div>
                <h5 class="text-center">{{$product->name}}</h5>
                <div class="price d-flex align-items-center justify-content-center mt-3">
                    <div class="d-flex align-items-center">
                        <div class="price-img mx-2"></div>
                        <span>{{$product->price}}</span>
                    </div>

                    <div class="d-flex align-items-center  ml-4">
                        <div class="discount"></div>
                        <div class="price-img mx-2"></div>
                        <span>8999</span>
                    </div>


                </div>
                <div class="col-12 d-flex justify-content-center my-3">
                    <button class="btn btn-danger" onclick="del({{$product->id}})" style="font-size: 18px;">حذف</button>
                </div>
            </div>
            @endforeach
        </div>
        <script >
        function del($id){
            window.location.href="/l2admin/products/delete')}}/"+$id;
        }
        </script>



@endsection
