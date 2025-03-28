<!-- Modal Detail -->
<div class="modal fade" id="detailModalServices" tabindex="-1" aria-labelledby="detailModalServicesLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="detailModalLabel">Detail Data Services</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
                <h5 id="detailJudul"></h5>
                <img id="detailFoto" src="" alt="Foto" class="img-fluid mt-3" style="max-height: 300px;">
                <h6 id="detailDeskripsi" class="mt-3"></h6>
            </div>
        </div>
    </div>
</div>

<!-- Script untuk menampilkan modal dengan data -->
<script>
    function openDetailModalS(id, nama, deskripsi, foto) {
        document.getElementById('detailJudul').innerText = nama;
        document.getElementById('detailDeskripsi').innerText = deskripsi;
        document.getElementById('detailFoto').src = "/storage/" + foto; // Pastikan path foto sesuai

        var detailModal = new bootstrap.Modal(document.getElementById('detailModalServices'));
        detailModal.show();
    }
</script>