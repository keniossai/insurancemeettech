@extends('layouts.base')

@section('content')

    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Add Sponsor</h4>
                        <form class="forms-sample x-submit" enctype="multipart/form-data" action="{{route('sponsor.store')}}" method="post" data-then="reload">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputName1">Sponsor Name</label>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>File upload</label>
                                        <input class="form-control file-upload-info" placeholder="Upload Image" id="image" name="image" type="file" required>
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
