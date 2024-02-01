@extends('karyawan.layouts.app')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Profil</h1>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container h-100" data-bs-theme="dark">
            <div class="row align-items-center h-100">
                <div class="col-lg-4 mx-auto">
                    <form action="{{ route('updateProfil') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('patch') <!-- Jangan lupa tambahkan method spoofing -->
                
                        <label for="nama">Nama:</label>
                        <input type="text" name="nama" value="{{ $user->nama }}" required><br>
                
                        <label for="jenis_kelamin">Jenis Kelamin:</label>
                        <select name="jenis_kelamin" required>
                            <option value="Laki-laki" {{ $user->jenis_kelamin === 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                            <option value="Perempuan" {{ $user->jenis_kelamin === 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                        </select><br>
                
                        <label for="tanggal_lahir">Tanggal Lahir:</label>
                        <input type="date" name="tanggal_lahir" value="{{ $user->tanggal_lahir }}"><br>
                
                        <label for="alamat">Alamat:</label>
                        <textarea name="alamat">{{ $user->alamat }}</textarea><br>
                
                        <label for="username">Username:</label>
                        <input type="text" name="username" value="{{ $user->username }}" required><br>
                
                        <label for="email">Email:</label>
                        <input type="email" name="email" value="{{ $user->email }}" required><br>
                
                        <label for="no_hp">Nomor HP:</label>
                        <input type="tel" name="no_hp" value="{{ $user->no_hp }}"><br>
                
                        <label for="gambar">Gambar Profil:</label>
                        <input type="file" name="gambar"><br>
                
                        <button type="submit">Simpan Perubahan</button>
                    </form>
                </div>
            </div>
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>

@endsection
