@extends('hrd.layouts.app')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
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
                                    <div class="text-right">
                                        <a href="" class="btn btn-secondary btn-sm" role="button"><i
                                                class="material-icons">info</i></a>
                                        <a href="{{ route('posisiEdit', ['posisi' => $posisi->id]) }}"
                                            class="btn btn-warning btn-sm" role="button"><i
                                                class="material-icons">border_color</i></a>
                                        <a href="{{ route('posisiDelete', ['posisi' => $posisi->id]) }}"
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

        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection