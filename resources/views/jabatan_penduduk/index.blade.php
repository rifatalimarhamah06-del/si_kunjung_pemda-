<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Jabatan Penduduk</title>
</head>
<body>

    <h1>Data Jabatan Penduduk</h1>

    <table border="1" cellpadding="10">
        <tr>
            <th>No</th>
            <th>ID Jabatan</th>
            <th>ID Penduduk</th>
            <th>Status</th>
        </tr>

        @foreach ($jabatanPenduduk as $item)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $item->id_jabatan }}</td>
            <td>{{ $item->id_penduduk }}</td>
            <td>{{ $item->status }}</td>
        </tr>
        @endforeach

    </table>

</body>
</html>