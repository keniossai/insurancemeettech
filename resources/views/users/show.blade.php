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
    <section class="ts-contact-form section-bg">
        <div class="container">

            <div class="row">
                <div class="col-lg-4 row">
                    <div class="col-12">
                        <div class="card card-body">
                            <div class="row" id="div-user-data">
                                <div class="col-md-12">
                                    <div class="form-group text-center">
                                        <img src="{{ $user->photo }}" width="180" alt="photo" class="rounded-circle">

                                        <form class="contact-form x-submit" enctype="multipart/form-data" data-then="reload"
                                              action="{{ route('api.users.photo.update', $user) }}">
                                            @method('put')

                                            <label class="badge badge-info badge-pill" for="photo" style="cursor: pointer">
                                                <i class="fa fa-camera"></i> <small>Upload Photo</small> <x-spinner />
                                            </label>
                                            <input type="file" name="photo" id="photo" style="display: none" onchange="$(this).parents('form').submit()">
                                        </form>

                                        <h2 class="column-title text-center mt-3" style="font-size: 22px">
                                            {{ $user->full_name }}
                                            <span>{{ $user->enrol?->scn }}</span>
                                            <span>{{ $user->organization }}</span>
                                        </h2>

                                        <p class="text-center">
                                            {{ $user->email }} <x-verified :verified="$user->hasVerifiedEmail()" />
                                        </p>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    @unlessadmin($user)
                                    <div class="text-center">
                                        <hr>

                                        @empty($payment)

                                            <p><label class="label label-warning p-2"><i class="fa fa-exclamation-triangle"></i> Registration Payment Pending </label></p>
                                            <p><a href="{{ route('users.payments.show', $user) }}" class="btn">Pay now</a></p>

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
                    </div>
                    @admin
                    <div class="col-12">
                        <div class="card card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">

                                        <form class="contact-form x-submit" enctype="multipart/form-data" data-then="reload"
                                              action="{{ route('api.users.update', $user) }}">
                                            @method('put')

                                            <div class="form-group">
                                                <label for="sponsor">Sponsored Delegate?</label>
                                                <select style="height: 52px; width: 100% !important;" class="form-control" name="category_id" id="sponsor">
                                                    <option value="">Change to Sponsored Delegate</option>
                                                    @foreach ($categories as $category)

                                                        @if($category->id == 15)
                                                        <option value="{{ $category->id }}" @selected($category->is($user->category))>
                                                            {{ $category->name }}
                                                        </option>
                                                        @endif
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn">Save</button>
                                            </div>
                                        </form>


                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                    @endadmin
                </div>
                <div class="col-lg-8">
                    <div class="card card-body">
                        <form action="{{ route('api.users.update', $user) }}" method="post" class="contact-form x-submit">
                            @method('put')

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="category_id">Your Category</label>
                                        <select style="height: 52px; width: 100% !important;" class="form-control" name="category_id" id="category_id" required @disabled($payment)>

                                            @foreach ($categories as $category)
                                                @continue($category->id == 15)
                                                <option value="{{ $category->id }}" @selected($category->is($user->category))>
                                                    {{ $category->name }}
                                                </option>

                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="virtual">How you'll be attending</label>
                                        <select style="height: 52px;" class="form-control" id="virtual" name="virtual" @disabled($payment)>

                                            @if(!$user->isAttendingVirtually() || config('auth.can_register_as_in_person'))
                                                <option value="0" @selected(!$user->isAttendingVirtually())>In-Person</option>
                                            @endif

                                            <option value="1" @selected($user->isAttendingVirtually())>Virtually</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <hr>

                            <div class="row" x-data="{ can_update: {{ user()->can('update', $user) ? 'true' : 'false' }} }">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="title">Your Title</label>
                                        <select style="height: 52px;" class="form-control" name="title" id="title" required :disabled="!can_update">
                                            <option>{{ $user->title }}</option>

                                            <x-title-options />
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="first_name">First Name</label>
                                        <input class="form-control form-control-name" placeholder="First Name" name="first_name" id="first_name" type="text" required value="{{ $user->first_name }}" :disabled="!can_update">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="middle_name">Middle Name</label>
                                        <input class="form-control form-control-subject" placeholder="Middle Name" name="middle_name" id="middle_name" value="{{ $user->middle_name }}" :disabled="!can_update">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="last_name">Last Name</label>
                                        <input class="form-control form-control-name" placeholder="Last Name" name="last_name" id="last_name" type="text" required value="{{ $user->last_name }}" :disabled="!can_update">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="gender">Gender</label>
                                        <select class="form-control" name="gender" id="gender" style="height: 52px;" :disabled="!can_update">
                                            <option value="{{ \App\Models\User::MALE }}">Male</option>
                                            <option value="{{ \App\Models\User::FEMALE }}">Female</option>
                                        </select>
                                        <script>
                                            $('#gender option[value={{ $user->gender }}]').prop('selected', true);
                                        </script>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="phone">Phone</label>
                                        <input class="form-control form-control-subject" placeholder="e.g 07012345678" name="phone" id="phone" required value="{{ $user->phone }}" :disabled="!can_update">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email">Email Address <small>(Your primary email)</small></label>
                                        <input class="form-control" placeholder="e.g example@gmail.com" name="email" id="email" type="email" required value="{{ $user->email }}" :disabled="!can_update">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="organization">Organization</label>
                                        <input class="form-control" placeholder="Organization" name="organization" id="organization" type="text" required value="{{ $user->organization }}" :disabled="!can_update">
                                    </div>
                                </div>

                                @if($user->enrol)
                                    <div class="form-group col-md-6">
                                        <label for="branch_id">NBA Branch</label>
                                        <select style="height: 52px; width: 100% !important;"  class="form-control select2" name="branch_id" id="branch_id" required @disabled($payment)>
                                            <option></option>

                                            @foreach($branches as $branch)
                                                <option value="{{ $branch->id }}" @selected($branch->is($user->branch))>
                                                    {{ $branch->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="year_of_call">Year of Call</label>
                                        <input class="form-control" id="year_of_call" readonly value="{{ $user->enrol->year_of_call }}">
                                    </div>
                                @endif

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="meta-attending-with-toddler">Attending with a toddler under age 5</label>
                                        <select style="height: 52px;" class="form-control" id="meta-attending-with-toddler" name="meta[attending_with_toddler]" :disabled="!can_update">
                                            <option value="0" @selected(!$user->isAttendingWithAToddler())>No</option>
                                            <option value="1" @selected($user->isAttendingWithAToddler())>Yes</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="meta-over-70">Over the age of 70</label>
                                        <select style="height: 52px;" class="form-control" id="meta-over-70" name="meta[over_70]" :disabled="!can_update">
                                            <option value="0" @selected(!$user->isOver70Years())>No</option>
                                            <option value="1" @selected($user->isOver70Years())>Yes</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group col-md-12" x-show="can_update">
                                    <div class="text-center"><br>
                                        <button class="btn" type="submit">
                                            Apply Changes <x-spinner />
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                    @if($payment)
                        <div class="card card-body mt-4">
                            <h4 class="column-title" style="font-size: 18px">Resend Confirmation Email</h4>
                            <p>Need another copy of your confirmation email? Sure, we'll gladly resend it.</p>
                            <form action="{{ route('api.users.welcome-email', $user) }}" class="x-submit">
                                <button class="btn" type="submit">
                                    Resend <i class="fa fa-send"></i> <x-spinner />
                                </button>
                            </form>
                        </div>
                    @endif
                </div>
            </div>
        </div>
        <div class="speaker-shap">
            <img class="shap1" src="{{ asset('images/banner/green2.png') }}" alt="Image">
        </div>
    </section>
@endsection

@push('script')
    <x-scripts.alpine />
    <x-scripts.select2 />
@endpush

