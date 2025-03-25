 <!-- Modal Edit Data -->
 <div class="modal fade" id="editDataModal" tabindex="-1" aria-labelledby="editDataModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editDataModalLabel">
                    <i class="bi bi-file-earmark-plus me-2"></i>Edit Data
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="formEditData" method="POST" action="" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <input type="hidden" id="edit_id" name="id">
                    <div class="mb-3">
                        <label for="edit_nama" class="form-label">Nama Foto</label>
                        <input type="text" id="edit_nama" name="nama" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="edit_foto" class="form-label">Foto About</label>
                        <div class="image-preview" id="imagePreview">
                            <img src="" alt="Image Preview" id="editPreviewImg">
                        </div>
                        <input type="file" class="form-control" id="edit_foto" name="foto" accept="image/*"
                            onchange="previewEditImage(event)">
                            <small class="form-text text-muted">Format: JPG, PNG, atau JPEG. Maksimal 2MB.</small>
                    </div>

                    <div class="mb-3">
                        <label for="edit_status" class="form-label">Status</label>
                        <select class="form-select" id="edit_status" name="status">
                            <option value="aktif">Aktif</option>
                            <option value="tidak aktif">Non-Aktif</option>
                        </select>
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
    function openEditModal(id, nama, foto, status) {
        // Set nilai input di modal edit
        document.getElementById("edit_id").value = id;
        document.getElementById("edit_nama").value = nama;
        document.getElementById("edit_status").value = status;
        document.getElementById("formEditData").action = "/master/tentang-ubah/" + id;

        // Set preview gambar jika ada
        if (foto) {
            document.getElementById("editPreviewImg").src = "/storage/" + foto;
            document.getElementById("editPreviewImg").style.display = "block";
        } else {
            document.getElementById("editPreviewImg").src = "";
            document.getElementById("editPreviewImg").style.display = "none";
        }

        // Tampilkan modal
        var myModal = new bootstrap.Modal(document.getElementById('editDataModal'));
        myModal.show();
    }
</script>


<script>
    function previewEditImage(event) {
        const reader = new FileReader();
        const image = document.getElementById('editPreviewImg');

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
        document.getElementById("formEditData").addEventListener("submit", function(event) {
            let isValid = true;

            const nama = document.getElementById("edit_nama");
            const status = document.getElementById("edit_status");

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
