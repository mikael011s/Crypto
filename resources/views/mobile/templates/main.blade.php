<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>@yield('title', 'Mike Group')</title>

    <link rel="stylesheet" href="{{ asset('template-assets/cryptex/vendor/swiper/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template-assets/cryptex/css/style.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;600&display=swap" rel="stylesheet">
</head>
<body>
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
                                <div class="user-details__thumb"><img src="/template-assets/cryptex/images/photos/avatar-5.jpg" alt="" title=""/></div>
                                <div class="user-details__title"><span>Hello</span> Pieter Vanderbeld</div>
                            </div>
                            <nav class="main-nav">
                                <ul>
                                    <li><a href="user-profile.html"><img src="/template-assets/cryptex/images/icons/user.svg" alt="" title="" /><span>Мой аккаунт</span></a></li>
                                    <li><a href="forms.html"><img src="/template-assets/cryptex/images/icons/settings.svg" alt="" title="" /><span>Настройки</span></a></li>
                                    <li class="subnav opensubnav"><a href="#"><img src="/template-assets/cryptex/images/icons/listing.svg" alt="" title="" /><span>Депозит</span></a></li>
                                    <li><a href="wallet.html"><img src="/template-assets/cryptex/images/icons/wallet.svg" alt="" title="" /><span>Мои финансы</span></a></li>
                                    <li><a href="contact.html"><img src="/template-assets/cryptex/images/icons/contact.svg" alt="" title="" /><span>Поддержка</span></a></li>
                                </ul>
                            </nav>
                            <div class="buttons buttons--centered">
                                <a class="button button--main button--small" href="{{ route('logout') }}"
                                                                      onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    Выйти
                                </a>
                            </div>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                        <div class="swiper-slide">
                            <nav class="main-nav">
                                <ul>
                                    <li><a href="cards.html"><img src="/template-assets/cryptex/images/icons/blocks.svg" alt="" title="" /><span>Cards</span></a></li>
                                    <li><a href="sliders.html"><img src="/template-assets/cryptex/images/icons/slider.svg" alt="" title="" /><span>Sliders</span></a></li>
                                    <li><a href="forms.html"><img src="/template-assets/cryptex/images/icons/form.svg" alt="" title="" /><span>Forms</span></a></li>
                                    <li><a href="tables.html"><img src="/template-assets/cryptex/images/icons/tables.svg" alt="" title="" /><span>Tables</span></a></li>
                                    <li><a href="tabs-toggles.html"><img src="/template-assets/cryptex/images/icons/tabs.svg" alt="" title="" /><span>Tabs</span></a></li>
                                    <li><a href="#" data-popup="social" class="open-popup"><img src="/template-assets/cryptex/images/icons/love.svg" alt="" title="" /><span>Social</span></a></li>
                                    <li><a href="#" data-popup="notifications" class="open-popup"><img src="/template-assets/cryptex/images/icons/popup.svg" alt="" title="" /><span>Popups</span></a></li>
                                    <li><a href="#" data-popup="alert" class="open-popup"><img src="/template-assets/cryptex/images/icons/notifications.svg" alt="" title="" /><span>Notifications</span></a></li>
                                </ul>
                            </nav>
                        </div>
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
                        <li><a href="main.html"><img src="{{ asset('template-assets/cryptex/images/icons/blocks.svg') }}" alt="" title="" /></a></li>
                        <li><a href="list.html"><img src="{{ asset('template-assets/cryptex/images/icons/stats.svg') }}" alt="" title="" /></a></li>
                        <li class="centered"><a href="wallet.html"><img src="{{ asset('template-assets/cryptex/images/icons/wallet.svg') }}" alt="" title="" /></a></li>
                        <li><a href="#" class="open-popup" data-popup="notifications"><img src="{{ asset('template-assets/cryptex/images/icons/notifications.svg') }}" alt="" title="" /><i>3</i></a></li>
                        <li><a href="contact.html"><img src="{{ asset('template-assets/cryptex/images/icons/contact.svg') }}" alt="" title="" /></a></li>
                    </ul>
                </div>
            </div>
        @endif

        <!-- Social Icons Popup -->
        <div id="popup-social"></div>

        <!-- Alert -->
        <div id="popup-alert"></div>

        <!-- Notifications -->
        <div id="popup-notifications"></div>

        <script src="{{ asset('template-assets/cryptex/vendor/jquery/jquery-3.5.1.min.js') }}"></script>
        <script src="{{ asset('template-assets/cryptex/vendor/jquery/jquery.validate.min.js') }}" ></script>
        <script src="{{ asset('template-assets/cryptex/vendor/swiper/swiper.min.js') }}"></script>
        <script src="{{ asset('template-assets/cryptex/vendor/charts/Chart.min.js') }}"></script>
        <script src="{{ asset('template-assets/cryptex/vendor/charts/chartjs-plugin-style.min.js') }}"></script>
        <script src="{{ asset('template-assets/cryptex/js/custom-charts.js') }}"></script>
        <script src="{{ asset('template-assets/cryptex/js/swiper-init.js') }}"></script>
        <script src="{{ asset('template-assets/cryptex/js/jquery.custom.js') }}"></script>
        <script src="{{ asset('template-assets/cryptex/js/header-scroll.js') }}"></script>
    @endif
</body>
</html>
