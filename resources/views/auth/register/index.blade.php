@extends('layouts.include')

@section('title', 'Registration')

@section('content')

    {{-- <x-banner title="Register" :meta="[
    'image'    => cloudinary_url('nbaconference/bg/bg-15',['width' => 1000]),
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
                <div class="col-lg-8 mx-auto" x-data="{ enrol_id: null, type: null }" x-init="$('#enrol_id').select2({
                    ajax: {
                        processResults: ({ data }) => ({ results: data })
                    }
                }).on('select2:select', (ev) => { enrol_id = ev.target.value });">
                    <div class="form-group">
                        <label for="type">Select Registration Type</label>
                        <select style="height: 52px; width: 100% !important;" class="form-control" name="type"
                            id="type" x-model="type" @change="enrol_id = null">
                            <option></option>
                            <option value="nba">NBA Member Registration</option>
                            <option value="non-nba">Non-NBA Member Registration</option>
                        </select>
                    </div>

                    <div class="mt-5" x-show="!type">
                        <div class="alert alert-info">
                            <b><i class="fa fa-lightbulb-o"></i> Looking to register and pay as a group? <a
                                    href="{{ route('register.group') }}">See Group Registration Instructions here.</a></b>
                        </div>
                    </div>

                    <form action="{{ route('api.register') }}" method="post" class="contact-form x-submit"
                        data-then="alert">

                        <div class="form-group" x-show="type === 'nba'">
                            <select id="enrol_id" style="width: 100%;" class="form-control form-control-name"
                                name="enrol_id" data-ajax--url="{{ route('api.enrols.index') }}"
                                data-minimum-input-length="1" data-placeholder="Start typing your SCN or Name as on Roll..."
                                x-model="enrol_id" :required="type === 'nba'" aria-label="enrol-id">
                            </select>
                        </div>

                        <div class="form-group" x-show="type === 'nba' && !enrol_id" x-transition>
                            <div class="alert alert-info">
                                <b><i class="fa fa-lightbulb-o"></i> Helpful Tips:</b><br><br>
                                <b>Having troubles finding your record?</b> Get faster and more unique results by typing
                                your Supreme Court Enrollment number (SCN...)<br>
                                If you do not remember your SCN, no worries, you can start typing your name as on roll, in
                                no particular order.

                                <br><br><b>If you have already registered</b>, you may not attempt registration again.
                                Simply <a href="{{ route('login') }}">Login here</a> to stay connected.
                                <br><br>
                                Still experiencing any problems? Please <a href="#contact-us">Contact us now</a>.

                                <br><br>
                                <b>Looking to register and pay as a group? <a href="{{ route('register.group') }}">See Group
                                        Registration Instructions here.</a></b>
                            </div>
                        </div>

                        <div x-show="(type === 'nba' && enrol_id) || (type === 'non-nba')" x-transition
                            style="display: none">
                            <div class="row">
                                <div class="col-md-12">
                                    <p><small>Take a moment to complete the form below and submit.</small></p>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="category_id">Your Category *</label>
                                        <select style="height: 52px; width: 100% !important;" class="form-control"
                                            name="category_id" id="category_id" required>
                                            <option></option>

                                            @foreach ($categories as $category)
                                                @continue($category->id == 15)
                                                <option value="{{ $category->id }}"
                                                    x-show="
                                                    (type === 'nba' && {{ $category->id }} < 13)
