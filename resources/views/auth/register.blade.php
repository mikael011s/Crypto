@extends('mobile.templates.main')

@section('content')
    <!-- HEADER -->
    <header class="header header--fixed">
        <div class="header__inner">
            <div class="header__icon"><a href="{{ route('m-home') }}"><img src="{{ asset('template-assets/cryptex/images/icons/arrow-back.svg') }}" alt="" title=""/></a></div>
        </div>
    </header>

    <div class="login">
        <div class="login__content">
            <h2 class="login__title">Создание аккаунта</h2>
            <div class="login-form">
                <form id="LoginForm" method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="login-form__row">
                        <label class="login-form__label">Имя</label>
                        <input type="text" class="login-form__input required @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus />

                        @error('name')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="login-form__row">
                        <label class="login-form__label">Email</label>
                        <input type="email" class="login-form__input required email @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" />

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="login-form__row">
                        <label class="login-form__label">Промокод</label>
                        <input type="text" class="login-form__input" name="referral_code" value="" autocomplete="email" />

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="login-form__row">
                        <label class="login-form__label">Пароль</label>
                        <input type="password" value="" class="login-form__input required @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" />

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="login-form__row">
                        <label class="login-form__label">Повторите пароль</label>
                        <input type="password" value="" class="login-form__input required" name="password_confirmation" required autocomplete="new-password" />
                    </div>
                    <div class="login-form__row">
                        <input type="submit" name="submit" class="login-form__submit button button--main button--full" id="submit" value="Зарегистрироваться" />
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- PAGE END -->
@endsection
