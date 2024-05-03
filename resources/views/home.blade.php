<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initialscale=1.0">
    <title></title>
    @vite('resources/sass/app.scss')
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-primary">
        <div class="container">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <hr class="d-lg-none text-white-50">
                <ul class="navbar-nav flex-row flex-wrap">
                    <li class="nav-item col-2 col-md-auto"><a href="{{ route('home') }}" class="nav-link active">Home</a></li>
                    <li class="nav-item col-2 col-md-auto"><a href="{{ route('barang.index') }}" class="nav-link">List Barang</a></li>
                </ul>
                <hr class="d-lg-none text-white-50">
            </div>
        </div>
    </nav>
        <div class="container-sm my-5">
            <div class="row justify-content-center">
                <div class="p-5 bg-light rounded-3 col-xl-4 border">
                    <div class="mb-3 text-center">
                        <i class="bi bi-person-circle"></i>
                        <h3 class="mb-0">My Profile</h3>
                    </div>
                    <hr>
                    <div>
                        <h5 class="mb-0">Nama</h5>
                        <p>Laila Syafina Damayanti</p>
                    </div>
                    <div>
                        <h5 class="mb-0">NIM</h5>
                        <p>1204220076</p>
                    </div>
                    <div>
                        <h5 class="mb-0">Kelas</h5>
                        <p>IS-05-02</p>
                    </div>
                </div>
            </div>
        </div>
        @vite('resources/js/app.js')
    </body>
</html>
