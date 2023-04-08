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
                        <a href="explore"><img src="{{ asset('assets/logo.png') }}"></a>
                    </div>
                    <ul class="menu2">
                        <li><a href="foryou">For You</a></li>
                        <li><a href="like">Like</a></li>
                        <li><a href="explore">Explore</a></li>
                        </li>
                    </ul>

                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <div class="dropdown">
                            <a class="nav-link dropdown-toggle text-light" type="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
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
        </div>


    </header>


    <div class="administrator">
        <div class="container-fluid admin mt-5 mb-5">

            <div class="row mt-5 mb-5">

                <div class="col-9 ms-3" style=" background-color: beige; border-radius: 10px">
                    <center>
                        <div class="mt-3">
                            <h1>Content Maintenance</h1>
                            <hr>
                        </div>
                        <div class="scrollY" style="height: 65vh;">
                            <div class="row row-cols-1 row-cols-md-4">

                            </div>
                        </div>
                    </center>

                </div>
                <div class="col">
                    <div class="card mx-auto" style="height: 80vh;">
                        <div class="row mt-4">
                            <center>
                                <h2>User Login</h2>
                                <hr class="mx-2">
                            </center>
                        </div>
                        <div class="scrollY">
                            @foreach ($user as $i)
                                <div class="row mb-3">
                                    <div class="col-lg-2 ms-2">
                                        @if ($i->foto != null)
                                            <img src="{{ asset('ava/' . $i->foto) }}" class="ava">
                                        @elseif($i->foto == null)
                                            <img style="border-radius: 100%; width: 50px; height: 50px; "
                                                src="https://t3.ftcdn.net/jpg/03/46/83/96/360_F_346839683_6nAPzbhpSkIpb8pmAwufkC7c5eD7wYws.jpg">
                                        @endif
                                    </div>
                                    <div class="col-lg ms-2 mt-3">
                                        <p class="user"><b>{{ $i->username }}</b>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                </div>
            </div>

            <center>
                <div class="mt-3">
                    <h1>Approve</h1>
                    <hr style="border-top: 3px solid black;">
                </div>
            </center>
            <div class="card mx-auto scrollY">
                <table class="table table-striped-columns ">
                    <thead>
                        <tr>
                            <th scope="col">Cafe Or Resto Name</th>
                            <th scope="col">Cafe Or Resto Location</th>
                            <th scope="col">Open Time - Closed Time</th>
                            <th scope="col">Price Range</th>
                            <th scope="col">Optional</th>
                            <th scope="col">Status</th>


                        </tr>
                    </thead>

                    <tbody>

                    </tbody>
                </table>
            </div>
            <hr style="border-top: 3px solid black;">


            <div class="row">
                <div class="col-6">
                    <div class="row-lg-12">
                        <div class="col">
                            <h1 class="mt-5" align="center">Advertise</h1>
                            <hr style="border-top: 3px solid black;">
                            <form action="/iklanAdmin" method="POST" enctype="multipart/form-data" class="form_iklan">
                                @csrf
                                <div class="card mx-4 " style="height: 105vh;">
                                    <div class="card-body scrollY">
                                        <div class="mb-3 mt-2">
                                            <label for="formGroupExampleInput" class="form-label">Cafe Or Resto
                                                Name</label>
                                            <input type="text" class="form-control" id="formGroupExampleInput"
                                                placeholder="Tempat Bersua Cafe..." name="nama_cafe">
                                        </div>

                                        <div class="mb-3">
                                            <label for="formGroupExampleInput" class="form-label">District</label>
                                            <select name="kawasan" class="form-select"
                                                aria-label="Default select example">
                                                <option selected hidden disabled>Choose District</option>
                                                <option value="Buahbatu">Buahbatu</option>
                                                <option value="Dipati Ukur">Dipati Ukur</option>
                                                <option value="Riau">Riau</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="formGroupExampleInput" class="form-label">Address</label>
                                            <textarea type="text" class="form-control" id="formGroupExampleInput"
                                                placeholder="Jalan Tempat Bersua, Bandung..." name="lokasi_cafe"></textarea>
                                        </div>
                                        <div class="row">

                                            <div class="col-md-6">
                                                <label for="inputEmail4" class="form-label">Open Time</label>
                                                <input type="time" class="form-control" name="waktubuka"
                                                    id="inputEmail4">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="inputPassword4" class="form-label">Closed Time</label>
                                                <input type="time" class="form-control" name="waktututup"
                                                    id="inputPassword4">
                                            </div>
                                        </div>

                                        <label for="inputPassword4" class="form-label mt-3">Price Range</label>
                                        <div class="row">

                                            <div class="col-md-6">
                                                <label for="inputEmail4" class="form-label">Start From</label>
                                                <div class="input-group mb-2">
                                                    <span class="input-group-text">Rp.</span>
                                                    <input type="text" class="form-control" name="harga1"
                                                        aria-label="Amount (to the nearest dollar)">
                                                    <span class="input-group-text">.00</span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="inputPassword4" class="form-label">Up To</label>
                                                <div class="input-group mb-2">
                                                    <span class="input-group-text">Rp.</span>
                                                    <input type="text" class="form-control" name="harga2"
                                                        aria-label="Amount (to the nearest dollar)">
                                                    <span class="input-group-text">.00</span>
                                                </div>
                                            </div>
                                        </div>
                                        <label for="inputPassword4" class="form-label mt-3 mb-0">Add Photo's</label>

                                        <div class="input-group mt-3 mb-3">
                                            <input class="form-control" id="foto_thumb" name="foto_thumb"
                                                type="file" accept=".jpg, .png, .jpeg">
                                            <label class="input-group-text" for="inputGroupFile02"
                                                style="width: 10vw;">Thumbnail</label>
                                        </div>
                                        <div class="prev-thum"></div>


                                        <div class="input-group mt-3 mb-3">
                                            <input class="form-control" id="foto_slide" name="foto_slide[]"
                                                type="file" multiple accept=".jpg, .png, .jpeg">
                                            <label class="input-group-text" for="inputGroupFile02"
                                                style="width: 10vw;">
                                                Content</label>
                                        </div>
                                        <div class="prev-slid"></div>

                                        <div class="input-group mt-3 mb-3">
                                            <input class="form-control" id="foto_menu" name="foto_menu[]"
                                                type="file" multiple accept=".jpg, .png, .jpeg">
                                            <label class="input-group-text" for="inputGroupFile02"
                                                style="width: 10vw;">
                                                Menu's</label>
                                        </div>
                                        <div class="prev-menus"></div>

                                    </div>

                                    <div class="d-grid gap-2 mx-4 mt-3 mb-3">
                                        <button class="btn btn-primary btn-success" type="submit">Advertise
                                            Now</button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active" style="margin-left: 6vw">
                                <blockquote class="instagram-media"
                                    data-instgrm-permalink="https://www.instagram.com/p/Cj4_TiBJIWp/?utm_source=ig_embed&amp;utm_campaign=loading"
                                    data-instgrm-version="14"
                                    style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);">
                                    <div style="padding:16px;"> <a
                                            href="https://www.instagram.com/p/Cj4_TiBJIWp/?utm_source=ig_embed&amp;utm_campaign=loading"
                                            style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;"
                                            target="_blank">
                                            <div style=" display: flex; flex-direction: row; align-items: center;">
                                                <div
                                                    style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;">
                                                </div>
                                                <div
                                                    style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;">
                                                    <div
                                                        style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;">
                                                    </div>
                                                    <div
                                                        style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;">
                                                    </div>
                                                </div>
                                            </div>
                                            <div style="padding: 19% 0;"></div>
                                            <div style="display:block; height:50px; margin:0 auto 12px; width:50px;">
                                                <svg width="50px" height="50px" viewBox="0 0 60 60"
                                                    version="1.1" xmlns="https://www.w3.org/2000/svg"
                                                    xmlns:xlink="https://www.w3.org/1999/xlink">
                                                    <g stroke="none" stroke-width="1" fill="none"
                                                        fill-rule="evenodd">
                                                        <g transform="translate(-511.000000, -20.000000)"
                                                            fill="#000000">
                                                            <g>
                                                                <path
                                                                    d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631">
                                                                </path>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </svg>
                                            </div>
                                            <div style="padding-top: 8px;">
                                                <div
                                                    style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;">
                                                    View this post on Instagram</div>
                                            </div>
                                            <div style="padding: 12.5% 0;"></div>
                                            <div
                                                style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;">
                                                <div>
                                                    <div
                                                        style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);">
                                                    </div>
                                                    <div
                                                        style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;">
                                                    </div>
                                                    <div
                                                        style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);">
                                                    </div>
                                                </div>
                                                <div style="margin-left: 8px;">
                                                    <div
                                                        style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;">
                                                    </div>
                                                    <div
                                                        style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)">
                                                    </div>
                                                </div>
                                                <div style="margin-left: auto;">
                                                    <div
                                                        style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);">
                                                    </div>
                                                    <div
                                                        style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);">
                                                    </div>
                                                    <div
                                                        style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);">
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;">
                                                <div
                                                    style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;">
                                                </div>
                                                <div
                                                    style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;">
                                                </div>
                                            </div>
                                        </a>
                                        <p
                                            style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;">
                                            <a href="https://www.instagram.com/p/Cj4_TiBJIWp/?utm_source=ig_embed&amp;utm_campaign=loading"
                                                style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;"
                                                target="_blank">A post shared by Bandung Kuliner | bdgfoodies
                                                (@bandungfoodie)</a>
                                        </p>
                                    </div>
                                </blockquote>
                                <script async src="//www.instagram.com/embed.js"></script>
                            </div>
                            <div class="carousel-item" style="margin-left: 6vw">
                                <blockquote class="instagram-media"
                                    data-instgrm-permalink="https://www.instagram.com/p/CmtBCYkBX1R/?utm_source=ig_embed&amp;utm_campaign=loading"
                                    data-instgrm-version="14"
                                    style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);">
                                    <div style="padding:16px;"> <a
                                            href="https://www.instagram.com/p/CmtBCYkBX1R/?utm_source=ig_embed&amp;utm_campaign=loading"
                                            style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;"
                                            target="_blank">
                                            <div style=" display: flex; flex-direction: row; align-items: center;">
                                                <div
                                                    style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;">
                                                </div>
                                                <div
                                                    style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;">
                                                    <div
                                                        style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;">
                                                    </div>
                                                    <div
                                                        style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;">
                                                    </div>
                                                </div>
                                            </div>
                                            <div style="padding: 19% 0;"></div>
                                            <div style="display:block; height:50px; margin:0 auto 12px; width:50px;">
                                                <svg width="50px" height="50px" viewBox="0 0 60 60"
                                                    version="1.1" xmlns="https://www.w3.org/2000/svg"
                                                    xmlns:xlink="https://www.w3.org/1999/xlink">
                                                    <g stroke="none" stroke-width="1" fill="none"
                                                        fill-rule="evenodd">
                                                        <g transform="translate(-511.000000, -20.000000)"
                                                            fill="#000000">
                                                            <g>
                                                                <path
                                                                    d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631">
                                                                </path>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </svg>
                                            </div>
                                            <div style="padding-top: 8px;">
                                                <div
                                                    style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;">
                                                    View this post on Instagram</div>
                                            </div>
                                            <div style="padding: 12.5% 0;"></div>
                                            <div
                                                style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;">
                                                <div>
                                                    <div
                                                        style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);">
                                                    </div>
                                                    <div
                                                        style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;">
                                                    </div>
                                                    <div
                                                        style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);">
                                                    </div>
                                                </div>
                                                <div style="margin-left: 8px;">
                                                    <div
                                                        style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;">
                                                    </div>
                                                    <div
                                                        style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)">
                                                    </div>
                                                </div>
                                                <div style="margin-left: auto;">
                                                    <div
                                                        style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);">
                                                    </div>
                                                    <div
                                                        style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);">
                                                    </div>
                                                    <div
                                                        style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);">
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;">
                                                <div
                                                    style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;">
                                                </div>
                                                <div
                                                    style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;">
                                                </div>
                                            </div>
                                        </a>
                                        <p
                                            style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;">
                                            <a href="https://www.instagram.com/p/CmtBCYkBX1R/?utm_source=ig_embed&amp;utm_campaign=loading"
                                                style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;"
                                                target="_blank">A post shared by Kuliner Bandung Bandung Society
                                                (@bdgsociety)</a>
                                        </p>
                                    </div>
                                </blockquote>
                                <script async src="//www.instagram.com/embed.js"></script>
                            </div>
                            <div class="carousel-item" style="margin-left: 6vw">
                                <blockquote class="instagram-media"
                                    data-instgrm-permalink="https://www.instagram.com/p/Ck8F6m4yrHb/?utm_source=ig_embed&amp;utm_campaign=loading"
                                    data-instgrm-version="14"
                                    style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);">
                                    <div style="padding:16px;"> <a
                                            href="https://www.instagram.com/p/Ck8F6m4yrHb/?utm_source=ig_embed&amp;utm_campaign=loading"
                                            style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;"
                                            target="_blank">
                                            <div style=" display: flex; flex-direction: row; align-items: center;">
                                                <div
                                                    style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;">
                                                </div>
                                                <div
                                                    style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;">
                                                    <div
                                                        style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;">
                                                    </div>
                                                    <div
                                                        style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;">
                                                    </div>
                                                </div>
                                            </div>
                                            <div style="padding: 19% 0;"></div>
                                            <div style="display:block; height:50px; margin:0 auto 12px; width:50px;">
                                                <svg width="50px" height="50px" viewBox="0 0 60 60"
                                                    version="1.1" xmlns="https://www.w3.org/2000/svg"
                                                    xmlns:xlink="https://www.w3.org/1999/xlink">
                                                    <g stroke="none" stroke-width="1" fill="none"
                                                        fill-rule="evenodd">
                                                        <g transform="translate(-511.000000, -20.000000)"
                                                            fill="#000000">
                                                            <g>
                                                                <path
                                                                    d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631">
                                                                </path>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </svg>
                                            </div>
                                            <div style="padding-top: 8px;">
                                                <div
                                                    style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;">
                                                    View this post on Instagram</div>
                                            </div>
                                            <div style="padding: 12.5% 0;"></div>
                                            <div
                                                style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;">
                                                <div>
                                                    <div
                                                        style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);">
                                                    </div>
                                                    <div
                                                        style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;">
                                                    </div>
                                                    <div
                                                        style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);">
                                                    </div>
                                                </div>
                                                <div style="margin-left: 8px;">
                                                    <div
                                                        style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;">
                                                    </div>
                                                    <div
                                                        style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)">
                                                    </div>
                                                </div>
                                                <div style="margin-left: auto;">
                                                    <div
                                                        style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);">
                                                    </div>
                                                    <div
                                                        style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);">
                                                    </div>
                                                    <div
                                                        style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);">
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;">
                                                <div
                                                    style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;">
                                                </div>
                                                <div
                                                    style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;">
                                                </div>
                                            </div>
                                        </a>
                                        <p
                                            style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;">
                                            <a href="https://www.instagram.com/p/Ck8F6m4yrHb/?utm_source=ig_embed&amp;utm_campaign=loading"
                                                style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;"
                                                target="_blank">A post shared by Kuliner Bandung (@kulinerbandung)</a>
                                        </p>
                                    </div>
                                </blockquote>
                                <script async src="//www.instagram.com/embed.js"></script>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button"
                            data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button"
                            data-bs-target="#carouselExampleControls" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>


        </div>
    </div>



    <script>
        $("#foto_thumb").change(function(e) {
            $('.flag_thumb').remove();

            let count = 1;
            let files_thumb = e.currentTarget.files;
            let imgcode = [];
            let final;

            if (e.currentTarget.files.length > 1) {
                alert("File Terlalu Banyak! Maksimal Upload 1");
                this.value = "";
                return false;
            } else {
                for (let x in files_thumb) {

                    if (files_thumb[x].size > 5048576) {
                        alert("File Terlalu Besar!");
                        this.value = "";
                        return false;
                    } else {
                        var dir = URL.createObjectURL(files_thumb[x]);
                        $('.prev-thumb').prepend('<img class="flag_thumb mx-1" src="' + dir +
                            '" width="50" height="50" style="border-radius:10px">');
                    }

                }
            }
        });

        $("#foto_slide").change(function(e) {
            $('.flag_slide').remove();

            let count = 1;
            let files_slide = e.currentTarget.files;
            let imgcode = [];
            let final;

            if (e.currentTarget.files.length > 10) {
                alert("File Terlalu Banyak! Maksimal Upload 10");
                this.value = "";
                return false;
            } else {
                for (let x in files_slide) {

                    if (files_slide[x].size > 5048576) {
                        alert("File Terlalu Besar!");
                        this.value = "";
                        return false;
                    } else {
                        var dir = URL.createObjectURL(files_slide[x]);
                        $('.prev-slide').prepend('<img class="flag_slide mx-1" src="' + dir +
                            '" width="50" height="50" style="border-radius:10px">');
                    }

                }
            }
        });

        $("#foto_menu").change(function(e) {
            $('.flag_menu').remove();

            let count = 1;
            let files_menu = e.currentTarget.files;
            let imgcode = [];
            let final;

            if (e.currentTarget.files.length > 10) {
                alert("File Terlalu Banyak! Maksimal Upload 10");
                this.value = "";
                return false;
            } else {
                for (let x in files_menu) {

                    if (files_menu[x].size > 5048576) {
                        alert("File Terlalu Besar!");
                        this.value = "";
                        return false;
                    } else {
                        var dir = URL.createObjectURL(files_menu[x]);
                        $('.prev-menu').prepend('<img class="flag_menu mx-1" src="' + dir +
                            '" width="50" height="50" style="border-radius:10px">');
                    }

                }
            }
        });
    </script>

</body>

</html>
