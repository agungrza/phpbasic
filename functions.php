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
?>