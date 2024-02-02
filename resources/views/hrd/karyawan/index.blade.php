@extends('hrd.layouts.app')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show d-flex justify-content-between" role="alert">
            <div>
                <i class="fa-solid fa-check mx-1"></i>
                {{ session('success') }}
            </div>
            <a class="btn-close" data-bs-dismiss="alert" aria-label="Close"></a>
        </div>
    @endif
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
                    <a href="{{ route('karyawanCreate') }}" class="btn btn-primary btn-md"><i class="fas fa-user-plus"></i>
                        Tambah Karyawan</a>
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
                                            <button type="button" class="btn btn-info btn-md" data-bs-toggle="modal"
                                                data-bs-target="#detailModal{{ $karyawan->id }}"
                                                onclick="showDetail({{ $karyawan->id }})">
                                                <i class="fas fa-info-circle"></i>
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
                                                <p><strong>Nama:</strong> {{ $karyawan->nama }}</p>
                                                <p><strong>Posisi:</strong> {{ $karyawan->posisi->n_posisi }}</p>
                                                <p><strong>Roles:</strong> {{ $karyawan->roles }}</p>
                                                <p><strong>Jenis Kelamin:</strong> {{ $karyawan->jenis_kelamin }}</p>
                                                <p><strong>Tanggal Lahir:</strong> {{ $karyawan->tanggal_lahir }}</p>
                                                <p><strong>Alamat:</strong> {{ $karyawan->alamat }}</p>
                                                <p><strong>Email:</strong> {{ $karyawan->email }}</p>
                                                <p><strong>Nomor HP:</strong> {{ $karyawan->no_hp }}</p>
                                                <!-- Add more details as needed -->
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

<script>
    function showDetail(employeeId) {
        $('#modalDetail' + employeeId).modal('show');
    }
</script>


@endsection
