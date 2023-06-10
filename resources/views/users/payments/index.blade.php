@extends('layouts.app')

@section('content')

    <x-banner title="Registration Payment Summary" :meta="[
        'image'    => cloudinary_url('/bg/hero1_gdxtvt', ['width' => 1000]),
        'url'      => route('dashboard'),
        'prevPage' => 'Admin',
    ]" />

    <style>
        @media print {
            .footer-area, .btn, header {
                display: none;
            }
        }
    </style>

    <section class="ts-contact-form section-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mb-4">
                    <div class="card card-body">

                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover">
                                <thead>
                                <tr class="text-center">
                                    <th width="200" rowspan="3" style="vertical-align: top">Category</th>
                                    <th colspan="3">In-Person</th>
                                    <th rowspan="2" style="vertical-align: top">Virtual</th>
                                </tr>
                                <tr>
                                    <th>Early Bird</th>
                                    <th>Regular</th>
                                    <th>Late Registration</th>
                                </tr>
                                <tr>
                                    <th>15th May - 4th June 2023</th>
                                    <th>5th June - 23rd July 2023</th>
                                    <th>24th July - 18th August 2023</th>
                                    <th>--</th>
                                </tr>
                                </thead>

                                <tbody>
                                <tr>
                                    <td>1 - 5 Years</td>
                                    <td><x-fee-summary :fee="$fees[31]" /></td>
                                    <td><x-fee-summary :fee="$fees[1]" /></td>
                                    <td><x-fee-summary :fee="$fees[11]" /></td>
                                    <td><x-fee-summary :fee="$fees[21]" /></td>
                                </tr>
                                <tr>
                                    <td>6 - 10 Years</td>
                                    <td><x-fee-summary :fee="$fees[32]" /></td>
                                    <td><x-fee-summary :fee="$fees[2]" /></td>
                                    <td><x-fee-summary :fee="$fees[12]" /></td>
                                    <td><x-fee-summary :fee="$fees[22]" /></td>
                                </tr>
                                <tr>
                                    <td>11 - 15 Years</td>
                                    <td><x-fee-summary :fee="$fees[33]" /></td>
                                    <td><x-fee-summary :fee="$fees[3]" /></td>
                                    <td><x-fee-summary :fee="$fees[13]" /></td>
                                    <td><x-fee-summary :fee="$fees[23]" /></td>
                                </tr>
                                <tr>
                                    <td>16 - 20 Years</td>
                                    <td><x-fee-summary :fee="$fees[34]" /></td>
                                    <td><x-fee-summary :fee="$fees[4]" /></td>
                                    <td><x-fee-summary :fee="$fees[14]" /></td>
                                    <td><x-fee-summary :fee="$fees[24]" /></td>
                                </tr>
                                <tr>
                                    <td>Above 20 years</td>
                                    <td><x-fee-summary :fee="$fees[35]" /></td>
                                    <td><x-fee-summary :fee="$fees[5]" /></td>
                                    <td><x-fee-summary :fee="$fees[15]" /></td>
                                    <td><x-fee-summary :fee="$fees[25]" /></td>
                                </tr>
                                <tr>
                                    <td><p>Senior Advocates of Nigeria</p></td>
                                    <td><x-fee-summary :fee="$fees[36]" /></td>
                                    <td><x-fee-summary :fee="$fees[6]" /></td>
                                    <td><x-fee-summary :fee="$fees[16]" /></td>
                                    <td><x-fee-summary :fee="$fees[26]" /></td>
                                </tr>
                                <tr>
                                    <td><p>Attorneys General</p></td>
                                    <td><x-fee-summary :fee="$fees[41]" /></td>
                                    <td><x-fee-summary :fee="$fees[6]" /></td>
                                    <td><x-fee-summary :fee="$fees[16]" /></td>
                                    <td><x-fee-summary :fee="$fees[44]" /></td>
                                </tr>
                                <tr>
                                    <td><p>Benchers</p></td>
                                    <td><x-fee-summary :fee="$fees[60]" /></td>
                                    <td><x-fee-summary :fee="$fees[6]" /></td>
                                    <td><x-fee-summary :fee="$fees[16]" /></td>
                                    <td><x-fee-summary :fee="$fees[30]" /></td>
                                </tr>

                                <tr>
                                    <td><p>Magistrate</p></td>
                                    <td><x-fee-summary :fee="$fees[37]" /></td>
                                    <td><x-fee-summary :fee="$fees[7]" /></td>
                                    <td><x-fee-summary :fee="$fees[17]" /></td>
                                    <td><x-fee-summary :fee="$fees[27]" /></td>
                                </tr>
                                <tr>
                                    <td><p>Other Judicial Officers</p></td>
                                    <td><x-fee-summary :fee="$fees[39]" /></td>
                                    <td><x-fee-summary :fee="$fees[7]" /></td>
                                    <td><x-fee-summary :fee="$fees[17]" /></td>
                                    <td><x-fee-summary :fee="$fees[29]" /></td>
                                </tr>
                                <tr>
                                    <td><p>Honourable Justices</p></td>
                                    <td><x-fee-summary :fee="$fees[38]" /></td>
                                    <td><x-fee-summary :fee="$fees[8]" /></td>
                                    <td><x-fee-summary :fee="$fees[18]" /></td>
                                    <td><x-fee-summary :fee="$fees[28]" /></td>
                                </tr>
                                <tr>
                                    <td><p>Honourable Judges</p></td>
                                    <td><x-fee-summary :fee="$fees[49]" /></td>
                                    <td><x-fee-summary :fee="$fees[8]" /></td>
                                    <td><x-fee-summary :fee="$fees[18]" /></td>
                                    <td><x-fee-summary :fee="$fees[52]" /></td>
                                </tr>
                                <tr>
                                    <td><p>Grand Khadis</p></td>
                                    <td><x-fee-summary :fee="$fees[53]" /></td>
                                    <td><x-fee-summary :fee="$fees[8]" /></td>
                                    <td><x-fee-summary :fee="$fees[18]" /></td>
                                    <td><x-fee-summary :fee="$fees[56]" /></td>
                                </tr>
                                <tr>
                                    <td><p> Khadis</p></td>
                                    <td><x-fee-summary :fee="$fees[57]" /></td>
                                    <td><x-fee-summary :fee="$fees[8]" /></td>
                                    <td><x-fee-summary :fee="$fees[18]" /></td>
                                    <td><x-fee-summary :fee="$fees[60]" /></td>
                                </tr>

                                <tr>
                                    <td>Non-Lawyers</td>
                                    <td><x-fee-summary :fee="$fees[61]" /></td>
                                    <td><x-fee-summary :fee="$fees[9]" /></td>
                                    <td><x-fee-summary :fee="$fees[19]" /></td>
                                    <td><x-fee-summary :fee="$fees[64]" /></td>
                                </tr>
                                <tr>
                                    <td>International Delegate</td>
                                    <td><x-fee-summary :fee="$fees[69]" /></td>
                                    <td><x-fee-summary :fee="$fees[10]" /></td>
                                    <td><x-fee-summary :fee="$fees[20]" /></td>
                                    <td><x-fee-summary :fee="$fees[72]" /></td>
                                </tr>
                                </tbody>
                            </table>
                            <hr>
                            <div class="row">
                                <div class="col-md-6">
                                    <h2 class="column-title">
                                        {{ number_format($fees->sum('payments_count')) }}
                                        <span>TOTAL REGISTRATIONS</span>
                                    </h2>
                                </div>id

                                    <div class="col-md-6">
                                        <h2 class="column-title">

                                            NGN @money( \App\Models\Transaction::query()->whereNotNull('paid_at')->sum('amount'))
{{--                                            NGN @money( $fees->sum(fn ($fee) => $fee->payments_count * $fee->amount) - $discounted_sum)--}}
                                            <span>TOTAL AMOUNT PAID</span>
                                        </h2>
                                    </div>

                            </div>
                            <p>
                                <a href="javascript:window.print()" class="btn"><i class="fa fa-file-excel-o"></i> Download Summary</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="speaker-shap">
            <img class="shap1" src="{{ asset('/images/banner/green2.png') }}" alt="Image">
        </div>
    </section>

@endsection
