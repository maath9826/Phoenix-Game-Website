@extends('layout')

@section('singleNews')
    @foreach($news as $new)
    الأخبار - {{$new->title}}
    @endforeach
@endsection

@section('content')
        <div>
            <div class="shopimg story col-10 mx-auto" ><h1 class="text-center" style="margin-top: 0;">الأخبار</h1></div>

            <div class="news-container col-10 d-flex flex-wrap" style="margin-top: 100px;">
                    @foreach ($news as $new)
                    <div class="news-img-container col-5 m-auto" style="margin-bottom: -100px !important;z-index: 10;">
                        <img class="news-img" src="/images/news/{{$new->img}}" style="border: solid 5px #2d1314;" >
                    </div>
                    <div class="single-news col-12 d-flex" style="text-align: center;">
                        <div style="margin: 20px" class="single-news-body">
                            <h2 style="margin-top: 110px;">{{$new->title}}</h2>
                            <p style="font-size:14px;color:#b2bec3;">
                                {{$new->body}}
                            </p>
                        </div>
                    </div>
                    @endforeach
            </div>
        </div>
        {{-- <div class="col-12 d-flex justify-content-center my-4">

            {{ $news->links()}}


        </div> --}}
@endsection