||
                                                    (type === 'non-nba' && {{ $category->id }} > 12)">

                                                    {{ $category->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="title">Your Title *</label>
                                        <select style="height: 52px;" class="form-control" name="title" id="title"
                                            required>
                                            <option></option>
                                            <x-title-options />
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <label>Enter your Name as you'd prefer on your <b>Name Tag</b>...</label>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="first_name">First Name *</label>
                                        <input class="form-control form-control-name" placeholder="First Name"
                                            name="first_name" id="first_name" type="text" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="middle_name">Middle Name</label>
                                        <input class="form-control form-control-name" placeholder="Middle Name"
                                            name="middle_name" id="middle_name" type="text">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="last_name">Last Name *</label>
                                        <input class="form-control form-control-name" placeholder="Last Name"
                                            name="last_name" id="last_name" type="text" required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="gender">Gender *</label>
                                        <select style="height: 52px;" class="form-control" name="gender" id="gender"
                                            required>
                                            <option value="">Select gender</option>
                                            <option value="M">Male</option>
                                            <option value="F">Female</option>
                                        </select>

                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <hr>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email">Email Address <small>(Ensure to use a valid email)</small>
                                            *</label>
                                        <input class="form-control" placeholder="e.g johndoe@example.com" name="email"
                                            id="email" type="email" required ondrop="return false"
                                            onpaste="return false" oncopy="return false">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email_confirmation">Confirm Email Address <small>(Confirm your email
                                                address)</small> *</label>
                                        <input class="form-control" placeholder="e.g johndoe@example.com"
                                            name="email_confirmation" id="email_confirmation" type="email" required
                                            ondrop="return false" onpaste="return false" oncopy="return false">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="phone">Phone *</label>
                                        <input class="form-control form-control-subject" placeholder="e.g 07012345678"
                                            name="phone" id="phone" required maxlength="15" minlength="10"
                                            type="tel">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="organization">Organization *</label>
                                        <input class="form-control" placeholder="Organization" name="organization"
                                            id="organization" type="text" required>
                                    </div>
                                </div>

                                <div class="col-md-6" x-show="type === 'nba'">
                                    <div>
                                        <label for="branch_id">NBA Branch *</label>
                                        <select style="height: 52px; width: 100% !important;" class="form-control select2"
                                            name="branch_id" id="branch_id" :required="type === 'nba'">
                                            <option></option>

                                            @foreach ($branches as $branch)
                                                <option value="{{ $branch->id }}">{{ $branch->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="virtual">How will you be participating? *</label>
                                        <select style="height: 52px;" class="form-control" id="virtual" name="virtual"
                                            required>
                                            <option></option>

                                            @if (config('auth.can_register_as_in_person'))
                                                <option value="0">In-Person</option>
                                            @endif

                                            <option value="1">Virtually</option>
                                        </select>
                                    </div>
                                </div>
                            @if(false)
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="meta-attending-with-toddler">Will you be attending with a toddler under
                                            age 5?</label>
                                        <select style="height: 52px;" class="form-control"
                                            id="meta-attending-with-toddler" name="meta[attending_with_toddler]">
                                            <option value="0"></option>
                                            <option value="0">No</option>
                                            <option value="1">Yes</option>
                                        </select>
                                    </div>
                                </div>
                                @endif
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="meta-over-70">Are you over the age of 70? *</label>
                                        <select style="height: 52px;" class="form-control" id="meta-over-70"
                                            name="meta[over_70]">
                                            <option value="0"></option>
                                            <option value="0">No</option>
                                            <option value="1">Yes</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="meta-disability">Any Physical Disability? *</label>
                                        <select style="height: 52px;" class="form-control" id="meta-disability"
                                            name="meta[disability]">
                                            <option value=""></option>
                                            <option value="">None</option>
                                            <option>Wheelchair</option>
                                            <option>Visually impaired</option>
                                            <option>Limited limb movement</option>
                                            <option>Other</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <hr>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="password">Create a Password *</label>
                                        <input class="form-control" placeholder="Your Preferred Password" name="password"
                                            id="password" type="password" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="password_confirmation">Confirm your Password *</label>
                                        <input class="form-control" placeholder="Repeat Your Password"
                                            name="password_confirmation" id="password_confirmation" type="password"
                                            required>
                                    </div>
                                </div>
                                <div class="col-md-12 mt-4">
                                    <div class="form-group alert alert-warning">
                                        <label for="attest">Attestation *</label>
                                        <br>
                                        <input id="attest" type="checkbox" required>
                                        <small class="text-"><i>I confirm that the information provided herein is correct
                                                and valid. I shall bear responsibility for any misinformation.</i></small>
                                    </div>
                                </div>

                                <div class="form-group col-md-12">
                                    <div class="text-center"><br>
                                        <button class="btn" style="background: #7D4D65; color:white;" type="submit">
                                            Submit Registration
                                            <x-spinner />
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection

@push('script')
    <x-scripts.alpine />
    <x-scripts.select2 />

    <script>
        setTimeout(function() {
            swal({
                title: "Save Time ⏰",
                text: "We have made things a lot easier.\n\nIf you registered for the NBA AGC 2021 or 2022, you can skip the registration form process entirely.\n\nWe still remember your profile from the previous years, so you do not need to register afresh. Simply login, change your category(if necessary), upload your passport,  then pay for the NBA AGC 2023.\n\nYou also have the opportunity to update your profile before making payment, just in case anything changed.\n\nIf you have forgotten your password, no worries, we've made sure that resetting it is a cinch.\n\n",
                buttons: ["Manually register afresh", "Login now to pay"],
                closeOnClickOutside: false,
                closeOnEsc: false
            }).then((confirm) => {
                if (confirm) location.href = "{{ route('login') }}"
            });
        }, 10000);
    </script>
@endpush
