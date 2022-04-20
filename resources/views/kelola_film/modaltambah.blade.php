<div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="tambah" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Film</h5>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ url('/kelola_film/store') }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Judul Film</label>
                        <input type="text" class="form-control" name="judul_film" value="{{ old('judul_film') }}"
                            placeholder="Masukkan Judul Film ..." autofocus>
                        @error('judul_film')
                            <div class="text-danger ml-3 mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Genre</label>
                        <input type="text" class="form-control" name="genre" value="{{ old('genre') }}"
                            placeholder="Masukkan Genre ...">
                        @error('genre')
                            <div class="text-danger ml-3 mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="input-group-text" class="col-form-label">Status</label>
                        <div class="input-group mb-3">
                            <select name="status" class="custom-select" id="inputGroupSelect01"
                                value="{{ old('status') }}">
                                <option value="">--Pilih Status--</option>
                                <option value="Sedang Tayang" {{ old('status') ? 'selected' : '' }}>Sedang
                                    Tayang</option>
                                <option value="Segera Hadir" {{ old('status') ? 'selected' : '' }}>Segera Hadir
                                </option>
                            </select>
                        </div>
                        @error('status')
                            <div class="text-danger ml-3 mt-2">
                                {{ $message }}`
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Gambar</label>
                        <input type="file" class="form-control" name="gambar" value="{{ old('gambar') }}"
                            placeholder="Masukkan Gambar ...">
                        @error('gambar')
                            <div class="text-danger ml-3 mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>
