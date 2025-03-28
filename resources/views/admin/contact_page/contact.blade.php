@extends('layout.app')

@section('content')

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
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
                        <p class="text-subtitle text-muted">Master Data Contact</p>
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
                        <h5 class="card-title">Halaman Kontak</h5>
                        <a href="" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#tambahDataCModal">
                            <i class="bi bi-plus-circle me-1"></i>Tambah Data
                        </a>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped" id="table1">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>NIM Admin</th>
                                    <th>Nama Admin</th>
                                    {{-- <th>Link WA Admin</th> --}}
                                    <th>Waktu</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            @if (count($contact) < 1)
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
                                    @foreach ($contact as $c)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $c->nim }}</td>
                                            <td>{{ $c->nama }}</td>
                                            {{-- <td>{{ $c->link }}</td> --}}
                                            <td>{{ $c->created_at }}</td>
                                            <td>
                                                @if ($c->status == 'aktif')
                                                    <span class="badge bg-success">Aktif</span>
                                                @else
                                                    <span class="badge bg-danger">Tidak Aktif</span>
                                                @endif
                                            </td>
                                            <td>
                                                <span role="button" class="badge bg-primary" style="cursor: pointer;"
                                                    onclick="openDetailModalC('{{ $c->id }}', '{{ $c->nama }}', '{{ $c->link }}')">
                                                    detail
                                                </span>
                                                <span role="button" style="cursor: pointer" class="badge bg-warning" onclick="openEditModalC('{{ $c->id }}', '{{ $c->nim }}', '{{ $c->nama }}', '{{ $c->link }}', '{{ $c->status }}')" >
                                                    Edit
                                                </span> 
                                                <span type="button" class="badge bg-danger" style="cursor: pointer" data-bs-toggle="modal"
                                                    data-bs-target="#konfirmasiDelete-{{ $c->id }}">
                                                    Hapus
                                                </span>
                                            </td>
                                        </tr>
                                        @include('admin.contact_page.confirm_delete')
                                    @endforeach
                                </tbody>
                            @endif
                        </table>
                    </div>
                </div>
            </section>
        </div>

        @include('admin.contact_page.tambah_contact')
        @include('admin.contact_page.edit_contact')
        @include('admin.contact_page.detail_contact')

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


    @if (session('ubah'))
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
                title: "Data Berhasil DiUbah"
            });
        </script>
    @endif
@endsection
