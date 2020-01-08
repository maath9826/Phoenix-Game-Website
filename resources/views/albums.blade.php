@extends('layout')

@section('index-head')
        <link rel="stylesheet" href="/css/lightbox.min.css">
        <script src="/js/lightbox-plus-jquery.min.js"></script>
        <script>
            lightbox.option({
                'resizeDuration': 200,
                'disableScrolling':true,
                'alwaysShowNavOnTouchDevices':true,
                'positionFromTop': 100,
            })
        </script>
@endsection

@section('content')
<div class="shopimg story col-10 mx-auto" ><h1 class="text-center" style="margin-top: 0;">الألبومات</h1></div>

<div class="news-container col-10 d-flex flex-wrap" style="margin-top: 100px;">

        @foreach ($albums as $album)
            @if ($album->video)

                <div class="single-gallery col-4">
                <a target="_blank" href="{{$album->video}}" class="d-flex" style="justify-content: center;align-items: center;color: white;">
                    <i class="far fa-play-circle play-video"></i>
                    <img src="/images/albums/albums.jpg" >
                    </a>
                </div>

            @else
                <div class="single-gallery col-4">
                <a target="_blank" href="/images/albums/{{$album->img}}"  data-lightbox="image-1">
                    <img src="/images/albums/albums.jpg" >
                    </a>
                </div>
            @endif
        @endforeach

        <div class="col-12 d-flex justify-content-center my-4">

            {{ $albums->links()}}


        </div>

</div>

@endsection
