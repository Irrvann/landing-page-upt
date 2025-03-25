<div class="modal fade" id="tambahDataGModal" tabindex="-1" aria-labelledby="tambahDataGModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahDataGModalLabel">
                    <i class="bi bi-file-earmark-plus me-2"></i>Tambah Data Baru
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="formTambahDataG" method="POST" action="/master/galeri-tambah" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <div class="mb-3">
                        <label for="kodeG" class="form-label">Kode Foto</label>
                        <input type="text" id="kodeG" name="kodeG"
                            class="form-control @error('kodeG') is-invalid @enderror">
                        <div class="invalid-feedback">Kode Foto wajib diisi.</div>
                    </div>

                    <div class="mb-3">
                        <label for="namaG" class="form-label">Nama Foto</label>
                        <input type="text" id="namaG" name="namaG"
                            class="form-control @error('namaG') is-invalid @enderror">
                        <div class="invalid-feedback">Nama Foto wajib diisi.</div>
                    </div>

                    <div class="mb-3">
                        <label for="fotoG" class="form-label">Foto </label>
                        <div class="image-preview" id="imagePreviewG">
                            <img src="" alt="Image Preview" id="previewImgG">
                            <span id="previewTextG" class="text-muted">Preview gambar akan ditampilkan di sini</span>
                        </div>
                        <div class="input-group">
                            <input type="file" class="form-control" id="fotoG" name="fotoG" accept="image/*" onchange="previewImageG(event)">
                            <label class="input-group-text" for="fotoG"><i class="bi bi-upload"></i></label>
                            <div class="invalid-feedback">Harap unggah foto.</div>
                        </div>
                        <small class="form-text text-muted">Format: JPG, PNG, atau JPEG. Maksimal 2MB.</small>
                    </div>

                    <div class="mb-3">
                        <label for="statusG" class="form-label">Status</label>
                        <select class="form-select" id="statusG" name="statusG">
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
    function previewImageG(event) {
        const reader = new FileReader();
        const image = document.getElementById('previewImgG');
        const text = document.getElementById('previewTextG');

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
        document.getElementById("formTambahDataG").addEventListener("submit", function(event) {
            let isValid = true;

            const kode = document.getElementById("kodeG");
            const nama = document.getElementById("namaG");
            const foto = document.getElementById("fotoG");
            const status = document.getElementById("statusG");

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
