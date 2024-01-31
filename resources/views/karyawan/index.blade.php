<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Karyawan</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    {{-- icon --}}
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>

<body>

    <div class="container mt-4">
        <h1>Daftar Karyawan</h1>
    </div>

    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <a href="{{ route('karyawanCreate') }}" class="btn btn-primary"><i class="material-icons">person_add</i>
                    <span> Tambah Karyawan</span></a>
            </div>

            <div class="card-body">
                <table class="table table-hover mx-3 my-3 text-center">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama</th>
                            <th>Gambar</th>
                            <th>Posisi</th>
                            <th>Roles</th>
                            <th>Jenis Kelamin</th>
                            <th>Tanggal Lahir</th>
                            <th>Alamat</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($karyawan as $karyawan)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td>{{ $karyawan->nama }}</td>
                                <td>
                                    <img src="{{ $karyawan->gambar ? asset('/storage/karyawan/' . $karyawan->gambar) : asset('/storage/images/default-photo.png') }}"
                                        alt="Gambar" width="50" height="50">
                                </td>
                                <td>{{ $karyawan->posisi->n_posisi }}</td>
                                <td>{{ $karyawan->roles }}</td>
                                <td>{{ $karyawan->jenis_kelamin }}</td>
                                <td>{{ $karyawan->tanggal_lahir }}</td>
                                <td>{{ $karyawan->alamat }}</td>
                                <td>
                                    <div class="text-right">
                                        <button type="button" class="btn btn-info" data-bs-toggle="modal"
                                            data-bs-target="#staticBackdrop">
                                            <i class="material-icons">info</i>
                                        </button>
                                        <a href="{{ route('karyawanEdit', ['karyawan' => $karyawan->id]) }}"
                                            class="btn btn-warning btn-sm" role="button"><i
                                                class="material-icons">border_color</i></a>
                                        <a href="{{ route('karyawanDelete', ['karyawan' => $karyawan->id]) }}"
                                            class="btn btn-danger btn-sm" role="button"><i
                                                class="material-icons">delete</i></a>

                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">
                        Modal title
                    </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">...</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                        Close
                    </button>
                    <button type="button" class="btn btn-primary">Understood</button>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
