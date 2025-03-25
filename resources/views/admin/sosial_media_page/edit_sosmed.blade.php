<div class="modal fade" id="editDataModalSM" tabindex="-1" aria-labelledby="editDataModalSMLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editDataModalSMLabel">
                    <i class="bi bi-file-earmark-plus me-2"></i>Edit Data
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="formEditDataSM" method="POST" action="" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <input type="hidden" id="edit_idSM" name="edit_idSM">
                    <div class="mb-3">
                        <label for="edit_namaSMU" class="form-label">Nama Sosmed UPT</label>
                        <input type="text" id="edit_namaSMU" name="edit_namaSMU"
                            class="form-control @error('edit_namaSMU') is-invalid @enderror">
                        <div class="invalid-feedback">Kode Services wajib diisi.</div>
                    </div>

                    <div class="mb-3">
                        <label for="edit_namaSM" class="form-label">Nama Sosmed</label>
                        <input type="text" id="edit_namaSM" name="edit_namaSM"
                            class="form-control @error('edit_namaSM') is-invalid @enderror">
                        <div class="invalid-feedback">Nama Services wajib diisi.</div>
                    </div>

                    <div class="mb-3">
                        <label for="edit_linkSM" class="form-label">Link Sosmed</label>
                        <input type="text" id="edit_linkSM" name="edit_linkSM"
                            class="form-control @error('edit_linkSM') is-invalid @enderror">
                        <div class="invalid-feedback">Deskripsi Services wajib diisi.</div>
                    </div>

                    <div class="mb-3">
                        <label for="edit_fotoSM" class="form-label">Foto Sosmed</label>
                        <div class="image-preview" id="imagePreview">
                            <img src="" alt="Image Preview" id="edit_previewImgSM">
                        </div>
                        <div class="input-group">
                            <input type="file" class="form-control" id="edit_fotoSM" name="edit_fotoSM"
                                accept="image/*" onchange="previewImage(event)">
                        </div>
                        <small class="form-text text-muted">Format: JPG, PNG, atau JPEG. Maksimal 2MB.</small>
                    </div>

                    <div class="mb-3">
                        <label for="edit_statusSM" class="form-label">Status</label>
                        <select class="form-select" id="edit_statusSM" name="edit_statusSM">
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
    function openEditModalSM(data) {
        document.getElementById("edit_idSM").value = data.id;
        document.getElementById("edit_namaSMU").value = data.nama_sosmed_upt;
        document.getElementById("edit_namaSM").value = data.nama_sosmed;
        document.getElementById("edit_linkSM").value = data.link_sosmed;
        document.getElementById("edit_statusSM").value = data.status;
        document.getElementById("formEditDataSM").action = "/master/sosmed-ubah/" + data.id;

        if (data.foto_sosmed) {
            document.getElementById("edit_previewImgSM").src = "/storage/" + data.foto_sosmed;
            document.getElementById("edit_previewImgSM").style.display = "block";
        } else {
            document.getElementById("edit_previewImgSM").src = "";
            document.getElementById("edit_previewImgSM").style.display = "none";
        }

        var myModal = new bootstrap.Modal(document.getElementById('editDataModalSM'));
        myModal.show();
    }
</script>



<script>
    function previewImage(event) {
        const reader = new FileReader();
        const image = document.getElementById('edit_previewImgSM');
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
        document.getElementById("formEditDataSM").addEventListener("submit", function(event) {
            let isValid = true;

            const namaSM = document.getElementById("edit_namaSMU");
            const nama = document.getElementById("edit_namaSM");
            const link = document.getElementById("edit_linkSM");
            const foto = document.getElementById("edit_fotoSM");
            const status = document.getElementById("edit_statusSM");

            if (namaSM.value.trim() === "") {
                namaSM.classList.add("is-invalid");
                isValid = false;
            } else {
                namaSM.classList.remove("is-invalid");
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
