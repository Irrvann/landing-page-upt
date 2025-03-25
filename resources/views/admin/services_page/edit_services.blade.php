<div class="modal fade" id="editDataModalS" tabindex="-1" aria-labelledby="editDataModalSLabel"
aria-hidden="true">
<div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="editDataModalSLabel">
                <i class="bi bi-file-earmark-plus me-2"></i>Edit Data 
            </h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form id="formEditDataS" method="POST" action=""
                enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <input type="hidden" id="edit_idS" name="edit_idS">
                <div class="mb-3">
                    <label for="edit_kodeS" class="form-label">Kode Services</label>
                    <input type="text" id="edit_kodeS" name="edit_kodeS"
                        class="form-control @error('edit_kodeS') is-invalid @enderror">
                    <div class="invalid-feedback">Kode Services wajib diisi.</div>
                </div>

                <div class="mb-3">
                    <label for="edit_namaS" class="form-label">Nama Services</label>
                    <input type="text" id="edit_namaS" name="edit_namaS"
                        class="form-control @error('edit_namaS') is-invalid @enderror">
                    <div class="invalid-feedback">Nama Services wajib diisi.</div>
                </div>

                <div class="mb-3">
                    <label for="edit_deskripsiS" class="form-label">Deskripsi Services</label>
                    <input type="text" id="edit_deskripsiS" name="edit_deskripsiS"
                        class="form-control @error('edit_deskripsiS') is-invalid @enderror">
                    <div class="invalid-feedback">Deskripsi Services wajib diisi.</div>
                </div>

                <div class="mb-3">
                    <label for="edit_fotoS" class="form-label">Foto Services</label>
                    <div class="image-preview" id="imagePreview">
                        <img src="" alt="Image Preview" id="edit_previewImgS">
                    </div>
                    <div class="input-group">
                        <input type="file" class="form-control" id="edit_fotoS" name="edit_fotoS"
                            accept="image/*" onchange="previewImage(event)">
                    </div>
                    <small class="form-text text-muted">Format: JPG, PNG, atau JPEG. Maksimal 2MB.</small>
                </div>

                <div class="mb-3">
                    <label for="edit_statusS" class="form-label">Status</label>
                    <select class="form-select" id="edit_statusS" name="edit_statusS">
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
    function openEditModalS(id, kode, nama, deskripsi, foto, status) {

        document.getElementById("edit_idS").value = id;
        document.getElementById("edit_kodeS").value = kode;
        document.getElementById("edit_namaS").value = nama;
        document.getElementById("edit_deskripsiS").value = deskripsi;
        document.getElementById("edit_statusS").value = status;
        document.getElementById("formEditDataS").action = "/master/services-ubah/" + id;

        if (foto) {
            document.getElementById("edit_previewImgS").src = "/storage/" + foto;
            document.getElementById("edit_previewImgS").style.display = "block";
        } else {
            document.getElementById("edit_previewImgS").src = "";
            document.getElementById("edit_previewImgS").style.display = "none";
        }

        var myModal = new bootstrap.Modal(document.getElementById('editDataModalS'));
        myModal.show();
    }
</script>



<script>
    function previewImage(event) {
        const reader = new FileReader();
        const image = document.getElementById('edit_previewImgS');
        const text = document.getElementById('edit_previewTextS');

        reader.onload = function() {
            image.src = reader.result;
            image.style.display = 'block';
        }

        if (event.target.files[0]) {
            reader.readAsDataURL(event.target.files[0]);
        }
    }
</script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        document.getElementById("formEditDataS").addEventListener("submit", function(event) {
            let isValid = true;

            const kode = document.getElementById("edit_kodeS");
            const nama = document.getElementById("edit_namaS");
            const deskripsi = document.getElementById("edit_deskripsiS");
            const foto = document.getElementById("edit_fotoS");
            const status = document.getElementById("edit_statusS");

            if (kode.value.trim() === "") {
                kode.classList.add("is-invalid");
                isValid = false;
            } else {
                kode.classList.remove("is-invalid");
            }

            if (nama.value.trim() === "") {
                nama.classList.add("is-invalid");
                isValid = false;
            } else {
                nama.classList.remove("is-invalid");
            }

            if (deskripsi.value.trim() === "") {
                deskripsi.classList.add("is-invalid");
                isValid = false;
            } else {
                deskripsi.classList.remove("is-invalid");
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
