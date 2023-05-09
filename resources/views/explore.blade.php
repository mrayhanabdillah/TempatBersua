@extends('template/navbar')
@section('content')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script async src="https://instagram.com/static/bundles/es6/EmbedSDK.js/47c7ec92d91e.js"></script>

    <div class="bg6">
        <div class="container-fluid m-5">
            <div class="row-lg-12">
                <h1 class="expiklan_h1">Restaurant Choice From Tempat Bersua</h1>
                <div class="col-lg-12 pt-3">
                    <div class="mb-5" style="width: 100%;">
                        <div class="row row-cols-1 row-cols-md-4">
                            {{-- <div class="row row-cols-1 row-cols scrollBar"> --}}
                            @foreach ($iklanBerbayar as $data)
                                <div class="col">
                                    <a href="/detail/{{ $data->id }}" class="text-decoration-none">
                                        <div class="expiklan expcards"
                                            style="background-image: url('gambar_resto/{{ $data->thumbnail }}')">
                                            <center>
                                                <h5 class="expiklan card-title pt-2 ">{{ $data->namaresto }}</h5>
                                            </center>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid">
        <div class="col-lg p-5">
            <div class="row">
                <div class="col">
                    <br>
                    <hr class="hr1">
                </div>
                <div class="col-5" align="center">
                    <h1>Recommendation From Tempat Bersua</h1><br>
                </div>
                <div class="col">
                    <br>
                    <hr class="hr1">
                </div>
            </div>

            <div class="row row-cols-1 row-cols-md-5">
                @foreach ($iklan as $data)
                    <div class="col px-3">
                        <a href="/detail/{{ $data->id }}" style="text-decoration: none;">
                            <div class="card mb-3" style="border-radius:10px; border:none">
                                <img src="{{ asset('gambar_resto/' . $data->thumbnail) }}" class="card-img-top"
                                    height="150" alt="..." style="border-radius: 10px">
                                <div class="card-body" style="height: 17vh">
                                    <center>
                                        <p class="card-title fw-semibold"
                                            style="font-size: 1.1vmax; color:black; margin-top: -1.5vh;">
                                            {{ $data->namaresto }}
                                        </p>
                                        <p class="card-text" style="font-size: 0.9vmax; color:black;">{{ $data->address }}
                                        </p>
                                    </center>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
            {{-- </div> --}}
            <br>
            <div class="row">
                <div class="col-5">
                    <hr class="hr1">
                </div>
                <div class="col-2" align="center">
                    {{-- <a href="explore"><button class="btnexp">View More</button></a> --}}
                </div>
                <div class="col-5">
                    <hr class="hr1">
                </div>
            </div>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    </div>
@endsection
