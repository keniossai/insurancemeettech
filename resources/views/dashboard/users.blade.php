@extends('layouts.base')


@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <p class="card-title mb-0">Speakers</p>
                        <div class="table-responsive">
                            <table class="table table-striped table-borderless">
                                <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Is Admin</th>
                                    <th scope="col">Organisation</th>
                                    <th>Registration Date</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $user)
                                    <tr>
                                        <td>{{$user->id}}</td>
                                        <td>
                                            <a target="_blank" class="text-info" href="{{ route('users.show', $user) }}">
                                                <img class="img-fluid rounded-circle" width="30" src="{{ $user->photo }}"
                                                     alt="photo">
                                            </a>
                                        </td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->phone }}</td>
                                        <td>
                                            {{ $user->email }}
                                            <x-verified :verified="$user->hasVerifiedEmail()"/>
                                        </td>
                                        <td>
                                            @admin($user)
                                            <span class="label label-light-success ml-3">Yes</span>
                                            @endadmin
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
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection

