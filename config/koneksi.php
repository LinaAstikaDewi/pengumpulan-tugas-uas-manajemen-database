<?php
$host = "localhost";
$username = "root";
$password = "";
$db = "inventaris_barang";
$koneksi = mysqli_connect($host, $username, $password, $db);

if (!$koneksi) {
    echo "koneksi ke database gagal";
}else{ 
    echo "koneksi ke database berjalan";
}

