@extends('mobile.templates.main')

@section('content')
    <div class="page page--main" data-page="main">
        @include('mobile.templates.header')

        <!-- PAGE CONTENT -->
        <div class="page__content page__content--full page__content--with-bottom-nav">
            <div class="account-info">
                <div class="account-info__title">ВАШ БАЛАНС</div>
                <div class="account-info__total">
                    {{ \Illuminate\Support\Facades\Auth::user()->balance_rau * \App\Models\Setting::where('param', 'rau_price')->first()->value }}
                    <span style="font-size: 19px;font-weight: 600;position: absolute;margin-top: 15px;margin-left: 2px;">₽</span>
                </div>
                <div class="account-info__stats">
                    <span class="plus">
                        {{ \Illuminate\Support\Facades\Auth::user()->balance_rau }}<span style="font-size: 11px;padding: 0px;margin-left: 1px;">RAu</span>

                    </span>
                    |
                    <span class="plus">+{{ \App\Models\RauHistory::all()->sortByDesc('id')->first()->up_percent }}%</span>
                </div>
                <svg class="account-info__svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none">
                    <path d="M0,0 Q50,201 100,0 L100,100 0,100 Z" fill="#00001C"/>
                </svg>


            </div>

            <div class="account-buttons">
                <a href="{{ route('m-by') }}" class="gradient-dark-blue">
                    <img src="/template-assets/cryptex/images/icons/bottom.svg" alt="" title=""/><span>КУПИТЬ</span>
                </a>
                <a href="javascript:alert('Данная функция пока не доступна для Вас!');" class="gradient-dark-blue">
                    <img src="/template-assets/cryptex/images/icons/top.svg" alt="" title=""/><span>ПРОДАТЬ</span>
                </a>
                <a href="javascript:alert('Данная функция пока не доступна для Вас!');" class="gradient-dark-blue">
                    <img src="/template-assets/cryptex/images/icons/swap.svg" alt="" title=""/><span>ОБМЕН</span>
                </a>
            </div>

            <div class="page-inner">
                <!-- SLIDER AUTO 2 -->



                <!-- SLIDER LINKS -->
                <div class="swiper-container slider-links slider-init-top mb-0">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide slider-links__slide">
                            <div class="slider-links__caption caption">
                                <div class="caption__content">
                                    <div class="caption__link"><a href="#">RAu</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide slider-links__slide">
                            <div class="slider-links__caption caption">
                                <div class="caption__content">
                                    <div class="caption__link"><a href="#">Bitcoin</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide slider-links__slide">
                            <div class="slider-links__caption caption">
                                <div class="caption__content">
                                    <div class="caption__link"><a href="#">Etherium</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Start Self Slider -->
                <div class="swiper-container slider-simple slider-simple--round-corners slider-init-bottom mb-40 stats-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide slider-simple__slide" style="background-image:url(images/photos/image-1.jpg);">
                            <a href="{{ route('coin-more', 'rau') }}">
                                <div class="slider-simple__caption caption caption--gradient">
                                    <div class="caption__content">
                                        <div class="page__title-bar">
                                            <h3>Динамика курса RAu COIN (неделя)</h3>
                                        </div>

                                        <div class="caption__chart"><canvas id="rau_chart" width="100%" height="60"></canvas></div>
                                        <br>
                                        <div class="caption__info">
                                            <b>1 RAu</b> - <b>{{ \App\Models\Setting::where('param', 'rau_price')->first()->value }}₽</b>
                                        </div>
                                        <div class="caption__info">
                                            <strong>Рост за последний день:</strong>
                                            <span class="plus">+{{ \App\Models\RauHistory::all()->sortByDesc('id')->first()->up_percent }}%</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide slider-simple__slide" style="background-image:url(images/photos/image-2.jpg);">
                            <a href="{{ route('coin-more', 'btc') }}">
                                <div class="slider-simple__caption caption caption--gradient">
                                    <div class="caption__content">
                                        <div class="page__title-bar">
                                            <h3>Динамика курса Bitcoin (неделя)</h3>
                                        </div>

                                        <div class="caption__chart"><canvas id="btc_chart" width="100%" height="60"></canvas></div>
                                        <br>
                                        <div class="caption__info"><b>1 BTC</b> - <b>
                                                @php
                                                    $rates = \App\Models\Rate::where('coin', 'BTC_RUB')->get();
                                                    echo $rates[count($rates) - 1]['rate'];
                                                @endphp₽
                                            </b></div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide slider-simple__slide" style="background-image:url(images/photos/image-3.jpg);">
                            <a href="{{ route('coin-more', 'eth') }}">
                                <div class="slider-simple__caption caption caption--gradient">
                                    <div class="caption__content">
                                        <div class="page__title-bar">
                                            <h3>Динамика курса Ethereum (неделя)</h3>
                                        </div>

                                        <div class="caption__chart"><canvas id="eth_chart" width="100%" height="60"></canvas></div>
                                        <br>
                                        <div class="caption__info"><b>1 ETH</b> - <b>
                                                @php
                                                    $rates = \App\Models\Rate::where('coin', 'ETH_RUB')->get();
                                                    echo $rates[count($rates) - 1]['rate'];
                                                @endphp₽
                                            </b></div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="swiper-pagination slider-simple__pagination slider-init-bottom__pagination"></div>
                </div>


                <div class="page__title-bar">
                    <h3>Курсы других валют</h3>
                    <div class="page__title-right">
{{--                        <a href="list.html" class="button button--main button--ex-small">VIEW ALL</a>--}}
                    </div>
                </div>

                <!-- TradingView Widget BEGIN -->
                <div class="tradingview-widget-container">
                    <div class="tradingview-widget-container__widget"></div>
                    <div class="tradingview-widget-copyright"><a href="https://ru.tradingview.com/markets/currencies/" rel="noopener" target="_blank"><span class="blue-text">Форекс</span></a> от TradingView</div>
                    <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-market-overview.js" async>
                        {
                            "colorTheme": "dark",
                            "dateRange": "12M",
                            "showChart": false,
                            "locale": "ru",
                            "largeChartUrl": "",
                            "isTransparent": true,
                            "showSymbolLogo": true,
                            "showFloatingTooltip": false,
                            "width": "100%",
                            "height": "465",
                            "tabs": [
                            {
                                "title": "Форекс",
                                "symbols": [
                                    {
                                        "s": "BINANCE:BTCUSDT"
                                    },
                                    {
                                        "s": "BINANCE:SOLUSDT"
                                    },
                                    {
                                        "s": "BINANCE:ETHUSDT"
                                    },
                                    {
                                        "s": "BYBIT:SANDUSDT"
                                    }
                                ],
                                "originalTitle": "Forex"
                            }
                        ]
                        }
                    </script>
                </div>
                <!-- TradingView Widget END -->

