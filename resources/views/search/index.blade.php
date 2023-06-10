@extends('layouts.app')

@section('content')

    <x-banner title="Search Results" :meta="[
        'image'    => asset('images/banner/IMG_8572.jpg'),
        'url'      => route('dashboard'),
        'prevPage' => 'Dashboard',
    ]"/>

    <section class="ts-contact-form section-bg ">
        <div class="container ">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="column-title">
                        Search Results for "{{ request('q') }}"
                    </h2>
                    <div class="table-responsive mb-70 pb-4">
                        <table class="table table-hover table-bordered" id="u-table" data-order="[]"
                               data-display-length="30" data-language='{"search": "Filter Further:"}'>
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
                                            <img class="img-fluid rounded-circle" width="30" src="{{ $user->photo }}" alt="photo">
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

                                        <br><small>{{ $user->isAttendingVirtually() ? 'Virtual' : 'In-Person' }}</small>
                                    </td>
                                    <td>
                                        {{ $user->branch?->name ?? '--' }}
                                    </td>
                                    <td>
                                        {{ $user->registered_at?->toDayDateTimeString() }}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="speaker-shap">
            <img class="shap1" src="{{ asset('images/banner/green2.png') }}" alt="Image">
        </div>
    </section>
@endsection

@push('script')
    <x-scripts.datatable/>

    <script>
        $('#u-table').DataTable();
    </script>
@endpush
