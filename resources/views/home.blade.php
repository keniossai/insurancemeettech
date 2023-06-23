@extends('layouts.app')


@section('content')
<style>
    .placeholder {
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 0;
    }

    .loading {
        width: 100%;
        height: 200px;
        /* background: #000; */
        /* z-index: 9999; */
    }

    .loading-text {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        margin: auto;
        text-align: center;
        width: 100%;
        height: 100px;
        line-height: 100px;
        font-size: 20px;
    }

    .loading-text span {
        display: inline-block;
        margin: 0 5px;
        color: #000;
        font-family: 'Quattrocento Sans', sans-serif;
    }

    .loading-text span:nth-child(1) {
        filter: blur(0px);
        animation: blur-text 1.5s 0s infinite linear alternate;
    }

    .loading-text span:nth-child(2) {
        filter: blur(0px);
        animation: blur-text 1.5s 0.2s infinite linear alternate;
    }

    .loading-text span:nth-child(3) {
        filter: blur(0px);
        animation: blur-text 1.5s 0.4s infinite linear alternate;
    }

    .loading-text span:nth-child(4) {
        filter: blur(0px);
        animation: blur-text 1.5s 0.6s infinite linear alternate;
    }

    .loading-text span:nth-child(5) {
        filter: blur(0px);
        animation: blur-text 1.5s 0.8s infinite linear alternate;
    }

    .loading-text span:nth-child(6) {
        filter: blur(0px);
        animation: blur-text 1.5s 1s infinite linear alternate;
    }

    .loading-text span:nth-child(7) {
        filter: blur(0px);
        animation: blur-text 1.5s 1.2s infinite linear alternate;
    }

    .loading-text span:nth-child(8) {
        filter: blur(0px);
        animation: blur-text 1.5s 1.4s infinite linear alternate;
    }

    .loading-text span:nth-child(9) {
        filter: blur(0px);
        animation: blur-text 1.5s 1.6s infinite linear alternate;
    }

    .loading-text span:nth-child(10) {
        filter: blur(0px);
        animation: blur-text 1.5s 1.8s infinite linear alternate;
    }

    .loading-text span:nth-child(11) {
        filter: blur(0px);
        animation: blur-text 1.5s 2s infinite linear alternate;
    }

    .loading-text span:nth-child(12) {
        filter: blur(0px);
        animation: blur-text 1.5s 2.2s infinite linear alternate;
    }

    @keyframes blur-text {
        0% {
            filter: blur(0px);
        }

        100% {
            filter: blur(2px);
        }
    }
