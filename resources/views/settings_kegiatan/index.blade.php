<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Settings Kegiatan</title>
</head>
<body>

    <h1>Pengaturan Kegiatan</h1>

    <table border="1" cellpadding="10">
        <tr>
            <th>No</th>
            <th>Tanggal Awal</th>
            <th>Tanggal Akhir</th>
            <th>ID Jabatan Penduduk</th>
            <th>Kegiatan</th>
        </tr>

        @foreach ($settings as $item)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $item->tanggal_awal }}</td>
            <td>{{ $item->tanggal_akhir }}</td>
            <td>{{ $item->id_jabatan_penduduk }}</td>
            <td>{{ $item->kegiatan }}</td>
        </tr>
        @endforeach

    </table>

</body>
</html>