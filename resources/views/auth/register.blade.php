@extends('frontend.app')

<div class="@section("class","joinuspage")">
    @section("title"," R E G I S T E R")
</div>


@section('content')
<div class="choosemember">
    <div aria-label="breadcrumb" class="breadc">
        <div class="  d-flex align-items-center justify-content-center">
            <ol class="breadcrumb breadcrumbs text-center py-2 px-5 border">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Join Us</li>
            </ol>
        </div>
    </div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mb-5">
                <div class="card-header text-center fw-bold fs-3 text-white" style="background-color: #ED541D">{{ __('Sign Up Form') }}</div>

                <div class="card-body">
                    <form id="reg" method="POST" action="{{ route('register') }}">
                        @csrf
                        <input id="pkg" type="hidden"  name="pkg" value="{{ $package->id }}">

                        <h4 class="text-center py-1 fw-bolder" style="color:#ED541D"> <u>Package Selected: {{$package->type}} Package</u> </h4>
                        <h3 class="text-center pb-4">Personal Information</h3>
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="phone" class="col-md-4 col-form-label text-md-end">{{ __('Phone Number') }}</label>

                            <div class="col-md-6">
                                <input id="phone" type="number" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus>

                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="gender" class="col-md-4 col-form-label text-md-end">{{ __('Gender') }}</label>
                            <div class="form-group col-md-6">
                                <select id="gender" class="form-control" name="gender" required>
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

                        <div class="row mb-3">
                            <label for="address" class="col-md-4 col-form-label text-md-end">{{ __('Address') }}</label>

                            <div class="col-md-6">
                                <input id="address" type="address" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address" autofocus>

                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="dob" class="col-md-4 col-form-label text-md-end">{{ __('Date of Bitrh') }}</label>

                            <div class="col-md-6">
                                    <input type="date"  class="form-control  @error('dob') is-invalid @enderror" name="dob"  required autocomplete="dob" autofocus/>
                                @error('dob')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
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


                        <div class="row mb-2">
                            <div class="col-md-6 offset-md-5">
                                <button  type="submit" class="btn btn-dark btn-lg ">Register</button>
                                <button id="payment-button" class="btn btn-dark btn-lg">Proceed to Payment</button>



                            </div>
                        </div>

                        {{-- Khalti --}}
                        <script>
                            var config = {
                                // replace the publicKey with yours
                                "publicKey": "test_public_key_6470fc7b06644804a23e3cf49a6f869c",
                                "productIdentity": "1234567890",
                                "productName": "Dragon",
                                "productUrl": "http://gameofthrones.wikia.com/wiki/Dragons",
                                "paymentPreference": [
                                    "KHALTI"
                                    ],
                                "eventHandler": {
                                    onSuccess (payload) {
                                        $.ajax({
                                        url:"{{url('/payment/verification')}}",
                                        type: 'GET',
                                        data:{
                                        amount : payload.amount,
                                        trans_token : payload.token
                                        },
                                        success: function(res)
                                        {
                                            alert('transaction succeed');

                                            var form = document.getElementById("reg");

                                            var hiddenField = document.createElement("input");
                                            hiddenField.setAttribute("type", "hidden");
                                            hiddenField.setAttribute("name", 'paid');
                                            hiddenField.setAttribute("value", 1);
                                            form.appendChild(hiddenField);

                                            form.submit();
                                        },
                                        error: function(error)
                                        {
                                            alert('transaction failed');
                                        }
                                        })
                                        },
                                    },
                                    onError (error) {
                                        console.log(error);
                                    },
                                    onClose () {
                                        console.log('widget is closing');
                                    }
                                };

                            var checkout = new KhaltiCheckout(config);
                            var btn = document.getElementById("payment-button");
                            btn.onclick = function (e) {
                                // minimum transaction amount must be 10, i.e 1000 in paisa.
                                // document.getElementById('reg').submit();
                                if($('#reg')[0].checkValidity()){
                                    if(document.getElementById('password').value === document.getElementById('password-confirm').value){
                                        checkout.show({amount:parseInt('{{$package->amount}}')*100});
                                        e.preventDefault();
                                    }else{
                                        alert("password didn't match");
                                        e.preventDefault();
                                    }
                                }else{
                                    $("#reg").validate();
                                }
                            }
                        </script>



                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
