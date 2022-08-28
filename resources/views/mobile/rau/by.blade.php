@extends('mobile.templates.main')

@section('content')
    <div class="page page--main" data-page="main">
        <!-- HEADER -->
        <header class="header header--fixed">
            <div class="header__inner">
                <div class="header__icon"><a href="{{ route('m-dashboard') }}"><img src="{{ asset('template-assets/cryptex/images/icons/arrow-back.svg') }}" alt="image" title="image"/></a></div>
            </div>
        </header>

        <!-- PAGE CONTENT -->
        <div class="page__content page__content--with-header page__content--with-bottom-nav">
            <h2 class="page__title">Купить RAu</h2>
            <form id="Form" method="post" action="checkout.html">
                <div class="fieldset">
                    <div class="form">
                        <h3 class="mb-0 fw-bolder">Покупаю на</h3>
                        <div class="form__row d-flex align-items-center justify-space">
                            <input type="text" name="Text" value="" class="form__input form__input--23" placeholder="" oninput="editRub()" id="rub_input" />
                            <div class="form__coin-icon"><img src="{{ asset('ima ges/ruble.png') }}" alt="" title=""/><span>Руб.</span></div>
                        </div>
                    </div>
                </div>
                <div class="fieldset">
                    <div class="form">
                        <h3 class="mb-0 fw-bolder">Получаю</h3>
                        <div class="form__row d-flex align-items-center justify-space">
                            <input type="text" name="Text" value="" class="form__input form__input--23" placeholder="" oninput="editRau()" id="rau_input" />
                            <div class="form__coin-icon"><img src="{{ asset('images/rau.png') }}" alt="" title=""/><span>RAu</span></div>
                        </div>
                    </div>
                </div>
                <div class="fieldset" style="background: transparent;border: 2px solid #ffc700;padding-right: 16px;">
                    <div class="alert alert-warning">
                        <h4 class="mb-0 fw-bolder mb-0 pb-0" style="color:#ffc700;">
                            Курс RAu COIN на {{ date('d.m.Y') }} - {{ \App\Models\Setting::where('param', 'rau_price')->first()->value }} ₽
                        </h4>
                    </div>
                </div>
                <div class="fieldset">
                    <div class="form">
                        <h3 class="mb-0 fw-bolder">Выберите тариф</h3>
                        <div class="card-selector">
                            <input type="radio" name="excard" id="c1" value="1" /><label for="c1">30 дней<span></span></label>
                        </div>
                        <div class="card-selector">
                            <input type="radio" name="excard" id="c2" value="2" /><label for="c2">90 дней<span></span></label>
                        </div>
                        <div class="card-selector">
                            <input type="radio" name="excard" id="c3" value="3" /><label for="c3">180 дней<span></span></label>
                        </div>
                        <div class="card-selector mb-0">
                            <input type="radio" name="excard" id="c4" value="4" /><label for="c4">12 месяцев <span></span></label>
                        </div>
                        <br><br>
{{--                        <div class="" id="show-paypal-info">Вы будете перенаправлены на страницу платёжной системы.</div>--}}
                    </div>
                </div>
                <div class="fieldset">
                    <div class="form">
                        <h3 class="mb-0 fw-bolder">Выберите платёжную систему</h3>
                        <div class="card-selector">
                            <input type="radio" name="excard" id="c1" value="1" /><label for="c1">Payeer <span></span></label>
                        </div>
                        <div class="card-selector mb-0">
                            <input type="radio" name="excard" id="c2" value="2" /><label for="c2">Оплата по счёту <span></span></label>
                        </div>
                        <br><br>
                        <div class="" id="show-paypal-info">Вы будете перенаправлены на страницу платёжной системы.</div>
                    </div>
                </div>
            </form>
        </div>




    </div>
    <!-- PAGE END -->
    <div class="bottom-fixed-button">
        <a href="#" data-popup="success" class="button button--full button--main open-popup">Перейти к оплате</a>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script type="text/javascript">
        const rauPrice = {{ \App\Models\Setting::where('param', 'rau_price')->first()->value }};

        let rubInput = $('#rub_input'),
            rauInput = $('#rau_input');

        function editRub() {
            rauInput.val((rubInput.val() / rauPrice).toFixed(6));
            console.log((rubInput.val() / rauPrice).toFixed(6));
        }

        function editRau() {
            rubInput.val(Math.floor(rauPrice * rauInput.val()));
            console.log(rauPrice * rauInput.val());
        }
    </script>

    {!! $bottomMenu = false !!}
@endsection
