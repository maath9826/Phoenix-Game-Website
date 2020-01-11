<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/dashBoard.css') }}">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script>(function(e,t,n){var r=e.querySelectorAll("html")[0];r.className=r.className.replace(/(^|s)no-js(s|$)/,"$1js$2")})(document,window,0);</script>

    <title>لوحة التحكم</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    @yield('dash-head')
</head>
<body style="min-width: 1200px !important;">
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand btn btn-primary" href="/" >
                   العودة للموقع
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto" style="font-size:16px;float:right;text-align:right;width: 100%;display: flex;justify-content: flex-end;">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">تسجيل الدخول</a>
                            </li>

                        @else
                            <div class="mr-auto d-flex ">
                                <div class="nav-item">
                                    <a class="nav-link" href="/l2admin/products">المنتجات</a>
                                </div>
                                <div class="nav-item">
                                    <a class="nav-link" href="/l2admin/admins">الادمن</a>
                                </div>
                                <div class="nav-item">
                                    <a class="nav-link" href="/l2admin/story/edit">القصة</a>
                                </div>
                                <div class="nav-item">
                                    <a class="nav-link" href="/l2admin/news">الاخبار</a>
                                </div>
                                <div class="nav-item">
                                    <a class="nav-link" href="/l2admin/albums">الألبومات</a>
                                </div>
                                <div class="nav-item">
                                    <a class="nav-link" href="/l2admin/infos">معلومات السيرفر</a>
                                </div>
                                <div class="nav-item">
                                    <a class="nav-link" href="/l2admin/settings">الاعدادات العامة</a>
                                </div>
                            </div>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>

                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
