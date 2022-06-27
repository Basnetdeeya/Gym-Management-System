
    <div class="container">
        <div class="top-nav border-bottom ">
            <div class="d-flex justify-content-between ">
                <div>
                    <a class="text-white text-decoration-none pe-3" href="tel:+97798763982639">Free Call +977 98763982639</a>
                    {{-- @guest()
                        @if (Route::has('login'))
                            <a class="text-white btn-primary text-decoration-none " href="admin/login">Admin Login</a>
                        @endif
                    @endguest --}}


                </div>
                <div class="fs-5">

                    <a href="https://www.facebook.com/" target="_blank" class="text-white me-3"><i
                            class="fab fa-facebook-f f-icon"></i></a>
                    <a href="https://twitter.com/i/flow/signup" target="_blank" class="text-white me-3"><i
                            class="fab fa-twitter t-icon"></i></a>
                    <a href="https://instagram.com/" target="_blank" class="text-white "><i
                            class="fab fa-instagram l-icon"></i></a>
                </div>
            </div>
        </div>

        <nav id="" class="navbar-fixed-top navbar navbar-expand-lg main-nav navbar-light">
            <div class="container px-0 ">
                <a class="navbar-brand" href="#"><img src="./images/logo.png" class="img-fluid logo pt-0" alt=""></a>
                <button class="navbar-toggler  " type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon "></span>
              </button>
                <div class="collapse  navbar-collapse " id="navbarNav">
                    <ul class="navbar-nav ms-auto text-center me-3">
                        <li class="nav-item ">
                            <a class="nav-link " aria-current="page " href="/">Home</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link " aria-current="page " href="/#about">About Us</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link " aria-current="page " href="/#service">Service</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link " aria-current="page " href="/#classes">Classes</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link " aria-current="page " href="/#schedule">Schedule</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " aria-current="page " href="/#contact">Contact</a>
                        </li>
                    </ul>
                    <div class="text-center d-flex">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                            <button class="btn btn-dark fw-bold fs-4 px-3 " type="submit"><a class="text-decoration-none text-white" href="{{ route('login') }}">LOG IN</a></button>

                            @endif
                              <div class="ms-3">
                                <button class="btn btn-dark fw-bold fs-4 " type="submit"><a class="text-decoration-none text-white" href="/joinus">JOIN US</a></button>
                              </div>

                        @else
                            <li class="nav-item dropdown list-style-type-none">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle btn btn-dark fw-bold fs-3 px-3 me-3" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    @auth
                                        <a class="dropdown-item" href="/profile">
                                            My Profile
                                        </a>
                                    @endauth

                                    @can('is-admin')
                                        <a class="dropdown-item" href="{{ route('admin.admindashboard.index') }}">
                                            Go to Admin Dashboard
                                        </a>
                                    @endcan

                                    @can('is-trainer')
                                        <a class="dropdown-item" href="{{ route('trainer.dashboard.index') }}">
                                            Go to Trainer Dashboard
                                        </a>
                                    @endcan

                                    <a class="dropdown-item" href="{{ route('frontend.home') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                      @endguest
                    </div>
                </div>
            </div>
        </nav>
        <h1 class=" carousel-text text-center text-white pt-4">@yield("title")</h1>
        <h1 class=" carousel-text text-center text-white pt-5">@yield("title2")</h1>
    </div>
</div>

