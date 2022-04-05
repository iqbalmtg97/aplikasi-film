@extends('layouts.landing')

@section('content')
    <div class="mt-5 mb-5">
        <center>
            <h5>Daftar Favorit</h5>
        </center>
    </div>
    <div class="row">
        @foreach ($favorite as $fav)
            <div class="col-md-4 col-lg-3">
                <div class="card m-b-30">
                    <img class="card-img-top img-fluid text-center" src="{{ asset('images/' . $fav->gambar) }}"
                        alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title font-20 mt-0">{{ $fav->judul_film }}</h4>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
