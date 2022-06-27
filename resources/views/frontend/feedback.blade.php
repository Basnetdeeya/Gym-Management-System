@extends('frontend.app')

<div class="@section("class","singleclasspage")">
    @section("title2","MY PROFILE")
</div>

@section('content')
<div class="container-xl px-4 mt-4">
    <!-- Account page navigation-->
    <nav class="nav nav-borders">
        <a class="nav-link  ms-0" href="/profile" >Profile</a>
        <a class="nav-link " href="/notification"  >Notifications</a>
        <a class="nav-link" href="/changepassword"  >Change Password</a>
        <a class="nav-link active" href="/feedback"  >Feedback</a>
    </nav>
    <hr class="mt-0 mb-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @include('partials.flash-message')
                <div class="card mb-5">
                        <div class="card-header">
                            <h3 class="text-center">Feedback Form</h3>
                            <p class="second-text text-center">We would love to hear your thought, suggestion, corncern or any problem so that we can improve</p>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('feedback.store') }}" method="POST">
                            @csrf

                            <div class="row">
                                <span class="fs-5  fw-bold text-center">Feedback Type</span>
                                <div class="d-flex justify-content-around">
                                    <div class="form-check mt-3">
                                        <input class="form-check-input fw-bold fs-5" type="radio" name="feedbacktype" id="feedbacktype" value="comments">
                                        <label class="form-check-label fw-bold fs-small" for="comments">
                                            Comments
                                        </label>
                                    </div>

                                    <div class="form-check mt-3">
                                        <input class="form-check-input fw-bold fs-5" type="radio" name="feedbacktype" id="feedbacktype" value="suggestions" checked>
                                        <label class="form-check-label fw-bold fs-small" for="suggestions">
                                            Sugggestions
                                        </label>
                                    </div>

                                    <div class="form-check mt-3">
                                        <input class="form-check-input fw-bold fs-5" type="radio" name="feedbacktype" id="questions" checked>
                                        <label class="form-check-label fw-bold fs-small" for="questions">
                                            Questions
                                        </label>
                                    </div>
                                </div>

                                <div class="row fw-bold justify-content-center mt-4">
                                    <div class="col-sm-4 fw-bold fs-5 ">
                                        <div class="d-flex"><i class="fas fa-user"></i>  <label for="name" class="form-label fw-bold  ms-3">Name</label></div>
                                        <input type="name" class="@error('name') is-invalid @enderror  form-control" name="name" id="name">
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-sm-4 fw-bold fs-5  ">
                                        <i class="fas fa-envelope"></i> <label for="email" class="form-label ms-3 fw-bold ">Email Address</label>
                                            <input type="email" class=" @error('email') is-invalid @enderror  form-control" name="email" id="email">
                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>


                                <div class="row fw-bold justify-content-center mt-4">
                                    <div class="col-sm-4 fw-bold fs-5 ">
                                        <div class="md-form md-outline input-with-post-icon datepicker " id="accLabels"><i class="fas fa-calendar-alt"></i>
                                        <label for="date" class="for-label ms-3">Date:</label>
                                        <input  type="date" id="date" class="@error('date') is-invalid @enderror form-control mt-2" name="date">
                                        @error('date')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-4 fw-bold fs-5 ">
                                        <div class="d-flex"><i class="fs-5 fas fa-phone"></i>
                                        <label for="phone" class="form-label ms-3">Phone Number</label></div>
                                        <input type="phone" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone">
                                        @error('phone')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row fw-bold justify-content-center my-4">

                                    <label for="feedbackmessage" class="fw-bold fs-5 text-center mb-3">Describe Your Feedback</label>
                                    <div class="col-md-8">
                                        <textarea id="feedbackmessage" type="text" placeholder="Leave a comment here" class="form-control @error('feedbackmessage') is-invalid @enderror" name="feedbackmessage" rows="3"></textarea>
                                        @error('feedbackmessage')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="text-center mb-2">
                                    <button type="submit" class="btn btn-secondary fw-bold px-5 py-2">Submit</button>
                                    </div>
                            </div>
                            </form>
                        </div>
            </div>
        </div>
    </div>
</div>
@endsection
