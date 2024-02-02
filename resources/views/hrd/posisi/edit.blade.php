@extends('hrd.layouts.app')

@section('content')

<div class="content-wrapper">


    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Edit Posisi</h1>
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

    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h3>Form Posisi</h3>
            </div>

            <form action="{{ route('posisiUpdate', ['posisi' => $posisi->id]) }}" method="POST">
                <div class="card-body">
                    @csrf

                    <div class="mb-3 row">
                        <label for="n_posisi" class="col-sm-2 col-form-label">Nama Posisi</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="n_posisi" name="n_posisi"
                                placeholder="Masukkan Nama Posisi" required="required" value="{{ $posisi->n_posisi }}">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="deskrip" class="col-sm-2 col-form-label">Deskripsi</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" name="deskrip" id="deskrip" rows="3">{{ $posisi->deskrip }}</textarea>
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
</div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>    
@endsection

