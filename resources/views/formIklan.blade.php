@extends('template/navbar')
@section('content')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <script async src="https://instagram.com/static/bundles/es6/EmbedSDK.js/47c7ec92d91e.js"></script>

    <div class="formiklan">
        <div class="container-fluid iklan m-5">
            <div class="row-lg-12">
                <div class="col">
                    <h1 class="mt-5 text-white" align="center">Advertise</h1>
                    <hr style="border-top: 3px solid white; opacity: 1;">
                    <form action="/userIklan" method="POST" enctype="multipart/form-data" class="form_iklan">
                        @csrf
                        <div class="card mx-auto " style="height: 70vh; width: 80vw;">
                            <div class="card-body scrollY">
                                <div class="mb-3 mt-2">
                                    <label for="formGroupExampleInput" class="form-label">Cafe Or Resto Name</label>
                                    <input type="text" class="form-control" id="formGroupExampleInput"
                                        placeholder="Tempat Bersua Cafe..." name="nama_cafe">
                                </div>
                                <div class="mb-3">
                                    <label for="formGroupExampleInput" class="form-label">District</label>
                                    <select name="kawasan" class="form-select" aria-label="Default select example">
                                        <option selected hidden disabled>Choose District</option>
                                        @foreach ($data as $i)
                                            <option value="{{ $i['name'] }}">
                                                {{ $i['name'] }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="formGroupExampleInput" class="form-label">Address</label>
                                    <textarea type="text" class="form-control" id="formGroupExampleInput" placeholder="Jalan Tempat Bersua, Bandung..."
                                        name="lokasi_cafe"></textarea>
                                </div>
                                <div class="row">

                                    <div class="col-md-6">
                                        <label for="inputEmail4" class="form-label">Open Time</label>
                                        <input type="time" class="form-control" id="inputEmail4" name="waktubuka">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputPassword4" class="form-label">Closed Time</label>
                                        <input type="time" class="form-control" id="inputPassword4" name="waktututup">
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
                                    <input class="form-control" id="foto_thumb" name="foto_thumb" type="file"
                                        accept=".jpg, .png, .jpeg">
                                    <label class="input-group-text" for="inputGroupFile02"
                                        style="width: 10vw;">Thumbnail</label>
                                </div>
                                <div class="prev-thumb"></div>


                                <div class="input-group mt-3 mb-3">
                                    <input class="form-control" id="foto_slide" name="foto_slide[]" type="file" multiple
                                        accept=".jpg, .png, .jpeg">
                                    <label class="input-group-text" for="inputGroupFile02"
                                        style="width: 10vw;">Content</label>
                                </div>
                                <div class="prev-slide"></div>

                                <div class="input-group mt-3 mb-3">
                                    <input class="form-control" id="foto_menu" name="foto_menu[]" type="file"
                                        multiple accept=".jpg, .png, .jpeg">
                                    <label class="input-group-text" for="inputGroupFile02"
                                        style="width: 10vw;">Menu's</label>
                                </div>
                                <div class="prev-menu"></div>

                                <div class="form-check mt-3">
                                    <input class="form-check-input" type="radio" name="kategori" value="gratis"
                                        id="flexRadioDefault2" checked>
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        Free
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="kategori" value="berbayar"
                                        id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Boost Ads (Rp.100.000)
                                    </label>
                                </div>

                            </div>

                            <div class="d-grid gap-2 mx-4 mt-3 mb-3">
                                <button class="btn btn-primary btn-success" type="submit" name="post">Advertise
                                    Now</button>
                            </div>
                        </div>

                    </form>
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
@endsection
