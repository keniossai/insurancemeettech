@extends('layouts.include')


<style>
    .bg-image {
        background-image: url('assets/images/background/landing.png');
    }
</style>
@section('content')
    <!-- Banner Section -->
    <section class="banner-section-two">
        <div class="outer-container clearfix">
            <!--Image Column-->
            <div class="image-column bg-image">
                <div class="image">
                    <img src="{{ asset('assets/images/resource/mobile.png') }}" alt="">
                </div>
            </div>
            <!--Content Column-->
            <div class="content-column">
                <div class="curve-one"></div>
                <div class="curve-two"></div>
                <div class="image-layer"
                    style="background-image: url({{ asset('assets/images/background/pattern-5.png') }})"></div>
                <div class="content-box">
                    <div class="title-box">
                        <div class="title" style="color: #fff;">Hurry Up & Enroll Today, Before It’s Late!</div>
   å                     <h2>NBA Conference 2023</h2>
                        <ul class="event-list">
                            <li>August 25th-September 1st</li>
                            <li>M.K.O Abiola Stadium</li>
                            <li>Abuja, Nigeria</li>
                        </ul>
                        {{-- <div class="separator"></div> --}}
                    </div>
                    <div class="time-box">
                        <div class="time-counter style-two">
                            <div class="time-countdown clearfix" data-countdown="2023/8/25"></div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- modal --}}
            <div id="register-modal" class="d-flex w-100 justify-content-center ">
                <div class="position-fixed bg-light shadow-lg mx-auto d-flex justify-content-center align-items-center"
                    style="top: 70%; z-index:100; width:80%; min-height:20%;padding:10px 20px;">
                    <p class="" style="font-weight: 700; font-size:1.7rem; color:black;">Join us at the NBA
                        Conference 2023 August
                        25th - September 1st</p>
                    {{-- <button class="px-3 py-2 mb-2 bg-info text-light" style="border-radius:5%; margin-left:4px;">REGISTER
                        NOW</button> --}}
                    <div class="button-box text-center">
                        <a href="{{ route('register') }}" class="theme-btn btn-style-one"
                            style="border-radius:5%; margin-left:6px; margin-bottom:4px;">register / login </a>
                    </div>
                    <div id="close-register"
                        style="position: absolute; top:0; right:0; padding-top:10px; padding-right:10px; color:black; font-weight:500;
                    font-size:1.2rem; cursor: pointer;">
                        &#10006;</div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Section -->


    <!-- Market Section -->
    <section class="market-section">
        <div class="section-icons">
            <!-- Icon One -->
            <div class="icon icon-one"></div>
            <!-- Icon Two -->
            <div class="icon icon-two"><img src="{{ asset('assets/images/icons/icon-19.png') }}" alt="" /></div>
            <!-- Icon Three -->
            <div class="icon icon-three"><img src="{{ asset('assets/images/icons/icon-20.png') }}" alt="" /></div>
            <!-- Icon Four -->
            <div class="icon icon-four"><img src="{{ asset('assets/images/icons/icon-21.png') }}" alt="" /></div>
        </div>
        <div class="auto-container">
            <div class="row clearfix">

                <!-- Content Column -->
                <div class="content-column col-lg-7 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <!-- Sec Title -->
                        <div class="sec-title">
                            <div class="title">A Must Attend</div>
                            <h2>Many Expert Speakers</h2>
                            <div class="separator"></div>
                        </div>
                        <div class="text">Plenary sessions/interactive panels with Q&As from the floor: with panelists
                            drawn from UN
                            agencies; key experts; civil society and State representatives;.</div>
                        <div class="row clearfix">

                            <!-- Feature Block Two -->
                            <div class="feature-block-two col-lg-6 col-md-6 col-sm-12">
                                <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                    <div class="icon-box">
                                        <span class="icon flaticon-seminar"></span>
                                    </div>
                                    <h3><a href="speaker.html">Awesome Discussions</h3>
                                    <p class="feature-text">Panel discussions and speeches from world renowned leaders.</p>
                                </div>
                            </div>

                            <!-- Feature Block Two -->
                            <div class="feature-block-two col-lg-6 col-md-6 col-sm-12">
                                <div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                                    <div class="icon-box">
                                        <span class="icon flaticon-elearning-2"></span>
                                    </div>
                                    <h3><a href="speaker.html">Foster Bonding</h3>
                                    <p class="feature-text">
                                        Foster bonding and mentoring between bar leaders and millennials.
                                    </p>
                                </div>
                            </div>

                            <!-- Feature Block Two -->
                            <div class="feature-block-two col-lg-6 col-md-6 col-sm-12">
                                <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                    <div class="icon-box">
                                        <span class="icon flaticon-conversation-1"></span>
                                    </div>
                                    <h3><a href="speaker.html">Engage New Ideas</h3>
                                    <p class="feature-text">New ideas, technical training and knowledge exchanges for
                                        lawyers;</p>
                                </div>
                            </div>

                            <!-- Feature Block Two -->
                            <div class="feature-block-two col-lg-6 col-md-6 col-sm-12">
                                <div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                                    <div class="icon-box">
                                        <span class="icon flaticon-pound"></span>
                                    </div>
                                    <h3><a href="speaker.html">The Future</h3>
                                    <p class="feature-text"> A monumental debate on the Africa of the future by African
                                        leaders.</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Video Column -->
                <div class="video-column col-lg-5 col-md-12 col-sm-12">
                    <div class="inner-column wow slideInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="image">
                            <img src="{{ asset('assets/images/resource/image.png') }}" alt="" />
                        </div>
                        <div class="video-outer">
                            <a href="{{ asset('assets/images/resource/image.png') }}"
                                class="lightbox-image video-boxed"><span class="flaticon-play-button"></span></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Market Section -->

    <!-- Speaker Section Two -->
    <section class="speaker-section-two">
        <!-- Section Icons -->
        <div class="section-icons parallax-scene-2">
            <!-- Icon One -->
            <div class="icon icon-one parallax-layer" data-depth="0.20"><img
                    src="{{ asset('assets/images/icons/icon-14.png') }}" alt="" /></div>
            <!-- Icon Two -->
            <div class="icon icon-two parallax-layer" data-depth="-0.40"><img
                    src="{{ asset('assets/images/icons/icon-15.png') }}" alt="" /></div>
        </div>
        <div class="auto-container">
            <div class="row clearfix">

                <!-- Title Column -->
                <div class="title-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <!-- Sec Title -->
                        <div class="sec-title">
                            <div class="title">Chairs Of NBA Conference 63rd Edition(2023)</div>
                            <div class="separator"></div>
                        </div>
                        <div class="text">Greetings! And welcome to the conference website for the 63rd Annual General
                            Conference of the NBA, holding in our capital city, Abuja from the 25th of August to the 1st of
                            September 2023. We are honoured at the privilege of leading eminent colleagues from across the
                            branches, to plan and deliver what we hope will be another excellent gathering.

                            As you are undoubtedly aware, the Annual General Conference (AGC) is the leading annual event of
                            the NBA and a staple on the calendar of the Nigerian legal profession. Each year, we come
                            together to discuss, debate and learn; constantly seeking new ways to improve the practice of
                            our profession, how we service our clients, and the way our society is governed and regulated.
                        </div>
                    </div>
                </div>

                <!-- Speaker Block -->
                <div class="speaker-block-two col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="dots-one"></div>
                        <div class="dots-two"></div>
                        <div class="image">
                            <img src="{{ cloudinary_url('nbaconference/bg/mazi_afam_osigwe', ['width' => 300]) }}"
                                alt="" />
                            <ul class="social-box">
                                <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                <li><a href="#"><span class="fab fa-behance"></span></a></li>
                                <li><a href="#"><span class="fab fa-facebook"></span></a></li>
                                <li><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
                            </ul>
                        </div>
                        <div class="lower-content">
                            <h3><a href="#popup_2" class="ts-image-popup">Mazi Afam Osigwe, SAN</a></h3>
                            <div class="designation">Chair, NBA AGCPC 2023</div>
                        </div>

                        <div id="popup_2" class="popup-content ts-speaker-popup mfp-hide">

                            <div class="row clearfix">

                                <!-- Image Column -->
                                <div class="image-column col-lg-5 col-md-5 col-sm-12">
                                    <div class="inner-column">
                                        <div class="image">
                                            <img src="{{ cloudinary_url('nbaconference/bg/mazi_afam_osigwe', ['width' => 300]) }}"
                                                alt="">
                                            <ul class="social-box">
                                                <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                                <li><a href="#"><span class="fab fa-behance"></span></a></li>
                                                <li><a href="#"><span class="fab fa-facebook"></span></a></li>
                                                <li><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
                                            </ul>
                                        </div>

                                        <!--Skills-->
                                        <div class="skills">

                                            <!--Skill Item-->
                                            <div class="skill-item">
                                                <div class="skill-header clearfix">
                                                    <div class="skill-title">Digital Marketing</div>
                                                    <div class="skill-percentage">
                                                        <div class="count-box"><span class="count-text" data-speed="2000"
                                                                data-stop="85">0</span>%</div>
                                                    </div>
                                                </div>
                                                <div class="skill-bar">
                                                    <div class="bar-inner">
                                                        <div class="bar progress-line" data-width="85"></div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!--Skill Item-->
                                            <div class="skill-item">
                                                <div class="skill-header clearfix">
                                                    <div class="skill-title">Strategy Planning</div>
                                                    <div class="skill-percentage">
                                                        <div class="count-box"><span class="count-text" data-speed="2000"
                                                                data-stop="70">0</span>%</div>
                                                    </div>
                                                </div>
                                                <div class="skill-bar">
                                                    <div class="bar-inner">
                                                        <div class="bar progress-line" data-width="70"></div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!--Skill Item-->
                                            <div class="skill-item">
                                                <div class="skill-header clearfix">
                                                    <div class="skill-title">Startup Ideas</div>
                                                    <div class="skill-percentage">
                                                        <div class="count-box"><span class="count-text" data-speed="2000"
                                                                data-stop="95">0</span>%</div>
                                                    </div>
                                                </div>
                                                <div class="skill-bar">
                                                    <div class="bar-inner">
                                                        <div class="bar progress-line" data-width="95"></div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>

                                <!-- Content Column -->
                                <div class="content-column col-lg-7 col-md-7 col-sm-12">
                                    <div class="inner-column">
                                        <h3>Mazi Afam Osigwe, SAN</h3>
                                        <span class="speakder-designation">Chair, NBA AGCPC 2023</span>
                                        <div class="text">Greetings! And welcome to the conference website for the 63rd
                                            Annual General Conference of the NBA, holding in our capital city, Abuja from
                                            the 25th of August to the 1st of September 2023. We are honoured at the
                                            privilege of leading eminent colleagues from across the branches, to plan and
                                            deliver what we hope will be another excellent gathering.

                                            As you are undoubtedly aware, the Annual General Conference (AGC) is the leading
                                            annual event of the NBA and a staple on the calendar of the Nigerian legal
                                            profession. Each year, we come together to discuss, debate and learn; constantly
                                            seeking new ways to improve the practice of our profession, how we service our
                                            clients, and the way our society is governed and regulated.

                                            The first quarter of this year saw the conduct of arguably the most contentious
                                            election
                                            cycle
                                            in our recent history and the first since the passing of the amended Electoral
                                            Act.
                                            Lawyers have been front and centre of the pre and post-election activity that
                                            has dominated
                                            our national
                                            discourse for the last several months and there will certainly be a lot to
                                            examine at the
                                            conference.
                                            At the time of launching this website,
                                            a President-elect is waiting to take over the reins of office; in-coming and
                                            re-elected
                                            Governors in States where elections were conducted are either waiting in the
                                            wings or
                                            planning
                                            for the next four years, and members of national and State Houses of Assembly
                                            are no less
                                            keen to take office.
                                            Members of civil society on the other hand, have never been more vocal about
                                            their views on
                                            governance and the elections;
                                            the economy; the judiciary, amongst other institutions; national security; our
                                            journey to
                                            nationhood;
                                            and their expectations from our leaders, all of which concern us as lawyers, as
                                            members of
                                            the
                                            NBA -the leading watchdog of our society, and as collective and individual
                                            promoters and
                                            upholders of the rule of law.
                                            What resonates across all religious, tribal, political and demographic
                                            divides,
                                            is the desire for good, purposeful leadership to bring us to the nation we have
                                            the
                                            potential to become.
                                            Against this backdrop, the theme of this year’s conference:
                                            “GETTING IT RIGHT – Charting the Course for Nigeria’s Nation Building”, is most
                                            apposite.
                                            It is a carefully thought-out theme that reflects our current realities.
                                            We are on the cusp of a new Administration and demands are stringent for our
                                            leaders to get
                                            it right in all
                                            areas of our national development. And the role of the legal profession in the
                                            quest for
                                            getting it right will be central
                                            to discussions at the conference. the enviable reputation of being the largest
                                            annual gathering of
                                            lawyers anywhere in the world,
                                            a whopping 20,000 delegates are expected to attend this year’s AGC. This number
                                            has informed
                                            the choice of the Moshood
                                            Abiola National Stadium, Abuja as the venue for this year’s conference and we
                                            daresay,
                                            delegates will not be disappointed.
                                            From the religious services to kick off the event, the golf and football
                                            tournaments, the
                                            health walks,
                                            the plenary and breakout sessions, to the ever-vibrant Friendship Centre and
                                            Mammy market,
                                            the bustling Exhibition Hall,
                                            the ‘Unbarred’ concert and the President’s Dinner, the Annual General Conference
                                            has always
                                            provided something for everyone,
                                            and this year will be no exception!
                                            The Conference Planning Committee (CPC) is single-minded in its
                                            determination to successfully
                                            deliver on the task entrusted to it. The launch of the website/conference portal
                                            is our
                                            first step towards
                                            achieving that goal. On this website, delegates will be able to register, make
                                            enquiries and
                                            payments, and obtain
                                            official information and regular updates about all aspects of the conference.
                                            Potential
                                            sponsors, exhibitors and
                                            vendors will also find useful information here.
                                            Once again, welcome to the conference planning portal of the NBA AGC
                                            2023.
                                            We look forward to personally welcoming you in August!
                                        </div>
                                        {{-- <ul class="speaker-list">
                                            <li><span>Profession</span>Digital Marketing</li>
                                            <li><span>Experience</span>8 Years</li>
                                            <li><span>Email</span><a
                                                    href="mailto:robert.gates@domain.com">robert.gates@domain.com</a></li>
                                            <li><span>Phone</span><a href="tell:567-123-9008">567.123.9008</a></li>
                                            <li><span>Company</span>MiExpo Business</li>
                                            <li><span>Website</span><a href="#">www.miexpoconf.com</a></li>
                                        </ul> --}}
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>
                </div>

                <!-- Speaker Block -->
                <div class="speaker-block-two col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="dots-one"></div>
                        <div class="dots-two"></div>
                        <div class="image">
                            <img src="{{ cloudinary_url('nbaconference/bg/oyinkansola_badejo_okusanya', ['width' => 400]) }}"
                                alt="" />
                            <ul class="social-box">
                                <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                <li><a href="#"><span class="fab fa-behance"></span></a></li>
                                <li><a href="#"><span class="fab fa-facebook"></span></a></li>
                                <li><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
                            </ul>
                        </div>
                        <div class="lower-content">
                            <h3><a href="#popup_8" class="ts-image-popup"> Oyinkansola Badejo-Okusanya, FCIArb</a></h3>
                            <div class="designation">Alternate Chair, NBA AGCPC 2023</div>
                        </div>

                        <div id="popup_8" class="popup-content ts-speaker-popup mfp-hide">

                            <div class="row clearfix">

                                <!-- Image Column -->
                                <div class="image-column col-lg-5 col-md-5 col-sm-12">
                                    <div class="inner-column">
                                        <div class="image">
                                            <img src="{{ asset('assets/images/resource/team-3.jpg') }}" alt="">
                                            <ul class="social-box">
                                                <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                                <li><a href="#"><span class="fab fa-behance"></span></a></li>
                                                <li><a href="#"><span class="fab fa-facebook"></span></a></li>
                                                <li><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
                                            </ul>
                                        </div>

                                        <!--Skills-->
                                        <div class="skills">

                                            <!--Skill Item-->
                                            <div class="skill-item">
                                                <div class="skill-header clearfix">
                                                    <div class="skill-title">Digital Marketing</div>
                                                    <div class="skill-percentage">
                                                        <div class="count-box"><span class="count-text" data-speed="2000"
                                                                data-stop="85">0</span>%</div>
                                                    </div>
                                                </div>
                                                <div class="skill-bar">
                                                    <div class="bar-inner">
                                                        <div class="bar progress-line" data-width="85"></div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!--Skill Item-->
                                            <div class="skill-item">
                                                <div class="skill-header clearfix">
                                                    <div class="skill-title">Strategy Planning</div>
                                                    <div class="skill-percentage">
                                                        <div class="count-box"><span class="count-text" data-speed="2000"
                                                                data-stop="70">0</span>%</div>
                                                    </div>
                                                </div>
                                                <div class="skill-bar">
                                                    <div class="bar-inner">
                                                        <div class="bar progress-line" data-width="70"></div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!--Skill Item-->
                                            <div class="skill-item">
                                                <div class="skill-header clearfix">
                                                    <div class="skill-title">Startup Ideas</div>
                                                    <div class="skill-percentage">
                                                        <div class="count-box"><span class="count-text" data-speed="2000"
                                                                data-stop="95">0</span>%</div>
                                                    </div>
                                                </div>
                                                <div class="skill-bar">
                                                    <div class="bar-inner">
                                                        <div class="bar progress-line" data-width="95"></div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>

                                <!-- Content Column -->
                                <div class="content-column col-lg-7 col-md-7 col-sm-12">
                                    <div class="inner-column">
                                        <h3>George Tim</h3>
                                        <span class="speakder-designation">Alternate Chair, NBA AGCPC 2023</span>
                                        <div class="text">
                                            <div class="text">Greetings! And welcome to the conference website for the
                                                63rd
                                                Annual General Conference of the NBA, holding in our capital city, Abuja
                                                from
                                                the 25th of August to the 1st of September 2023. We are honoured at the
                                                privilege of leading eminent colleagues from across the branches, to plan
                                                and
                                                deliver what we hope will be another excellent gathering.

                                                As you are undoubtedly aware, the Annual General Conference (AGC) is the
                                                leading
                                                annual event of the NBA and a staple on the calendar of the Nigerian legal
                                                profession. Each year, we come together to discuss, debate and learn;
                                                constantly
                                                seeking new ways to improve the practice of our profession, how we service
                                                our
                                                clients, and the way our society is governed and regulated.

                                                The first quarter of this year saw the conduct of arguably the most
                                                contentious
                                                election
                                                cycle
                                                in our recent history and the first since the passing of the amended
                                                Electoral
                                                Act.
                                                Lawyers have been front and centre of the pre and post-election activity
                                                that
                                                has dominated
                                                our national
                                                discourse for the last several months and there will certainly be a lot to
                                                examine at the
                                                conference.
                                                At the time of launching this website,
                                                a President-elect is waiting to take over the reins of office; in-coming and
                                                re-elected
                                                Governors in States where elections were conducted are either waiting in the
                                                wings or
                                                planning
                                                for the next four years, and members of national and State Houses of
                                                Assembly
                                                are no less
                                                keen to take office.
                                                Members of civil society on the other hand, have never been more vocal about
                                                their views on
                                                governance and the elections;
                                                the economy; the judiciary, amongst other institutions; national security;
                                                our
                                                journey to
                                                nationhood;
                                                and their expectations from our leaders, all of which concern us as lawyers,
                                                as
                                                members of
                                                the
                                                NBA -the leading watchdog of our society, and as collective and individual
                                                promoters and
                                                upholders of the rule of law.
                                                What resonates across all religious, tribal, political and demographic
                                                divides,
                                                is the desire for good, purposeful leadership to bring us to the nation we
                                                have
                                                the
                                                potential to become.
                                                Against this backdrop, the theme of this year’s conference:
                                                “GETTING IT RIGHT – Charting the Course for Nigeria’s Nation Building”, is
                                                most
                                                apposite.
                                                It is a carefully thought-out theme that reflects our current realities.
                                                We are on the cusp of a new Administration and demands are stringent for our
                                                leaders to get
                                                it right in all
                                                areas of our national development. And the role of the legal profession in
                                                the
                                                quest for
                                                getting it right will be central
                                                to discussions at the conference. the enviable reputation of being the
                                                largest
                                                annual gathering of
                                                lawyers anywhere in the world,
                                                a whopping 20,000 delegates are expected to attend this year’s AGC. This
                                                number
                                                has informed
                                                the choice of the Moshood
                                                Abiola National Stadium, Abuja as the venue for this year’s conference and
                                                we
                                                daresay,
                                                delegates will not be disappointed.
                                                From the religious services to kick off the event, the golf and football
                                                tournaments, the
                                                health walks,
                                                the plenary and breakout sessions, to the ever-vibrant Friendship Centre and
                                                Mammy market,
                                                the bustling Exhibition Hall,
                                                the ‘Unbarred’ concert and the President’s Dinner, the Annual General
                                                Conference
                                                has always
                                                provided something for everyone,
                                                and this year will be no exception!
                                                The Conference Planning Committee (CPC) is single-minded in its
                                                determination to successfully
                                                deliver on the task entrusted to it. The launch of the website/conference
                                                portal
                                                is our
                                                first step towards
                                                achieving that goal. On this website, delegates will be able to register,
                                                make
                                                enquiries and
                                                payments, and obtain
                                                official information and regular updates about all aspects of the
                                                conference.
                                                Potential
                                                sponsors, exhibitors and
                                                vendors will also find useful information here.
                                                Once again, welcome to the conference planning portal of the NBA AGC
                                                2023.
                                                We look forward to personally welcoming you in August!
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>
                </div>

                @if (false)
                    <!-- Sec Title -->
                    <div class="sec-title col-lg-12">
                        <h2>Who’s Speaking</h2>
                        <div class="separator"></div>
                    </div>
                    <!-- Speaker Block -->
                    <div class="speaker-block-two col-lg-3 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="dots-one"></div>
                            <div class="dots-two"></div>
                            <div class="image">
                                <img src="{{ asset('assets/images/resource/team-5.jpg') }}" alt="" />
                                <ul class="social-box">
                                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fab fa-behance"></span></a></li>
                                    <li><a href="#"><span class="fab fa-facebook"></span></a></li>
                                    <li><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
                                </ul>
                            </div>
                            <div class="lower-content">
                                <h3><a href="#popup_1" class="ts-image-popup">Robert Gates</a></h3>
                                <div class="designation">Lead Speaker</div>
                            </div>

                            <div id="popup_1" class="popup-content ts-speaker-popup mfp-hide">

                                <div class="row clearfix">

                                    <!-- Image Column -->
                                    <div class="image-column col-lg-5 col-md-5 col-sm-12">
                                        <div class="inner-column">
                                            <div class="image">
                                                <img src="{{ asset('assets/images/resource/team-5.jpg') }}"
                                                    alt="">
                                                <ul class="social-box">
                                                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                                    <li><a href="#"><span class="fab fa-behance"></span></a></li>
                                                    <li><a href="#"><span class="fab fa-facebook"></span></a></li>
                                                    <li><a href="#"><span class="fab fa-linkedin-in"></span></a>
                                                    </li>
                                                </ul>
                                            </div>

                                            <!--Skills-->
                                            <div class="skills">

                                                <!--Skill Item-->
                                                <div class="skill-item">
                                                    <div class="skill-header clearfix">
                                                        <div class="skill-title">Digital Marketing</div>
                                                        <div class="skill-percentage">
                                                            <div class="count-box"><span class="count-text"
                                                                    data-speed="2000" data-stop="85">0</span>%</div>
                                                        </div>
                                                    </div>
                                                    <div class="skill-bar">
                                                        <div class="bar-inner">
                                                            <div class="bar progress-line" data-width="85"></div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!--Skill Item-->
                                                <div class="skill-item">
                                                    <div class="skill-header clearfix">
                                                        <div class="skill-title">Strategy Planning</div>
                                                        <div class="skill-percentage">
                                                            <div class="count-box"><span class="count-text"
                                                                    data-speed="2000" data-stop="70">0</span>%</div>
                                                        </div>
                                                    </div>
                                                    <div class="skill-bar">
                                                        <div class="bar-inner">
                                                            <div class="bar progress-line" data-width="70"></div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!--Skill Item-->
                                                <div class="skill-item">
                                                    <div class="skill-header clearfix">
                                                        <div class="skill-title">Startup Ideas</div>
                                                        <div class="skill-percentage">
                                                            <div class="count-box"><span class="count-text"
                                                                    data-speed="2000" data-stop="95">0</span>%</div>
                                                        </div>
                                                    </div>
                                                    <div class="skill-bar">
                                                        <div class="bar-inner">
                                                            <div class="bar progress-line" data-width="95"></div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                    </div>

                                    <!-- Content Column -->
                                    <div class="content-column col-lg-7 col-md-7 col-sm-12">
                                        <div class="inner-column">
                                            <h3>Robert Gates</h3>
                                            <span class="speakder-designation">Speaker, Trainer</span>
                                            <div class="text">Dolor sit amet, consectetur adipisicing elitm sed eiusmod
                                                tempor incididunt ut labore etsu dolore magna aliquatenim minim veniam quis
                                                nostrud exercitation ulamco laboris nis aliquip consequat aute irure dolor.
                                            </div>
                                            <ul class="speaker-list">
                                                <li><span>Profession</span>Digital Marketing</li>
                                                <li><span>Experience</span>8 Years</li>
                                                <li><span>Email</span><a
                                                        href="mailto:robert.gates@domain.com">robert.gates@domain.com</a>
                                                </li>
                                                <li><span>Phone</span><a href="tell:567-123-9008">567.123.9008</a></li>
                                                <li><span>Company</span>MiExpo Business</li>
                                                <li><span>Website</span><a href="#">www.miexpoconf.com</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>

                            </div>

                        </div>
                    </div>

                    <!-- Speaker Block -->
                    <div class="speaker-block-two col-lg-3 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="dots-one"></div>
                            <div class="dots-two"></div>
                            <div class="image">
                                <img src="{{ asset('assets/') }}images/resource/team-6.jpg" alt="" />
                                <ul class="social-box">
                                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fab fa-behance"></span></a></li>
                                    <li><a href="#"><span class="fab fa-facebook"></span></a></li>
                                    <li><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
                                </ul>
                            </div>
                            <div class="lower-content">
                                <h3><a href="#popup_22" class="ts-image-popup">Paul Wilson</a></h3>
                                <div class="designation">Lead Speaker</div>
                            </div>

                            <div id="popup_22" class="popup-content ts-speaker-popup mfp-hide">

                                <div class="row clearfix">

                                    <!-- Image Column -->
                                    <div class="image-column col-lg-5 col-md-5 col-sm-12">
                                        <div class="inner-column">
                                            <div class="image">
                                                <img src="{{ asset('assets/') }}images/resource/team-6.jpg"
                                                    alt="">
                                                <ul class="social-box">
                                                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                                    <li><a href="#"><span class="fab fa-behance"></span></a></li>
                                                    <li><a href="#"><span class="fab fa-facebook"></span></a></li>
                                                    <li><a href="#"><span class="fab fa-linkedin-in"></span></a>
                                                    </li>
                                                </ul>
                                            </div>

                                            <!--Skills-->
                                            <div class="skills">

                                                <!--Skill Item-->
                                                <div class="skill-item">
                                                    <div class="skill-header clearfix">
                                                        <div class="skill-title">Digital Marketing</div>
                                                        <div class="skill-percentage">
                                                            <div class="count-box"><span class="count-text"
                                                                    data-speed="2000" data-stop="85">0</span>%</div>
                                                        </div>
                                                    </div>
                                                    <div class="skill-bar">
                                                        <div class="bar-inner">
                                                            <div class="bar progress-line" data-width="85"></div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!--Skill Item-->
                                                <div class="skill-item">
                                                    <div class="skill-header clearfix">
                                                        <div class="skill-title">Strategy Planning</div>
                                                        <div class="skill-percentage">
                                                            <div class="count-box"><span class="count-text"
                                                                    data-speed="2000" data-stop="70">0</span>%</div>
                                                        </div>
                                                    </div>
                                                    <div class="skill-bar">
                                                        <div class="bar-inner">
                                                            <div class="bar progress-line" data-width="70"></div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!--Skill Item-->
                                                <div class="skill-item">
                                                    <div class="skill-header clearfix">
                                                        <div class="skill-title">Startup Ideas</div>
                                                        <div class="skill-percentage">
                                                            <div class="count-box"><span class="count-text"
                                                                    data-speed="2000" data-stop="95">0</span>%</div>
                                                        </div>
                                                    </div>
                                                    <div class="skill-bar">
                                                        <div class="bar-inner">
                                                            <div class="bar progress-line" data-width="95"></div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                    </div>

                                    <!-- Content Column -->
                                    <div class="content-column col-lg-7 col-md-7 col-sm-12">
                                        <div class="inner-column">
                                            <h3>Paul Wilson</h3>
                                            <span class="speakder-designation">Speaker, Trainer</span>
                                            <div class="text">Dolor sit amet, consectetur adipisicing elitm sed eiusmod
                                                tempor incididunt ut labore etsu dolore magna aliquatenim minim veniam quis
                                                nostrud exercitation ulamco laboris nis aliquip consequat aute irure dolor.
                                            </div>
                                            <ul class="speaker-list">
                                                <li><span>Profession</span>Digital Marketing</li>
                                                <li><span>Experience</span>8 Years</li>
                                                <li><span>Email</span><a
                                                        href="mailto:robert.gates@domain.com">robert.gates@domain.com</a>
                                                </li>
                                                <li><span>Phone</span><a href="tell:567-123-9008">567.123.9008</a></li>
                                                <li><span>Company</span>MiExpo Business</li>
                                                <li><span>Website</span><a href="#">www.miexpoconf.com</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>

                            </div>

                        </div>
                    </div>

                    <!-- Speaker Block -->
                    <div class="speaker-block-two col-lg-3 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="dots-one"></div>
                            <div class="dots-two"></div>
                            <div class="image">
                                <img src="{{ asset('assets/') }}images/resource/team-7.jpg" alt="" />
                                <ul class="social-box">
                                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fab fa-behance"></span></a></li>
                                    <li><a href="#"><span class="fab fa-facebook"></span></a></li>
                                    <li><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
                                </ul>
                            </div>
                            <div class="lower-content">
                                <h3><a href="#popup_3" class="ts-image-popup">George Tim</a></h3>
                                <div class="designation">Lead Speaker</div>
                            </div>

                            <div id="popup_3" class="popup-content ts-speaker-popup mfp-hide">

                                <div class="row clearfix">

                                    <!-- Image Column -->
                                    <div class="image-column col-lg-5 col-md-5 col-sm-12">
                                        <div class="inner-column">
                                            <div class="image">
                                                <img src="{{ asset('assets/') }}images/resource/team-7.jpg"
                                                    alt="">
                                                <ul class="social-box">
                                                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                                    <li><a href="#"><span class="fab fa-behance"></span></a></li>
                                                    <li><a href="#"><span class="fab fa-facebook"></span></a></li>
                                                    <li><a href="#"><span class="fab fa-linkedin-in"></span></a>
                                                    </li>
                                                </ul>
                                            </div>

                                            <!--Skills-->
                                            <div class="skills">

                                                <!--Skill Item-->
                                                <div class="skill-item">
                                                    <div class="skill-header clearfix">
                                                        <div class="skill-title">Digital Marketing</div>
                                                        <div class="skill-percentage">
                                                            <div class="count-box"><span class="count-text"
                                                                    data-speed="2000" data-stop="85">0</span>%</div>
                                                        </div>
                                                    </div>
                                                    <div class="skill-bar">
                                                        <div class="bar-inner">
                                                            <div class="bar progress-line" data-width="85"></div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!--Skill Item-->
                                                <div class="skill-item">
                                                    <div class="skill-header clearfix">
                                                        <div class="skill-title">Strategy Planning</div>
                                                        <div class="skill-percentage">
                                                            <div class="count-box"><span class="count-text"
                                                                    data-speed="2000" data-stop="70">0</span>%</div>
                                                        </div>
                                                    </div>
                                                    <div class="skill-bar">
                                                        <div class="bar-inner">
                                                            <div class="bar progress-line" data-width="70"></div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!--Skill Item-->
                                                <div class="skill-item">
                                                    <div class="skill-header clearfix">
                                                        <div class="skill-title">Startup Ideas</div>
                                                        <div class="skill-percentage">
                                                            <div class="count-box"><span class="count-text"
                                                                    data-speed="2000" data-stop="95">0</span>%</div>
                                                        </div>
                                                    </div>
                                                    <div class="skill-bar">
                                                        <div class="bar-inner">
                                                            <div class="bar progress-line" data-width="95"></div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                    </div>

                                    <!-- Content Column -->
                                    <div class="content-column col-lg-7 col-md-7 col-sm-12">
                                        <div class="inner-column">
                                            <h3>George Tim</h3>
                                            <span class="speakder-designation">Speaker, Trainer</span>
                                            <div class="text">Dolor sit amet, consectetur adipisicing elitm sed eiusmod
                                                tempor incididunt ut labore etsu dolore magna aliquatenim minim veniam quis
                                                nostrud exercitation ulamco laboris nis aliquip consequat aute irure dolor.
                                            </div>
                                            <ul class="speaker-list">
                                                <li><span>Profession</span>Digital Marketing</li>
                                                <li><span>Experience</span>8 Years</li>
                                                <li><span>Email</span><a
                                                        href="mailto:robert.gates@domain.com">robert.gates@domain.com</a>
                                                </li>
                                                <li><span>Phone</span><a href="tell:567-123-9008">567.123.9008</a></li>
                                                <li><span>Company</span>MiExpo Business</li>
                                                <li><span>Website</span><a href="#">www.miexpoconf.com</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>

                            </div>

                        </div>
                    </div>

                    <!-- Speaker Block -->
                    <div class="speaker-block-two col-lg-3 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="dots-one"></div>
                            <div class="dots-two"></div>
                            <div class="image">
                                <img src="{{ asset('assets/') }}images/resource/team-8.jpg" alt="" />
                                <ul class="social-box">
                                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fab fa-behance"></span></a></li>
                                    <li><a href="#"><span class="fab fa-facebook"></span></a></li>
                                    <li><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
                                </ul>
                            </div>
                            <div class="lower-content">
                                <h3><a href="#popup_4" class="ts-image-popup">Benjamin Zara</a></h3>
                                <div class="designation">Lead Speaker</div>
                            </div>

                            <div id="popup_4" class="popup-content ts-speaker-popup mfp-hide">

                                <div class="row clearfix">

                                    <!-- Image Column -->
                                    <div class="image-column col-lg-5 col-md-5 col-sm-12">
                                        <div class="inner-column">
                                            <div class="image">
                                                <img src="{{ asset('assets/') }}images/resource/team-8.jpg"
                                                    alt="">
                                                <ul class="social-box">
                                                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                                    <li><a href="#"><span class="fab fa-behance"></span></a></li>
                                                    <li><a href="#"><span class="fab fa-facebook"></span></a></li>
                                                    <li><a href="#"><span class="fab fa-linkedin-in"></span></a>
                                                    </li>
                                                </ul>
                                            </div>

                                            <!--Skills-->
                                            <div class="skills">

                                                <!--Skill Item-->
                                                <div class="skill-item">
                                                    <div class="skill-header clearfix">
                                                        <div class="skill-title">Digital Marketing</div>
                                                        <div class="skill-percentage">
                                                            <div class="count-box"><span class="count-text"
                                                                    data-speed="2000" data-stop="85">0</span>%</div>
                                                        </div>
                                                    </div>
                                                    <div class="skill-bar">
                                                        <div class="bar-inner">
                                                            <div class="bar progress-line" data-width="85"></div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!--Skill Item-->
                                                <div class="skill-item">
                                                    <div class="skill-header clearfix">
                                                        <div class="skill-title">Strategy Planning</div>
                                                        <div class="skill-percentage">
                                                            <div class="count-box"><span class="count-text"
                                                                    data-speed="2000" data-stop="70">0</span>%</div>
                                                        </div>
                                                    </div>
                                                    <div class="skill-bar">
                                                        <div class="bar-inner">
                                                            <div class="bar progress-line" data-width="70"></div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!--Skill Item-->
                                                <div class="skill-item">
                                                    <div class="skill-header clearfix">
                                                        <div class="skill-title">Startup Ideas</div>
                                                        <div class="skill-percentage">
                                                            <div class="count-box"><span class="count-text"
                                                                    data-speed="2000" data-stop="95">0</span>%</div>
                                                        </div>
                                                    </div>
                                                    <div class="skill-bar">
                                                        <div class="bar-inner">
                                                            <div class="bar progress-line" data-width="95"></div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                    </div>

                                    <!-- Content Column -->
                                    <div class="content-column col-lg-7 col-md-7 col-sm-12">
                                        <div class="inner-column">
                                            <h3>Benjamin Zara</h3>
                                            <span class="speakder-designation">Speaker, Trainer</span>
                                            <div class="text">Dolor sit amet, consectetur adipisicing elitm sed eiusmod
                                                tempor incididunt ut labore etsu dolore magna aliquatenim minim veniam quis
                                                nostrud exercitation ulamco laboris nis aliquip consequat aute irure dolor.
                                            </div>
                                            <ul class="speaker-list">
                                                <li><span>Profession</span>Digital Marketing</li>
                                                <li><span>Experience</span>8 Years</li>
                                                <li><span>Email</span><a
                                                        href="mailto:robert.gates@domain.com">robert.gates@domain.com</a>
                                                </li>
                                                <li><span>Phone</span><a href="tell:567-123-9008">567.123.9008</a></li>
                                                <li><span>Company</span>MiExpo Business</li>
                                                <li><span>Website</span><a href="#">www.miexpoconf.com</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>

                            </div>

                        </div>
                    </div>
                @endif

            </div>

        </div>
    </section>
    <!-- End Speaker Section Two -->

    <!-- Fluid Section Two -->
    <section class="fluid-section-two">
        <!-- Section Icons -->
        <div class="secion-icons">
            <div class="icon-one"><img src="{{ asset('assets/images/icons/icon-23.png') }}" alt="" /></div>
            <div class="icon-two"></div>
            <div class="icon-three"><img src="{{ asset('assets/images/icons/icon-24.png') }}" alt="" /></div>
        </div>
        <div class="outer-section clearfix">
            <!--Content Column-->
            <div class="content-column">
                <div class="content-box">
                    <!-- Sec Title -->
                    <div class="sec-title light">
                        <div class="title">From the NBA president's desk</div>
                        <h2>A Goodwill Message</h2>
                    </div>

                    <!--Accordian Box-->
                    <ul class="accordion-box">


                        <!--Block-->
                        <li class="accordion">
                            <div class="acc-btn">
                                <p class="greeting">
                                    The 63rd edition of the conference represents a novel platform for
                                    knowledge exchange on the continent as we bring together world leaders, political
                                    icons, judges, leading lawyers, thought leaders, policy makers, business icons, and
                                    civil society to not just discuss but produce an implementation plan to foster the
                                    adoption of policies, standards and practices leading to socio-political stability,
                                    economic growth, sustainable and infrastructural development for accelerated
                                    regional and economic integration...
                                </p>
                            </div>
                        </li>

                    </ul>

                </div>
            </div>

            <!--Image Column-->
            <div class="image-column">
                <div class="image-layer"
                    style="background-image: url({{ cloudinary_url('nbaconference/bg/pres_vey50f', ['width' => 500]) }})">
                </div>
                <div class="image">
                    <img src="{{ asset('assets/') }}images/resource/image-3.jpg" alt="">
                </div>
                <div class="image-content">
                    <div class="text">YAKUBU CHONOKO MAIKYAU, OON SAN
                    </div>
                    <div class="title">From the NBA president's desk</div>
                    <div class="icon"><img src="{{ asset('assets/images/icons/icon-25.png') }}" alt="" />
                    </div>
                </div>
            </div>
            <!--End Image Column-->

        </div>
    </section>

    <!-- Programs Section -->
    {{-- <section class="programs-section">
        <!-- Section Icons -->
        <div class="section-icons">
            <div class="icon-one"><img src="{{ asset('assets/') }}images/icons/icon-26.png" alt="" /></div>
            <div class="icon-two"><img src="{{ asset('assets/') }}images/icons/icon-27.png" alt="" /></div>
            <div class="icon-three"><img src="{{ asset('assets/') }}images/icons/icon-28.png" alt="" /></div>
        </div>
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title centered">
                <div class="title">NBA Conference Agenda To Explore</div>
                <h2>Program Agenda</h2>
                <div class="separator"></div>
            </div>
            <div class="inner-container">

                <!-- Programs Block -->
                <div class="programs-block">
                    <div class="inner-block clearfix wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="content col-lg-6 col-md-12 col-sm-12">
                            <div class="content-inner">
                                <!-- Program Info -->
                                <div class="program-info">WORKSHOP <span class="time">9:00 am to 11:00 am</span><span
                                        class="dott"></span></div>
                                <div class="title">(Yakubu Chonoko)</div>
                                <h3><a href="#">The Instant Results</a></h3>
                                <div class="text">Veniam quis nostrud exercitation ullamco laboris irure dolorn
                                    reprehenderit voluptate velit.</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Programs Block -->
                <div class="programs-block style-two">
                    <div class="inner-block clearfix wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="content col-lg-6 col-md-12 col-sm-12">
                            <div class="content-inner">
                                <!-- Program Info -->
                                <div class="program-info">SEMINAR <span class="time">9:00 am to 11:00 am</span><span
                                        class="dott"></span></div>
                                <div class="title">(Yakubu Chonoko)</div>
                                <h3><a href="#">Focus On Dynamics</a></h3>
                                <div class="text">Veniam quis nostrud exercitation ullamco laboris irure dolorn
                                    reprehenderit voluptate velit.</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Programs Block -->
                <div class="programs-block">
                    <div class="inner-block clearfix wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="content col-lg-6 col-md-12 col-sm-12">
                            <div class="content-inner">
                                <!-- Program Info -->
                                <div class="program-info">WORKSHOP <span class="time">9:00 am to 11:00 am</span><span
                                        class="dott"></span></div>
                                <div class="title">(Yakubu Chonoko)</div>
                                <h3><a href="#">Growing Power Politics</a></h3>
                                <div class="text">Veniam quis nostrud exercitation ullamco laboris irure dolorn
                                    reprehenderit voluptate velit.</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Programs Block -->
                <div class="programs-block style-two">
                    <div class="inner-block clearfix wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="content col-lg-6 col-md-12 col-sm-12">
                            <div class="content-inner">
                                <!-- Program Info -->
                                <div class="program-info">SEMINAR <span class="time">9:00 am to 11:00 am</span><span
                                        class="dott"></span></div>
                                <div class="title">(Yakubu Chonoko)</div>
                                <h3><a href="#">Inspiration Of Arctics</a></h3>
                                <div class="text">Veniam quis nostrud exercitation ullamco laboris irure dolorn
                                    reprehenderit voluptate velit.</div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="btn-box text-center">
                <a href="#" class="theme-btn btn-style-one">get More Details</a>
            </div>

        </div>
        <div class="side-img paroller" data-paroller-factor="0.80" data-paroller-factor-lg="0.150"
            data-paroller-type="foreground" data-paroller-direction="vertical">
            <img src="{{ asset('assets/') }}images/resource/id-card.png" alt="" />
        </div>
    </section> --}}
    <!-- End Programs Section -->

    <!-- Gallery Section Two -->
    <section class="gallery-section-two" style="margin-top: 50px;">
        <!-- Section Icons -->
        <div class="section-icons">
            <div class="icon-one"><img src="{{ asset('assets/') }}images/icons/icon-23.png" alt="" /></div>
        </div>
        <div class="auto-container d-flex">
            <!-- Sec Title -->
            <div class="sec-title light">
                <div class="title">NBA AGC Gallery</div>
                <h2>Conference Gallery</h2>
            </div>
            <div class="mt-5" style="margin-left:20px; margin-top:20px; cursor: pointer;">
                <a href="https://drive.google.com/drive/folders/11JM9_E7TgMOzVM0myjZ1OzxsT7QAGgAe"
                    class="theme-btn btn-style-one" target="_blank">View All</a>
            </div>
        </div>
        <div class="outer-container">
            <div class="gallery-carousel owl-carousel owl-theme">

                <!-- Gallery Block -->
                <div class="gallery-block">
                    <div class="inner-box">
                        <div class="image">
                            <img src="{{ $i = cloudinary_url('nbaconference/gallery/766A8218_zxkjan', ['width' => 400]) }}"
                                alt="" />
                            <!-- Overlay Box -->
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="overlay-content">
                                        <a class="plus"
                                            href="{{ $i = cloudinary_url('nbaconference/gallery/766A8218_zxkjan') }}"
                                            data-fancybox="gallery-1" data-caption=""><span
                                                class="flaticon-add-1"></span></a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Gallery Block -->
                <div class="gallery-block">
                    <div class="inner-box">
                        <div class="image">
                            <img src="{{ $i = cloudinary_url('nbaconference/gallery/766A8096_oxwimn', ['width' => 400]) }}"
                                alt="" />
                            <!-- Overlay Box -->
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="overlay-content">
                                        <a class="plus"
                                            href="{{ $i = cloudinary_url('nbaconference/gallery/766A8096_oxwimn') }}"
                                            data-fancybox="gallery-1" data-caption=""><span
                                                class="flaticon-add-1"></span></a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>


                <!-- Gallery Block -->
                <div class="gallery-block">
                    <div class="inner-box">
                        <div class="image">
                            <img src="{{ $i = cloudinary_url('nbaconference/gallery/5_xiseqh', ['width' => 400]) }}"
                                alt="" />
                            <!-- Overlay Box -->
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="overlay-content">
                                        <a class="plus"
                                            href="{{ $i = cloudinary_url('nbaconference/gallery/5_xiseqh') }}"
                                            data-fancybox="gallery-1" data-caption=""><span
                                                class="flaticon-add-1"></span></a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Gallery Block -->
                <div class="gallery-block">
                    <div class="inner-box">
                        <div class="image">
                            <img src="{{ $i = cloudinary_url('nbaconference/gallery/6_w907ek', ['width' => 400]) }}"
                                alt="" />
                            <!-- Overlay Box -->
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="overlay-content">
                                        <a class="plus"
                                            href="{{ $i = cloudinary_url('nbaconference/gallery/6_w907ek') }}"
                                            data-fancybox="gallery-1" data-caption=""><span
                                                class="flaticon-add-1"></span></a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Gallery Block -->
                <div class="gallery-block">
                    <div class="inner-box">
                        <div class="image">
                            <img src="{{ asset('images/conference-1.jpeg') }}" alt="" />
                            <!-- Overlay Box -->
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="overlay-content">
                                        <a class="plus" href="{{ asset('images/conference-1.jpeg') }}"
                                            data-fancybox="gallery-1" data-caption=""><span
                                                class="flaticon-add-1"></span></a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>


                <!-- Gallery Block -->
                <div class="gallery-block">
                    <div class="inner-box">
                        <div class="image">
                            <img src="{{ asset('images/conference-2.jpeg') }}" alt="" />
                            <!-- Overlay Box -->
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="overlay-content">
                                        <a class="plus" href="{{ asset('images/conference-2.jpeg') }}"
                                            data-fancybox="gallery-1" data-caption=""><span
                                                class="flaticon-add-1"></span></a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Gallery Block -->
                <div class="gallery-block">
                    <div class="inner-box">
                        <div class="image">
                            <img src="{{ asset('images/conference-3.jpeg') }}" alt="" />
                            <!-- Overlay Box -->
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="overlay-content">
                                        <a class="plus" href="{{ asset('images/conference-3.jpeg') }}"
                                            data-fancybox="gallery-1" data-caption=""><span
                                                class="flaticon-add-1"></span></a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Gallery Section Two -->

    <!-- Digital Event Section -->
    <section class="digital-event-section" style="margin-top:50px;">
        <div class="map-outer">
            <div class="map-canvas" data-zoom="12" data-lat="-37.817085" data-lng="144.955631" data-type="roadmap"
                data-hue="#ffc400" data-title="" data-icon-path="{{ asset('assets/') }}images/icons/map-marker.png"
                data-content="256, Victory Street,, New York <br> City, AZ 550067 <br> (1800) 456 7890 <br> Mon-Sat: 7.00an - 9.00pm <br> Sunday closed">
            </div>
        </div>
        <div class="auto-container">
            <div class="content-box">
                <h3>NBA AGC 2023</h3>
                <div class="separator"></div>
                <!-- Digital List -->
                <ul class="digital-list">
                    <li>Venue:<span>M.K.O Abiola Stadium, Abuja, Nigeria</span></li>
                    <li>Conference Schedule:<span>August 25 -September 1 ‘2023 - 0900 to 1800</span></li>
                    <li>For further information:
                        <span>Phone: <a href="tel:09166929240">09166929240</a></span>
                        <span>Email: <a href="mailto:info@nbaconference.com">info@nbaconference.com</a></span>
                    </li>
                </ul>

            </div>
        </div>
    </section>
    <!-- End Digital Event Section -->
@endsection

@push('script')
    <x-scripts.alpine />
    <x-scripts.quickview />
@endpush
