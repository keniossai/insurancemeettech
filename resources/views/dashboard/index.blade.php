@extends('layouts.base')


@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="row">
                    <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                        <h3 class="font-weight-bold">Welcome {{user('first_name')}}</h3>
                    </div>
                    <div class="col-12 col-xl-4">
                        <div class="justify-content-end d-flex">
                            <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
                                <a href="{{route('dashboard.users')}}"  class="btn btn-primary btn-rounded btn-fw">View Attendance</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card tale-bg">
                    <div class="card-people mt-auto">
                        <img src="{{asset('images/dashboard/people.svg')}}" alt="people" style="height: 200px; width: 100%;">
                        <div class="weather-info">
                            <div class="d-flex">
                                <div>
                                    <h2 class="mb-0 font-weight-normal"><i class="icon-sun mr-2"></i>31<sup>C</sup></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 grid-margin transparent">
                <div class="row">
                    <div class="col-md-6 mb-4 stretch-card transparent">
                        <div class="card card-tale">
                            <div class="card-body">
                                <p class="mb-4">Total Speakers</p>
                                <p class="fs-30 mb-2">4006</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4 stretch-card transparent">
                        <div class="card card-dark-blue">
                            <div class="card-body">
                                <p class="mb-4">Total Candidate</p>
                                <p class="fs-30 mb-2">61344</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
                        <div class="card card-light-blue">
                            <div class="card-body">
                                <p class="mb-4">Number of Deligates</p>
                                <p class="fs-30 mb-2">34040</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 stretch-card transparent">
                        <div class="card card-light-danger">
                            <div class="card-body">
                                <p class="mb-4">Number of Sponsors</p>
                                <p class="fs-30 mb-2">47033</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <p class="card-title mb-0">Speakers</p>
                        <div class="table-responsive">
                            <table class="table table-striped table-borderless">
                                <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Organization</th>
                                    <th>Date created</th>
                                    <th></th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($speakers as $speaker)
                                        <tr>
                                            <td><img src="speaker/{{$speaker->image}}" /></td>
                                            <td>{{$speaker->name}}</td>
                                            <td class="font-weight-bold">{{$speaker->organization}}</td>
                                            <td>{{$speaker->created_at->toDayDateTimeString()}}</td>
                                            <td></td>
                                            <td>
                                                <a href="speaker/{{$speaker->id}}" type="button" class="btn btn-primary btn-sm">Edit</a>
                                                <form method="post" action="speaker/{{ $speaker->id }}" class="d-inline x-submit">
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm">Delete <x-spinner/> </button>
                                                </form>
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
