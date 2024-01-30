<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Karyawan</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

</head>

<body>

    <div class="container">
        <h1>Tambah Karyawan</h1>
    </div>

    <div class="card">
        <div class="card-header">
            <h3>Form Karyawan</h3>
        </div>

        <form action="{{ route('karyawanStore') }}" method="POST" enctype="multipart/form-data">
            <div class="card-body">
                @csrf

                <div class="mb-3 row">
                    <label for="id_posisi" class="col-sm-2 col-form-label">Posisi</label>
                    <div class="col-sm-10">
                        <select class="form-select form-control" name="id_posisi" id="id_posisi">
                            @foreach ($posisi as $posisi)
                                <option value="{{ $posisi->id }}">{{ $posisi->n_posisi }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="roles" class="col-sm-2 col-form-label">Roles</label>
                    <div class="col-sm-10">
                        <select class="form-select form-control" name="roles" id="roles">
                            <option value="karyawan">Karyawan</option>
                            <option value="admin">Admin</option>
                        </select>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama" name="nama"
                            placeholder="Masukkan Nama">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="jenis_kelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                    <div class="col-sm-10">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="jenis_kelamin" id="laki-laki"
                                value="Laki-laki">
                            <label class="form-check-label" for="laki-laki">Laki-laki</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan"
                                value="Perempuan">
                            <label class="form-check-label" for="perempuan">Perempuan</label>
                        </div>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="tanggal_lahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" name="alamat" id="alamat" rows="2"></textarea>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="no_hp" class="col-sm-2 col-form-label">No HP</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="no_hp" name="no_hp">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="tanggal_masuk" class="col-sm-2 col-form-label">Tanggal Masuk</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" id="tanggal_masuk" name="tanggal_masuk">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="username" class="col-sm-2 col-form-label">Username</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="username" name="username"
                            placeholder="Masukkan Username">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="password" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="password" name="password"
                            aria-describedby="passwordHelpBlock">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="gambar" class="col-sm-2 col-form-label">Photo</label>
                    <div class="col-sm-10">
                        <input type="file" class="form-control form-group" name="gambar" id="gambar"
                            accept="image/*">
                        <div class="form-group" id="gambarPreviewContainer" style="display: none;">
                            <img id="gambarPreview" class="img-fluid" style="max-width: 100px; margin-top: 10px;" />
                        </div>
                    </div>
                </div>

            </div>

            <div class="card-footer">
                <div class="text-right">
                    <a href="{{ route('karyawanIndex') }}" class="btn btn-outline-secondary mr-2"
                        role="button">Batal</a>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </form>
    </div>

    <script>
        document.getElementById('gambar').addEventListener('change', function(event) {
            const input = event.target;
            const previewContainer = document.getElementById('gambarPreviewContainer');
            const preview = document.getElementById('gambarPreview');

            if (input.files && input.files[0]) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    preview.src = e.target.result;
                }
                reader.readAsDataURL(input.files[0]);
                previewContainer.style.display = 'block';
            }
        });
    </script>
</body>

</html>
