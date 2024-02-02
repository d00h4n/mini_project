@extends('hrd.layouts.app')

@section('content')

    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Tambah Posisi</h1>
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>

        <div class="card">
            <div class="card-header">
                <h3>Form Posisi</h3>
            </div>

            <form action="{{ route('posisiStore') }}" method="POST">
                <div class="card-body">
                    @csrf

                    <div class="mb-3 row">
                        <label for="n_posisi" class="col-sm-2 col-form-label">Nama Posisi</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="n_posisi" name="n_posisi"
                                placeholder="Masukkan Nama Posisi" required="required">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="deskrip" class="col-sm-2 col-form-label">Deskripsi</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" name="deskrip" id="deskrip" rows="3"></textarea>
                        </div>
                    </div>



                </div>

                <div class="card-footer">
                    <div class="text-right">
                        <a href="{{ route('posisiIndex') }}" class="btn btn-outline-secondary mr-2" role="button">Batal</a>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
@endsection
