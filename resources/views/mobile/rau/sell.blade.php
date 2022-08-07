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
            <h2 class="page__title">Продать RAu</h2>
            <form id="Form" method="post" action="checkout.html">
                <div class="fieldset">
                    <div class="form">
                        <h3 class="mb-0 fw-bolder">Количество для продажи</h3>
                        <div class="form__row d-flex align-items-center justify-space">
                            <input type="text" name="Text" value="" class="form__input form__input--23" placeholder="" oninput="editRau()" id="rau_input" />
                            <div class="form__coin-icon"><span>RAu</span></div>
                        </div>
                    </div>
                </div>
                <div class="fieldset">
                    <div class="form">
                        <h3 class="mb-0 fw-bolder">Цена с учётом курса</h3>
                        <div class="form__row d-flex align-items-center justify-space">
                            <input type="text" name="Text" value="" class="form__input form__input--23" placeholder="" oninput="editRub()" id="rub_input" readonly />
                            <div class="form__coin-icon"><span>Руб.</span></div>
                        </div>
                    </div>
                </div>
            </form>
        </div>




    </div>
    <!-- PAGE END -->
    <div class="bottom-fixed-button">
        <button href="#" data-popup="success" class="button button--full button--main open-popup" id="pay-btn">Перейти к оплате</button>
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

            let numbersAfterDot = ( (rauInput.val().toString().includes('.')) ? (rauInput.val().toString().split('.').pop().length) : (0) );
            if (numbersAfterDot > 6) {
                console.log('Максимум 6 символов после запятой.');
                rauInput.val(rauInput.val().substr(0, rauInput.val().length -1));
            }
        }
    </script>

    {!! $bottomMenu = false !!}
@endsection
