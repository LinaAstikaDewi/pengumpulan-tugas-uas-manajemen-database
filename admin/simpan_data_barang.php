<?php
session_start();
if ($_SESSION['status'] != "sudah_login") {
 //melakukan pengalihan
 header("location:../login/login.php");
}
include "../config/koneksi.php";
$nama_barang = $_POST['nama_barang'];
$jumlah_barang = $_POST['jumlah_barang'];
$tgl_maaasuk_barang = $_POST['tgl_maasuk_barang'];
$insert_data = mysqli_query($koneksi, "INSERT INTO barang (nama_barang,jumlah_barang,tgl_maasuk_barang)
values ('$nama_barang','$jumlah_barang','$tgl_maasuk_barang')");
if ($insert_data) {
 header('location:data_barang.php?pesan=Data Berhasil Di simpan');
} else {
 header('location:data_barang.php?pesan=Data Gagal Di simpan');
}