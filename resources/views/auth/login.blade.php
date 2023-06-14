@extends('layouts.app')

@section('title', 'Login')

@section('content')
<!-- Hero Start -->
<div class="section exvent-hero-section d-lg-flex d-block align-items-center inner-page-hero" style="background-image: url(assets/images/bg/about_page_bg.jpg);">
    <img class="shape-1 img-fluid" src="assets/images/shape/hero_shape1.png" alt="">
    <img class="shape-2 img-fluid" src="assets/images/shape/hero_shape2.png" alt="">

    <div class="container">
        <div class="row exvent-hero-row justify-content-center">
            <div class="col-lg-8 text-center">
                <div class="page-title">
                    <h2 class="section-title">Register</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Hero End -->

<!-- Login Start -->
<div class="login-register-area section-padding-02">
    <div class="container">
        <div class="row justify-content-center g-5">
            <div class="col-md-6">
                <div class="hero-form mt-0 grey-bg">
                    <h3 class="form-title black">Login</h3>
                    <form action="{{ route('api.login') }}" method="post" class="exvent-form x-submit" data-then="reload">
                        <div class="row gy-4">
                            <div class="col-12">
                                <div class="single-input white-bg">
                                    <input placeholder="Your Email Address" name="email" id="email" type="email" required>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="single-input white-bg">
                                    <input class="form-control" placeholder="Your Password" name="password" id="password" type="password" required>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember">
                                    <label class="form-check-label" for="flexCheckDefault">Remember Me</label>
                                </div>
                            </div>
                            <div class="col-sm-5 text-center">
                                <button type="submit" class="submit_btn">Log in <x-spinner /> </button>
                            </div>
                            <div class="col-12">
                                <a href="javascript:" id="btn-reset" class="forgot-pass">Fogot your password?</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

    

@endsection

