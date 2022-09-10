<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="theme-color" content="#00001c">

    <title>@yield('title', 'RAu COIN')</title>

    <link rel="stylesheet" href="{{ asset('template-assets/cryptex/vendor/swiper/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template-assets/cryptex/css/style.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/lk.css') }}">
</head>
<body>
    <script src="{{ asset('template-assets/cryptex/vendor/jquery/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('template-assets/cryptex/vendor/jquery/jquery.validate.min.js') }}" ></script>
    <script src="{{ asset('template-assets/cryptex/vendor/swiper/swiper.min.js') }}"></script>
    <script src="{{ asset('template-assets/cryptex/vendor/charts/Chart.min.js') }}"></script>
    <script src="{{ asset('template-assets/cryptex/vendor/charts/chartjs-plugin-style.min.js') }}"></script>
    <script src="{{ asset('template-assets/cryptex/js/custom-charts.js') }}"></script>
    <script src="{{ asset('template-assets/cryptex/js/swiper-init.js') }}"></script>
    <script src="{{ asset('template-assets/cryptex/js/jquery.custom.js') }}"></script>
    <script src="{{ asset('template-assets/cryptex/js/header-scroll.js') }}"></script>

    @if(\Illuminate\Support\Facades\Auth::check())
        <!-- Overlay panel -->
        <div class="body-overlay"></div>
        <!-- Left panel -->
        <div id="panel-left">
            <div class="panel panel--left">
                <!-- Slider -->
                <div class="panel__navigation">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="subnav-header closepanel"><img src="/template-assets/cryptex/images/icons/arrow-back.svg" alt="" title="" /></div>
                            <div class="user-details">
                                <div class="user-details__thumb"><img src="{{ asset('images/rau.png') }}" alt="" title=""/></div>
                                <div class="user-details__title"><span>Добрый день, </span> {{ \Illuminate\Support\Facades\Auth::user()->name }}</div>
                            </div>
                            <nav class="main-nav">
                                <ul>
{{--                                    <li><a href="{{ route('m-profile') }}"><img src="/template-assets/cryptex/images/icons/user.svg" alt="" title="" /><span>Мой аккаунт</span></a></li>--}}
                                    <li><a href="{{ route('m-profile') }}"><img src="/template-assets/cryptex/images/icons/wallet.svg" alt="" title="" /><span>Профиль</span></a></li>
                                    <li><a href="{{ route('m-wallet') }}"><img src="/template-assets/cryptex/images/icons/wallet.svg" alt="" title="" /><span>Мой счёт</span></a></li>
                                    <li><a href="{{ route('coin-more', 'rau') }}"><img src="/template-assets/cryptex/images/icons/listing.svg" alt="" title="" /><span>RAu COIN</span></a></li>
                                    <li><a href="{{ route('m-by') }}"><img src="/template-assets/cryptex/images/icons/listing.svg" alt="" title="" /><span>Купить</span></a></li>
                                    <li><a href="{{ route('m-stats') }}"><img src="/template-assets/cryptex/images/icons/listing.svg" alt="" title="" /><span>Курсы валют</span></a></li>

                                    <li><a href="/home/privacy/policy#overview"><img src="/template-assets/cryptex/images/icons/listing.svg" alt="" title="" /><span>Правила и условия</span></a></li>
                                    <li><a href="/home/privacy/policy#data-collection"><img src="/template-assets/cryptex/images/icons/listing.svg" alt="" title="" /><span>Конфиденциальность</span></a></li>
                                    <li><a href="{{ route('m-rounds') }}"><img src="/template-assets/cryptex/images/icons/listing.svg" alt="" title="" /><span>Раунды</span></a></li>
                                </ul>
                            </nav>
                            <div class="buttons buttons--centered">
                                <a class="button button--main button--small" href="{{ route('logout') }}"
                                                                      onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    Выйти
                                </a>
                            </div>
                            <div class="main-nav">
                                <p class="text-muted" style="font-size: 12px;color:rgba(250,250,250,.2);">Свайп вправо для полного меню</p>
                            </div>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
{{--                        <div class="swiper-slide">--}}
{{--                            <nav class="main-nav">--}}
{{--                                <ul>--}}
{{--                                    <li><a href="cards.html"><img src="/template-assets/cryptex/images/icons/blocks.svg" alt="" title="" /><span>Cards</span></a></li>--}}
{{--                                    <li><a href="sliders.html"><img src="/template-assets/cryptex/images/icons/slider.svg" alt="" title="" /><span>Sliders</span></a></li>--}}
{{--                                    <li><a href="forms.html"><img src="/template-assets/cryptex/images/icons/form.svg" alt="" title="" /><span>Forms</span></a></li>--}}
{{--                                    <li><a href="tables.html"><img src="/template-assets/cryptex/images/icons/tables.svg" alt="" title="" /><span>Tables</span></a></li>--}}
{{--                                    <li><a href="tabs-toggles.html"><img src="/template-assets/cryptex/images/icons/tabs.svg" alt="" title="" /><span>Tabs</span></a></li>--}}
{{--                                    <li><a href="#" data-popup="social" class="open-popup"><img src="/template-assets/cryptex/images/icons/love.svg" alt="" title="" /><span>Social</span></a></li>--}}
{{--                                    <li><a href="#" data-popup="notifications" class="open-popup"><img src="/template-assets/cryptex/images/icons/popup.svg" alt="" title="" /><span>Popups</span></a></li>--}}
{{--                                    <li><a href="#" data-popup="alert" class="open-popup"><img src="/template-assets/cryptex/images/icons/notifications.svg" alt="" title="" /><span>Notifications</span></a></li>--}}
{{--                                </ul>--}}
{{--                            </nav>--}}
{{--                        </div>--}}
                    </div>
                </div>
            </div>
        </div>
    @endif


    @yield('content')

    @if(\Illuminate\Support\Facades\Auth::check())
        @if(!isset($bottomMenu) || $bottomMenu !== false)
            <!-- Bottom navigation -->
            <div id="bottom-toolbar" class="bottom-toolbar">
                <div class="bottom-navigation bottom-navigation--gradient">
                    <ul class="bottom-navigation__icons">
                        <li><a href="{{ route('m-dashboard') }}"><img src="{{ asset('template-assets/cryptex/images/icons/blocks.svg') }}" alt="" title="" /></a></li>
                        <li><a href="{{ route('m-stats') }}"><img src="{{ asset('template-assets/cryptex/images/icons/stats.svg') }}" alt="" title="" /></a></li>
                        <li class="centered"><a href="{{ route('m-wallet') }}"><img src="{{ asset('template-assets/cryptex/images/icons/wallet.svg') }}" alt="" title="" /></a></li>
                        <li><a href="#" class="open-popup" data-popup="notifications"><img src="{{ asset('template-assets/cryptex/images/icons/notifications.svg') }}" alt="" title="" /><i>1</i></a></li>
                        <li><a href="{{ route('m-contact') }}"><img src="{{ asset('template-assets/cryptex/images/icons/contact.svg') }}" alt="" title="" /></a></li>
                    </ul>
                </div>
            </div>
        @endif

        <!-- Social Icons Popup -->
        <div id="popup-social"></div>

        <!-- Alert -->
        <div id="popup-alert">
            <div class="popup popup--centered popup--shadow popup--alert">
                <div class="popup__close"><a href="#" class="close-popup" data-popup="alert"><img src="images/icons/close.svg" alt="" title=""/></a></div>
                <div class="popup__icon"><img src="images/icons/alert.svg" alt="" title=""/></div>
                <h2 class="popup__title">Hey there !</h2>
                <p class="popup__text">This is an alert example. Creativity is breaking out of established patterns to look at things in a different way.</p>
            </div>
        </div>

        <!-- Notifications -->
        <div id="popup-notifications">
            <div class="popup popup--notifications">
                <div class="popup__close"><a href="#" class="close-popup" data-popup="notifications"><img src="{{ asset('template-assets/cryptex/images/icons/close.svg') }}" alt="" title=""/></a></div>
                <h2 class="popup__title">Последние уведомления</h2>
                <ul class="notifications pt-20">
                    @foreach(\App\Models\User::find(\Illuminate\Support\Facades\Auth::id())->getUserNotifications()->get() as $notification)
                        <li class="notification notification-warning">{{ $notification->text }}</li>
                    @endforeach
                </ul>
                @if (count(\App\Models\User::find(\Illuminate\Support\Facades\Auth::id())->getUserNotifications()->get()) > 0)
                    <a href="javascript:checkAllNotifications();" class="button button--full button--main">Отметить прочитанными</a>
                @else
                    <h3>Уведомлений пока нет.</h3>
                @endif
            </div>
        </div>
    @endif

    <script>
        if (window.screen.width > 800) {
            $('body *').remove();
            $('body').append('<div style="width:100%;height:100%;display: flex;justify-content: center;align-items: center;"><div style="font-size:20px;text-align: center;width:800px;margin-top:55px;">' +
                'В нашем проекте реализована мобильная версия личного кабинет! Пожалуйста, войдите с мобильного устройства и личный кабинет будет доступен Вам!!</div>' +
                '<img style="position:absolute;z-index:-1;margin-top:-300px;" width="400px" src="{{ asset("/template-assets/digihyip/images/choose-us/thumb.png") }}"></div>');
        }
    </script>
</body>
</html>
