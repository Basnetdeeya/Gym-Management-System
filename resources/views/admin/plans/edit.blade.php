@extends('admin.app')

@section('admin-content')
    <div class="container">
        <div class="row">
            <div class="col-md 12">
                    <div class="card">
                        <div class="card-header">
                            <a href="{{ route('admin.plans.index') }}" class="btn btn-dark"><i class="fa-regular fa-circle-left pr-2"></i>Go Back</a>
                        </div>
                        <div class="card-body">
                            <form method="post" action="{{ route('admin.plans.update', $package->id) }}" enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                <h3 class="text-center fw-bold pb-3">Packages Edit</h3>
                                <div class=" mx-5 mb-3">
                                    <label for="type" class=" col-form-label text-md-end">{{ __('Type:') }}</label>

                                        <input id="type" type="text" class="form-control @error('type') is-invalid @enderror" name="type" value="{{ $package->type }}" autofocus>

                                        @error('type')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div>

                                <div class=" mx-5 mb-3">
                                    <label for="amount" class=" col-form-label text-md-end">{{ __('Amount:') }}</label>

                                        <input id="amount" type="text" class="form-control @error('amount') is-invalid @enderror" name="amount" value="{{ $package->amount }}" autofocus>

                                        @error('amount')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div>

                                <div class=" mx-5 mb-3">
                                    <div class="form-group">
                                        <label for="facility" class="col-form-label text-md-end">{{ __('Facility:') }}</label>

                                        <textarea id="description" class="description form-control @error('facility') is-invalid @enderror" name="facility" rows="5"  autofocus>{{$package->facility}}</textarea>

                                        @error('facility')
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
