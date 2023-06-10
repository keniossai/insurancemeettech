@extends('layouts.app')

@section('title', $speaker->name)

@section('content')


    @if($speaker->slug == 'chimamanda-ngozi-adichie')
        <div id="page-banner-area" class="page-banner-area overlay"
             style="background-image:url({{ cloudinary_url('nbaconference/bg/home2.png', ['width' => 1000] )}})">
            <!-- Subpage title start -->
        </div><!-- Page Banner end -->
    @else
        <x-banner title="   {{ strtoupper($speaker->name) }}" :meta="[
        'image'    => asset('images/banner/F69A9237.jpg'),
        'url'      => route('home'),
        'prevPage' => 'Home',
    ]" />
    @endif



<!-- ts speaker end-->

<section class="main-container pb-0" id="main-container">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="blog-details">
                    <div class="post-media post-image">
                        <div class="row">
                            <div class="col-md-3">
                                <img class="img-fluid" src="{{ $speaker->photo() }}" alt="Photo" width="200">
                            </div>
                            <div class="col-md-9">
                                <div class="p-5">
                                    <h3 class="ts-title" style="color: #1d2b5f"> {{ strtoupper($speaker->name) }}</h3>
                                    <span class="speakder-designation">  {{ ucwords($speaker->designation) }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="post-content post-single">
                        <div class="post-body clearfix">
                            <div class="entry-content">
                                <p>{!! $speaker->bio !!}</p>
                            </div>
                        </div>
                    </div>
                    <!-- Post content end-->
                </div>
            </div>
        </div>
    </div>
    <!-- Container end-->
</section>

@endsection
