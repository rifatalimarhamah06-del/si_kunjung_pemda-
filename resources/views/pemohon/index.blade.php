<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Pemohon</title>
</head>
<body>

    <h1>Data Pemohon</h1>

    <table border="1" cellpadding="10">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Telepon</th>
            <th>Email</th>
        </tr>

        @foreach ($pemohon as $item)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $item->nama }}</td>
            <td>{{ $item->telepon }}</td>
            <td>{{ $item->email }}</td>
        </tr>
        @endforeach

    </table>

</body>
</html>