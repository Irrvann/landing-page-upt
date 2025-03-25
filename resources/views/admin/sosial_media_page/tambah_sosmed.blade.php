<div class="modal fade" id="tambahDataSMModal" tabindex="-1" aria-labelledby="tambahDataSMModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahDataSMModalLabel">
                    <i class="bi bi-file-earmark-plus me-2"></i>Tambah Data Baru
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="formTambahDataSM" method="POST" action="/master/sosmed-tambah" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <div class="mb-3">
                        <label for="namaSMMU" class="form-label">Nama Sosmed UPT</label>
                        <input type="text" id="namaSMMU" name="namaSMMU"
                            class="form-control @error('namaSMMU') is-invalid @enderror">
                        <div class="invalid-feedback">Nama Sosmed UPT wajib diisi.</div>
                    </div>

                    <div class="mb-3">
                        <label for="namaSM" class="form-label">Nama Sosmed</label>
                        <input type="text" id="namaSM" name="namaSM"
                            class="form-control @error('namaSM') is-invalid @enderror">
                        <div class="invalid-feedback">Nama Sosmed wajib diisi.</div>
                    </div>

                    <div class="mb-3">
                        <label for="linkSM" class="form-label">Link Sosmed</label>
                        <input type="text" id="linkSM" name="linkSM"
                            class="form-control @error('linkSM') is-invalid @enderror">
                        <div class="invalid-feedback">Link Sosmed wajib diisi.</div>
                    </div>

                    <div class="mb-3">
                        <label for="fotoSM" class="form-label">Foto Sosmed</label>
                        <div class="image-preview" id="imagePreviewS">
                            <img src="" alt="Image Preview" id="previewImgSM">
                            <span id="previewTextSM" class="text-muted">Preview gambar akan ditampilkan di sini</span>
                        </div>
                        <div class="input-group">
                            <input type="file" class="form-control" id="fotoSM" name="fotoSM" accept="image/*" onchange="previewImageS(event)">
                            <label class="input-group-text" for="fotoSM"><i class="bi bi-upload"></i></label>
                            <div class="invalid-feedback">Harap unggah foto.</div>
                        </div>
                        <small class="form-text text-muted">Format: JPG, PNG, atau JPEG. Maksimal 2MB.</small>
                    </div>

                    <div class="mb-3">
                        <label for="statusSM" class="form-label">Status</label>
                        <select class="form-select" id="statusSM" name="statusSM">
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
        const image = document.getElementById('previewImgSM');
        const text = document.getElementById('previewTextSM');

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
        document.getElementById("formTambahDataSM").addEventListener("submit", function(event) {
            let isValid = true;

            const namaSMU = document.getElementById("namaSMMU");
            const nama = document.getElementById("namaSM");
            const link = document.getElementById("linkSM");
            const foto = document.getElementById("fotoSM");
            const status = document.getElementById("statusSM");

            if (namaSMU.value.trim() === "") {
                namaSMU.classList.add("is-invalid");
                isValid = false;
            } else {
                namaSMU.classList.remove("is-invalid");
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
