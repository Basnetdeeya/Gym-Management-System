@extends('frontend.app')

<div class="@section("class","joinuspage")">
    @section("title"," L O G  I N")
</div>

@section('content')
<div class="choosemember">
    <div aria-label="breadcrumb" class="breadc">
        <div class="  d-flex align-items-center justify-content-center">
            <ol class="breadcrumb breadcrumbs text-center py-2 px-5 border">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Log In</li>
            </ol>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center mb-4">
            <div class="col-md-8">
                @include('partials.flash-message')

                <div class="card">
                    <div class="card-header text-center fw-bold fs-3 text-white" style="background-color: #ED541D"> Login</div>

                    <div class="card-body justify-content-center">
                        <form method="POST" action="{{ route('login') }}" class="loginform">
                            @csrf
                            <div class="mb-4">
                                <label for="email" class="col-form-label">{{ __('Email Address') }}</label>
                                {{-- <div class="col-md-6"> --}}
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                {{-- </div> --}}
                            </div>

                            <div class="mb-3">
                                <label for="password" class="col-form-label">{{ __('Password') }}</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                            {{-- <div class="mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div> --}}

                            <div class="mb-3">

                                <button type="submit" class="btn btn-dark btn-lg">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>


                            <p>Haven't sign up yet? Go to <a href="" class="" style="color: #ED541D">Register</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
