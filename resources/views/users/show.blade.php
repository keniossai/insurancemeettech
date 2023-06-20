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
                    <h2 class="section-title">My Profile</h2>
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
                    <form class="exvent-form x-submit text-center" enctype="multipart/form-data" data-then="reload" action="{{ route('api.users.photo.update', $user) }}">
                        @method('put')

                        <label class="badge bg-info badge-pill" for="photo" style="cursor: pointer">
                            <i class="fa fa-camera"></i> <small>Upload Photo</small> <x-spinner />
                        </label>
                        <input type="file" name="photo" id="photo" style="display: none" onchange="$(this).parents('form').submit()">
                    </form>
                    <h2 class="column-title text-center mt-3" style="font-size: 22px">
                        {{ $user->full_name }}
                        <br>
                        <span>{{ $user->designation }}</span>
                        <span>{{ $user->organization }}</span>
                    </h2>
                    <p class="text-center">
                        {{ $user->email }} <x-verified :verified="$user->hasVerifiedEmail()" />
                    </p>
                    <div class="col-md-12">
                        @unlessadmin($user)
                        <div class="text-center">
                            <hr>

                            @empty($payment)

                                <p><label class="label label-warning p-2"><i class="fa fa-exclamation-triangle"></i> Registration Payment Pending </label></p>
                                <p><a href="{{ route('users.payments.show', $user) }}" ><button style="padding: 10px 20px;" class="submit_btn">Pay now</button></a></p>

                            @else
                                <p>REGISTRATION NO: {{ $user->reg_number }}</p>

                                <p>
                                    <label class="label label-success p-2"><i class="fa fa-check-circle-o"></i> Registration Paid (NGN @money($payment->fee->amount))
                                    </label>
                                </p>
                                <p>
                                    {{ $payment->fee->name }} | {{ $payment->fee->attendance }} Attendance
                                </p>
                            @endif
                        </div>
                        @endadmin
                    </div>
                </div>
            </div>

            <div class="col-lg-8">
                <div class="hero-form mt-0 grey-bg">

                    <form class="exvent-form x-submit" action="{{ route('api.users.update', $user) }}" method="post"
                    data-then="alert">
                        <div class="row gy-4">
                            <div class="col-md-6">
                                <div class="single-input white-bg">
                                    <input type="text" name="first_name" id="first_name" required value="{{ $user->first_name }}" :disabled="!can_update">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-input white-bg">
                                    <input type="text" name="last_name" id="last_name" required value="{{ $user->middle_name }}" :disabled="!can_update">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-input white-bg">
                                    <input type="text" name="last_name" id="last_name" required value="{{ $user->last_name }}" :disabled="!can_update">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-input white-bg">
                                    <input name="email"
                                    id="email" type="email" required value="{{ $user->email }}" :disabled="!can_update">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-input white-bg">
                                    <input name="phone" id="phone" required maxlength="15" minlength="10"
                                    type="tel" required value="{{ $user->phone }}" :disabled="!can_update">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-input white-bg">
                                    <input type="text" name="organization" id="organization" required value="{{ $user->organization }}" :disabled="!can_update">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-input white-bg">
                                    <input type="text" name="designation" id="designation" required value="{{ $user->designation }}" :disabled="!can_update">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-input white-bg">
                                        <select style="border: none; padding: 10px 25px; box-shadow: none; line-height: 30px; transition: all 0.3s linear;" class="form-control single-input white-bg" name="gender" id="gender"
                                            required :disabled="!can_update">
                                            <option value="{{ \App\Models\User::MALE }}">Male</option>
                                            <option value="{{ \App\Models\User::FEMALE }}">Female</option>
                                        </select>
                                        <script>
                                            $('#gender option[value={{ $user->gender }}]').prop('selected', true);
                                        </script>
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
                                    Apply Changes  <x-spinner />
                                </button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection

@push('script')
    <x-scripts.alpine />
    <x-scripts.select2 />
@endpush

