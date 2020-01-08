@section('index-head')
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
<style>
h1,h2,h3,h4,h5 {
    font-family: Tajawal-Bold;
    color: #e7b66a;
}
.send{
    font-family: Tajawal-Bold;
}
body{
    font-family: Tajawal-Regular;
}
textarea{
    margin-top: 30px;
}
</style>
@endsection


@extends('layout')


@section('content')
<div class="shopimg story col-10 mx-auto" ><h1 class="text-center" style="margin-top: 0;font-family:Tajawal-bold">كيفية الدخول</h1></div>
<div class="news-container col-10" style="margin-top: 100px;margin-bottom: 100px;">
    <div class="w3-row-padding w3-center my-5">
        <div class="pb-5">
        <div class="w3-card w3-container d-flex p-0" style="min-height:0;background-color:#2d1314;box-shadow: 0 2px 5px 0 rgba(0,0,0,0.56), 0 2px 10px 0 rgba(0,0,0,0.52);">
        <div class=" d-flex" style="justify-content: center;align-items: center;padding: 0 20px; background-color:#b86948;flex: 0 0 48%;max-width: 48%;">
            <i class="fa fa-desktop w3-text-theme" style="font-size:12vw;padding: 50px 0;"></i>
        </div>
        <div style="flex: 0 0 52%;max-width: 52%;">
            <h2 style="font-family:Tajawal-bold" class="pb-3">متطلبات التشغيل</h3><br>
            <p>-1</p>
            <p>-2</p>
            <p>-3</p>
            <p>-4</p>
        </div>

        </div>
        </div>
        <div class="d-flex">
            <div  style="padding:0;margin-right: auto;flex: 0 0 48%;max-width: 48%;">
                <div class="w3-card w3-container" style="padding: 0;min-height:0;background-color:#2d1314;box-shadow: 0 2px 5px 0 rgba(0,0,0,0.56), 0 2px 10px 0 rgba(0,0,0,0.52);">
                    <div class="col-12 d-flex" style="justify-content: center;align-items: center;padding: 50px 0px; background-color:#b86948;">
                        <i class="fas fa-file-download w3-text-theme " style="font-size:10vw;"></i>
                    </div>
                    <h2 style="font-family:Tajawal-bold" class="pb-3">تحميل الباتش</h3><br>
                        <p>-1</p>
                        <p>-2</p>
                        <p>-3</p>
                        <p>-4</p>
                </div>
            </div>

            <div  style="padding:0;margin-left: auto;flex: 0 0 48%;max-width: 48%;">
                <div class="w3-card w3-container" style="padding: 0;min-height:0;background-color:#2d1314;box-shadow: 0 2px 5px 0 rgba(0,0,0,0.56), 0 2px 10px 0 rgba(0,0,0,0.52);">
                    <div class="col-12 d-flex" style="justify-content: center;align-items: center;padding: 50px 0px; background-color:#b86948;">
                        <i class="fa fa-download w3-text-theme " style="font-size:10vw;"></i>
                    </div>
                    <h2 style="font-family:Tajawal-bold" class="pb-3">تحميل اللعبة</h3><br>
                        <p>-1</p>
                        <p>-2</p>
                        <p>-3</p>
                        <p>-4</p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
