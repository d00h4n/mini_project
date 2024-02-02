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
                <div class="col-lg-6 mx-auto">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('updateProfil') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('patch') <!-- Jangan lupa tambahkan method spoofing -->
    
                                <div class="mb-3">
                                    <label for="nama" class="form-label">Nama:</label>
                                    <input type="text" name="nama" class="form-control" value="{{ $user->nama }}" required>
                                </div>
    
                                <div class="mb-3">
                                    <label for="jenis_kelamin" class="form-label">Jenis Kelamin:</label>
                                    <select name="jenis_kelamin" class="form-select" required>
                                        <option value="Laki-laki" {{ $user->jenis_kelamin === 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                                        <option value="Perempuan" {{ $user->jenis_kelamin === 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                                    </select>
                                </div>
    
                                <div class="mb-3">
                                    <label for="tanggal_lahir" class="form-label">Tanggal Lahir:</label>
                                    <input type="date" name="tanggal_lahir" class="form-control" value="{{ $user->tanggal_lahir }}">
                                </div>
    
                                <div class="mb-3">
                                    <label for="alamat" class="form-label">Alamat:</label>
                                    <textarea name="alamat" class="form-control">{{ $user->alamat }}</textarea>
                                </div>
    
                                <div class="mb-3">
                                    <label for="username" class="form-label">Username:</label>
                                    <input type="text" name="username" class="form-control" value="{{ $user->username }}" required>
                                </div>
    
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email:</label>
                                    <input type="email" name="email" class="form-control" value="{{ $user->email }}" required>
                                </div>
    
                                <div class="mb-3">
                                    <label for="no_hp" class="form-label">Nomor HP:</label>
                                    <input type="tel" name="no_hp" class="form-control" value="{{ $user->no_hp }}">
                                </div>
    
                                <div class="mb-3">
                                    <label for="gambar" class="form-label">Gambar Profil:</label>
                                    <input type="file" name="gambar" class="form-control">
                                </div>
    
                                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    
    <!-- /.content -->
</div>

@endsection
