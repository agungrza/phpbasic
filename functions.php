<?php
    // Koneksi ke database
    $conn = mysqli_connect("localhost", "root", "", "phpbasic");

    // function
    function query($query){
        global $conn;
        // query
        $result =  mysqli_query($conn, $query);
        // fetching data
        $rows = [];
        while($row = mysqli_fetch_assoc($result)){
            $rows[] = $row;
        }
        // return
        return $rows;
    }

    // function
    function create($data){
        global $conn;
        // ambil dan simpan data dari tiap elemen pada form ke variabel
        $nrp = htmlspecialchars($data["nrp"]);
        $nama = htmlspecialchars($data["nama"]);
        $email = htmlspecialchars($data["email"]);
        $gambar = htmlspecialchars($data["gambar"]);
        // query
        $query = "INSERT INTO mahasiswa VALUES('', $nrp, '$gambar', '$nama', '$email')";
        mysqli_query($conn, $query);
        // return
        return mysqli_affected_rows($conn);
    }
?>