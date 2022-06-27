<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>GYM MANAGEMENT SYSTEM</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    {{-- <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"> --}}

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Css -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">


    <!-- Font awSome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;400;500;700&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" integrity="sha256-2XFplPlrFClt0bIdPgpz8H7ojnk10H69xRqd9+uTShA=" crossorigin="anonymous" />

    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">

    <title>Gym Management System</title>

    {{-- Khlati --}}
    <script src="https://khalti.s3.ap-south-1.amazonaws.com/KPG/dist/2020.12.17.0.0.0/khalti-checkout.iffe.js"></script>
</head>

<!-- ----------------------------Nav Bar-------------------------------------- -->
<div class="@yield("class")">
@include('component.menu')
</div>

@yield('content')


<!-- ------------------footer---------------------------------------------- -->
<footer class="section8">
        <div class="container">
            <div class="row  text-white border-bottom">
                <div class="col-md-5">
                    <img class="pb-3" src="images/logo.png" alt="logo">
                    <p class="pb-5">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laudantium et expedita quis possimus maxime, minus perferendis? Consequuntur voluptas maiores eligendi.</p>
                </div>

                <div class="col-md-2 py-4">
                    <h5 class="pb-3">Useful Links</h5>
                    <ul class="list-unstyled">
                        <li>About Us</li>
                        <li>Service</li>
                        <li>Classes</li>
                        <li>Contact</li>
                    </ul>
                </div>

                <div class="col-md-2 py-4">
                    <h5 class="pb-3">Support</h5>
                    <ul class="list-unstyled">
                        <li>Login</li>
                        <li>My Account</li>
                        <li>Subscribe</li>
                        <li>Contact</li>
                    </ul>
                </div>

                <div class="col-md-3 d-flex justify-content-end align-items-center">
                    <div class=" fs-1 ">
                        <a href="https://www.facebook.com/" target="_blank" class="text-white me-3"><i
                            class="fab fa-facebook-f f-icon"></i></a>
                        <a href="https://twitter.com/i/flow/signup" target="_blank" class="text-white me-3"><i
                            class="fab fa-twitter t-icon"></i></a>
                        <a href="https://instagram.com/" target="_blank" class="text-white "><i
                            class="fab fa-instagram l-icon"></i></a>
                    </div>
                </div>
            </div>

            <div class="text-center text-white ">
                <p class="mb-0 py-3">Copyright ©2021 GymMaster. All Rights Reserved.</p>
            </div>
        </div>

    </footer>




    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->

    {{-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js " integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p " crossorigin="anonymous "></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js " integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF " crossorigin="anonymous "></script> --}}

    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> --}}

    <script>
        var coll = document.getElementsByClassName("collapsible");
        var i;

        for (i = 0; i < coll.length; i++) {
          coll[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var content = this.nextElementSibling;
            if (content.style.display === "block") {
              content.style.display = "none";
            } else {
              content.style.display = "block";
            }
          });
        }
        </script>


    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
    <script>
        $( function() {
            $( ".date" ).datepicker();
        } );
    </script>

</body>
</html>
