<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Settings Kunjungan</title>
</head>
<body>

    <h1>Pengaturan Kunjungan</h1>

    <table border="1" cellpadding="10">
        <tr>
            <th>No</th>
            <th>ID Jabatan Penduduk</th>
            <th>Tanggal</th>
            <th>Jam Aktif</th>
            <th>Jam Nonaktif</th>
            <th>Status</th>
        </tr>

        @foreach ($settings as $item)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $item->id_jabatan_penduduk }}</td>
            <td>{{ $item->tanggal }}</td>
            <td>{{ $item->jam_aktif }}</td>
            <td>{{ $item->jam_non_aktif }}</td>
            <td>{{ $item->status }}</td>
        </tr>
        @endforeach

    </table>

</body>
</html>