@extends('layouts.app')

@section('content')

    <x-banner title="Admin Dashboard" :meta="[
        'image'    => asset('images/banner/IMG_8572.jpg'),
        'url'      => route('home'),
        'prevPage' => 'Home',
    ]"/>

    <section class="ts-contact-form section-bg ">
        <div class="container ">
            <div class="row">

                <div style="margin-bottom: 50px !important;" class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-4 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="500ms">
                            <div class="single-intro-text mb-30">
                                <i class="icon icon-people"></i>
                                <h3 class="ts-title">Registrations</h3>
                                <p><a data-toggle="modal" href="#modal-report">Download Report</a></p>
                                <br>
                                <span style="width: 200px !important;" class="count-number">{{ $users_count }}</span>
                            </div><!-- single intro text end-->

                        </div><!-- col end-->

                        <div class="col-lg-4 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="400ms">
                            <div class="single-intro-text mb-30">
                                <i class="icon icon-cart"></i>
                                <h3 class="ts-title">Transactions</h3>
                                <p>Total Transactions Initiated</p>
                                <br>
                                <span style="width: 200px !important;"
                                      class="count-number">{{ number_format($transactions_count) }}</span>
                            </div><!-- single intro text end-->
                        </div><!-- col end-->

                        <div class="col-lg-4 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="600ms">
                            <div class="single-intro-text mb-30">
                                <i class="icon icon-money-3"></i>
                                <h3 class="ts-title">Payments (NGN)</h3>
                                <p><a href="{{ route('payments.index') }}" target="_blank">View payment summary</a></p>
                                <br>
                                <span style="width: 200px !important; " class="count-number">@money($transactions_sum_amount)</span>
                            </div><!-- single intro text end-->
                        </div><!-- col end-->
                    </div>
                </div><!-- col end-->
                <div class="col-lg-12">
                    <h2 class="column-title">
                        Registration List
                    </h2>
                    <div class="table-responsive mb-70 pb-4">
                        <form action="{{ route('search.index') }}">
                            <div class="row">
                                <div class="form-group col-md-4 p-3">
                                    <input type="search" name="q" class="form-control" placeholder="Try searching and hit enter..."
                                           value="{{ request('q') }}" aria-label="search">
                                </div>
                            </div>
                        </form>

                        <table class="table table-hover table-bordered" id="u-table" data-order="[]"
                               data-display-length="30">
                            <thead class="thead-light">
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">SCN</th>
                                <th scope="col">Email</th>
                                <th scope="col">Payment</th>
                                <th scope="col">Branch</th>
                                <th>Registration Date</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td>
                                        <a target="_blank" class="text-info" href="{{ route('users.show', $user) }}">
                                            <img class="img-fluid rounded-circle" width="30" src="{{ $user->photo }}"
                                                 alt="photo">
                                            {{ $user->name }}

                                            @admin($user)
                                            <span class="label label-light-success ml-3">Admin</span>
                                            @endadmin
                                        </a>
                                    </td>
                                    <td>{{ $user->enrol?->scn ?? '--' }}</td>
                                    <td>
                                        {{ $user->email }}
                                        <x-verified :verified="$user->hasVerifiedEmail()"/>
                                    </td>
                                    <td>
                                        @empty($user->payments_count)
                                            <span class="text-warning"><i class="fa fa-exclamation-triangle"></i> Pending</span>
                                        @else
                                            <span class="text-success"><i class="fa fa-check-circle"></i> Paid</span>
                                        @endempty

                                        <br><small>{{ $user->attendance }}</small>
                                    </td>
                                    <td>
                                        {{ $user->branch?->name ?? '--' }}
                                    </td>
                                    <td>
                                        {{ $user->registered_at->toDayDateTimeString() }}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                        {{ $users->links() }}
                    </div>

                    <hr>
                    <h4 class="column-title" style="font-size: 20px">Advanced Options</h4>
                    <div class="row">
                        <div class="col-md-3">
                            <p>
                                <a data-toggle="modal" href="#modal-enrol-store">
                                    Enroll SCN to Database
                                </a>
                            </p>
                        </div>
                        <div class="col-md-3">
                            <p>
                                <a data-toggle="modal" href="#modal-upload-scn">
                                    Upload SCN to Database
                                </a>
                            </p>
                        </div>
                        <div class="col-md-3">
                            <p>
                                <a data-toggle="modal" href="#modal-upload-discount-scn">
                                    Upload SCN Eligible for discount to Database
                                </a>
                            </p>
                        </div>
                        <div class="col-md-3">
                            <p>
                                <a data-toggle="modal" href="#modal-upload-sponsored-scn">
                                    Upload SCN for Sponsored Delegate
                                </a>
                            </p>
                        </div>
                    </div>
                    <hr>
                    <h4 class="column-title" style="font-size: 20px">Reconciliation</h4>
                    <div class="row">
                        <div class="col-md-3">
                            <p>
                                <a data-toggle="modal" href="#modal-reconciliation">
                                    Reconcile Payments
                                </a>
                            </p>
                        </div>
                    </div>
                </div><!-- col end -->

            </div>
        </div>
        <div class="speaker-shap">
            <img class="shap1" src="{{ asset('images/banner/green2.png') }}" alt="Image">
        </div>
    </section>


    <div class="modal fade" id="modal-report" tabindex="1" role="dialog"
         aria-labelledby="myModal" style="display: none">
        <div class="modal-dialog" role="document">
            <div class="modal-content p-4">
                <div class="modal-header">
                    <h4 class="modal-title">Registration Report</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                </div>

                <form action="{{ route('registration-download') }}">
                    <div class="modal-body">
                        <div class="row">
                            <div class="form-group col-sm-12">
                                <label for="virtual">Attendance Type</label>
                                <select class="form-control" name="virtual" id="virtual">
                                    <option value="">All Attendees</option>
                                    <option value="0">In-Person Attendees Only</option>
                                    <option value="1">Virtual Attendees Only</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn">Get Report</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modal-enrol-store" tabindex="1" role="dialog"
         aria-labelledby="myModal" style="display: none">
        <div class="modal-dialog" role="document">
            <div class="modal-content p-4">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModal">Enroll SCN to Database</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                </div>

                <form action="{{ route('api.enrols.store') }}" class="x-submit">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="name">Full Name</label>
                                    <input class="form-control form-control-name" name="name" id="name" type="text" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="scn">SCN</label>
                                    <input class="form-control form-control-subject" name="scn" id="scn" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="year_of_call">Year of Call</label>
                                    <input class="form-control form-control-name" name="year_of_call" id="year_of_call" type="number" required>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn">Submit <x-spinner /> </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modal-upload-scn" tabindex="1" role="dialog"
         aria-labelledby="myModal" style="display: none">
        <div class="modal-dialog" role="document">
            <div class="modal-content p-4">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModal">Upload SCN to Database</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                </div>

                <form action="{{ route('api.upload-scn.store') }}" class="x-submit" enctype="multipart/form-data"  accept=".xlsx, .xls, .csv">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="enrols">Upload Data sheet SCN</label>
                                    <input class="form-control form-control-name" name="enrols" id="enrols" type="file" required>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn">Upload <x-spinner /> </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modal-upload-discount-scn" tabindex="1" role="dialog"
         aria-labelledby="myModal" style="display: none">
        <div class="modal-dialog" role="document">
            <div class="modal-content p-4">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModal">Upload SCN Eligible for Discount to Database</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                </div>

                <form action="{{ route('api.discount-scn.store') }}" class="x-submit" enctype="multipart/form-data"  accept=".xlsx, .xls, .csv">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="enrols">Upload Data sheet of SCN Eligible for Discount</label>
                                    <input class="form-control form-control-name" name="enrols" id="enrols" type="file" required>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn">Upload <x-spinner /> </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modal-upload-sponsored-scn" tabindex="1" role="dialog"
         aria-labelledby="myModal" style="display: none">
        <div class="modal-dialog" role="document">
            <div class="modal-content p-4">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModal">Upload Sponsored SCN</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                </div>

                <form action="{{ route('api.sponsored-scn.store') }}" class="x-submit" enctype="multipart/form-data"  accept=".xlsx, .xls, .csv">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="enrols">Upload Datasheet for Sponsored SCN</label>
                                    <input class="form-control form-control-name" name="enrols" id="enrols" type="file" required>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn">Upload <x-spinner /> </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

{{--    Accounting Reconcilation--}}
    <div class="modal fade" id="modal-reconciliation" tabindex="1" role="dialog"
         aria-labelledby="myModal" style="display: none">
        <div class="modal-dialog" role="document">
            <div class="modal-content p-4">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModal">Upload Successful Transactions(.csv file only)</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                </div>

                <form action="{{ route('api.reconcile.store') }}" class="x-submit" enctype="multipart/form-data"  accept=".xlsx, .xls, .csv">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="enrols">Upload Successful Transactions Datasheet  </label>
                                    <input class="form-control form-control-name" name="datasheet" id="enrols" type="file" required>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn">Upload <x-spinner /> </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection

@push('script')
    <x-scripts.datatable/>

    <script>
        //$('#u-table').DataTable();
    </script>
@endpush
