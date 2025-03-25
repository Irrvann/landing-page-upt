<div class="modal fade" id="tambahDataSModal" tabindex="-1" aria-labelledby="tambahDataSModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahDataSModalLabel">
                    <i class="bi bi-file-earmark-plus me-2"></i>Tambah Data Baru
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="formTambahDataS" method="POST" action="/master/services-tambah" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <div class="mb-3">
                        <label for="kodeS" class="form-label">Kode Services</label>
                        <input type="text" id="kodeS" name="kodeS"
                            class="form-control @error('kodeS') is-invalid @enderror">
                        <div class="invalid-feedback">Kode Services wajib diisi.</div>
                    </div>

                    <div class="mb-3">
                        <label for="namaS" class="form-label">Nama Services</label>
                        <input type="text" id="namaS" name="namaS"
                            class="form-control @error('namaS') is-invalid @enderror">
                        <div class="invalid-feedback">Nama Services wajib diisi.</div>
                    </div>

                    <div class="mb-3">
                        <label for="deskripsiS" class="form-label">Deskripsi Services</label>
                        <input type="text" id="deskripsiS" name="deskripsiS"
                            class="form-control @error('deskripsiS') is-invalid @enderror">
                        <div class="invalid-feedback">Deskripsi Services wajib diisi.</div>
                    </div>

                    <div class="mb-3">
                        <label for="fotoS" class="form-label">Foto Services</label>
                        <div class="image-preview" id="imagePreviewS">
                            <img src="" alt="Image Preview" id="previewImgS">
                            <span id="previewTextS" class="text-muted">Preview gambar akan ditampilkan di sini</span>
                        </div>
                        <div class="input-group">
                            <input type="file" class="form-control" id="fotoS" name="fotoS" accept="image/*" onchange="previewImageS(event)">
                            <label class="input-group-text" for="fotoS"><i class="bi bi-upload"></i></label>
                            <div class="invalid-feedback">Harap unggah foto.</div>
                        </div>
                        <small class="form-text text-muted">Format: JPG, PNG, atau JPEG. Maksimal 2MB.</small>
                    </div>

                    <div class="mb-3">
                        <label for="statusS" class="form-label">Status</label>
                        <select class="form-select" id="statusS" name="statusS">
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
    function previewImageS(event) {
        const reader = new FileReader();
        const image = document.getElementById('previewImgS');
        const text = document.getElementById('previewTextS');

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
        document.getElementById("formTambahDataS").addEventListener("submit", function(event) {
            let isValid = true;

            const kode = document.getElementById("kodeS");
            const nama = document.getElementById("namaS");
            const deskripsi = document.getElementById("deskripsiS");
            const foto = document.getElementById("fotoS");
            const status = document.getElementById("statusS");

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
