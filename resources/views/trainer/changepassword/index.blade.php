@extends('trainer.app')

@section('trainer-content')
<div class="container-xl px-4 mt-4">

    <div class="row justify-content-center">
        <div class="col-md-8 mt-4">
            <!-- Change password card-->
            <div class="card mb-4">
                <div class="card-header">
                    <h4 class="text-center font-weight-bold">Change Password</h4>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('user-password.update') }}">
                        @csrf
                        @method('PUT')
                        {{-- <input type="hidden" name="token" value="{{ $request->token }}"> --}}
                        <!-- Form Group (current password)-->

                        @if (session('status') == "password-updated")
                            <div class="alert alert-success" role="alert">
                                Password Updated Successfully
                            </div>

                        @endif

                        <div class="row mb-3">
                            <label for="current_password" class="col-md-4 col-form-label text-md-end">{{ __('Current Password') }}</label>

                            <div class="col-md-6">
                                <input id="current_password" type="password" class="form-control @error('current_password', 'updatePassword') is-invalid @enderror" name="current_password"  autofocus>

                                @error('current_password' , 'updatePassword')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password', 'updatePassword') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password', 'updatePassword')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        <button class="btn btn-primary" type="submit">{{ __('Reset Password') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
