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
                                <td>{{ $karyawan->roles ? $karyawan->roles : 'none' }}</td>
                                <td>{{ $karyawan->jenis_kelamin ? $karyawan->jenis_kelamin : 'none' }}</td>
                                <td>{{ $karyawan->tanggal_lahir ? $karyawan->tanggal_lahir : 'none' }}</td>
                                <td>{{ $karyawan->alamat ? $karyawan->alamat : 'none' }}</td>
                                <td>
                                    <div class="text-right">

                                        <button type="button" class="btn btn-info" data-bs-toggle="modal"
                                            data-bs-target="#detailModal{{ $karyawan->id }}"
                                            onclick="showDetail({{ $karyawan->id }})">
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

                            <div class="modal fade" id="detailModal{{ $karyawan->id }}" tabindex="-1"
                                aria-labelledby="detailModalLabel{{ $karyawan->id }}" aria-hidden="true"
                                data-bs-backdrop="static" data-bs-keyboard="false">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="detailKaryawanLabel">
                                                <i class="material-icons">info</i><span> Detail Karyawan</span>
                                            </h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>

                                        <div class="modal-body">

                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item">
                                                    <div class="row">
                                                        <div class="col-4">
                                                            <img src="{{ $karyawan->gambar ? asset('/storage/karyawan/' . $karyawan->gambar) : asset('/storage/images/default-photo.png') }}"
                                                                class="rounded-circle img-thumbnail" alt="Cinque Terre"
                                                                width="100" height="100">
                                                        </div>
                                                        <div class="col-8">
                                                            <div class="row">
                                                                <h4>{{ $karyawan->nama }}</h4>
                                                            </div>
                                                            <div class="row">
                                                                <span>{{ $karyawan->posisi->n_posisi }}
                                                                    <b>({{ $karyawan->roles }})</b></span>
                                                                <span>{{ $karyawan->jenis_kelamin }}</span>
                                                                <span><i>{{ $karyawan->alamat }}</i></span>
                                                            </div>

                                                        </div>
                                                    </div>

                                                </li>
                                                <li class="list-group-item">
                                                    <div class="row">
                                                        <div class="col">
                                                            <span>Username</span>
                                                        </div>
                                                        <div class="col">
                                                            <span>: {{ $karyawan->username }}</span>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col">
                                                            <span>Email</span>
                                                        </div>
                                                        <div class="col">
                                                            <span style="color: blue">: {{ $karyawan->email }}</span>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col">
                                                            <span>No Hp</span>
                                                        </div>
                                                        <div class="col">
                                                            <span>: {{ $karyawan->no_hp }}</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <div class="row">
                                                        <div class="col">
                                                            <span>Tanggal Lahir</span>
                                                        </div>
                                                        <div class="col">
                                                            <span>: {{ $karyawan->tanggal_lahir }}</span>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col">
                                                            <span>Tanggal Masuk</span>
                                                        </div>
                                                        <div class="col">
                                                            <span>: {{ $karyawan->tanggal_masuk }}</span>
                                                        </div>
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


</body>

</html>
