@extends('mobile.templates.main')

@section('content')
    <div class="page page--main" data-page="main">
        @include('mobile.templates.header')

        <!-- PAGE CONTENT -->
        <div class="page__content page__content--with-header page__content--with-bottom-nav">

            <div class="search__form">
                <form>
                    <input type="text" class="search__input" id="" name="" value="" placeholder="Поиск криптовалюты">
                    <input type="submit" class="search__submit" value="Send">
                </form>
            </div>

            <h2 class="page__title">Криптовалюты</h2>

            <div class="cards cards--11">
                <a class="card-coin gradient-light-dark-blue" href="details.html">
                    <!-- TradingView Widget BEGIN -->
                    <div class="tradingview-widget-container">
                        <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-market-overview.js" async>
                            {
                                "colorTheme": "dark",
                                "dateRange": "1M",
                                "showChart": false,
                                "locale": "ru",
                                "largeChartUrl": "",
                                "isTransparent": true,
                                "showSymbolLogo": true,
                                "showFloatingTooltip": false,
                                "width": "100%",
                                "height": "63",
                                "tabs": [
                                {
                                    "title": "Форекс",
                                    "symbols": [
                                        {
                                            "s": "BINANCE:BTCUSDT"
                                        }
                                    ],
                                    "originalTitle": "Forex"
                                }
                            ]
                            }
                        </script>
                    </div>
                </a>
                <a class="card-coin gradient-light-dark-blue" href="details.html">
                    <!-- TradingView Widget BEGIN -->
                    <div class="tradingview-widget-container">
                        <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-market-overview.js" async>
                            {
                                "colorTheme": "dark",
                                "dateRange": "1M",
                                "showChart": false,
                                "locale": "ru",
                                "largeChartUrl": "",
                                "isTransparent": true,
                                "showSymbolLogo": true,
                                "showFloatingTooltip": false,
                                "width": "100%",
                                "height": "63",
                                "tabs": [
                                {
                                    "title": "Форекс",
                                    "symbols": [
                                        {
                                            "s": "BINANCE:ETHUSDT"
                                        }
                                    ],
                                    "originalTitle": "Forex"
                                }
                            ]
                            }
                        </script>
                    </div>
                </a>
                <a class="card-coin gradient-light-dark-blue" href="details.html">
                    <!-- TradingView Widget BEGIN -->
                    <div class="tradingview-widget-container">
                        <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-market-overview.js" async>
                            {
                                "colorTheme": "dark",
                                "dateRange": "1M",
                                "showChart": false,
                                "locale": "ru",
                                "largeChartUrl": "",
                                "isTransparent": true,
                                "showSymbolLogo": true,
                                "showFloatingTooltip": false,
                                "width": "100%",
                                "height": "63",
                                "tabs": [
                                {
                                    "title": "Форекс",
                                    "symbols": [
                                        {
                                            "s": "BINANCE:SOLUSDT"
                                        }
                                    ],
                                    "originalTitle": "Forex"
                                }
                            ]
                            }
                        </script>
                    </div>
                </a>
                <a class="card-coin gradient-light-dark-blue" href="details.html">
                    <!-- TradingView Widget BEGIN -->
                    <div class="tradingview-widget-container">
                        <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-market-overview.js" async>
                            {
                                "colorTheme": "dark",
                                "dateRange": "1M",
                                "showChart": false,
                                "locale": "ru",
                                "largeChartUrl": "",
                                "isTransparent": true,
                                "showSymbolLogo": true,
                                "showFloatingTooltip": false,
                                "width": "100%",
                                "height": "63",
                                "tabs": [
                                {
                                    "title": "Форекс",
                                    "symbols": [
                                        {
                                            "s": "BINANCE:DOGEUSDT"
                                        }
                                    ],
                                    "originalTitle": "Forex"
                                }
                            ]
                            }
                        </script>
                    </div>
                </a>
                <a class="card-coin gradient-light-dark-blue" href="details.html">
                    <!-- TradingView Widget BEGIN -->
                    <div class="tradingview-widget-container">
                        <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-market-overview.js" async>
                            {
                                "colorTheme": "dark",
                                "dateRange": "1M",
                                "showChart": false,
                                "locale": "ru",
                                "largeChartUrl": "",
                                "isTransparent": true,
                                "showSymbolLogo": true,
                                "showFloatingTooltip": false,
                                "width": "100%",
                                "height": "63",
                                "tabs": [
                                {
                                    "title": "Форекс",
                                    "symbols": [
                                        {
                                            "s": "BINANCE:XRPUSDT"
                                        }
                                    ],
                                    "originalTitle": "Forex"
                                }
                            ]
                            }
                        </script>
                    </div>
                </a>
                <a class="card-coin gradient-light-dark-blue" href="details.html">
                    <!-- TradingView Widget BEGIN -->
                    <div class="tradingview-widget-container">
                        <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-market-overview.js" async>
                            {
                                "colorTheme": "dark",
                                "dateRange": "1M",
                                "showChart": false,
                                "locale": "ru",
                                "largeChartUrl": "",
                                "isTransparent": true,
                                "showSymbolLogo": true,
                                "showFloatingTooltip": false,
                                "width": "100%",
                                "height": "63",
                                "tabs": [
                                {
                                    "title": "Форекс",
                                    "symbols": [
                                        {
                                            "s": "BINANCE:LTCUSDT"
                                        }
                                    ],
                                    "originalTitle": "Forex"
                                }
                            ]
                            }
                        </script>
                    </div>
                </a>
                <a class="card-coin gradient-light-dark-blue" href="details.html">
                    <!-- TradingView Widget BEGIN -->
                    <div class="tradingview-widget-container">
                        <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-market-overview.js" async>
                            {
                                "colorTheme": "dark",
                                "dateRange": "1M",
                                "showChart": false,
                                "locale": "ru",
                                "largeChartUrl": "",
                                "isTransparent": true,
                                "showSymbolLogo": true,
                                "showFloatingTooltip": false,
                                "width": "100%",
                                "height": "63",
                                "tabs": [
                                {
                                    "title": "Форекс",
                                    "symbols": [
                                        {
                                            "s": "BINANCE:EOSUSDT"
                                        }
                                    ],
                                    "originalTitle": "Forex"
                                }
                            ]
                            }
                        </script>
                    </div>
                </a>
                <a class="card-coin gradient-light-dark-blue" href="details.html">
                    <!-- TradingView Widget BEGIN -->
                    <div class="tradingview-widget-container">
                        <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-market-overview.js" async>
                            {
                                "colorTheme": "dark",
                                "dateRange": "1M",
                                "showChart": false,
                                "locale": "ru",
                                "largeChartUrl": "",
                                "isTransparent": true,
                                "showSymbolLogo": true,
                                "showFloatingTooltip": false,
                                "width": "100%",
                                "height": "63",
                                "tabs": [
                                {
                                    "title": "Форекс",
                                    "symbols": [
                                        {
                                            "s": "BINANCE:XLMUSDT"
                                        }
                                    ],
                                    "originalTitle": "Forex"
                                }
                            ]
                            }
                        </script>
                    </div>
                </a>
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
            </div>
        </div>
    </div>
@endsection
