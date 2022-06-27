@extends('admin.app')

@section('admin-content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 px-5">
                    <div class="card">
                        <div class="card-header">
                            <a href="{{ route('admin.member.index') }}" class="btn btn-dark"><i class="fa-regular fa-circle-left pr-2"></i>Back</a>
                        </div>
                        <div class="card-body">
                            <form method="post" action="{{ route('admin.member.store') }}" enctype="multipart/form-data">
                                @csrf
                                <h3 class="text-center fw-bolder pb-2">Add Member/Trainer</h3>
                                <div class="row mx-5 mb-3">
                                    <label for="name" class="col-md-2 col-form-label text-md-end">{{ __('Name:') }}</label>

                                    <div class="col-md-10">
                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}"  autocomplete="name" autofocus>

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mx-5 mb-3">
                                    <label for="phone" class="col-md-2 col-form-label text-md-end">{{ __('Phone Number:') }}</label>

                                    <div class="col-md-10">
                                        <input id="phone" type="number" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}"  autocomplete="phone" autofocus>

                                        @error('phone')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-2 mx-5">
                                    <label for="gender" class="col-md-2 col-form-label text-md-end">{{ __('Gender:') }}</label>
                                    <div class="form-group col-md-10">
                                        <select id="gender" class="form-control" name="gender" >
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

                                <div class="row mb-3 mx-5">
                                    <label for="address" class="col-md-2 col-form-label text-md-end">{{ __('Address:') }}</label>

                                    <div class="col-md-10">
                                        <input id="address" type="address" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}"  autocomplete="address" autofocus>

                                        @error('address')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3 mx-5">
                                    <label for="dob" class="col-md-2 col-form-label text-md-end">{{ __('Date of Birth:') }}</label>

                                    <div class="col-md-10">
                                            <input type="date"  class="form-control  @error('dob') is-invalid @enderror date" name="dob"   autocomplete="dob" autofocus/>
                                        @error('dob')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3 mx-5">
                                    <label for="email" class="col-md-2 col-form-label text-md-end">{{ __('Email Address:') }}</label>

                                    <div class="col-md-10">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  autocomplete="email">

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3 mx-5">
                                    <label for="password" class="col-md-2 col-form-label text-md-end">{{ __('Password:') }}</label>

                                    <div class="col-md-10">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"  autocomplete="new-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3 mx-5">
                                    <label for="password_confirmation" class="col-md-2 col-form-label text-md-end">{{ __('Confirm Password:') }}</label>

                                    <div class="col-md-10">
                                        <input id="password_confirmation" type="password" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation"  autocomplete="new-password">

                                        @error('password_confirmation')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3 mx-5">
                                    <label for="role" class="col-md-2 col-form-label text-md-end">{{ __('Roles:') }}</label>
                                    @foreach ($roles as $role )
                                    <div class=" justify-content-between mt-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="roles[]" value="{{ $role->id }}" id="{{ $role->name }}">
                                            <label class="form-check-label mr-3" for="{{ $role->name }}">
                                                {{ $role->name }}
                                            </label>
                                          </div>

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    @endforeach

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
