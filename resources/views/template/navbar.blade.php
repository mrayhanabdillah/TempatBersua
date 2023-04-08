<!DOCTYPE html>
<html lang="en" id="home">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />

    <!-- Font montserrat -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <title>Tempat Bersua</title>
</head>

<body>
    <header>
        <!-- navbar -->
        <div class="navbar">
            <div class="container1">
                <div class="box-navbar">
                    <div class="logo">
                        <a href="#daftar"><img src="{{ asset('assets/logo.png') }}"></a>
                    </div>
                    <ul class="menu">
                        {{-- <li><a href="foryou">For You</a></li> --}}
                        {{-- <li><a href="#place">Place</a></li> --}}
                        {{-- <li><a href="explore">Explore</a></li> --}}
                        <li><a href="/login">Sign In</a></li>
                        <li class="active">
                            <a href="/regis">Register</a>
                        </li>
                    </ul>
                    <i class="fa-solid fa-bars menu-bar"></i>
                </div>
            </div>
        </div>

        @yield('content')

        <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

        <script src="{{ asset('java/script.js') }}"></script>
</body>

</html>
