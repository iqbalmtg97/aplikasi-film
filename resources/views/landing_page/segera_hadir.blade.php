@extends('layouts.landing')

@section('content')
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
@endsection
