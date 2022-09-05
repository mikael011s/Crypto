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
                <h2 class="page__title">Мой профиль</h2>
                <div class="fieldset">
                    <div class="form">
                        <h3 class="mb-0 fw-bolder">Ваш пригласительный код</h3>
                        <div class="form__row d-flex align-items-center justify-space">
                            <input type="text" value="{{ \Illuminate\Support\Facades\Auth::user()->referral_code }}" class="form__input" id="invite_code" placeholder="" />
                        </div>
                        <button class="button small-button button--full button--main mb-10 mt-10"
                                onclick="copyText($('#invite_code'))">Скопировать</button>
                        <p class="mb-0 pb-0 mt-25">
                            Если Ваш друг введёт пригласительный код, то получит 0. 05 приветственных RAu COIN
                        </p>
                    </div>
                </div>
                <div class="fieldset">
                    <div class="form">
                        <h3 class="mb-0 fw-bolder">Ссылка для приглашения</h3>
                        <div class="form__row d-flex align-items-center justify-space">
                            <input type="text" value="{{ config('app.url') }}/mobile/register/{{ \Illuminate\Support\Facades\Auth::id() }}" id="referral_link" class="form__input" placeholder="" />
                        </div>
                        <button class="button small-button button--full button--main mb-10 mt-10"
                            onclick="copyText($('#referral_link'))">Скопировать</button>
                        <p class="mb-0 pb-0 mt-25">
                            Скопируйте ссылку и отправь своим друзьям и близким!
                        </p>
                    </div>
                </div>
                <div class="fieldset">
                    <form method="post" id="edit-profile-form" action="{{ route('my-profile.update', \Illuminate\Support\Facades\Auth::id()) }}">
                        @csrf
                        {{ method_field('PUT') }}
                        <div class="form">
                            <h3 class="mb-0 fw-bolder pb-0" style="margin-top: 10px;">Email</h3>
                            <div class="form__row d-flex align-items-center justify-space">
                                <input type="text" name="email" value="{{ \Illuminate\Support\Facades\Auth::user()->email }}" class="form__input" placeholder="" id="rub_input" />
                            </div>
                            <h3 class="mb-0 fw-bolder pb-0" style="margin-top: 30px;">Имя</h3>
                            <div class="form__row d-flex align-items-center justify-space">
                                <input type="text" name="name" value="{{ \Illuminate\Support\Facades\Auth::user()->name }}" class="form__input" placeholder="" id="rub_input" />
                            </div>
                            <button class="button small-button button--full button--main mb-0 mt-10" type="submit">Сохранить</button>
                        </div>
                    </form>
                </div>
                @if (\Session::has('success'))
                    <div class="fieldset" style="background: #105f14;">
                        <div class="form">
                            <h3 class="mb-0 fw-bolder pb-0">{!! \Session::get('success') !!}</h3>
                        </div>
                    </div>
                @endif
                <h2 class="page__title">Изменить пароль</h2>
                <div class="fieldset">
                    <form method="post" id="edit-profile-form" action="{{ route('my-profile.update', \Illuminate\Support\Facades\Auth::id()) }}">
                        @csrf
                        {{ method_field('PUT') }}
                        <div class="form">
                            <h3 class="mb-0 fw-bolder pb-0" style="margin-top: 10px;">Старый пароль</h3>
                            <div class="form__row d-flex align-items-center justify-space">
                                <input type="text" name="email" value="" class="form__input" placeholder="" id="rub_input" />
                            </div>
                            <h3 class="mb-0 fw-bolder pb-0" style="margin-top: 30px;">Новый пароль</h3>
                            <div class="form__row d-flex align-items-center justify-space">
                                <input type="text" name="name" value="" class="form__input" placeholder="" id="rub_input" />
                            </div>
                            <h3 class="mb-0 fw-bolder pb-0" style="margin-top: 30px;">Повторите новый пароль</h3>
                            <div class="form__row d-flex align-items-center justify-space">
                                <input type="text" name="name" value="" class="form__input" placeholder="" id="rub_input" />
                            </div>
                            <button class="button small-button button--full button--main mb-0 mt-10" type="submit">Сохранить</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- PAGE END -->
{{--            <div class="bottom-fixed-button text-center">--}}
{{--                <button class="button button--full button--main" type="submit" onclick="$('#edit-profile-form').submit();">Обновить</button>--}}
{{--            </div>--}}
    </div>


    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <script>
        function copyText (object) {
            object.select();
            document.execCommand('copy');
            alert('Скопировано в буфер обмена!');
        }
    </script>

    {!! $bottomMenu = true !!}
@endsection
