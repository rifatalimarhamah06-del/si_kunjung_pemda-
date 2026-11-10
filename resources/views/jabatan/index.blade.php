<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Jabatan</title>
</head>
<body>

    <h1>Data Jabatan</h1>

    <table border="1" cellpadding="10">
        <tr>
            <th>No</th>
            <th>Nama Jabatan</th>
        </tr>

        @foreach ($jabatan as $item)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $item->nama_jabatan }}</td>
        </tr>
        @endforeach

    </table>

</body>
</html>