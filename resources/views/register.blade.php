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
    <div class="bg4" id="daftar">
        <div class="card">
            <center>
                <div class="cardheader">
                    <img src="{{ asset('assets/logo.png') }}">
                    <br>
                    <h1>Welcome To Tempat Bersua</h1>
                    <p style="font-weight: 400">Find Food And Places</p>
                </div>
            </center>
            <hr>
            <form action="/register" method="POST">
                @csrf
                <label for="username" class="label">Username</label>
                <input type="text" class="kotakform" id="" name="username">

                <label for="email" class="label">Email</label>
                <input type="email" class="kotakform" id="" name="email">

                <label for="password" class="label">Password</label>
                <input type="password" class="kotakform" id="" name="password">

                <label for="name" class="label">Confirm Password</label>
                <input type="password" class="kotakform" id="" name="pass_con">


                <button type="submit" class="btn btn-primary mt-3"
                    style="margin-left: 6.5vw; border-radius:50px; width: 15vw; height: 5vh;">Continue</buttom>
                    <p align="center" class=" mb-4 mt-1" style=" font-size: 18px;">Or</p>
                    <a href="/login" class="btn btn-danger"
                        style="margin-top: -5vh;margin-left: -1vw; border-radius:50px; width: 15vw; height: 5vh;">Login</a>

                    <p align="center"
                        style="font-size: 11px; font-weight: 400; width: 300px; margin-left: -3vw; margin-top: 0vh; color:black;">
                        by
                        continuing, you agree to Tempat Bersua <b>Terms of service</b> and acknowledge you've read
                        our<b>privacy policy. notice at collection.</b></p>
            </form>
        </div>
    </div>
</body>
