<div class="modal fade" id="tambahDataAkunModal" tabindex="-1" aria-labelledby="tambahDataAkunModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahDataAkunModalLabel">
                    <i class="bi bi-file-earmark-plus me-2"></i>Tambah Data Baru
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="mb-3">
                        <x-input-label for="nim" :value="__('Nim')" class="form-label" />
                        <x-text-input id="nim" name="nim" type="text" class="form-control"
                            :value="old('nim')" required autofocus autocomplete="nim" />
                        <x-input-error :messages="$errors->get('nim')" class="mt-2" />
                    </div>

                    <div class="mb-3">
                        <x-input-label for="nama" :value="__('Nama')" class="form-label" />
                        <x-text-input id="nama" name="nama" type="text" class="form-control"
                            :value="old('nama')" required autofocus autocomplete="nama" />
                        <x-input-error :messages="$errors->get('nama')" class="mt-2" />
                    </div>

                    <div class="mb-3">
                        <x-input-label for="password" :value="__('Password')" class="form-label" />
                        <x-text-input id="password" name="password" type="password" class="form-control" required
                            autocomplete="password"/>
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <div class="mb-3">
                        <x-input-label for="password_confirmation" :value="__('Confirm Password')" class="form-label" />
                        <x-text-input id="password_confirmation" name="password_confirmation" type="password" class="form-control"
                        required autofocus autocomplete="new-password" />
                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
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



