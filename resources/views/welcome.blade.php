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
                    <h1 class="title">RED AURUM COIN (RAU)</h1>
                    <p>Токен нового поколения - первая в мире восходящая криптовалюта</p>
                    <a href="sign-in.html" class="cmn--btn">Начни зарабатывать</a>
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
                            <h2 class="section__header-title">Инвестируйте в уникальный COIN (RAU) </h2>
                            <p>RAu COIN – это актив, который растет ежегодно в среднем на 550%. И наш проект гарантирует этот рост!</p>
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
                            <a href="about.html" class="cmn--btn">Хочу инвестировать</a>
                            <a href="contact.html" class="cmn--btn2">Узнать больше о Rau COIN</a>
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
                        <p>Компания MIKE GROUP реализовала возможность умножать инвестиции от продажи RAU в крупных международных компаниях и ярких доходных стартапах </p>
                    </div>
                </div>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6">
                    <div class="plan__item">
                        <div class="plan__item-header">
                            <h2 class="plan-parcent">20%</h2>
                            <p class="plan-parcent-info">В течении 15 дней</p>
                        </div>
                        <div class="plan__item-body">
                            <ul class="plan__info">
                                <li>
                                    <span class="title">Мин :</span>
                                    <span class="value">1000 RUR</span>
                                </li>
                                <li>
                                    <span class="title">Макс :</span>
                                    <span class="value">300 000 RUR</span>
                                </li>
                            </ul>
                        </div>
                        <div class="plan__item-footer">
                            <p class="footer-info">БЕЗ КАПИТАЛИЗАЦИИ</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6">
                    <div class="plan__item">
                        <div class="plan__item-header">
                            <h2 class="plan-parcent">120%</h2>
                            <p class="plan-parcent-info">В течении 90 дней</p>
                        </div>
                        <div class="plan__item-body">
                            <ul class="plan__info">
                                <li>
                                    <span class="title">Мин :</span>
                                    <span class="value">3000 RUR</span>
                                </li>
                                <li>
                                    <span class="title">Макс :</span>
                                    <span class="value">600 000 RUR</span>
                                </li>
                            </ul>
                        </div>
                        <div class="plan__item-footer">
                            <p class="footer-info"> С КАПИТАЛИЗАЦИЕЙ</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6">
                    <div class="plan__item">
                        <div class="plan__item-header">
                            <h2 class="plan-parcent">240%</h2>
                            <p class="plan-parcent-info">В течении 180 дней</p>
                        </div>
                        <div class="plan__item-body">
                            <ul class="plan__info">
                                <li>
                                    <span class="title">Мин :</span>
                                    <span class="value">3000 RUR</span>
                                </li>
                                <li>
                                    <span class="title">Макс :</span>
                                    <span class="value">600 000 RUR</span>
                                </li>
                            </ul>
                        </div>
                        <div class="plan__item-footer">
                            <p class="footer-info"> С РЕИНВЕСТИРОВАНИЕМ</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6">
                    <div class="plan__item">
                        <div class="plan__item-header">
                            <h2 class="plan-parcent">550%</h2>
                            <p class="plan-parcent-info">В год и далее навсегда</p>
                        </div>
                        <div class="plan__item-body">
                            <ul class="plan__info">
                                <li>
                                    <span class="title">Мин :</span>
                                    <span class="value">10 000 RUR</span>
                                </li>
                                <li>
                                    <span class="title">Макс :</span>
                                    <span class="value">999 999 999 RUR</span>
                                </li>
                            </ul>
                        </div>
                        <div class="plan__item-footer">
                            <p class="footer-info"> ЕЖЕГОДНАЯ КАПИТАЛИЗАЦИЯ</p>
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
                                        <label class="form-label">На какой срок приобретается RAu</label>
                                        <select class="nice-select w-100 h-50">
                                            <option>Выберите срок владения RAu</option>
                                            <option>15 дней</option>
                                            <option>90 дней</option>
                                            <option>180 дней</option>
                                            <option>12 месяцев</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-12 col-xl-6 col-sm-6">
                                    <div class="form-group">
                                        <label class="form-label">Рост инвестиций</label>
                                        <select class="nice-select w-100 h-50">
                                            <option>20%</option>
                                            <option>120%</option>
                                            <option>240%</option>
                                            <option>550%</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-12 col-xl-6 col-sm-6">
                                    <div class="form-group">
                                        <label class="form-label">Доход</label>
                                        <input type="text" class="form-control form--control" placeholder="$60,000">
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-12 col-xl-6 col-sm-6">
                                    <div class="form-group">
                                        <label class="form-label">Капитализация</label>
                                        <input type="text" class="form-control form--control" placeholder="$800000">
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
                        <p>Мы самый уникальный и гарантированно прибыльный проект в области цифровых активов!  </p>
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
                            <p>Многоуровневая системой безопасности и кластерная система делает проект неубиваемым.</p>
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
    <section class="referral-section padding-top padding-bottom section-bg">
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
                    <a href="sign-up.html" class="cmn--btn">Вперед</a>
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
                            <p class="invest-amount">Инвестировал 2,3 млн RUR</p>
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
                            <p class="invest-amount">Ивестировала 350 тыс RUR</p>
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
                            <p class="invest-amount">Инвестировал 950 тыс RUR</p>
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
                            <p class="invest-amount">Инвестировал 1,3 млн RUR</p>
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
                        <p>Отслеживай в онлайн режиме статистику роста своих инвестиций, следи за динамикой рынка криптовалют и убедить в надежности RAu COIN.</p>
                    </div>
                    <div class="button__wrapper">
                        <a href="sign-up.html" class="cmn--btn download-btn"><div class="icon"><i class="fab fa-google-play"></i></div> <div class="text"><p>СКАЧАТЬ</p><p class="for">Для Android</p></div></a>
                        <a href="sign-up.html" class="cmn--btn download-btn"><div class="icon"><i class="fab fa-apple"></i></div> <div class="text"><p>СКАЧАТЬ</p><p class="for">Для IOS</p></div></a>
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
                                    <h2 class="title"><span class="odometer" data-odometer-final="2">0</span>Млн</h2>
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
                                <p>Комиссия при покупке RAu COIN или при дальнейшей продаже полностью отсутствует</p>
                            </div>
                        </div>
                        <div class="faq__item open active">
                            <div class="faq__item-title">
                                <h4 class="title">Когда мои инвестиции начинают приносить прибыль?</h4>
                            </div>
                            <div class="faq__item-content">
                                <p>Курс RAu COIN растёт ежедневно от 0,8 до 3%, поэтому Ваши инвестиции начинают работать буквально с первого дня приобретения RAuCOIN </p>
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
                        <li><a data-bs-toggle="tab" href="#deposit" class="cmn--btn2 active">Покупки COIN</a></li>
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
                                    <td data-label="Amount"><span class="amount">$1500</span></td>
                                    <td data-label="Wallet"><span class="wallet">Payeer</span></td>
                                    <td data-label="Date"><span class="date">08 августа 2022</span></td>
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
                                    <td data-label="Amount"><span class="amount">$4500</span></td>
                                    <td data-label="Wallet"><span class="wallet">Payeer</span></td>
                                    <td data-label="Date"><span class="date">08 августа 2022</span></td>
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
                                    <td data-label="Amount"><span class="amount">$500</span></td>
                                    <td data-label="Wallet"><span class="wallet">VISA</span></td>
                                    <td data-label="Date"><span class="date">08 августа 2022</span></td>
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
                                    <td data-label="Amount"><span class="amount">$1500</span></td>
                                    <td data-label="Wallet"><span class="wallet">Master Card</span></td>
                                    <td data-label="Date"><span class="date">08 августа 2022</span></td>
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
                                    <td data-label="Amount"><span class="amount">$2500</span></td>
                                    <td data-label="Wallet"><span class="wallet">Payeer</span></td>
                                    <td data-label="Date"><span class="date">08 августа 2022</span></td>
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
                                                <img src="/template-assets/digihyip/images/dashboard/item1.png" alt="dashboard">
                                            </div>
                                            <p class="name">Ирина Алексеевна</p>
                                        </div>
                                    </td>
                                    <td data-label="Amount"><span class="amount">$300</span></td>
                                    <td data-label="Wallet"><span class="wallet">Payeer</span></td>
                                    <td data-label="Date"><span class="date">08 августа 2022</span></td>
                                </tr>
                                <tr>
                                    <td data-label="User Name">
                                        <div class="user d-flex flex-wrap align-items-center">
                                            <div class="thumb">
                                                <img src="/template-assets/digihyip/images/dashboard/item2.png" alt="dashboard">
                                            </div>
                                            <p class="name">Munna Ahmed</p>
                                        </div>
                                    </td>
                                    <td data-label="Amount"><span class="amount">$1500</span></td>
                                    <td data-label="Wallet"><span class="wallet">Payeer</span></td>
                                    <td data-label="Date"><span class="date">08 августа 2022</span></td>
                                </tr>
                                <tr>
                                    <td data-label="User Name">
                                        <div class="user d-flex flex-wrap align-items-center">
                                            <div class="thumb">
                                                <img src="/template-assets/digihyip/images/dashboard/item3.png" alt="dashboard">
                                            </div>
                                            <p class="name">Денис Николаев</p>
                                        </div>
                                    </td>
                                    <td data-label="Amount"><span class="amount">$1000</span></td>
                                    <td data-label="Wallet"><span class="wallet">VISA</span></td>
                                    <td data-label="Date"><span class="date">08 августа 2022</span></td>
                                </tr>
                                <tr>
                                    <td data-label="User Name">
                                        <div class="user d-flex flex-wrap align-items-center">
                                            <div class="thumb">
                                                <img src="/template-assets/digihyip/images/dashboard/item4.png" alt="dashboard">
                                            </div>
                                            <p class="name">Александ Новиков</p>
                                        </div>
                                    </td>
                                    <td data-label="Amount"><span class="amount">$800</span></td>
                                    <td data-label="Wallet"><span class="wallet">Master Card</span></td>
                                    <td data-label="Date"><span class="date">08 августа 2022</span></td>
                                </tr>
                                <tr>
                                    <td data-label="User Name">
                                        <div class="user d-flex flex-wrap align-items-center">
                                            <div class="thumb">
                                                <img src="/template-assets/digihyip/images/dashboard/item5.png" alt="dashboard">
                                            </div>
                                            <p class="name">Дмитрий Галушкин</p>
                                        </div>
                                    </td>
                                    <td data-label="Amount"><span class="amount">$900</span></td>
                                    <td data-label="Wallet"><span class="wallet">МИР</span></td>
                                    <td data-label="Date"><span class="date">08 августа 2022</span></td>
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
                                <p>Купил данный COIN пока не жалею, так как начал с минимального, продержал RAu 15 дней и получил доход..  </p>
                                <h3 class="name">Сергей Давыдов</h3>
                                <span class="designation text-white">Вебмастер</span>
                            </div>
                        </div>
                        <div class="single-slide">
                            <div class="testimonial__content">
                                <div class="icon"><i class="fas fa-quote-left"></i></div>
                                <p>"Кто не рискует тот не пьет шампанское" пока COIN растет я буду вкладывать в него.</p>
                                <h3 class="name">Munna Ahmed</h3>
                                <span class="designation text-white">Частный инвестор</span>
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
                                <h3 class="title"><a href="blog-details.html">Aenean Ligul Porttitoe Consequat Ditae</a></h3>
                                <ul class="post-meta d-flex flex-wrap m-0 justify-content-between">
                                    <li>
                                        <i class="fas fa-user"></i>
                                        Thomas Addican
                                    </li>
                                    <li>
                                        <i class="fas fa-calendar"></i>
                                        15 Aug 2020
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
                                <h3 class="title"><a href="blog-details.html">Aenean Ligul Porttitoe Consequat Ditae</a></h3>
                                <ul class="post-meta d-flex flex-wrap m-0 justify-content-between">
                                    <li>
                                        <i class="fas fa-user"></i>
                                        Thomas Addican
                                    </li>
                                    <li>
                                        <i class="fas fa-calendar"></i>
                                        15 Aug 2020
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
                                <h3 class="title"><a href="blog-details.html">Aenean Ligul Porttitoe Consequat Ditae</a></h3>
                                <ul class="post-meta d-flex flex-wrap m-0 justify-content-between">
                                    <li>
                                        <i class="fas fa-user"></i>
                                        Thomas Addican
                                    </li>
                                    <li>
                                        <i class="fas fa-calendar"></i>
                                        15 Aug 2020
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
