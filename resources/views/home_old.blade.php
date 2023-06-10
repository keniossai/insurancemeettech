@extends('layouts.app')

@section('content')

    <style>
        .image-1 {
            background-image: url({{ cloudinary_url('nbaconference/banner/ho_g5uwcp.png', ['width' => 1800]) }});
        }

        {{-- @media only screen and (max-width: 500px) { --}} {{--    .image-1 { --}} {{--        background-image: url({{ cloudinary_url('nbaconference/bg/hero1_i9fbuc.png', ['width' => 800]) }}); --}} {{--    } --}} {{-- } --}} .image-2 {
            background-image: url({{ cloudinary_url('nbaconference/banner/he_pkg49g.png', ['width' => 1800]) }});
        }

        .image-3 {
            background-image: url({{ cloudinary_url('nbaconference/banner/ba_nrimbe.png', ['width' => 1800]) }});
        }

        .col-12 {
            padding-right: 0px !important;
            padding-left: 0px !important;
        }

        /*@media only screen and (max-width: 500px) {*/

        /*    .image-2 {*/
        /*        background-image: url('images/banner/mosque-1.jpg');*/
        /*    }*/
        /*}*/


        /* .col-lg-6 {
                                                    position: relative;
                                                    width: 100%;
                                                    min-height: 1px;
                                                    padding-right: 0px !important;
                                                    padding-left: 0px !important;
                                                } */

        .banner-item .banner-content-wrap .right {
            font-size: 140px;
        }
    </style>
    <!-- banner start-->
    <section class="main-slider owl-carousel">

        <div class="banner-item overlay image-3">

            <!-- Container end -->
        </div><!-- banner item end-->

        <div class="banner-item overlay image-1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="banner-content-wrap text-right">
                            <h1 class="banner-title">GETTING IT </h1>
                            <h1 class="banner-title right">RIGHT </h1>
                            <!-- Countdown end -->
                            <div class="banner-btn">
                                <a href="{{ url('#know-more') }}" class="btn fill">Know More</a>
                            </div>
                        </div>
                        <!-- Banner content wrap end -->
                    </div><!-- col end-->

                </div><!-- row end-->
            </div>
            <!-- Container end -->
        </div><!-- banner item end-->
        <div class="banner-item overlay image-2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10">
                        <div class="banner-content-wrap">
                            <p class="banner-info">25th August - 1st September 2023</p>
                            <h1 class="banner-title">Charting The Course for Nigeria's Nation Building</h1>

                            <p class="banner-desc p-0">MKO Abiola Stadium Abuja, Nigeria</p>
                            <!-- Countdown end -->
                            <div class="banner-btn">
                                @if (!Auth::check())
                                    <a href="{{ route('register') }}" class="btn">Register Now</a>
                                @endif
                                <a href="{{ url('#know-more') }}" class="btn fill">Know More</a>
                            </div>

                        </div>
                        <!-- Banner content wrap end -->
                    </div><!-- col end-->

                </div><!-- row end-->
            </div>
            <!-- Container end -->
        </div><!-- banner item end-->



    </section>
    <!-- banner end-->

    {{-- event count down i guess but the section says count down start --}}

    <section class="ts-count-down">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mx-auto">
                    <div class="countdown main-countdown gradient clearfix">
                        <div class="counter-item">
                            <span class="days">00</span>
                            <div class="smalltext">Days</div>
                            <b>:</b>
                        </div>
                        <div class="counter-item">
                            <span class="hours">00</span>
                            <div class="smalltext">Hours</div>
                            <b>:</b>
                        </div>
                        <div class="counter-item">
                            <span class="minutes">00</span>
                            <div class="smalltext">Minutes</div>
                            <b>:</b>
                        </div>
                        <div class="counter-item">
                            <span class="seconds">00</span>
                            <div class="smalltext">Seconds</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <br><br><br><br>
    <!-- ts intro start -->
    <section id="know-more" class="ts-intro-item section-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="300ms">
                    <div class="intro-left-content">
                        <h2 class="column-title">
                            <span>A Must Attend</span>
                            Many Expert Speakers
                        </h2>
                        <p>
                            Plenary sessions/interactive panels with Q&As from the floor: with panelists drawn from UN
                            agencies; key experts; civil society and State representatives;
                        </p>
                        @if (!Auth::check())
                            <a href="{{ route('register') }}" class="btn">Register Now</a>
                        @endif
                    </div>
                </div><!-- col end-->
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-lg-6 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="400ms">
                            <div class="single-intro-text mb-30">
                                <i class="icon icon-speaker"></i>
                                <h3 class="ts-title">Awesome Discussions</h3>
                                <p>Panel discussions and speeches from world renowned leaders.</p>
                                <span class="count-number">01</span>
                            </div><!-- single intro text end-->
                        </div><!-- col end-->
                        <div class="col-lg-6 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="500ms">
                            <div class="single-intro-text mb-30">
                                <i class="icon icon-people"></i>
                                <h3 class="ts-title">Foster Bonding</h3>
                                <p>
                                    Foster bonding and mentoring between bar leaders and millennials.
                                </p>
                                <span class="count-number">02</span>
                            </div><!-- single intro text end-->

                        </div><!-- col end-->
                        <div class="col-lg-6 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="600ms">
                            <div class="single-intro-text mb-30">
                                <i class="icon icon-netwrorking"></i>
                                <h3 class="ts-title">Engage New Ideas</h3>
                                <p>New ideas, technical training and knowledge exchanges for lawyers;</p>
                                <span class="count-number">03</span>
                            </div><!-- single intro text end-->
                        </div><!-- col end-->
                        <div class="col-lg-6 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="700ms">
                            <div class="single-intro-text mb-30">
                                <i class="icon icon-fun"></i>
                                <h3 class="ts-title">The Future</h3>
                                <p> A monumental debate on the Africa of the future by African leaders.</p>
                                <span class="count-number">04</span>
                            </div><!-- single intro text end-->
                        </div><!-- col end-->
                    </div>
                </div><!-- col end-->

            </div><!-- row end-->
        </div><!-- container end-->
    </section>
    <!-- ts intro end-->
    
    <!-- President address start -->
    <section class="ts-intro-item">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="300ms">
                    <div class="intro-left-content">
                        <h2 class="column-title">
                            <span>From the NBA President's Desk</span>
                            A Goodwill Message
                        </h2>
                        <p class="text-justify">
                            The 63rd edition of the conference represents a novel platform for knowledge exchange on the
                            continent as we bring together world leaders, political icons, judges, leading lawyers,
                            thought
                            leaders, policy makers, business icons, and civil society to not just discuss but produce an
                            implementation plan to foster the adoption of policies, standards and practices leading to
                            socio-political stability, economic growth, sustainable and infrastructural development for
                            accelerated regional and economic integration...
                        </p>
                        <a href="javascript:" class="btn">Read More <i class="fa fa-arrow-right"></i></a>
                    </div>
                </div><!-- col end-->
                <div class="col-lg-5">
                    <div class="wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="400ms">
                        <div class="single-intro-text mb-30">
                            <img src="{{ cloudinary_url('nbaconference/bg/pres_vey50f', ['width' => 400]) }}"
                                class="img-fluid rounded">
                            <br><br>
                            <h2 class="column-title" style="font-size: 22px">
                                YAKUBU CHONOKO MAIKYAU, OON SAN
                                <span>NBA President</span>
                            </h2>
                        </div><!-- single intro text end-->
                    </div><!-- col end-->
                </div><!-- col end-->

            </div><!-- row end-->
        </div><!-- container end-->
    </section>
    <!-- President address start -->

    <!-- ts blog end-->


    <!-- chairman address start -->
    <section class="ts-intro-item">
        <div class="container">
            <h2 class="column-title">
                <span>From the AGCPC Desk</span>
                AGCPC Chair's Address
            </h2>
            <div class="row">
                <div class="col-lg-6">
                    <div class="col-12">
                        <div class="wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="400ms">
                            <div class="single-intro-text mb-30 d-flex flex-wrap flex-sm-nowrap justify-content-center justify-content-sm-start"
                                style="align-items: center;">
                                <img src="{{ cloudinary_url('nbaconference/bg/mazi_afam_osigwe', ['width' => 300]) }}"
                                    class="img-fluid rounded">
                                <br><br><br><br>
                                <h2 class="column-title" style="font-size: 16px; margin-left:16px;">
                                    Mazi Afam Osigwe, SAN
                                    <span>Chair, NBA AGCPC 2023</span>
                                </h2>
                            </div><!-- single intro text end-->
                        </div><!-- col end-->
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="col-12">
                        <div class="wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="400ms">
                            <div class="single-intro-text mb-30 d-flex flex-wrap flex-sm-nowrap justify-content-center justify-content-sm-start"
                                style="align-items: center;">
                                <img src="{{ cloudinary_url('nbaconference/bg/oyinkansola_badejo_okusanya', ['width' => 400]) }}"
                                    class="img-fluid rounded" style="max-width: 300px;">
                                <br><br><br><br>
                                <h2 class="column-title" style="font-size: 16px; margin-left:16px;">
                                    Oyinkansola Badejo-Okusanya, FCIArb
                                    <span>Alternate Chair, NBA AGCPC 2023</span>
                                </h2>
                            </div><!-- single intro text end-->
                        </div><!-- col end-->
                    </div>
                </div><!-- col end-->
            </div>
            <div class="row">
                <!-- col end-->
                <div class="col-lg-12 mx-2 mt-3 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="300ms">
                    <div class="intro-left-content" x-data="{ expand: false }">
                        <p class="text-justify">
                            Greetings! And welcome to the conference website for the 63rd Annual General Conference of the
                            NBA,
                            holding in our capital city, Abuja from the 25th of August to the 1st of September 2023.
                            We are honoured at the privilege of
                            leading eminent colleagues from across the branches,
                            to plan and deliver what we hope will be another excellent gathering. </p>

                        <p class="text-justify"> As you are undoubtedly aware, the Annual General Conference
                            (AGC) is the leading annual event of the NBA and a staple on the calendar of
                            the Nigerian legal profession. Each year, we come together to discuss, debate and learn;
                            constantly seeking new ways to improve the practice of our profession,
                            how we service our clients, and the way our society is governed and regulated. </p>

                        <div x-show="expand" x-transition style="display: none">
                            <p class="text-justify">
                                The first quarter of this year saw the conduct of arguably the most contentious election
                                cycle
                                in our recent history and the first since the passing of the amended Electoral Act.
                                Lawyers have been front and centre of the pre and post-election activity that has dominated
                                our national
                                discourse for the last several months and there will certainly be a lot to examine at the
                                conference.
                            </p>

                            <p class="text-justify">At the time of launching this website,
                                a President-elect is waiting to take over the reins of office; in-coming and re-elected
                                Governors in States where elections were conducted are either waiting in the wings or
                                planning
                                for the next four years, and members of national and State Houses of Assembly are no less
                                keen to take office.
                                Members of civil society on the other hand, have never been more vocal about their views on
                                governance and the elections;
                                the economy; the judiciary, amongst other institutions; national security; our journey to
                                nationhood;
                                and their expectations from our leaders, all of which concern us as lawyers, as members of
                                the
                                NBA -the leading watchdog of our society, and as collective and individual promoters and
                                upholders of the rule of law.
                            </p>
                            <p class="text-justify">What resonates across all religious, tribal, political and demographic
                                divides,
                                is the desire for good, purposeful leadership to bring us to the nation we have the
                                potential to become.
                                Against this backdrop, the theme of this year’s conference:
                                “GETTING IT RIGHT – Charting the Course for Nigeria’s Nation Building”, is most apposite.
                                It is a carefully thought-out theme that reflects our current realities.
                                We are on the cusp of a new Administration and demands are stringent for our leaders to get
                                it right in all
                                areas of our national development. And the role of the legal profession in the quest for
                                getting it right will be central
                                to discussions at the conference.</p>
                            <p class="text-justify">With the enviable reputation of being the largest annual gathering of
                                lawyers anywhere in the world,
                                a whopping 20,000 delegates are expected to attend this year’s AGC. This number has informed
                                the choice of the Moshood
                                Abiola National Stadium, Abuja as the venue for this year’s conference and we daresay,
                                delegates will not be disappointed.
                                From the religious services to kick off the event, the golf and football tournaments, the
                                health walks,
                                the plenary and breakout sessions, to the ever-vibrant Friendship Centre and Mammy market,
                                the bustling Exhibition Hall,
                                the ‘Unbarred’ concert and the President’s Dinner, the Annual General Conference has always
                                provided something for everyone,
                                and this year will be no exception!
                            </p>
                            <p class="text-justify">The Conference Planning Committee (CPC) is single-minded in its
                                determination to successfully
                                deliver on the task entrusted to it. The launch of the website/conference portal is our
                                first step towards
                                achieving that goal. On this website, delegates will be able to register, make enquiries and
                                payments, and obtain
                                official information and regular updates about all aspects of the conference. Potential
                                sponsors, exhibitors and
                                vendors will also find useful information here.
                            </p>
                            <p class="text-justify">Once again, welcome to the conference planning portal of the NBA AGC
                                2023.
                                We look forward to personally welcoming you in August!
                            </p>

                            <div class="row">
                                <div class="col-md-6">
                                    <div>
                                        <h4>Mazi Afam Osigwe, <small>SAN</small></h4>
                                        <i>Chair, NBA AGCPC 2023 </i>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div>
                                        <h4>Oyinkansola Badejo-Okusanya, <small>FCIArb</small> </h4>
                                        <i>Alternate Chair, NBA AGCPC 2023 </i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <a x-show="!expand" href="javascript:" @click="expand = true" class="btn">Read More <i
                                class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
                <!-- col end-->



            </div><!-- row end-->
        </div><!-- container end-->
    </section>
    <!-- chairman address end-->
    @if (false)
        <section id="events" class="ts-blog section-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="section-title">
                            <span>Stay Informed</span>
                            Events
                        </h2>
                    </div><!-- col end-->
                </div><!-- row end-->
                <div class="row">
                    <div class="mx-auto col-lg-4 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="400ms">
                        <div class=" post">
                            <div class="post-media post-image">
                                <a target="_blank" href="<?= cloudinary_url('nbaconference/misc/4uhg5jo.jpg') ?>"><img
                                        src="<?= cloudinary_url('nbaconference/misc/4uhg5jo.jpg') ?>" class="img-fluid"
                                        alt="news-poster"></a>
                            </div>

                            <div class="post-body">
                                <div class="entry-header">
                                    <h2 class="entry-title">
                                        <a href="<?= cloudinary_url('nbaconference/misc/4uhg5jo.jpg') ?>" target="_blank">
                                            Friendship Center</a>
                                    </h2>
                                </div><!-- header end -->

                                <div class="entry-content">
                                    <p>
                                        <b>Date/Time:</b> Sunday, 21st August 2022, 6PM<br>

                                    </p>

                                </div>


                            </div><!-- post-body end -->
                        </div>

                    </div>

                    <div class="mx-auto col-lg-4 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="400ms">
                        <div class=" post">
                            <div class="post-media post-image">
                                <a target="_blank" href="<?= cloudinary_url('nbaconference/misc/2aiduaj.jpg') ?>"><img
                                        src="<?= cloudinary_url('nbaconference/misc/2aiduaj.jpg') ?>" class="img-fluid"
                                        alt="news-poster"></a>
                            </div>

                            <div class="post-body">
                                <div class="entry-header">
                                    <h2 class="entry-title">
                                        <a href="<?= cloudinary_url('nbaconference/misc/2aiduaj.jpg') ?>" target="_blank">
                                            CJ's Cocktail</a>
                                    </h2>
                                </div><!-- header end -->

                                <div class="entry-content">
                                    <p>
                                        <b>Date/Time:</b> Wednesday, 24th August 2022, 6PM<br>

                                    </p>

                                </div>


                            </div><!-- post-body end -->
                        </div>

                    </div>


                    <div class="mx-auto col-lg-4 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="400ms">
                        <div class=" post">
                            <div class="post-media post-image">
                                <a target="_blank" href="<?= cloudinary_url('nbaconference/misc/3peoc1x.jpg') ?>"><img
                                        src="<?= cloudinary_url('nbaconference/misc/3peoc1x.jpg') ?>" class="img-fluid"
                                        alt="news-poster"></a>
                            </div>

                            <div class="post-body">
                                <div class="entry-header">
                                    <h2 class="entry-title">
                                        <a href="<?= cloudinary_url('nbaconference/misc/3peoc1x.jpg') ?>" target="_blank">
                                            unBARed 5.0</a>
                                    </h2>
                                </div><!-- header end -->

                                <div class="entry-content">
                                    <p>
                                        <b>Date/Time:</b> Wednesday, 24th August 2022, 9PM<br>

                                    </p>

                                </div>


                            </div><!-- post-body end -->
                        </div>

                    </div>




                    <!-- col end-->
                </div><!-- row end-->
            </div><!-- container end-->
            <!-- shap image-->

        </section>
        <section id="ts-speakers-II" class="ts-speakers speaker-II"
            style="background-image:url({{ asset('images/speakers/speaker_bg.png') }})">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <h2 class="section-title text-center">
                            Speakers & Panelists
                        </h2>
                    </div><!-- col end-->
                </div><!-- row end-->
                <div class="row">
                    @foreach ($speakers as $speaker)
                        <div class="col-lg-3 col-md-12 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="400ms">
                            <div class="ts-speaker">
                                <div class="speaker-img">
                                    <img class="img-fluid" src="{{ $speaker->photo() }}" alt="Speaker photo">
                                    <a href="#speaker-quick-view" data-url="{{ route('api.speakers.show', $speaker) }}"
                                        class="view-speaker ts-image-popup" data-effect="mfp-zoom-in">
                                        <i class="icon icon-plus"></i>
                                    </a>
                                </div>
                                <div class="ts-speaker-info">
                                    <h3 class="ts-title"><a href="#">{{ $speaker->name }}</a></h3>
                                    <p>
                                        {{ $speaker->designation }}
                                    </p>
                                </div>
                            </div>

                        </div> <!-- col end-->
                    @endforeach
                    <!-- popup start-->
                    <div id="speaker-quick-view" class="container ts-speaker-popup mfp-hide">
                        <div id="speaker-quick-view-holder"></div>
                    </div><!-- popup end-->


                </div>

            </div><!-- container end-->
            <div class="schedule-listing-btn">
                <a href="{{ route('speakers.index') }}" class="btn">All Speakers</a>
            </div>
        </section>
    @endif


    <!-- ts map direction start-->
    <section class="ts-map-direction wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="400ms">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <h2 class="column-title">
                        <span>The Venue</span>
                        Get Directions to the Venue
                    </h2>

                    <div class="ts-map-tabs">
                        <ul class="nav" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" href="#profile" role="tab" data-toggle="tab">Venue</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#references" role="tab" data-toggle="tab">About the
                                    Venue/How to get there</a>
                            </li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content direction-tabs">
                            <div role="tabpanel" class="tab-pane active" id="profile">
                                <div class="direction-tabs-content">
                                    <h3>MKO Abiola Stadium Abuja, Nigeria</h3>
                                    <p class="derecttion-vanue">
                                        Constitution Ave, Kukwaba 900211, Abuja, Federal Capital Territory
                                    </p>
                                </div><!-- direction tabs end-->
                            </div><!-- tab pane end-->

                            <div role="tabpanel" class="tab-pane fade" id="references">
                                <div class="direction-tabs-content">
                                    <h3>About the Venue </h3>
                                    <p class="derecttion-vanue">
                                        Moshood Abiola National Stadium is a multipurpose national sports stadium located in
                                        Abuja, in the Federal Capital Territory of Nigeria. The stadium serves as a home to
                                        the Nigerian national football team, as well as a center for various social,
                                        cultural, and religious events.
                                    </p>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="contact-info-box">
                                                <h3>Need directions? </h3>
                                                @if (false)
                                                    <p><strong>For virtual onboarding, please call:</strong> <a
                                                            href="tel:09034040435">08115984575</a></p>
                                                @endif
                                                <p><strong>For registration related issues:</strong> <a
                                                        href="tel:09166929240">09166929240</a></p>
                                                <p><strong>Email: </strong><a
                                                        href="mailto:info@nbaconference.com">info@nbaconference.com</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div><!-- row end-->
                                </div><!-- direction tabs end-->
                            </div>
                        </div>

                    </div><!-- map tabs end-->

                </div><!-- col end-->
                <div class="col-lg-6 offset-lg-1">
                    <div class="ts-map">
                        <div class="mapouter">
                            <div class="gmap_canvas">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4047753.6704994454!2d3.1527476558859915!3d7.80205683489943!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x104e0b5a334275eb%3A0x3a912395bd8b3a54!2sMoshood%20Abiola%20National%20Stadium!5e0!3m2!1sen!2sng!4v1682582191024!5m2!1sen!2sng">
                                </iframe>
                            </div>

                        </div>
                    </div>
                </div>
            </div><!-- col end-->
        </div><!-- container end-->
        <div class="speaker-shap">
            <img class="shap1 wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay="300ms"
                src="{{ asset('images/shap/Direction_memphis3.png') }}" alt="">
            <img class="shap2 wow fadeInRight" data-wow-duration="1.5s" data-wow-delay="400ms"
                src="{{ asset('images/shap/Direction_memphis2.png') }}" alt="">
            <img class="shap3 wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay="500ms"
                src="{{ asset('images/shap/Direction_memphis4.png') }}" alt="">
            <img class="shap4 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="600ms"
                src="{{ asset('images/shap/Direction_memphis1.png') }}" alt="">
        </div>
    </section>
    <!-- ts map direction end-->

    <section id="main-container" class="main-container ts-gallery">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <h2 class="section-title text-center">
                    NBA AGC 2022 Gallery
                </h2>
            </div><!-- col end-->
        </div>
        <div class="container">
            <div class="grid ts-grid-item">
                <div class="grid-item">
                    <a href="{{ $i = cloudinary_url('nbaconference/gallery/1_qw6tlz', ['width' => 400]) }}"
                        class="ts-popup"><img src="{{ $i }}" alt="" /></a>
                </div>
                <div class="grid-item">
                    <a href="{{ $i = cloudinary_url('nbaconference/gallery/3_ujoahb', ['width' => 400]) }}"
                        class="ts-popup"><img src="{{ $i }}" alt="" /></a>
                </div>
                <div class="grid-item">
                    <a href="{{ $i = cloudinary_url('nbaconference/gallery/2_c1nwxq', ['width' => 400]) }}"
                        class="ts-popup"><img src="{{ $i }}" alt="" /></a>
                </div>
                <div class="grid-item">
                    <a href="{{ $i = cloudinary_url('nbaconference/gallery/4_wt9i42', ['width' => 400]) }}"
                        class="ts-popup"><img src="{{ $i }}" alt="" /></a>
                </div>
                <div class="grid-item">
                    <a href="{{ $i = cloudinary_url('nbaconference/gallery/5_xiseqh', ['width' => 400]) }}"
                        class="ts-popup"><img src="{{ $i }}" alt="" /></a>
                </div>
                <div class="grid-item">
                    <a href="{{ $i = cloudinary_url('nbaconference/gallery/6_w907ek', ['width' => 400]) }}"
                        class="ts-popup"><img src="{{ $i }}" alt="" /></a>
                </div>
            </div>
        </div><!-- Conatiner end -->
        <div class="schedule-listing-btn">
            <a target="_blank" href="https://drive.google.com/drive/folders/11JM9_E7TgMOzVM0myjZ1OzxsT7QAGgAe"
                class="btn">See More</a>
        </div>

    </section><!-- Main container end -->

@endsection

@push('script')
    <x-scripts.alpine />
    <x-scripts.quickview />
@endpush
