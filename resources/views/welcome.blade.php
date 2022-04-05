@extends('layouts.landing')

@section('content')
    <div class="row">
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
    </div>

    <div class="card m-b-30">
        <div class="card-body">
            <div class="row">
                <h5>Sedang Tayang</h5>
            </div>
            <div class="row">
                <div class="carousel-item">
                    <img src="..." alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>...</h5>
                        <p>...</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
{{-- <script>
    $('.carousel').carousel()
</script> --}}
