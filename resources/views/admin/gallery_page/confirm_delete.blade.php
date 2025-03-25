
<div class="modal fade" id="konfirmasiDelete-{{ $g->id }}" tabindex="-1" aria-labelledby="konfirmasiDeleteLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form method="POST" action="/master/galeri-hapus/{{ $g->id }}">
            @csrf
            @method('DELETE')
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="konfirmasiDeleteLabel">Konfirmasi Hapus</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Apakah Anda Yakin Ingin Menghapus Data?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">tutup</button>
                    <button type="sumbit" class="btn btn-outline-danger">Ya, Hapus</button>
                </div>
            </div>
        </form>
    </div>
</div>


