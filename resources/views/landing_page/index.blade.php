@extends('layouts.landing')

@section('content')
    {{-- <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="btn-group float-right">
                    <ol class="breadcrumb hide-phone p-0 m-0">
                        <li class="breadcrumb-item"><a href="#">Aplikasi Film</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
                <h4 class="page-title">Dashboard</h4>
            </div>
        </div>
    </div> --}}

    {{-- <div class="card m-b-30"> --}}
    {{-- <div class="card-body"> --}}
    <div class="mt-5 mb-5">
        <center>
            <h5>Segera Hadir</h5>
        </center>
    </div>
    <div class="col-md-12">
        <div class="row">
            @foreach ($segera_hadir as $sh)
                <div class="col-md-4 col-lg-3">
                    <div class="card m-b-30">
                        <img class="card-img-top img-fluid text-center" src="{{ asset('images/' . $sh->gambar) }}"
                            alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title font-20 mt-0">{{ $sh->judul_film }}</h4>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div class="mt-5 mb-5">
        <center>
            <h5>Sedang Tayang</h5>
        </center>
    </div>
    <div class="row">
        @foreach ($sedang_tayang as $st)
            <div class="col-md-4 col-lg-3">
                <div class="card m-b-30">
                    <img class="card-img-top img-fluid text-center" src="{{ asset('images/' . $st->gambar) }}"
                        alt="Card image cap">
                    <div class="card-body">
                        <center>
                            <h4 class="card-title font-20 mt-0">{{ $st->judul_film }}</h4>
                            <form action="{{ url('/tambahFavorit') }}" method="get">
                                @csrf
                                <input type="hidden" name="id" value="{{ $st->id }}">
                                <button class="btn btn-primary mb-3">Tambah ke Daftar Favorit</button>
                            </form>
                            <a href="#" onclick="getdata({{ $st->id }})" id="{{ $st->id }}"
                                class="btn btn-success rating" data-toggle="modal" data-target="#rating">Beri Nilai Film
                                Ini</a>
                            <div class="p-4 text-center">
                                <h5 class="font-16 m-b-15">Readonly rating with a value</h5>
                                <span style="cursor: default;">
                                    <div class="rating-symbol" style="display: inline-block; position: relative;">
                                        <div class="rating-symbol-background mdi mdi-star-outline font-32 text-muted"
                                            style="visibility: hidden;"></div>
                                        <div class="rating-symbol-foreground"
                                            style="display: inline-block; position: absolute; overflow: hidden; left: 0px; right: 0px; width: auto;">
                                            <span class="mdi mdi-star font-32 text-primary"></span>
                                        </div>
                                    </div>
                                    <div class="rating-symbol" style="display: inline-block; position: relative;">
                                        <div class="rating-symbol-background mdi mdi-star-outline font-32 text-muted"
                                            style="visibility: hidden;"></div>
                                        <div class="rating-symbol-foreground"
                                            style="display: inline-block; position: absolute; overflow: hidden; left: 0px; right: 0px; width: auto;">
                                            <span class="mdi mdi-star font-32 text-primary"></span>
                                        </div>
                                    </div>
                                    <div class="rating-symbol" style="display: inline-block; position: relative;">
                                        <div class="rating-symbol-background mdi mdi-star-outline font-32 text-muted"
                                            style="visibility: hidden;"></div>
                                        <div class="rating-symbol-foreground"
                                            style="display: inline-block; position: absolute; overflow: hidden; left: 0px; right: 0px; width: auto;">
                                            <span class="mdi mdi-star font-32 text-primary"></span>
                                        </div>
                                    </div>
                                    <div class="rating-symbol" style="display: inline-block; position: relative;">
                                        <div class="rating-symbol-background mdi mdi-star-outline font-32 text-muted"
                                            style="visibility: visible;"></div>
                                        <div class="rating-symbol-foreground"
                                            style="display: inline-block; position: absolute; overflow: hidden; left: 0px; right: 0px; width: 0%;">
                                            <span></span>
                                        </div>
                                    </div>
                                    <div class="rating-symbol" style="display: inline-block; position: relative;">
                                        <div class="rating-symbol-background mdi mdi-star-outline font-32 text-muted"
                                            style="visibility: visible;"></div>
                                        <div class="rating-symbol-foreground"
                                            style="display: inline-block; position: absolute; overflow: hidden; left: 0px; right: 0px; width: 0px;">
                                            <span></span>
                                        </div>
                                    </div>
                                </span>
                            </div>
                            @include('landing_page.modalrating')
                        </center>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
