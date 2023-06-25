@extends('layouts.base')

@section('content')

    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Add Speaker</h4>
                        <form class="forms-sample">
                            <div class="row">
                                <div class="col-md-2">
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
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label for="exampleInputName1">First Name</label>
                                        <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label for="exampleInputName1">Last Name</label>
                                        <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputName1">slug</label>
                                        <input type="text" class="form-control" id="slug" name="slug" placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputName1">Organization</label>
                                        <input type="text" class="form-control" id="organization" name="organization" placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleSelectGender">Gender</label>
                                        <select class="form-control" id="gender" name="gender">
                                            <option>Male</option>
                                            <option>Female</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>File upload</label>
                                        <input class="form-control file-upload-info" placeholder="Upload Image" id="photo" name="photo" type="file">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="exampleTextarea1">Biography</label>
                                        <textarea class="form-control" id="bio" name="bio" rows="6"></textarea>
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary mr-2">Submit</button>
                            <button class="btn btn-light">Cancel</button>
                        </form>
                    </div>
                </div>
            </div>


        </div>
    </div>
@endsection
