@extends('layout')


@section('index-footer')
<style>

 @media only screen and (max-width: 500px){

footer{
        margin-top: -400px;
     }
    }

    @media only screen and (max-width: 320px){

footer{
        margin-top: -400px;
     }
    }


</style>
<meta name="description" content="سيرفر لاين ايج عربي">
<meta name="keywords" content="العنقاء , سيرفر العنقاء , لاين ايج 2 ,اون لاين , phoenix , lineage 2">
@endsection


@section('content')





    <div class="shop col-12 mx-auto position-relative">

            <div class="shopimg col-10 mx-auto"><h1 class="text-center">متجر العروض</h1></div>

            <div class="products col-10  d-flex flex-wrap mx-auto" style="padding: 0 60px;">
                <?php $i=1;?>
                @foreach ($products as $product)

                    <div class="product col-4 index-products" style="margin-bottom: 40px;">
                        <div class="product-img-container">
                            <div class="product-background mx-auto"></div>
                            <img src="/images/uploads/products/{{$product->img}}" style="height: 100px; position: absolute;width: 100px;">
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
            <div class="show-more mx-auto d-flex" onclick=" location.href ='/shop';"> عرض المزيد </div>


            <div class="shopimg story col-10 mx-auto"><h1 class="text-center">شرح القصة</h1></div>

                <div class="story-container mx-auto">
                    <div class="story-picture mx-auto"></div>
                    <div class="story-para mx-auto text-center">
                        <div class="half1 mx-auto"></div>
                        <div>
                            <div style="position: relative;top: -135px;">
                                {{-- <h5 style="color:#e0cbba;font-size: 14px;padding-top: 25px;">الوسم-1 الوسم-2 الوسم-3</h5> --}}
                                <h5 style="font-family: Tajawal-Bold;color: #e7b66a;margin-top: 30px;" class="h5-title">{{$story->title}}</h5>
                                <h5 style="color:#e0cbba;font-size: 10px;" class="p-2 h5-date">{{$story->updated_at}} تم التعديل  </h5>
                            <p class="mx-auto " id="story-p" style="color:#b86948;font-size: 12px;width: 500px;">{{$story->story}}</p>
                            </div>
                            <div class="half2 mx-auto" style="    top: -297px;"></div>
                        </div>

                    </div>
                </div>



            <div class="shopimg char col-10 mx-auto position-relative"><h1 class="text-center" style="font-size: 35px;">شخصيات اللعبة</h1></div>
                <!--  style="position: relative;right: 80px;top: -150px;" -->
                <div class="row char-parent" style="margin-top: -150px;margin-bottom: 150px">



                    <div class="col-4 text-right left-chars-container">
                            <div class="big-char-item big-char-orc">
                                    <div class="big-chars">
                                        <img src="images/index/char/OrcMale.png" class="img1">
                                        <img src="images/index/char/OrcFemale.png" class="img2">


                                    </div>
                                </div>
                                <div class="big-char-item big-char-human">
                                        <div class="big-chars">
                                            <img src="images/index/char/human1.png" class="img1">
                                            <img src="images/index/char/human2.png" class="img2">
                                        </div>
                                </div>
                                <div class="big-char-item big-char-camile">
                                        <div class="big-chars">
                                            <img src="images/index/char/camile1.png" class="img1">
                                            <img src="images/index/char/camile2.png" class="img2">
                                        </div>
                                </div>
                                <div class="big-char-item big-char-elf">
                                    <div class="big-chars">
                                            <img src="images/index/char/elf1.png" class="img1">
                                            <img src="images/index/char/elf2.png" class="img2">
                                    </div>
                                </div>
                                <div class="big-char-item big-char-darkelf">
                                    <div class="big-chars">
                                        <img src="images/index/char/dark1.png" class="img1">
                                        <img src="images/index/char/dark2.png" style="transform: translate(-120%, 20%);" class="img2">
                                    </div>
                                </div>
                                <div class="big-char-item big-char-dwarf">
                                    <div class="big-chars">
                                        <img src="images/index/char/dwarf2.png" class="img1">
                                        <img src="images/index/char/dwarf1.png" class="img2">
                                    </div>
                                </div>
                    </div>
                    <div class="col-8 right-chars-container">
                        <div class="chars d-flex flex-row align-items-end justify-content-center col-12 mx-auto">
                            <div class="charbox orcbox m-1">
                                <div class="charbox-item orc-char"></div>
                                <div class="inactive-back"></div>
                                <div class="active-back"></div>

                            </div>
                            <div class="charbox camilebox m-1">
                                <div class="charbox-item camile-char"></div>
                                <div class="inactive-back"></div>
                                <div class="active-back"></div>


                            </div>
                            <div class="charbox humanbox m-1">
                                <div class="charbox-item human-char"></div>
                                <div class="inactive-back"></div>
                                <div class="active-back"></div>


                            </div>
                            <div class="charbox darkelfbox m-1">
                                <div class="charbox-item dark-elf-char"></div>
                                <div class="inactive-back"></div>
                                <div class="active-back"></div>


                            </div>
                            <div class="charbox dwarfbox m-1 dwarf-mobile" style="height: 100px;" >
                                <div class="charbox-item dwarf-char"></div>
                                <div class="inactive-back" style="height: 80px;top: 4%;"></div>
                                <div class="active-back" style="height: 80px;top: 4%;"></div>

                            </div>
                            <div class="charbox elfbox m-1">
                                <div class="charbox-item elf-char"></div>
                                <div class="inactive-back"></div>
                                <div class="active-back"></div>


                            </div>
                        </div>
                        <div class="char-para char-para-orc col-12 "style="text-align: end;">
                            <h1 >الغول</h1>
                            <p class="pb-3">هو ببساطة نص شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى) ويُستخدم في صناعات المطابع ودور النشر. كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص، لتكوّن كتيّب بمثابة دليل أو مرجع شكلي لهذه الأحرف. خمسة قرون من الزمن لم تقضي على هذا النص، بل انه حتى صار مستخدماً وبشكله الأصلي</p>
                            <div class="iframe-container">
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/LAKfQBNzjbI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="char-para char-para-elf col-12 "style="text-align: end;">
                            <h1 >الجان</h1>
                            <p class="pb-3">هو ببساطة نص شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى) ويُستخدم في صناعات المطابع ودور النشر. كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص، لتكوّن كتيّب بمثابة دليل أو مرجع شكلي لهذه الأحرف. خمسة قرون من الزمن لم تقضي على هذا النص، بل انه حتى صار مستخدماً وبشكله الأصلي</p>
                            <div class="iframe-container">
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/LAKfQBNzjbI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="char-para char-para-darkelf col-12 "style="text-align: end;">
                            <h1 >جان الظلام</h1>
                            <p class="pb-3">هو ببساطة نص شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى) ويُستخدم في صناعات المطابع ودور النشر. كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص، لتكوّن كتيّب بمثابة دليل أو مرجع شكلي لهذه الأحرف. خمسة قرون من الزمن لم تقضي على هذا النص، بل انه حتى صار مستخدماً وبشكله الأصلي</p>
                            <div class="iframe-container">
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/LAKfQBNzjbI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="char-para char-para-dwarf col-12 "style="text-align: end;">
                            <h1 >الأقزام</h1>
                            <p class="pb-3">هو ببساطة نص شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى) ويُستخدم في صناعات المطابع ودور النشر. كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص، لتكوّن كتيّب بمثابة دليل أو مرجع شكلي لهذه الأحرف. خمسة قرون من الزمن لم تقضي على هذا النص، بل انه حتى صار مستخدماً وبشكله الأصلي</p>
                            <div class="iframe-container">
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/LAKfQBNzjbI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="char-para char-para-camile col-12 "style="text-align: end;">
                            <h1 >الكاميل</h1>
                            <p class="pb-3">هو ببساطة نص شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى) ويُستخدم في صناعات المطابع ودور النشر. كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص، لتكوّن كتيّب بمثابة دليل أو مرجع شكلي لهذه الأحرف. خمسة قرون من الزمن لم تقضي على هذا النص، بل انه حتى صار مستخدماً وبشكله الأصلي</p>
                            <div class="iframe-container">
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/LAKfQBNzjbI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="char-para char-para-human col-12"style="text-align: end;">
                            <h1 >البشر</h1>
                            <p class="pb-3">هو ببساطة نص شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى) ويُستخدم في صناعات المطابع ودور النشر. كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص، لتكوّن كتيّب بمثابة دليل أو مرجع شكلي لهذه الأحرف. خمسة قرون من الزمن لم تقضي على هذا النص، بل انه حتى صار مستخدماً وبشكله الأصلي</p>
                            <div class="iframe-container">
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/LAKfQBNzjbI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>

                        {{-- <---------- for mobile -----------> --}}
                        <div class="story-para mx-auto text-center story-para-chars story-para-chars-orc" >
                            <div class="half1 mx-auto"></div>
                            <div>
                                <div style="position: relative;top: -135px;">
                                    <h1 style="margin-top: 60px;font-size: 20px;">الغول</h1>
                                    <p class="pb-3" >هو ببساطة نص شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى) ويُستخدم في صناعات المطابع ودور النشر. كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص، لتكوّن كتيّب بمثابة دليل أو مرجع شكلي لهذه الأحرف. خمسة قرون من الزمن لم تقضي على هذا النص، بل انه حتى صار مستخدماً وبشكله الأصلي</p>
                                    <div class="iframe-container">
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/LAKfQBNzjbI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                                </div>
                                <div class="half2 mx-auto" style="    top: -297px;"></div>
                            </div>
                        </div>
                        <div class="story-para mx-auto text-center story-para-chars story-para-chars-camile">
                            <div class="half1 mx-auto"></div>
                            <div>
                                <div style="position: relative;top: -135px;">
                                    <h1 style="margin-top: 60px;font-size: 20px;">الكاميل</h1>
                                    <p class="pb-3" >هو ببساطة نص شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى) ويُستخدم في صناعات المطابع ودور النشر. كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص، لتكوّن كتيّب بمثابة دليل أو مرجع شكلي لهذه الأحرف. خمسة قرون من الزمن لم تقضي على هذا النص، بل انه حتى صار مستخدماً وبشكله الأصلي</p>
                                    <div class="iframe-container">
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/LAKfQBNzjbI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                                </div>
                                <div class="half2 mx-auto" style="    top: -297px;"></div>
                            </div>
                        </div>
                        <div class="story-para mx-auto text-center story-para-chars story-para-chars-human">
                            <div class="half1 mx-auto"></div>
                            <div>
                                <div style="position: relative;top: -135px;">
                                    <h1 style="margin-top: 60px;font-size: 20px;">البشر</h1>
                                    <p class="pb-3" >هو ببساطة نص شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى) ويُستخدم في صناعات المطابع ودور النشر. كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص، لتكوّن كتيّب بمثابة دليل أو مرجع شكلي لهذه الأحرف. خمسة قرون من الزمن لم تقضي على هذا النص، بل انه حتى صار مستخدماً وبشكله الأصلي</p>
                                    <div class="iframe-container">
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/LAKfQBNzjbI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                                </div>
                                <div class="half2 mx-auto" style="    top: -297px;"></div>
                            </div>
                        </div>
                        <div class="story-para mx-auto text-center story-para-chars story-para-chars-darkelf">
                            <div class="half1 mx-auto"></div>
                            <div>
                                <div style="position: relative;top: -135px;">
                                    <h1 style="margin-top: 60px;font-size: 20px;">جان الظلام</h1>
                                    <p class="pb-3" >هو ببساطة نص شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى) ويُستخدم في صناعات المطابع ودور النشر. كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص، لتكوّن كتيّب بمثابة دليل أو مرجع شكلي لهذه الأحرف. خمسة قرون من الزمن لم تقضي على هذا النص، بل انه حتى صار مستخدماً وبشكله الأصلي</p>
                                    <div class="iframe-container">
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/LAKfQBNzjbI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                                </div>
                                <div class="half2 mx-auto" style="    top: -297px;"></div>
                            </div>
                        </div>
                        <div class="story-para mx-auto text-center story-para-chars story-para-chars-elf">
                            <div class="half1 mx-auto"></div>
                            <div>
                                <div style="position: relative;top: -135px;">
                                    <h1 style="margin-top: 60px;font-size: 20px;">الجان</h1>
                                    <p class="pb-3" >هو ببساطة نص شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى) ويُستخدم في صناعات المطابع ودور النشر. كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص، لتكوّن كتيّب بمثابة دليل أو مرجع شكلي لهذه الأحرف. خمسة قرون من الزمن لم تقضي على هذا النص، بل انه حتى صار مستخدماً وبشكله الأصلي</p>
                                    <div class="iframe-container">
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/LAKfQBNzjbI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                                </div>
                                <div class="half2 mx-auto" style="    top: -297px;"></div>
                            </div>
                        </div>
                        <div class="story-para mx-auto text-center story-para-chars story-para-chars-dwarf">
                            <div class="half1 mx-auto"></div>
                            <div>
                                <div style="position: relative;top: -135px;">
                                    <h1 style="margin-top: 60px;font-size: 20px;">الأقزام</h1>
                                    <p class="pb-3" >هو ببساطة نص شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى) ويُستخدم في صناعات المطابع ودور النشر. كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص، لتكوّن كتيّب بمثابة دليل أو مرجع شكلي لهذه الأحرف. خمسة قرون من الزمن لم تقضي على هذا النص، بل انه حتى صار مستخدماً وبشكله الأصلي</p>
                                    <div class="iframe-container">
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/LAKfQBNzjbI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                                </div>
                                <div class="half2 mx-auto" style="    top: -297px;"></div>
                            </div>
                        </div>

                        {{-- <----------  -----------> --}}

                    </div>

                </div>


    </div>



@endsection



