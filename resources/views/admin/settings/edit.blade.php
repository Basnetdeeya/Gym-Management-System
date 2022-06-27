@extends('admin.app')

@section('admin-content')
    <div class="container">
        <div class="row">
            <div class="col-md 12">

                    <div class="card">
                        <div class="card-header">
                            <a href="{{ route('admin.settings.index') }}" class="btn btn-dark"><i class="fa-regular fa-circle-left pr-2"></i> Go Back</a>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.settings.update', $settings->id) }}}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="name">Name:</label><span class="text-danger">*</span>
                                        <input id="name" class="form-control" type="text" name="name" value="{{ $settings->name }}">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="email">Email:</label><span class="text-danger">*</span>
                                        <input id="email" class="form-control" type="text" name="email" value="{{ $settings->email }}">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="phone">Phone Number:</label><span class="text-danger">*</span>
                                        <input id="phone" class="form-control" type="tel" name="phone" value="{{ $settings->phone }}">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="address">Location:</label><span class="text-danger">*</span>
                                        <input id="address" class="form-control" type="text" name="location" value="{{ $settings->location }}">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="map">Map:</label>
                                    <textarea id="map" class="form-control" name="map" rows="3">{{ $settings->map }}</textarea>
                                </div>

                                <div class="form-group">
                                    <label for="logo">Logo:</label><span class="text-danger">*</span>
                                    <input id="logo" class="form-control-file" type="file" name="logo">
                                </div>
                                <div class="my-2">
                                    <img src="{{ asset($settings->logo) }}" width="120" alt="">
                                </div>
                                <div class="row mb-0">
                                    <div class="col-md-12 offset-md-10" >
                                        <button type="submit" class="btn btn-success">
                                            <i class="fa-solid fa-rotate-right pr-2"></i>  {{ __('Update') }}
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
