@extends('trainer.app')

@section('trainer-content')
<div class="container px-4">

        <div class="row justify-content-center">
            <div class="col-xl-8">

                <!-- Account details card-->
            <div class="card mb-4 ">
                <div class="card-header">
                    <h4 class="text-center font-weight-bold">Trainer Profile Details</h4>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('user-profile-information.update') }}">
                        @csrf
                        @method('PUT')
                        <div class="">
                            <div class="row mb-3 pl-5">
                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ auth()->user()->name }}"  autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3 pl-5">
                                <label for="phone" class="col-md-4 col-form-label text-md-end">{{ __('Phone Number') }}</label>

                                <div class="col-md-6">
                                    <input id="phone" type="number" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ auth()->user()->phone  }}"  autocomplete="phone" autofocus>

                                    @error('phone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3 pl-5">
                                <label for="gender" class="col-md-4 col-form-label text-md-end">{{ __('Gender') }}</label>
                                <div class="form-group col-md-6">
                                    <select id="gender" class="form-control" name="gender" value="{{ auth()->user()->gender }}">
                                        <option value="">Select Gender</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                        <option value="others">Others</option>
                                    </select>
                                </div>

                                @error('gender')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>

                            <div class="row mb-3 pl-5">
                                <label for="address" class="col-md-4 col-form-label text-md-end">{{ __('Address') }}</label>

                                <div class="col-md-6">
                                    <input id="address" type="address" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ auth()->user()->address }}"  autocomplete="address" autofocus>

                                    @error('address')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3 pl-5">
                                <label for="dob" class="col-md-4 col-form-label text-md-end">{{ __('Date of Bitrh') }}</label>

                                <div class="col-md-6">
                                        <input type="date" id="dob" class="form-control date @error('dob') is-invalid @enderror" value="{{ auth()->user()->dob }}" name="dob"   autocomplete="dob" autofocus/>
                                    @error('dob')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3 pl-5">
                                <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ auth()->user()->email }}"  autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-0 pl-5  ">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-success btn-md">
                                        {{ __('Update Profile') }}
                                    </button>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
        </div>

    </div>
</div>
@endsection
