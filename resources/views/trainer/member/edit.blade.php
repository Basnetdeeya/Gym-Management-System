@extends('trainer.app')

@section('trainer-content')
    <div class="container">
        <div class="row">
            <div class="col-md 12">
                    <div class="card">
                        <div class="card-header">
                            <a href="{{ route('admin.member.index') }}" class="btn btn-dark"><i class="fa-regular fa-circle-left pr-2"></i>Go Back</a>
                        </div>
                        <div class="card-body">
                            <form method="post" action="{{ route('admin.member.update', $users->id) }}" enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                <h3 class="text-center fw-bold pb-3">Edit User</h3>

                                <div class="row mx-5 mb-3">
                                    <label for="name" class="col-md-2 col-form-label text-md-end">{{ __('Name:') }}</label>

                                    <div class="col-md-10">
                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }} @isset($users){{ $users->name }} @endisset" required autocomplete="name" autofocus>

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
                                        <input id="phone" type="number" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ $users->phone  }}" required autocomplete="phone" autofocus>

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
                                        <select id="gender" class="form-control" name="gender" value="{{ old('gender') }} @isset($users){{ $users->gender  }} @endisset" required>
                                            <option value="">Select Gender</option>
                                            <option value="male" >Male</option>
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
                                        <input id="address" type="address" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }} @isset($users){{ $users->address }}
                                        @endisset" required autocomplete="address" autofocus>

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
                                            <input type="text" id="dob" class="form-control date @error('dob') is-invalid @enderror date" name="dob" value="{{ old('dob') }} @isset($users){{ $users->dob  }} @endisset"  required autocomplete="dob" autofocus/>
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
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }} @isset($users){{ $users->email  }} @endisset" required autocomplete="email">

                                        @error('email')
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
                                            <input class="form-check-input" type="radio" name="roles[]" value="{{ $role->id }}"
                                            id="{{ $role->name }}" @isset($users) @if (in_array($role->id, $users->roles->pluck('id')->toArray())) checked @endif @endisset>
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
