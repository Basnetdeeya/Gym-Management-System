@extends('admin.app')

@section('admin-content')
    <div class="container">
        <div class="row">
            <div class="col-md 12">
                    <div class="card">
                        <div class="card-header">
                            <a href="{{ route('admin.settings.index') }}" class="btn btn-dark"><i class="fa-regular fa-circle-left pr-2"></i>Go Back</a>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.settings.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="name">Name:</label><span class="text-danger">*</span>
                                        <input id="name" class="form-control" type="text" name="name">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="email">Email:</label><span class="text-danger">*</span>
                                        <input id="email" class="form-control" type="text" name="email">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="phone">Phone Number:</label><span class="text-danger">*</span>
                                        <input id="phone" class="form-control" type="tel" name="phone">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="address">Location:</label><span class="text-danger">*</span>
                                        <input id="address" class="form-control" type="text" name="location">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="map">Map:</label>
                                    <textarea id="map" class="form-control" name="map" rows="3"></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="logo">Logo:</label><span class="text-danger">*</span>
                                    <input id="logo" class="form-control-file" type="file" name="logo">
                                </div>

                                <div class="row mb-0">
                                    <div class="col-md-12 offset-md-9">
                                        <button type="submit" class="btn btn-success mr-2">
                                            <i class="fa-solid fa-floppy-disk pr-2"></i> {{ __('Save') }}
                                        </button>
                                        <button type="reset" class="btn btn-warning">
                                            <i class="fa-solid fa-circle-xmark pr-2"></i> {{ __('Clear') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

            </div>
        </div>
    </div>
@endsection
