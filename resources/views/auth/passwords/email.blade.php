@extends('frontend.app')

<div class="@section("class","joinuspage")">
    @section("title"," CHANGE PASSWORD")
</div>

@section('content')
                        {{-- <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}



<div class="container-xl px-4 mt-4">
    <!-- Account page navigation-->
    <nav class="nav nav-borders">
        @guest()
            @if (Route::has('login'))
            <a class="nav-link active" href="{{ route('password.request') }}"  target="__blank">Change Password</a>
            @endif
            @else
            <a class="nav-link  ms-0" href="/profile" target="__blank">Profile</a>
            <a class="nav-link" href="/notification"  target="__blank">Notifications</a>
            <a class="nav-link" href="/payment"  target="__blank">Payment Details</a>
            <a class="nav-link active" href="{{ route('password.request') }}"  target="__blank">Change Password</a>
        @endguest


    </nav>
    <hr class="mt-0 mb-4">
    <div class="row justify-content-center">
        <div class="col-md-8 r">
            <!-- Change password card-->
            <div class="card mb-4">
                <div class="card-header">{{ __('Change Password') }}</div>
                <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <!-- Form Group (current password)-->
                        <div class="mb-3">
                            <label for="email" class=" mb-3">{{ __('Email Address') }}</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Enter your email" autofocus>
                            @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">
                            {{ __('Send Password Reset Link') }}
                        </button>
                    </form>
                </div>
            </div>

            @guest()
            @if (Route::has('login'))

            @endif
            @else
            <!-- Delete account card-->
            <div class="card mb-4">
                <div class="card-header">Delete Account</div>
                <div class="card-body">
                    <p>Deleting your account is a permanent action and cannot be undone. If you are sure you want to delete your account, select the button below.</p>
                    <button class="btn btn-danger-soft text-danger" type="button">I understand, delete my account</button>
                </div>
            </div>
        @endguest

        </div>
    </div>
</div>
@endsection
