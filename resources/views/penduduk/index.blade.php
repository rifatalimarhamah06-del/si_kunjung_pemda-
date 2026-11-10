
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Penduduk</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container mt-5">

        <h2 class="text-primary">Data Penduduk</h2>
        <p class="text-muted">Daftar data penduduk SI Kunjung Pemda</p>

        <div class="card shadow-sm">
            <div class="card-body">

                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover">
                        <thead class="table-primary">
                            <tr>
                                <th>No</th>
                                <th>Nama Penduduk</th>
                                <th>NIK</th>
                                <th>Alamat</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($penduduk as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->nama_penduduk }}</td>
                                <td>{{ $item->nik }}</td>
                                <td>{{ $item->alamat }}</td>
                            </tr>
                            @endforeach
                        </tbody>

                    </table>
                </div>

                <a href="/" class="btn btn-secondary">Kembali</a>

            </div>
        </div>

    </div>

</body>
</html>
