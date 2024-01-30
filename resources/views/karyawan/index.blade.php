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

    <div class="container">
        <h1>Daftar Karyawan</h1>
    </div>

    <div class="card">
        <div class="card-header">
            <a href="{{ route('karyawanCreate') }}" class="btn btn-primary"><i class="material-icons">person_add</i>
                <span> Tambah Karyawan</span></a>
        </div>

        <div class="card-body">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama</th>
                        <th>Gambar</th>
                        <th>Posisi</th>
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
                                    <a href="" class="btn btn-secondary btn-sm" role="button"><i
                                            class="material-icons">info</i></a>
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

</body>

</html>
