@extends('hrd.layouts.app')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Daftar Karyawan</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Daftar Karyawan</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">

            <div class="card">
                <div class="card-header">
                    <a href="{{ route('karyawanCreate') }}" class="btn btn-primary"><i
                            class="material-icons">person_add</i>
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
                                                data-bs-target="#modalDetail{{ $karyawan->id }}">
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

                                <!-- Modal Detail -->
                                <div class="modal fade" id="modalDetail{{ $karyawan->id }}" tabindex="-1"
                                    aria-labelledby="modalDetailLabel{{ $karyawan->id }}" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="modalDetailLabel{{ $karyawan->id }}">
                                                    Detail Karyawan</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <!-- Isi detail karyawan di sini -->
                                                <p>Nama: {{ $karyawan->nama }}</p>
                                                <p>Posisi: {{ $karyawan->posisi->n_posisi }}</p>
                                                <p>Roles: {{ $karyawan->roles }}</p>
                                                <!-- Tambahkan informasi lainnya sesuai kebutuhan -->
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Tutup</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Modal Detail -->
                            @endforeach
                        </tbody>

                    </table>
                </div>
            </div>

        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection
