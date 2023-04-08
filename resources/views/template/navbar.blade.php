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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

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
    @guest
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
                            <a href="/register">Register</a>
                        </li>
                    </ul>
                    <i class="fa-solid fa-bars menu-bar"></i>
                </div>
            </div>
        </div>
    @else
        <div class="navbar2">
            <div class="container2">
                <div class="box-navbar2">
                    <div class="logo2">
                        <a href="explore"><img src="{{ asset('assets/logo.png') }}"></a>
                    </div>
                    <ul class="menu2">
                        <li><a class="nav-link" href="/foryou">For You</a></li>
                        <li><a class="nav-link" href="/like">Like</a></li>
                        <li><a class="nav-link" href="/explore">Explore</a></li>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        {{-- <input class="me-4 searchnav" type="search" placeholder="Search" aria-label="Search"> --}}
                        <button class="searchnav" type="submit">Search</button>
                    </form>
                    <div class="dropdown">
                        <a class="nav-link dropdown-toggle text-light" type="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            @if (Auth::user()->foto != null)
                                <img src="{{ asset('ava/' . Auth::user()->foto) }}" class="ava">
                            @else
                                <img class="ava"
                                    src="https://t3.ftcdn.net/jpg/03/46/83/96/360_F_346839683_6nAPzbhpSkIpb8pmAwufkC7c5eD7wYws.jpg">
                            @endif
                            {{ Auth::user()->username }}
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="profile">Profile</a></li>
                            <li><a class="dropdown-item" href="#"
                                    onclick="event.preventDefault();document.getElementById('logout-btn').submit();">Logout</a>
                            </li>
                            <form id="logout-btn" action="/logout/{{ Auth::user()->id }}" method="POST">
                                {{ csrf_field() }}
                                @method('put')
                            </form>
                        </ul>
                    </div>


                </div>
            </div>
        </div>
    @endguest
    <header>

        @yield('content')

        <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

        <script src="{{ asset('java/script.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>
</body>

</html>
