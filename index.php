<?php
// require 'koneksi.php';

// $mahasiswa = query("SELECT * FROM mahasiswa");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Data Mobil</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1 align="center">Daftar Data Mobil</h1>
    <table border="1" cellpadding="10" cellspasing="0" align="center"> 

            <th>No.</th>
            <th>Gambar</th>
            <th>Merk</th>
            <th>Warna</th>
            <th>No Plat</th>
            <th>Tahun pembuatan</th>
            <th>Aksi</th>
        </tr>
        <?php $i = 1;?>
        <tr>
            <td><?=$i;?></td>
            <td><img src="download (1).jpg" width="150"></td>
            <td>BR-V</td>
            <td>Putih</td>
            <td>DE 4862</td>
            <td>2014</td>
            <td>
                <a href=""><input type='button' class="btn-update"></a>
                <a href=""><input type="button" class="btn-delete"></a>
            </td>
        <tr>
            <?php $i = 2;?>
            <td><?=$i;?></td>
            <td><img src="download (2).jpg" width="150"></td>
            <td>City</td>
            <td>Abu-Abu</td>
            <td>HD 3002</td>
            <td>2017</td>
            <td>
                <a href="">ubah</a>
                <a href="">hapus</a>
            </td>
            
        <tr>
        <?php $i = 3;?>
            <td><?=$i;?></td>
            <td><img src="download.jpg"  width="150"></td>
            <td>Accord</td>
            <td>Hitam</td>
            <td>AU 5517</td>
            <td>2012</td>
            <td>
                <a href="">ubah</a>
                <a href="">hapus</a>
            </td>
            
        <tr>
        <?php $i = 4;?>
            <td><?=$i;?></td>
            <td><img src="kjjg.jpg"  width="150"></td>
            <td>merben</td>
            <td>Biru</td>
            <td>KA 0083</td>
            <td>2009</td>
            <td>
                <a href="">ubah</a>
                <a href="">hapus</a>
            </td>
        <tr>
        <?php $i = 5;?>
            <td><?=$i;?></td>
            <td><img src="th (1).jpg"  width="150"></td>
            <td>vancar</td>
            <td>Merah</td>
            <td>AC 9800</td>
            <td>2020</td>
            <td>
                <a href="">ubah</a>
                <a href="">hapus</a>
            </td>
            
        </tr>

    </table>
</body>
</html>
