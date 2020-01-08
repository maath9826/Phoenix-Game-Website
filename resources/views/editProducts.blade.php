@extends('layouts.app')

@section('content')


    <form action="/l2admin/products/{{$product->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="col-4 mx-auto form-container" style="text-align: right;background-color: gainsboro;padding: 20px;font-family:Tajawal-Regular;">
            @if (count($errors)>0)
            @foreach ($errors->all() as $error)
                <p class="alert alert-danger">{{$error}}</p>
            @endforeach
            @endif
            <div class="form-group">
            <label for="exampleInputEmail1">اسم المنتج</label>
            <input type="text" class="form-control" name="name" id="name"  placeholder="ادخل الاسم" style="text-align: right;" value="{{$product->name}}">
            {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> --}}
            </div>
            <div class="form-group">
            <label for="exampleInputPassword1">سعر المنتج</label>
            <input type="number" name="price" class="form-control" id="price" placeholder="ادخل السعر" style="text-align: right;" value="{{$product->price}}">
            </div>
            <div class="form-group">
                    <label for="exampleInputPassword1" style="display: block;
                    text-align: center;
                    margin: 20px;">صورة المنتج</label>
                    <img id="img-tag" src="/images/uploads/products/{{$product->img}}" alt="default" style="
                    height: 150px;
                    width: 150p;
                    background-color: white;
                    border-radius: 20px;
                    display: block;
                    margin: auto;
                    opacity: 40%;
                    margin-bottom: 20px;
                    ">

                    <input type="file" name="img" id="img" style="text-align: center;" >
            </div>
            <button type="submit" class="btn btn-primary" style="margin-top: 15px;font-size: 18px;">اضافة</button>
        </div>
      </form>
      <script
        src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous">
      </script>
      <script type="text/javascript">
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#img-tag').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        $(document).ready(function(){
            $("#img").change(function(){
                readURL(this);
            });
        });
    </script>

@endsection
