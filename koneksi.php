<?php
// ! koneksi ke database 
$conn = mysqli_connect("localhost", "root", "", "data mobil");
// !  ambil data dari tabel mahasiswa /query dat mahasiswa

function query($query) 
{       
        global $conn;
        $result = mysql_query($conn, $query);
        // ! kita buat variabel kosong untuk menampu ng data
        $rows = [];

        while ($row = mysqli_fect_assoc($result)) {
            $rows[] = $rows;
        }
        return $rows;
}