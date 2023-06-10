@extends('layouts.include')

@section('title', 'Login')

@section('content')

    {{-- <x-banner title="Login" :meta="[
        'image'    => asset('images/banner/login-banner.jpg'),
        'url'      => route('home'),
        'prevPage' => 'Home',
    ]" /> --}}

    <section class="counter-section" style="background-image: url({{ asset('assets/images/background/pattern-6.png') }})">
        <div class="section-icons">
            <!-- Icon One -->
            <div class="icon icon-one"><img src="{{ asset('assets/images/icons/icon-22.png') }}" alt="" /></div>
        </div>
        <div class="auto-container">

            <div class="row">
                <div class="col-lg-5 mx-auto">
                    <div class="card card-body">
                        <form action="{{ route('api.login') }}" method="post" id="form-login"
                            class="contact-form p-4 x-submit" data-then="reload">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input class="form-control" placeholder="Your Email Address" name="email"
                                            id="email" type="email" required>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group" style="height: 100px; position: relative;">
                                        <label for="password">Password</label>
                                        <input class="form-control" placeholder="Your Password" name="password"
                                            id="password" type="password" required>
                                        <div
                                            style="position: absolute;top:50%; right:10px; cursor: pointer;">
                                            <i id="toggle_pwd" class="fa fa-fw fa-eye field_icon"></i>
                                        </div>
                                    </div>
                                </div>

{{--                                <div class="col-md-6">--}}
{{--                                    <div class="form-group">--}}
{{--                                        <input type="checkbox" name="check_password" id="check_password" class="form-check-inline" checked="true">--}}
{{--                                        <label for="check_password">Show password</label>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="checkbox" name="remember" id="remember" class="form-check-inline">
                                        <label for="remember">Keep me logged in</label>
                                    </div>
                                </div>

                                <div class="form-group col-md-12">
                                    <div class="text-center"><br>
                                        <button class="btn"
                                            style="padding: 10px 30px; background-color: #7D4D65; color: white;"
                                            type="submit">
                                            Login
                                            <x-spinner />
                                        </button>
                                    </div>
                                </div>

                                <div class="col-md-12 text-center">
                                    <a href="javascript:"> <span id="btn-reset">Forgot your password?</span></a>
                                </div>
                            </div>
                        </form>

                        <form action="{{ route('api.password.forgot') }}" method="post" id="form-reset"
                            class="contact-form p-4 x-submit" data-then="alert" style="display: none">
                            <p><small>Lost your password? No worries! Enter your email below. We'll send you a link to reset
                                    your password.</small></p>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Your Email Address" name="email"
                                            id="email--reset" type="text" required aria-label="Email">
                                    </div>
                                </div>

                                <div class="col-md-12 text-right">
                                    <a href="javascript:" id="btn-back-to-login">
                                        <span><i class="fa fa-arrow-left"></i> Back to Login</span>
                                    </a>
                                </div>

                                <div class="form-group col-md-12">
                                    <div class="text-center"><br>
                                        <button class="btn" type="submit">
                                            Get Reset Link
                                            <x-spinner />
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>


        </div>
    </section>

@endsection

@push('script')
    <script>
        $("#btn-reset").on("click", function() {
            $("#form-login").slideUp();
            $("#form-reset").fadeIn();
        });

        $("#btn-back-to-login").on("click", function() {
            $("#form-login").slideDown();
            $("#form-reset").fadeOut();
        });

        $(function () {
            $("#toggle_pwd").click(function () {
                $(this).toggleClass("fa-eye fa-eye-slash");
                var type = $(this).hasClass("fa-eye-slash") ? "text" : "password";
                $("#password").attr("type", type);
            });
        });

        $(function () {
            $('#check_password').attr('checked',$(this).attr('checked')==='true'?'false':'true' );
            $("#check_password").click(function () {
                $(this).toggleAttribute("checked");
                var type = $(this).hasAttribute("checked") ? "text" : "password";
                $("#password").attr("type", type);
            });
        });
    </script>
@endpush