</style>
    <!-- Hero Start -->
        <div class="swiper hero-slide">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="exvent-hero-section-05" style="background-image: url(assets/images/bg/slider-bg-1.jpg);">
                        <div class="container">
                            <div class="row justify-content-center align-items-center">
                                <div class="col-md-8 text-center">
                                    <div class="hero-conent-wrapper">
                                        <div class="top-title-date" data-aos="fade-down" data-aos-delay="500">
                                            <span>September 20, 2023</span>
                                        </div>
                                        <div class="main-title" data-aos="fade-down" data-aos-delay="1000">
                                            <h1>Insurance Meets Tech 2023</h1>
                                        </div>
                                        <ul class="hero-meta" data-aos="fade-right" data-aos-delay="1500">
                                            <li class="meta-item">
                                                <a href="pricing.html"><i class="fas fa-chair"></i> 2500 Seats</a>
                                            </li>
                                            <li class="meta-item">
                                                <a href="speaker-01.html"><i class="fas fa-user"></i> 20 Speakers</a>
                                            </li>
                                            <li class="meta-item">
                                                <a href="contact.html"><i class="fas fa-map-marker-alt"></i> Boston, Canada</a>
                                            </li>
                                        </ul>
                                        <div class="hero-btn" data-aos="fade-up" data-aos-delay="2000">
                                            <div class="row justify-content-center">
                                                <div class="col-lg-3 col-sm-4 col-6">
                                                    <button class="btn-5">Book Now</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="exvent-hero-section-05" style="background-image: url(assets/images/bg/slider-bg-2.jpg);">
                        <div class="container">
                            <div class="row justify-content-center align-items-center">
                                <div class="col-md-8 text-center">
                                    <div class="hero-conent-wrapper">
                                        <div class="top-title-date" data-aos="fade-down" data-aos-delay="500">
                                            <span>Augest 20, 2024</span>
                                        </div>
                                        <div class="main-title" data-aos="fade-down" data-aos-delay="1000">
                                            <h1>International Conference 2024</h1>
                                        </div>
                                        <ul class="hero-meta" data-aos="fade-right" data-aos-delay="1500">
                                            <li class="meta-item">
                                                <a href="pricing.html"><i class="fas fa-chair"></i> 3000 Seats</a>
                                            </li>
                                            <li class="meta-item">
                                                <a href="speaker-01.html"><i class="fas fa-user"></i> 05 Speakers</a>
                                            </li>
                                            <li class="meta-item">
                                                <a href="contact.html"><i class="fas fa-map-marker-alt"></i> Boston, Canada</a>
                                            </li>
                                        </ul>
                                        <div class="hero-btn" data-aos="fade-up" data-aos-delay="2000">
                                            <div class="row justify-content-center">
                                                <div class="col-lg-3 col-sm-4 col-6">
                                                    <button class="btn-5">Book Now</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="exvent-hero-section-05" style="background-image: url(assets/images/bg/hero_bg2.jpg);">
                        <div class="container">
                            <div class="row justify-content-center align-items-center">
                                <div class="col-md-8 text-center">
                                    <div class="hero-conent-wrapper">
                                        <div class="top-title-date" data-aos="fade-down" data-aos-delay="500">
                                            <span>September 20, 2025</span>
                                        </div>
                                        <div class="main-title" data-aos="fade-down" data-aos-delay="1000">
                                            <h1>World Business Conferences 2025</h1>
                                        </div>
                                        <ul class="hero-meta" data-aos="fade-right" data-aos-delay="1500">
                                            <li class="meta-item">
                                                <a href="pricing.html"><i class="fas fa-chair"></i> 1000 Seats</a>
                                            </li>
                                            <li class="meta-item">
                                                <a href="speaker-01.html"><i class="fas fa-user"></i> 15 Speakers</a>
                                            </li>
                                            <li class="meta-item">
                                                <a href="contact.html"><i class="fas fa-map-marker-alt"></i> Boston, Canada</a>
                                            </li>
                                        </ul>
                                        <div class="hero-btn" data-aos="fade-up" data-aos-delay="2000">
                                            <div class="row justify-content-center">
                                                <div class="col-lg-3 col-sm-4 col-6">
                                                    <button class="btn-5">Book Now</button>
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
            <div class="swiper-pagination"></div>
        </div>
        <!-- Hero End -->

        <!-- Countdown Start -->
        <div class="event-countdown-5 section-padding-02 grey-bg">
            <div class="container">
                <div class="counter-wrapper">
                    <div class="row gx-0 gy-5 align-items-center">
                        <div class="col-lg-4 text-center">
                            <div class="counter-content-left">
                                <h4 class="counter-title">Event Starting</h4>
                                <span class="counter-subtitle">Time Remaining</span>
                            </div>
                        </div>
                        <div class="col-lg-8 text-center">
                            <!-- Countdown Start -->
                            <div class="exvent-countdown-inner-5 countdown" data-countdown="2023/9/24" data-format="short">
                                <div class="single-countdown">
                                    <span class="count countdown__time daysLeft"></span>
                                    <span class="value countdown__time daysText"></span>
                                </div>
                                <div class="single-countdown countdown-2">
                                    <span class="count countdown__time hoursLeft"></span>
                                    <span class="value countdown__time hoursText"></span>
                                </div>
                                <div class="single-countdown countdown-3">
                                    <span class="count countdown__time minsLeft"></span>
                                    <span class="value countdown__time minsText"></span>
                                </div>
                                <div class="single-countdown countdown-4">
                                    <span class="count countdown__time secsLeft"></span>
                                    <span class="value countdown__time secsText"></span>
                                </div>
                            </div>
                            <!-- Countdown End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Countdown End -->


        <!-- Event Counter Start -->
        <div class="event-counter-section section-padding grey-bg">
            <img src="assets/images/shape/counter_shape1.png" alt="shape1" class="conter-shape1">
            <img src="assets/images/shape/counter_shape2.png" alt="shape2" class="conter-shape2">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-12">
                        <div class="section-title">
                            <h5 class="sub-title">Join This Event</h5>
                            <h2 class="title">Fuel your curiosity, find inspiration
                                and discuss</h2>
                        </div>
                    </div>
                    <div class="col-lg-7 col-12">
                        <div class="row align-items-center justify-content-center">
                            <div class="col-md-4 col-8">
                                <div class="counter-item">
                                    <h1 class="counter-numb counter color1">120</h1>
                                    <span>Attendence</span>
                                </div>
                            </div>
                            <div class="col-md-4 col-8">
                                <div class="counter-item">
                                    <h1 class="counter-numb counter color2">05</h1>
                                    <span>Workshop</span>
                                </div>
                            </div>
                            <div class="col-md-4 col-8">
                                <div class="counter-item">
                                    <h1 class="counter-numb counter color3">03</h1>
                                    <span>Days</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Event Counter End -->


        <!-- About Area Start -->
        <div class="about-section section-padding-03">
            <div class="container">
                <div class="row g-0">
                    <div class="col-lg-5 order-lg-1 order-2">
                        <div class="about-thumb-wrap">
                            <img src="assets/images/about_img1.jpg" alt="about_img1">
                            <img src="{{ cloudinary_url('imt/background/bike') }}" alt="about_img2">
                        </div>
                    </div>
                    <div class="col-lg-7 order-lg-1 order-1">
                        <div class="about-content-wrap">
                            <img src="assets/images/shape/about_content_shape1.png" alt="shape" class="about-box-shape">
                            <img src="assets/images/shape/about_shape1.png" alt="shape x" class="about-shape-x">
                            <div class="section-title">
                                <h5 class="sub-title">An event for</h5>
                                <h2 class="title">Get curious. Be inspired. Create your future.</h2>
                            </div>
                            <div class="section-paragraph">
                                <p>We’re inviting the top creatives in the tech industry from all over the world to come learn, grow, scrape their knees, try new things, to be vulnerable, and to have epic adventures</p>
                                <p>Grow, scrape their knees, try new things, to be vulnerable, and to have epic adventures together, this time both </p>
                            </div>
                            <div class="about-btn">
                                <a class="btn" href="pricing.html">Contact for booking</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About Area End -->

        <!-- Speaker Area Start -->
        <div class="speaker-section-3 section-padding-04">
            @if (false)
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title-wrap">
                            <div class="section-title text-center">
                                <h5 class="sub-title orange">Speakers</h5>
                                <h2 class="title">Iconic industry-leading speakers</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row gy-5 justify-content-center">
                    @foreach ($speakers as $speaker)
                        <div class="col-lg-3 col-md-6 speaker-col">
                            <div class="single-speaker">
                                <a href="speaker-single.html" class="speaker-thumbnail">
                                    <img src="assets/images/speaker/speaker_rounded_1.jpg" alt="Speaker 1" class="speaker-img">
                                </a>
                                <div class="speaker-details">
                                    <div class="heading-shape">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="202" height="84" viewBox="0 0 202 84">
                                            <image data-name="Shape 29" width="202" height="84" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAMoAAABUCAYAAADDCaibAAAHXElEQVR4nO2de8yWYxzHP71i5TTNqckph8gpmreY/tEaQw6TGbbkzJwZMefDnIYcRsja1ApJ2VKTNVFRXjEyJVLmEItW0lToYBe/p/J0v89zn577ve77/n621t56D9d93df3vX6/63e42o3s+vYIYDgwHZGYgYtO0CQWkCZ7pGnAFODYsk+IEEE4ocywf+8HzAQmAkdrtoTYRFOAyXUK8BHwBnCE5kqI/4TyNbCkai7aAWcAnwJjgO6aK1FmKj7KjFbmwP3/2cAXwEjgQK0WUUbqCaWC+7yBwDw7IdtXq0WUibBCqdAeuAj4CngO2FOrRZSBilA+B1ZEeN5tgCuABcBTQGetFlFkKkJZB3wQ4zk7ANcCC4FHgV20WkQRadrsmcKaX0FsC9wEfAs8AHTSahFFIi2hVNgeuA1YBNwN7KjVIorA5kKZDaxO6Zl2Au4xwdxqAhIit2wulL+AlpQfZGfgIfNhbgQ6aqmIPNJUNeY0zK8gdgMeB74BrrFTMyFyQ7VQGp1qvwfwtAnmMmBrLRWRB6qFMgtYm8G49wJesMDlIAtkCuEt1UL5A/gkw8F2BV4C5gLnBYxHCC8IWpiN8lNq0Q0YbRkCZ1n2shDe4ItQKhwKjLX0/lMlGOELQb7B+8D6NjaDegATLLZzFzC5DcciPKXduOWZDSxIDMvMZ/CBZuAtE29ff1+ZKDqt7RptaX4FcRzwDjAV6OPZ2IS/uHDE+WmMrjWh+Nq66HgTsTPFenkwHuE3va1u6pCko8zLjlLNiZZu4/yYo/wamvCIZstsH2t/x6Y1ofxk+Vm+c6rFfV4HDtMKFVX0tg/djjI0yeTUOtnKS+dId4Q8AJgDvAwc5MGYRNvTVNWfbpD9iUUtofhuflXjnuVc6xjj2sTu59fwRMYcHFAPNTSuv1KEHaWa9nbSMR8YBuzt1/BERgQd9sT2V2oJZaH5KnnFZSZfag0wnrGjQlEeWjsVjeWv1Iu+5838CsLVvlxlqf1PWG2MKD61wgeR/ZV6QinSVRCuuvJ6K09+2KovRTHpYGlQtYjkr5RhR6lmO+AW6xhzr9X3i2LRM0SNUyR/pZ5Q5lruVxHZwRIunWDusI9FMWgO+RSh/ZV6QllvCYlFxu0o95tJNth2HJFvekcYfSh/JUwqfRHNryBcl8tH7LTvOnWMyTVhd5QKdf0VCWVLdgeetGPlK9UxJne4X3gHRPyauv5KGKF8YrX0ZaML8KxdtHSJGmDkhqi7SYWa/koYoay17ixlZR/gRYv0u4j/ViWeizyQpPyiVX8lbLmvrtaG/S2HzOWSnaOOMd4SxZEPItBfCfuyi37yFQWXbPcK8BlwphpgeEfSG60D/ZWwQmmx3sRiE4cD44CPgf6aFy9wTvyuKQxkC38lrFBWZdwYL090kRnmDUl3k835n78S5QXLT9mSsVZZOcG3gZWUpP5JNRv9lShCKVs8pRbLrEjMXS2+1N9hlo60G45s9FeixAY+8KAxng9MsjqXn0s+D77RvkGNRv71V6Is+t+sN3BZ+d0Cj/0lEi/p0YC0o8XAY8CQqNFmZ34d6fFkNYqpdr/+d8V8vEKQliPvfiGOB0YB75oVFdmMKpufssquB+8nkXjPMQkG+Dcw0fzOzsCF1pl0feUTou4oZTr5mmXHgws8GIuoT5wcrw/tupExwK+1PjGqUJZYkmC3Ar+4P+3qb2ebrvNgPKI+ruiue8h5Wmhm1egovwTjZMROL7BQPrXExy88GIsIT3MdN2Kp7Rqj4yb4xjnqLaKf4jKk77OAlUSSP4LMrtXAa8Bp1qrq6iRZ8HF2lKIJZZ75Ih97MBYRj0pE3jnf75lp5U6uVqQ1n3GE4pox/GA3++YZN6lDgDuBNTl/lrLT0TrruN7TPzZiLuJW7c2wW3zzinPoLlD5QGE4qdEPUjahbACeB24uaXlzodgwoFNmjxNXKHmMpzhz8WJgigdjETkjboLjlznLmh1hhVYSiYhFXKFsyIl97wKkp5s/ktoJiCgfSVLmfTe/VFQlUiOJUHyNp6ioSqROEqG4dI+Vnr2SSbaLvOrBWESBSCIUlzA405OpUFGVaChJy3p9ML9cUdURwHAPxiIKSlKhtKVDr6IqkRlJG0/PtjypDhm/shY78p2f8c8VJSXpjrLGxJIVrlvl7UAfiURkSRqth7Iyv+ZY36YHrX5EiMxIQyiNdujXmjh6mViEyJw0LseZaUfFjbg3ZL75Ii0N+N5ChCaNHWWlBR/TZL1dD9dTIhE+kFZ71DTNL1dB2Re4weqehWhz0hJKGg69y0geZq0xp6Xw/YRIjbQu8HzfFnrc26cWWwrKZL1a4SNp7ShLE8Q1RllRlUQivCXNKxyi+im/AAOAgcByLRHhM2kKJYqfMt52kfFaHSIPZL2jLLcdZIDtKEKUTijf18ninWy7yKgUf6YQmZD2NXNB5pcLSF4OnGynW0LkjrSFUm1+TbO4yDA7PhYilzRKKKstst7XIu1C5Jq0Ao4VXCzlTWCw6kVEYQD+AXOIScF7I9oeAAAAAElFTkSuQmCC"></image>
                                        </svg>
                                    </div>
                                    <a href="speaker-single.html" class="speaker-name-link">
                                        <h4 class="speaker-name">Mike Fermalin</h4>
                                    </a>
                                    <p class="speaker-designation">Career Expert</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                {{ $speakers->links() }}
            </div>
            @endif
            <div class="placeholder">
                <div class="loading">
                    <div class="loading-text">
                        <span class="loading-text-words">C</span>
                        <span class="loading-text-words">O</span>
                        <span class="loading-text-words">M</span>
                        <span class="loading-text-words">I</span>
                        <span class="loading-text-words">N</span>
                        <span class="loading-text-words">G</span>
                        <span class="loading-text-words"> </span>
                        <span class="loading-text-words">S</span>
                        <span class="loading-text-words">O</span>
                        <span class="loading-text-words">O</span>
                        <span class="loading-text-words">N</span>
                        <span class="loading-text-words">.</span>
                        <span class="loading-text-words">.</span>
                        <span class="loading-text-words">.</span>
                    </div>
                </div>
            </div>
        </div>
        <!-- Speaker Area End -->

        <!-- Schedule Area Start -->
        <div class="schedule-area section-padding-02 grey-bg">
            <img src="assets/images/shape/schedule_shape1.png" class="schedule-shape1" alt="Shape1">
            <img src="assets/images/shape/schedule_shape2.png" class="schedule-shape2" alt="Shape2">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title-wrap">
                            <div class="section-title text-center">
                                <h5 class="sub-title">Schedule</h5>
                                <h2 class="title">Without waiting for you to catch up</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-0 align-items-start">
                    <div class="col-2 sticky-col">
                        <div class="schedule-side-nav">
                            <div class="nav d-block nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                <p class="nav-link active" id="day-1-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">1st Day</p>
                                <p class="nav-link" id="day-2-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">2nd Day</p>
                                <p class="nav-link" id="day-3-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">3rd Day</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-10">
                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane show active" id="v-pills-home" role="tabpanel">
                                <div class="schedule-wrapper">
                                    <div class="single-schedule">
                                        <div class="row g-0 align-items-center shedule-row">
                                            <div class="col-lg-3 col-12">
                                                <div class="schedule-thumbnail">
                                                    <div class="schedule-time">
                                                        <h3 class="time">12</h3>
                                                        <div class="month-time">
                                                            <span class="month">August</span>
                                                            <span class="duration-event">09:00 - 11:00 AM</span>
                                                        </div>
                                                    </div>
                                                    <img src="assets/images/thumbnails/schedule_thumb1.png" alt="Thumbnail" class="schedule-thumb-img">
                                                </div>
                                            </div>
                                            <div class="col-lg-9 col-12">
                                                <div class="schedule-content-wrap">
                                                    <div class="schedule-content">
                                                        <div class="schedule-location">
                                                            <p><span><i class="fas fa-map-marker-alt"></i> </span>Monthon city hall, New York</p>
                                                        </div>
                                                        <h4 class="schedule-title">Registration for opening workshop </h4>
                                                        <div class="schedule-descrip">
                                                            <p>We’re inviting the top creatives in the tech industry from all over the world to come learn, grow, scrape their knees, try new things, to be vulnerable, </p>
                                                            <p class="collapse hidden-desc show" id="collapseContent1">epic adventures Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Photo booth anim 8-bit hella, PBR 3 wolf moon beard Helvetica. Salvia esse flexitarian Truffaut synth art party deep v chillwave. </p>
                                                        </div>
                                                    </div>
                                                    <a class="minus-btn" data-bs-toggle="collapse" href="#collapseContent1" role="button" aria-expanded="false" aria-controls="collapseContent1">
                                                        <div class="plus-icon-1 active">
                                                            <div class="plus-icon-shape active-plus"></div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row g-0 align-items-center shedule-row">
                                            <div class="col-lg-3 col-12">
                                                <div class="schedule-thumbnail">
                                                    <div class="schedule-time">
                                                        <h3 class="time">12</h3>
                                                        <div class="month-time">
                                                            <span class="month">August</span>
                                                            <span class="duration-event">12:30 - 02:00 PM</span>
                                                        </div>
                                                    </div>
                                                    <img src="assets/images/thumbnails/schedule_thumb2.png" alt="Thumbnail" class="schedule-thumb-img">
                                                </div>
                                            </div>
                                            <div class="col-lg-9 col-12">
                                                <div class="schedule-content-wrap">
                                                    <div class="schedule-content">
                                                        <div class="schedule-location">
                                                            <p><span><i class="fas fa-map-marker-alt"></i> </span>Monthon city hall, New York</p>
                                                        </div>
                                                        <h4 class="schedule-title">Meeting with world class investors </h4>
                                                        <div class="schedule-descrip">
                                                            <p>We’re inviting the top creatives in the tech industry from all over the world to come learn, grow, scrape their knees, try new things, to be vulnerable, </p>
                                                            <p class="collapse hidden-desc" id="collapseContent2">epic adventures Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Photo booth anim 8-bit hella, PBR 3 wolf moon beard Helvetica. Salvia esse flexitarian Truffaut synth art party deep v chillwave. </p>
                                                        </div>
                                                    </div>
                                                    <a class="minus-btn" data-bs-toggle="collapse" href="#collapseContent2" role="button" aria-expanded="false" aria-controls="collapseContent2">
                                                        <div class="plus-icon-2">
                                                            <div class="plus-icon-shape"></div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row g-0 align-items-center shedule-row">
                                            <div class="col-lg-3 col-12">
                                                <div class="schedule-thumbnail">
                                                    <div class="schedule-time">
                                                        <h3 class="time">12</h3>
                                                        <div class="month-time">
                                                            <span class="month">August</span>
                                                            <span class="duration-event">02:30 - 05:30 PM</span>
                                                        </div>
                                                    </div>
                                                    <img src="assets/images/thumbnails/schedule_thumb3.png" alt="Thumbnail" class="schedule-thumb-img">
                                                </div>
                                            </div>
                                            <div class="col-lg-9 col-12">
                                                <div class="schedule-content-wrap">
                                                    <div class="schedule-content">
                                                        <div class="schedule-location">
                                                            <p><span><i class="fas fa-map-marker-alt"></i> </span>Monthon city hall, New York</p>
                                                        </div>
                                                        <h4 class="schedule-title">Discussion about benefits of online meetings </h4>
                                                        <div class="schedule-descrip">
                                                            <p>We’re inviting the top creatives in the tech industry from all over the world to come learn, grow, scrape their knees, try new things, to be vulnerable, </p>
                                                            <p class="collapse hidden-desc" id="collapseContent3">epic adventures Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Photo booth anim 8-bit hella, PBR 3 wolf moon beard Helvetica. Salvia esse flexitarian Truffaut synth art party deep v chillwave. </p>
                                                        </div>
                                                    </div>
                                                    <a class="minus-btn" data-bs-toggle="collapse" href="#collapseContent3" role="button" aria-expanded="false" aria-controls="collapseContent3">
                                                        <div class="plus-icon-3">
                                                            <div class="plus-icon-shape"></div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="v-pills-profile" role="tabpanel">
                                <div class="schedule-wrapper">
                                    <div class="single-schedule">
                                        <div class="row g-0 align-items-center shedule-row">
                                            <div class="col-lg-3 col-12">
                                                <div class="schedule-thumbnail">
                                                    <div class="schedule-time">
                                                        <h3 class="time">13</h3>
                                                        <div class="month-time">
                                                            <span class="month">August</span>
                                                            <span class="duration-event">09:00 - 11:00 AM</span>
                                                        </div>
                                                    </div>
                                                    <img src="assets/images/thumbnails/schedule_thumb1.png" alt="Thumbnail" class="schedule-thumb-img">
                                                </div>
                                            </div>
                                            <div class="col-lg-9 col-12">
                                                <div class="schedule-content-wrap">
                                                    <div class="schedule-content">
                                                        <div class="schedule-location">
                                                            <p><span><i class="fas fa-map-marker-alt"></i> </span>Monthon city hall, New York</p>
                                                        </div>
                                                        <h4 class="schedule-title">Discussion about the benefit of group work</h4>
                                                        <div class="schedule-descrip">
                                                            <p>We’re inviting the top creatives in the tech industry from all over the world to come learn, grow, scrape their knees, try new things, to be vulnerable, </p>
                                                            <p class="collapse hidden-desc show" id="collapseContent4">epic adventures Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Photo booth anim 8-bit hella, PBR 3 wolf moon beard Helvetica. Salvia esse flexitarian Truffaut synth art party deep v chillwave. </p>
                                                        </div>
                                                    </div>
                                                    <a class="minus-btn" data-bs-toggle="collapse" href="#collapseContent4" role="button" aria-expanded="false" aria-controls="collapseContent4">
                                                        <div class="plus-icon-1 active">
                                                            <div class="plus-icon-shape active-plus"></div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row g-0 align-items-center shedule-row">
                                            <div class="col-lg-3 col-12">
                                                <div class="schedule-thumbnail">
                                                    <div class="schedule-time">
                                                        <h3 class="time">13</h3>
                                                        <div class="month-time">
                                                            <span class="month">August</span>
                                                            <span class="duration-event">12:30 - 02:00 PM</span>
                                                        </div>
                                                    </div>
                                                    <img src="assets/images/thumbnails/schedule_thumb2.png" alt="Thumbnail" class="schedule-thumb-img">
                                                </div>
                                            </div>
                                            <div class="col-lg-9 col-12">
                                                <div class="schedule-content-wrap">
                                                    <div class="schedule-content">
                                                        <div class="schedule-location">
                                                            <p><span><i class="fas fa-map-marker-alt"></i> </span>Monthon city hall, New York</p>
                                                        </div>
                                                        <h4 class="schedule-title">Meeting With worldclass creators</h4>
                                                        <div class="schedule-descrip">
                                                            <p>We’re inviting the top creatives in the tech industry from all over the world to come learn, grow, scrape their knees, try new things, to be vulnerable, </p>
                                                            <p class="collapse hidden-desc" id="collapseContent5">epic adventures Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Photo booth anim 8-bit hella, PBR 3 wolf moon beard Helvetica. Salvia esse flexitarian Truffaut synth art party deep v chillwave. </p>
                                                        </div>
                                                    </div>
                                                    <a class="minus-btn" data-bs-toggle="collapse" href="#collapseContent5" role="button" aria-expanded="false" aria-controls="collapseContent5">
                                                        <div class="plus-icon-2">
                                                            <div class="plus-icon-shape"></div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row g-0 align-items-center shedule-row">
                                            <div class="col-lg-3 col-12">
                                                <div class="schedule-thumbnail">
                                                    <div class="schedule-time">
                                                        <h3 class="time">13</h3>
                                                        <div class="month-time">
                                                            <span class="month">August</span>
                                                            <span class="duration-event">02:30 - 05:30 PM</span>
                                                        </div>
                                                    </div>
                                                    <img src="assets/images/thumbnails/schedule_thumb3.png" alt="Thumbnail" class="schedule-thumb-img">
                                                </div>
                                            </div>
                                            <div class="col-lg-9 col-12">
                                                <div class="schedule-content-wrap">
                                                    <div class="schedule-content">
                                                        <div class="schedule-location">
                                                            <p><span><i class="fas fa-map-marker-alt"></i> </span>Monthon city hall, New York</p>
                                                        </div>
                                                        <h4 class="schedule-title">A documentary film about success</h4>
                                                        <div class="schedule-descrip">
                                                            <p>We’re inviting the top creatives in the tech industry from all over the world to come learn, grow, scrape their knees, try new things, to be vulnerable, </p>
                                                            <p class="collapse hidden-desc" id="collapseContent6">epic adventures Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Photo booth anim 8-bit hella, PBR 3 wolf moon beard Helvetica. Salvia esse flexitarian Truffaut synth art party deep v chillwave. </p>
                                                        </div>
                                                    </div>
                                                    <a class="minus-btn" data-bs-toggle="collapse" href="#collapseContent6" role="button" aria-expanded="false" aria-controls="collapseContent6">
                                                        <div class="plus-icon-3">
                                                            <div class="plus-icon-shape"></div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="v-pills-messages" role="tabpanel">
                                <div class="schedule-wrapper">
                                    <div class="single-schedule">
                                        <div class="row g-0 align-items-center shedule-row">
                                            <div class="col-md-3 col-12">
                                                <div class="schedule-thumbnail">
                                                    <div class="schedule-time">
                                                        <h3 class="time">14</h3>
                                                        <div class="month-time">
                                                            <span class="month">August</span>
                                                            <span class="duration-event">09:00 - 11:00 AM</span>
                                                        </div>
                                                    </div>
                                                    <img src="assets/images/thumbnails/schedule_thumb1.png" alt="Thumbnail" class="schedule-thumb-img">
                                                </div>
                                            </div>
                                            <div class="col-md-9 col-12">
                                                <div class="schedule-content-wrap">
                                                    <div class="schedule-content">
                                                        <div class="schedule-location">
                                                            <p><span><i class="fas fa-map-marker-alt"></i> </span>Monthon city hall, New York</p>
                                                        </div>
                                                        <h4 class="schedule-title">Discussion about why you learn international language </h4>
                                                        <div class="schedule-descrip">
                                                            <p>We’re inviting the top creatives in the tech industry from all over the world to come learn, grow, scrape their knees, try new things, to be vulnerable, </p>
                                                            <p class="collapse hidden-desc show" id="collapseContent7">epic adventures Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Photo booth anim 8-bit hella, PBR 3 wolf moon beard Helvetica. Salvia esse flexitarian Truffaut synth art party deep v chillwave. </p>
                                                        </div>
                                                    </div>
                                                    <a class="minus-btn" data-bs-toggle="collapse" href="#collapseContent7" role="button" aria-expanded="false" aria-controls="collapseContent7">
                                                        <div class="plus-icon-1 active">
                                                            <div class="plus-icon-shape active-plus"></div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row g-0 align-items-center shedule-row">
                                            <div class="col-md-3 col-12">
                                                <div class="schedule-thumbnail">
                                                    <div class="schedule-time">
                                                        <h3 class="time">14</h3>
                                                        <div class="month-time">
                                                            <span class="month">August</span>
                                                            <span class="duration-event">12:30 - 02:00 PM</span>
                                                        </div>
                                                    </div>
                                                    <img src="assets/images/thumbnails/schedule_thumb2.png" alt="Thumbnail" class="schedule-thumb-img">
                                                </div>
                                            </div>
                                            <div class="col-md-9 col-12">
                                                <div class="schedule-content-wrap">
                                                    <div class="schedule-content">
                                                        <div class="schedule-location">
                                                            <p><span><i class="fas fa-map-marker-alt"></i> </span>Monthon city hall, New York</p>
                                                        </div>
                                                        <h4 class="schedule-title">A task for the entire event and Q&A</h4>
                                                        <div class="schedule-descrip">
                                                            <p>We’re inviting the top creatives in the tech industry from all over the world to come learn, grow, scrape their knees, try new things, to be vulnerable, </p>
                                                            <p class="collapse hidden-desc" id="collapseContent8">epic adventures Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Photo booth anim 8-bit hella, PBR 3 wolf moon beard Helvetica. Salvia esse flexitarian Truffaut synth art party deep v chillwave. </p>
                                                        </div>
                                                    </div>
                                                    <a class="minus-btn" data-bs-toggle="collapse" href="#collapseContent8" role="button" aria-expanded="false" aria-controls="collapseContent8">
                                                        <div class="plus-icon-2">
                                                            <div class="plus-icon-shape"></div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row g-0 align-items-center shedule-row">
                                            <div class="col-md-3 col-12">
                                                <div class="schedule-thumbnail">
                                                    <div class="schedule-time">
                                                        <h3 class="time">14</h3>
                                                        <div class="month-time">
                                                            <span class="month">August</span>
                                                            <span class="duration-event">02:30 - 5:00 PM</span>
                                                        </div>
                                                    </div>
                                                    <img src="assets/images/thumbnails/schedule_thumb3.png" alt="Thumbnail" class="schedule-thumb-img">
                                                </div>
                                            </div>
                                            <div class="col-md-9 col-12">
                                                <div class="schedule-content-wrap">
                                                    <div class="schedule-content">
                                                        <div class="schedule-location">
                                                            <p><span><i class="fas fa-map-marker-alt"></i> </span>Monthon city hall, New York</p>
                                                        </div>
                                                        <h4 class="schedule-title">Prize Giving and Closing Ceremony </h4>
                                                        <div class="schedule-descrip">
                                                            <p>We’re inviting the top creatives in the tech industry from all over the world to come learn, grow, scrape their knees, try new things, to be vulnerable, </p>
                                                            <p class="collapse hidden-desc" id="collapseContent9">epic adventures Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Photo booth anim 8-bit hella, PBR 3 wolf moon beard Helvetica. Salvia esse flexitarian Truffaut synth art party deep v chillwave. </p>
                                                        </div>
                                                    </div>
                                                    <a class="minus-btn" data-bs-toggle="collapse" href="#collapseContent9" role="button" aria-expanded="false" aria-controls="collapseContent9">
                                                        <div class="plus-icon-3">
                                                            <div class="plus-icon-shape"></div>
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
                </div>
            </div>
        </div>
        <!-- Schedule Area End -->

        <!-- Pricing Area Start -->
        <div class="pricing-area section-padding-04" style="background-image: url(assets/images/bg/price_bg.jpg);">
            <div class="pricing-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="section-title-wrap">
                                <div class="section-title text-center">
                                    <h5 class="sub-title">Event Pricing</h5>
                                    <h2 class="title white">Book your seat now</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-sm-7">
                            <div class="price-card text-center">
                                <div class="price-header">
                                    <span class="price-plan">Basic Pass</span>
                                    <h3 class="price-ammount"><sup>$</sup>43</h3>
                                </div>
                                <div class="price-body">
                                    <ul class="price-desc">
                                        <li>Back Row Seat</li>
                                        <li>Free Lunch & Snacks</li>
                                        <li>Event Certificate</li>
                                        <li>1 Workshop</li>
                                    </ul>
                                </div>
                                <div class="price-footer">
                                    <a href="pricing.html" class="btn price-btn btn-blue"> Book a seat</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-7">
                            <div class="price-card text-center">
                                <div class="price-header pink-bg">
                                    <span class="price-plan">Premium Pass</span>
                                    <h3 class="price-ammount"><sup>$</sup>143</h3>
                                </div>
                                <div class="price-body">
                                    <ul class="price-desc">
                                        <li>Back Row Seat</li>
                                        <li>Free Lunch & Snacks</li>
                                        <li>Event Certificate</li>
                                        <li>1 Workshop</li>
                                    </ul>
                                </div>
                                <div class="price-footer">
                                    <a href="pricing.html" class="btn price-btn"> Book a seat</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-7">
                            <div class="price-card text-center">
                                <div class="price-header yellow-bg">
                                    <span class="price-plan">Platinam Pass</span>
                                    <h3 class="price-ammount"><sup>$</sup>243</h3>
                                </div>
                                <div class="price-body">
                                    <ul class="price-desc">
                                        <li>Back Row Seat</li>
                                        <li>Free Lunch & Snacks</li>
                                        <li>Event Certificate</li>
                                        <li>1 Workshop</li>
                                    </ul>
                                </div>
                                <div class="price-footer">
                                    <a href="pricing.html" class="btn price-btn btn-yellow"> Book a seat</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Pricing Area End -->

        <!-- Brand Area Start -->
        <div class="brand-area section-padding-05">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title-wrap">
                            <div class="section-title text-center">
                                <h5 class="sub-title">Sponsors</h5>
                                <h2 class="title">50+ leading companies with us</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center text-center">
                    <div class="col-md-3 col-6">
                        <div class="brand-item">
                            <a href="blog-details.html"><img src="assets/images/logo/brand1.png" alt="Brand"></a>
                        </div>
                    </div>
                    <div class="col-md-3 col-6">
                        <div class="brand-item">
                            <a href="blog-details.html"><img src="assets/images/logo/brand2.png" alt="Brand"></a>
                        </div>
                    </div>
                    <div class="col-md-3 col-6">
                        <div class="brand-item">
                            <a href="blog-details.html"><img src="assets/images/logo/brand3.png" alt="Brand"></a>
                        </div>
                    </div>
                    <div class="col-md-3 col-6">
                        <div class="brand-item">
                            <a href="blog-details.html"><img src="assets/images/logo/brand4.png" alt="Brand"></a>
                        </div>
                    </div>
                    <div class="col-md-3 col-6">
                        <div class="brand-item">
                            <a href="blog-details.html"><img src="assets/images/logo/brand5.png" alt="Brand"></a>
                        </div>
                    </div>
                    <div class="col-md-3 col-6">
                        <div class="brand-item">
                            <a href="blog-details.html"><img src="assets/images/logo/brand6.png" alt="Brand"></a>
                        </div>
                    </div>
                    <div class="col-md-3 col-6">
                        <div class="brand-item">
                            <a href="blog-details.html"><img src="assets/images/logo/brand7.png" alt="Brand"></a>
                        </div>
                    </div>
                    <div class="col-md-3 col-6">
                        <div class="brand-item">
                            <a href="blog-details.html"><img src="assets/images/logo/brand8.png" alt="Brand"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Brand Area End -->

        <!-- Past Event Gallery Area Start -->
        <div class="past-event-gallery-area section-padding-06 grey-bg">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title-wrap">
                            <div class="section-title text-center">
                                <h5 class="sub-title">Previous Gallery</h5>
                                <h2 class="title">Past event memories</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-md-3 col-sm-6">
                        <a href="event-list.html" class="single-gallery">
                            <img src="assets/images/gallery1.jpg" alt="gallery">
                            <div class="gallery-content">
                                <span>Aug</span>
                                <h5>2018</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <a href="event-list.html" class="single-gallery">
                            <img src="assets/images/gallery2.jpg" alt="gallery">
                            <div class="gallery-content">
                                <span>Jun</span>
                                <h5>2019</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <a href="event-list.html" class="single-gallery">
                            <img src="assets/images/gallery3.jpg" alt="gallery">
                            <div class="gallery-content">
                                <span>Sep</span>
                                <h5>2020</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <a href="event-list.html" class="single-gallery">
                            <img src="assets/images/gallery4.jpg" alt="gallery">
                            <div class="gallery-content">
                                <span>May</span>
                                <h5>2021</h5>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Past Event Gallery Area End -->

        <!-- Footer Section Start -->
        <div class="footer-section" style="background-image: url(assets/images/bg/footer_bg1.jpg);">
            <div class="container">
                <div class="footer-newsletter">
                    <div class="row">
                        <div class="col-lg-5 col-12 text-sm-start text-center">
                            <div class="footer-title">
                                <span>Subscribe Newsletter</span>
                                <h4>Subscribe to recieve
                                    daily news</h4>
                            </div>
                        </div>
                        <div class="col-lg-7 col-12">
                            <div class="footer-newsletter-form">
                                <form action="#">
                                    <input type="text" placeholder="Your Email">
                                    <button class="btn btn-primary">Subscribe</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-widget-social">
                <div class="container">
                    <div class="row text-center">
                        <div class="col-12">
                            <div class="social-title">
                                <h4 class="title">Contact With us</h4>
                            </div>
                        </div>
                        <div class="col-12">
                            <ul class="social-list">
                                <li><a href="www.facebook.html"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="www.twitter.html"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="www.dribbble.html"><i class="fab fa-dribbble"></i></a></li>
                                <li><a href="www.behance.html"><i class="fab fa-behance"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-widget-navigation text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="footer-navigation">
                                <ul>
                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="blog-details.html">Sponsors</a></li>
                                    <li><a href="event-schedule.html">Schedule</a></li>
                                    <li><a href="blog-details.html">Blog</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Footer Copyright Start -->
            <div class="footer-copyright-area">
                <div class="container">
                    <div class="footer-copyright-wrap">
                        <div class="row align-items-center">
                            <div class="col-lg-12">
                                <!-- Footer Copyright Text Start -->
                                <div class="copyright-text text-center">
                                    <p>2023 Copyright Expotin Designed by Love . All Rights Reserved</p>
                                </div>
                                <!-- Footer Copyright Text End -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer Copyright End -->
        </div>
        <!-- Footer Section End -->

        <!-- back to top start -->
        <div class="progress-wrap">
            <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
            </svg>
        </div>
        <!-- back to top end -->
@endsection
