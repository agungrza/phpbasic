<?php
    require 'functions.php';

    // jika button submit ditekan
    if(isset($_POST["submit"])){
        // mengecek apakah berhasil
        if(create($_POST) > 0){
            echo "
                <script>
                    alert('Berhasil');
                    document.location.href = 'index.php';
                </script>
            ";
        }
        else{
            echo "
                <script>
                    alert('Gagal');
                    document.location.href = 'index.php';
                </script>
            ";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
    <link href="/css/style.css" rel="stylesheet">
    <link href="https://www.php.net/favicon.ico?v=2" rel="icon">
</head>
<body>
    <h1>Tambah Data Mahasiswa</h1>
    <form action="" method="POST">
        <ul>
            <li>
                <label for="nrp">NRP</label>
                <input type="text" name="nrp" id="nrp" required>
            </li>
            <li>
                <label for="nama">Nama</label>
                <input type="text" name="nama" id="nama" required>
            </li>
            <li>
                <label for="email">Email</label>
                <input type="email" name="email" id="email" required>
            </li>
            <li>
                <label for="gambar">Gambar</label>
                <input type="text" name="gambar" id="gambar">
            </li>
            <li>
                <button type="submit" name="submit">Create</button>
            </li>
        </ul>
    </form>
</body>
</html>