<div class="modal fade" id="tambahDataModal" tabindex="-1" aria-labelledby="tambahDataModalLabel"
aria-hidden="true">
<div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="tambahDataModalLabel">
                <i class="bi bi-file-earmark-plus me-2"></i>Tambah Data Baru
            </h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form id="formTambahData" method="POST" action="/master/tentang-tambah"
                enctype="multipart/form-data">
                @csrf
                @method('POST')
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama Foto</label>
                    <input type="text" id="nama" name="nama"
                        class="form-control @error('nama') is-invalid @enderror">
                    <div class="invalid-feedback">Nama foto wajib diisi.</div>
                </div>

                <div class="mb-3">
                    <label for="foto" class="form-label">Foto About</label>
                    <div class="image-preview" id="imagePreview">
                        <img src="" alt="Image Preview" id="previewImg">
                        <span id="previewText" class="text-muted">Preview gambar akan ditampilkan di sini</span>
                    </div>
                    <div class="input-group">
                        <input type="file" class="form-control" id="foto" name="foto"
                            accept="image/*" onchange="previewImage(event)">
                        <label class="input-group-text" for="foto"><i class="bi bi-upload"></i></label>
                        <div class="invalid-feedback">Harap unggah foto.</div>
                    </div>
                    <small class="form-text text-muted">Format: JPG, PNG, atau JPEG. Maksimal 2MB.</small>
                </div>

                <div class="mb-3">
                    <label for="status" class="form-label">Status</label>
                    <select class="form-select" id="status" name="status">
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
    function previewImage(event) {
        const reader = new FileReader();
        const image = document.getElementById('previewImg');
        const text = document.getElementById('previewText');

        reader.onload = function() {
            image.src = reader.result;
            image.style.display = 'block';
            text.style.display = 'none';
        }

        if (event.target.files[0]) {
            reader.readAsDataURL(event.target.files[0]);
        }
    }
</script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        document.getElementById("formTambahData").addEventListener("submit", function(event) {
            let isValid = true;
            
            const nama = document.getElementById("nama");
            const foto = document.getElementById("foto");
            const status = document.getElementById("status");

            if (nama.value.trim() === "") {
                nama.classList.add("is-invalid");
                isValid = false;
            } else {
                nama.classList.remove("is-invalid");
            }

            if (foto.files.length === 0) {
                foto.classList.add("is-invalid");
                isValid = false;
            } else {
                foto.classList.remove("is-invalid");
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