{{--                <div class="cards cards--11">--}}
{{--                    <a class="card-coin gradient-light-dark-blue" href="details.html">--}}
{{--                        <div class="card-coin__logo"><img src="/template-assets/cryptex/images/logos/bitcoin.png" alt="" title=""/><span>Bitcoin <b>BTC</b></span></div>--}}
{{--                        <div class="card-coin__chart"><canvas class="chartup" width="50" height="30"></canvas></div>--}}
{{--                        <div class="card-coin__price"><strong>--}}
{{--                                @php--}}
{{--                                    $rates = \App\Models\Rate::where('coin', 'BTC_RUB')->get();--}}
{{--                                    echo $rates[count($rates) - 1]['rate'];--}}
{{--                                @endphp--}}
{{--                            </strong>₽</div>--}}
{{--                    </a>--}}
{{--                    <a class="card-coin gradient-light-dark-blue" href="details.html">--}}
{{--                        <div class="card-coin__logo"><img src="/template-assets/cryptex/images/logos/ethereum.png" alt="" title=""/><span>Ethereum <b>ETH</b></span></div>--}}
{{--                        <div class="card-coin__chart"><canvas class="chartup" width="50" height="30"></canvas></div>--}}
{{--                        <div class="card-coin__price"><strong>--}}
{{--                                @php--}}
{{--                                    $rates = \App\Models\Rate::where('coin', 'ETH_RUB')->get();--}}
{{--                                    echo $rates[count($rates) - 1]['rate'];--}}
{{--                                @endphp--}}
{{--                            </strong>₽</div>--}}
{{--                    </a>--}}
{{--                    <a class="card-coin gradient-light-dark-blue" href="details.html">--}}
{{--                        <div class="card-coin__logo"><img src="/template-assets/cryptex/images/logos/elrond.png" alt="" title=""/><span>Elrond <b>EGLD</b></span></div>--}}
{{--                        <div class="card-coin__chart"><canvas class="chartup" width="50" height="30"></canvas></div>--}}
{{--                        <div class="card-coin__price"><strong>$320</strong><span class="plus">+5%</span></div>--}}
{{--                    </a>--}}
{{--                    <a class="card-coin gradient-light-dark-blue" href="details.html">--}}
{{--                        <div class="card-coin__logo"><img src="/template-assets/cryptex/images/logos/sandbox.png" alt="" title=""/><span>The Sandbox <b>SAND</b></span></div>--}}
{{--                        <div class="card-coin__chart"><canvas class="chartup" width="50" height="30"></canvas></div>--}}
{{--                        <div class="card-coin__price"><strong>$6,5</strong><span class="plus">+5%</span></div>--}}
{{--                    </a>--}}
{{--                    <a class="card-coin gradient-light-dark-blue" href="details.html">--}}
{{--                        <div class="card-coin__logo"><img src="/template-assets/cryptex/images/logos/solana.png" alt="" title=""/><span>Solana <b>SOL</b></span></div>--}}
{{--                        <div class="card-coin__chart"><canvas class="chartup" width="50" height="30"></canvas></div>--}}
{{--                        <div class="card-coin__price"><strong>$140</strong><span class="plus">+4%</span></div>--}}
{{--                    </a>--}}
{{--                </div>--}}
            </div>
        </div>

        <script>
            var galleryLinks = new Swiper('.slider-init-top', {
                direction: 'horizontal',
                spaceBetween: 10,
                slidesPerView: "auto",
                slideToClickedSlide: true,
                centeredSlides: true,
            });

            var galleryImages = new Swiper('.slider-init-bottom', {
                spaceBetween: 0,
                slidesPerView: 1,
                pagination: {
                    el: '.slider-init-bottom__pagination',
                    type: "bullets",
                },

            });

            galleryLinks.controller.control = galleryImages;
            galleryImages.controller.control = galleryLinks;
        </script>

        <style>
            .stats-slider canvas {
                width: 100% !important;
            }
        </style>

        <!-- CHART -->

        @include('mobile.charts.scripts')

        <!-- END CHART -->
@endsection
