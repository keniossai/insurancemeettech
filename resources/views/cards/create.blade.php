@extends('layouts.app')

@section('title', 'ID Card Generator')

@section('content')

    <x-banner title="ID Card Generator" :meta="[
        'image'    => asset('images/banner/F69A9237.jpg'),
        'url'      => route('home'),
        'prevPage' => 'Home',
    ]" />

    <section class="ts-contact-form section-bg ">
        <div class="container ">
            <div class="row">
                <div class="col-lg-5 mx-auto">
                    <div class="card card-body">
                        <form  action="{{ route('generate') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="file"><b>Upload CSV</b></label>
                                <input id="file" name="doc" type="file" class="form-control" accept="text/csv" required>

                                <div><a href="https://res.cloudinary.com/nba/raw/upload/v1660113808/nbaconference/misc/test_3.csv"><small>Download sample template</small>

                                    </a>
                                </div>

                            <div class="form-group">
                                <input type="checkbox" id="remove_bg" name="remove_bg" value="1" checked>
                                <label for="remove_bg" class="ml-1 text-secondary">Remove Background</label>
                            </div>

                            <div class="form-group">
                                <div class="text-center"><br>
                                    <button class="btn" type="submit">Generate</button>
                                </div>
                            </div>
                        </form>

                    </div>

                </div>
            </div>
        </div>

    </section>



@endsection
