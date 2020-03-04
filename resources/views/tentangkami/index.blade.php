@extends('layouts.main')
@section('title','Tentang Kami')
@section('content')

<nav class="navbar navbar-expand-md   shadow-sm" style="background:#0073ff">
            <div class="container">
                <a class="navbar-brand text-white" href="{{ url('/') }}">
                    <img src="frontend/images/form.png" width="50" alt="">
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

        <h3 class="container">Selamat datang di Situs "Suara Rakyat"</h3>




@endsection