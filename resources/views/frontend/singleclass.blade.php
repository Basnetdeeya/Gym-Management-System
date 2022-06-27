@extends('frontend.app')

<div class="@section("class","singleclasspage")">
    @section("title2"," C L A S S  D E T A I L S")
</div>

@section('content')
<div class="classdetails">
    <div aria-label="breadcrumb" class="breadc">
        <div class="  d-flex align-items-center justify-content-center">
            <ol class="breadcrumb breadcrumbs text-center py-2 px-5 border">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item"><a href="/#schedule">Schedule</a></li>
                <li class="breadcrumb-item active" aria-current="page">Class Details</li>
            </ol>
        </div>
    </div>
    <div class="container">
        <h1 class="text-center fw-bolder classtitle">{{$schedule->class}}</h1>
        <img style="height:300px" class="img-fluid rounded mx-auto d-block py-3" src="{{ asset($schedule->image1) }}" alt="">
        <p class="lh-lg fw-light">{{$schedule->des}}</p>

        <div class="row pt-3">
            <div class="col-md-6">
                <h4 class="pb-3">Benefits of {{$schedule->class}} </h4>
                {{$schedule->benifits}}
            </div>

            <div class="col-md-6">
                <div class="class-details fw-bold d-flex justify-content-around align-items-center">
                    <p>Class Duration: {{$schedule->start_time}} - {{$schedule->end_time}}</p>
                    <p>Trainer: {{$schedule->name}}</p>
                </div>
                <img style="height:400px" class="img-fluid" src="{{ asset($schedule->image2) }}" alt="">
            </div>
        </div>

    </div>
</div>
@endsection
