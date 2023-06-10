@extends('layouts.include')

@section('title', 'Speakers')

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
            height: 100px;
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

    {{-- <x-banner title="Speakers" :meta="[
        'image' => asset('images/banner/F69A9237.jpg'),
        'url' => route('home'),
        'prevPage' => 'Home',
    ]" /> --}}

    <!-- ts speaker end-->

    <section class="counter-section" style="background-image: url({{ asset('assets/images/background/pattern-6.png') }})">
        <div class="section-icons">
            <!-- Icon One -->
            <div class="icon icon-one"><img src="{{ asset('assets/images/icons/icon-22.png') }}" alt="" /></div>
        </div>
        @if (false)
            <div class="auto-container">
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
                {{ $speakers->links() }}
            </div><!-- container end-->
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
    </section>


@endsection

@push('script')
    <x-scripts.quickview />
@endpush
