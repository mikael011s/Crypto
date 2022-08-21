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
                        "width": "380",
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

        </div>
    </div>
@endsection
