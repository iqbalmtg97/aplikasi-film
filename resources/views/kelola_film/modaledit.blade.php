<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Film</h5>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ url('/kelola_film/update') }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <input type="hidden" id="id" name="id" value="">
                    {{-- <input type="hidden" id="oldImage" name="oldImage" value=""> --}}
                    <input type="hidden" id="url_getdata" name="url_getdata" value="{{ url('getdata/') }}">
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Judul Film</label>
                        <input type="text" class="form-control" id="judul_film" name="judul_film"
                            value="{{ old('judul_film') }}" placeholder="Masukkan Judul Film ...">
                        @error('judul_film')
                            <div class="text-danger ml-3 mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Genre</label>
                        <input type="text" class="form-control" id="genre" name="genre" value="{{ old('genre') }}"
                            placeholder="Masukkan Genre ...">
                        @error('genre')
                            <div class="text-danger ml-3 mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="loket" class="col-form-label">Status</label>
                        <div class="input-group mb-3">
                            <select name="status" id="status_" class="form-control">
                                <option value="">--Pilih Status--</option>
                                <option value="Sedang Tayang" {{ old('status') ? 'selected' : '' }}>Sedang Tayang
                                </option>
                                <option value="Segera Hadir" {{ old('status') ? 'selected' : '' }}>Segera Hadir
                                </option>
                            </select>
                            @error('status')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Gambar</label>
                        <input type="file" class="form-control" id="gambar" name="gambar"
                            value="{{ old('gambar') }}" placeholder="Masukkan Gambar ...">
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
<script>
    function getdata(id) {
        console.log(id)
        var url = $('#url_getdata').val() + '/' + id
        console.log(url);

        $.ajax({
            url: url,
            cache: false,
            success: function(response) {
                console.log(response);

                $('#id').val(response.id);
                $('#judul_film').val(response.judul_film);
                $('#genre').val(response.genre);
                $('#status_').val(response.status);
                $('#oldImage').val(response.gambar);
            }
        });
    }
</script>
