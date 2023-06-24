@extends('layouts.app')


@section('content')
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
                                            <span class="text-white" style="font-size: 20px;">Thursday, 28 and Friday, 29 September 2023 </span>
                                        </div>
                                        <div class="main-title" data-aos="fade-down" data-aos-delay="1000">
                                            <img src="{{ asset('assets/images/hero.png') }}" alt="">
                                        </div>
                                        <div class="top-title-date" data-aos="fade-down" data-aos-delay="500">
                                            <span style="font-size: 22px;">Unlocking policy and tech bottlenecks hindering disruptive insurance penetration</span>
                                        </div>

                                        <ul class="hero-meta" data-aos="fade-right" data-aos-delay="1500">
                                            <li class="meta-item">
                                                <a href="pricing.html"><i class="fas fa-chair"></i> 2500 Seats</a>
                                            </li>
                                            <li class="meta-item">
                                                <a href="speaker-01.html"><i class="fas fa-user"></i> 20 Speakers</a>
                                            </li>
                                            <li class="meta-item">
                                                <a href="#" style="font-size: 18px;"><i class="fas fa-map-marker-alt"></i> Civic Centre, Victoria Island, Lagos</a>
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
                                        <div class="main-title" data-aos="fade-down" data-aos-delay="1000">
                                            <h1>Thursday, 28 and Friday, 29 September 2023</h1>
                                        </div>
                                        <ul class="hero-meta" data-aos="fade-right" data-aos-delay="1500">
                                            <li class="meta-item">
                                                <a href="speaker-01.html"><i class="fas fa-user"></i> 10:00 am – 5:00 pm Daily </a>
                                            </li>
                                            <li class="meta-item">
                                                <a href="contact.html"><i class="fas fa-map-marker-alt"></i> Civic Centre, Victoria Island, Lagos</a>
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
                            <h2 class="title">Insurance Meets Tech 2.0 </h2>
                        </div>
                    </div>
                    <div class="col-lg-7 col-12">
                        <div class="row align-items-center justify-content-center">
                            <div class="col-md-4 col-8">
                                <div class="counter-item">
                                    <h1 class="counter-numb counter color1">6</h1>
                                    <span>Entry Categories </span>
                                </div>
                            </div>
                            <div class="col-md-4 col-8">
                                <div class="counter-item">
                                    <h1 class="counter-numb counter color2">07</h1>
                                    <span>Thematic Areas</span>
                                </div>
                            </div>
                            <div class="col-md-4 col-8">
                                <div class="counter-item">
                                    <h1 class="counter-numb counter color3">02</h1>
                                    <span>Days</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="pricing-area pricing-area-2 section-padding-08" style="background-image: url(assets/images/bg/footer_bg1.jpg);">
            <div class="pricing-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="section-title-wrap">
                                <div class="section-title text-center">
                                    <h5 class="sub-title orange">Theme</h5>
                                    {{-- <h2 class="title white">Insurance Meets Tech 2.0 </h2> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-3">
                            <!-- Pricing Card -->
                            <div class="pricing-card">
                                <div class="card border-light p-1 p-lg-2 p-xl-4">
                                    <!-- Header -->
                                    <header class="card-header border-bottom bg-white text-center">
                                        <h5 class="h3 font-weight-normal text-gray mb-4">Entry Categories</h5>
                                    </header>
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="icon-md icon-secondary lh-180 mr-3">
                                                <span class="fas fa-check-circle"></span>
                                            </div>
                                            <p> VIPs | Speakers | Delegate</p>
                                        </div>
                                        <div class="d-flex">
                                            <div class="icon-md icon-secondary lh-180 mr-3">
                                                <span class="fas fa-check-circle"></span>
                                            </div>
                                            <p>Exhibitors | Visitors </p>
                                        </div>
                                    </div>
                                    <!-- End Content -->
                                </div>
                            </div>
                            <!-- End of Pricing Card -->
                        </div>
                        <div class="col-md-4">
                            <!-- Pricing Card -->
                            <div class="pricing-card">
                                <div class="card border-light p-1 p-lg-2 p-xl-4">
                                    <!-- Header -->
                                    <header class="card-header border-bottom bg-white text-center">
                                        <h5 class="h3 font-weight-normal text-gray mb-4">Thematic Areas</h5>
                                    </header>
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="icon-md icon-secondary lh-180 mr-3">
                                                <span class="fas fa-check-circle"></span>
                                            </div>
                                            <p>Data Privacy | Cybersecurity | Policy/Regulation</p>
                                        </div>
                                        <div class="d-flex">
                                            <div class="icon-md icon-secondary lh-180 mr-3">
                                                <span class="fas fa-check-circle"></span>
                                            </div>
                                            <p>Product and Service Development | Consumer Intelligence </p>
                                        </div>
                                        <div class="d-flex">
                                            <div class="icon-md icon-secondary lh-180 mr-3">
                                                <span class="fas fa-check-circle"></span>
                                            </div>
                                            <p>Customer Acquisition, Engagement and Retention  </p>
                                        </div>
                                        <div class="d-flex">
                                            <div class="icon-md icon-secondary lh-180 mr-3">
                                                <span class="fas fa-check-circle"></span>
                                            </div>
                                            <p>Women in insurance & insurtech </p>
                                        </div>
                                    </div>
                                    <!-- End Content -->
                                </div>
                            </div>
                            <!-- End of Pricing Card -->
                        </div>
                        <div class="col-md-3">
                            <!-- Pricing Card -->
                            <div class="pricing-card">
                                <div class="card border-light p-1 p-lg-2 p-xl-4">
                                    <!-- Header -->
                                    <header class="card-header border-bottom bg-white text-center">
                                        <h5 class="h3 font-weight-normal text-gray mb-4">Entry Categories</h5>
                                    </header>
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="icon-md icon-secondary lh-180 mr-3">
                                                <span class="fas fa-check-circle"></span>
                                            </div>
                                            <p> VIPs | Speakers | Delegate</p>
                                        </div>
                                        <div class="d-flex">
                                            <div class="icon-md icon-secondary lh-180 mr-3">
                                                <span class="fas fa-check-circle"></span>
                                            </div>
                                            <p>Exhibitors | Visitors </p>
                                        </div>
                                    </div>
                                    <!-- End Content -->
                                </div>
                            </div>
                            <!-- End of Pricing Card -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="video-area-2">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-md-8">
                        <div class="video-images">
                            <div class="video-img-wrap">
                                <img src="{{ cloudinary_url('imt/gallery/12_wonrby') }}" style="width: 40%;" alt="Thumbnail" class="video-img1 img-fluid">
                                <div class="button-img">
                                    <img src="assets/images/video-img-2.jpg" alt="Thumbnail" class="video-img2 img-fluid">
                                    <div class="play-btn">
                                        <a href="{{ cloudinary_url('imt/gallery/video_hr44jo') }}" class="popup-video" savefrom_lm_index="0" savefrom_lm="1"><i class="fas fa-play"></i></a><span style="padding: 0; margin: 0; margin-left: 5px;"><a href="http://savefrom.net/?url=https%3A%2F%2Fwww.youtube.com%2Fwatch%3Ftime_continue%3D3%26v%3D_X0eYtY8T_U&amp;utm_source=ff&amp;utm_medium=extensions&amp;utm_campaign=link_modifier" target="_blank" title="Get a direct link" style="background-image: url(&quot;data:image/gif;base64,R0lGODlhEAAQAOZ3APf39+Xl5fT09OPj4/Hx8evr6/3+/u7u7uDh4OPi497e3t7e3/z8/P79/X3GbuXl5ubl5eHg4WzFUfb39+Pj4lzGOV7LOPz7+/n6+vn5+ZTLj9/e387Ozt7f3/7+/vv7/ISbePn5+m/JV1nRKXmVbkCnKVrSLDqsCuDh4d/e3uDn3/z7/H6TdVeaV1uSW+bn5v39/eXm5eXm5kyHP/f39pzGmVy7J3yRd9/f3mLEKkXCHJbka2TVM5vaZn6Wdfn6+YG/c/r5+ZO/jeLi41aHTIeageLn4f39/vr6+kzNG2PVM5i+lomdf2CXYKHVmtzo2YXNeDqsBebl5uHh4HDKWN3g3kKqEH6WeZHTXIPKdnSPbv79/pfmbE7PHpe1l4O8dTO5DODg4VDLIlKUUtzo2J7SmEWsLlG4NJbFjkrJHP7+/VK5Nfz8+zmnC3KKa+Hg4OHh4Y63j/3+/eDg4Ojo6P///8DAwP///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAAHcALAAAAAAQABAAAAfWgHd2g4SFhYJzdYqLjIpzgx5bBgYwHg1Hk2oNDXKDFwwfDF5NLmMtcStsn4MhGT8YS04aGmU1QRhIGYMTADQAQlAODlloAMYTgwICRmRfVBISIkBPKsqDBAREZmcVFhYVayUz2IMHB1dWOmImI2lgUVrmgwUFLzdtXTxKSSduMfSD6Aik48MGlx05SAykM0gKhAAPAhTB0oNFABkPHg5KMIBCxzlMQFQZMGBIggSDpsCJgGDOmzkIUCAIM2dOhEEcNijQuQDHgg4KOqRYwMGOIENIB90JBAA7&quot;); background-repeat: no-repeat; width: 16px; height: 16px; display: inline-block; border: medium none; text-decoration: none; padding: 0px; position: relative;" savefrom_lm="1" savefrom_lm_is_link="1"></a></span>
                                    </div>
                                </div>
                            </div>
                            <img src="assets/images/shape/video-shape3.png" alt="Thumbnail" class="video-shape3">
                        </div>
                    </div>
                    <div class="col-xl-5 col-md-7">
                        <div class="video-area-contents">
                            <h1 class="title">
                                <span>The best insurtech</span>
                                <span>conference in</span>
                                <span>africa</span>
                            </h1>
                            {{-- <div class="text">
                                <p>We’re inviting the top creatives in the tech industry from all over the world to come learn, grow, scrape their knees, try new things, to be vulnerable, and to have epic adventures</p>
                                <p>Grow, scrape their knees, try new things, to be vulnerable, and to have epic adventures together, this time both </p>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- About Area Start -->
        <div class="about-section section-padding-03">
            <div class="container">
                <div class="row g-0">
                    <div class="col-lg-5 order-lg-1 order-2">
                        <div class="about-thumb-wrap">
                            <img src="{{ cloudinary_url('imt/gallery/5_yylhov') }}" alt="about_img1">
                            <img src="{{ cloudinary_url('imt/gallery/3_kvrhtd') }}" style="width: 500px; height: 350px;"  alt="about_img2">
                        </div>
                    </div>
                    <div class="col-lg-7 order-lg-1 order-1">
                        <div class="about-content-wrap">
                            <img src="assets/images/shape/about_content_shape1.png" alt="shape" class="about-box-shape">
                            <img src="assets/images/shape/about_shape1.png" alt="shape x" class="about-shape-x">
                            <div class="section-title">
                                <h5 class="sub-title">IMT 2.0</h5>
                                <h2 class="title">Insurance Meets Tech 2.0</h2>
                            </div>
                            <div class="section-paragraph">
                                <p> Insurance Meets Tech is a 2- day event of Unlocking policy and tech bottlenecks hindering disruptive insurance penetration. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About Area End -->

        <!-- Speaker Area Start -->
        {{-- <div class="speaker-section-3 section-padding-04">
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
        </div> --}}
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
                                <h5 class="sub-title">Event Schedule</h5>
                                <h2 class="title">Conference Flow </h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-0 align-items-start">
                    <div class="col-2 sticky-col">
                        <div class="schedule-side-nav">
                            <div class="nav d-block nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                <p class="nav-link active" id="day-1-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Day 1 September 28</p>
                                <p class="nav-link" id="day-2-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Day 2 September 29</p>
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
                                                        <h3 class="time">1</h3>
                                                        <div class="month-time">
                                                            <span class="month">Time</span>
                                                            <span class="duration-event">08:00 – 10:00am</span>
                                                        </div>
                                                    </div>
                                                    <img src="{{ cloudinary_url('imt/gallery/thumb_m9sran') }}" width="100" alt="Thumbnail" class="schedule-thumb-img">
                                                </div>
                                            </div>
                                            <div class="col-lg-9 col-12">
                                                <div class="schedule-content-wrap">
                                                    <div class="schedule-content">
                                                        <div class="schedule-location">
                                                            <p><span><i class="fas fa-map-marker-alt"></i> </span>Civic Centre, Victoria Island, Lagos</p>
                                                        </div>
                                                        <h4 class="schedule-title">Registration and Verification</h4>
                                                        <div class="schedule-descrip">
                                                            <p>Onboarding and verifying registered attendance</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row g-0 align-items-center shedule-row">
                                            <div class="col-lg-3 col-12">
                                                <div class="schedule-thumbnail">
                                                    <div class="schedule-time">
                                                        <h3 class="time">2</h3>
                                                        <div class="month-time">
                                                            <span class="month">Time</span>
                                                            <span class="duration-event">10:00am – 10:45am</span>
                                                        </div>
                                                    </div>
                                                    <img src="{{ cloudinary_url('imt/gallery/thumb_m9sran') }}" width="100" alt="Thumbnail" class="schedule-thumb-img">
                                                </div>
                                            </div>
                                            <div class="col-lg-9 col-12">
                                                <div class="schedule-content-wrap">
                                                    <div class="schedule-content">
                                                        <div class="schedule-location">
                                                            <p><span><i class="fas fa-map-marker-alt"></i> </span>Civic Centre, Victoria Island, Lagos</p>
                                                        </div>
                                                        <h4 class="schedule-title">Opening Ceremony   </h4>
                                                        <div class="schedule-descrip">
                                                            <p>•	Key notes</p>
                                                            <p class="collapse hidden-desc" id="collapseContent2">•	Goodwill messages from industry dignitaries and stakeholders </p>
                                                            <p class="collapse hidden-desc" id="collapseContent2">•	Convener’s Welcome </p>
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
                                                        <h3 class="time">3</h3>
                                                        <div class="month-time">
                                                            <span class="month">Time</span>
                                                            <span class="duration-event">10:46am - 11:30am </span>
                                                        </div>
                                                    </div>
                                                    <img src="{{ cloudinary_url('imt/gallery/thumb_m9sran') }}" width="100" alt="Thumbnail" class="schedule-thumb-img">
                                                </div>
                                            </div>
                                            <div class="col-lg-9 col-12">
                                                <div class="schedule-content-wrap">
                                                    <div class="schedule-content">
                                                        <div class="schedule-location">
                                                            <p><span><i class="fas fa-map-marker-alt"></i> </span>Civic Centre, Victoria Island, Lagos</p>
                                                        </div>
                                                        <h4 class="schedule-title">The Executive Dialogue | Questions and Answers</h4>
                                                    </div>
                                                    <a class="minus-btn" data-bs-toggle="collapse" href="#collapseContent3" role="button" aria-expanded="false" aria-controls="collapseContent3">
                                                        <div class="plus-icon-3">
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
                                                        <h3 class="time">4</h3>
                                                        <div class="month-time">
                                                            <span class="month">Time</span>
                                                            <span class="duration-event">11:31am - 11:45am</span>
                                                        </div>
                                                    </div>
                                                    <img src="{{ cloudinary_url('imt/gallery/thumb_m9sran') }}" width="100" alt="Thumbnail" class="schedule-thumb-img">
                                                </div>
                                            </div>
                                            <div class="col-lg-9 col-12">
                                                <div class="schedule-content-wrap">
                                                    <div class="schedule-content">
                                                        <div class="schedule-location">
                                                            <p><span><i class="fas fa-map-marker-alt"></i> </span>Civic Centre, Victoria Island, Lagos</p>
                                                        </div>
                                                        <h4 class="schedule-title">Disruptive Product/Service Demo</h4>
                                                    </div>
                                                    <a class="minus-btn" data-bs-toggle="collapse" href="#collapseContent3" role="button" aria-expanded="false" aria-controls="collapseContent3">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row g-0 align-items-center shedule-row">
                                            <div class="col-lg-3 col-12">
                                                <div class="schedule-thumbnail">
                                                    <div class="schedule-time">
                                                        <h3 class="time">5</h3>
                                                        <div class="month-time">
                                                            <span class="month">Time</span>
                                                            <span class="duration-event">11:46 am -1:15 pm</span>
                                                        </div>
                                                    </div>
                                                    <img src="{{ cloudinary_url('imt/gallery/thumb_m9sran') }}" width="100" alt="Thumbnail" class="schedule-thumb-img">
                                                </div>
                                            </div>
                                            <div class="col-lg-9 col-12">
                                                <div class="schedule-content-wrap">
                                                    <div class="schedule-content">
                                                        <div class="schedule-location">
                                                            <p><span><i class="fas fa-map-marker-alt"></i> </span>Civic Centre, Victoria Island, Lagos</p>
                                                        </div>
                                                        <h4 class="schedule-title">Plenary 1 </h4>
                                                        <div class="schedule-descrip">
                                                            <h4>Decoupling policy bottlenecks hindering collaborative innovation in insurance </h4>
                                                            <p>•	Pre-panel Presentation</p>
                                                            <p class="collapse hidden-desc" id="collapseContent2">•	Discourse</p>
                                                            <p class="collapse hidden-desc" id="collapseContent2">•	Question and Answers</p>
                                                            <p class="collapse hidden-desc" id="collapseContent2">•	Photo session</p>
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
                                                        <h3 class="time">Lunch </h3>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-9 col-12">
                                                <div class="schedule-content-wrap">
                                                    <div class="schedule-content">
                                                        <h4 class="schedule-title">1:15pm – 2:15pm </h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row g-0 align-items-center shedule-row">
                                            <div class="col-lg-3 col-12">
                                                <div class="schedule-thumbnail">
                                                    <div class="schedule-time">
                                                        <h3 class="time">6</h3>
                                                        <div class="month-time">
                                                            <span class="month">Time</span>
                                                            <span class="duration-event">2:16pm – 2:30pm</span>
                                                        </div>
                                                    </div>
                                                    <img src="{{ cloudinary_url('imt/gallery/thumb_m9sran') }}" width="100" alt="Thumbnail" class="schedule-thumb-img">
                                                </div>
                                            </div>
                                            <div class="col-lg-9 col-12">
                                                <div class="schedule-content-wrap">
                                                    <div class="schedule-content">
                                                        <div class="schedule-location">
                                                            <p><span><i class="fas fa-map-marker-alt"></i> </span>Civic Centre, Victoria Island, Lagos</p>
                                                        </div>
                                                        <h4 class="schedule-title">Disruptive Product/Service Demo (2)  </h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row g-0 align-items-center shedule-row">
                                            <div class="col-lg-3 col-12">
                                                <div class="schedule-thumbnail">
                                                    <div class="schedule-time">
                                                        <h3 class="time">7</h3>
                                                        <div class="month-time">
                                                            <span class="month">Time</span>
                                                            <span class="duration-event">2:31pm – 3:30pm</span>
                                                        </div>
                                                    </div>
                                                    <img src="{{ cloudinary_url('imt/gallery/thumb_m9sran') }}" width="100" alt="Thumbnail" class="schedule-thumb-img">
                                                </div>
                                            </div>
                                            <div class="col-lg-9 col-12">
                                                <div class="schedule-content-wrap">
                                                    <div class="schedule-content">
                                                        <div class="schedule-location">
                                                            <p><span><i class="fas fa-map-marker-alt"></i> </span>Civic Centre, Victoria Island, Lagos</p>
                                                        </div>
                                                        <h4 class="schedule-title">Plenary</h4>
                                                        <div class="schedule-descrip">
                                                            <h4>Leveraging Insurtech in advancing innovative product development, customer acquisition, engagement and retention  </h4>
                                                            <p class="collapse hidden-desc" id="collapseContent2">•	Discourse</p>
                                                            <p class="collapse hidden-desc" id="collapseContent2">•	Question and Answers</p>
                                                            <p class="collapse hidden-desc" id="collapseContent2">•	Photo session</p>
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
                                                        <h3 class="time">8</h3>
                                                        <div class="month-time">
                                                            <span class="month">Time</span>
                                                            <span class="duration-event">3:31pm – 3:55pm</span>
                                                        </div>
                                                    </div>
                                                    <img src="{{ cloudinary_url('imt/gallery/thumb_m9sran') }}" width="100" alt="Thumbnail" class="schedule-thumb-img">
                                                </div>
                                            </div>
                                            <div class="col-lg-9 col-12">
                                                <div class="schedule-content-wrap">
                                                    <div class="schedule-content">
                                                        <div class="schedule-location">
                                                            <p><span><i class="fas fa-map-marker-alt"></i> </span>Civic Centre, Victoria Island, Lagos</p>
                                                        </div>
                                                        <h4 class="schedule-title">Announcements, summary, and day (2) line-up  </h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row g-0 align-items-center shedule-row">
                                            <div class="col-lg-3 col-12">
                                                <div class="schedule-thumbnail">
                                                    <div class="schedule-time">
                                                        <h3 class="time">Close </h3>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-9 col-12">
                                                <div class="schedule-content-wrap">
                                                    <div class="schedule-content">
                                                        <h4 class="schedule-title">4:00pm</h4>
                                                    </div>
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
                                                        <h3 class="time">1</h3>
                                                        <div class="month-time">
                                                            <span class="month">Time</span>
                                                            <span class="duration-event">8:00am – 10:00am</span>
                                                        </div>
                                                    </div>
                                                    <img src="{{ cloudinary_url('imt/gallery/thumb_m9sran') }}" width="100" alt="Thumbnail" class="schedule-thumb-img">
                                                </div>
                                            </div>
                                            <div class="col-lg-9 col-12">
                                                <div class="schedule-content-wrap">
                                                    <div class="schedule-content">
                                                        <div class="schedule-location">
                                                            <p><span><i class="fas fa-map-marker-alt"></i> </span>Civic Centre, Victoria Island, Lagos</p>
                                                        </div>
                                                        <h4 class="schedule-title">Registration and Verification </h4>
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
                                                        <h3 class="time">2</h3>
                                                        <div class="month-time">
                                                            <span class="month">Time</span>
                                                            <span class="duration-event">9:00am – 10:15am</span>
                                                        </div>
                                                    </div>
                                                    <img src="{{ cloudinary_url('imt/gallery/thumb_m9sran') }}" width="100" alt="Thumbnail" class="schedule-thumb-img">
                                                </div>
                                            </div>
                                            <div class="col-lg-9 col-12">
                                                <div class="schedule-content-wrap">
                                                    <div class="schedule-content">
                                                        <div class="schedule-location">
                                                            <p><span><i class="fas fa-map-marker-alt"></i> </span>Civic Centre, Victoria Island, Lagos</p>
                                                        </div>
                                                        <h4 class="schedule-title">IMT Special in collaboration with PILA : Overcoming: Women in Insurance and Insurtech </h4>
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
                                                        <h3 class="time">3</h3>
                                                        <div class="month-time">
                                                            <span class="month">Time</span>
                                                            <span class="duration-event">10:16am – 10:30am</span>
                                                        </div>
                                                    </div>
                                                    <img src="{{ cloudinary_url('imt/gallery/thumb_m9sran') }}" width="100" alt="Thumbnail" class="schedule-thumb-img">
                                                </div>
                                            </div>
                                            <div class="col-lg-9 col-12">
                                                <div class="schedule-content-wrap">
                                                    <div class="schedule-content">
                                                        <div class="schedule-location">
                                                            <p><span><i class="fas fa-map-marker-alt"></i> </span>Civic Centre, Victoria Island, Lagos</p>
                                                        </div>
                                                        <h4 class="schedule-title">Disruptive product/service Demo </h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row g-0 align-items-center shedule-row">
                                            <div class="col-md-3 col-12">
                                                <div class="schedule-thumbnail">
                                                    <div class="schedule-time">
                                                        <h3 class="time">4</h3>
                                                        <div class="month-time">
                                                            <span class="month">Time</span>
                                                            <span class="duration-event">10:31am – 11:45am</span>
                                                        </div>
                                                    </div>
                                                    <img src="{{ cloudinary_url('imt/gallery/thumb_m9sran') }}" width="100" alt="Thumbnail" class="schedule-thumb-img">
                                                </div>
                                            </div>
                                            <div class="col-md-9 col-12">
                                                <div class="schedule-content-wrap">
                                                    <div class="schedule-content">
                                                        <div class="schedule-location">
                                                            <p><span><i class="fas fa-map-marker-alt"></i> </span>Monthon city hall, New York</p>
                                                        </div>
                                                        <h4 class="schedule-title">Plenary 3</h4>
                                                        <div class="schedule-descrip">
                                                            <h4>Insurance Brokerage: Leveraging Tech in the Ultra-Digital Age</h4>
                                                            <p>•	Discourse</p>
                                                            <p class="collapse hidden-desc show" id="collapseContent7">•	Question and Answers </p>
                                                            <p class="collapse hidden-desc show" id="collapseContent7">•	Photo session </p>
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
                                                        <h3 class="time">5</h3>
                                                        <div class="month-time">
                                                            <span class="month">Time</span>
                                                            <span class="duration-event">11:46am – Noon</span>
                                                        </div>
                                                    </div>
                                                    <img src="{{ cloudinary_url('imt/gallery/thumb_m9sran') }}" width="100" alt="Thumbnail" class="schedule-thumb-img">
                                                </div>
                                            </div>
                                            <div class="col-md-9 col-12">
                                                <div class="schedule-content-wrap">
                                                    <div class="schedule-content">
                                                        <div class="schedule-location">
                                                            <p><span><i class="fas fa-map-marker-alt"></i> </span>Monthon city hall, New York</p>
                                                        </div>
                                                        <h4 class="schedule-title">Disruptive product/service Demo </h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row g-0 align-items-center shedule-row">
                                            <div class="col-md-3 col-12">
                                                <div class="schedule-thumbnail">
                                                    <div class="schedule-time">
                                                        <h3 class="time">6</h3>
                                                        <div class="month-time">
                                                            <span class="month">Time</span>
                                                            <span class="duration-event">12: 01pm – 1:15pm</span>
                                                        </div>
                                                    </div>
                                                    <img src="{{ cloudinary_url('imt/gallery/thumb_m9sran') }}" width="100" alt="Thumbnail" class="schedule-thumb-img">
                                                </div>
                                            </div>
                                            <div class="col-md-9 col-12">
                                                <div class="schedule-content-wrap">
                                                    <div class="schedule-content">
                                                        <div class="schedule-location">
                                                            <p><span><i class="fas fa-map-marker-alt"></i> </span>Monthon city hall, New York</p>
                                                        </div>
                                                        <h4 class="schedule-title">Plenary 4</h4>
                                                        <div class="schedule-descrip">
                                                            <h4>Internet of Things (IOT), HMOs and accessible healthcare for Nigerian</h4>
                                                            <p>•	Discourse</p>
                                                            <p class="collapse hidden-desc show" id="collapseContent7">•	Question and Answers </p>
                                                            <p class="collapse hidden-desc show" id="collapseContent7">•	Photo session </p>
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
                                            <div class="col-lg-3 col-12">
                                                <div class="schedule-thumbnail">
                                                    <div class="schedule-time">
                                                        <h3 class="time">Lunch </h3>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-9 col-12">
                                                <div class="schedule-content-wrap">
                                                    <div class="schedule-content">
                                                        <h4 class="schedule-title">1:16pm – 2:15pm </h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row g-0 align-items-center shedule-row">
                                            <div class="col-md-3 col-12">
                                                <div class="schedule-thumbnail">
                                                    <div class="schedule-time">
                                                        <h3 class="time">7</h3>
                                                        <div class="month-time">
                                                            <span class="month">Time</span>
                                                            <span class="duration-event">2:16pm - 3:30pm</span>
                                                        </div>
                                                    </div>
                                                    <img src="{{ cloudinary_url('imt/gallery/thumb_m9sran') }}" width="100" alt="Thumbnail" class="schedule-thumb-img">
                                                </div>
                                            </div>
                                            <div class="col-md-9 col-12">
                                                <div class="schedule-content-wrap">
                                                    <div class="schedule-content">
                                                        <div class="schedule-location">
                                                            <p><span><i class="fas fa-map-marker-alt"></i> </span>Monthon city hall, New York</p>
                                                        </div>
                                                        <h4 class="schedule-title">Plenary 5</h4>
                                                        <div class="schedule-descrip">
                                                            <h4>Insurance Penetration in Nigeria: What are we missing?</h4>
                                                            <p>•	Lead Presentation</p>
                                                            <p class="collapse hidden-desc show" id="collapseContent7">•	Discourse </p>
                                                            <p class="collapse hidden-desc show" id="collapseContent7">•	Question and Answers </p>
                                                            <p class="collapse hidden-desc show" id="collapseContent7">•	Photo session </p>
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
                                                        <h3 class="time">8</h3>
                                                        <div class="month-time">
                                                            <span class="month">Time</span>
                                                            <span class="duration-event">4:00pm – 5:45pm</span>
                                                        </div>
                                                    </div>
                                                    <img src="{{ cloudinary_url('imt/gallery/thumb_m9sran') }}" width="100" alt="Thumbnail" class="schedule-thumb-img">
                                                </div>
                                            </div>
                                            <div class="col-md-9 col-12">
                                                <div class="schedule-content-wrap">
                                                    <div class="schedule-content">
                                                        <div class="schedule-location">
                                                            <p><span><i class="fas fa-map-marker-alt"></i> </span>Monthon city hall, New York</p>
                                                        </div>
                                                        <h4 class="schedule-title">Pre-Awards Cocktail and Network Mixer </h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row g-0 align-items-center shedule-row">
                                            <div class="col-md-3 col-12">
                                                <div class="schedule-thumbnail">
                                                    <div class="schedule-time">
                                                        <h3 class="time">9</h3>
                                                        <div class="month-time">
                                                            <span class="month">Time</span>
                                                            <span class="duration-event">6:00pm – 8:20pm</span>
                                                        </div>
                                                    </div>
                                                    <img src="{{ cloudinary_url('imt/gallery/thumb_m9sran') }}" width="100" alt="Thumbnail" class="schedule-thumb-img">
                                                </div>
                                            </div>
                                            <div class="col-md-9 col-12">
                                                <div class="schedule-content-wrap">
                                                    <div class="schedule-content">
                                                        <div class="schedule-location">
                                                            <p><span><i class="fas fa-map-marker-alt"></i> </span>Monthon city hall, New York</p>
                                                        </div>
                                                        <h4 class="schedule-title">Awards and Gala Night </h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row g-0 align-items-center shedule-row">
                                            <div class="col-md-3 col-12">
                                                <div class="schedule-thumbnail">
                                                    <div class="schedule-time">
                                                        <h3 class="time">10</h3>
                                                        <div class="month-time">
                                                            <span class="month">Time</span>
                                                            <span class="duration-event">8:20pm – 8: 30pm</span>
                                                        </div>
                                                    </div>
                                                    <img src="{{ cloudinary_url('imt/gallery/thumb_m9sran') }}" width="100" alt="Thumbnail" class="schedule-thumb-img">
                                                </div>
                                            </div>
                                            <div class="col-md-9 col-12">
                                                <div class="schedule-content-wrap">
                                                    <div class="schedule-content">
                                                        <div class="schedule-location">
                                                            <p><span><i class="fas fa-map-marker-alt"></i> </span>Monthon city hall, New York</p>
                                                        </div>
                                                        <h4 class="schedule-title">Vote of thanks & Convener’s Closing Remarks</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row g-0 align-items-center shedule-row">
                                            <div class="col-lg-3 col-12">
                                                <div class="schedule-thumbnail">
                                                    <div class="schedule-time">
                                                        <h3 class="time">Close </h3>
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
        </div>
        <!-- Schedule Area End -->

        <!-- Brand Area Start -->
        <div class="brand-area section-padding-05">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title-wrap">
                            <div class="section-title text-center">
                                <h5 class="sub-title">Sponsors</h5>
                                <h2 class="title">Sponsors & Delegates</h2>
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
                            <img src="{{ cloudinary_url('imt/gallery/2_zrs8go') }}" alt="gallery">
                            <div class="gallery-content">
                                <span>Sep</span>
                                <h5>2022</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <a href="event-list.html" class="single-gallery">
                            <img src="{{ cloudinary_url('imt/gallery/1_ay1q9m') }}" alt="gallery">
                            <div class="gallery-content">
                                <span>Sep</span>
                                <h5>2022</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <a href="event-list.html" class="single-gallery">
                            <img src="{{ cloudinary_url('imt/gallery/6_fdm5de') }}" alt="gallery">
                            <div class="gallery-content">
                                <span>Sep</span>
                                <h5>2022</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <a href="event-list.html" class="single-gallery">
                            <img src="{{ cloudinary_url('imt/gallery/7_frwxu4') }}" alt="gallery">
                            <div class="gallery-content">
                                <span>Sep</span>
                                <h5>2022</h5>
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
