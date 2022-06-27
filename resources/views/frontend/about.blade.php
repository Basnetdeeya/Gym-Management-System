@extends('frontend.app')

<div class="@section("class","aboutpage")">
    @section("title2"," A B O U T  U S")
</div>

@section('content')
<div class="ourstory">
    <div aria-label="breadcrumb" class="">
        <div class="d-flex align-items-center justify-content-center">
            <ol class="breadcrumb text-center py-2 px-5 border">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item"><a href="/#about">About Us</a></li>
                <li class="breadcrumb-item active" aria-current="page">About Us</li>
            </ol>
        </div>
    </div>
    <div class="container">
        <div class="col-md-8">
            @foreach ($about as $aboutus)
            <h1 class="topicaboutus fw-bold pb-3">OUR STORY</h1>
            <h4 class="pb-2">{{ $aboutus->title }}</h4>
            <p class="lh-lg">{!! Str::limit($aboutus->description, 50000) !!}</p>
            @endforeach

        </div>
    </div>
</div>

<div class="whychooseus">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 text-center">
                <h1>WHY CHOOSE US?</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus eos eligendi sunt impedit alias eum, beatae placeat voluptate libero perspiciatis.</p>
            </div>

            <div class="col-md-6">
                <div class="accordion accordion-flush">
                     <div class="accordion-item mb-2">
                        <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed  fw-bolder" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            Experience
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Harum corrupti reprehenderit, hic voluptatibus quibusdam cum, dolorum dicta voluptas obcaecati, tempore vitae blanditiis aperiam saepe nobis doloribus laborum? Nihil odio distinctio beatae repudiandae alias cumque officiis inventore numquam aspernatur tenetur, sit ipsum praesentium. Eaque, accusantium! Labore nostrum quod velit incidunt nulla?</div>
                        </div>
                     </div>


                    <div class="accordion-item mb-2">
                        <h2 class="accordion-header" id="flush-headingTwo">
                            <button class="accordion-button collapsed  fw-bolder" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                24/7 Access
                        </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, praesentium blanditiis commodi dignissimos aliquid molestiae earum expedita enim dolorum nobis quo doloribus sapiente sequi facere, atque quidem! Autem tempore hic vitae accusamus temporibus odit optio quibusdam nihil molestiae dolores ad quo doloribus, nesciunt praesentium, voluptate sequi architecto rerum adipisci nobis!</div>
                        </div>
                    </div>
                    <div class="accordion-item mb-2">
                        <h2 class="accordion-header" id="flush-headingThree">
                            <button class="accordion-button collapsed  fw-bolder" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                          Personal Training
                        </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just
                                filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                        </div>
                    </div>
                    <div class="accordion-item mb-2">
                        <h2 class="accordion-header" id="flush-headingFour">
                            <button class="accordion-button collapsed  fw-bolder" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                          Equipment
                        </button>
                        </h2>
                        <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
                        </div>
                    </div>
                    <div class="accordion-item mb-2">
                        <h2 class="accordion-header" id="flush-headingFive">
                            <button class="accordion-button collapsed  fw-bolder" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                          Fun
                        </button>
                        </h2>
                        <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="mission">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <i class="fas fa-fist-raised"></i>
                <h2 class="fw-bold py-3 m-0">Pure Strength</h2>
                <p class="lh-lg">It is imperative that everyone maximises the time they spend exercising to help guarantee results from the commit ment put into achieving each goal.</p>
            </div>

            <div class="col-md-4">
                <i class="fas fa-trophy"></i>
                <h2 class="fw-bold py-3 m-0">The Challenge</h2>
                <p class="lh-lg">To provide a personalised health and fitness service that unlocks every individual's true potential so they can achieve their desired goals.</p>
            </div>

            <div class="col-md-4">
                <i class="fas fa-bullseye"></i>
                <h2 class="fw-bold py-3 m-0">Our Mission</h2>
                <p class="lh-lg">To become the most recognised independent fitness service provider amongst the large populations of both Bournemouth and Poole in Dorset.</p>
            </div>
        </div>
    </div>
</div>

@endsection

