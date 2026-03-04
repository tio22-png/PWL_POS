<!DOCTYPE html>
<html lang="en">
<head>
    <title>Data Kategori Barang</title>
</head>
<body>
    <h1>Data Kategori Barang</h1>
    <table border="1" cellpadding="5" cellspacing="0">
        <thead>
            <tr>
                <th>Kode Kategori</th>
                <th>Nama Kategori</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $row)
                <tr>
                    <td>{{ $row->kategori_kode }}</td>
                    <td>{{ $row->kategori_nama }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>