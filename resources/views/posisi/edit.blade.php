<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Posisi</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>

    <div class="container mt-4">
        <h1>Edit Posisi</h1>
    </div>

    <div class="container mt-5">
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
                        <a href="{{ route('posisiIndex') }}" class="btn btn-outline-secondary mr-2"
                            role="button">Batal</a>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('deskrip');
    </script>

</body>

</html>
