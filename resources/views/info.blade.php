@extends('layout')

{{-- @section('index-head')

@endsection --}}
@section('content')



    <div class="shopimg story col-10 mx-auto" ><h1 class="text-center" style="margin-top: 0;font-size: 36px;">معلومات السيرفر</h1></div>
    <div class="news-container col-10 d-flex flex-wrap" style="margin-top: 100px;">
        @foreach ($infos as $info)

        <div class="col-4" style="padding: 0 30px 90px 30px;">
            <div class="card">
                <img src="images/albums/albums.jpg" style="width:100%;border-radius: .15rem;">
                <div class="container">
                <h2 style="padding-top: 10px;"><b>{{$info->title}}</b></h4>
                <h5 style="font-family: Tajawal-Regular;"><b>{{$info->sub_title}}</b></h5>
                <p style="color: white;font-size: 14px;margin-bottom: 20px;">{{$info->body}}</p>
                </div>
            </div>
        </div>

        @endforeach

    </div>

<div class="col-12 d-flex justify-content-center my-4">

    {{ $infos->links()}}



 </div>
@endsection
