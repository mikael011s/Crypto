@extends('mobile.templates.main')

@section('content')
    <div class="page page--main" data-page="main">
        @include('mobile.templates.header')

        <!-- PAGE CONTENT -->
        <div class="page__content page__content--full">
            <div class="account-info account-info--details">
{{--                <div class="account-info__icon"><img src="images/logos/bitcoin-colored.png" alt="" title=""/></div>--}}
                <div class="account-info__title" style="text-transform: uppercase;font-weight: bolder;font-size: 15px;margin-bottom: 0px;">{{ $coin }}</div>
                @if($coin == 'RAU')
                    <div class="account-info__total" style="margin-top: -2px;">
                        {{ number_format(\App\Models\Setting::where('param', 'rau_price')->first()->value, 2, '.', ' ') }}
                        <span style="font-size: 15px;font-weight: 300;position: absolute;margin-top: 20px;margin-left: 2px;">₽</span>
                    </div>
                    <div class="account-info__stats">
                        <span class="plus">+{{ \App\Models\RauHistory::all()->sortByDesc('id')->first()->up_percent }}%</span>
                    </div>
                    <div class="account-info__chart"><canvas id="rau_chart" width="100%" height="60"></canvas></div>
                @elseif($coin == 'BTC')
                    <!-- TradingView Widget BEGIN -->
                    <div class="tradingview-widget-container">
                        <div id="tradingview_1613d"></div>
                        <div class="tradingview-widget-copyright"><a href="https://ru.tradingview.com/symbols/BTCRUB/?exchange=BINANCE" rel="noopener" target="_blank"><span class="blue-text">Курс BTCRUB</span></a> от TradingView</div>
                        <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
                        <script type="text/javascript">
                            new TradingView.MediumWidget(
                                {
                                    "symbols": [
                                        [
                                            "BINANCE:BTCUSDT|1M"
                                        ]
                                    ],
                                    "chartOnly": true,
                                    "width": "100%",
                                    "height": "333",
                                    "locale": "ru",
                                    "colorTheme": "dark",
                                    "autosize": false,
                                    "showVolume": false,
                                    "hideDateRanges": false,
                                    "scalePosition": "left",
                                    "scaleMode": "Normal",
                                    "fontFamily": "-apple-system, BlinkMacSystemFont, Trebuchet MS, Roboto, Ubuntu, sans-serif",
                                    "noTimeScale": false,
                                    "valuesTracking": "1",
                                    "chartType": "line",
                                    "fontColor": "rgba(0, 0, 0, 1)",
                                    "gridLineColor": "rgba(0, 0, 0, 0.3)",
                                    "backgroundColor": "rgba(19, 23, 34, 0)",
                                    "color": "rgba(0, 0, 0, 1)",
                                    "lineWidth": 2,
                                    "container_id": "tradingview_1613d"
                                }
                            );
                        </script>
                    </div>
                    <!-- TradingView Widget END -->
                @elseif($coin == 'ETH')
                    <!-- TradingView Widget BEGIN -->
                    <div class="tradingview-widget-container">
                        <div id="tradingview_1613d"></div>
                        <div class="tradingview-widget-copyright"><a href="https://ru.tradingview.com/symbols/BTCRUB/?exchange=BINANCE" rel="noopener" target="_blank"><span class="blue-text">Курс BTCRUB</span></a> от TradingView</div>
                        <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
                        <script type="text/javascript">
                            new TradingView.MediumWidget(
                                {
                                    "symbols": [
                                        [
                                            "BINANCE:ETHUSDT|1M"
                                        ]
                                    ],
                                    "chartOnly": true,
                                    "width": "100%",
                                    "height": "333",
                                    "locale": "ru",
                                    "colorTheme": "dark",
                                    "autosize": false,
                                    "showVolume": false,
                                    "hideDateRanges": false,
                                    "scalePosition": "left",
                                    "scaleMode": "Normal",
                                    "fontFamily": "-apple-system, BlinkMacSystemFont, Trebuchet MS, Roboto, Ubuntu, sans-serif",
                                    "noTimeScale": false,
                                    "valuesTracking": "1",
                                    "chartType": "line",
                                    "fontColor": "rgba(0, 0, 0, 1)",
                                    "gridLineColor": "rgba(0, 0, 0, 0.3)",
                                    "backgroundColor": "rgba(19, 23, 34, 0)",
                                    "color": "rgba(0, 0, 0, 1)",
                                    "lineWidth": 2,
                                    "container_id": "tradingview_1613d"
                                }
                            );
                        </script>
                    </div>
                    <!-- TradingView Widget END -->
                @endif
{{--                <div class="account-selectors">--}}
{{--                    <span>1Д</span>--}}
{{--                    <span class="selected">1Н</span>--}}
{{--                    <span>1М</span>--}}
{{--                    <span>3М</span>--}}
{{--                    <span>6М</span>--}}
{{--                    <span>1Г</span>--}}
{{--                    <span>3Г</span>--}}
{{--                </div>--}}

                <svg class="account-info__svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none">
                    <path d="M0,0 Q50,201 100,0 L100,100 0,100 Z" fill="#00001c"/>
                </svg>
            </div>

            <div class="page-inner page-inner--with-bottom-button">
                @if($coin == 'RAU')
                    <h2 class="page__title">О RAu COIN</h2>

                    <p class="welcome">
                        RAu COIN - цифровая валюта созданная а августе 2022 года инвестиционной компанией MIKE GROUP. Уникальность валюты в регулировании курса за счёт качественного инвестиционного портфеля компании MIKE GROUP
                    </p>

                    <div class="cards cards--11 coin-info">
                        <div class="card-coin gradient-light-dark-blue">
                            <div class="card-coin__logo"><span>Общая эмиссия: <b>Стартовая эмиссия</b></span></div>
                            <div class="card-coin__price"><strong> 7 000 000 000 ₽</strong></div>
                        </div>
                        <div class="card-coin gradient-light-dark-blue">
                            <div class="card-coin__logo"><span>Объем: <b>24 часа </b></span></div>
                            <div class="card-coin__price"><strong>9 456 780 ₽</strong></div>
                        </div>
                        <div class="card-coin gradient-light-dark-blue">
                            <div class="card-coin__logo"><span>Оборот валюты: <b>Количество монет в обращении</b></span></div>
                            <div class="card-coin__price"><strong>135096,8571 RAu</strong></div>
                        </div>
                    </div>
                    <div class="card-coin gradient-light-dark-blue">
                        <div class="card-coin__logo"><span>Максимальный запас</span></div>
                        <div class="card-coin__price"><strong>{{ number_format(100000000 * \App\Models\Setting::where('param', 'rau_price')->first()->value, 0, ',', ' ') }} ₽</strong></div>
                    </div>
                    <div class="card-coin gradient-light-dark-blue">
                        <div class="card-coin__logo"><span>Общее предложение</span></div> <!-- \App\Models\User::all()->sum('balance') -->
                        <div class="card-coin__price"><strong>{{ number_format((100000000 * \App\Models\Setting::where('param', 'rau_price')->first()->value) - 9456780, 0, ',', ' ') }} ₽</strong></div>
                    </div>
                @elseif($coin == 'BTC')
                    <h2 class="page__title">О Bitcoin</h2>

                    <p class="welcome">
                        Биткоин — самая торгуемая в мире криптовалюта, представляющая собой значительную часть криптовалютного рынка. Это первая цифровая монета, которая остается самой известной в мире криптовалютой.
                    </p>
                @elseif($coin == 'ETH')
                    <h2 class="page__title">Об Etherium</h2>

                    <p class="welcome">
                        Эфириум — вторая по известности в мире блокчейн-сеть — представляет собой платформу для создания децентрализованных приложений на основе технологии блокчейн и смарт-контрактов
                    </p>
                @endif
            </div>
        </div>
    </div>

    <script>

        // datasets: [{
        //     label: "",
        //     borderColor: "#000",
        //     pointBorderColor: "#000",
        //     pointBackgroundColor: "rgba(255, 255, 255, 1)",
        //     pointHoverBackgroundColor: "#000",
        //     pointHoverBorderColor: "#000",
        //     pointBorderWidth: 2,
        //     pointHoverRadius: 5,
        //     pointRadius: 5,
        //     pointHoverBorderWidth: 0,
        //     fill: false,
        //     borderWidth: 3,

        @if ($coin == 'RAU')
        document.addEventListener("DOMContentLoaded", function(event) {
            {

                var rauChart = document.getElementById('rau_chart')
                var ctx = rauChart.getContext('2d');
                new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: [
                            "{{ date('d.m.Y', strtotime('-7 days')) }}",
                            "{{ date('d.m.Y', strtotime('-6 days')) }}",
                            "{{ date('d.m.Y', strtotime('-5 days')) }}",
                            "{{ date('d.m.Y', strtotime('-4 days')) }}",
                            "{{ date('d.m.Y', strtotime('-3 days')) }}",
                            "{{ date('d.m.Y', strtotime('-2 days')) }}",
                            "{{ date('d.m.Y', strtotime('-1 days')) }}"
                        ],
                        datasets: [{
                            label: "",
                            borderColor: "#000",
                            pointBorderColor: "#000",
                            pointBackgroundColor: "rgba(255, 255, 255, 1)",
                            pointHoverBackgroundColor: "#000",
                            pointHoverBorderColor: "#000",
                            pointBorderWidth: 2,
                            pointHoverRadius: 5,
                            pointRadius: 5,
                            pointHoverBorderWidth: 0,
                            fill: false,
                            borderWidth: 3,

                            // Тут надо вывести 7 чисел
                            data:
                                [@php
                                    $rows = \App\Models\RauHistory::all()->sortByDesc('id')->take(7)->toArray();

                                    $items = [];
                                    foreach ($rows as $row) {
                                        $items[] = $row;
                                    }

                                    for ($i = count($items) -1 ; $i >= count($items) - 7; $i--) {
                                        if (isset($items[$i]))
                                            echo "'{$items[$i]['new_price']}',";
                                    }
                                @endphp]
                        }
                        ]
                    },
                    options: {
                        legend: {
                            display: false
                        },
                        scales: {
                            yAxes: [{
                                ticks: {
                                    display: true
                                },
                                gridLines: {
                                    drawTicks: true,
                                    display: true,
                                    drawBorder: true
                                }

                            }],
                            xAxes: [{
                                gridLines: {
                                    zeroLineColor: "transparent",
                                    display: false,
                                    drawBorder: false
                                },
                                ticks: {
                                    display: false
                                }
                            }]
                        }
                    }
                });
            }
        });

        @endif
    </script>

    <style>
        .tradingview-widget-copyright {
            display: none !important;
        }

        .label-VcRVXD4K {
            display: none !important;
        }
    </style>
@endsection
