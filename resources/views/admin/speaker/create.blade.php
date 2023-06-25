@extends('layouts.base')

@section('content')

    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Add Speaker</h4>
                        <form class="forms-sample x-submit" enctype="multipart/form-data" action="{{route('speaker.store')}}" method="post" data-then="reload">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleSelectGender">Title</label>
                                        <select class="form-control" name="title" id="title" required>
                                            <option value="">Select title</option>
                                            <option>Mr</option>
                                            <option>Mrs</option>
                                            <option>Prof</option>
                                            <option>Eng</option>
                                            <option>Dr</option>
                                            <option>CEO</option>
                                            <option>Co, Founder</option>
                                            <option>Founder</option>
                                            <option>Managing Director</option>
                                            <option>Director</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputName1">Full Name</label>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputName1">slug</label>
                                        <input type="text" class="form-control" id="slug" name="slug" placeholder="Name" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputName1">Organization</label>
                                        <input type="text" class="form-control" id="organization" name="organization" placeholder="Name" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleSelectGender">Gender</label>
                                        <select class="form-control" id="gender" name="gender" required>
                                            <option value="M">Male</option>
                                            <option value="F">Female</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>File upload</label>
                                        <input class="form-control file-upload-info" placeholder="Upload Image" id="image" name="image" type="file" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="exampleTextarea1">Biography</label>
                                        <textarea class="form-control" id="bio" name="bio" rows="6" required></textarea>
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary mr-2">Submit <x-spinner /> </button>
                        </form>
                    </div>
                </div>
            </div>


        </div>
    </div>
@endsection
