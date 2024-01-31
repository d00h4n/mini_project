


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

    <div class="container mt-4">
        <h1>Edit Karyawan</h1>
    </div>

    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h3>Form Karyawan</h3>
            </div>

            <form action="{{ route('karyawanUpdate', ['karyawan' => $karyawan->id]) }}" method="POST"
                enctype="multipart/form-data">
                <div class="card-body">
                    @csrf

                    <div class="mb-3 row">
                        <label for="n_posisi" class="col-sm-2 col-form-label">Posisi</label>
                        <div class="col-sm-10">
                            <select class="form-select form-control" name="id_posisi" id="n_posisi">
                                @foreach ($posisi as $posisi)
                                    <option value="{{ $posisi->id }}"
                                        {{ $karyawan->id_posisi == $posisi->id ? 'selected' : '' }}>
                                        {{ $posisi->n_posisi }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="roles" class="col-sm-2 col-form-label">Roles</label>
                        <div class="col-sm-10">
                            <select class="form-select form-control" name="roles" id="roles">
                                <!-- Jika pengguna adalah admin -->
                                <option value="admin" {{ $karyawan->roles == 'admin' ? 'selected' : '' }}>Admin
                                </option>

                                <!-- Jika pengguna adalah karyawan -->
                                <option value="karyawan" {{ $karyawan->roles == 'karyawan' ? 'selected' : '' }}>Karyawan
                                </option>

                            </select>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama" name="nama"
                                placeholder="Masukkan Nama" required="required"
                                value="{{ old('nama', $karyawan->nama) }}">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="jenis_kelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                        <div class="col-sm-10">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jenis_kelamin" id="laki-laki"
                                    value="Laki-laki" {{ $karyawan->jenis_kelamin == 'Laki-laki' ? 'checked' : '' }}>
                                <label class="form-check-label" for="laki-laki">Laki-laki</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan"
                                    value="Perempuan" {{ $karyawan->jenis_kelamin == 'Perempuan' ? 'checked' : '' }}>
                                <label class="form-check-label" for="perempuan">Perempuan</label>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="tanggal_lahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir"
                                value="{{ old('tanggal_lahir', $karyawan->tanggal_lahir) }}">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" name="alamat" id="alamat" rows="2">{{ old('alamat', $karyawan->alamat) }}</textarea>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="no_hp" class="col-sm-2 col-form-label">No HP</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="no_hp" name="no_hp"
                                value="{{ old('no_hp', $karyawan->no_hp) }}">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="tanggal_masuk" class="col-sm-2 col-form-label">Tanggal Masuk</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" id="tanggal_masuk" name="tanggal_masuk"
                                value="{{ old('tanggal_masuk', $karyawan->tanggal_masuk) }}">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="username" class="col-sm-2 col-form-label">Username</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="username" name="username"
                                placeholder="Masukkan Username" required="required"
                                value="{{ old('username', $karyawan->username) }}">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="email" name="email"
                                required="required" value="{{ old('email', $karyawan->email) }}">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="password" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="password" name="password"
                                value="{{ old('password', $karyawan->password) }}">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="gambar" class="col-sm-2 col-form-label">Photo</label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control form-group" name="gambar" id="gambar"
                                accept="image/*" onchange="displayFilePreview(this)"
                                value="{{ $karyawan->gambar }}">
                            <span id="file-name">{{ $karyawan->gambar }}</span>
                            <div class="form-group" id="gambarPreviewContainer"
                                @if ($karyawan->gambar) style="display: block;" @else style="display: none;" @endif>
                                <img id="gambarPreview" class="img-fluid" style="max-width: 100px; margin-top: 10px;"
                                    src="{{ asset('storage/karyawan/' . $karyawan->gambar) }}" />
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
    </div>

    <script>
        function displayFilePreview(input) {
            var fileName = input.files[0].name;
            // document.getElementById('file-name').textContent = fileName;
            document.getElementById('file-name').style.display = 'none';

            // Tampilkan gambar preview
            var previewContainer = document.getElementById('gambarPreviewContainer');
            var previewImage = document.getElementById('gambarPreview');

            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    previewImage.src = e.target.result;
                    previewContainer.style.display = 'block';
                }

                reader.readAsDataURL(input.files[0]);
            } else {
                previewImage.src = '';
                previewContainer.style.display = 'none';
            }
        }

        // Panggil displayFilePreview saat halaman dimuat untuk menampilkan preview jika ada gambar
        document.addEventListener('DOMContentLoaded', function() {
            displayFilePreview(document.getElementById('gambar'));
        });
    </script>
</body>

</html>
