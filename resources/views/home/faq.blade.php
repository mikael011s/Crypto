@extends('layouts.land')

@section('content')
    <!-- Banner Section Starts Here -->
    <div class="inner-banner section-bg overflow-hidden">
        <div class="container">
            <div class="inner__banner__content text-center">
                <h2 class="title">Часто задаваемые вопросы</h2>
                <ul class="breadcums d-flex flex-wrap justify-content-center">
                </ul>
            </div>
        </div>
        <div class="shapes">
            <img src="/template-assets/digihyip/images/banner/inner-bg.png" alt="banner" class="shape shape1">
            <img src="/template-assets/digihyip/images/banner/inner-thumb.png" alt="banner" class="shape shape2 d-none d-lg-block">
        </div>
    </div>
    <!-- Banner Section Ends Here -->


    <!-- Faq Section Starts Here -->
    <section class="faq-section padding-top padding-bottom">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10">
                    <div class="section__header text-center max-p">
                        <h2 class="section__header-title">Самые обсуждаемые темы</h2>
                        <p>Выберите необходимую тему и ознакомьтесь с ответами на часто задаваемые вопросы.</p>
                    </div>
                </div>
            </div>
            <ul class="nav-tabs nav faq__tab__menu transection__tab__menu border-0 justify-content-center">
                <li><a data-bs-toggle="tab" href="#all" class="cmn--btn2 active">Общие вопросы</a></li>
                <li><a data-bs-toggle="tab" href="#investment" class="cmn--btn2">Финансовые вопросы</a></li>
                <li><a data-bs-toggle="tab" href="#deposit" class="cmn--btn2">Партнерская программа</a></li>
                <li><a data-bs-toggle="tab" href="#withdraw" class="cmn--btn2">Прочее</a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane show fade active" id="all">
                    <div class="row justify-content-center">
                        <div class="col-xl-8 col-lg-10">
                            <div class="faq__wrapper">
                                <div class="faq__item">
                                    <div class="faq__item-title">
                                        <h4 class="title">Как зарегистрироваться и открыть личный счет?</h4>
                                    </div>
                                    <div class="faq__item-content">
                                        <p>Вам необходимо зайти на сайт с мобильного устройста пройти по ссылке "Регистрация", заполнить все предложенные Вам поля и подтвердить свое действие. После прохождения регистрации Вам автоматически откроется внутренний счет</p>
                                    </div>
                                </div>
                                <div class="faq__item">
                                    <div class="faq__item-title">
                                        <h4 class="title">Регистрация платная?</h4>
                                    </div>
                                    <div class="faq__item-content">
                                        <p>Нет, регистрация в нашем сервисе так же как и открыие внутреннего счета абсолютно бесплатняя!</p>
                                    </div>
                                </div>
                                <div class="faq__item open active">
                                    <div class="faq__item-title">
                                        <h4 class="title">Могу ли я быть уверенным в безопасности моих данных?</h4>
                                    </div>
                                    <div class="faq__item-content">
                                        <p>Да, компания гарантирует нашим инвесторам защиту и безопасность персональных данных. Мы не передаем личные данные клиентов третьим лицам! Наш сайт защищен от различного вида атак, и все передаваемые данные проходят шифрование.</p>
                                    </div>
                                </div>
                                <div class="faq__item">
                                    <div class="faq__item-title">
                                        <h4 class="title">Кто может стать участником проекта и покупателем RAu COIN</h4>
                                    </div>
                                    <div class="faq__item-content">
                                        <p>Стать участником системы может любой желающий, достигший совершеннолетнего возраста<p>
                                     </div>
                                </div>
                                <div class="faq__item">
                                    <div class="faq__item-title">
                                        <h4 class="title">Сколько аккаунтов я могу создать?</h4>
                                    </div>
                                    <div class="faq__item-content">
                                        <p>Вы можете создать только один аккаунт в системе. При нарушении данного условия, администрацией сайта будут приняты меры.<p>
                                     </div>
                                </div>
                                <div class="faq__item">
                                    <div class="faq__item-title">
                                        <h4 class="title">Я не могу войти в свой личный кабинет? Возможно пароль был забыт или утерян!</h4>
                                    </div>
                                    <div class="faq__item-content">
                                        <p>В подобном случае проверьте, правильно ли вы ввели данные. Если данные введены верно, почистите кэш и попробуйте еще раз. Если проблема не решилась, используйте форму восстановления пароля или свяжитесь со службой поддержки<p>             
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane show fade" id="investment">
                    <div class="row justify-content-center">
                        <div class="col-xl-8 col-lg-10">
                            <div class="faq__wrapper">
                                <div class="faq__item">
                                    <div class="faq__item-title">
                                        <h4 class="title">Как можно приобрести RAu COIN? Какими платежными системами можно оплатить RAu COIN?</h4>
                                    </div>
                                    <div class="faq__item-content">
                                        <p>Для приобретения RAu COIN Вам необходимо авторизоваться в личном кабинете, там во вкладке купить ввведите сумму в рублях на которую Вы планируете приобрести RAu COIN, и осуществите покупку. Для оплаты RAu COIN можно выбрать несколько методов платежей: VISA/MasterCard, эл. кошелек qiwi, Payeer, а так же можно оплатить основными криптовалютами </p>
                                    </div>
                                </div>
                                <div class="faq__item">
                                    <div class="faq__item-title">
                                        <h4 class="title">Как мне проверять свой баланс внутреннего счета?</h4>
                                    </div>
                                    <div class="faq__item-content">
                                        <p>Вы можете проверить баланс в любое время, войдя в ваш личный кабинет</p>
                                    </div>
                                </div>
                                <div class="faq__item open active">
                                    <div class="faq__item-title">
                                        <h4 class="title">Какая максимальная и минимальная сумма покупки RAu COIN?</h4>
                                    </div>
                                    <div class="faq__item-content">
                                        <p>Минимальная сумма на которую можно приобрести RAu COIN составляет 3000 рублей, максимальная сумма покумки ограничевается запасами RAu COIN на конкретный день покупки </p>
                                    </div>
                                </div>
                                <div class="faq__item">
                                    <div class="faq__item-title">
                                        <h4 class="title">Когда я могу продать RAu COIN ?</h4>
                                    </div>
                                    <div class="faq__item-content">
                                        <p>Для инвесторов предусмотрены несколько этапов реализации RAu COIN - подробнее можно ознакомиться в разделе о Раундах нашего проекта </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane show fade" id="deposit">
                    <div class="row justify-content-center">
                        <div class="col-xl-8 col-lg-10">
                            <div class="faq__wrapper">
                                <div class="faq__item">
                                    <div class="faq__item-title">
                                        <h4 class="title">Существует ли у Вас партнерская программа?</h4>
                                    </div>
                                    <div class="faq__item-content">
                                        <p>Да. Пользователь может получать стабильный и постоянный дополнительный доход, приглашая в сервис своих друзей или знакомых.</p>
                                    </div>
                                </div>
                                <div class="faq__item">
                                    <div class="faq__item-title">
                                        <h4 class="title">В чем преимущества участия в партнерской программе??</h4>
                                    </div>
                                    <div class="faq__item-content">
                                        <p>Партнерская программа — это отличная возможность для каждого инвестора, желающего получать дополнительную прибыль. </p>
                                    </div>
                                </div>
                                <div class="faq__item open active">
                                    <div class="faq__item-title">
                                        <h4 class="title">Как стать участником партнерской программы?</h4>
                                    </div>
                                    <div class="faq__item-content">
                                        <p> В личном кабинете вы найдете вашу реферальную ссылку. Распространяйте ее всеми доступными для вас способами и приглашайте людей. Новые пользователи будут переходить на наш сайт по вашей ссылке и регистрироваться. После этого они автоматически закрепятся за вами. Со всех покупок RAu COIN, которые они осуществляют, вы будете получать партнерское вознаграждение.</p>
                                    </div>
                                </div>
                                <div class="faq__item">
                                    <div class="faq__item-title">
                                        <h4 class="title">Приглашение других участников в Вашу систему является обязательным условием?</h4>
                                    </div>
                                    <div class="faq__item-content">
                                        <p>Привлечение других клиентов не является обязательным, но является хорошим заработком</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane show fade" id="withdraw">
                    <div class="row justify-content-center">
                        <div class="col-xl-8 col-lg-10">
                            <div class="faq__wrapper">
                                <div class="faq__item">
                                    <div class="faq__item-title">
                                        <h4 class="title">У меня остались вопросы, куда мне обратиться??</h4>
                                    </div>
                                    <div class="faq__item-content">
                                        <p> Если Вы не нашли ответа на вопрос в списке часто задаваемых, напишите в службу поддержки mail@redaurumcoin.com</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Faq Section Ends Here -->
@endsection
