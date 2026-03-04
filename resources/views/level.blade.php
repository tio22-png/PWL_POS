<!DOCTYPE html>
<html lang="id">
<head>
    <title>Data Level</title>
</head>
<body>
    <h2>Data Level Pengguna</h2>
    <table border="1" cellpadding="2" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Kode Level</th>
                <th>Nama Level</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $d)
            <tr>
                <td>{{ $d->level_id }}</td>
                <td>{{ $d->level_kode }}</td>
                <td>{{ $d->level_nama }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
