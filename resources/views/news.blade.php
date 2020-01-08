@extends('layout')

@section('content')
        <div>
            <div class="shopimg story col-10 mx-auto" ><h1 class="text-center" style="margin-top: 0;">الأخبار</h1></div>

            <div class="news-container col-10 d-flex flex-wrap" style="margin-top: 100px;">
                    @foreach ($news as $new)
                    <div class="single-news col-12 d-flex">
                        <div class="news-img-container col-5">
                            <img class="news-img" src="/images/news/{{$new->img}}" >
                        </div>
                        <div style="margin: 20px">
                            <h2>{{$new->title}}</h2>
                            <p style="font-size:14px;color:#b2bec3;">
                                {{$new->body}}
                            </p>
                        </div>
                    </div>
                    @endforeach
            </div>
        </div>
        <div class="col-12 d-flex justify-content-center my-4">

            {{ $news->links()}}


        </div>
@endsection
