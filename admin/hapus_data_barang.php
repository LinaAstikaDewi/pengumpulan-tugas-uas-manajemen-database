<?php
session_start();
if ($_SESSION['status'] != "sudah_login") {
 //melakukan pengalihan
 header("location:../login/login.php");
}
include "../config/koneksi.php";
$id_barang = $_GET['id_barang'];
$hapus_data = mysqli_query($koneksi, "DELETE FROM barang where id_barang=$id_barang");
if ($hapus_data) {
 header('location:data_barang.php?pesan=Data Berhasil Di Ubah');
} else {
 header('location:data_barang.php?pesan=Data Gagal Di Ubah');
}