<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Posisi</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    {{-- icon --}}
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>

<body>

    <div class="container">
        <h1>Daftar Posisi</h1>
    </div>

    <div class="card">
        <div class="card-header">
            <a href="{{ route('posisiCreate') }}" class="btn btn-primary"><i class="material-icons">add_circle</i>
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

</body>

</html>
