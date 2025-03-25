<div class="modal fade" id="editDataModalG" tabindex="-1" aria-labelledby="editDataModalGLabel"
aria-hidden="true">
<div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="editDataModalGLabel">
                <i class="bi bi-file-earmark-plus me-2"></i>Edit Data 
            </h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form id="formEditDataG" method="POST" action=""
                enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <input type="hidden" id="edit_idG" name="edit_idG">
                <div class="mb-3">
                    <label for="edit_kodeG" class="form-label">Kode Foto</label>
                    <input type="text" id="edit_kodeG" name="edit_kodeG"
                        class="form-control @error('edit_kodeG') is-invalid @enderror">
                    <div class="invalid-feedback">Kode Foto wajib diisi.</div>
                </div>

                <div class="mb-3">
                    <label for="edit_namaG" class="form-label">Nama Foto</label>
                    <input type="text" id="edit_namaG" name="edit_namaG"
                        class="form-control @error('edit_namaG') is-invalid @enderror">
                    <div class="invalid-feedback">Nama Foto wajib diisi.</div>
                </div>

                <div class="mb-3">
                    <label for="edit_fotoG" class="form-label">Foto </label>
                    <div class="image-preview" id="imagePreview">
                        <img src="" alt="Image Preview" id="edit_previewImgG">
                    </div>
                    <div class="input-group">
                        <input type="file" class="form-control" id="edit_fotoG" name="edit_fotoG"
                            accept="image/*" onchange="previewImageEG(event)">
                    </div>
                    <small class="form-text text-muted">Format: JPG, PNG, atau JPEG. Maksimal 2MB.</small>
                </div>

                <div class="mb-3">
                    <label for="edit_statusG" class="form-label">Status</label>
                    <select class="form-select" id="edit_statusG" name="edit_statusG">
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
    function openEditModalG(id, kode, nama, foto, status) {
        
        document.getElementById("edit_idG").value = id;
        document.getElementById("edit_kodeG").value = kode;
        document.getElementById("edit_namaG").value = nama;
        document.getElementById("edit_statusG").value = status;
        document.getElementById("formEditDataG").action = "/master/galeri-ubah/" + id;

        if (foto) {
            document.getElementById("edit_previewImgG").src = "/storage/" + foto;
            document.getElementById("edit_previewImgG").style.display = "block";
        } else {
            document.getElementById("edit_previewImgG").src = "";
            document.getElementById("edit_previewImgG").style.display = "none";
        }

        var myModal = new bootstrap.Modal(document.getElementById('editDataModalG'));
        myModal.show();
    }
</script>



<script>
    function previewImageEG(event) {
        const reader = new FileReader();
        const image = document.getElementById('edit_previewImgG');
        const text = document.getElementById('edit_previewTextG');

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
        document.getElementById("formEditDataG").addEventListener("submit", function(event) {
            let isValid = true;

            const kode = document.getElementById("edit_kodeG");
            const nama = document.getElementById("edit_namaG");
            const foto = document.getElementById("edit_fotoG");
            const status = document.getElementById("edit_statusG");

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
