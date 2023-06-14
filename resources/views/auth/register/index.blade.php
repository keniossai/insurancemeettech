@extends('layouts.app')

@section('title', 'Registration')

@section('content')

    {{-- <x-banner title="Register" :meta="[
    'image'    => cloudinary_url('nbaconference/bg/bg-15',['width' => 1000]),
    'url'      => route('home'),
    'prevPage' => 'Home',
]" /> --}}

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
            <div class="col-lg-8">
                <div class="hero-form mt-0 grey-bg">
                    <h3 class="form-title black">Register</h3>
                    <form class="exvent-form x-submit" action="{{ route('api.register') }}" method="post"
                    data-then="alert">
                        <div class="row gy-4">
                            <div class="col-md-6">
                                <div class="single-input white-bg">
                                    <input type="text" name="first_name" id="first_name" placeholder="First Name" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-input white-bg">
                                    <input type="text" name="last_name" id="last_name" placeholder="Last Name" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-input white-bg">
                                    <input placeholder="e.g johndoe@example.com" name="email"
                                    id="email" type="email" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-input white-bg">
                                    <input placeholder="e.g johndoe@example.com" name="email_confirmation"
                                    id="email_confirmation" type="email" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-input white-bg">
                                    <input name="phone" id="phone" required maxlength="15" minlength="10"
                                    type="tel" placeholder="e.g 07012345678" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-input white-bg">
                                    <input type="text" name="organization" id="organization" placeholder="Organisation" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-input white-bg">
                                    <input type="text" name="designation" id="designation" placeholder="Designation" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-input white-bg">
                                    
                                        <select class="single-input white-bg" name="gender" id="gender"
                                            required>
                                            <option value="">Select gender</option>
                                            <option value="M">Male</option>
                                            <option value="F">Female</option>
                                        </select>
                                    {{-- <input type="select" name="gender" id="gender" placeholder="gender" required> --}}
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-input white-bg">
                                    <input type="password" name="password" id="password" placeholder="Password" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-input white-bg">
                                    <input name="password_confirmation"  id="password_confirmation" type="password" placeholder="Repeat Password"
                                    required>
                                </div>
                            </div>
                            <div class="col-md-12 mt-4">
                                <div class="form-group alert alert-info">
                                    <label for="attest">Attestation *</label>
                                    <br>
                                    <input id="attest" type="checkbox" required>
                                    <small class="text-"><i>I confirm that the information provided herein is correct
                                            and valid. I shall bear responsibility for any misinformation.</i></small>
                                </div>
                            </div>
                            <div class="col-md-4 text-center m-auto">
                                <button type="submit" class="submit_btn">
                                    Register <x-spinner />
                                </button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Login End -->



@endsection

