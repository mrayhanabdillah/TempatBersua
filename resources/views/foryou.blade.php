@extends('template/navbar')
@section('content')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <script async src="https://instagram.com/static/bundles/es6/EmbedSDK.js/47c7ec92d91e.js"></script>

    <div class="bg5">
        <div class="container-fluid mx-5 mt-5">
            <div class="pilihan">
                <div class="dropdown">
                    Choice Of Tempat Bersua For <b>{{ Auth::user()->username }}</b>, At
                    <a class="text-decoration-none text-dark fw-bold dropdown-toggle" href="#" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false" id="kawasan">
                        {{ $district }}
                    </a>

                    <ul class="dropdown-menu" aria-labelledby="kawasan">
                        <li><a class="dropdown-item" href="/foryou">All Places in Bandung</a></li>
                        @foreach ($data as $i)
                            <li><a class="dropdown-item" href="/foryou/{{ $i['name'] }}">{{ $i['name'] }}</a></li>
                        @endforeach
                    </ul>
                </div>


            </div>
            <div class="row">
                <div class="col-lg pe-4" style="border-right: 5px solid rgb(197, 141, 73)">
                    <div class="tabel">
                        <div class="row row-cols-1 row-cols-md-3">
                            @foreach ($resto as $data)
                                <div class="col px-5">
                                    <a href="/detail/{{ $data->id }}" style="text-decoration: none;">
                                        <div class="card mb-3"
                                            style="border-radius:10px; box-shadow: -5px 5px 10px grey; color:#080717">
                                            <img src="{{ asset('gambar_resto/' . $data->thumbnail) }}" class="card-img-top"
                                                height="150" style="object-fit: cover" alt="...">
                                            <div class="card-body" style="height: 15vh">
                                                <center>
                                                    <p class="card-title" style="font-size: 1.1vmax;">{{ $data->namaresto }}
                                                    </p>
                                                    <p class="card-text" style="font-size: 0.9vmax;">{{ $data->address }}
                                                    </p>
                                                </center>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                        <a href="explore" class="ms-3"
                            style="font-size: 1.1vmax; color: #080717; text-decoration: none"><b>>> View More</b></a>
                    </div>
                </div>
                <div class="col-lg-2 ps-0">
                    <div class="news ps-4">
                        {{-- <div class="vertikal"></div> --}}
                        {{-- <div class="rekomen">
                </div> --}}
                        <center>
                            <p class="rekomen" align="center">Recommendation From Tempat Bersua</p>
                        </center>
                        <div class="artikel">
                            @foreach ($rekomen as $rekom)
                                <div class="">
                                    <a href="/detail/{{ $rekom->id }}"><img
                                            src="{{ asset('gambar_resto/' . $rekom->thumbnail) }}"
                                            class="rounded d-block mb-3" alt="..."></a>
                                </div>
                            @endforeach
                        </div>
                    </div>

                </div>
            </div>
            <br><br>
            <div class="row-lg-12">
                <h1 class="addiklan_h1 mt-5 mb-4">Advertise On Tempat Bersua !!!</h1>
                <div class="col-lg-12 pe-4 pt-3">
                    <div class="mb-5 mx-4" style="width: 100%;">
                        <div class="row row-cols-1 row-cols-md-4">

                            <div class="col">
                                <a href="/formIklan" style="text-decoration: none;">
                                    <div class="addiklan cards ads"
                                        style="background-image:linear-gradient(rgba(84, 83, 83, 0.425), rgba(69, 66, 66, 0.814)), url({{ asset('assets/addiklan.png') }});">
                                        {{-- <center>
                                        <h5 class="addiklan card-title pt-2" align="center" style="color: rgba(255, 255, 255, 0.488)">Sekala Coffe</h5>
                                    </center> --}}
                                    </div>
                                </a>
                            </div>

                            <div class="col">
                                <div class="addiklan cards"
                                    style="background-image: linear-gradient(rgba(63, 60, 60, 0.829), rgba(0, 0, 0, 0)), url({{ asset('assets/tokjaw.jpg') }});">
                                    <center>
                                        <h5 class="addiklan card-title pt-2" align="center">Kopi Toko Jawa</h5>
                                    </center>
                                </div>
                            </div>

                            <div class="col">
                                <div class="addiklan cards"
                                    style="background-image: linear-gradient(rgba(63, 60, 60, 0.829), rgba(0, 0, 0, 0)), url({{ asset('assets/koffiebraga.jpg') }});">
                                    <center>
                                        <h5 class="addiklan card-title pt-2" align="center">Koffie Braga</h5>
                                    </center>
                                </div>
                            </div>

                            <div class="col">
                                <div class="addiklan cards"
                                    style="background-image: linear-gradient(rgba(63, 60, 60, 0.829), rgba(0, 0, 0, 0)), url({{ asset('assets/yellowtruck.jpg') }});">
                                    <center>
                                        <h5 class="addiklan card-title pt-2" align="center">Yellow Truck</h5>
                                    </center>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
@endsection
