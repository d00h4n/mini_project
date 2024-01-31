<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Posisi</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    {{-- icon --}}
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>

<body>

    <div class="container mt-4">
        <h1>Daftar Posisi</h1>
    </div>

    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <a href="{{ route('posisiCreate') }}" class="btn btn-primary"><i class="material-icons">add_circle</i>
                    <span> Tambah Kategori</span></a>
            </div>

            <div class="card-body">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Kategori</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posisi as $posisi)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td>{{ $posisi->n_posisi }}</td>
                                <td>
                                    <div class="text-right">
                                        <button type="button" class="btn btn-info" data-bs-toggle="modal"
                                            data-bs-target="#detailModal{{ $posisi->id }}"
                                            onclick="showDetail({{ $posisi->id }})">
                                            <i class="material-icons">info</i>
                                        </button>
                                        <a href="{{ route('posisiEdit', ['posisi' => $posisi->id]) }}"
                                            class="btn btn-warning btn-sm" role="button"><i
                                                class="material-icons">border_color</i></a>
                                        <a href="{{ route('posisiDelete', ['posisi' => $posisi->id]) }}"
                                            class="btn btn-danger btn-sm" role="button"><i
                                                class="material-icons">delete</i></a>

                                    </div>
                                </td>
                            </tr>

                            <div class="modal fade" id="detailModal{{ $posisi->id }}" tabindex="-1"
                                aria-labelledby="detailModalLabel{{ $posisi->id }}" aria-hidden="true"
                                data-bs-backdrop="static" data-bs-keyboard="false">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="detailPosisiLabel">
                                                <i class="material-icons">info</i><span> Detail Posisi</span>
                                            </h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>

                                        <div class="modal-body">

                                            <ul class="list-group list-group-flush">

                                                <li class="list-group-item">
                                                    <h4>{{ $posisi->n_posisi }}</h4>
                                                </li>
                                                <li class="list-group-item">
                                                    <div class="row">

                                                        <h5>Deskripsi</h5>

                                                    </div>
                                                    <div class="row">
                                                        <p>{!! $posisi->deskrip ? $posisi->deskrip : '-' !!}</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Tutup</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </tbody>

                </table>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('js/sweetalert.min.js') }}"></script>

    {{-- Script tambahan inisialisasi datatables --}}
    <script>
        $(document).ready(function() {
            $(function() {
                $("#data-table").DataTable();
            });

            confirmDelete = function(button) {
                var url = $(button).data('url');
                swal({
                    'title': 'Konfirmasi Hapus',
                    'text': 'Apakah Kamu Yakin Ingin Menghapus Data Ini?',
                    'dangermode': true,
                    'buttons': true
                }).then(function(value) {
                    if (value) {
                        window.location = url;
                    }
                })
            }
        });
    </script>

</body>

</html>
