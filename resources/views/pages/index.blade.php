<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="frontend/libraries/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="frontend/styles/main.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300i,400,400i,500,700,800&display=swap" rel="stylesheet">
</head>
<body>  
 <nav class="navbar navbar-expand-md   shadow-sm" style="background:#0073ff">
            <div class="container">
                <a class="navbar-brand text-white" href="{{ url('/') }}">
                    Logo
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        
                    </ul>
                            <div class="text-center text-white" style="font-size:23px;">
                                Aduan Siswa
                            </div>

                    <!-- Right Side Of Navbar -->

                </div>
            </div>
        </nav>
        <div class="container">
            <div class="banner">

                    <div class="left-column">
                <h1>Aduan<span>Siswa</span></h1>
                <h3>Layanan Aspirasi<span> SMK Jakarta Pusat 1</span>
                </h3>
                <p>
                    AduanSiswa adalah Tempat untuk laporan siswa tentang Pembayaran SPP, Antrian Kantin Sehat, Dan Pelayanan Tata Usaha.
                </p>
                
                <div class="btn">
                <a href="{{url('/tentangkami')}}" class="button text-decoration-none">Tentang Kami</a>
                <a href="{{url('/create/laporkan')}}" class="button text-decoration-none">Laporkan Sekarang</a>
                    
                </div>
            </div>
            <div class="right-column">
                <img src="frontend/images/studentbg.jpg" class="img-fluid" alt="Responsive Image">
            </div>
        </div>
    </div>
</div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="frontend/libraries/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>