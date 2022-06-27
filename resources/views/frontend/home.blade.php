@extends('frontend.app')

<div class="@section("class","section1")">

</div>

@section('content')
       <div id="about" class="section2">
        <div class="container">
            <div class="row ">
                <div class="col-md-5">
                    <img class="img-fluid" src="{{url('/images/aboutuspic.png')}}" alt="">
                </div>

                <div class="col-md-7 ps-4">
                    <h3 class="heading1 pb-2">About Us</h3>
                    <h2 class="fw-bold fs-1 pb-2">GYM MANAGEMENT SYSTEM</h2>
                    @foreach ($about as $aboutus )
                    <p class="para lh-lg">{!! Str::limit($aboutus->description, 1000) !!}</p>
                    @endforeach
                    <a href="/about" class=" text-decoration-none knowmore">Know More</a>
                </div>
            </div>
        </div>
    </div>

    <div id="service" class="section3">
        <div class="container">
            <h2 class="heading text-white fw-bold text-center pb-4">What we provide?</h2>
            <div class="row align-items-center">
                @foreach ($provide as $data )
                <div class="col-md-4 py-3">
                    <div class="card">
                        <img src="{{ asset($data->serviceimage) }}" class="card-img-top img-fluid" alt="serviceimage">
                        <div class="card-body">
                            <h5 class="card-title text-center py-2">{{ $data->title }}</h5>
                            <p class="card-text lh-lg">{!! Str::limit($data->description, 700) !!}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="section4">
        <div class="container">
            <h2 class="heading text-black fw-bold text-center">Be a Member!!</h2>
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

    <div id="classes" class="section5">
        <div class="container">
            <h2 class="heading text-black fw-bold text-center ">Our Fitness Classes</h2>
            <div class="row">
                <div class="col-md-3 py-4">
                    <div class="card">
                        <img class="img-fluid" src="images/class1.png" alt="">
                        <div class="card-body class text-center p-2">
                            <h5 class="card-title text-white fs-3">Yoga</h5>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 py-4">
                    <div class="card">
                        <img class="img-fluid" src="images/class2.png" alt="">
                        <div class="card-body class text-center p-2">
                            <h5 class="card-title text-white fs-3">Weight Lifting</h5>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 py-4">
                    <div class="card">
                        <img class="img-fluid" src="images/class3.png" alt="">
                        <div class="card-body class text-center p-2">
                            <h5 class="card-title text-white fs-3">Body Building</h5>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 py-4">
                    <div class="card">
                        <img class="img-fluid" src="images/class4.png" alt="">
                        <div class="card-body class text-center p-2">
                            <h5 class="card-title text-white fs-3">Cardio</h5>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 py-4">
                    <div class="card">
                        <img class="img-fluid" src="images/class5.png" alt="">
                        <div class="card-body class text-center p-2">
                            <h5 class="card-title text-white fs-3">Aerobics</h5>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 py-4">
                    <div class="card">
                        <img class="img-fluid" src="images/class1.png" alt="">
                        <div class="card-body class text-center p-2">
                            <h5 class="card-title text-white fs-3">Stretching</h5>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 py-4">
                    <div class="card">
                        <img class="img-fluid" src="images/class2.png" alt="">
                        <div class="card-body class text-center p-2">
                            <h5 class="card-title text-white fs-3">Cycling</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="schedule" class="section6">
        <div class="container">
            <h2 class="heading text-black fw-bold text-center pb-4 ">Schedule</h2>
            <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
                <li class="nav-item day" role="presentation">
                    <button class="nav-link active eachday" id="pills-sunday-tab" data-bs-toggle="pill" data-bs-target="#pills-sunday" type="button" role="tab" aria-controls="pills-sunday" aria-selected="true">Sunday</button>
                </li>
                <li class="nav-item day" role="presentation">
                    <button class="nav-link eachday" id="pills-monday-tab" data-bs-toggle="pill" data-bs-target="#pills-monday" type="button" role="tab" aria-controls="pills-monday" aria-selected="false">Monday</button>
                </li>
                <li class="nav-item day" role="presentation">
                    <button class="nav-link eachday" id="pills-tuesday-tab" data-bs-toggle="pill" data-bs-target="#pills-tuesday" type="button" role="tab" aria-controls="pills-tuesday" aria-selected="false">Tuesday</button>
                </li>
                <li class="nav-item day" role="presentation">
                    <button class="nav-link eachday" id="pills-wednesday-tab" data-bs-toggle="pill" data-bs-target="#pills-wednesday" type="button" role="tab" aria-controls="pills-wednesday" aria-selected="false">Wednesday</button>
                </li>
                <li class="nav-item day" role="presentation">
                    <button class="nav-link eachday" id="pills-thursday-tab" data-bs-toggle="pill" data-bs-target="#pills-thursday" type="button" role="tab" aria-controls="pills-thursday" aria-selected="false">Thursday</button>
                </li>
                <li class="nav-item day" role="presentation">
                    <button class="nav-link eachday" id="pills-friday-tab" data-bs-toggle="pill" data-bs-target="#pills-friday" type="button" role="tab" aria-controls="pills-friday" aria-selected="false">Friday</button>
                </li>
                <li class="nav-item day" role="presentation">
                    <button class="nav-link eachday" id="pills-saturday-tab" data-bs-toggle="pill" data-bs-target="#pills-friday" type="button" role="tab" aria-controls="pills-friday" aria-selected="false">Friday</button>
                </li>
            </ul>
            <div class="tab-content pt-4" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-sunday" role="tabpanel" aria-labelledby="pills-sunday-tab">
                    @foreach($schedule as $sch)
                        @if($sch->day == 'Sunday')
                            <table class="table text-white  mb-4">
                                <tbody>
                                    <tr>
                                        <td class="class-name text-center" style="width: 300px;"> {{$sch->class}} </td>
                                    <td class="time text-center" style="width: 300px;">{{$sch->start_time}} - {{$sch->end_time}}</td>
                                    <td class="trainername text-center" style="width: 300px;">{{$sch->name}}</td>
                                        <td class="text-end "><button class="text-black py-0 btn seedetails" type="submit"><a class="text-decoration-none text-dark" href="/singleclass/{{$sch->id}}">See Details</a></button></td>
                                    </tr>
                                </tbody>
                            </table>
                        @endif
                    @endforeach
                </div>
                <div class="tab-pane fade" id="pills-monday" role="tabpanel" aria-labelledby="pills-monday-tab">
                    @foreach($schedule as $sch)
                        @if($sch->day == 'Monday')
                            <table class="table text-white  mb-4">
                                <tbody>
                                    <tr>
                                        <td class="class-name text-center" style="width: 300px;"> {{$sch->class}} </td>
                                    <td class="time text-center" style="width: 300px;">{{$sch->start_time}} - {{$sch->end_time}}</td>
                                    <td class="trainername text-center" style="width: 300px;">{{$sch->name}}</td>
                                        <td class="text-end "><button class="text-black py-0 btn seedetails" type="submit"><a class="text-decoration-none text-dark" href="/singleclass/{{$sch->id}}">See Details</a></button></td>
                                    </tr>
                                </tbody>
                            </table>
                        @endif
                    @endforeach
                </div>

                <div class="tab-pane fade" id="pills-tuesday" role="tabpanel" aria-labelledby="pills-tuesday-tab">
                    @foreach($schedule as $sch)
                        @if($sch->day == 'Tuesday')
                            <table class="table text-white  mb-4">
                                <tbody>
                                    <tr>
                                        <td class="class-name text-center" style="width: 300px;"> {{$sch->class}} </td>
                                    <td class="time text-center" style="width: 300px;">{{$sch->start_time}} - {{$sch->end_time}}</td>
                                    <td class="trainername text-center" style="width: 300px;">{{$sch->name}}</td>
                                        <td class="text-end "><button class="text-black py-0 btn seedetails" type="submit"><a class="text-decoration-none text-dark" href="/singleclass/{{$sch->id}}">See Details</a></button></td>
                                    </tr>
                                </tbody>
                            </table>
                        @endif
                    @endforeach
                </div>

                <div class="tab-pane fade" id="pills-wednesday" role="tabpanel" aria-labelledby="pills-wednesday-tab">
                    @foreach($schedule as $sch)
                        @if($sch->day == 'Wednesday')
                            <table class="table text-white  mb-4">
                                <tbody>
                                    <tr>
                                        <td class="class-name text-center" style="width: 300px;"> {{$sch->class}} </td>
                                    <td class="time text-center" style="width: 300px;">{{$sch->start_time}} - {{$sch->end_time}}</td>
                                    <td class="trainername text-center" style="width: 300px;">{{$sch->name}}</td>
                                        <td class="text-end "><button class="text-black py-0 btn seedetails" type="submit"><a class="text-decoration-none text-dark" href="/singleclass/{{$sch->id}}">See Details</a></button></td>
                                    </tr>
                                </tbody>
                            </table>
                        @endif
                    @endforeach
                </div>

                <div class="tab-pane fade" id="pills-thursday" role="tabpanel" aria-labelledby="pills-thursday-tab">
                    @foreach($schedule as $sch)
                        @if($sch->day == 'Thursday')
                            <table class="table text-white  mb-4">
                                <tbody>
                                    <tr>
                                        <td class="class-name text-center" style="width: 300px;"> {{$sch->class}} </td>
                                    <td class="time text-center" style="width: 300px;">{{$sch->start_time}} - {{$sch->end_time}}</td>
                                    <td class="trainername text-center" style="width: 300px;">{{$sch->name}}</td>
                                        <td class="text-end "><button class="text-black py-0 btn seedetails" type="submit"><a class="text-decoration-none text-dark" href="/singleclass/{{$sch->id}}">See Details</a></button></td>
                                    </tr>
                                </tbody>
                            </table>
                        @endif
                    @endforeach

                </div>

                <div class="tab-pane fade" id="pills-friday" role="tabpanel" aria-labelledby="pills-friday-tab">
                    @foreach($schedule as $sch)
                        @if($sch->day == 'Friday')
                            <table class="table text-white  mb-4">
                                <tbody>
                                    <tr>
                                        <td class="class-name text-center" style="width: 300px;"> {{$sch->class}} </td>
                                    <td class="time text-center" style="width: 300px;">{{$sch->start_time}} - {{$sch->end_time}}</td>
                                    <td class="trainername text-center" style="width: 300px;">{{$sch->name}}</td>
                                        <td class="text-end "><button class="text-black py-0 btn seedetails" type="submit"><a class="text-decoration-none text-dark" href="/singleclass/{{$sch->id}}">See Details</a></button></td>
                                    </tr>
                                </tbody>
                            </table>
                        @endif
                    @endforeach
                </div>

                <div class="tab-pane fade" id="pills-saturday" role="tabpanel" aria-labelledby="pills-friday-tab">
                    @foreach($schedule as $sch)
                        @if($sch->day == 'Saturday')
                            <table class="table text-white  mb-4">
                                <tbody>
                                    <tr>
                                        <td class="class-name text-center" style="width: 300px;"> {{$sch->class}} </td>
                                    <td class="time text-center" style="width: 300px;">{{$sch->start_time}} - {{$sch->end_time}}</td>
                                    <td class="trainername text-center" style="width: 300px;">{{$sch->name}}</td>
                                        <td class="text-end "><button class="text-black py-0 btn seedetails" type="submit"><a class="text-decoration-none text-dark" href="/singleclass/{{$sch->id}}">See Details</a></button></td>
                                    </tr>
                                </tbody>
                            </table>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    </div>

    <div id="contact" class="section7">
        <div class="container-fluid">
            <!-- <h2 class="contactus text-black fw-bold">Contact Us</h2> -->
            <div class="row">
                <div class="col-md-6">
                    <div class="container p-5">
                        <h2 class="contactus text-black fw-bold ">Contact Us</h2>
                        <p class="fs-5 fw-light">We're open for any suggestion or just to have a chat</p>
                        <div class="d-flex justify-content-between py-3">
                            <div>
                                <h6>Address</h6>
                                <p class=" fw-light">Mamta Marg, Biratnagar-6</p>
                            </div>

                            <div>
                                <h6>E-mail</h6>
                                <p class=" fw-light">deeya.basnet.11@gmail.com</p>
                            </div>

                            <div>
                                <h6>Phone</h6>
                                <p class=" fw-light">+977 9876546677, 021-577884</p>
                            </div>
                        </div>

                        <form method="post" action="{{ route('contact.store') }}">
                            @csrf
                            @include('partials.flash-message')
                            <input class="form-control mb-3 border-dark" for="name" type="text" name="name" value="" placeholder="Name" aria-label="default input example">

                            <input class="form-control mb-3 border-dark" for="email"  type="text" name="email" value="" placeholder="E-mail" aria-label="default input example">

                            <input class="form-control mb-3 border-dark" for="phone"  type="number" name="phone" placeholder="Phone Number" aria-label="default input example">

                            <textarea id="message" class="form-control mb-3 border-dark" for="message" name="message" placeholder="Your Message Here" rows="3"></textarea>

                            <button class="btn sendmessage px-4 mb-2" type="submit">Send Message</button>
                        </form>


                    </div>
                </div>

                <div class="col-md-6 p-0">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3571.781513670599!2d87.26944461453817!3d26.462770785686057!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ef745d361fcd85%3A0x4630dea93a524ebc!2sMamata%20Marg%2C%20Biratnagar%2056613!5e0!3m2!1sen!2snp!4v1641974995418!5m2!1sen!2snp"
                        width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </div>
@endsection
