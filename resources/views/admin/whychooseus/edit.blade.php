@extends('admin.app')

@section('admin-content')
    <div class="container">
        <div class="row">
            <div class="col-md 12">
                <div class="card">
                    <div class="card-header">
                        <a href="{{ route('admin.whychooseus.index') }}" class="btn btn-dark"><i class="fa-regular fa-circle-left pr-2"></i> Go Back</a>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('admin.whychooseus.update', $chooseus->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <h3 class="text-center fw-bold pb-3">Why Choose Us Edit</h3>
                                <div class=" mx-5 mb-3">
                                    <label for="title" class=" col-form-label text-md-end">{{ __('Title:') }}</label>

                                        <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ $chooseus->title }}" autofocus>

                                        @error('title')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                </div>

                                <div class=" mx-5 mb-3">
                                    <div class="form-group">
                                        <label for="description" class="col-form-label text-md-end">{{ __('Description:') }}</label>

                                        <textarea id="description" type="text" class="description form-control @error('description') is-invalid @enderror" name="description" value="" placeholder="" rows="5"  autofocus>{{$chooseus->description}}</textarea>

                                        @error('description')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                    </div>
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
