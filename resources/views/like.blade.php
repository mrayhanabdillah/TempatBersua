@extends('template/navbar')
@section('content')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <script async src="https://instagram.com/static/bundles/es6/EmbedSDK.js/47c7ec92d91e.js"></script>

    <div class="like_wishlist">

        <div class="container-fluid" style="background-color: #ffffff; margin-top: 10vh;">
            <div class="col-lg p-5">
                <div class="row">
                    <div class="col">
                        <hr class="hr1">
                    </div>
                    <div class="col-6" align="center">
                        <h1>Your Wishlist At Tempat Bersua</h1><br>
                    </div>
                    <div class="col">
                        <hr class="hr1">
                    </div>
                </div>

                <div class="row row-cols-1 row-cols-md-5">
                    @foreach ($resto as $data)
                        <div class="col px-3">
                            <a href="/detail/{{ $data->resto->id }}" style="text-decoration: none;">
                                <div class="card mb-3" style="border-radius:10px; border:none">
                                    <img src="{{ asset('gambar_resto/' . $data->resto->thumbnail) }}" class="card-img-top"
                                        alt="..." style="border-radius: 10px">
                                    <div class="card-body" style="height: 10vh">
                                        <center>
                                            <p class="card-title" style="font-size: 1.1vmax; color:black;">
                                                {{ $data->resto->namaresto }}
                                            </p>
                                            <p class="card-text" style="font-size: 0.9vmax; color:black;">
                                                {{ $data->resto->address }}</p>
                                        </center>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
            {{-- <br> --}}
            <div class="row mx-4">
                <div class="col-5">
                    <hr class="hr1">
                </div>
                <div class="col-2" align="center">
                    <a href="explore"><button class="btnexp">View More</button></a>
                </div>
                <div class="col-5">
                    <hr class="hr1">
                </div>
            </div>
        </div>

    </div>
@endsection
