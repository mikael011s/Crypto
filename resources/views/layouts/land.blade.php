<!doctype html>
{{--<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">--}}
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Crypto') }}</title>

    <!-- BootStrap Link -->
    <link rel="stylesheet" href="/template-assets/digihyip/css/bootstrap.min.css">
    <link rel="stylesheet" href="/template-assets/digihyip/css/animate.css">

    <!-- Icon Link -->
    <link rel="stylesheet" href="/template-assets/digihyip/css/all.min.css">
    <link rel="stylesheet" href="/template-assets/digihyip/css/line-awesome.min.css">

    <!-- Plugings Link -->
    <link rel="stylesheet" href="/template-assets/digihyip/css/slick.css">
    <link rel="stylesheet" href="/template-assets/digihyip/css/nice-select.css">
    <link rel="stylesheet" href="/template-assets/digihyip/css/odometer.css">

    <!-- Custom Link -->
    <link rel="stylesheet" href="/template-assets/digihyip/css/main.css">
    <link rel="shortcut icon" href="/template-assets/digihyip/images/favicon.png" type="image/x-icon">
</head>
<body>
    <div class="preloader">
        <div class="preinnner">
            <div class="ring"></div>
            <div class="ring"></div>
            <div class="ring"></div>
        </div>
    </div>
    <div class="overlay"></div>

    <!-- Header Section Starts Here -->
    <div class="header">
        <div class="header-top">
            <div class="container">
                <div class="header__top__wrapper d-flex flex-wrap align-items-center justify-content-center justify-content-md-between text-center">
                    <ul class="contacts d-flex flex-wrap justify-content-center">
                        <li><a href="mailto:demo@gmail.com"><i class="las la-envelope-open"></i> crypto@aurum.com</a></li>
                        <li><a href="tel:129075"><i class="las la-phone-volume"></i> 8 800 -777  -  00000</a></li>
                    </ul>
                    <div class="right__area d-flex flex-wrap align-items-center mt-3 mt-md-0">
                        <select name="language" class="nice-select custom--scrollbar">
                            <option>Русский</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom">
            <div class="container">
                <div class="header-bottom-area">
                    <div class="logo"><a href="/"><img src="/template-assets/digihyip/images/logo.png" alt="logo"></a></div>
                    <ul class="menu">
                        <li>
                            <a href="/">Главная</a>
                        </li>
                        <li>
                            <a href="{{ route('about') }}">О проекте</a>
                        </li>
                        <li>
                            <a href="plan.html">Планы</a>
                        </li>
                        <li>
                            <a href="{{ route('contacts') }}">Контакты</a>
                        </li>

                        <li class="p-0 d-lg-none mt-3 mt-lg-0">
                            <div class="button__wrapper">
                                <a href="{{ route('register') }}" class="cmn--btn">Регистрация</a>
                                <a href="{{ route('login') }}" class="cmn--btn">Вход</a>
                            </div>
                        </li>
                    </ul>   <!-- Menu End -->

                    <div class="button__wrapper d-none d-lg-block">
                        <a href="{{ route('register') }}" class="cmn--btn">Регистрация</a>
                        <a href="{{ route('login') }}" class="cmn--btn">Вход</a></a>
                    </div>


                    <div class="header-trigger-wrapper d-flex d-lg-none align-items-center">
                        <div class="mobile-nav-right d-flex align-items-center"></div>
                        <a href="#0" class="search--btn me-4 text--base"><i class="fas fa-search"></i></a>
                        <div class="header-trigger d-block d--none">
                            <span></span>
                        </div>
                    </div>  <!-- Trigger End-->
                </div>
            </div>
        </div>
    </div>
    <!-- Header Section Ends Here -->

    @yield('content')

    <!-- Footer Section Starts Here -->
    <footer class="footer-section section-bg">
        <div class="footer-top padding-top pb-5 border-bottom border--white">
            <div class="container">
                <div class="row gy-5 justify-content-md-between">
                    <div class="col-xl-3 col-lg-3 col-sm-6">
                        <div class="footer__widget">
                            <h3 class="widget-title">MIKE GROUP</h3>
                            <p>Группа компаний MIKE GROUP включает в себя несколько инвест проектов включая Хейдж Фонд MIKE Capital который инвестирует в самые высокодоходные мировые проекты</p>
                            <ul class="social-links">
                                <li><a class="facebook-bg" href="#0"><i class="lab la-facebook-f"></i></a></li>
                                <li><a class="twitter-bg" href="#0"><i class="lab la-twitter"></i></a></li>
                                <li><a class="instagram-bg" href="#0"><i class="lab la-instagram"></i></a></li>
                                <li><a class="pinterest-bg" href="#0"><i class="lab la-pinterest"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-sm-6">
                        <div class="footer__widget">
                            <h3 class="widget-title">Разделы</h3>
                            <ul class="footer-links">
                                <li><a href="{{ route('about') }}">Подробнее о RAuCOIN</a></li>
                                <li><a href="{{ route('rules') }}">Правила</a></li>
                                <li><a href="{{ route('privacy-policy') }}">Договор оферты</a></li>
                                <li><a href="{{ route('login') }}">Личный кабинет</a></li>
                                <li><a href="{{ route('rules') }}">Условия</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-sm-6">
                        <div class="footer__widget">
                            <h3 class="widget-title">Компания</h3>
                            <ul class="footer-links">
                                <li><a href="{{ route('about') }}">О проекте</a></li>
{{--                                <li><a href="{{ route('investors') }}">Партнерам</a></li>--}}
                                <li><a href="{{ route('investors') }}">Инвесторам</a></li>
{{--                                <li><a href="">Faq</a></li>--}}
                                <li><a href="{{ route('contacts') }}">Контакты</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-sm-6">
                        <div class="footer__widget">
                            <h3 class="widget-title">Развитие</h3>
                            <ul class="footer-links">
                                <li><a href="{{ route('plans') }}">Цели</a></li>
                                <li><a href="{{ route('login') }}">Развитие</a></li>
                                <li><a href="{{ route('investment-offers') }}">Инвестиции</a></li>
                                <li><a href="/">Партнеры в РФ</a></li>
                                <li><a href="{{ route('news') }}">Новости</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <p class="copyright text-center py-3">
                    Copyright &copy; 2022 Все права защищены.
                </p>
            </div>
        </div>
    </footer>
    <!-- Footer Section Ends Here -->

    <a href="#0" class="scrollToTop"><i class="las la-rocket"></i></a>
    <script src="/template-assets/digihyip/js/jquery-3.6.0.min.js"></script>
    <script src="/template-assets/digihyip/js/bootstrap.min.js"></script>
    <script src="/template-assets/digihyip/js/slick.min.js"></script>
    <script src="/template-assets/digihyip/js/nice-select.js"></script>
    <script src="/template-assets/digihyip/js/odometer.min.js"></script>
    <script src="/template-assets/digihyip/js/viewport.jquery.js"></script>
    <script src="/template-assets/digihyip/js/main.js"></script>
</body>
</html>
