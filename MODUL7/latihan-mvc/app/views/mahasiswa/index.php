<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h2>Daftar Mahasiswa</h2>
    <p>Data ditampilkan melalui pola MVC sederhana.</p>

    <table border="1" cellpadding="8">
        <thead>
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Prodi</th>
        </tr>
        </thead>

        <tbody>
        <?php foreach ($data["mahasiswa"] as $index => $mhs) : ?>
        <tr>
            <td><?= $index + 1 ?></td>
            <td><?= $mhs["nim"] ?></td>
            <td><?= $mhs["nama"] ?></td>
            <td><?= $mhs["prodi"] ?></td>
        </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>