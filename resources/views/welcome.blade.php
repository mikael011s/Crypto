@extends('layouts.land')

@section('content')
    <!-- Search Form Starts Here -->
    <div class="search__form__wrapper">
        <div class="form__inner">
            <form class="search__form">
                <div class="form-group">
                    <input type="text" class="form-control form--control" placeholder="Search Here...">
                    <button type="submit" class="cmn--btn btn">Search</button>
                </div>
            </form>
            <button class="btn-close btn-close-white"></button>
        </div>
    </div>
    <!-- Search Form Ends Here -->


    <!-- Banner Section Starts Here -->
    <section class="banner-section overflow-hidden">
        <div class="container">
            <div class="banner__wrapper d-flex align-items-center justify-content-between">
                <div class="banner__content">
                    <h1 class="title">RED AURUM COIN (RAu)</h1>
                    <p>Токен нового поколения - первая в мире восходящая криптовалюта</p>
                    <a href="mobile" class="cmn--btn">Начни зарабатывать</a>
                </div>
                <div class="banner__thumb d-none d-lg-block">
                    <img src="/template-assets/digihyip/images/banner/thumb.png" alt="banner">
                    <div class="shapes">
                        <img src="/template-assets/digihyip/images/banner/big-coin.png" alt="banner" class="shape shape1">
                        <img src="/template-assets/digihyip/images/banner/light.png" alt="banner" class="shape shape2">
                        <img src="/template-assets/digihyip/images/banner/sm-coin.png" alt="banner" class="shape shape3">
                        <img src="/template-assets/digihyip/images/banner/sm-coin.png" alt="banner" class="shape shape4">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Section Ends Here -->


    <!-- Why Choose Us Section Starts Here -->
    <section class="choose-us padding-top padding-bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 d-none d-lg-block">
                    <div class="section__thumb rtl">
                        <img src="/template-assets/digihyip/images/choose-us/thumb.png" alt="choose-us">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="choose__us__content">
                        <div class="section__header mb-0">
                            <h2 class="section__header-title">Инвестируйте в уникальный COIN (RAu) </h2>
                            <p>RAu COIN – это актив, который растет ежегодно в среднем от 80% до 150%. И наш проект гарантирует этот рост!</p>
                        </div>
                        <p>55 из 100 банков мира, крупнейших по размерам активов под управлением, уже инвестировали в компании, связанные с криптовалютой и/или блокчейном.
