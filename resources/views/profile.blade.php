<!DOCTYPE html>
<html lang="en" id="home">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.3.min.js"
        integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>

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
        <div class="navbar2">
            <div class="container2">
                <div class="box-navbar2">
                    <div class="logo2">
                        <a href="explore"><img src="{{ asset('img/logo.png') }}"></a>
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


    </header>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <script async src="https://instagram.com/static/bundles/es6/EmbedSDK.js/47c7ec92d91e.js"></script>

    <div class="profile">

        <div class="container-fluid" style="background-color: #f5d4d4; margin-top: 10vh;">
            <br>
            <br>
            <p class="text-center fw-bold mt-3" style="font-size: 32px;">Profile</p>
            <form action="/update/{{ Auth::user()->id }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="row mx-3">
                    <div class="col">
                        {{-- <div class="profile-pic">
                        <label class="-label" for="file">
                          <span class="glyphicon glyphicon-camera"></span>
                          <span>Change Image</span>
                        </label>
                        <input id="file" type="file" onchange="loadFile(event)"/>
                        <img src="img/kopi1.png" id="output" width="200" />
                      </div> --}}
                        <div class="row">
                            <div class="small-12 medium-2 large-2 columns">
                                <div class="ms-5">
                                    @if (Auth::user()->foto != null)
                                        <img class="profile-pic circle" src="ava/{{ Auth::user()->foto }}">
                                    @else
                                        <img class="profile-pic circle"
                                            src="https://t3.ftcdn.net/jpg/03/46/83/96/360_F_346839683_6nAPzbhpSkIpb8pmAwufkC7c5eD7wYws.jpg">
                                    @endif
                                </div>
                                <div class="p-image">
                                    <i class="fa fa-camera upload-button"></i>

                                    <input class="file-upload" type="file" name="foto" accept="image/*" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-9">
                        <div class="mb-3 row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="staticEmail" name="namaregis"
                                    value="{{ Auth::user()->email }}">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Username</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="staticEmail" name="username"
                                    value="{{ Auth::user()->username }}">
                            </div>
                        </div>
                        <hr>
                        <div class="mb-3 row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="staticEmail" name="pw">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Confirm Password</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="staticEmail" name="pwbaru">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </div>

            </form>
        </div>

    </div>
    <script>
        // var loadFile = function (event) {
        //   var image = document.getElementById("output");
        //   image.src = URL.createObjectURL(event.target.files[0]);
        // };
        $(document).ready(function() {


            var readURL = function(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function(e) {
                        $('.profile-pic').attr('src', e.target.result);
                    }

                    reader.readAsDataURL(input.files[0]);
                }
            }


            $(".file-upload").on('change', function() {
                readURL(this);
            });

            $(".upload-button").on('click', function() {
                $(".file-upload").click();
            });
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
