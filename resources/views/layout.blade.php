<!DOCTYPE html>
<html >
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css/all.css">
        <title>Phoenix</title>
        @yield('index-footer')

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        {{-- css links --}}
        <link rel="stylesheet" href="css/header.css">
        @yield('index-head')

    </head>
    <body class="position-relative">
        <div class="reactive-bg">
            <img src="../images/index/background/bg.png" style="width: 100%;">
        </div>
        <div style="
            margin: auto;
            max-width: 1920px;
            ">

        <div id="header">

            <div style="
            position: absolute;
            width: 100%;
            top: 0;
            height: 100%;
            max-width: 1920px;
            ">

                <nav class="col-12 d-flex justify-content-center pc-nav" style="height: 87px;">

                    <div class="rectangle col-9 d-flex align-items-center justify-content-center flex-row-reverse">
                        <div class="col-1 text-center"><a href="/" style="color : #b86948;" class="{{ Request::path() === '/' ? 'path-underline' : ''}}">الرئيسية</a></div>
                        <div class="col-2 text-center"><a href="info" style="color : #b86948;padding:0 !important;" class="{{ Request::path() === 'info' ? 'path-underline' : ''}}">معلومات السيرفر</a></div>
                        <div class="col-1 text-center"><a href="news" style="color : #b86948;" class="{{ Request::path() === 'news' ? 'path-underline' : ''}}">الأخبار</a></div>
                        <div class="col-1 text-center"><a href="albums" style="color : #b86948;" class="{{ Request::path() === 'albums' ? 'path-underline' : ''}}">الألبوم</a></div>
                        <div class="col-3 text-center"><a href="join" style="color : #b86948;margin:0 !important;" class="{{ Request::path() === 'join' ? 'path-underline' : ''}}">كيفية الدخول للسيرفر</a></div>
                    </div>




                </nav>

                {{-- <-------- for mobile ----------> --}}

                <div class="w3-sidebar w3-bar-block w3-card w3-animate-right" style="display:none;right:0;background-color: #2d1314;text-align: right;z-index: 100;" id="mySidebar">
                    <button class="w3-bar-item  w3-large"
                    onclick="w3_close()" type="button" style="text-align: right;padding: 0;color: wheat;background-color: inherit;margin-bottom: 15px;"> &times;</button>


                    <div class="{{ Request::path() === '/' ? 'path-active' : ''}}"><a href="/"  >الرئيسية</a></div>
                    <div class="{{ Request::path() === 'info' ? 'path-active' : ''}}"><a href="info"  >معلومات السيرفر</a></div>
                    <div class="{{ Request::path() === 'news' ? 'path-active' : ''}}"><a href="news"  >الأخبار</a></div>
                    <div class="{{ Request::path() === 'albums' ? 'path-active' : ''}}"><a href="albums"  >الألبوم</a></div>
                    <div class="{{ Request::path() === 'join' ? 'path-active' : ''}}"><a href="join"  >كيفية الدخول للسيرفر</a></div>
                 </div>




                    <button style="background-color:#b86948 !important;display: none;" id="openNav" class="w3-button w3-teal w3-xlarge w3-right" onclick="w3_open()" type="button" >&#9776;</button>


                {{-- <-------- .. ----------> --}}


                <header class="d-flex align-items-end flex-column mx-auto">
                        {{-- <div class="h-spacer"></div> --}}


                            <div class="col-9">
                            <div class="slideshow-text col-8" style="
                                position: absolute;
                                top: 10vw;
                                text-align: right;
                            ">
                                <h1 >لوريم ايبسوم</h1>
                                <div style=" max-width: 430px;" class="ml-auto">
                                    <p class="mb-4" style="height: 70px;overflow: hidden;">
                                            هو ببساطة نص شكلي بمعنى أن الغاية هو الشكل وليس المحتوى ويستخدم
                                            هو ببساطة نص شكلي بمعنى أن الغاية هو الشكل وليس المحتوى ويستخد
                                    </p>
                                    <img src="images/index/header/read more.png" alt="read-more" >
                                </div>
                            </div>
                        </div>

                        <div class="register " style="
                        position: absolute;
                        top: 34vw;
                        left: 50%;
                        margin-left: -130px;
                        ">

                            <div class="registerimg"style>
                                <h2 class="text-center" style="
                                margin-bottom: 0!important;
                                padding-top: 15px;
                                ">التسجيل</h2>
                            </div>

                        </div>

                    </header>
            </div>


    </div>
    <div class="header-bot"></div>

    @yield('content')
        </div>



    <footer style="padding: 0;">

        <div class="upper-f col-12 d-flex justify-content-center flex-wrap" style="padding: 0;">
            <div class="col-12" style="
            max-width:1920px !important;
            ">
            <div class="col-9 d-flex flex-wrap mx-auto row-rfrs" style="padding:0;margin-bottom: 80px;">
                <div class="col-12 lang-c" style="padding:0;margin-top: 40px;margin-bottom: 15px;"><div class="lang"><select  type="menu" style="width: 100px;">

                    <option selected>العربية</option>


                </select></div></div>

                <div class="upper-2" style="width: 48%;margin-right: auto;">
                    <h3 style="text-align: end;margin-bottom: 30px;">اخر المواضيع</h3>
                    <div class="upper-2-body col-12 d-flex flex-wrap" style="padding: 0;">
                        @foreach ($news as $new)
                        <a href="/news" class="col-6" style="padding: 0 !important;">
                        <div style="text-align: right;padding: 0 !important;margin-bottom: 7px;" class=" d-flex flex-wrap col-12">

                            <div class="col-6 d-flex flex-wrap " id="single-news-para" style="padding: 0 6px!important;">
                                <p class="col-12" style="
                                font-family: Tajawal-Bold;padding: 0 !important;
                                font-size: 12px;color:#b86948;
                                height: 50px;
                                overflow: hidden;
                                margin-bottom: 8px;
                                ">{{$new->body}}</p>
                                <div class="d-flex flex-wrap col-12" style="padding: 0;text-align:right;">

                                    <div class="date col-12 d-flex" id="date" style="padding: 0;margin-left: auto;justify-content: flex-end;">
                                        <p style="padding: 0 !important;color:#e0cbba;font-size:11px;margin-left: auto;">{{$new->updated_at}}</p>
                                        <div class="date-img" style="margin-left: auto;"></div>
                                    </div>
                                </div>
                            </div>

                        <img src="/images/news/{{$new->img}}" height="71">
                        </div>
                        </a>
                        @endforeach

                    </div>

                    {{-- <div class="twetter">
                        <h3 style="text-align: end">تويتر</h3>
                        <div class="col-12 d-flex flex-wrap " style="padding: 0;">
                            <div style="text-align: right;padding: 0;" class="d-flex flex-wrap col-12 justify-content-end">
                                <p style="font-family: Tajawal-Bold;padding: 0 !important;font-size: 12px;color:#b86948;">بواسطة: يوسف بن طالب، 13 سبتمبر 2019</p>
                                <div class="twetter-img"></div>
                            </div>
                            <p class="col-12 " style="padding:0; font-size:13px;color:#e0cbba;text-align: right;">وريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبورأنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس نوستريد</p>
                        </div>
                    </div> --}}
                </div>
                <div class="upper-1" style="width: 48%;">
                    <h3 style="text-align: end;margin-bottom: 30px;">تواصل معنا</h3>
                    <form class="col-12 d-flex flex-wrap" style="padding: 0;" action="/sendEmail" method="POST">
                        @csrf
                        @if (count($errors)>0)
                            @foreach ($errors->all() as $error)
                                <p class="alert alert-danger">{{$error}}</p>
                            @endforeach
                        @endif


                            <script>
                                var success = '{{Session::get('success')}}' ;

                                if ( success ){
                                    alert(success);
                                }

                            </script>


                        <input type="email" name="email" placeholder=" ( فقط gmail ) ادخل ايميلك" style="width:48%;padding: 1px 15px;">
                        <input type="text" name="name" placeholder="ادخل الاسم واللقب" style="width:48%;padding: 1px 15px;margin-left:auto;">
                        {{-- <input type="text" formControlName="message" placeholder="نص الرسالة" class="col-12"> --}}
                        <textarea name="message" id="" class="col-12" rows="6" placeholder="نص الرسالة"></textarea>
                        <button type="submit" class="rounded send">ارسال</button>

                    </form>
                </div>

            </div>
            </div>
        </div>

    <div class="lower-f" class="col-12" >
    <div class="col-12 mx-auto" style="
    max-width:1920px !important;
    ">
        <div class="col-8 d-flex flex-wrap mx-auto" style="padding:0;">
            <div class="icons d-flex align-items-center">
                    <i class="fab fa-facebook-square"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-youtube"></i>

            </div>
            <h5 class="ml-auto mb-0" style="font-size:14px;color: #b86948;">تصميم وتطوير منظوم</h5>
        </div>
    </div>
    </div>
    </footer>

        <script
        src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous">
        </script>
        <script>
            $(document).ready(function(){
                $('.charbox .active-back').fadeOut();
                $('.orcbox .active-back').fadeIn();
                $('.char-para').fadeOut();
                $('.char-para-orc').fadeIn();
                $('.story-para-chars').fadeOut();
                $('.story-para-chars-orc').fadeIn();

                $('.big-char-orc').fadeIn(0);
                $('.story-para-chars-orc').fadeIn(0);
                $(".chars > div").click(function(){
                    if ($(this).hasClass('orcbox')) {
                        $('.charbox .active-back').fadeOut(0);
                        $('.orcbox .active-back').fadeIn();

                        $('.char-para').fadeOut(0);
                        $('.char-para-orc').fadeIn();

                        $('.big-char-item').fadeOut(0);
                        $('.big-char-orc').fadeIn();

                        $('.story-para-chars').fadeOut(0);
                        $('.story-para-chars-orc').fadeIn();

                    }
                    else if ($(this).hasClass('camilebox')) {
                        $('.charbox .active-back').fadeOut(0);
                        $('.camilebox .active-back').fadeIn();

                        $('.char-para').fadeOut(0);
                        $('.char-para-camile').fadeIn();

                        $('.big-char-item').fadeOut(0);
                        $('.big-char-camile').fadeIn();

                        $('.story-para-chars').fadeOut(0);
                        $('.story-para-chars-camile').fadeIn();
                    }
                    else if ($(this).hasClass('humanbox')) {
                        $('.charbox .active-back').fadeOut(0);
                        $('.humanbox .active-back').fadeIn();

                        $('.char-para').fadeOut(0);
                        $('.char-para-human').fadeIn();

                        $('.big-char-item').fadeOut(0);
                        $('.big-char-human').fadeIn();

                        $('.story-para-chars').fadeOut(0);
                        $('.story-para-chars-human').fadeIn();
                    }
                    else if ($(this).hasClass('darkelfbox')) {
                        $('.charbox .active-back').fadeOut(0);
                        $('.darkelfbox .active-back').fadeIn();

                        $('.char-para').fadeOut(0);
                        $('.char-para-darkelf').fadeIn();

                        $('.big-char-item').fadeOut(0);
                        $('.big-char-darkelf').fadeIn();

                        $('.story-para-chars').fadeOut(0);
                        $('.story-para-chars-darkelf').fadeIn();
                    }
                    else if ($(this).hasClass('elfbox')) {
                        $('.charbox .active-back').fadeOut(0);
                        $('.elfbox .active-back').fadeIn();

                        $('.char-para').fadeOut(0);
                        $('.char-para-elf').fadeIn();

                        $('.big-char-item').fadeOut(0);
                        $('.big-char-elf').fadeIn();

                        $('.story-para-chars').fadeOut(0);
                        $('.story-para-chars-elf').fadeIn();
                    }
                    else if ($(this).hasClass('dwarfbox')) {
                        $('.charbox .active-back').fadeOut(0);
                        $('.dwarfbox .active-back').fadeIn();

                        $('.char-para').fadeOut(0);
                        $('.char-para-dwarf').fadeIn();

                        $('.big-char-item').fadeOut(0);
                        $('.big-char-dwarf').fadeIn();

                        $('.story-para-chars').fadeOut(0);
                        $('.story-para-chars-dwarf').fadeIn();
                    }

                });
            });

        </script>
                  <script>
                    function w3_open() {

                      document.getElementById("mySidebar").style.width = "50%";
                      document.getElementById("mySidebar").style.display = "block";
                    //   document.getElementById("openNav").style.display = 'none';
                    }
                    function w3_close() {

                      document.getElementById("mySidebar").style.display = "none";
                      document.getElementById("openNav").style.display = "inline-block";
                    }
                    </script>


    </body>

</html>

