@extends('karyawan.layouts.app')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Dashboard Karyawan</h1>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Daftar Presensi</h3>
                        </div>

                        <div class="card-body">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Tanggal</th>
                                        <th>Jam Masuk</th>
                                        <th>Jam Pulang</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($presensiHistory as $index => $history)
                                        <tr>
                                            <td>{{ $index + 1 }}</td>
                                            <td>{{ $history->tanggal }}</td>
                                            <td>{{ $history->jam_masuk }}</td>
                                            <td>{{ $history->jam_pulang }}</td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="4">Belum ada data presensi.</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                </div>

                <div class="col-md-6">
    <div>
        @if ($presensiToday)
            <p>Anda sudah absen masuk pada {{ $presensiToday->jam_masuk }}.</p>
            @if (!$presensiToday->jam_pulang)
                <form action="{{ route('absenKeluar') }}" method="post">
                    @csrf
                    <button type="submit" class="btn btn-primary">Absen Keluar</button>
                </form>
            @else
                <p>Anda sudah absen keluar pada {{ $presensiToday->jam_pulang }}.</p>
            @endif
        @else
            <form action="{{ route('absenMasuk') }}" method="post">
                @csrf
                <button type="submit" class="btn btn-primary">Absen Masuk</button>
            </form>
        @endif
    </div>
</div>
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection
