@extends('frontend.app')

<div class="@section("class","joinuspage")">
    @section("title"," J O I N    U S")
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
        <h2 class="heading text-black fw-bold text-center">Choose a Membership Package</h2>
        <p class="memberpara text-center py-2">We offer a wide range of membership with options to suit every budget. Everything from One Month Pass to annual prepaid memberships. What’s more, we won’t tie you in to a long term contract, giving you greater flexibility</p>
        <div class="row">
            @foreach ($package as $packages)
                <div class="col-md-3">
                    <div class="card text-center">
                        <div class="card-body membership-card text-white">
                            <h5 class="py-2">{{ $packages->type }}</h5>
                            <h1 class="price pb-3">Rs {{ $packages->amount }}</h1>
                            <ul class=" membership-detail ps-0">
                                <li class="pb-0">{!! Str::limit($packages->facility, 1000) !!}</li>
                            </ul>
                        </div>
                        <div class="card-footer">
                            <a href="/register/{{$packages->id}}" class="getmember text-decoration-none ">Join Us</a>
                        </div>
                    </div>
                </div>
                @endforeach

        </div>
    </div>

</div>
@endsection
