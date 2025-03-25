<div class="modal fade" id="tambahDataCModal" tabindex="-1" aria-labelledby="tambahDataCModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahDataCModalLabel">
                    <i class="bi bi-file-earmark-plus me-2"></i>Tambah Data Baru
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="formTambahDataC" method="POST" action="/master/kontak-tambah" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <div class="mb-3">
                        <label for="nimC" class="form-label">NIM Admin</label>
                        <input type="text" id="nimC" name="nimC"
                            class="form-control @error('nimC') is-invalid @enderror">
                        <div class="invalid-feedback">Kode Foto wajib diisi.</div>
                    </div>

                    <div class="mb-3">
                        <label for="namaC" class="form-label">Nama Admin</label>
                        <input type="text" id="namaC" name="namaC"
                            class="form-control @error('namaC') is-invalid @enderror">
                        <div class="invalid-feedback">Nama Foto wajib diisi.</div>
                    </div>

                    <div class="mb-3">
                        <label for="linkC" class="form-label">Link WA Admin</label>
                        <input type="text" id="linkC" name="linkC"
                            class="form-control @error('linkC') is-invalid @enderror">
                        <div class="invalid-feedback">Nama Foto wajib diisi.</div>
                    </div>

                    <div class="mb-3">
                        <label for="statusC" class="form-label">Status</label>
                        <select class="form-select" id="statusC" name="statusC">
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
    document.addEventListener("DOMContentLoaded", function() {
        document.getElementById("formTambahDataC").addEventListener("submit", function(event) {
            let isValid = true;

            const nim = document.getElementById("nimC");
            const nama = document.getElementById("namaC");
            const foto = document.getElementById("linkC");
            const status = document.getElementById("statusC");

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

            if (linkC.value.trim() === "") {
                linkC.classList.add("is-invalid");
                isValid = false;
            } else {
                linkC.classList.remove("is-invalid");
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
