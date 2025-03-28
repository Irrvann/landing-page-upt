<div class="modal fade" id="detailModalContact" tabindex="-1" aria-labelledby="detailModalContactLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="detailModalLabel">Detail Data About</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
                <h5 id="detailJudul"></h5>
                <h6 id="detailLink"></h6>
            </div>
        </div>
    </div>
</div>

<script>
    function openDetailModalC(id, nama, link) {
        document.getElementById('detailJudul').innerText = nama;
        document.getElementById('detailLink').innerText = link;

        var detailModal = new bootstrap.Modal(document.getElementById('detailModalContact'));
        detailModal.show();
    }
</script>