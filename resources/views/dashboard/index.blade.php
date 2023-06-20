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
                    <h2 class="section-title">Registration List</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Hero End -->

<div class="login-register-area section-padding-02">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="hero-form mt-0 grey-bg">

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
                                <th scope="col">ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Email</th>
                                <th scope="col">Payment Status</th>
                                <th scope="col">Organisation</th>
                                <th>Registration Date</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
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
                                    <td>{{ $user->phone }}</td>
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
                                        {{ $user->organization}}
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
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
{{--
@push('script')
    <x-scripts.datatable/>

    <script>
        //$('#u-table').DataTable();
    </script>
@endpush --}}
