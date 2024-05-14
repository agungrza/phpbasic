<?php
    require 'functions.php';

    // memanggil function
    $mahasiswa = query("SELECT * FROM mahasiswa");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Basic</title>
    <link href="/css/style.css" rel="stylesheet">
    <link href="https://www.php.net/favicon.ico?v=2" rel="icon">
</head>
<body>
    <a href="create.php">Tambah Data Mahasiswa</a>
    <table border="1" cellpadding="3" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>NRP</th>
            <th>Nama</th>
            <th>Email</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach($mahasiswa as $row) : ?>
            <tr>
                <td><?= $i++ ?></td>
                <td>
                    <a href="">ubah</a> |
                    <a href="">hapus</a>
                </td>
                <td><img src="<?= $row["gambar"] ?>"></td>
                <td><?= $row["nrp"] ?></td>
                <td><?= $row["nama"] ?></td>
                <td><?= $row["email"] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>