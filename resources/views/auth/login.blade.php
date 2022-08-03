@extends('mobile.templates.main')

@section('content')
    <div class="page page--login" data-page="login">

        <!-- HEADER -->
        <header class="header header--fixed">
            <div class="header__inner">
                <div class="header__icon"><a href="{{ route('m-home') }}"><img src="{{ asset('template-assets/cryptex/images/icons/arrow-back.svg') }}" alt="" title=""/></a></div>
            </div>
        </header>

        <div class="login">
            <div class="login__content">
                <h2 class="login__title">Авторизация</h2>
                <div class="login-form">
                    <form id="LoginForm" method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="login-form__row">
                            <label class="login-form__label">Email</label>
                            <input type="text" name="email" id="email" class="login-form__input required @error('email') is-invalid @enderror"
                                   value="{{ old('email') }}" required autocomplete="email" autofocus />

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="login-form__row">
                            <label class="login-form__label">Пароль</label>
                            <input type="password" value="" class="login-form__input required @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" id="password" />

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>

{{--                        <div class="login-form__row">--}}
{{--                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>--}}

{{--                            <label class="form-check-label" for="remember">--}}
{{--                                {{ __('Remember Me') }}--}}
{{--                            </label>--}}
{{--                        </div>--}}

                        <div class="login-form__forgot-pass"><a href="{{ route('password.update') }}">Забыли пароль?</a></div>
                        <div class="login-form__row">
                            <input type="submit" name="submit" class="login-form__submit button button--main button--full" id="submit" value="Авторизация" />
                        </div>
                    </form>

                    <div class="login-form__bottom">
                        <p>Нет аккаунта? <br /><a href="{{ route('register') }}">СОЗДАТЬ АККАУНТ</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
