@extends('mobile.templates.main')

@section('content')
    <div class="page page--main" data-page="main">
        @include('mobile.templates.header')

        <!-- PAGE CONTENT -->
        <div class="page__content page__content--with-header page__content--with-bottom-nav"><br>
            <h2 class="page__title">Ваш баланс</h2>
            <br>
            <div class="cards cards--11">
                <div class="card-coin">
                    <div class="card-coin__logo"><img src="{{ asset('images/ruble.png') }}" alt="" title=""><span>Рублей</span></div>
                    <div class="card-coin__price">
                        <strong style="display: flex;align-items: end;">
                            {!! \App\Http\Controllers\CoinController::showFormatedUserBalance('price-dot-numbers-small') !!}
                        </strong>
                    </div>
                </div>
                <div class="card-coin">
                    <div class="card-coin__logo"><img src="{{ asset('images/ruble.png') }}" alt="" title=""><span>Реферальный баланс</span></div>
                    <div class="card-coin__chart"><div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div><canvas class="chartup chartjs-render-monitor" width="100" height="60" style="display: block; height: 30px; width: 50px;"></canvas></div>
                    <div class="card-coin__price">
                        <strong>
                            {{ number_format(\Illuminate\Support\Facades\Auth::user()->referral_balance, 0, ',', ' ') }}
                        </strong>
                    </div>
                </div>
                <div class="card-coin">
                    <div class="card-coin__logo"><img src="{{ asset('images/rau.png') }}" alt="" title=""><span>RAu</span></div>
                    <div class="card-coin__chart"><div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div><canvas class="chartup chartjs-render-monitor" width="100" height="60" style="display: block; height: 30px; width: 50px;"></canvas></div>
                    <div class="card-coin__price"><strong>{{ number_format(\Illuminate\Support\Facades\Auth::user()->balance, 6, '.', ' ') }}</strong></div>
                </div>
            </div>
            <br>
            <a href="{{ route('m-by') }}" class="form__submit button button--main button--full">Купить RAu</a>
            <a href="javascript:alert('Продажа пока недоступна!');" class="form__submit button button--main button--full disabled" style="margin-top: 10px;background: #a87700 !important;" disabled="">Продать</a>

            <!-- TRANSACTIONS -->
            <div class="cards cards--11">
                <h2 class="page__title mt-40">История транзакций</h2>
                @foreach($transactions as $transaction)
                    <div class="card-coin">
                        <div class="card-coin__logo"><img src="{{ asset('images/ruble.png') }}" alt="" title="">
                            <span>
                                @switch($transaction->type)
                                    @case('pay')
                                        Пополнение
                                        @break

                                    @case('referral_pay')
                                        Реферальное зачисление
                                        @break

                                    @default
                                        Транзакция
                                @endswitch
                                <b>{{ substr(str_replace('-', '.', $transaction->created_at), 0, 16) }}</b>
                            </span>
                        </div>
                        <div class="card-coin__price">
                            <strong>
                                {{ number_format($transaction->amount, 0, ',', ' ') }}
                            </strong>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