Ряд государств (в том числе передовых) стоит на пути принятия криптовалют, а это значит, что их наравне с другими видами активов начинают регулировать и делать частью обычной жизни граждан </p>
                            </p>Крупнейшие мировые компании инвестируют в криптовалюты:</p>
                        <ul class="info__list d-flex flex-wrap mt-4">
                            <li> Grayscale</li>
                            <li> CoinShares</li>
                            <li> MicroStrategy</li>
                            <li> Galaxy Digital Holdings</li>
                            <li> ETC Group Bitcoin ETP</li>
                            <li> Tesla</li>
                        </ul>
                        <div class="button__wrapper">
                            <a href="mobile" class="cmn--btn">Хочу инвестировать</a>
                            <a href="home/about" class="cmn--btn2">Узнать больше о RAu COIN</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Why Choose Us Section Ends Here -->


    <!-- Plan Section Starts Here -->
    <section class="plan-section padding-bottom">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-10">
                    <div class="section__header text-center">
                        <h2 class="section__header-title">Доходность портфеля RAuCOIN</h2>
                        <p>Компания MIKE GROUP реализовала возможность умножать инвестиции от продажи RAu COIN в крупных международных компаниях и ярких доходных стартапах, и объявляет о старте "Раундов" по привлечению инвесторов </p>
                    </div>
                </div>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6">
                    <div class="plan__item">
                        <div class="plan__item-header">
                            <h2 class="plan-parcent">Раунд 1</h2>
                            <p class="plan-parcent-info">Период - до 31.12.2022</p>
                        </div>
                        <div class="plan__item-body">
                            <ul class="plan__info">
                                <li>
                                    <span class="title">Продажи :</span>
                                    <span class="value">Открытые</span>
                                </li>
                                <li>
                                    <span class="title">Реализация эмиссии :</span>
                                    <span class="value">до 30%</span>
                                </li>
                            </ul>
                        </div>
                        <div class="plan__item-footer">
                            <p class="footer-info">Можно продать до 10% портфеля</p>
                            <p class="footer-info">Доходность раунда до 50% </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6">
                    <div class="plan__item">
                        <div class="plan__item-header">
                            <h2 class="plan-parcent">Раунд 2</h2>
                            <p class="plan-parcent-info">Период до 30.06.2023</p>
                        </div>
                        <div class="plan__item-body">
                            <ul class="plan__info">
                                <li>
                                    <span class="title">Продажи :</span>
                                    <span class="value">Закрытые</span>
                                </li>
                                <li>
                                    <span class="title">Реализация эмиссии :</span>
                                    <span class="value">до 50%</span>
                                </li>
                            </ul>
                        </div>
                        <div class="plan__item-footer">
                            <p class="footer-info"> Можно продать до 30% портфеля</p>
                            <p class="footer-info"> Доходность раунда до 80%</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6">
                    <div class="plan__item">
                        <div class="plan__item-header">
                            <h2 class="plan-parcent"> Раунд 3</h2>
                            <p class="plan-parcent-info">Период до 31.12.2023</p>
                        </div>
                        <div class="plan__item-body">
                            <ul class="plan__info">
                                <li>
                                    <span class="title">Продажи :</span>
                                    <span class="value">Закрытые</span>
                                </li>
                                <li>
                                    <span class="title">Реализация эмиссии :</span>
                                    <span class="value">100%</span>
                                </li>
                            </ul>
                        </div>
                        <div class="plan__item-footer">
                            <p class="footer-info"> Можно продать до 50% портфеля</p>
                            <p class="footer-info"> Доходность раунда до 80%</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6">
                    <div class="plan__item">
                        <div class="plan__item-header">
                            <h2 class="plan-parcent">Биржа</h2>
                            <p class="plan-parcent-info">С 01.01.2024г.</p>
                        </div>
                        <div class="plan__item-body">
                            <ul class="plan__info">
                                <li>
                                    <span class="title">Продажи :</span>
                                    <span class="value">Открытые</span>
                                </li>
                                <li>
                                    <span class="title">Реализация эмиссии :</span>
                                    <span class="value">Прекращена</span>
                                </li>
                            </ul>
                        </div>
                        <div class="plan__item-footer">
                            <p class="footer-info"> Свободная продажа 100% портфеля</p>
                            <p class="footer-info"> Доходность от 100% и выше</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Plan Section Ends Here -->


    <!-- Profit Calculation Section Starts Here -->
    <section class="profit-calculation padding-bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 d-none d-lg-block">
                    <div class="section__thumb profit__calculation__thumb rtl me-5">
                        <img src="/template-assets/digihyip/images/calculate-profit/thumb.png" alt="profit-calculation">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="profit__calculation__content">
                        <div class="section__header">
                            <h2 class="section__header-title">Расчитай свой доход</h2>
                            <p>Укажи желаемую сумму и наглядно посмотри сколько можно заработать обладая RAu COIN</p>
                        </div>
                        <form class="profit__calculation__form">
                            <div class="row g-4">
                                <div class="col-md-6 col-lg-12 col-xl-6 col-sm-6">
                                    <div class="form-group">
                                        <label class="form-label">Выбор раунда RAu COIN</label>
                                        <select class="nice-select w-100 h-50">
                                            <option>Раунд 1</option>
                                            <option>Раунд 2</option>
                                            <option>Раунд 3</option>
                                            <option>Биржа</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-12 col-xl-6 col-sm-6">
                                    <div class="form-group">
                                        <label class="form-label">Сумма покупки</label>
                                        <select class="nice-select w-100 h-50">
                                            <option>100 000 ₽</option>
                                            <option>50 000 ₽</option>
                                            <option>10 000 ₽</option>
                                            <option>3 000 ₽</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-12 col-xl-6 col-sm-6">
                                    <div class="form-group">
                                        <label class="form-label">Доход</label>
                                        <input type="text" class="form-control form--control" placeholder="50 000 ₽">
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-12 col-xl-6 col-sm-6">
                                    <div class="form-group">
                                        <label class="form-label">Капитализация</label>
                                        <input type="text" class="form-control form--control" placeholder="150 000 ₽">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Profit Calculation Section Ends Here -->


    <!-- Feature Section Starts Here -->
    <section class="feature-section padding-bottom overflow-hidden">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-10">
                    <div class="section__header text-center">
                        <h2 class="section__header-title">В чем приемущества нашей площадки?</h2>
                        <p>Мы самый уникальный и гарантированно прибыльный проект в области цифровых активов! RAu COIN выпущен как универсальная структура, создающая возможность координации и распределения капитала для достижения общей цели - получения стабильного дохода!  </p>
                    </div>
                </div>
            </div>
            <div class="feature__slider">
                <div class="single-slide">
                    <div class="feature__item">
                        <div class="feature__item-icon">
                            <img src="/template-assets/digihyip/images/feature/1.png" alt="feature">
                        </div>
                        <div class="feature__item-content">
                            <h4 class="title">Высокий доход</h4>
                            <p>Доступ к эксклюзивным инвестиционным проектам обеспечивает высокий и стабильный доход.</p>
                        </div>
                    </div>
                </div>
                <div class="single-slide">
                    <div class="feature__item">
                        <div class="feature__item-icon">
                            <img src="/template-assets/digihyip/images/feature/2.png" alt="feature">
                        </div>
                        <div class="feature__item-content">
                            <h4 class="title">24/7 Поддержка</h4>
                            <p>Наши специалисты всегда на связи, готовы помочь и ответить на любые возникающие вопросы.</p>
                        </div>
                    </div>
                </div>
                <div class="single-slide">
                    <div class="feature__item">
                        <div class="feature__item-icon">
                            <img src="/template-assets/digihyip/images/feature/3.png" alt="feature">
                        </div>
                        <div class="feature__item-content">
                            <h4 class="title">Высокая безопасность</h4>
                            <p>Многоуровневый алгоритм безопасности и кластерная система делает проект неуязвимым.</p>
                        </div>
                    </div>
                </div>
                <div class="single-slide">
                    <div class="feature__item">
                        <div class="feature__item-icon">
                            <img src="/template-assets/digihyip/images/feature/4.png" alt="feature">
                        </div>
                        <div class="feature__item-content">
                            <h4 class="title">Бессрочно</h4>
                            <p>Алгоритм RAu COIN обеспечивает непрерывный доход вне зависимости от сезона или санкций .</p>
                        </div>
                    </div>
                </div>
                <div class="single-slide">
                    <div class="feature__item">
                        <div class="feature__item-icon">
                            <img src="/template-assets/digihyip/images/feature/4.png" alt="feature">
                        </div>
                        <div class="feature__item-content">
                            <h4 class="title">Партнерам</h4>
                            <p>Партнерская программа принесёт немалый и постоянный доход, абсолютно на полном пассиве.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Feature Section Ends Here -->


    <!-- Referral Section Starts Here -->
    <section class="referral-section padding-top padding-bottom section-bg" id="for-partners">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 align-self-end d-none d-lg-block">
                    <div class="section__thumb rtl me-5">
                        <img src="/template-assets/digihyip/images/referral/thumb.png" alt="referral">
                        <div class="shapes">
                            <img src="/template-assets/digihyip/images/referral/clock.png" alt="referral" class="shape shape1">
                            <img src="/template-assets/digihyip/images/referral/man.png" alt="referral" class="shape shape2">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="section__header">
                        <h2 class="section__header-title">10% Партнёрам</h2>
                        <p>Расскажи друзьям и близким об уникальном проекте RAu COIN, помоги заработать им, и заработай сам!</p>
                    </div>
                    <a href="mobile" class="cmn--btn">Вперед</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Referral Section Ends Here -->


    <!-- Investor Section Starts Here -->
    <section class="investor-section padding-bottom">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-10">
                    <div class="section__header text-center">
                        <h2 class="section__header-title">Успешные Инвесторы</h2>
                        <p>Желание добиться успеха без упорного труда и вложений, схоже с желанием снять урожай там, где вы не садили семена.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center gy-5">
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="investor__item">
                        <div class="investor__item-thumb">
                            <img src="/template-assets/digihyip/images/investor/investor1.png" alt="investor">
                        </div>
                        <div class="investor__item-content">
                            <h3 class="name">Николай Патрухин</h3>
                            <p class="invest-amount">Инвестировал 2,3 млн RUB</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="investor__item">
                        <div class="investor__item-thumb">
                            <img src="/template-assets/digihyip/images/investor/investor2.png" alt="investor">
                        </div>
                        <div class="investor__item-content">
                            <h3 class="name">Ника Сафронова</h3>
                            <p class="invest-amount">Ивестировала 350 тыс RUB</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="investor__item">
                        <div class="investor__item-thumb">
                            <img src="/template-assets/digihyip/images/investor/investor3.png" alt="investor">
                        </div>
                        <div class="investor__item-content">
                            <h3 class="name">Михаил Глазков</h3>
                            <p class="invest-amount">Инвестировал 950 тыс RUB</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="investor__item">
                        <div class="investor__item-thumb">
                            <img src="/template-assets/digihyip/images/investor/investor4.png" alt="investor">
                        </div>
                        <div class="investor__item-content">
                            <h3 class="name">Ильяз Камилов</h3>
                            <p class="invest-amount">Инвестировал 1,3 млн RUB</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Investor Section Ends Here -->


    <!-- Download Section Starts Here -->
    <section class="download-section padding-bottom section-bg-two overflow-hidden">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="section__header">
                        <h2 class="section__header-title">Установи приложение RAuCOIN</h2>
                        <p>Отслеживай в онлайн режиме статистику роста своих инвестиций, следи за динамикой рынка криптовалют и убедись в надежности RAu COIN.</p>
                    </div>
                    <div class="button__wrapper">
                        <a href="mobile" class="cmn--btn download-btn"><div class="icon"><i class="fab fa-google-play"></i></div> <div class="text"><p>СКАЧАТЬ</p><p class="for">Для Android</p></div></a>
                        <a href="mobile" class="cmn--btn download-btn"><div class="icon"><i class="fab fa-apple"></i></div> <div class="text"><p>СКАЧАТЬ</p><p class="for">Для IOS</p></div></a>
                    </div>
                    <div class="counter__wrapper row gy-4 gy-sm-5 pt-4 pt-sm-5">
                        <div class="col-6 col-sm-6 col-md-4 col-lg-6 col-xl-4">
                            <div class="counter__item">
                                <div class="counter__item-header d-flex align-items-center">
                                    <div class="icon">
                                        <img src="/template-assets/digihyip/images/download/icon1.png" alt="counter">
                                    </div>
                                    <h2 class="title"><span class="odometer" data-odometer-final="99">0</span>Тыс</h2>
                                </div>
                                <p class="info">Куплено RAu COIN</p>
                            </div>
                        </div>
                        <div class="col-6 col-sm-6 col-md-4 col-lg-6 col-xl-4">
                            <div class="counter__item">
                                <div class="counter__item-header d-flex align-items-center">
                                    <div class="icon">
                                        <img src="/template-assets/digihyip/images/download/icon2.png" alt="counter">
                                    </div>
                                    <h2 class="title"><span class="odometer" data-odometer-final="7">0</span>Млн</h2>
                                </div>
                                <p class="info">Инвестировано</p>
                            </div>
                        </div>
                        <div class="col-6 col-sm-6 col-md-4 col-lg-6 col-xl-4">
                            <div class="counter__item">
                                <div class="counter__item-header d-flex align-items-center">
                                    <div class="icon">
                                        <img src="/template-assets/digihyip/images/download/icon3.png" alt="counter">
                                    </div>
                                    <h2 class="title"><span class="odometer" data-odometer-final="0.6">0</span>Млн</h2>
                                </div>
                                <p class="info">Выведено</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 d-none d-lg-block">
                    <div class="section__thumb profit__calculation__thumb ">
                        <img src="/template-assets/digihyip/images/download/thumb.png" alt="download">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Download Section Ends Here -->


    <!-- Faq Section Starts Here -->
    <section class="faq-section padding-top padding-bottom bg_img" style="background: url(/template-assets/digihyip/images/faq/bg.png);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 col-md-10">
                    <div class="section__header text-center max-p">
                        <h2 class="section__header-title">Часто задаваемые вопросы</h2>
                        <p>Найдите ответы на самые актуальные вопросы о нашем уникальном RAu COIN.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-10">
                    <div class="faq__wrapper">
                        <div class="faq__item">
                            <div class="faq__item-title">
                                <h4 class="title">Как открыть личный счет в проекте?</h4>
                            </div>
                            <div class="faq__item-content">
                                <p>Пройдите по ссылке "Регистрация", заполните все предложенные Вам поля и подтвердите свое действие. После чего Вам автоматически откроется счет в нашей системе для приобретения и хранения RAu COIN</p>
                            </div>
                        </div>
                        <div class="faq__item">
                            <div class="faq__item-title">
                                <h4 class="title">Снимается ли комиссия при покупке или продаже RAu?</h4>
                            </div>
                            <div class="faq__item-content">
                                <p>Наш сервис никаких комиссий не взымает, однако при покупке RAu COIN оплата происходит с учетом комиссии предусмотренной банковским шлюзом, и размер её зависит от выбранного метода оплаты, при дальнейшей продаже RAu COIN комиссия полностью отсутствует!</p>
                            </div>
                        </div>
                        <div class="faq__item open active">
                            <div class="faq__item-title">
                                <h4 class="title">Когда мои инвестиции начинают приносить прибыль?</h4>
                            </div>
                            <div class="faq__item-content">
                                <p>Курс RAu COIN растёт ежедневно от 0,2 до 0,8%, поэтому Ваши инвестиции начинают работать буквально с первого дня приобретения RAu COIN </p>
                            </div>
                        </div>
                        <div class="faq__item">
                            <div class="faq__item-title">
                                <h4 class="title">Могу ли я отслеживать динамику и рост прибыли?</h4>
                            </div>
                            <div class="faq__item-content">
                                <p>Да, для всех владельцев RAu COIN предусмотрен личный кабинет (мобильное приложение), где в режиме онлайн видна подробная статистика роста курса RAu COIN </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Faq Section Ends Here -->


    <!-- Transection Section Starts Here -->
    <section class="transection-section section-bg padding-top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 col-md-10">
                    <div class="section__header max-p text-center">
                        <h2 class="section__header-title">Последние сделки RAu COIN </h2>
                        <p>Торопитесь приобрести RAu COIN, так как эмиссия токена ограничена и доп выпуски RAu COIN невозможны в соответсвии с правилами и условиями проекта MIKE GROUP .</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <ul class="transection__tab__menu nav-tabs nav border-0 justify-content-center">
                        <li><a data-bs-toggle="tab" href="#deposit" class="cmn--btn2 active">Купили RAu COIN</a></li>
                        <li><a data-bs-toggle="tab" href="#widthdraw" class="cmn--btn2">Вывод прибыли</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane show fade active" id="deposit">
                            <table class="table transection__table">
                                <thead>
                                <tr>
                                    <th>Имя</th>
                                    <th>Сумма</th>
                                    <th>Метод</th>
                                    <th>Дата</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td data-label="User Name">
                                        <div class="user d-flex flex-wrap align-items-center">
                                            <div class="thumb">
                                                <img src="/template-assets/digihyip/images/dashboard/item1.png" alt="dashboard">
                                            </div>
                                            <p class="name">Сергей Филипов</p>
                                        </div>
                                    </td>
                                    <td data-label="Amount"><span class="amount">₽1500</span></td>
                                    <td data-label="Wallet"><span class="wallet">Payeer</span></td>
                                    <td data-label="Date"><span class="date">07 сентября 2022</span></td>
                                </tr>
                                <tr>
                                    <td data-label="User Name">
                                        <div class="user d-flex flex-wrap align-items-center">
                                            <div class="thumb">
                                                <img src="/template-assets/digihyip/images/dashboard/item2.png" alt="dashboard">
                                            </div>
                                            <p class="name">Александр Мануковский</p>
                                        </div>
                                    </td>
                                    <td data-label="Amount"><span class="amount">₽4500</span></td>
                                    <td data-label="Wallet"><span class="wallet">Payeer</span></td>
                                    <td data-label="Date"><span class="date">06 сентября 2022</span></td>
                                </tr>
                                <tr>
                                    <td data-label="User Name">
                                        <div class="user d-flex flex-wrap align-items-center">
                                            <div class="thumb">
                                                <img src="/template-assets/digihyip/images/dashboard/item3.png" alt="dashboard">
                                            </div>
                                            <p class="name">Иван Сопрыкин</p>
                                        </div>
                                    </td>
                                    <td data-label="Amount"><span class="amount">₽500</span></td>
                                    <td data-label="Wallet"><span class="wallet">VISA</span></td>
                                    <td data-label="Date"><span class="date">07 сентября 2022</span></td>
                                </tr>
                                <tr>
                                    <td data-label="User Name">
                                        <div class="user d-flex flex-wrap align-items-center">
                                            <div class="thumb">
                                                <img src="/template-assets/digihyip/images/dashboard/item4.png" alt="dashboard">
                                            </div>
                                            <p class="name">Михаил Нестеров</p>
                                        </div>
                                    </td>
                                    <td data-label="Amount"><span class="amount">₽1500</span></td>
                                    <td data-label="Wallet"><span class="wallet">Master Card</span></td>
                                    <td data-label="Date"><span class="date">07 сентября 2022</span></td>
                                </tr>
                                <tr>
                                    <td data-label="User Name">
                                        <div class="user d-flex flex-wrap align-items-center">
                                            <div class="thumb">
                                                <img src="/template-assets/digihyip/images/dashboard/item5.png" alt="dashboard">
                                            </div>
                                            <p class="name">Данил Метрофанов</p>
                                        </div>
                                    </td>
                                    <td data-label="Amount"><span class="amount">₽2500</span></td>
                                    <td data-label="Wallet"><span class="wallet">Payeer</span></td>
                                    <td data-label="Date"><span class="date">06 сентября 2022</span></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane show fade" id="widthdraw">
                            <table class="table transection__table">
                                <thead>
                                <tr>
                                    <th>Имя</th>
                                    <th>Сумма</th>
                                    <th>Метод</th>
                                    <th>Дата</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td data-label="User Name">
                                        <div class="user d-flex flex-wrap align-items-center">
                                            <div class="thumb">
                                                <img src="/template-assets/digihyip/images/dashboard/item6.png" alt="dashboard">
                                            </div>
                                            <p class="name">Галина Алексеевна</p>
                                        </div>
                                    </td>
                                    <td data-label="Amount"><span class="amount">₽300</span></td>
                                    <td data-label="Wallet"><span class="wallet">Payeer</span></td>
                                    <td data-label="Date"><span class="date">04 сентября 2022</span></td>
                                </tr>
                                <tr>
                                    <td data-label="User Name">
                                        <div class="user d-flex flex-wrap align-items-center">
                                            <div class="thumb">
                                                <img src="/template-assets/digihyip/images/dashboard/item7.png" alt="dashboard">
                                            </div>
                                            <p class="name">Ирина Марченко</p>
                                        </div>
                                    </td>
                                    <td data-label="Amount"><span class="amount">₽1500</span></td>
                                    <td data-label="Wallet"><span class="wallet">Payeer</span></td>
                                    <td data-label="Date"><span class="date">05 сентября 2022</span></td>
                                </tr>
                                <tr>
                                    <td data-label="User Name">
                                        <div class="user d-flex flex-wrap align-items-center">
                                            <div class="thumb">
                                                <img src="/template-assets/digihyip/images/dashboard/item8.png" alt="dashboard">
                                            </div>
                                            <p class="name">Надежда Кондратенко</p>
                                        </div>
                                    </td>
                                    <td data-label="Amount"><span class="amount">₽1000</span></td>
                                    <td data-label="Wallet"><span class="wallet">VISA</span></td>
                                    <td data-label="Date"><span class="date">04 сентября 2022</span></td>
                                </tr>
                                <tr>
                                    <td data-label="User Name">
                                        <div class="user d-flex flex-wrap align-items-center">
                                            <div class="thumb">
                                                <img src="/template-assets/digihyip/images/dashboard/item9.png" alt="dashboard">
                                            </div>
                                            <p class="name">Александ Новиков</p>
                                        </div>
                                    </td>
                                    <td data-label="Amount"><span class="amount">₽800</span></td>
                                    <td data-label="Wallet"><span class="wallet">Master Card</span></td>
                                    <td data-label="Date"><span class="date">06 сентября 2022</span></td>
                                </tr>
                                <tr>
                                    <td data-label="User Name">
                                        <div class="user d-flex flex-wrap align-items-center">
                                            <div class="thumb">
                                                <img src="/template-assets/digihyip/images/dashboard/item10.png" alt="dashboard">
                                            </div>
                                            <p class="name">Дмитрий Галушкин</p>
                                        </div>
                                    </td>
                                    <td data-label="Amount"><span class="amount">₽900</span></td>
                                    <td data-label="Wallet"><span class="wallet">МИР</span></td>
                                    <td data-label="Date"><span class="date">04 сентября 2022</span></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Transection Section Ends Here -->


    <!-- Testimonial Section Starts Here -->
    <section class="testimonial-section padding-top padding-bottom">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-5">
                    <div class="testimonial__img__slider">
                        <div class="single-slide">
                            <div class="testimonial__thumb">
                                <img src="/template-assets/digihyip/images/testimonial/item1.png" alt="testimonial">
                            </div>
                        </div>
                        <div class="single-slide">
                            <div class="testimonial__thumb">
                                <img src="/template-assets/digihyip/images/testimonial/item2.png" alt="testimonial">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="testimonial__content__slider">
                        <div class="single-slide">
                            <div class="testimonial__content">
                                <div class="icon"><i class="fas fa-quote-left"></i></div>
                                <p>Купил данный COIN и пока не жалею, так как начал с минимального, продержал RAu COIN 15 дней и уже получил доход..  </p>
                                <h3 class="name">Сергей Давыдов</h3>
                                <span class="designation text-white">Вебмастер</span>
                            </div>
                        </div>
                        <div class="single-slide">
                            <div class="testimonial__content">
                                <div class="icon"><i class="fas fa-quote-left"></i></div>
                                <p>"Кто не рискует тот не пьет шампанское" пока RAu COIN растет я буду вкладывать в него. И желаю проекту только успехов и процветания</p>
                                <h3 class="name">Екатерина Каменова</h3>
                                <span class="designation text-white">Офис менеджер</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial Section Ends Here -->


    <!-- Blog Section STartrs Here -->
    <section class="blog-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 col-md-10">
                    <div class="section__header max-p text-center">
                        <h2 class="section__header-title">Новости криптовалют</h2>
                        <p>Замечено, что новости, рассказанные по секрету, распространяются гораздо быстрей, чем просто новости.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center g-4">
                <div class="col-lg-4 col-md-6 col-sm-10">
                    <div class="post__item">
                        <div class="post__item-thumb">
                            <img src="/template-assets/digihyip/images/blog/item1.png" alt="blog">
                            <div class="thumb__content">
                                <h3 class="title"><a href="https://vc.ru/u/688290-andrey-plat/407701-osnovnye-trendy-kriptovalyut-na-2022-2025">Во всем мире уже более 300 млн пользователей криптовалюты</a></h3>
                                <ul class="post-meta d-flex flex-wrap m-0 justify-content-between">
                                    <li>
                                        <i class="fas fa-user"></i>
                                        Портал VC.ru
                                    </li>
                                    <li>
                                        <i class="fas fa-calendar"></i>
                                        21 апреля 2022
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-10">
                    <div class="post__item">
                        <div class="post__item-thumb">
                            <img src="/template-assets/digihyip/images/blog/item2.png" alt="blog">
                            <div class="thumb__content">
                                <h3 class="title"><a href="https://www.rbc.ru/crypto/news/62f4e8789a7947cab926bb5d">Аналитик спрогнозировал новую волну снижения цены биткоина</a></h3>
                                <ul class="post-meta d-flex flex-wrap m-0 justify-content-between">
                                    <li>
                                        <i class="fas fa-user"></i>
                                        Подробнее на РБК
                                    </li>
                                    <li>
                                        <i class="fas fa-calendar"></i>
                                        12 августа 2022
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-10">
                    <div class="post__item">
                        <div class="post__item-thumb">
                            <img src="/template-assets/digihyip/images/blog/item3.png" alt="blog">
                            <div class="thumb__content">
                                <h3 class="title"><a href="https://www.rbc.ru/crypto/news/5a1696169a79478d6a4f44c8">Словарь портала РБК.ru: Что такое криптовалюта?</a></h3>
                                <ul class="post-meta d-flex flex-wrap m-0 justify-content-between">
                                    <li>
                                        <i class="fas fa-user"></i>
                                        Подробнее на РБК
                                    </li>
                                    <li>
                                        <i class="fas fa-calendar"></i>
                                        15 августа 2022
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Section Ends Here -->
<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   var z = null;m[i].l=1*new Date();
   for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
   k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(90084243, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/90084243" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

    <!-- Brand Section Starts Here -->
    <div class="padding-top padding-bottom">
        <div class="container">
            <div class="brand__slider">
                <div class="single-slide">
                    <div class="brand__item">
                        <img src="/template-assets/digihyip/images/brand/item1.png" alt="brand">
                    </div>
                </div>
                <div class="single-slide">
                    <div class="brand__item">
                        <img src="/template-assets/digihyip/images/brand/item2.png" alt="brand">
                    </div>
                </div>
                <div class="single-slide">
                    <div class="brand__item">
                        <img src="/template-assets/digihyip/images/brand/item3.png" alt="brand">
                    </div>
                </div>
                <div class="single-slide">
                    <div class="brand__item">
                        <img src="/template-assets/digihyip/images/brand/item6.png" alt="brand">
                    </div>
                </div>
                <div class="single-slide">
                    <div class="brand__item">
                        <img src="/template-assets/digihyip/images/brand/item7.png" alt="brand">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Brand Section Ends Here -->
@endsection
