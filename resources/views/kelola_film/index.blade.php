@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="btn-group float-right">
                    <ol class="breadcrumb hide-phone p-0 m-0">
                        <li class="breadcrumb-item"><a href="#">Aplikasi Film</a></li>
                        <li class="breadcrumb-item active">Kelola film</li>
                    </ol>
                </div>
                <h4 class="page-title">Kelola Film</h4>
            </div>
        </div>
    </div>

    <div class="card m-b-30">
        <div class="card-body">
            <table id="datatable" class="table table-striped">
                <a href="" class="btn btn-primary btn-md m-l-15 m-b-15" data-toggle="modal" data-target="#tambah"><i
                        class="mdi mdi-file-video"></i>
                    Tambah</a>
                @include('kelola_film/modaltambah')
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Judul Film</th>
                        <th>Genre</th>
                        <th>status</th>
                        <th>gambar</th>
                        <th>Aksi</th>
                    </tr>
                </thead>


                <tbody>
                    @foreach ($data as $data)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $data->judul_film }}</td>
                            <td>{{ $data->genre }}</td>
                            <td>{{ $data->status }}</td>
                            <td><img style="height: 120px; width: 90px; object-fit: cover; object-position: center;"
                                    class="card-img-top" src="{{ asset('images/' . $data->gambar) }}" alt=""></td>
                            <td>
                                <a href="#" onclick="getdata({{ $data->id }})" id="{{ $data->id }}"
                                    class="btn btn-success btn-md edit" data-toggle="modal" data-target="#edit"><span
                                        class="fa fa-gear"></span>
                                    Edit</a>
                                <a href="#" class="btn btn-danger btn-md delete" judul="{{ $data->judul_film }}"
                                    id="{{ $data->id }}"><span class="fa fa-trash"></span> Hapus</a>
                            </td>
                        </tr>
                    @endforeach
                    @include('kelola_film/modaledit')
                </tbody>
            </table>
        </div>
    </div>
@endsection
@section('footer')
    <script>
        $('.delete').click(function() {
            var Id = $(this).attr('id');
            var Judul = $(this).attr('judul');
            Swal.fire({
                    title: 'Yakin?',
                    text: "Mau Hapus Film " + Judul + "?",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Ya',
                })
                .then((result) => {
                    console.log(result);
                    if (result.value) {
                        window.location = "/kelola_film/destroy/" + Id + "";
                    }
                });
        });
    </script>
@endsection
