@extends('mobile.templates.main')

@section('content')
    <div class="page page--splash" data-page="splash">
        <div class="splash">
            <div class="splash__content">
                <div class="splash__logo">MIKE<strong>GROUP</strong></div>
                <div class="splash__image"><img src="{{ asset('template-assets/cryptex/images/splash.png') }}" alt="" title=""/></div>
                <br><br>
                <div class="splash__text">Mike Group</div>
                @if(!\Illuminate\Support\Facades\Auth::check())
                    <div class="splash__buttons">
                        <a href="{{ route('register') }}" class="button button--full button--main">Регистрация</a>
                    </div>
                    <br>
                    <div class="splash__social-login">
                        <p class="mt-2"><a href="{{ route('login') }}">Уже зарегистрированы? Войдите здесь</a></p>
                        <div class="splash__social-icons">
                            <a href="#" class="icon icon--social"><img src="{{ asset('template-assets/cryptex/images/icons/facebook.svg') }}" alt="" title=""/></a>
                            <a href="#" class="icon icon--social"><img src="{{ asset('template-assets/cryptex/images/icons/twitter.svg') }}" alt="" title=""/></a>
                            <a href="#" class="icon icon--social"><img src="{{ asset('template-assets/cryptex/images/icons/instagram.svg') }}" alt="" title=""/></a>
                        </div>
                    </div>
                @else
                    <div class="splash__buttons">
                        <a href="{{ route('m-dashboard') }}" class="button button--full button--main">В кабинет</a>
                    </div>
                @endif
            </div>
        </div>
    </div>

    {!! $bottomMenu = false; !!}
@endsection
