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
                    <h1 class="m-0">Daftar Posisi</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Daftar Posisi</li>
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
                    <a href="{{ route('posisiCreate') }}" class="btn btn-primary"><i
                            class="material-icons">add_circle</i>
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
                                    <div>
                                        <button type="button" class="btn btn-info btn-md" data-bs-toggle="modal"
                                                data-bs-target="#detailModal{{ $posisi->id }}"
                                                onclick="showDetail({{ $posisi->id }})">
                                                <i class="fas fa-info-circle"></i>
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

                            <div class="modal fade" id="modalDetail{{ $posisi->id }}" tabindex="-1"
                                aria-labelledby="modalDetailLabel{{ $posisi->id }}" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="modalDetailLabel{{ $posisi->id }}">
                                                Detail Posisi</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <p><strong>Posisi:</strong> {{ $posisi->n_posisi }}</p>
                                            <p><strong>Deskripsi:</strong> {{ $posisi->deskrip }}</p>

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