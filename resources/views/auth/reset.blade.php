@extends('layouts.app')

@section('title', 'Reset Password')

@section('content')

    <x-banner title="Reset Password" :meta="[
        'image'    => asset('images/banner/login-banner.jpg'),
        'url'      => route('login'),
        'prevPage' => 'Login',
    ]" />

    <section class="ts-contact-form section-bg">
        <div class="container ">
            <div class="row">
                <div class="col-lg-5 mx-auto">
                    <div class="card card-body">

                        <form action="{{ route('api.password.reset') }}" method="post" class="contact-form x-submit" data-then="reload">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="password">Enter a new Password</label>
                                        <input class="form-control" required type="password" name="password" id="password">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="password_confirmation">Repeat your Password</label>
                                        <input class="form-control" required type="password" name="password_confirmation" id="password_confirmation">
                                    </div>
                                </div>

                                <input type="hidden" name="email" value="{{ request('email') }}">
                                <input type="hidden" name="token" value="{{ request('token') }}">

                                <div class="form-group col-md-12">
                                    <div class="text-center"><br>
                                        <button class="btn" type="submit">
                                            Reset Password <x-spinner />
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
        <div class="speaker-shap">
            <img class="shap1" src="{{ asset('images/banner/green2.png') }}" alt="Image">
        </div>
    </section>
@endsection
