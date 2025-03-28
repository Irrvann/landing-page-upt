<div class="modal fade" id="detailModalGallery" tabindex="-1" aria-labelledby="detailModalGalleryLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="detailModalLabel">Detail Data About</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
                <h5 id="detailJudul"></h5>
                <img id="detailFoto" src="" alt="Foto" class="img-fluid mt-3" style="max-height: 300px;">
            </div>
        </div>
    </div>
</div>

<script>
    function openDetailModalG(id, nama, foto) {
        document.getElementById('detailJudul').innerText = nama;
        document.getElementById('detailFoto').src = "/storage/" + foto; 

        var detailModal = new bootstrap.Modal(document.getElementById('detailModalGallery'));
        detailModal.show();
    }
</script>