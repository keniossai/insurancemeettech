@extends('layouts.base')

@section('content')

<section class="content-main">
    <div class="row">
        <div class="col-9">
            <div class="content-header">
                <h2 class="content-title">Add New Speaker</h2>
            </div>
        </div>
        <div class="col-md-9">
            <div class="card mb-4">
                <div class="card-header">
                    <h4>Register a speaker</h4>
                </div>
                <div class="card-body">
                    <form class="x-submit" action="{{ route('speaker.store') }}" method="post"
                    data-then="alert" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-lg-4">
                                <label class="form-label">Title</label>
                                <select class="form-select" name="title" required id="title">
                                    <option>Alh</option>
                                    <option>Chief</option>
                                    <option>Dr</option>
                                    <option>Gov</option>
                                    <option>Hon</option>
                                    <option>HRH</option>
                                    <option>Lady</option>
                                    <option>Miss</option>
                                    <option>Ms</option>
                                    <option>Mrs</option>
                                    <option>Mstr</option>
                                    <option>Mr</option>
                                    <option>Pres</option>
                                    <option>Prof</option>
                                    <option>Rev</option>
                                    <option>SAN</option>
                                    <option>Sen</option>
                                    <option>Sir</option>
                                    <option>Sis</option>
                                </select>
                            </div>
                            <div class="col-lg-4">
                                <div class="mb-4">
                                    <label class="form-label">First Name</label>
                                    <div class="row gx-2">
                                        <input placeholder="" required id="first_name" name="first_name" type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="mb-4">
                                    <label class="form-label">Middle Name</label>
                                    <input placeholder="" required id="middle_name" name="middle_name" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <label class="form-label">Last Name</label>
                                    <input placeholder="" required id="last_name" name="last_name" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <label class="form-label">Designation</label>
                                    <input placeholder="" required id="designation" name="designation" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <label class="form-label">Organization</label>
                                    <input placeholder="" required id="organization" name="organization" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <label class="form-label">Slug</label>
                                    <input placeholder="" required id="slug" name="slug" type="text" class="form-control">
                                </div>
                            </div>

                        </div>
                        <div class="mb-4">
                            <label class="form-label">About(Biography)</label>
                            <textarea placeholder="" required id="bio" name="bio" class="form-control" rows="4"></textarea>
                        </div>
                    </form>
                </div>
            </div> <!-- card end// -->
        </div>
        <div class="col-lg-3">
            <div class="card mb-4">
                <div class="card-header">
                    <h4>Media</h4>
                </div>
                <div class="card-body">
                    <div class="input-upload">
                        <img src="{{ asset('imgs/theme/upload.svg') }}" alt="">
                        <input class="form-control" name="photo" type="file">
                    </div>
                </div>
            </div> <!-- card end// -->

        </div>

        <div>
            <button class="btn btn-light rounded font-sm mr-5 text-body hover-up">Cancel</button>
            <button class="btn btn-md rounded font-sm" type="button">Publish <x-spinner /> </button>
        </div>
    </div>
</section>
<script>
    form.addEventListener('submit', function(event){
        event.preventDefault();
    })
</script>
@endsection
