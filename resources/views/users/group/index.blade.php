@extends('layouts.app')

@section('content')

    <x-banner title="Group Payment" :meta="[
        'image'    => cloudinary_url('nbaconference/bg/1I3A0382_wx9rvt',['width' => 1000]),
        'url'      => route('users.payments.show', user()),
        'prevPage' => 'Payment',
    ]" />

    <section class="ts-contact-form section-bg ">
        <div class="container ">
            <div class="row">
                <div class="col-lg-12 mb-4">
                    <div class="card card-body">
                        <h4 class="text-success">INSTRUCTIONS:</h4>
                        <p>To make payment for a group of delegates, please note the following;</p>
                        <p>- A group <b>must</b> consist of 10 or more NBA members.</p>
                        <p>- All members <b>must</b> have already completed the first stage of registration, i.e. Search for their name, complete and submit the <a href="{{ route('register') }}" target="_blank">registration form</a>, and verify their email address.</p>
                        <p>- Enter below, <b>one at a time</b>, the email address on each member's profile.</p>
                    </div>
                </div>

                <div class="col-lg-12 mb-4">
                    <div class="card card-body">
                        <div class="row" id="div-user-data">
                            <div class="col-md-12">
                                <form action="{{ route('api.groups.members.store', $user) }}" class="x-submit" data-then="reload">
                                    <div class="form-group">
                                        <input class="form-control form-control-lg" type="email" name="email" placeholder="Enter an email address and hit enter..." aria-label="Email">

                                        <x-spinner />
                                    </div>
                                </form>
                            </div>

                            <div class="col-md-12">

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row" id="div-members">

                @foreach($users as $member)
                    <div class="col-lg-3 single-member mt-3">
                        <div class="card card-body">
                            <div class="text-center">
                                <img src="{{ $member->photo }}" alt="User Photo" class="rounded-circle" width="80">
                                <h2 class="column-title text-center" style="font-size: 18px">
                                    {{ $member->name }}
                                    <span>{{ $member->enrol?->scn }}</span>
                                </h2>

                                <h2 class="text-center text-success" style="font-size: 15px">
                                    NGN @money($member->fee->amount) | {{ $member->fee->period->name }}
                                </h2>

                                <p class="amount-progres-text">
                                    <small>
                                        {{ $member->fee->name }} | {{ $member->fee->attendance }} Attendance
                                    </small>
                                </p>
                            </div>

                            @if($member->isNot($user))
                                <form action="{{ route('api.groups.members.destroy', [$user, $member]) }}" class="x-submit" data-confirm="true" data-then="reload">
                                    @method('delete')
                                    <div class="text-right">
                                        <small>
                                            <a class="text-danger" href="javascript:" data-toggle="tooltip" title="Remove member from group" onclick="$(this).parents('form').submit()"><i class="fa fa-times-circle"></i> Remove</a>
                                        </small>
                                    </div>
                                </form>
                            @endif
                        </div>
                    </div>

                @endforeach
            </div>

            <div class="mt-5">
                <hr>
                <h2 class="column-title">
                    NGN @money($users->sum('fee.amount'))
                    <span>TOTAL AMOUNT PAYABLE</span>
                </h2>
                <form action="{{ route('api.groups.payments.store', $user) }}" class="x-submit d-inline" data-then="paystackInit">
                    <button class="btn"
                        @if($users->count() < 10)
                            type="button" data-toggle="tooltip" title="Please add up to 10 members to your group"
                        @else
                            type="submit"
                        @endif
                    >
                        PAY NOW <x-spinner />
                    </button>
                </form>

                <form action="{{ route('api.groups.payments.store', $user) }}" class="x-submit d-inline" data-then="showInvoice">
                    <button class="btn ml-4"
                       @if($users->count() < 1)
                           type="button" data-toggle="tooltip" title="Please add up to 10 members to your group"
                       @else
                           type="submit"
                       @endif
                    >
                        GET AN INVOICE
                    </button>
                </form>
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
        function paystackInit({data})
        {
            let handler = PaystackPop.setup({
                key: '{{ config('services.paystack.public_key') }}',
                email: '{{ $user->email }}',
                amount: data.transaction.amount * 100,
                ref: data.transaction.reference,
                onClose: () => {},
                callback: function(response) {

                    $('#div-payment').hide();
                    $('#div-payment-complete').fadeIn();

                    swal({
                        title: "You're All Set!",
                        text: "We have sent confirmation emails to all members.",
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


        function showInvoice({data})
        {
            location.href = data.invoice_url;
        }
    </script>
@endpush
