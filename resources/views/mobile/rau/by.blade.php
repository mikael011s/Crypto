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
            <form id="payment_form" method="post">
                @csrf
                <div class="fieldset">
                    <div class="form">
                        <h3 class="mb-0 fw-bolder">Покупаю на</h3>
                        <div class="form__row d-flex align-items-center justify-space">
                            <input type="text" name="rau-col" value="" class="form__input form__input--23" placeholder="" oninput="editRub()" id="rub_input" />
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
                            Курс RAu COIN на {{ date('d.m.Y') }} - {{ number_format(\App\Models\Setting::where('param', 'rau_price')->first()->value, 2, ',', ' ') }} ₽
                        </h4>
                    </div>
                </div>
                <div class="fieldset">
                    <div class="round-block">
                        <div class="mb-0 fw-bolder text" style="color:#ffb500;">1 Раунд</div>
                        <a data-popup="success" class="open-popup" href="javascript:void(0);">Подробнее</a>
                    </div>
                </div>
{{--                <div class="fieldset">--}}
{{--                    <div class="form">--}}
{{--                        <h3 class="mb-0 fw-bolder">Выберите тариф</h3>--}}
{{--                        <div class="card-selector">--}}
{{--                            <input type="radio" name="excard" id="c1" value="1" /><label for="c1">30 дней<span></span></label>--}}
{{--                        </div>--}}
{{--                        <div class="card-selector">--}}
{{--                            <input type="radio" name="excard" id="c2" value="2" /><label for="c2">90 дней<span></span></label>--}}
{{--                        </div>--}}
{{--                        <div class="card-selector">--}}
{{--                            <input type="radio" name="excard" id="c3" value="3" /><label for="c3">180 дней<span></span></label>--}}
{{--                        </div>--}}
{{--                        <div class="card-selector mb-0">--}}
{{--                            <input type="radio" name="excard" id="c4" value="4" /><label for="c4">12 месяцев <span></span></label>--}}
{{--                        </div>--}}
{{--                        <br><br>--}}
{{--                        <div class="" id="show-paypal-info">Вы будете перенаправлены на страницу платёжной системы.</div>--}}
{{--                    </div>--}}
{{--                </div>--}}
                <div class="fieldset">
                    <div class="form">
                        <h3 class="mb-0 fw-bolder">Выберите платёжную систему</h3>
{{--                        <div class="card-selector">--}}
{{--                            <input type="radio" name="payment_system" id="c1" value="payeer" /><label for="c1">Payeer <span></span></label>--}}
{{--                        </div>--}}
                        <div class="card-selector">
                            <input type="radio" name="payment_system" id="c1" value="bank" /><label for="c1">Visa, Mastercard, Qiwi<span></span></label>
                        </div>
                        <div class="card-selector">
                            <input type="radio" name="payment_system" id="c2" value="freekassa" /><label for="c2">Оплата криптовалютой <span></span></label>
                        </div>
                        <div class="card-selector mb-0">
                            <input type="radio" name="payment_system" id="c3" value="referral_balance" /><label for="c3">С реферального счёта <span></span></label>
                        </div>
                        <br><br>
                        <div class="" id="show-paypal-info">Вы будете перенаправлены на страницу платёжной системы.</div>
                    </div>
                </div>
                <div class="fieldset freekassa-payments-block hide" id="freekassa_select">
                    <div class="form">
                        <h3 class="mb-0 fw-bolder">Выберите способ оплаты</h3>
{{--                        <div class="card-selector">--}}
{{--                            <input type="radio" name="freekassa_payment-system" id="fc0" value="13" /><label for="fc0">Qiwi <span></span></label>--}}
{{--                        </div>--}}
{{--                        <div class="card-selector">--}}
{{--                            <input type="radio" name="freekassa_payment-system" id="fc2" value="6" checked /><label for="fc2">ЮКасса <span></span></label>--}}
{{--                        </div>--}}
{{--                        <div class="card-selector">--}}
{{--                            <input type="radio" name="freekassa_payment-system" id="fc3" value="10" /><label for="fc3">Онлайн банки <span></span></label>--}}
{{--                        </div>--}}
{{--                        <div class="card-selector">--}}
{{--                            <input type="radio" name="freekassa_payment-system" id="fc4" value="4" /><label for="fc4">Visa / Mastercard / Мир <span></span></label>--}}
{{--                        </div>--}}
                        <div class="card-selector">
                            <input type="radio" name="freekassa_payment-system" id="fc7" value="24" /><label for="fc7">BTC <span></span></label>
                        </div>
                        <div class="card-selector">
                            <input type="radio" name="freekassa_payment-system" id="fc8" value="26" /><label for="fc8">ETH <span></span></label>
                        </div>
                        <div class="card-selector">
                            <input type="radio" name="freekassa_payment-system" id="fc9" value="25" /><label for="fc9">LTC <span></span></label>
                        </div>
                        <div class="card-selector">
                            <input type="radio" name="freekassa_payment-system" id="fc10" value="14" /><label for="fc10">USDT <span></span></label>
                        </div>
                        <div class="card-selector mb-0">
                            <input type="radio" name="freekassa_payment-system" id="fc11" value="17" /><label for="fc11">BNB <span></span></label>
                        </div>
                    </div>
                </div>
            </form>
        </div>




    </div>
    <!-- PAGE END -->
    <div class="bottom-fixed-button text-center">
        <a href="#" class="button button--full button--main" id="got_to_pay">Перейти к оплате</a>
        <p class="" style="font-size: 11px;margin-bottom: -25px;line-height: 11px;margin-top: 5px;">Нажимая кнопку Вы подтверждаете, что ознакомились с <br> <a href="">политикой и условиями сервиса</a>.</p>
    </div>

    <div id="popup-success" >
        <div class="popup popup--centered popup--shadow popup--success" style="height: 100%;width: 100%;position: fixed;top:0;left:0;">
            <div class="popup__close"><a href="#" class="close-popup" data-popup="success"><img src="{{ asset('template-assets/cryptex/images/icons/close.svg') }}" alt="" title=""></a></div>
            <div class="popup__icon"><img src="{{ asset('template-assets/cryptex/images/icons/checked.svg') }}" alt="" title=""></div>
            <h2 class="popup__title">Раунд 1</h2>
            <p class="popup__text">
                Компания MIKE GROUP 15.08.2022г. объявляет старт продаж Rau COIN, стартовый курс 70 рублей — 1 RAU COIN
                <br>
                Период действия «Раунда 1» — с 15.08.2022г. По 31.12.2022 года. <br>
                Общая эмиссия составляет 100 000 000 Rau COIN <br>
                Объявляется открытая продажа Rau COIN <br>
                Минимальное количество продаж «Раунда 1» должно составить не менее 30% от всей эмиссии RAu COIN <br>
                Физическое или юридическое лицо купившее Rau COIN в первом раунде, имеет возможность в течении действия «Раунда 1» реализовать до 10% от всей суммы Rau COIN находящейся на балансе владельца.
                <br><br>
                Колебания курса RAu COIN в период действия «Раунда 1» планируются от +0,2% до +0,5% в сутки, и зависит от спроса и инвестиционных портфелей компании MIKE GROUP.
                <br>
                Общее планируемое изменение курса в период «Раунда 1» от + 27% до + 70%, средний показатель доходности 48,5%
                <br>
                После окончания «Раунда 1» прекращается свободная продажа RAu COIN.
                <br><br>
                <a href="{{ route('m-rounds') }}" class="button button--full button--main" id="got_to_pay">Подробнее о Раундах RAu COIN</a>
            </p>
        </div>
    </div>

    <style>
        #popup-notifications {
            display: none !important;
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script type="text/javascript">
        $('[name="payment_system"]').on('change', function () {
            let paymentSystem = $('[name="payment_system"]:checked').val();
            if (paymentSystem === 'freekassa') {
                console.log(1);
                setTimeout(function () {
                    document.getElementById('freekassa_select').scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }, 100);
            }
        });

        $('[name="freekassa_payment-system"]').on('change', function () {
            let paymentSystem = $(this).val();
        });

        // Отправка формы
        $('#got_to_pay').on('click', function () {
            var paymentSystem = $('input[name="freekassa_payment-system"]:checked').val();

            console.log(paymentSystem);
            // console.log($('[name="payment_system"]:checked').val());

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('input[name="_token"]').val()
                }
            });

            console.log("Pay sys: " + $('[name="payment_system"]:checked').val());

            $.ajax({
                url: "{{ route('payment.init') }}",
                type: "POST",
                data: {
                    "_token": $('input[name="_token"]').val(),
                    "col": $('[name="rau-col"]').val(),
                    "payment-system": $('[name="payment_system"]:checked').val(),
                    "freekassa_payment-system": paymentSystem,
                },
                success: function (response) {
                    console.log(response);

                    if (response['status'] === 400) {
                        alert(response['body']['error']);
                    } else {
                        window.location.href = response['body']['location'];
                    }
                },
                error: function (response) {
                    alert('Пожалуйста, заполните все поля корректно!');
                    console.log(response.message);
                }
            });
        });

        // Изменение способа оплаты
        $('[name="payment_system"]').on('change', function () {
            if (this.value === 'freekassa') {
                $('.freekassa-payments-block').removeClass('hide');
            } else {
                $('.freekassa-payments-block').addClass('hide');
            }
        })

        // Калькулятор суммы
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
