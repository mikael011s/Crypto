@extends('layouts.land')

@section('content')
    <div class="preloader">
        <div class="preinnner">
            <div class="ring"></div>
            <div class="ring"></div>
            <div class="ring"></div>
        </div>
    </div>
    <div class="overlay"></div>

    <!-- Header Section Starts Here -->
    <div class="header">
        <div class="header-top">
            <div class="container">
                <div class="header__top__wrapper d-flex flex-wrap align-items-center justify-content-center justify-content-md-between text-center">
                    <ul class="contacts d-flex flex-wrap justify-content-center">
                        <li><a href="mailto:demo@gmail.com"><i class="las la-envelope-open"></i> demo@gmail.com</a></li>
                        <li><a href="tel:129075"><i class="las la-phone-volume"></i> 123  -  456  -  7890</a></li>
                    </ul>
                    <div class="right__area d-flex flex-wrap align-items-center mt-3 mt-md-0">
                        <select name="language" class="nice-select custom--scrollbar">
                            <option>English</option>
                            <option>Bangla</option>
                        </select>
                        <a href="dashboard.html" class="user__thumb ms-3 me-3 me-lg-0">
                            <img src="/template-assets/digihyip/images/dashboard/user.png" alt="dashboard">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom">
            <div class="container">
                <div class="header-bottom-area">
                    <div class="logo"><a href="index.html"><img src="/template-assets/digihyip/images/logo.png" alt="logo"></a></div>
                    <ul class="menu">
                        <li>
                            <a href="#0">Home</a>
                            <ul class="sub-menu">
                                <li><a href="index.html">Home One</a></li>
                                <li><a href="index2.html">Home Two</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="about.html">About</a>
                        </li>
                        <li>
                            <a href="plan.html">Plan</a>
                        </li>
                        <li>
                            <a href="#0">Pages</a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="dashboard.html">User Dashboard</a>
                                </li>
                                <li>
                                    <a href="investor.html">Investor</a>
                                </li>
                                <li>
                                    <a href="faq.html">FAQs</a>
                                </li>
                                <li>
                                    <a href="policy.html">Privacy Policy</a>
                                </li>
                                <li>
                                    <a href="error-page.html">404</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#0">Blog</a>
                            <ul class="sub-menu">
                                <li><a href="blog-grid.html">Blog Grid</a></li>
                                <li><a href="blog-list.html">Blog List</a></li>
                                <li><a href="blog-details.html">Blog Details</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="contact.html">Contact</a>
                        </li>

                        <li class="d-none d-lg-block">
                            <a href="#0" class="search--btn"><i class="fas fa-search"></i></a>
                        </li>

                        <li class="p-0 d-lg-none mt-3 mt-lg-0">
                            <div class="button__wrapper">
                                <a href="sign-up.html" class="cmn--btn">Register</a>
                                <a href="sign-in.html" class="cmn--btn">Login</a>
                            </div>
                        </li>
                    </ul>   <!-- Menu End -->

                    <div class="button__wrapper d-none d-lg-block">
                        <a href="sign-up.html" class="cmn--btn">Register</a>
                        <a href="sign-in.html" class="cmn--btn">Login</a>
                    </div>


                    <div class="header-trigger-wrapper d-flex d-lg-none align-items-center">
                        <div class="mobile-nav-right d-flex align-items-center"></div>
                        <a href="#0" class="search--btn me-4 text--base"><i class="fas fa-search"></i></a>
                        <div class="header-trigger d-block d--none">
                            <span></span>
                        </div>
                    </div>  <!-- Trigger End-->
                </div>
            </div>
        </div>
    </div>
    <!-- Header Section Ends Here -->


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
                    <h1 class="title">Best Hyip Investment Platform</h1>
                    <p>Maecenas tempus tellus eget condimentum rhoncus sem quam semper libero hyip investment pandding</p>
                    <a href="sign-in.html" class="cmn--btn">Get Started</a>
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
                            <h2 class="section__header-title">Why Choose Our Investment Platform </h2>
                            <p>Aenean vulputate eleifend tellus. Aenean leo ligul porttitoeu consequat vitae eleifend acenim</p>
                        </div>
                        <p>Maecenas tempus tellus eget condimentum rhoncus seumper libero sit amet adipiscing sem neque sepsumam uam nuandit vel luct endrerilorem.aecenas necdio et ante dunt tempus. Donec vitae sapien utlibero venenatis faucibus.</p>
                        <ul class="info__list d-flex flex-wrap mt-4">
                            <li> Dapivamus elementum</li>
                            <li> Dapivamus elementum</li>
                            <li> There are many variations</li>
                            <li> There are many variations</li>
                            <li> Finibus onorum et alorum</li>
                            <li> Finibus onorum et alorum</li>
                        </ul>
                        <div class="button__wrapper">
                            <a href="about.html" class="cmn--btn">Know More</a>
                            <a href="contact.html" class="cmn--btn2">Contact Us</a>
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
                        <h2 class="section__header-title">Our Investment Plan</h2>
                        <p>Aenean vulputate eleifend tellus. Aenean leo ligul porttitoeu consequat vitae eleifend </p>
                    </div>
                </div>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6">
                    <div class="plan__item">
                        <div class="plan__item-header">
                            <h2 class="plan-parcent">5%</h2>
                            <p class="plan-parcent-info">After 6 Hours</p>
                        </div>
                        <div class="plan__item-body">
                            <ul class="plan__info">
                                <li>
                                    <span class="title">Min :</span>
                                    <span class="value">15 USD</span>
                                </li>
                                <li>
                                    <span class="title">Max :</span>
                                    <span class="value">30 USD</span>
                                </li>
                            </ul>
                        </div>
                        <div class="plan__item-footer">
                            <p class="footer-info"> FOREVER</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6">
                    <div class="plan__item">
                        <div class="plan__item-header">
                            <h2 class="plan-parcent">69%</h2>
                            <p class="plan-parcent-info">Hourly</p>
                        </div>
                        <div class="plan__item-body">
                            <ul class="plan__info">
                                <li>
                                    <span class="title">Min :</span>
                                    <span class="value">15 USD</span>
                                </li>
                                <li>
                                    <span class="title">Max :</span>
                                    <span class="value">30 USD</span>
                                </li>
                            </ul>
                        </div>
                        <div class="plan__item-footer">
                            <p class="footer-info"> FOR 8 HOURS</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6">
                    <div class="plan__item">
                        <div class="plan__item-header">
                            <h2 class="plan-parcent">120%</h2>
                            <p class="plan-parcent-info">Hourly</p>
                        </div>
                        <div class="plan__item-body">
                            <ul class="plan__info">
                                <li>
                                    <span class="title">Min :</span>
                                    <span class="value">15 USD</span>
                                </li>
                                <li>
                                    <span class="title">Max :</span>
                                    <span class="value">30 USD</span>
                                </li>
                            </ul>
                        </div>
                        <div class="plan__item-footer">
                            <p class="footer-info"> After 3 Months</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6">
                    <div class="plan__item">
                        <div class="plan__item-header">
                            <h2 class="plan-parcent">200%</h2>
                            <p class="plan-parcent-info">After 6 Hours</p>
                        </div>
                        <div class="plan__item-body">
                            <ul class="plan__info">
                                <li>
                                    <span class="title">Min :</span>
                                    <span class="value">15 USD</span>
                                </li>
                                <li>
                                    <span class="title">Max :</span>
                                    <span class="value">30 USD</span>
                                </li>
                            </ul>
                        </div>
                        <div class="plan__item-footer">
                            <p class="footer-info"> After 6 Months</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6">
                    <div class="plan__item">
                        <div class="plan__item-header">
                            <h2 class="plan-parcent">250%</h2>
                            <p class="plan-parcent-info">After 8 Hours</p>
                        </div>
                        <div class="plan__item-body">
                            <ul class="plan__info">
                                <li>
                                    <span class="title">Min :</span>
                                    <span class="value">15 USD</span>
                                </li>
                                <li>
                                    <span class="title">Max :</span>
                                    <span class="value">30 USD</span>
                                </li>
                            </ul>
                        </div>
                        <div class="plan__item-footer">
                            <p class="footer-info"> FOREVER</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6">
                    <div class="plan__item">
                        <div class="plan__item-header">
                            <h2 class="plan-parcent">270%</h2>
                            <p class="plan-parcent-info">Hourly</p>
                        </div>
                        <div class="plan__item-body">
                            <ul class="plan__info">
                                <li>
                                    <span class="title">Min :</span>
                                    <span class="value">15 USD</span>
                                </li>
                                <li>
                                    <span class="title">Max :</span>
                                    <span class="value">30 USD</span>
                                </li>
                            </ul>
                        </div>
                        <div class="plan__item-footer">
                            <p class="footer-info"> FOR 10 Months</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6">
                    <div class="plan__item">
                        <div class="plan__item-header">
                            <h2 class="plan-parcent">300%</h2>
                            <p class="plan-parcent-info">Hourly</p>
                        </div>
                        <div class="plan__item-body">
                            <ul class="plan__info">
                                <li>
                                    <span class="title">Min :</span>
                                    <span class="value">15 USD</span>
                                </li>
                                <li>
                                    <span class="title">Max :</span>
                                    <span class="value">30 USD</span>
                                </li>
                            </ul>
                        </div>
                        <div class="plan__item-footer">
                            <p class="footer-info"> After 1 Year</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6">
                    <div class="plan__item">
                        <div class="plan__item-header">
                            <h2 class="plan-parcent">320%</h2>
                            <p class="plan-parcent-info">Hourly</p>
                        </div>
                        <div class="plan__item-body">
                            <ul class="plan__info">
                                <li>
                                    <span class="title">Min :</span>
                                    <span class="value">15 USD</span>
                                </li>
                                <li>
                                    <span class="title">Max :</span>
                                    <span class="value">30 USD</span>
                                </li>
                            </ul>
                        </div>
                        <div class="plan__item-footer">
                            <p class="footer-info"> After 1.2 Years</p>
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
                            <h2 class="section__header-title">Calculate Your Hyip investment</h2>
                            <p>Aenean vulputate eleifend tellus. Aenean leo ligul porttitoeu consequat vitae eleifend acenim</p>
                        </div>
                        <form class="profit__calculation__form">
                            <div class="row g-4">
                                <div class="col-md-6 col-lg-12 col-xl-6 col-sm-6">
                                    <div class="form-group">
                                        <label class="form-label">Plan</label>
                                        <select class="nice-select w-100 h-50">
                                            <option>Select Plan</option>
                                            <option>Silver Plan</option>
                                            <option>Gold Plan</option>
                                            <option>Platium Plan</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-12 col-xl-6 col-sm-6">
                                    <div class="form-group">
                                        <label class="form-label">Compounding</label>
                                        <select class="nice-select w-100 h-50">
                                            <option>05%</option>
                                            <option>15%</option>
                                            <option>20%</option>
                                            <option>25%</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-12 col-xl-6 col-sm-6">
                                    <div class="form-group">
                                        <label class="form-label">Profit</label>
                                        <input type="text" class="form-control form--control" placeholder="$60,000">
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-12 col-xl-6 col-sm-6">
                                    <div class="form-group">
                                        <label class="form-label">Total Returns</label>
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
                        <h2 class="section__header-title">Best  for Hyip Investment</h2>
                        <p>Aenean vulputate eleifend tellus. Aenean leo ligul porttitoeu consequat vitae eleifend </p>
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
                            <h4 class="title">Get More Profit</h4>
                            <p>Maecenas tempuslusning eget condim entum and rhoncus eumpesit.</p>
                        </div>
                    </div>
                </div>
                <div class="single-slide">
                    <div class="feature__item">
                        <div class="feature__item-icon">
                            <img src="/template-assets/digihyip/images/feature/2.png" alt="feature">
                        </div>
                        <div class="feature__item-content">
                            <h4 class="title">24/7 Support</h4>
                            <p>Maecenas tempuslusning eget condim entum and rhoncus eumpesit.</p>
                        </div>
                    </div>
                </div>
                <div class="single-slide">
                    <div class="feature__item">
                        <div class="feature__item-icon">
                            <img src="/template-assets/digihyip/images/feature/3.png" alt="feature">
                        </div>
                        <div class="feature__item-content">
                            <h4 class="title">Strong Protection</h4>
                            <p>Maecenas tempuslusning eget condim entum and rhoncus eumpesit.</p>
                        </div>
                    </div>
                </div>
                <div class="single-slide">
                    <div class="feature__item">
                        <div class="feature__item-icon">
                            <img src="/template-assets/digihyip/images/feature/4.png" alt="feature">
                        </div>
                        <div class="feature__item-content">
                            <h4 class="title">Relability</h4>
                            <p>Maecenas tempuslusning eget condim entum and rhoncus eumpesit.</p>
                        </div>
                    </div>
                </div>
                <div class="single-slide">
                    <div class="feature__item">
                        <div class="feature__item-icon">
                            <img src="/template-assets/digihyip/images/feature/4.png" alt="feature">
                        </div>
                        <div class="feature__item-content">
                            <h4 class="title">Relability</h4>
                            <p>Maecenas tempuslusning eget condim entum and rhoncus eumpesit.</p>
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
                        <h2 class="section__header-title">30% Referral Commission</h2>
                        <p>Aenean vulputate eleifend tellus. Aenea ligul porttitoeu consequat vitae eleifend acenim</p>
                    </div>
                    <a href="sign-up.html" class="cmn--btn">Get Started</a>
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
                        <h2 class="section__header-title">Our Best Investor</h2>
                        <p>Aenean vulputate eleifend tellus. Aenean leo ligul porttitoeu consequat vitae eleifend.</p>
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
                            <h3 class="name">Robart Williams</h3>
                            <p class="invest-amount">Invest 250 USD</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="investor__item">
                        <div class="investor__item-thumb">
                            <img src="/template-assets/digihyip/images/investor/investor2.png" alt="investor">
                        </div>
                        <div class="investor__item-content">
                            <h3 class="name">Munna Ahmed</h3>
                            <p class="invest-amount">Invest 350 USD</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="investor__item">
                        <div class="investor__item-thumb">
                            <img src="/template-assets/digihyip/images/investor/investor3.png" alt="investor">
                        </div>
                        <div class="investor__item-content">
                            <h3 class="name">Maliha Mahtab</h3>
                            <p class="invest-amount">Invest 450 USD</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="investor__item">
                        <div class="investor__item-thumb">
                            <img src="/template-assets/digihyip/images/investor/investor4.png" alt="investor">
                        </div>
                        <div class="investor__item-content">
                            <h3 class="name">Taposhi Ahmed</h3>
                            <p class="invest-amount">Invest 550 USD</p>
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
                        <h2 class="section__header-title">Download Our App</h2>
                        <p>Curabitur ullamcorper ultricies nisi Tupural Engle  Nam eget dui. Etiam rhoncus.</p>
                    </div>
                    <div class="button__wrapper">
                        <a href="sign-up.html" class="cmn--btn download-btn"><div class="icon"><i class="fab fa-google-play"></i></div> <div class="text"><p>DOWNLOAD</p><p class="for">For Android</p></div></a>
                        <a href="sign-up.html" class="cmn--btn download-btn"><div class="icon"><i class="fab fa-apple"></i></div> <div class="text"><p>DOWNLOAD</p><p class="for">For IOS</p></div></a>
                    </div>
                    <div class="counter__wrapper row gy-4 gy-sm-5 pt-4 pt-sm-5">
                        <div class="col-6 col-sm-6 col-md-4 col-lg-6 col-xl-4">
                            <div class="counter__item">
                                <div class="counter__item-header d-flex align-items-center">
                                    <div class="icon">
                                        <img src="/template-assets/digihyip/images/download/icon1.png" alt="counter">
                                    </div>
                                    <h2 class="title"><span class="odometer" data-odometer-final="39">0</span>M</h2>
                                </div>
                                <p class="info">Active Members</p>
                            </div>
                        </div>
                        <div class="col-6 col-sm-6 col-md-4 col-lg-6 col-xl-4">
                            <div class="counter__item">
                                <div class="counter__item-header d-flex align-items-center">
                                    <div class="icon">
                                        <img src="/template-assets/digihyip/images/download/icon2.png" alt="counter">
                                    </div>
                                    <h2 class="title"><span class="odometer" data-odometer-final="150">0</span>M</h2>
                                </div>
                                <p class="info">Our Total Deposit</p>
                            </div>
                        </div>
                        <div class="col-6 col-sm-6 col-md-4 col-lg-6 col-xl-4">
                            <div class="counter__item">
                                <div class="counter__item-header d-flex align-items-center">
                                    <div class="icon">
                                        <img src="/template-assets/digihyip/images/download/icon3.png" alt="counter">
                                    </div>
                                    <h2 class="title"><span class="odometer" data-odometer-final="40">0</span>M</h2>
                                </div>
                                <p class="info">Our Total Withdraw</p>
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
                        <h2 class="section__header-title">Frequently Asked  Questions</h2>
                        <p>Aenean vulputate eleifend tellus. Aenean leo ligul porttitoeu consequat vitae eleifend.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-10">
                    <div class="faq__wrapper">
                        <div class="faq__item">
                            <div class="faq__item-title">
                                <h4 class="title">Why You should become an Investor?</h4>
                            </div>
                            <div class="faq__item-content">
                                <p>Fringilla mauris  amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales augue velit cursus nunc quis gravida magna mi a libero. Fusce vulputate eleifend sapien. Vestibulum purus quam, scelerisque ut, mollis sed, nonummy idmetus</p>
                            </div>
                        </div>
                        <div class="faq__item">
                            <div class="faq__item-title">
                                <h4 class="title">Why You Choose Us?</h4>
                            </div>
                            <div class="faq__item-content">
                                <p>Fringilla mauris  amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales augue velit cursus nunc quis gravida magna mi a libero. Fusce vulputate eleifend sapien. Vestibulum purus quam, scelerisque ut, mollis sed, nonummy idmetus</p>
                            </div>
                        </div>
                        <div class="faq__item open active">
                            <div class="faq__item-title">
                                <h4 class="title">What is Hyip  Investment?</h4>
                            </div>
                            <div class="faq__item-content">
                                <p>Fringilla mauris  amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales augue velit cursus nunc quis gravida magna mi a libero. Fusce vulputate eleifend sapien. Vestibulum purus quam, scelerisque ut, mollis sed, nonummy idmetus</p>
                            </div>
                        </div>
                        <div class="faq__item">
                            <div class="faq__item-title">
                                <h4 class="title">How to do we work?</h4>
                            </div>
                            <div class="faq__item-content">
                                <p>Fringilla mauris  amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales augue velit cursus nunc quis gravida magna mi a libero. Fusce vulputate eleifend sapien. Vestibulum purus quam, scelerisque ut, mollis sed, nonummy idmetus</p>
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
                        <h2 class="section__header-title">Latest Deposit & Withdraw </h2>
                        <p>Aenean vulputate eleifend tellus. Aenean leo ligul porttitoeu consequat vitae eleifend.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <ul class="transection__tab__menu nav-tabs nav border-0 justify-content-center">
                        <li><a data-bs-toggle="tab" href="#deposit" class="cmn--btn2 active">Last Deposit</a></li>
                        <li><a data-bs-toggle="tab" href="#widthdraw" class="cmn--btn2">Last Widthdraw</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane show fade active" id="deposit">
                            <table class="table transection__table">
                                <thead>
                                <tr>
                                    <th>User Name</th>
                                    <th>Amount</th>
                                    <th>Wallet</th>
                                    <th>Date</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td data-label="User Name">
                                        <div class="user d-flex flex-wrap align-items-center">
                                            <div class="thumb">
                                                <img src="/template-assets/digihyip/images/dashboard/item1.png" alt="dashboard">
                                            </div>
                                            <p class="name">Robert Mahfuj</p>
                                        </div>
                                    </td>
                                    <td data-label="Amount"><span class="amount">$1500</span></td>
                                    <td data-label="Wallet"><span class="wallet">Payeer</span></td>
                                    <td data-label="Date"><span class="date">25 Apr 2021</span></td>
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
                                    <td data-label="Date"><span class="date">25 Jan 2021</span></td>
                                </tr>
                                <tr>
                                    <td data-label="User Name">
                                        <div class="user d-flex flex-wrap align-items-center">
                                            <div class="thumb">
                                                <img src="/template-assets/digihyip/images/dashboard/item3.png" alt="dashboard">
                                            </div>
                                            <p class="name">Rafuj Raihan</p>
                                        </div>
                                    </td>
                                    <td data-label="Amount"><span class="amount">$1500</span></td>
                                    <td data-label="Wallet"><span class="wallet">block.io</span></td>
                                    <td data-label="Date"><span class="date">25 May 2021</span></td>
                                </tr>
                                <tr>
                                    <td data-label="User Name">
                                        <div class="user d-flex flex-wrap align-items-center">
                                            <div class="thumb">
                                                <img src="/template-assets/digihyip/images/dashboard/item4.png" alt="dashboard">
                                            </div>
                                            <p class="name">Robert Mahfuj</p>
                                        </div>
                                    </td>
                                    <td data-label="Amount"><span class="amount">$1500</span></td>
                                    <td data-label="Wallet"><span class="wallet">Bank Wire</span></td>
                                    <td data-label="Date"><span class="date">25 Feb 2021</span></td>
                                </tr>
                                <tr>
                                    <td data-label="User Name">
                                        <div class="user d-flex flex-wrap align-items-center">
                                            <div class="thumb">
                                                <img src="/template-assets/digihyip/images/dashboard/item5.png" alt="dashboard">
                                            </div>
                                            <p class="name">Jibon Khan</p>
                                        </div>
                                    </td>
                                    <td data-label="Amount"><span class="amount">$2500</span></td>
                                    <td data-label="Wallet"><span class="wallet">Paypal</span></td>
                                    <td data-label="Date"><span class="date">25 May 2021</span></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane show fade" id="widthdraw">
                            <table class="table transection__table">
                                <thead>
                                <tr>
                                    <th>User Name</th>
                                    <th>Amount</th>
                                    <th>Wallet</th>
                                    <th>Date</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td data-label="User Name">
                                        <div class="user d-flex flex-wrap align-items-center">
                                            <div class="thumb">
                                                <img src="/template-assets/digihyip/images/dashboard/item1.png" alt="dashboard">
                                            </div>
                                            <p class="name">Robert Mahfuj</p>
                                        </div>
                                    </td>
                                    <td data-label="Amount"><span class="amount">$1500</span></td>
                                    <td data-label="Wallet"><span class="wallet">Payeer</span></td>
                                    <td data-label="Date"><span class="date">25 Apr 2021</span></td>
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
                                    <td data-label="Date"><span class="date">25 Jan 2021</span></td>
                                </tr>
                                <tr>
                                    <td data-label="User Name">
                                        <div class="user d-flex flex-wrap align-items-center">
                                            <div class="thumb">
                                                <img src="/template-assets/digihyip/images/dashboard/item3.png" alt="dashboard">
                                            </div>
                                            <p class="name">Rafuj Raihan</p>
                                        </div>
                                    </td>
                                    <td data-label="Amount"><span class="amount">$1500</span></td>
                                    <td data-label="Wallet"><span class="wallet">block.io</span></td>
                                    <td data-label="Date"><span class="date">25 May 2021</span></td>
                                </tr>
                                <tr>
                                    <td data-label="User Name">
                                        <div class="user d-flex flex-wrap align-items-center">
                                            <div class="thumb">
                                                <img src="/template-assets/digihyip/images/dashboard/item4.png" alt="dashboard">
                                            </div>
                                            <p class="name">Robert Mahfuj</p>
                                        </div>
                                    </td>
                                    <td data-label="Amount"><span class="amount">$1500</span></td>
                                    <td data-label="Wallet"><span class="wallet">Bank Wire</span></td>
                                    <td data-label="Date"><span class="date">25 Feb 2021</span></td>
                                </tr>
                                <tr>
                                    <td data-label="User Name">
                                        <div class="user d-flex flex-wrap align-items-center">
                                            <div class="thumb">
                                                <img src="/template-assets/digihyip/images/dashboard/item5.png" alt="dashboard">
                                            </div>
                                            <p class="name">Jibon Khan</p>
                                        </div>
                                    </td>
                                    <td data-label="Amount"><span class="amount">$2500</span></td>
                                    <td data-label="Wallet"><span class="wallet">Paypal</span></td>
                                    <td data-label="Date"><span class="date">25 May 2021</span></td>
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
                                <p>Maecenas tempus tellus egcondi entuhoncus seuam semper libero sit amet adipiscing sque sesum.amuam nunc, blandit vel, luctus pvinar hendrerilorem. aecenas nec odio</p>
                                <h3 class="name">Rasel Pranto</h3>
                                <span class="designation text-white">Front-end Web Developer</span>
                            </div>
                        </div>
                        <div class="single-slide">
                            <div class="testimonial__content">
                                <div class="icon"><i class="fas fa-quote-left"></i></div>
                                <p>Maecenas tempus tellus egcondi entuhoncus seuam semper libero sit amet adipiscing sque sesum.amuam nunc, blandit vel, luctus pvinar hendrerilorem. aecenas nec odio</p>
                                <h3 class="name">Munna Ahmed</h3>
                                <span class="designation text-white">Front-end Web Developer</span>
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
                        <h2 class="section__header-title">See Our Latest Blog & Tips</h2>
                        <p>Aenean vulputate eleifend tellus. Aenean leo ligul porttitoeu consequat vitae eleifend.</p>
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
                        <img src="/template-assets/digihyip/images/brand/item1.png" alt="brand">
                    </div>
                </div>
                <div class="single-slide">
                    <div class="brand__item">
                        <img src="/template-assets/digihyip/images/brand/item1.png" alt="brand">
                    </div>
                </div>
                <div class="single-slide">
                    <div class="brand__item">
                        <img src="/template-assets/digihyip/images/brand/item1.png" alt="brand">
                    </div>
                </div>
                <div class="single-slide">
                    <div class="brand__item">
                        <img src="/template-assets/digihyip/images/brand/item1.png" alt="brand">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Brand Section Ends Here -->


    <!-- Footer Section Starts Here -->
    <footer class="footer-section section-bg">
        <div class="footer-top padding-top pb-5 border-bottom border--white">
            <div class="container">
                <div class="row gy-5 justify-content-md-between">
                    <div class="col-xl-3 col-lg-3 col-sm-6">
                        <div class="footer__widget">
                            <h3 class="widget-title">About Company</h3>
                            <p>Aliquam orci a nullam tempor sapien  graonec enim ipsum porta justo velna an auctor undo congue magna laoreet augue sapien</p>
                            <ul class="social-links">
                                <li><a class="facebook-bg" href="#0"><i class="lab la-facebook-f"></i></a></li>
                                <li><a class="twitter-bg" href="#0"><i class="lab la-twitter"></i></a></li>
                                <li><a class="instagram-bg" href="#0"><i class="lab la-instagram"></i></a></li>
                                <li><a class="pinterest-bg" href="#0"><i class="lab la-pinterest"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-sm-6">
                        <div class="footer__widget">
                            <h3 class="widget-title">Useful Links</h3>
                            <ul class="footer-links">
                                <li><a href="plan.html">Hyip Plan</a></li>
                                <li><a href="privacy-policy.html">Privacy & Policy</a></li>
                                <li><a href="dashboard.html">Dashboard</a></li>
                                <li><a href="sign-in.html">Login Account</a></li>
                                <li><a href="terms-conditions.html">Terms & Conditions</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-sm-6">
                        <div class="footer__widget">
                            <h3 class="widget-title">Company</h3>
                            <ul class="footer-links">
                                <li><a href="about.html">About</a></li>
                                <li><a href="blog.html">Blog Post</a></li>
                                <li><a href="dashboard.html">User Dashboard</a></li>
                                <li><a href="faq.html">Faq</a></li>
                                <li><a href="contact.html">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-sm-6">
                        <div class="footer__widget">
                            <h3 class="widget-title">Gateway</h3>
                            <ul class="footer-links">
                                <li><a href="dashboard.html">Paypal</a></li>
                                <li><a href="dashboard.html">Bitcoinway</a></li>
                                <li><a href="dashboard.html">Webanking</a></li>
                                <li><a href="dashboard.html">Trusted Way</a></li>
                                <li><a href="dashboard.html">Gambing</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <p class="copyright text-center py-3">
                    Copyright &copy; 2021 All Rights Reserved.
                </p>
            </div>
        </div>
    </footer>
    <!-- Footer Section Ends Here -->
@endsection
