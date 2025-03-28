@extends('layout.app')

@section('content')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>



    <style>
        table.table td,
        table.table th {
            padding: 5px;
            white-space: nowrap;
        }

        table.table {
            table-layout: auto;
        }

        /* Modal Styling */
        .modal-header {
            background: linear-gradient(to right, #4e54c8, #8f94fb);
            color: white;
            border-radius: 5px 5px 0 0;
        }

        .modal-content {
            border: none;
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }

        .btn-success {
            background-color: #32d871;
            border: none;
            transition: all 0.3s ease;
        }

        .btn-success:hover {
            background-color: #32d871;
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .btn-secondary {
            background: linear-gradient(to right, #757F9A, #D7DDE8);
            border: none;
            transition: all 0.3s ease;
        }

        .btn-secondary:hover {
            background: linear-gradient(to right, #636d89, #c5cad5);
            transform: translateY(-2px);
        }

        .form-label {
            font-weight: 500;
            color: #495057;
        }

        .form-control:focus {
            border-color: #4e54c8;
            box-shadow: 0 0 0 0.25rem rgba(78, 84, 200, 0.25);
        }

        .image-preview {
            width: 100%;
            height: 200px;
            border: 2px dashed #ddd;
            border-radius: 5px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 15px;
            background-color: #f8f9fa;
            overflow: hidden;
        }

        .image-preview img {
            max-width: 100%;
            max-height: 100%;
            display: none;
        }
    </style>

    <div id="main">
        <header class="mb-3">
            <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>
        </header>

        <div class="page-heading">
            <div class="page-title">
                <div class="row">
                    <div class="col-12 col-md-6 order-md-1 order-last">
                        <h3>Master Data</h3>
                        <p class="text-subtitle text-muted">Master Data Akun</p>
                    </div>
                    <div class="col-12 col-md-6 order-md-2 order-first">
                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">

                        </nav>
                    </div>
                </div>
            </div>
            <section class="section">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="card-title">Halaman Akun</h5>
                        <a href="#" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#tambahDataAkunModal">
                            <i class="bi bi-plus-circle me-1"></i> Tambah Data
                        </a>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped" id="table1">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>NIM</th>
                                    <th>Nama</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            @if (count($akun) < 1)
                                <tbody>
                                    <tr>
                                        <td colspan="6">
                                            <p class="text-center pt-3">Tidak Ada Data</p>
                                        </td>
                                    </tr>
                                </tbody>
                            @else

                            <tbody>
                                @php
                                    $no = 1;
                                @endphp
                                @foreach ($akun as $d)
                                
                                
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $d->nim }}</td>
                                    <td>{{ $d->nama }}</td>
                                    <td>
                                        <span type="button" class="badge bg-danger" style="cursor: pointer" data-bs-toggle="modal"
                                            data-bs-target="#konfirmasiDeleteAkun-{{$d->id}}">
                                            Hapus
                                        </span>
                                    </td>
                                </tr>
                                @include('admin.akun_page.confirm_delete')
                                @endforeach
                            </tbody>
                            @endif
                        </table>
                    </div>
                </div>
            </section>
        </div>

        @include('admin.akun_page.tambah_akun')

        <footer>
            <div class="footer clearfix mb-0 text-muted">
                <div class="float-start">
                    <p>2025 &copy; UPT-Komputer | Iwima</p>
                </div>
                <div class="float-end">
                    <p>Crafted with <span class="text-danger"><i class="bi bi-heart-fill icon-mid"></i></span> by <a
                            href="https://saugi.me">pan</a></p>
                </div>
            </div>
        </footer>
    </div>

    @if (session('sukses'))
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            const Toast = Swal.mixin({
                toast: true,
                position: "top-end",
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.onmouseenter = Swal.stopTimer;
                    toast.onmouseleave = Swal.resumeTimer;
                }
            });

            Toast.fire({
                icon: "success",
                title: "Data Berhasil Ditambahkan"
            });
        </script>
    @endif

    @if (session('hapus'))
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            const Toast = Swal.mixin({
                toast: true,
                position: "top-end",
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.onmouseenter = Swal.stopTimer;
                    toast.onmouseleave = Swal.resumeTimer;
                }
            });

            Toast.fire({
                icon: "success",
                title: "Data Berhasil DiHapus"
            });
        </script>
    @endif

@endsection
