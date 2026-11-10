resources/views/pemohon/index.blade.php<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Kunjungan</title>
</head>
<body>

    <h1>Data Kunjungan</h1>

    <table border="1" cellpadding="10">
        <tr>
            <th>No</th>
            <th>ID Pemohon</th>
            <th>Tujuan</th>
            <th>Tanggal Waktu</th>
            <th>Konfirmasi Admin</th>
        </tr>

        @foreach ($kunjungan as $item)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $item->id_pemohon }}</td>
            <td>{{ $item->tujuannya }}</td>
            <td>{{ $item->tanggal_waktu }}</td>
            <td>{{ $item->konfrimasi_admin }}</td>
        </tr>
        @endforeach

    </table>

</body>
</html>