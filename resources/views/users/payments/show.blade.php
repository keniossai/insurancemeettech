@extends('layouts.app')

@section('content')

    <x-banner title="Payment" :meta="[
        'image'    => cloudinary_url('nbaconference/bg/1I3A0382_wx9rvt', ['width' => 1000]),
        'url'      => route('users.show', user()),
        'prevPage' => 'Profile',
    ]" />

<section class="ts-contact-form section-bg ">
    <div class="container ">
        <div class="row">
            <div class="col-lg-4">
                <div class="card card-body">
                    <div class="row" id="div-user-data">
                        <div class="col-md-12">
                            <div class="form-group text-center">
                                <img src="{{ $user->photo }}" width="180" alt="photo" class="rounded-circle">

                                <h2 class="column-title text-center" style="font-size: 22px">
                                    {{ $user->full_name }}
                                    <span>{{ $user->enrol?->scn }}</span>
                                    <span>{{ $user->organization }}</span>
                                </h2>

                                <p class="text-center">
                                    {{ $user->email }}
                                    <x-verified :verified="$user->hasVerifiedEmail()" />
                                </p>
                            </div>
                        </div>

                        <div class="col-md-12">

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="card card-body">
                    <div class="gradient p-4" style="background-image: url({{ asset('/images/pricing/pricing_img.jpg') }})">

                        @empty($fee)
                            <div class="alert alert-warning">
                                Uh oh! Something's not right.<br>
                                We couldn't find your payment category. Please contact support for assistance.
                            </div>
                        @else
                            <div id="div-payment">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h2 class="section-title white">
                                            <span>YOU'RE ALMOST THERE!</span>
                                            Proceed to Pay
                                        </h2>
                                    </div><!-- section title end-->
                                </div><!-- col end-->
                                <!-- row end-->
                                <div class="row">
                                    <div class="col-md-12 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="400ms">
                                        <div class="pricing-item">
                                            <img class="pricing-dot" src="{{ asset('/images/pricing/dot.png') }}" alt="">
                                            <div class="ts-pricing-box">

                                                <div class="ts-pricing-header">
                                                    <h2 class="ts-pricing-name">
                                                        {{ $fee->period->name }}
                                                    </h2>

                                                    <h3 class="ts-pricing-price" style="font-size: 25px">

                                                        NGN @money($fee->amountPayable)
                                                    </h3>
                                                </div>
                                                <div class="ts-pricing-progress">
                                                    <p class="amount-progres-text">
                                                        <small>
                                                            {{ $fee->name }} | {{ $fee->attendance }} Attendance
                                                        </small>
                                                    </p>

                                                    <div class="ts-progress">
                                                        <div class="ts-progress-inner" style="width: {{ 100 - $fee->period->expires_at->diffInDays() }}%"></div>
                                                    </div>

                                                    <p class="ts-pricing-value text-uppercase">
                                                        EXPIRES {{ $fee->period->expires_at->diffForHumans() }}
                                                    </p>
                                                </div>

                                                <div class="promotional-code">
                                                    <p class="promo-code-text"></p>

                                                    <form action="{{ route('api.users.transactions.store', $user) }}" method="post" class="x-submit" data-then="paystackInit">
                                                        <input type="hidden" name="fee_id" value="{{ $fee->id }}">
                                                        <button class="btn pricing-btn" type="submit">
                                                            Pay Now <x-spinner />
                                                        </button>
                                                    </form>

                                                    <p class="vate-text">
                                                        <small>
                                                            Valid till {{ $fee->period->expires_at->toDayDateTimeString() }} at this fee.
                                                        </small>
                                                    </p>

                                                    <p class="pt-4">
                                                        <small>
                                                            <a href="{{ cloudinary_url('nbaconference/misc/Fee_Schedule_2022_dqtm6c') }}" target="_blank">
                                                                View fee schedule <i class="fa fa-external-link"></i>
                                                            </a>
                                                        </small>
                                                    </p>
                                                </div>
                                            </div><!-- ts pricing box-->
                                            <img class="pricing-dot1" src="{{ asset('/images/pricing/dot.png') }}" alt="">
                                        </div>
                                    </div><!-- col end-->
                                </div>
                            </div>
                        @endif

                        <div class="speaker-shap wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="400ms">
                            <img class="shap2" src="{{ asset('/images/shap/pricing_memphis1.png') }}" alt="">
                        </div>
                    </div>
                </div>

                @if($user->enrol_id || user()->isAdmin())
                <div class="card card-body mt-5">
                    <div class="row" id="div-user-data">
                        <div class="col-md-12">
                                <h2 class="column-title" style="font-size: 22px">
                                    GROUP PAYMENT
                                    <span>Want to pay as a group?</span>
                                </h2>
                            <p>Make payment for 10 or more delegates (including yourself) as a group.</p>
                            <a class="btn" href="{{ route('users.group.index', $user) }}">Group Payment</a>
                        </div>

                        <div class="col-md-12">

                        </div>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
    <div class="speaker-shap">
        <img class="shap1" src="{{ asset('/images/banner/green2.png') }}" alt="Image">
    </div>
</section>
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
