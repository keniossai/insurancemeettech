@extends('layouts.app')

@section('content')
   <!-- Hero Start -->
   <div class="section exvent-hero-section d-lg-flex d-block align-items-center inner-page-hero" style="background-image: url(assets/images/bg/about_page_bg.jpg);">
        <img class="shape-1 img-fluid" src="assets/images/shape/hero_shape1.png" alt="">
        <img class="shape-2 img-fluid" src="assets/images/shape/hero_shape2.png" alt="">

        <div class="container">
            <div class="row exvent-hero-row justify-content-center">
                <div class="col-lg-8 text-center">
                    <div class="page-title">
                        <h2 class="section-title">Buy Tickets</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->

    <div class="login-register-area section-padding-02">
        <div class="container">
            @if(!$user->hasVerifiedEmail())
                <div class="alert alert-warning">
                    <small>
                        Before continuing, could you verify your email address by clicking on the link we emailed to you? If you didn't receive
                        the email, we will gladly send you another.
                    </small>

                    <form action="{{ route('api.users.verification', $user) }}" class="x-submit">
                        <button class="btn mt-2" type="submit">
                            <i class="fa fa-envelope"></i> Resend Link  <x-spinner />
                        </button>
                    </form>
                </div>
            @endif
            <div class="row justify-content-center g-5">
                <div class="col-lg-4">
                    <div class="hero-form mt-0 grey-bg p-3 text-center">
                        <img src="{{ $user->photo }}" width="180" alt="photo" class="rounded-circle">

                        <h2 class="column-title text-center mt-3" style="font-size: 22px">
                            {{ $user->full_name }}
                            <br>
                            <span>{{ $user->designation }}</span>
                            <span>{{ $user->organization }}</span>
                        </h2>
                        <p class="text-center">
                            {{ $user->email }}
                            <x-verified :verified="$user->hasVerifiedEmail()" />
                        </p>

                    </div>
                </div>

                <section class="col-lg-8">
                    <div class="hero-form mt-0 grey-bg p-3">

                        @empty($fee)
                            <div class="alert alert-warning">
                                Uh oh! Something's not right.<br>
                                We couldn't find your payment category. Please contact support for assistance.
                            </div>
                        @else

                        <div class="pricing-area pricing-area-2 section-padding-08" style="background-image: url({{ asset('assets/images/bg/footer_bg1.jpg') }});">
                            <div class="pricing-wrapper">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="section-title-wrap">
                                                <div class="section-title text-center">
                                                    <h5 class="sub-title orange">Make your payment</h5>
                                                    <h3 class="title white">YOU'RE ALMOST THERE!</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-lg-6">
                                            <div class="price-card text-center">
                                                <div class="price-header purple-bg">
                                                    <img src="{{ asset('assets/images/shape/price_shape1.png') }}" alt="Shape" class="price-header-shape">
                                                    <span class="price-plan">Regular</span>
                                                    <h3 class="">NGN @money($fee->amountPayable)</h3>
                                                </div>
                                                <div class="price-body">
                                                    <ul class="price-desc">
                                                        <li>Back Row Seat</li>
                                                        <li>Free Lunch &amp; Snacks</li>
                                                        <li>Event Certificate</li>
                                                        <li>1 Workshop</li>
                                                    </ul>
                                                </div>
                                                <div class="price-footer">
                                                    <form action="{{ route('api.users.transactions.store', $user) }}" method="post" class="x-submit" data-then="paystackInit">
                                                        <input type="hidden" name="fee_id" value="{{ $fee->id }}">
                                                        <button class="btn price-btn btn-purple" type="submit">
                                                            Pay Now <x-spinner />
                                                        </button>
                                                    </form>
                                                </div>

                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                    </div>
                </section>
            </div>
        </div>
    </div>

@endsection

@push('script')
    <script src="https://js.paystack.co/v1/inline.js"></script>

    <script>
        function paystackInit({data}) {
            let handler = PaystackPop.setup({
                key: '{{ config('services.paystack.public_key') }}',
                email: '{{ $user->email }}',
                amount: data.amount * 100,
                ref: data.reference,
                onClose: () => {},
                callback: function(response) {
                    swal({
                        title: "You're All Set!",
                        text: "We have sent you a confirmation email.",
                        icon: "success",
                        closeOnClickOutside: false,
                        closeOnEsc: false
                    }).then(confirm => {
                        location.href = '{{ route('users.show', $user) }}';
                    });
                }
            });

            handler.openIframe();
        }
    </script>
@endpush
