<div class="modal fade" id="rating" tabindex="-1" role="dialog" aria-labelledby="rating" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Beri Nilai Film Ini</h5>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ url('/rating') }}" method="POST">
                    {{ csrf_field() }}
                    <input type="hidden" id="url_getdata" name="url_getdata" value="{{ url('getdatafilm/') }}">
                    <input type="hidden" id="id" name="film_id" value="">
                    <div class="p-4 text-center">
                        <h5 class="font-16 m-b-15">Rating</h5>
                        <input name="rating" type="hidden" class="rating"
                            data-filled="mdi mdi-star font-32 text-primary"
                            data-empty="mdi mdi-star-outline font-32 text-muted" value="">
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
            }
        });
    }
</script>
