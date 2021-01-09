<?php
include_once("./models/user.php");
include_once("./session.php");
?>

<div class="body">
    <?php if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['loginEmail']) && isset($_POST['loginPassword'])) {
            User::login($_POST['loginEmail'], $_POST['loginPassword']);
            header("Location: index.php?controller=pages&action=home");
            return;
        }
        if (isset($_POST['logout']) && $_POST['logout']) {
            session_destroy();
            header("Location: index.php?controller=pages&action=home");
            return;
        }
        //  else {
        //     header("Location: index.php?controller=pages&action=home");
        //     return;
        // }
        echo $_POST['email'];
        User::register($_POST['email'], $_POST['password'], $_POST['name'], $_POST['address']);
        header("Location: index.php?controller=pages&action=register");
        return;
    } ?>
    <div class="main-content">
        <div class="home-page__body ">
            <div class="hero ">
                <div class="hero__inner container">
                    <div class="row no-gutter">
                        <!-- category -->
                        <div class="hero__categories-wrap hide-on-mobile-tablet col l-2 c-0 m-0 ">
                            <h4 class="hero__category-heading">
                                DANH MỤC
                            </h4>
                            <ul class="hero__category-list">
                                <li class="hero__category-item">
                                    <a href="" class="hero__category-item-link">
                                        Tất cả sản phẩm
                                    </a>
                                </li>
                                <li class="hero__category-item hero__category-item--has-child">
                                    <a href="" class="hero__category-item-link">
                                        <span>Ohui</span>
                                        <svg x="0px" y="0px" viewBox="0 0 512 512" class=" category__item-link-icon">
                                            <g>
                                                <g>
                                                    <path d="M367.954,213.588L160.67,5.872c-7.804-7.819-20.467-7.831-28.284-0.029c-7.819,7.802-7.832,20.465-0.03,28.284 l207.299,207.731c7.798,7.798,7.798,20.486-0.015,28.299L132.356,477.873c-7.802,7.819-7.789,20.482,0.03,28.284 c3.903,3.896,9.016,5.843,14.127,5.843c5.125,0,10.25-1.958,14.157-5.873l207.269-207.701 C391.333,275.032,391.333,236.967,367.954,213.588z">
                                                    </path>
                                                </g>
                                            </g>
                                        </svg>
                                    </a>
                                    <ul class="category-child__list">
                                        <li class="category-child__item">
                                            <a href="" class="category-child__item-link">
                                                <span>Ohui Thefirst Tái Sinh </span>
                                            </a>
                                        </li>
                                        <li class="category-child__item">
                                            <a href="" class="category-child__item-link">
                                                <span>Ohui Dưỡng Trắng</span>
                                            </a>
                                        </li>
                                        <li class="category-child__item">
                                            <a href="" class="category-child__item-link">
                                                <span>Ohui Make Up </span>
                                            </a>
                                        </li>
                                        <li class="category-child__item">
                                            <a href="" class="category-child__item-link">
                                                <span>Ohui Chống Nắng</span>
                                            </a>
                                        </li>
                                        <li class="category-child__item">
                                            <a href="" class="category-child__item-link">
                                                <span>Ohui Prime Advancer </span>
                                            </a>
                                        </li>
                                        <li class="category-child__item">
                                            <a href="" class="category-child__item-link">
                                                <span>Ohui Dưỡng Ẩm</span>
                                            </a>
                                        </li>
                                        <li class="category-child__item">
                                            <a href="" class="category-child__item-link">
                                                <span>Ohui Chống Lão Hóa </span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="hero__category-item hero__category-item--has-child">
                                    <a href="" class="hero__category-item-link">
                                        <span>Whoo</span>
                                        <svg x="0px" y="0px" viewBox="0 0 512 512" class=" category__item-link-icon">
                                            <g>
                                                <g>
                                                    <path d="M367.954,213.588L160.67,5.872c-7.804-7.819-20.467-7.831-28.284-0.029c-7.819,7.802-7.832,20.465-0.03,28.284 l207.299,207.731c7.798,7.798,7.798,20.486-0.015,28.299L132.356,477.873c-7.802,7.819-7.789,20.482,0.03,28.284 c3.903,3.896,9.016,5.843,14.127,5.843c5.125,0,10.25-1.958,14.157-5.873l207.269-207.701 C391.333,275.032,391.333,236.967,367.954,213.588z">
                                                    </path>
                                                </g>
                                            </g>
                                        </svg>
                                    </a>
                                    <ul class="category-child__list">
                                        <li class="category-child__item">
                                            <a href="" class="category-child__item-link">
                                                <span>Whoo Bichup </span>
                                            </a>
                                        </li>
                                        <li class="category-child__item">
                                            <a href="" class="category-child__item-link">
                                                <span>Whoo Dưỡng Ẩm</span>
                                            </a>
                                        </li>
                                        <li class="category-child__item">
                                            <a href="" class="category-child__item-link">
                                                <span>Whoo Dưỡng Trắng Trị Nám </span>
                                            </a>
                                        </li>
                                        <li class="category-child__item">
                                            <a href="" class="category-child__item-link">
                                                <span>Whoo cấp nước chống oxy hóa</span>
                                            </a>
                                        </li>
                                        <li class="category-child__item">
                                            <a href="" class="category-child__item-link">
                                                <span>Whoo Make Up</span>
                                            </a>
                                        </li>
                                        <li class="category-child__item">
                                            <a href="" class="category-child__item-link">
                                                <span>Whoo Tái Sinh </span>
                                            </a>
                                        </li>
                                        <li class="category-child__item">
                                            <a href="" class="category-child__item-link">
                                                <span>Whoo Chống Nắng</span>
                                            </a>
                                        </li>
                                        <li class="category-child__item">
                                            <a href="" class="category-child__item-link">
                                                <span>Whoo Spa </span>
                                            </a>
                                        </li>
                                        <li class="category-child__item">
                                            <a href="" class="category-child__item-link">
                                                <span>Whoo Chống Lão Hóa</span>
                                            </a>
                                        </li>
                                        <li class="category-child__item">
                                            <a href="" class="category-child__item-link">
                                                <span>Whoo Hoàn Lưu Cao </span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="hero__category-item hero__category-item--has-child">
                                    <a href="" class="hero__category-item-link">
                                        <span>Su:m37</span>
                                        <svg x="0px" y="0px" viewBox="0 0 512 512" class=" category__item-link-icon">
                                            <g>
                                                <g>
                                                    <path d="M367.954,213.588L160.67,5.872c-7.804-7.819-20.467-7.831-28.284-0.029c-7.819,7.802-7.832,20.465-0.03,28.284 l207.299,207.731c7.798,7.798,7.798,20.486-0.015,28.299L132.356,477.873c-7.802,7.819-7.789,20.482,0.03,28.284 c3.903,3.896,9.016,5.843,14.127,5.843c5.125,0,10.25-1.958,14.157-5.873l207.269-207.701 C391.333,275.032,391.333,236.967,367.954,213.588z">
                                                    </path>
                                                </g>
                                            </g>
                                        </svg>
                                    </a>
                                    <ul class="category-child__list">
                                        <li class="category-child__item">
                                            <a href="" class="category-child__item-link">
                                                <span>Su:m37 Tái Sinh</span>
                                            </a>
                                        </li>
                                        <li class="category-child__item">
                                            <a href="" class="category-child__item-link">
                                                <span>Sm:m37 Chống Lão Hóa </span>
                                            </a>
                                        </li>
                                        <li class="category-child__item">
                                            <a href="" class="category-child__item-link">
                                                <span>Sm:m37 Dưỡng Trắng </span>
                                            </a>
                                        </li>
                                        <li class="category-child__item">
                                            <a href="" class="category-child__item-link">
                                                <span>Su:m37 cấp ẩm water full </span>
                                            </a>
                                        </li>
                                        <li class="category-child__item">
                                            <a href="" class="category-child__item-link">
                                                <span>Su:m37 Làm Sạch </span>
                                            </a>
                                        </li>
                                        <li class="category-child__item">
                                            <a href="" class="category-child__item-link">
                                                <span>Su:m37 Chống Nắng Sun Away</span>
                                            </a>
                                        </li>
                                        <li class="category-child__item">
                                            <a href="" class="category-child__item-link">
                                                <span>Su:m37 Make Up</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="hero__category-item hero__category-item--has-child">
                                    <a href="" class="hero__category-item-link">
                                        <span>Set mini</span>
                                        <svg x="0px" y="0px" viewBox="0 0 512 512" class=" category__item-link-icon">
                                            <g>
                                                <g>
                                                    <path d="M367.954,213.588L160.67,5.872c-7.804-7.819-20.467-7.831-28.284-0.029c-7.819,7.802-7.832,20.465-0.03,28.284 l207.299,207.731c7.798,7.798,7.798,20.486-0.015,28.299L132.356,477.873c-7.802,7.819-7.789,20.482,0.03,28.284 c3.903,3.896,9.016,5.843,14.127,5.843c5.125,0,10.25-1.958,14.157-5.873l207.269-207.701 C391.333,275.032,391.333,236.967,367.954,213.588z">
                                                    </path>
                                                </g>
                                            </g>
                                        </svg>
                                    </a>
                                    <ul class="category-child__list">
                                        <li class="category-child__item">
                                            <a href="" class="category-child__item-link">
                                                <span>Set Ohui Mini</span>
                                            </a>
                                        </li>
                                        <li class="category-child__item">
                                            <a href="" class="category-child__item-link">
                                                <span>Set Whoo Mini</span>
                                            </a>
                                        </li>
                                        <li class="category-child__item">
                                            <a href="" class="category-child__item-link">
                                                <span>Set Su:m37 Mini </span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="hero__category-item">
                                    <a href="" class="hero__category-item-link">
                                        Thực phẩm chức năng
                                    </a>
                                </li>
                                <li class="hero__category-item">
                                    <a href="" class="hero__category-item-link">
                                        Dịch vụ
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- banner -->
                        <div class="hero__banner col l-10 c-12 m-12">
                            <div class="hero__banner-wrap">
                                <div class="prev-btn banner__btn banner__btn--hero"><svg class="btn-icon" enable-background="new 0 0 13 20" viewBox="0 0 13 20" x="0" y="0">
                                        <polygon points="4.2 10 12.1 2.1 10 -.1 1 8.9 -.1 10 1 11 10 20 12.1 17.9"></polygon>
                                    </svg>
                                </div>
                                <div class="next-btn  banner__btn banner__btn--hero">
                                    <svg class=" btn-icon" enable-background="new 0 0 13 21" viewBox="0 0 13 21" x="0" y="0">
                                        <polygon points="11.1 9.9 2.1 .9 -.1 3.1 7.9 11 -.1 18.9 2.1 21 11.1 12 12.1 11"></polygon>
                                    </svg>
                                </div>
                                <div class="hero__banner-carousels">
                                    <a href="" class="hero__banner-carousel-link"><img src="assets/img/hero-banner1.png" alt="" class="hero__banner-carousel-img"></a>
                                    <a href="" class="hero__banner-carousel-link"><img src="assets/img/hero-banner2.png" alt="" class="hero__banner-carousel-img"></a>
                                    <a href="" class="hero__banner-carousel-link"><img src="assets/img/hero-banner3.png" alt="" class="hero__banner-carousel-img"></a>
                                    <a href="" class="hero__banner-carousel-link"><img src="assets/img/hero-banner4.png" alt="" class="hero__banner-carousel-img"></a>
                                    <a href="" class="hero__banner-carousel-link"><img src="assets/img/hero-banner5.png" alt="" class="hero__banner-carousel-img"></a>
                                </div>
                                <div class="hero__banner-fixed hide-on-mobile-tablet">
                                    <div class="hero__banner-fixed-primary">
                                        <a href="" class="hero__banner-fixed-link"><img src="assets/img/fixed-banner1.png" alt="" class="hero__banner-fixed-img"></a>
                                    </div>
                                    <div class="hero__banner-fixed-secondary">
                                        <a href="" class="hero__banner-fixed-link"><img src="assets/img/fix-banner2.png" alt="" class="hero__banner-fixed-img"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="category__mobile hidden">
                                <ul class="category__mobile-list">
                                    <li class="category__mobile-item">
                                        <a href="" class="category__mobile-item-link">
                                            Ohui
                                        </a>
                                    </li>
                                    <li class="category__mobile-item">
                                        <a href="" class="category__mobile-item-link">
                                            <span> Whoo</span>
                                        </a>
                                    </li>
                                    <li class="category__mobile-item">
                                        <a href="" class="category__mobile-item-link">
                                            <span> Su:m37</span>
                                        </a>
                                    </li>
                                    <li class="category__mobile-item">
                                        <a href="" class="category__mobile-item-link">
                                            <span> Set mini</span>
                                        </a>
                                    </li>
                                    <li class="category__mobile-item">
                                        <a href="" class="category__mobile-item-link">
                                            <span>Thực phẩm chức năng</span>
                                        </a>
                                    </li>
                                    <li class="category__mobile-item">
                                        <a href="" class="category__mobile-item-link">
                                            <span>Dịch vụ</span>
                                        </a>
                                    </li>


                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- offer section -->
            <div class="spacing ">
                <div class="offers__item-wrap ">
                    <div class="offers__inner   container">
                        <div class="offers__header">
                            <div class="offers__header-title dashline-bottom ">
                                FLASH SALES
                            </div>
                        </div>
                        <div class="offers__body">
                            <div class="offers__body-left">
                                <div class="offers__item offers__item--primary">
                                    <div class="offers__item-img">
                                        <a href="" class="offers__item-link">
                                            <img src="assets/img/primary-offers.png" alt="">
                                        </a>
                                        <span class="offers__item-sales-value">58%</span>
                                        <div class="offers__item-btn-group">
                                            <a href="" class="offers__item-btn offers__item-btn--addcart">
                                                <svg viewBox="0 -31 512.00033 512" xmlns="http://www.w3.org/2000/svg" class="offers__item-btn-icon">
                                                    <path d="m166 300.003906h271.003906c6.710938 0 12.597656-4.4375 14.414063-10.882812l60.003906-210.003906c1.289063-4.527344.40625-9.390626-2.433594-13.152344-2.84375-3.75-7.265625-5.964844-11.984375-5.964844h-365.632812l-10.722656-48.25c-1.523438-6.871094-7.617188-11.75-14.648438-11.75h-91c-8.289062 0-15 6.710938-15 15 0 8.292969 6.710938 15 15 15h78.960938l54.167968 243.75c-15.9375 6.929688-27.128906 22.792969-27.128906 41.253906 0 24.8125 20.1875 45 45 45h271.003906c8.292969 0 15-6.707031 15-15 0-8.289062-6.707031-15-15-15h-271.003906c-8.261719 0-15-6.722656-15-15s6.738281-15 15-15zm0 0">
                                                    </path>
                                                    <path d="m151 405.003906c0 24.816406 20.1875 45 45.003906 45 24.8125 0 45-20.183594 45-45 0-24.8125-20.1875-45-45-45-24.816406 0-45.003906 20.1875-45.003906 45zm0 0">
                                                    </path>
                                                    <path d="m362.003906 405.003906c0 24.816406 20.1875 45 45 45 24.816406 0 45-20.183594 45-45 0-24.8125-20.183594-45-45-45-24.8125 0-45 20.1875-45 45zm0 0">
                                                    </path>
                                                </svg>
                                            </a>
                                            <button class="offers__item-btn offers__item-btn--favorite">
                                                <svg viewBox="0 0 24 20 " class="offers__item-btn-icon offers__item-btn-icon-favorite">
                                                    <path class="change_filter-favorite" d="M19.469 1.262c-5.284-1.53-7.47 4.142-7.47 4.142S9.815-.269 4.532 1.262C-1.937 3.138.44 13.832 12 19.333c11.559-5.501 13.938-16.195 7.469-18.07z" stroke="#FF424F" stroke-width="1.5" fill="none" fill-rule="evenodd" stroke-linejoin="round"></path>
                                                </svg>
                                            </button>
                                        </div>

                                    </div>
                                    <div class="offers__item-content">
                                        <a href="" class="offers__item-title">Set tái sinh Su:M37 Losec Summa 5 món</a>
                                        <div class="offers__item-rating">
                                            <i class="fas fa-star offers__item-rating-icon"></i>
                                            <i class="fas fa-star offers__item-rating-icon"></i>
                                            <i class="fas fa-star offers__item-rating-icon"></i>
                                            <i class="fas fa-star offers__item-rating-icon"></i>
                                            <i class="fas fa-star offers__item-rating-icon"></i>
                                        </div>
                                        <div class="offers__item-price">
                                            <div class="offers__item-price-sale">
                                                850.000đ
                                            </div>
                                            <div class="offers__item-price-cost">
                                                2.000.000đ
                                            </div>
                                        </div>
                                        <div class="offers__item-sales">
                                            <div class="offers__item-sales-available">Còn lại : <span class="value"> 80 </span></div>
                                            <div class="offers__item-sales-sold">Đã bán : <span class="value"> 120 </span></div>
                                        </div>
                                        <div class="offers__item-sales-ranger">
                                            <div class="offers__item_sales-ranger-value" style="width: 60%;"></div>
                                        </div>
                                        <div class="offers__item-sales-times">
                                            <div class="offers__item-sales-time-title">Thời gian còn lại :</div>
                                            <div class="offers__item-countdonwn">
                                                <div class="countdown__item">
                                                    <div class="countdown__item-value day">
                                                        00
                                                    </div>
                                                    <div class="countdown__item-title">
                                                        Ngày
                                                    </div>
                                                </div>
                                                <div class="countdown__item">
                                                    <div class="countdown__item-value day">
                                                        00
                                                    </div>
                                                    <div class="countdown__item-title">
                                                        Giờ
                                                    </div>
                                                </div>
                                                <div class="countdown__item">
                                                    <div class="countdown__item-value day">
                                                        00
                                                    </div>
                                                    <div class="countdown__item-title">
                                                        Phút
                                                    </div>
                                                </div>
                                                <div class="countdown__item">
                                                    <div class="countdown__item-value day">
                                                        00
                                                    </div>
                                                    <div class="countdown__item-title">
                                                        Giây
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="offers__body-right">
                                <div class="offers__item offers__item--second">
                                    <div class="offers__item-img">
                                        <a href="" class="offers__item-link">
                                            <img src="assets/img/sales-r-item1.png" alt="">
                                        </a>
                                        <span class="offers__item-sales-value">36%</span>
                                        <div class="offers__item-btn-group">
                                            <a href="" class="offers__item-btn offers__item-btn--addcart">
                                                <svg viewBox="0 -31 512.00033 512" xmlns="http://www.w3.org/2000/svg" class="offers__item-btn-icon">
                                                    <path d="m166 300.003906h271.003906c6.710938 0 12.597656-4.4375 14.414063-10.882812l60.003906-210.003906c1.289063-4.527344.40625-9.390626-2.433594-13.152344-2.84375-3.75-7.265625-5.964844-11.984375-5.964844h-365.632812l-10.722656-48.25c-1.523438-6.871094-7.617188-11.75-14.648438-11.75h-91c-8.289062 0-15 6.710938-15 15 0 8.292969 6.710938 15 15 15h78.960938l54.167968 243.75c-15.9375 6.929688-27.128906 22.792969-27.128906 41.253906 0 24.8125 20.1875 45 45 45h271.003906c8.292969 0 15-6.707031 15-15 0-8.289062-6.707031-15-15-15h-271.003906c-8.261719 0-15-6.722656-15-15s6.738281-15 15-15zm0 0">
                                                    </path>
                                                    <path d="m151 405.003906c0 24.816406 20.1875 45 45.003906 45 24.8125 0 45-20.183594 45-45 0-24.8125-20.1875-45-45-45-24.816406 0-45.003906 20.1875-45.003906 45zm0 0">
                                                    </path>
                                                    <path d="m362.003906 405.003906c0 24.816406 20.1875 45 45 45 24.816406 0 45-20.183594 45-45 0-24.8125-20.183594-45-45-45-24.8125 0-45 20.1875-45 45zm0 0">
                                                    </path>
                                                </svg>
                                            </a>
                                            <button class="offers__item-btn offers__item-btn--favorite">
                                                <svg viewBox="0 0 24 20 " class="offers__item-btn-icon offers__item-btn-icon-favorite">
                                                    <path class="change_filter-favorite" d="M19.469 1.262c-5.284-1.53-7.47 4.142-7.47 4.142S9.815-.269 4.532 1.262C-1.937 3.138.44 13.832 12 19.333c11.559-5.501 13.938-16.195 7.469-18.07z" stroke="#FF424F" stroke-width="1.5" fill="none" fill-rule="evenodd" stroke-linejoin="round"></path>
                                                </svg>
                                            </button>
                                        </div>

                                    </div>
                                    <div class="offers__item-content">
                                        <a href="" class="offers__item-title">Bộ cấp Nước Se Khít Lỗ Chân Lông Sum37 Water-full Set
                                            5p</a>
                                        <div class="offers__item-rating">
                                            <i class="fas fa-star offers__item-rating-icon"></i>
                                            <i class="fas fa-star offers__item-rating-icon"></i>
                                            <i class="fas fa-star offers__item-rating-icon"></i>
                                            <i class="fas fa-star offers__item-rating-icon"></i>
                                            <i class="fas fa-star offers__item-rating-icon"></i>
                                        </div>
                                        <div class="offers__item-price">
                                            <div class="offers__item-price-sale">
                                                450.000
                                            </div>
                                            <div class="offers__item-price-cost">
                                                700.000đ
                                            </div>
                                        </div>
                                        <div class="offers__item-sales">
                                            <div class="offers__item-sales-available">Còn lại : <span class="value">52 </span></div>
                                            <div class="offers__item-sales-sold">Đã bán : <span class="value"> 148 </span></div>
                                        </div>
                                        <div class="offers__item-sales-ranger">
                                            <div class="offers__item_sales-ranger-value" style="width: 74%;"></div>
                                        </div>
                                        <div class="offers__item-sales-times">
                                            <div class="offers__item-sales-time-title">Thời gian còn lại :</div>
                                            <div class="offers__item-countdonwn">
                                                <div class="countdown__item">
                                                    <div class="countdown__item-value day">
                                                        00
                                                    </div>
                                                    <div class="countdown__item-title">
                                                        Ngày
                                                    </div>
                                                </div>
                                                <div class="countdown__item">
                                                    <div class="countdown__item-value day">
                                                        00
                                                    </div>
                                                    <div class="countdown__item-title">
                                                        Giờ
                                                    </div>
                                                </div>
                                                <div class="countdown__item">
                                                    <div class="countdown__item-value day">
                                                        00
                                                    </div>
                                                    <div class="countdown__item-title">
                                                        Phút
                                                    </div>
                                                </div>
                                                <div class="countdown__item">
                                                    <div class="countdown__item-value day">
                                                        00
                                                    </div>
                                                    <div class="countdown__item-title">
                                                        Giây
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="offers__item offers__item--teriary">
                                    <div class="offers__item-img">
                                        <a href="" class="offers__item-link">
                                            <img src="assets/img/sales-r-item2.png" alt="">
                                        </a>
                                        <span class="offers__item-sales-value">70%</span>
                                        <div class="offers__item-btn-group">
                                            <a href="" class="offers__item-btn offers__item-btn--addcart">
                                                <svg viewBox="0 -31 512.00033 512" xmlns="http://www.w3.org/2000/svg" class="offers__item-btn-icon">
                                                    <path d="m166 300.003906h271.003906c6.710938 0 12.597656-4.4375 14.414063-10.882812l60.003906-210.003906c1.289063-4.527344.40625-9.390626-2.433594-13.152344-2.84375-3.75-7.265625-5.964844-11.984375-5.964844h-365.632812l-10.722656-48.25c-1.523438-6.871094-7.617188-11.75-14.648438-11.75h-91c-8.289062 0-15 6.710938-15 15 0 8.292969 6.710938 15 15 15h78.960938l54.167968 243.75c-15.9375 6.929688-27.128906 22.792969-27.128906 41.253906 0 24.8125 20.1875 45 45 45h271.003906c8.292969 0 15-6.707031 15-15 0-8.289062-6.707031-15-15-15h-271.003906c-8.261719 0-15-6.722656-15-15s6.738281-15 15-15zm0 0">
                                                    </path>
                                                    <path d="m151 405.003906c0 24.816406 20.1875 45 45.003906 45 24.8125 0 45-20.183594 45-45 0-24.8125-20.1875-45-45-45-24.816406 0-45.003906 20.1875-45.003906 45zm0 0">
                                                    </path>
                                                    <path d="m362.003906 405.003906c0 24.816406 20.1875 45 45 45 24.816406 0 45-20.183594 45-45 0-24.8125-20.183594-45-45-45-24.8125 0-45 20.1875-45 45zm0 0">
                                                    </path>
                                                </svg>
                                            </a>
                                            <button class="offers__item-btn offers__item-btn--favorite">
                                                <svg viewBox="0 0 24 20 " class="offers__item-btn-icon offers__item-btn-icon-favorite">
                                                    <path class="change_filter-favorite" d="M19.469 1.262c-5.284-1.53-7.47 4.142-7.47 4.142S9.815-.269 4.532 1.262C-1.937 3.138.44 13.832 12 19.333c11.559-5.501 13.938-16.195 7.469-18.07z" stroke="#FF424F" stroke-width="1.5" fill="none" fill-rule="evenodd" stroke-linejoin="round"></path>
                                                </svg>
                                            </button>
                                        </div>

                                    </div>
                                    <div class="offers__item-content">
                                        <a href="" class="offers__item-title">Set dưỡng trắng trị nám Whoo Gong Jin Hyang Seol 5 món</a>
                                        <div class="offers__item-rating">
                                            <i class="fas fa-star offers__item-rating-icon"></i>
                                            <i class="fas fa-star offers__item-rating-icon"></i>
                                            <i class="fas fa-star offers__item-rating-icon"></i>
                                            <i class="fas fa-star offers__item-rating-icon"></i>
                                            <i class="fas fa-star offers__item-rating-icon"></i>
                                        </div>
                                        <div class="offers__item-price">
                                            <div class="offers__item-price-sale">
                                                390.000
                                            </div>
                                            <div class="offers__item-price-cost">
                                                1.300.000đ
                                            </div>
                                        </div>
                                        <div class="offers__item-sales">
                                            <div class="offers__item-sales-available">Còn lại : <span class="value">30</span></div>
                                            <div class="offers__item-sales-sold">Đã bán : <span class="value">270</span></div>
                                        </div>
                                        <div class="offers__item-sales-ranger">
                                            <div class="offers__item_sales-ranger-value" style="width: 90%;"></div>
                                        </div>
                                        <div class="offers__item-sales-times">
                                            <div class="offers__item-sales-time-title">Thời gian còn lại :</div>
                                            <div class="offers__item-countdonwn">
                                                <div class="countdown__item">
                                                    <div class="countdown__item-value day">
                                                        00
                                                    </div>
                                                    <div class="countdown__item-title">
                                                        Ngày
                                                    </div>
                                                </div>
                                                <div class="countdown__item">
                                                    <div class="countdown__item-value day">
                                                        00
                                                    </div>
                                                    <div class="countdown__item-title">
                                                        Giờ
                                                    </div>
                                                </div>
                                                <div class="countdown__item">
                                                    <div class="countdown__item-value day">
                                                        00
                                                    </div>
                                                    <div class="countdown__item-title">
                                                        Phút
                                                    </div>
                                                </div>
                                                <div class="countdown__item">
                                                    <div class="countdown__item-value day">
                                                        00
                                                    </div>
                                                    <div class="countdown__item-title">
                                                        Giây
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end offer -->
            <!-- middle banner -->
            <div class="spacing container">
                <div class="middle__banner-inner">
                    <div class="middle__banner">
                        <div class="prev-btn banner__btn banner__btn--middle"><svg class="btn-icon" enable-background="new 0 0 13 20" viewBox="0 0 13 20" x="0" y="0">
                                <polygon points="4.2 10 12.1 2.1 10 -.1 1 8.9 -.1 10 1 11 10 20 12.1 17.9"></polygon>
                            </svg>
                        </div>
                        <div class="middle__banner-wrap">

                            <a href="" class="middle__banner-link" width="50%">
                                <img src="assets/img/middle-slide1.png" alt="" class="middle__banner-img" />
                            </a>
                            <a href="" class="middle__banner-link" width="50%">
                                <img src="assets/img/middle-slide2.png" alt="" class="middle__banner-img">
                            </a>
                            <a href="" class="middle__banner-link" width="50%">
                                <img src="assets/img/middle-slide3.png" alt="" class="middle__banner-img">
                            </a>
                            <a href="" class="middle__banner-link" width="50%">
                                <img src="assets/img/middle-slide4.png" alt="" class="middle__banner-img">
                            </a>
                        </div>
                        <div class="next-btn banner__btn banner__btn--middle ">
                            <svg class=" btn-icon" enable-background="new 0 0 13 21" viewBox="0 0 13 21" x="0" y="0">
                                <polygon points="11.1 9.9 2.1 .9 -.1 3.1 7.9 11 -.1 18.9 2.1 21 11.1 12 12.1 11"></polygon>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end middle banner -->
            <!-- Ohui product -->
            <div class="spacing container">
                <div class="product">
                    <div class="product__inner">
                        <div class="product__header">
                            <div class="product__header-title dashline-bottom ">
                                OHUI
                            </div>
                            <a href="" class="product__header-title-view-all">Xem tất cả
                                <i class="fas fa-chevron-right product__header-title-icon"></i>
                            </a>
                        </div>
                        <div class="product__body">
                            <div class="product__body-left">
                                <div class="product__body-inner">
                                    <a href="" class="product__item product__item--primary">
                                        <div class="product__item-img" style="background-image: url(assets/img/product1-primary.png)">
                                            <div class="product__sales-percent">
                                                <div class="product__sales-percent-value">10%</div>
                                                <div class="product__sales-percent-title">GIẢM</div>
                                            </div>
                                            <div class="product__add-to-cart-btn">
                                                <i class="fas fa-cart-plus product__add-to-cart-icon"></i>
                                            </div>
                                        </div>
                                        <div class="product__item-content">
                                            <div class="product__item-title">Set phấn phủ Ohui Ultimate Brightening Varnishing Pact</div>

                                            <div class="product__item-price">
                                                <div class="product__item-price-cost">
                                                    1.200.000
                                                </div>
                                                <div class="product__item-price-sale">
                                                    1.080.000đ
                                                </div>
                                            </div>
                                            <div class="product__item-rating-wrap">
                                                <div class="product__item-favarious-wrap">
                                                    <i class="fas fa-heart product__item-favarious"></i>
                                                    <i class="far fa-heart product__item-not-favarious "></i>
                                                </div>
                                                <div class="offers__item-rating">
                                                    <i class="fas fa-star offers__item-rating-icon"></i>
                                                    <i class="fas fa-star offers__item-rating-icon"></i>
                                                    <i class="fas fa-star offers__item-rating-icon"></i>
                                                    <i class="fas fa-star offers__item-rating-icon"></i>
                                                    <i class="fas fa-star offers__item-rating-icon"></i>
                                                </div>

                                            </div>
                                            <div class="product__bottom-wrap">
                                                <div class="product__brand">Ohui</div>
                                                <div class="product__made-in">Hàn Quốc</div>
                                            </div>
                                        </div>

                                    </a>
                                </div>
                            </div>
                            <div class="product__body-right">
                                <div class="grid">
                                    <div class="row">
                                        <div class="col l-4 m-6 c-6">
                                            <a href="" class="product__item ">
                                                <div class="product__item-img" style="background-image: url(assets/img/ohui-r1.png)">
                                                    <div class="product__sales-percent">
                                                        <div class="product__sales-percent-value">10%</div>
                                                        <div class="product__sales-percent-title">GIẢM</div>
                                                    </div>
                                                    <div class="product__add-to-cart-btn">
                                                        <i class="fas fa-cart-plus product__add-to-cart-icon"></i>
                                                    </div>
                                                </div>
                                                <div class="product__item-content">
                                                    <div class="product__item-title">Set kem mắt tái sinh Ohui The First
                                                        Geniture Eye Cream Edition Grand Blue
                                                    </div>

                                                    <div class="product__item-price">
                                                        <div class="product__item-price-cost">
                                                            4.600.000đ
                                                        </div>
                                                        <div class="product__item-price-sale">
                                                            4.140.000đ
                                                        </div>
                                                    </div>
                                                    <div class="product__item-rating-wrap">
                                                        <div class="product__item-favarious-wrap">
                                                            <i class="fas fa-heart product__item-favarious"></i>
                                                            <i class="far fa-heart product__item-not-favarious "></i>
                                                        </div>
                                                        <div class="offers__item-rating">
                                                            <i class="fas fa-star offers__item-rating-icon"></i>
                                                            <i class="fas fa-star offers__item-rating-icon"></i>
                                                            <i class="fas fa-star offers__item-rating-icon"></i>
                                                            <i class="fas fa-star offers__item-rating-icon"></i>
                                                            <i class="fas fa-star offers__item-rating-icon"></i>
                                                        </div>

                                                    </div>
                                                    <div class="product__bottom-wrap">
                                                        <div class="product__brand">Ohui</div>
                                                        <div class="product__made-in">Hàn Quốc</div>
                                                    </div>
                                                </div>

                                            </a>
                                        </div>
                                        <div class="col l-4 m-6 c-6">
                                            <a href="" class="product__item ">
                                                <div class="product__item-img" style="background-image: url(assets/img/ohui-r2.png);border : 1px solid rgba(0,0,0,0.09)">
                                                    <div class="product__sales-percent">
                                                        <div class="product__sales-percent-value">10%</div>
                                                        <div class="product__sales-percent-title">GIẢM</div>
                                                    </div>
                                                    <div class="product__add-to-cart-btn">
                                                        <i class="fas fa-cart-plus product__add-to-cart-icon"></i>
                                                    </div>
                                                </div>
                                                <div class="product__item-content">
                                                    <div class="product__item-title">Bộ kem đặc trị vùng mắt Ohui Age Recovery Wrinkle Cut
                                                        Serum. </div>

                                                    <div class="product__item-price">
                                                        <div class="product__item-price-cost">
                                                            2.300.000đ
                                                        </div>
                                                        <div class="product__item-price-sale">
                                                            2.070.000đ
                                                        </div>
                                                    </div>
                                                    <div class="product__item-rating-wrap">
                                                        <div class="product__item-favarious-wrap">
                                                            <i class="fas fa-heart product__item-favarious"></i>
                                                            <i class="far fa-heart product__item-not-favarious "></i>
                                                        </div>
                                                        <div class="offers__item-rating">
                                                            <i class="fas fa-star offers__item-rating-icon"></i>
                                                            <i class="fas fa-star offers__item-rating-icon"></i>
                                                            <i class="fas fa-star offers__item-rating-icon"></i>
                                                            <i class="fas fa-star offers__item-rating-icon"></i>
                                                            <i class="fas fa-star offers__item-rating-icon"></i>
                                                        </div>

                                                    </div>
                                                    <div class="product__bottom-wrap">
                                                        <div class="product__brand">Ohui</div>
                                                        <div class="product__made-in">Hàn Quốc</div>
                                                    </div>
                                                </div>

                                            </a>
                                        </div>
                                        <div class="col l-4 m-6 c-6">
                                            <a href="" class="product__item ">
                                                <div class="product__item-img" style="background-image: url(assets/img/ohui-r3.png);border: 1px solid rgba(0,0,0,0.09);">
                                                    <div class="product__sales-percent">
                                                        <div class="product__sales-percent-value">10%</div>
                                                        <div class="product__sales-percent-title">GIẢM</div>
                                                    </div>
                                                    <div class="product__add-to-cart-btn">
                                                        <i class="fas fa-cart-plus product__add-to-cart-icon"></i>
                                                    </div>
                                                </div>
                                                <div class="product__item-content">
                                                    <div class="product__item-title"> Set sữa rửa mặt Ohui Prime Gel Cleanser </div>

                                                    <div class="product__item-price">
                                                        <div class="product__item-price-cost">
                                                            1.150.000đ
                                                        </div>
                                                        <div class="product__item-price-sale">
                                                            1.035.000đ
                                                        </div>
                                                    </div>
                                                    <div class="product__item-rating-wrap">
                                                        <div class="product__item-favarious-wrap">
                                                            <i class="fas fa-heart product__item-favarious"></i>
                                                            <i class="far fa-heart product__item-not-favarious "></i>
                                                        </div>
                                                        <div class="offers__item-rating">
                                                            <i class="fas fa-star offers__item-rating-icon"></i>
                                                            <i class="fas fa-star offers__item-rating-icon"></i>
                                                            <i class="fas fa-star offers__item-rating-icon"></i>
                                                            <i class="fas fa-star offers__item-rating-icon"></i>
                                                            <i class="fas fa-star offers__item-rating-icon"></i>
                                                        </div>

                                                    </div>
                                                    <div class="product__bottom-wrap">
                                                        <div class="product__brand">Ohui</div>
                                                        <div class="product__made-in">Hàn Quốc</div>
                                                    </div>
                                                </div>

                                            </a>
                                        </div>
                                        <div class="col l-4 m-6 c-6">
                                            <a href="" class="product__item">
                                                <div class="product__item-img" style="background-image: url(assets/img/ohui-r4.png)">
                                                    <div class="product__sales-percent">
                                                        <div class="product__sales-percent-value">10%</div>
                                                        <div class="product__sales-percent-title">GIẢM</div>
                                                    </div>
                                                    <div class="product__add-to-cart-btn">
                                                        <i class="fas fa-cart-plus product__add-to-cart-icon"></i>
                                                    </div>
                                                </div>
                                                <div class="product__item-content">
                                                    <div class="product__item-title">Set tinh chất Ohui xanh Prime Advancer Ampoule Serum
                                                        phiên bản 90ml</div>

                                                    <div class="product__item-price">
                                                        <div class="product__item-price-cost">
                                                            3.300.000đ
                                                        </div>
                                                        <div class="product__item-price-sale">
                                                            2.970.000đ
                                                        </div>
                                                    </div>
                                                    <div class="product__item-rating-wrap">
                                                        <div class="product__item-favarious-wrap">
                                                            <i class="fas fa-heart product__item-favarious"></i>
                                                            <i class="far fa-heart product__item-not-favarious "></i>
                                                        </div>
                                                        <div class="offers__item-rating">
                                                            <i class="fas fa-star offers__item-rating-icon"></i>
                                                            <i class="fas fa-star offers__item-rating-icon"></i>
                                                            <i class="fas fa-star offers__item-rating-icon"></i>
                                                            <i class="fas fa-star offers__item-rating-icon"></i>
                                                            <i class="fas fa-star offers__item-rating-icon"></i>
                                                        </div>

                                                    </div>
                                                    <div class="product__bottom-wrap">
                                                        <div class="product__brand">Ohui</div>
                                                        <div class="product__made-in">Hàn Quốc</div>
                                                    </div>
                                                </div>

                                            </a>
                                        </div>
                                        <div class="col l-4 m-6 c-6">
                                            <a href="" class="product__item">
                                                <div class="product__item-img" style="background-image: url(assets/img/ohui-r5.png)">
                                                    <div class="product__sales-percent">
                                                        <div class="product__sales-percent-value">10%</div>
                                                        <div class="product__sales-percent-title">GIẢM</div>
                                                    </div>
                                                    <div class="product__add-to-cart-btn">
                                                        <i class="fas fa-cart-plus product__add-to-cart-icon"></i>
                                                    </div>
                                                </div>
                                                <div class="product__item-content">
                                                    <div class="product__item-title">Set Ohui chống lão hóa Age recovery </div>

                                                    <div class="product__item-price">
                                                        <div class="product__item-price-cost">
                                                            3.000.000đ
                                                        </div>
                                                        <div class="product__item-price-sale">
                                                            2.700.000đ
                                                        </div>
                                                    </div>
                                                    <div class="product__item-rating-wrap">
                                                        <div class="product__item-favarious-wrap">
                                                            <i class="fas fa-heart product__item-favarious"></i>
                                                            <i class="far fa-heart product__item-not-favarious "></i>
                                                        </div>
                                                        <div class="offers__item-rating">
                                                            <i class="fas fa-star offers__item-rating-icon"></i>
                                                            <i class="fas fa-star offers__item-rating-icon"></i>
                                                            <i class="fas fa-star offers__item-rating-icon"></i>
                                                            <i class="fas fa-star offers__item-rating-icon"></i>
                                                            <i class="fas fa-star offers__item-rating-icon"></i>
                                                        </div>

                                                    </div>
                                                    <div class="product__bottom-wrap">
                                                        <div class="product__brand">Ohui</div>
                                                        <div class="product__made-in">Hàn Quốc</div>
                                                    </div>
                                                </div>

                                            </a>
                                        </div>
                                        <div class="col l-4 m-6 c-6">
                                            <a href="" class="product__item">
                                                <div class="product__item-img" style="background-image: url(assets/img/ohui-r6.png)">
                                                    <div class="product__sales-percent">
                                                        <div class="product__sales-percent-value">10%</div>
                                                        <div class="product__sales-percent-title">GIẢM</div>
                                                    </div>
                                                    <div class="product__add-to-cart-btn">
                                                        <i class="fas fa-cart-plus product__add-to-cart-icon"></i>
                                                    </div>
                                                </div>
                                                <div class="product__item-content">
                                                    <div class="product__item-title">Set tinh chất Ohui Age Recovery</div>

                                                    <div class="product__item-price">
                                                        <div class="product__item-price-cost">
                                                            3.300.000đ
                                                        </div>
                                                        <div class="product__item-price-sale">
                                                            2.970.000đ
                                                        </div>
                                                    </div>
                                                    <div class="product__item-rating-wrap">
                                                        <div class="product__item-favarious-wrap">
                                                            <i class="fas fa-heart product__item-favarious"></i>
                                                            <i class="far fa-heart product__item-not-favarious "></i>
                                                        </div>
                                                        <div class="offers__item-rating">
                                                            <i class="fas fa-star offers__item-rating-icon"></i>
                                                            <i class="fas fa-star offers__item-rating-icon"></i>
                                                            <i class="fas fa-star offers__item-rating-icon"></i>
                                                            <i class="fas fa-star offers__item-rating-icon"></i>
                                                            <i class="fas fa-star offers__item-rating-icon"></i>
                                                        </div>

                                                    </div>
                                                    <div class="product__bottom-wrap">
                                                        <div class="product__brand">Ohui</div>
                                                        <div class="product__made-in">Hàn Quốc</div>
                                                    </div>
                                                </div>

                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end Ohui porduct -->
            <div class="spacing container">
                <div class="product">
                    <div class="product__inner">
                        <div class="product__header">
                            <div class="product__header-title dashline-bottom ">
                                WHOO
                            </div>
                            <a href="" class="product__header-title-view-all">Xem tất cả
                                <i class="fas fa-chevron-right product__header-title-icon"></i>
                            </a>
                        </div>
                        <div class="product__body">
                            <div class="product__body-left">
                                <div class="product__body-inner">
                                    <a href="" class="product__item product__item--primary">
                                        <div class="product__item-img" style="background-image: url(assets/img/product2-primary.png)">
                                            <div class="product__sales-percent">
                                                <div class="product__sales-percent-value">10%</div>
                                                <div class="product__sales-percent-title">GIẢM</div>
                                            </div>
                                            <div class="product__add-to-cart-btn">
                                                <i class="fas fa-cart-plus product__add-to-cart-icon"></i>
                                            </div>
                                        </div>
                                        <div class="product__item-content">
                                            <div class="product__item-title">Set kem chống nắng Whoo Seol radiant
                                                white tone up sunscreen SPF50+/PA++++ 50 ML</div>

                                            <div class="product__item-price">
                                                <div class="product__item-price-cost">
                                                    1.250.000đ
                                                </div>
                                                <div class="product__item-price-sale">
                                                    1.125.000đ
                                                </div>
                                            </div>
                                            <div class="product__item-rating-wrap">
                                                <div class="product__item-favarious-wrap">
                                                    <i class="fas fa-heart product__item-favarious"></i>
                                                    <i class="far fa-heart product__item-not-favarious "></i>
                                                </div>
                                                <div class="offers__item-rating">
                                                    <i class="fas fa-star offers__item-rating-icon"></i>
                                                    <i class="fas fa-star offers__item-rating-icon"></i>
                                                    <i class="fas fa-star offers__item-rating-icon"></i>
                                                    <i class="fas fa-star offers__item-rating-icon"></i>
                                                    <i class="fas fa-star offers__item-rating-icon"></i>
                                                </div>

                                            </div>
                                            <div class="product__bottom-wrap">
                                                <div class="product__brand"></div>
                                                <div class="product__made-in">Whoo</div>
                                            </div>
                                        </div>

                                    </a>
                                </div>
                            </div>
                            <div class="product__body-right">
                                <div class="grid">
                                    <div class="row">
                                        <div class="col l-4 m-6 c-6">
                                            <a href="" class="product__item ">
                                                <div class="product__item-img" style="background-image: url(assets/img/whoo-r1.png)">
                                                    <div class="product__sales-percent">
                                                        <div class="product__sales-percent-value">10%</div>
                                                        <div class="product__sales-percent-title">GIẢM</div>
                                                    </div>
                                                    <div class="product__add-to-cart-btn">
                                                        <i class="fas fa-cart-plus product__add-to-cart-icon"></i>
                                                    </div>
                                                </div>
                                                <div class="product__item-content">
                                                    <div class="product__item-title">Sữa rửa mặt dưỡng trắng Whoo Seol
                                                        Brightening Foam cleanser set 220ml
                                                    </div>

                                                    <div class="product__item-price">
                                                        <div class="product__item-price-cost">
                                                            900.000đ
                                                        </div>
                                                        <div class="product__item-price-sale">
                                                            819.000đ
                                                        </div>
                                                    </div>
                                                    <div class="product__item-rating-wrap">
                                                        <div class="product__item-favarious-wrap">
                                                            <i class="fas fa-heart product__item-favarious"></i>
                                                            <i class="far fa-heart product__item-not-favarious "></i>
                                                        </div>
                                                        <div class="offers__item-rating">
                                                            <i class="fas fa-star offers__item-rating-icon"></i>
                                                            <i class="fas fa-star offers__item-rating-icon"></i>
                                                            <i class="fas fa-star offers__item-rating-icon"></i>
                                                            <i class="fas fa-star offers__item-rating-icon"></i>
                                                            <i class="fas fa-star offers__item-rating-icon"></i>
                                                        </div>

                                                    </div>
                                                    <div class="product__bottom-wrap">
                                                        <div class="product__brand">Whoo</div>
                                                        <div class="product__made-in">Hàn Quốc</div>
                                                    </div>
                                                </div>

                                            </a>
                                        </div>
                                        <div class="col l-4 m-6 c-6">
                                            <a href="" class="product__item ">
                                                <div class="product__item-img" style="background-image: url(assets/img/whoo-r2.png)">
                                                    <div class="product__sales-percent">
                                                        <div class="product__sales-percent-value">10%</div>
                                                        <div class="product__sales-percent-title">GIẢM</div>
                                                    </div>
                                                    <div class="product__add-to-cart-btn">
                                                        <i class="fas fa-cart-plus product__add-to-cart-icon"></i>
                                                    </div>
                                                </div>
                                                <div class="product__item-content">
                                                    <div class="product__item-title">Set Son Whoo Luxury Lip Rouge màu mới tinh #88 hồng đỏ
                                                        đất</div>

                                                    <div class="product__item-price">
                                                        <div class="product__item-price-cost">
                                                            1.050.000đ
                                                        </div>
                                                        <div class="product__item-price-sale">
                                                            945.000đ
                                                        </div>
                                                    </div>
                                                    <div class="product__item-rating-wrap">
                                                        <div class="product__item-favarious-wrap">
                                                            <i class="fas fa-heart product__item-favarious"></i>
                                                            <i class="far fa-heart product__item-not-favarious "></i>
                                                        </div>
                                                        <div class="offers__item-rating">
                                                            <i class="fas fa-star offers__item-rating-icon"></i>
                                                            <i class="fas fa-star offers__item-rating-icon"></i>
                                                            <i class="fas fa-star offers__item-rating-icon"></i>
                                                            <i class="fas fa-star offers__item-rating-icon"></i>
                                                            <i class="fas fa-star offers__item-rating-icon"></i>
                                                        </div>

                                                    </div>
                                                    <div class="product__bottom-wrap">
                                                        <div class="product__brand">Whoo</div>
                                                        <div class="product__made-in">Hàn Quốc</div>
                                                    </div>
                                                </div>

                                            </a>
                                        </div>
                                        <div class="col l-4 m-6 c-6">
                                            <a href="" class="product__item ">
                                                <div class="product__item-img" style="background-image: url(assets/img/whoo-r3.png)">
                                                    <div class="product__sales-percent">
                                                        <div class="product__sales-percent-value">10%</div>
                                                        <div class="product__sales-percent-title">GIẢM</div>
                                                    </div>
                                                    <div class="product__add-to-cart-btn">
                                                        <i class="fas fa-cart-plus product__add-to-cart-icon"></i>
                                                    </div>
                                                </div>
                                                <div class="product__item-content">
                                                    <div class="product__item-title"> Set Son lì Whoo Velvet Lip Rouge dòng Hoàng Cung Màu đỏ
                                                        cam</div>

                                                    <div class="product__item-price">
                                                        <div class="product__item-price-cost">
                                                            1.050.000đ
                                                        </div>
                                                        <div class="product__item-price-sale">
                                                            945.000đ
                                                        </div>
                                                    </div>
                                                    <div class="product__item-rating-wrap">
                                                        <div class="product__item-favarious-wrap">
                                                            <i class="fas fa-heart product__item-favarious"></i>
                                                            <i class="far fa-heart product__item-not-favarious "></i>
                                                        </div>
                                                        <div class="offers__item-rating">
                                                            <i class="fas fa-star offers__item-rating-icon"></i>
                                                            <i class="fas fa-star offers__item-rating-icon"></i>
                                                            <i class="fas fa-star offers__item-rating-icon"></i>
                                                            <i class="fas fa-star offers__item-rating-icon"></i>
                                                            <i class="fas fa-star offers__item-rating-icon"></i>
                                                        </div>

                                                    </div>
                                                    <div class="product__bottom-wrap">
                                                        <div class="product__brand">Whoo</div>
                                                        <div class="product__made-in">Hàn Quốc</div>
                                                    </div>
                                                </div>

                                            </a>
                                        </div>
                                        <div class="col l-4 m-6 c-6">
                                            <a href="" class="product__item ">
                                                <div class="product__item-img" style="background-image: url(assets/img/whoo-r4.png)">
                                                    <div class="product__sales-percent">
                                                        <div class="product__sales-percent-value">10%</div>
                                                        <div class="product__sales-percent-title">GIẢM</div>
                                                    </div>
                                                    <div class="product__add-to-cart-btn">
                                                        <i class="fas fa-cart-plus product__add-to-cart-icon"></i>
                                                    </div>
                                                </div>
                                                <div class="product__item-content">
                                                    <div class="product__item-title">Set dưỡng ẩm whoo hồng gongjinhyang soo
                                                        vital hydrating 2PCS special set</div>

                                                    <div class="product__item-price">
                                                        <div class="product__item-price-cost">
                                                            2.600.000đ
                                                        </div>
                                                        <div class="product__item-price-sale">
                                                            2.340.000đ
                                                        </div>
                                                    </div>
                                                    <div class="product__item-rating-wrap">
                                                        <div class="product__item-favarious-wrap">
                                                            <i class="fas fa-heart product__item-favarious"></i>
                                                            <i class="far fa-heart product__item-not-favarious "></i>
                                                        </div>
                                                        <div class="offers__item-rating">
                                                            <i class="fas fa-star offers__item-rating-icon"></i>
                                                            <i class="fas fa-star offers__item-rating-icon"></i>
                                                            <i class="fas fa-star offers__item-rating-icon"></i>
                                                            <i class="fas fa-star offers__item-rating-icon"></i>
                                                            <i class="fas fa-star offers__item-rating-icon"></i>
                                                        </div>

                                                    </div>
                                                    <div class="product__bottom-wrap">
                                                        <div class="product__brand">Whoo</div>
                                                        <div class="product__made-in">Hàn Quốc</div>
                                                    </div>
                                                </div>

                                            </a>
                                        </div>
                                        <div class="col l-4 m-6 c-6">
                                            <a href="" class="product__item ">
                                                <div class="product__item-img" style="background-image: url(assets/img/whoo-r5.png)">
                                                    <div class="product__sales-percent">
                                                        <div class="product__sales-percent-value">10%</div>
                                                        <div class="product__sales-percent-title">GIẢM</div>
                                                    </div>
                                                    <div class="product__add-to-cart-btn">
                                                        <i class="fas fa-cart-plus product__add-to-cart-icon"></i>
                                                    </div>
                                                </div>
                                                <div class="product__item-content">
                                                    <div class="product__item-title">Set dưỡng ẩm whoo hồng gongjinhyang soo vital hydrating
                                                        special set</div>

                                                    <div class="product__item-price">
                                                        <div class="product__item-price-cost">
                                                            3.100.000đ
                                                        </div>
                                                        <div class="product__item-price-sale">
                                                            2.790.000đ
                                                        </div>
                                                    </div>
                                                    <div class="product__item-rating-wrap">
                                                        <div class="product__item-favarious-wrap">
                                                            <i class="fas fa-heart product__item-favarious"></i>
                                                            <i class="far fa-heart product__item-not-favarious "></i>
                                                        </div>
                                                        <div class="offers__item-rating">
                                                            <i class="fas fa-star offers__item-rating-icon"></i>
                                                            <i class="fas fa-star offers__item-rating-icon"></i>
                                                            <i class="fas fa-star offers__item-rating-icon"></i>
                                                            <i class="fas fa-star offers__item-rating-icon"></i>
                                                            <i class="fas fa-star offers__item-rating-icon"></i>
                                                        </div>

                                                    </div>
                                                    <div class="product__bottom-wrap">
                                                        <div class="product__brand">Whoo</div>
                                                        <div class="product__made-in">Hàn Quốc</div>
                                                    </div>
                                                </div>

                                            </a>
                                        </div>
                                        <div class="col l-4 m-6 c-6">
                                            <a href="" class="product__item ">
                                                <div class="product__item-img" style="background-image: url(assets/img/whoo-r6.png)">
                                                    <div class="product__sales-percent">
                                                        <div class="product__sales-percent-value">10%</div>
                                                        <div class="product__sales-percent-title">GIẢM</div>
                                                    </div>
                                                    <div class="product__add-to-cart-btn">
                                                        <i class="fas fa-cart-plus product__add-to-cart-icon"></i>
                                                    </div>
                                                </div>
                                                <div class="product__item-content">
                                                    <div class="product__item-title">Tẩy Trang Whoo Vital Hydrating Cleasing Water </div>

                                                    <div class="product__item-price">
                                                        <div class="product__item-price-cost">
                                                            950.000đ
                                                        </div>
                                                        <div class="product__item-price-sale">
                                                            855.000đ
                                                        </div>
                                                    </div>
                                                    <div class="product__item-rating-wrap">
                                                        <div class="product__item-favarious-wrap">
                                                            <i class="fas fa-heart product__item-favarious"></i>
                                                            <i class="far fa-heart product__item-not-favarious "></i>
                                                        </div>
                                                        <div class="offers__item-rating">
                                                            <i class="fas fa-star offers__item-rating-icon"></i>
                                                            <i class="fas fa-star offers__item-rating-icon"></i>
                                                            <i class="fas fa-star offers__item-rating-icon"></i>
                                                            <i class="fas fa-star offers__item-rating-icon"></i>
                                                            <i class="fas fa-star offers__item-rating-icon"></i>
                                                        </div>

                                                    </div>
                                                    <div class="product__bottom-wrap">
                                                        <div class="product__brand">Whoo</div>
                                                        <div class="product__made-in">Hàn Quốc</div>
                                                    </div>
                                                </div>

                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="spacing container">
                <div class="product">
                    <div class="product__inner">
                        <div class="product__header">
                            <div class="product__header-title dashline-bottom ">
                                Su:m37
                            </div>
                            <a href="" class="product__header-title-view-all">Xem tất cả
                                <i class="fas fa-chevron-right product__header-title-icon"></i>
                            </a>
                        </div>
                        <div class="product__body">
                            <div class="product__body-left">
                                <div class="product__body-inner">
                                    <a href="" class="product__item product__item--primary">
                                        <div class="product__item-img" style="background-image: url(assets/img/product3-primary.png)">
                                            <div class="product__sales-percent">
                                                <div class="product__sales-percent-value">10%</div>
                                                <div class="product__sales-percent-title">GIẢM</div>
                                            </div>
                                            <div class="product__add-to-cart-btn">
                                                <i class="fas fa-cart-plus product__add-to-cart-icon"></i>
                                            </div>
                                        </div>
                                        <div class="product__item-content">
                                            <div class="product__item-title">Xịt khoáng dưỡng da cấp ẩm Su:m37 Water-full
                                                Timeless Water Gel Mist 120ml</div>
                                            <div class="product__item-price">
                                                <div class="product__item-price-cost">
                                                    750.000
                                                </div>
                                                <div class="product__item-price-sale">
                                                    675.000đ
                                                </div>
                                            </div>
                                            <div class="product__item-rating-wrap">
                                                <div class="product__item-favarious-wrap">
                                                    <i class="fas fa-heart product__item-favarious"></i>
                                                    <i class="far fa-heart product__item-not-favarious "></i>
                                                </div>
                                                <div class="offers__item-rating">
                                                    <i class="fas fa-star offers__item-rating-icon"></i>
                                                    <i class="fas fa-star offers__item-rating-icon"></i>
                                                    <i class="fas fa-star offers__item-rating-icon"></i>
                                                    <i class="fas fa-star offers__item-rating-icon"></i>
                                                    <i class="fas fa-star offers__item-rating-icon"></i>
                                                </div>

                                            </div>
                                            <div class="product__bottom-wrap">
                                                <div class="product__brand">Su:m37</div>
                                                <div class="product__made-in">Hàn Quốc</div>
                                            </div>
                                        </div>

                                    </a>
                                </div>
                            </div>
                            <div class="product__body-right">
                                <div class="grid">
                                    <div class="row">
                                        <div class="col l-4 m-6 c-6">
                                            <a href="" class="product__item ">
                                                <div class="product__item-img" style="background-image: url(assets/img/su-r1.png)">
                                                    <div class="product__sales-percent">
                                                        <div class="product__sales-percent-value">10%</div>
                                                        <div class="product__sales-percent-title">GIẢM</div>
                                                    </div>
                                                    <div class="product__add-to-cart-btn">
                                                        <i class="fas fa-cart-plus product__add-to-cart-icon"></i>
                                                    </div>
                                                </div>
                                                <div class="product__item-content">
                                                    <div class="product__item-title">Set kem chống nắng Su:m37 Multi Effect
                                                    </div>

                                                    <div class="product__item-price">
                                                        <div class="product__item-price-cost">
                                                            1.100.000đ
                                                        </div>
                                                        <div class="product__item-price-sale">
                                                            990.000đ
                                                        </div>
                                                    </div>
                                                    <div class="product__item-rating-wrap">
                                                        <div class="product__item-favarious-wrap">
                                                            <i class="fas fa-heart product__item-favarious"></i>
                                                            <i class="far fa-heart product__item-not-favarious "></i>
                                                        </div>
                                                        <div class="offers__item-rating">
                                                            <i class="fas fa-star offers__item-rating-icon"></i>
                                                            <i class="fas fa-star offers__item-rating-icon"></i>
                                                            <i class="fas fa-star offers__item-rating-icon"></i>
                                                            <i class="fas fa-star offers__item-rating-icon"></i>
                                                            <i class="fas fa-star offers__item-rating-icon"></i>
                                                        </div>

                                                    </div>
                                                    <div class="product__bottom-wrap">
                                                        <div class="product__brand">Su:m37</div>
                                                        <div class="product__made-in">Hàn Quốc</div>
                                                    </div>
                                                </div>

                                            </a>
                                        </div>
                                        <div class="col l-4 m-6 c-6">
                                            <a href="" class="product__item ">
                                                <div class="product__item-img" style="background-image: url(assets/img/su-r2.png)">
                                                    <div class="product__sales-percent">
                                                        <div class="product__sales-percent-value">10%</div>
                                                        <div class="product__sales-percent-title">GIẢM</div>
                                                    </div>
                                                    <div class="product__add-to-cart-btn">
                                                        <i class="fas fa-cart-plus product__add-to-cart-icon"></i>
                                                    </div>
                                                </div>
                                                <div class="product__item-content">
                                                    <div class="product__item-title"> Nước thần Su:m37 Secret Essence 230ml</div>

                                                    <div class="product__item-price">
                                                        <div class="product__item-price-cost">
                                                            3.200.000đ
                                                        </div>
                                                        <div class="product__item-price-sale">
                                                            2.880.000đ
                                                        </div>
                                                    </div>
                                                    <div class="product__item-rating-wrap">
                                                        <div class="product__item-favarious-wrap">
                                                            <i class="fas fa-heart product__item-favarious"></i>
                                                            <i class="far fa-heart product__item-not-favarious "></i>
                                                        </div>
                                                        <div class="offers__item-rating">
                                                            <i class="fas fa-star offers__item-rating-icon"></i>
                                                            <i class="fas fa-star offers__item-rating-icon"></i>
                                                            <i class="fas fa-star offers__item-rating-icon"></i>
                                                            <i class="fas fa-star offers__item-rating-icon"></i>
                                                            <i class="fas fa-star offers__item-rating-icon"></i>
                                                        </div>

                                                    </div>
                                                    <div class="product__bottom-wrap">
                                                        <div class="product__brand">Su:m37</div>
                                                        <div class="product__made-in">Hàn Quốc</div>
                                                    </div>
                                                </div>

                                            </a>
                                        </div>
                                        <div class="col l-4 m-6 c-6">
                                            <a href="" class="product__item ">
                                                <div class="product__item-img" style="background-image: url(assets/img/su-r3.png)">
                                                    <div class="product__sales-percent">
                                                        <div class="product__sales-percent-value">10%</div>
                                                        <div class="product__sales-percent-title">GIẢM</div>
                                                    </div>
                                                    <div class="product__add-to-cart-btn">
                                                        <i class="fas fa-cart-plus product__add-to-cart-icon"></i>
                                                    </div>
                                                </div>
                                                <div class="product__item-content">
                                                    <div class="product__item-title"> Bộ dưỡng trắng da Su:m37 Water-full Radiant 3pcs Set
                                                    </div>

                                                    <div class="product__item-price">
                                                        <div class="product__item-price-cost">
                                                            3.800.000đ
                                                        </div>
                                                        <div class="product__item-price-sale">
                                                            3.420.000đ
                                                        </div>
                                                    </div>
                                                    <div class="product__item-rating-wrap">
                                                        <div class="product__item-favarious-wrap">
                                                            <i class="fas fa-heart product__item-favarious"></i>
                                                            <i class="far fa-heart product__item-not-favarious "></i>
                                                        </div>
                                                        <div class="offers__item-rating">
                                                            <i class="fas fa-star offers__item-rating-icon"></i>
                                                            <i class="fas fa-star offers__item-rating-icon"></i>
                                                            <i class="fas fa-star offers__item-rating-icon"></i>
                                                            <i class="fas fa-star offers__item-rating-icon"></i>
                                                            <i class="fas fa-star offers__item-rating-icon"></i>
                                                        </div>

                                                    </div>
                                                    <div class="product__bottom-wrap">
                                                        <div class="product__brand">Su:m37</div>
                                                        <div class="product__made-in">Hàn Quốc</div>
                                                    </div>
                                                </div>

                                            </a>
                                        </div>
                                        <div class="col l-4 m-6 c-6">
                                            <a href="" class="product__item ">
                                                <div class="product__item-img" style="background-image: url(assets/img/su-r4.png)">
                                                    <div class="product__sales-percent">
                                                        <div class="product__sales-percent-value">10%</div>
                                                        <div class="product__sales-percent-title">GIẢM</div>
                                                    </div>
                                                    <div class="product__add-to-cart-btn">
                                                        <i class="fas fa-cart-plus product__add-to-cart-icon"></i>
                                                    </div>
                                                </div>
                                                <div class="product__item-content">
                                                    <div class="product__item-title">Son lì Su:m37 Losec Suma Elixir Golden Lipstick tặng kèm
                                                        bảng son Su:m 37 </div>

                                                    <div class="product__item-price">
                                                        <div class="product__item-price-cost">
                                                            950.000đ
                                                        </div>
                                                        <div class="product__item-price-sale">
                                                            855.000đ
                                                        </div>
                                                    </div>
                                                    <div class="product__item-rating-wrap">
                                                        <div class="product__item-favarious-wrap">
                                                            <i class="fas fa-heart product__item-favarious"></i>
                                                            <i class="far fa-heart product__item-not-favarious "></i>
                                                        </div>
                                                        <div class="offers__item-rating">
                                                            <i class="fas fa-star offers__item-rating-icon"></i>
                                                            <i class="fas fa-star offers__item-rating-icon"></i>
                                                            <i class="fas fa-star offers__item-rating-icon"></i>
                                                            <i class="fas fa-star offers__item-rating-icon"></i>
                                                            <i class="fas fa-star offers__item-rating-icon"></i>
                                                        </div>

                                                    </div>
                                                    <div class="product__bottom-wrap">
                                                        <div class="product__brand">Su:m37</div>
                                                        <div class="product__made-in">Hàn Quốc</div>
                                                    </div>
                                                </div>

                                            </a>
                                        </div>
                                        <div class="col l-4 m-6 c-6">
                                            <a href="" class="product__item ">
                                                <div class="product__item-img" style="background-image: url(assets/img/su-r5.png)">
                                                    <div class="product__sales-percent">
                                                        <div class="product__sales-percent-value">10%</div>
                                                        <div class="product__sales-percent-title">GIẢM</div>
                                                    </div>
                                                    <div class="product__add-to-cart-btn">
                                                        <i class="fas fa-cart-plus product__add-to-cart-icon"></i>
                                                    </div>
                                                </div>
                                                <div class="product__item-content">
                                                    <div class="product__item-title">Set dưỡng da cấp nước Su:m37 water-full </div>

                                                    <div class="product__item-price">
                                                        <div class="product__item-price-cost">
                                                            3.200.000đ
                                                        </div>
                                                        <div class="product__item-price-sale">
                                                            2.880.000đ
                                                        </div>
                                                    </div>
                                                    <div class="product__item-rating-wrap">
                                                        <div class="product__item-favarious-wrap">
                                                            <i class="fas fa-heart product__item-favarious"></i>
                                                            <i class="far fa-heart product__item-not-favarious "></i>
                                                        </div>
                                                        <div class="offers__item-rating">
                                                            <i class="fas fa-star offers__item-rating-icon"></i>
                                                            <i class="fas fa-star offers__item-rating-icon"></i>
                                                            <i class="fas fa-star offers__item-rating-icon"></i>
                                                            <i class="fas fa-star offers__item-rating-icon"></i>
                                                            <i class="fas fa-star offers__item-rating-icon"></i>
                                                        </div>

                                                    </div>
                                                    <div class="product__bottom-wrap">
                                                        <div class="product__brand">Su:m37</div>
                                                        <div class="product__made-in">Hàn Quốc</div>
                                                    </div>
                                                </div>

                                            </a>
                                        </div>
                                        <div class="col l-4 m-6 c-6">
                                            <a href="" class="product__item ">
                                                <div class="product__item-img" style="background-image: url(assets/img/su-r6.png)">
                                                    <div class="product__sales-percent">
                                                        <div class="product__sales-percent-value">10%</div>
                                                        <div class="product__sales-percent-title">GIẢM</div>
                                                    </div>
                                                    <div class="product__add-to-cart-btn">
                                                        <i class="fas fa-cart-plus product__add-to-cart-icon"></i>
                                                    </div>
                                                </div>
                                                <div class="product__item-content">
                                                    <div class="product__item-title">Sữa rửa mặt dạng Gel Su:m37 Skin Saver Essential
                                                        Cleansing Foam</div>

                                                    <div class="product__item-price">
                                                        <div class="product__item-price-cost">
                                                            700.000đ
                                                        </div>
                                                        <div class="product__item-price-sale">
                                                            630.000đ
                                                        </div>
                                                    </div>
                                                    <div class="product__item-rating-wrap">
                                                        <div class="product__item-favarious-wrap">
                                                            <i class="fas fa-heart product__item-favarious"></i>
                                                            <i class="far fa-heart product__item-not-favarious "></i>
                                                        </div>
                                                        <div class="offers__item-rating">
                                                            <i class="fas fa-star offers__item-rating-icon"></i>
                                                            <i class="fas fa-star offers__item-rating-icon"></i>
                                                            <i class="fas fa-star offers__item-rating-icon"></i>
                                                            <i class="fas fa-star offers__item-rating-icon"></i>
                                                            <i class="fas fa-star offers__item-rating-icon"></i>
                                                        </div>

                                                    </div>
                                                    <div class="product__bottom-wrap">
                                                        <div class="product__brand">Su:m37</div>
                                                        <div class="product__made-in">Hàn Quốc</div>
                                                    </div>
                                                </div>

                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="news container">
                <div class="news__wrap">
                    <div class="news__header">
                        <div class="news__header-title">
                            TIN TỨC
                        </div>
                        <div class="news__header-btn-wrap">
                            <div class=" news__header-btn  news__header-btn--prev"> <svg class="news__header-btn-icon" enable-background="new 0 0 13 20" viewBox="0 0 13 20" x="0" y="0">
                                    <polygon points="4.2 10 12.1 2.1 10 -.1 1 8.9 -.1 10 1 11 10 20 12.1 17.9"></polygon>
                                </svg></div>
                            <div class="news__header-btn news__header-btn--next"><svg class="news__header-btn-icon" enable-background="new 0 0 13 21" viewBox="0 0 13 21" x="0" y="0">
                                    <polygon points="11.1 9.9 2.1 .9 -.1 3.1 7.9 11 -.1 18.9 2.1 21 11.1 12 12.1 11"></polygon>
                                </svg></div>
                        </div>
                    </div>

                    <div class="news__item-wrap">
                        <div class="news__item">
                            <div class="news__card">
                                <a href="" class="news__card-img-link">
                                    <img src="assets/img/news1.png" alt="" class="news__img news__img--has-border">
                                </a>
                                <div class="news__title">
                                    <a href="" class="news__title-link">
                                        Tặng ngay combo 5 gói mặt nạ thải độc Su:m37
                                    </a>
                                </div>
                                <div class="news__des">
                                    Khuyến mại siêu hot:
                                </div>
                                <buttom class="news__btn-view-more">
                                    <a href="" class="news__btn-link">Xem thêm</a>
                                </buttom>
                            </div>
                        </div>
                        <div class="news__item">
                            <div class="news__card">
                                <a href="" class="news__card-img-link">
                                    <img src="assets/img/news2.png" alt="" class="news__img news__img--has-border">
                                </a>
                                <div class="news__title">
                                    <a href="" class="news__title-link">
                                        Day Shield Perfect Sun - Cho nàng thơ tự tin "tỏa nắng"
                                    </a>
                                </div>
                                <div class="news__des ">
                                </div>
                                <buttom class="news__btn-view-more">
                                    <a href="" class="news__btn-link">Xem thêm</a>
                                </buttom>
                            </div>
                        </div>
                        <div class="news__item">
                            <div class="news__card">
                                <a href="" class="news__card-img-link">
                                    <img src="assets/img/news3.png" alt="" class="news__img news__img--has-border">
                                </a>
                                <div class="news__title">
                                    <a href="" class="news__title-link">
                                        CHĂM SÓC KHÔNG QUÊN CHỐNG NẮNG
                                    </a>
                                </div>
                                <div class="news__des">
                                    Kem Chống nắng Whoo Gongjinhyang Soo.
                                </div>
                                <buttom class="news__btn-view-more">
                                    <a href="" class="news__btn-link">Xem thêm</a>
                                </buttom>
                            </div>
                        </div>
                        <div class="news__item">
                            <div class="news__card">
                                <a href="" class="news__card-img-link">
                                    <img src="assets/img/news4.png" alt="" class="news__img news__img--has-border">
                                </a>
                                <div class="news__title">
                                    <a href="" class="news__title-link">
                                        DA DẦU CÓ CẦN DƯỠNG ẨM?
                                    </a>
                                </div>
                                <div class="news__des">
                                    Whoo Gongjinhyang Soo
                                </div>
                                <buttom class="news__btn-view-more">
                                    <a href="" class="news__btn-link">Xem thêm</a>
                                </buttom>
                            </div>
                        </div>
                        <div class="news__item">
                            <div class="news__card">
                                <a href="" class="news__card-img-link">
                                    <img src="assets/img/news5.png" alt="" class="news__img news__img--has-border">
                                </a>
                                <div class="news__title">
                                    <a href="" class="news__title-link">
                                        KHỞI ĐẦU CỦA LÀN DA KHỎE ĐẸP
                                    </a>
                                </div>
                                <div class="news__des">
                                    Ohui Prime Advancer
                                </div>
                                <buttom class="news__btn-view-more">
                                    <a href="" class="news__btn-link">Xem thêm</a>
                                </buttom>
                            </div>
                        </div>
                        <div class="news__item">
                            <div class="news__card">
                                <a href="" class="news__card-img-link">
                                    <img src="assets/img/news7.png" alt="" class="news__img news__img--has-border">
                                </a>
                                <div class="news__title">
                                    <a href="" class="news__title-link">
                                        MINI GAME - CHƠI NGAY RINH QUÀ LIỀN TAY
                                    </a>
                                </div>
                                <div class="news__des">
                                    Mini game
                                </div>
                                <buttom class="news__btn-view-more">
                                    <a href="" class="news__btn-link">Xem thêm</a>
                                </buttom>
                            </div>
                        </div>
                        <div class="news__item">
                            <div class="news__card">
                                <a href="" class="news__card-img-link">
                                    <img src="assets/img/news8.png" alt="" class="news__img news__img--has-border">
                                </a>
                                <div class="news__title">
                                    <a href="" class="news__title-link">
                                        CHƯƠNG TRÌNH KHUYẾN MÃI CHÀO THÁNG 5
                                    </a>
                                </div>
                                <div class="news__des">
                                    KHuyến mại chào hè !
                                </div>
                                <buttom class="news__btn-view-more">
                                    <a href="" class="news__btn-link">Xem thêm</a>
                                </buttom>
                            </div>
                        </div>
                        <div class="news__item">
                            <div class="news__card">
                                <a href="" class="news__card-img-link">
                                    <img src="assets/img/news9.png" alt="" class="news__img news__img--has-border">
                                </a>
                                <div class="news__title">
                                    <a href="" class="news__title-link">
                                        Điều khoản Shop
                                    </a>
                                </div>
                                <div class="news__des">
                                    Điều khoản sử dụng
                                </div>
                                <buttom class="news__btn-view-more">
                                    <a href="" class="news__btn-link">Xem thêm</a>
                                </buttom>
                            </div>
                        </div>
                        <div class="news__item">
                            <div class="news__card">
                                <a href="" class="news__card-img-link">
                                    <img src="assets/img/news10.png" alt="" class="news__img news__img--has-border">
                                </a>
                                <div class="news__title">
                                    <a href="" class="news__title-link">
                                        Tuyển dụng
                                    </a>
                                </div>
                                <div class="news__des">
                                    <div class="news-slider__item-description">CƠ HỘI TUYỆT VỜI ĐƯỢC LÀM VIỆC CÙNG NHÃN HÀNG MỸ PHẨM
                                        OHUI</div>
                                </div>
                                <buttom class="news__btn-view-more">
                                    <a href="" class="news__btn-link">Xem thêm</a>
                                </buttom>
                            </div>
                        </div>
                        <div class="news__item">
                            <div class="news__card">
                                <a href="" class="news__card-img-link">
                                    <img src="assets/img/news11.png" alt="" class="news__img news__img--has-border">
                                </a>
                                <div class="news__title">
                                    <a href="" class="news__title-link">
                                        Giới thiệu
                                    </a>
                                </div>
                                <div class="news__des">
                                    LG VINA COSMETICS- Tự hào thương hiệu đỉnh cao
                                </div>
                                <buttom class="news__btn-view-more">
                                    <a href="" class="news__btn-link">Xem thêm</a>
                                </buttom>
                            </div>
                        </div>
                        <div class="news__item">
                            <div class="news__card">
                                <a href="" class="news__card-img-link">
                                    <img src="assets/img/news12.png" alt="" class="news__img news__img--has-border">
                                </a>
                                <div class="news__title">
                                    <a href="" class="news__title-link">
                                        Chính sách vận chuyển
                                    </a>
                                </div>
                                <div class="news__des">
                                    Chính sách giao hàng
                                </div>
                                <buttom class="news__btn-view-more">
                                    <a href="" class="news__btn-link">Xem thêm</a>
                                </buttom>
                            </div>
                        </div>
                        <div class="news__item">
                            <div class="news__card">
                                <a href="" class="news__card-img-link">
                                    <img src="assets/img/news13.png" alt="" class="news__img news__img--has-border">
                                </a>
                                <div class="news__title">
                                    <a href="" class="news__title-link">
                                        Hướng dẫn mua hàng
                                    </a>
                                </div>
                                <div class="news__des">
                                    Để mua hàng trực tuyến, Quý Khách có thể lựa chọn 1 trong những cách thức mua hàng sau:
                                </div>
                                <buttom class="news__btn-view-more">
                                    <a href="" class="news__btn-link">Xem thêm</a>
                                </buttom>
                            </div>
                        </div>
                        <div class="news__item">
                            <div class="news__card">
                                <a href="" class="news__card-img-link">
                                    <img src="assets/img/news14.png" alt="" class="news__img news__img--has-border">
                                </a>
                                <div class="news__title">
                                    <a href="" class="news__title-link">
                                        Trung tâm trợ giúp
                                    </a>
                                </div>
                                <div class="news__des">
                                    Mọi thắc mắc vui lòng liên hệ:
                                </div>
                                <buttom class="news__btn-view-more">
                                    <a href="" class="news__btn-link">Xem thêm</a>
                                </buttom>
                            </div>
                        </div>
                        <div class="news__item">
                            <div class="news__card">
                                <a href="" class="news__card-img-link">
                                    <img src="assets/img/news15.png" alt="" class="news__img news__img--has-border">
                                </a>
                                <div class="news__title">
                                    <a href="" class="news__title-link">
                                        Xác thực chính hãng nguồn gốc các sản phẩm Ohui
                                    </a>
                                </div>
                                <div class="news__des">
                                    Xác thực chính hãng nguồn gốc các sản phẩm Ohui chính hãng
                                </div>
                                <buttom class="news__btn-view-more">
                                    <a href="" class="news__btn-link">Xem thêm</a>
                                </buttom>
                            </div>
                        </div>
                        <div class="news__item">
                            <div class="news__card">
                                <a href="" class="news__card-img-link">
                                    <img src="assets/img/news16.png" alt="" class="news__img news__img--has-border">
                                </a>
                                <div class="news__title">
                                    <a href="" class="news__title-link">
                                        Sale Sốc bộ dưỡng Ohui The First Tái tạo trẻ hóa da SALE OFF 70%
                                    </a>
                                </div>
                                <div class="news__des">
                                    Siêu sale duy nhất 3 ngày 11-13/12/2019
                                </div>
                                <buttom class="news__btn-view-more">
                                    <a href="" class="news__btn-link">Xem thêm</a>
                                </buttom>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- end home-page__body -->
</div>