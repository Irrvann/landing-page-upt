<div class="modal fade" id="editDataModalC" tabindex="-1" aria-labelledby="editDataModalCLabel"
aria-hidden="true">
<div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="editDataModalCLabel">
                <i class="bi bi-file-earmark-plus me-2"></i>Edit Data 
            </h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form id="formEditDataC" method="POST" action=""
                enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <input type="hidden" id="edit_idC" name="edit_idC">
                <div class="mb-3">
                    <label for="edit_nimC" class="form-label">NIM Admin</label>
                    <input type="text" id="edit_nimC" name="edit_nimC"
                        class="form-control @error('edit_nimC') is-invalid @enderror">
                    <div class="invalid-feedback">NIM wajib diisi.</div>
                </div>

                <div class="mb-3">
                    <label for="edit_namaC" class="form-label">Nama Admin</label>
                    <input type="text" id="edit_namaC" name="edit_namaC"
                        class="form-control @error('edit_namaC') is-invalid @enderror">
                    <div class="invalid-feedback">Nama wajib diisi.</div>
                </div>

                <div class="mb-3">
                    <label for="edit_linkC" class="form-label">Link WA Admin</label>
                    <input type="text" id="edit_linkC" name="edit_linkC"
                        class="form-control @error('edit_linkC') is-invalid @enderror">
                    <div class="invalid-feedback">Nama Foto wajib diisi.</div>
                </div>

                <div class="mb-3">
                    <label for="edit_statusC" class="form-label">Status</label>
                    <select class="form-select" id="edit_statusC" name="edit_statusC">
                        <option value="" selected disabled>Pilih status</option>
                        <option value="aktif">Aktif</option>
                        <option value="tidak aktif">Non-Aktif</option>
                    </select>
                    <div class="invalid-feedback">Pilih status terlebih dahulu.</div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                        <i class="bi bi-x-circle me-1"></i> Batal
                    </button>
                    <button type="submit" class="btn btn-success">
                        <i class="bi bi-save me-1"></i> Simpan
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>

<script>
    function openEditModalC(id, nim, nama, link, status) {
        
        document.getElementById("edit_idC").value = id;
        document.getElementById("edit_nimC").value = nim;
        document.getElementById("edit_namaC").value = nama;
        document.getElementById("edit_linkC").value = link;
        document.getElementById("edit_statusC").value = status;
        document.getElementById("formEditDataC").action = "/master/kontak-ubah/" + id;

        var myModal = new bootstrap.Modal(document.getElementById('editDataModalC'));
        myModal.show();
    }
</script>


<script>
    document.addEventListener("DOMContentLoaded", function() {
        document.getElementById("formEditDataC").addEventListener("submit", function(event) {
            let isValid = true;

            const nim = document.getElementById("edit_nimC");
            const nama = document.getElementById("edit_namaC");
            const link = document.getElementById("edit_linkC");
            const status = document.getElementById("edit_statusC");

            if (nim.value.trim() === "") {
                nim.classList.add("is-invalid");
                isValid = false;
            } else {
                nim.classList.remove("is-invalid");
            }

            if (nama.value.trim() === "") {
                nama.classList.add("is-invalid");
                isValid = false;
            } else {
                nama.classList.remove("is-invalid");
            }

            if (link.value.trim() === "") {
                link.classList.add("is-invalid");
                isValid = false;
            } else {
                link.classList.remove("is-invalid");
            }

            if (status.value === "") {
                status.classList.add("is-invalid");
                isValid = false;
            } else {
                status.classList.remove("is-invalid");
            }
            if (!isValid) {
                event.preventDefault();
            }
        });
    });
</script>
