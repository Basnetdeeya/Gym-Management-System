@extends('admin.app')

@section('admin-content')
    <div class="container">
        <div class="row">
            <div class="col-md 12">
                    <div class="card">
                        <div class="card-header">
                            <a href="{{ route('admin.aboutus.index') }}" class="btn btn-dark"><i class="fa-regular fa-circle-left pr-2"></i>Go Back</a>
                        </div>
                        <div class="card-body">
                            <form method="post" action="{{ route('admin.aboutus.store') }}" enctype="multipart/form-data">
                                @csrf
                                <h3 class="text-center fw-bold pb-3">About Us</h3>
                                <div class=" mx-5 mb-3">
                                    <label for="title" class=" col-form-label text-md-end">{{ __('Title:') }}</label>

                                        <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" autofocus>

                                        @error('title')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                </div>

                                <div class=" mx-5 mb-3">
                                    <div class="form-group">
                                        <label for="description" class="col-form-label text-md-end">{{ __('Description:') }}</label>

                                        <textarea id="description" class="description form-control @error('description') is-invalid @enderror" name="description" rows="5"  autofocus></textarea>

                                        @error('description')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                    </div>
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
