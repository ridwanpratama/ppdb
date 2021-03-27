<!DOCTYPE html>
<html>

<head>
    <title>PPDB SMK Wikrama Bogor</title>
    <!-- require meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shink-to-fit-no">

    <title>PPDB SMK Wikrama Bogor</title>

    <!-- bootstrap css -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
        integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <!-- my css -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">

</head>

<body>
    <!-- navbar -->

    <nav class="navbar navbar-expand-md navbar-light">
        <div class="container">
            <a class="navbar-brand" href="">PPDB SMK Wikrama Bogor</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu">
                <span class="navbar-toggler-icon"></span>
            </button>

                <div class="collapse navbar-collapse" id="menu">
                @if (Route::has('login'))
                    <div class="navbar-nav ml-auto">
                        @auth
                       <a class="nav-item nav-link active" href="{{ route('ppdb.index') }}">Beranda<span class="sr-only">(current)</span></a>
                       @else
                       <a class="nav-item nav-link" href="{{ route('register') }}">Daftar</a>
                       <a class="nav-item nav-link" href="{{ route('login') }}">Login</a>
                       @endauth
                </div>
                @endif

        </div>
    </nav>

    <!-- end navbar -->

    <!-- jumbotron -->
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="">Ilmu yang amaliah, amal yang ilmiah, akhlakul karimah</h1>
            <a href="{{ route('register') }}" class="btn btn-primary tombol">Daftar Sekarang</a>
        </div>
    </div>
    <!-- end jumbotron -->

    <!-- container -->
    <div class="container">

        <!-- deskripsi -->
        <div class="row deskripsi">
            <div class="row">
                <div class="col-lg">
                    <img src="assets/img/img2.jpg" class="img-fluid image">
                </div>
                <div class="col-lg">
                    <h3><b>Sekolah Berprestasi</b></h3>
                    <p>Ilmu yang amaliah, amal yang ilmiah, akhlakul karimah</p>
                </div>
            </div>
            <div class="m-5">
            </div>
            <div class="row">
                <div class="col-lg">
                    <h3><b>Sekolah Berkarakter</b></h3>
                    <p>Ilmu yang amaliah, amal yang ilmiah, akhlakul karimah</p>
                </div>
                <div class="col-lg">
                    <img src="assets/img/img3.jpg" class="img-fluid image">
                </div>
            </div>
            <div class="m-5">
            </div>
        </div>

        <!-- end deskripsi -->

        <!-- footer -->
        <div class="row footer">
            <div class="col text-center text-capitalize">
                <p> <b>Jl. Raya Wangun Kel. Sindangsari Kec. Bogor Timur Kota Bogor 16146</b> </p>
                <p>Email : prohumasi@smkwikrama.sch.id</p>
            </div>
        </div>
        <!-- end footer -->
    </div>
    <!-- end container -->

    <!--bootstrap.js-->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
        integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous">
    </script>
</body>

</html>